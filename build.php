<?php
// This file will generate all required versions/tags of the docker files

require_once __DIR__.'/vendor/autoload.php';

use GuzzleHttp\Client;

// START of Config
$basePhpVersions = ['5.6', '7.0', '7.1', '7.2']; // Only add MAJOR.MINOR
$nodejsVersions = ['6', '8'];
// END of Config

// Variables to build up
$stablePhpVersions = [];
$qaPhpVersions = [];
$newDockerfilesCreated = 0;

// Get all PHP versions that we'd like to support
$guzzleClient = new Client([
    'timeout' => 5.0,
]);

// Get stable releases from PHP API
$majorPhpVersionRequested = [];
foreach ($basePhpVersions as $versionMajorMinor){
    if (preg_match('/^(\d+)\.\d+(?:\.\d+)?$/', $versionMajorMinor, $matches)){
        $versionMajor = $matches[1];
    } else {
        throw new Exception('Could not parse version format');
    }

    if (in_array($versionMajor, $majorPhpVersionRequested)){
        continue; // Already done
    }

    $response = $guzzleClient->get('https://secure.php.net/releases/index.php?json&max=100&version='.$versionMajor);

    if ($response->getStatusCode() !== 200){
        throw new Exception('Got response status code of '.$response->getStatusCode().' when trying to get PHP versions for major version '.$versionMajor);
    }

    $response = json_decode($response->getBody(), true);

    foreach ($response as $version => $versionData){
        foreach ($basePhpVersions as $basePhpVersion){
            $basePhpVersion = $basePhpVersion.'.';
            if (substr($version, 0, strlen($basePhpVersion) ) === $basePhpVersion){
                $stablePhpVersions[] = $version;
                continue 2;
            }
        }
    }

    $majorPhpVersionRequested[] = $versionMajor;
}
unset($majorPhpVersionRequested);

// Now get all QA releases
$response = $guzzleClient->get('https://qa.php.net/api.php?type=qa-releases&format=json');
$response = json_decode($response->getBody(), true);

foreach ($response as $version => $versionData){
    foreach ($basePhpVersions as $basePhpVersion){
        $basePhpVersion = $basePhpVersion.'.';
        if (substr($version, 0, strlen($basePhpVersion) ) === $basePhpVersion){
            $qaPhpVersions[] = $version;
            continue 2;
        }
    }
}

// Sort version numbers to help with determining the latest version
usort($stablePhpVersions, 'version_compare');
usort($qaPhpVersions, 'version_compare');

// Prepare twig
$loader = new Twig_Loader_Filesystem(__DIR__);
$twig = new Twig_Environment($loader);

// Loop through version combinations and create dockerfiles and tags if needed
foreach ($stablePhpVersions as $phpVersion) {
    foreach ($nodejsVersions as $nodejsVersion){
        $newDockerfilesCreated += ifRequiredGenerateDockerFileAndTag($twig, $phpVersion, $nodejsVersion);
    }
}

// Loop QA versions
foreach ($qaPhpVersions as $phpVersion) {
    foreach ($nodejsVersions as $nodejsVersion){
        $newDockerfilesCreated += ifRequiredGenerateDockerFileAndTag($twig, $phpVersion, $nodejsVersion);
    }
}

// Loop Major/Minor only versions
foreach ($basePhpVersions as $phpVersion) {
    foreach ($nodejsVersions as $nodejsVersion){
        $newDockerfilesCreated += ifRequiredGenerateDockerFileAndTag($twig, $phpVersion, $nodejsVersion);
    }
}

// Generate README.md file
if ($newDockerfilesCreated > 0) {
    $readmeContents = $twig->render('README.md.twig', [
        'basePhpVersions' => $basePhpVersions,
        'nodejsVersions' => $nodejsVersions,
        'stablePhpVersions' => $stablePhpVersions,
        'qaPhpVersions' => $qaPhpVersions,
    ]);
    file_put_contents(__DIR__.'/README.md', $readmeContents);

    // Commit readme
    runCommand('git add README.md');
    runCommand('git commit -m '.escapeshellarg('Updated readme with new '.$newDockerfilesCreated.' new version'.($newDockerfilesCreated == 1 ? '' : 's')));

    // Git push
    runCommand('git push --all origin');
}

echo 'All done'."\n";



function ifRequiredGenerateDockerFileAndTag($twig, string $phpVersion, string $nodejsVersion, ?string $tag = null){
    // Determine the tag
    if ($tag === null){
        $tag = 'php'.$phpVersion.'/nodejs'.$nodejsVersion;
    }

    // Check if we already have this tag
    try {
        runCommand('git rev-parse --verify '.$tag);
        // We have already tagged this version (as no exception thrown), skip
        echo 'Already done '.$tag.', so skipping'."\n";
        return 0;
    } catch (Exception $e){
        // We haven't yet tagged this version
        echo 'This is new...'."\n";
    }

    // Create branch and check it out
    runCommand('cd '.escapeshellarg(__DIR__));
    runCommand('git branch '.$tag);
    runCommand('git checkout '.$tag);

    // Generate and write dockerfile
    $dockerfileContents = $twig->render('Dockerfile.twig', [
        'php_version' => $phpVersion,
        'nodejs_version' => $nodejsVersion,
    ]);
    file_put_contents(__DIR__.'/Dockerfile', $dockerfileContents);

    // Git commit
    runCommand('git add Dockerfile');
    runCommand('git commit -m '.escapeshellarg('Updated Dockerfile for '.$tag));

    echo 'Generated '.$tag."\n";

    // Checkout master again
    runCommand('git checkout master');

    return 1;
}

function runCommand(string $command){
    passthru($command, $returnVar);
    if ($returnVar !== 0){
        throw new Exception('Command '.$command.' returned exit code '.$returnVar);
    }
}