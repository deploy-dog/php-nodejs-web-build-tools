# Docker image for building PHP based applications
Docker images for building PHP (and other) web applications. Ideal for use with deploy.dog, or in build/CI environments.

**This is currently a work in progress and so we do not recommending using it yet.**

## Image contents
* PHP (many versions, see below)
* Node.js (version 6 (LTS) or 8 (Latest), see below)
* npm
* Composer
* Grunt
* Gulp
* SASS (also covers SCSS)
* LESS
* webpack
* Browserify
* Yarn
* Bower

## PHP Extensions included
* pdo_mysql
* curl
* intl
* gd
* json
* mbstring
* zip
* xml
* soap
* bcmath
* apc/apcu
* bz2
* mcrypt

## Versions
We support recent many versions of PHP, each with the latest LTS version of Node.js and the latest stable version of Node.js. Simply tell docker (or [deploy.dog](https://deploy.dog)) the version of the image that you want.

### Looking for the latest patch release of a PHP version?
| PHP Version  | Node.js Version | Full Docker Image Name |
| ------------ | --------------- | ---------------------- |
| PHP 5.6 | Node.js 6 | `deploydog/php-nodejs-web-build-tools:php5.6/nodejs6` |
| PHP 5.6 | Node.js 8 | `deploydog/php-nodejs-web-build-tools:php5.6/nodejs8` |
| PHP 7.0 | Node.js 6 | `deploydog/php-nodejs-web-build-tools:php7.0/nodejs6` |
| PHP 7.0 | Node.js 8 | `deploydog/php-nodejs-web-build-tools:php7.0/nodejs8` |
| PHP 7.1 | Node.js 6 | `deploydog/php-nodejs-web-build-tools:php7.1/nodejs6` |
| PHP 7.1 | Node.js 8 | `deploydog/php-nodejs-web-build-tools:php7.1/nodejs8` |

### Looking for a specific patch release of a stable PHP version?
| PHP Version  | Node.js Version | Full Docker Image Name |
| ------------ | --------------- | ---------------------- |
| PHP 5.6.0 | Node.js 6 | `deploydog/php-nodejs-web-build-tools:php5.6.0/nodejs6` |
| PHP 5.6.0 | Node.js 8 | `deploydog/php-nodejs-web-build-tools:php5.6.0/nodejs8` |
| PHP 5.6.1 | Node.js 6 | `deploydog/php-nodejs-web-build-tools:php5.6.1/nodejs6` |
| PHP 5.6.1 | Node.js 8 | `deploydog/php-nodejs-web-build-tools:php5.6.1/nodejs8` |
| PHP 5.6.2 | Node.js 6 | `deploydog/php-nodejs-web-build-tools:php5.6.2/nodejs6` |
| PHP 5.6.2 | Node.js 8 | `deploydog/php-nodejs-web-build-tools:php5.6.2/nodejs8` |
| PHP 5.6.3 | Node.js 6 | `deploydog/php-nodejs-web-build-tools:php5.6.3/nodejs6` |
| PHP 5.6.3 | Node.js 8 | `deploydog/php-nodejs-web-build-tools:php5.6.3/nodejs8` |
| PHP 5.6.4 | Node.js 6 | `deploydog/php-nodejs-web-build-tools:php5.6.4/nodejs6` |
| PHP 5.6.4 | Node.js 8 | `deploydog/php-nodejs-web-build-tools:php5.6.4/nodejs8` |
| PHP 5.6.5 | Node.js 6 | `deploydog/php-nodejs-web-build-tools:php5.6.5/nodejs6` |
| PHP 5.6.5 | Node.js 8 | `deploydog/php-nodejs-web-build-tools:php5.6.5/nodejs8` |
| PHP 5.6.6 | Node.js 6 | `deploydog/php-nodejs-web-build-tools:php5.6.6/nodejs6` |
| PHP 5.6.6 | Node.js 8 | `deploydog/php-nodejs-web-build-tools:php5.6.6/nodejs8` |
| PHP 5.6.7 | Node.js 6 | `deploydog/php-nodejs-web-build-tools:php5.6.7/nodejs6` |
| PHP 5.6.7 | Node.js 8 | `deploydog/php-nodejs-web-build-tools:php5.6.7/nodejs8` |
| PHP 5.6.8 | Node.js 6 | `deploydog/php-nodejs-web-build-tools:php5.6.8/nodejs6` |
| PHP 5.6.8 | Node.js 8 | `deploydog/php-nodejs-web-build-tools:php5.6.8/nodejs8` |
| PHP 5.6.9 | Node.js 6 | `deploydog/php-nodejs-web-build-tools:php5.6.9/nodejs6` |
| PHP 5.6.9 | Node.js 8 | `deploydog/php-nodejs-web-build-tools:php5.6.9/nodejs8` |
| PHP 5.6.10 | Node.js 6 | `deploydog/php-nodejs-web-build-tools:php5.6.10/nodejs6` |
| PHP 5.6.10 | Node.js 8 | `deploydog/php-nodejs-web-build-tools:php5.6.10/nodejs8` |
| PHP 5.6.11 | Node.js 6 | `deploydog/php-nodejs-web-build-tools:php5.6.11/nodejs6` |
| PHP 5.6.11 | Node.js 8 | `deploydog/php-nodejs-web-build-tools:php5.6.11/nodejs8` |
| PHP 5.6.12 | Node.js 6 | `deploydog/php-nodejs-web-build-tools:php5.6.12/nodejs6` |
| PHP 5.6.12 | Node.js 8 | `deploydog/php-nodejs-web-build-tools:php5.6.12/nodejs8` |
| PHP 5.6.13 | Node.js 6 | `deploydog/php-nodejs-web-build-tools:php5.6.13/nodejs6` |
| PHP 5.6.13 | Node.js 8 | `deploydog/php-nodejs-web-build-tools:php5.6.13/nodejs8` |
| PHP 5.6.14 | Node.js 6 | `deploydog/php-nodejs-web-build-tools:php5.6.14/nodejs6` |
| PHP 5.6.14 | Node.js 8 | `deploydog/php-nodejs-web-build-tools:php5.6.14/nodejs8` |
| PHP 5.6.15 | Node.js 6 | `deploydog/php-nodejs-web-build-tools:php5.6.15/nodejs6` |
| PHP 5.6.15 | Node.js 8 | `deploydog/php-nodejs-web-build-tools:php5.6.15/nodejs8` |
| PHP 5.6.16 | Node.js 6 | `deploydog/php-nodejs-web-build-tools:php5.6.16/nodejs6` |
| PHP 5.6.16 | Node.js 8 | `deploydog/php-nodejs-web-build-tools:php5.6.16/nodejs8` |
| PHP 5.6.17 | Node.js 6 | `deploydog/php-nodejs-web-build-tools:php5.6.17/nodejs6` |
| PHP 5.6.17 | Node.js 8 | `deploydog/php-nodejs-web-build-tools:php5.6.17/nodejs8` |
| PHP 5.6.18 | Node.js 6 | `deploydog/php-nodejs-web-build-tools:php5.6.18/nodejs6` |
| PHP 5.6.18 | Node.js 8 | `deploydog/php-nodejs-web-build-tools:php5.6.18/nodejs8` |
| PHP 5.6.19 | Node.js 6 | `deploydog/php-nodejs-web-build-tools:php5.6.19/nodejs6` |
| PHP 5.6.19 | Node.js 8 | `deploydog/php-nodejs-web-build-tools:php5.6.19/nodejs8` |
| PHP 5.6.20 | Node.js 6 | `deploydog/php-nodejs-web-build-tools:php5.6.20/nodejs6` |
| PHP 5.6.20 | Node.js 8 | `deploydog/php-nodejs-web-build-tools:php5.6.20/nodejs8` |
| PHP 5.6.21 | Node.js 6 | `deploydog/php-nodejs-web-build-tools:php5.6.21/nodejs6` |
| PHP 5.6.21 | Node.js 8 | `deploydog/php-nodejs-web-build-tools:php5.6.21/nodejs8` |
| PHP 5.6.22 | Node.js 6 | `deploydog/php-nodejs-web-build-tools:php5.6.22/nodejs6` |
| PHP 5.6.22 | Node.js 8 | `deploydog/php-nodejs-web-build-tools:php5.6.22/nodejs8` |
| PHP 5.6.23 | Node.js 6 | `deploydog/php-nodejs-web-build-tools:php5.6.23/nodejs6` |
| PHP 5.6.23 | Node.js 8 | `deploydog/php-nodejs-web-build-tools:php5.6.23/nodejs8` |
| PHP 5.6.24 | Node.js 6 | `deploydog/php-nodejs-web-build-tools:php5.6.24/nodejs6` |
| PHP 5.6.24 | Node.js 8 | `deploydog/php-nodejs-web-build-tools:php5.6.24/nodejs8` |
| PHP 5.6.25 | Node.js 6 | `deploydog/php-nodejs-web-build-tools:php5.6.25/nodejs6` |
| PHP 5.6.25 | Node.js 8 | `deploydog/php-nodejs-web-build-tools:php5.6.25/nodejs8` |
| PHP 5.6.26 | Node.js 6 | `deploydog/php-nodejs-web-build-tools:php5.6.26/nodejs6` |
| PHP 5.6.26 | Node.js 8 | `deploydog/php-nodejs-web-build-tools:php5.6.26/nodejs8` |
| PHP 5.6.27 | Node.js 6 | `deploydog/php-nodejs-web-build-tools:php5.6.27/nodejs6` |
| PHP 5.6.27 | Node.js 8 | `deploydog/php-nodejs-web-build-tools:php5.6.27/nodejs8` |
| PHP 5.6.28 | Node.js 6 | `deploydog/php-nodejs-web-build-tools:php5.6.28/nodejs6` |
| PHP 5.6.28 | Node.js 8 | `deploydog/php-nodejs-web-build-tools:php5.6.28/nodejs8` |
| PHP 5.6.29 | Node.js 6 | `deploydog/php-nodejs-web-build-tools:php5.6.29/nodejs6` |
| PHP 5.6.29 | Node.js 8 | `deploydog/php-nodejs-web-build-tools:php5.6.29/nodejs8` |
| PHP 5.6.30 | Node.js 6 | `deploydog/php-nodejs-web-build-tools:php5.6.30/nodejs6` |
| PHP 5.6.30 | Node.js 8 | `deploydog/php-nodejs-web-build-tools:php5.6.30/nodejs8` |
| PHP 5.6.31 | Node.js 6 | `deploydog/php-nodejs-web-build-tools:php5.6.31/nodejs6` |
| PHP 5.6.31 | Node.js 8 | `deploydog/php-nodejs-web-build-tools:php5.6.31/nodejs8` |
| PHP 7.0.0 | Node.js 6 | `deploydog/php-nodejs-web-build-tools:php7.0.0/nodejs6` |
| PHP 7.0.0 | Node.js 8 | `deploydog/php-nodejs-web-build-tools:php7.0.0/nodejs8` |
| PHP 7.0.1 | Node.js 6 | `deploydog/php-nodejs-web-build-tools:php7.0.1/nodejs6` |
| PHP 7.0.1 | Node.js 8 | `deploydog/php-nodejs-web-build-tools:php7.0.1/nodejs8` |
| PHP 7.0.2 | Node.js 6 | `deploydog/php-nodejs-web-build-tools:php7.0.2/nodejs6` |
| PHP 7.0.2 | Node.js 8 | `deploydog/php-nodejs-web-build-tools:php7.0.2/nodejs8` |
| PHP 7.0.3 | Node.js 6 | `deploydog/php-nodejs-web-build-tools:php7.0.3/nodejs6` |
| PHP 7.0.3 | Node.js 8 | `deploydog/php-nodejs-web-build-tools:php7.0.3/nodejs8` |
| PHP 7.0.4 | Node.js 6 | `deploydog/php-nodejs-web-build-tools:php7.0.4/nodejs6` |
| PHP 7.0.4 | Node.js 8 | `deploydog/php-nodejs-web-build-tools:php7.0.4/nodejs8` |
| PHP 7.0.5 | Node.js 6 | `deploydog/php-nodejs-web-build-tools:php7.0.5/nodejs6` |
| PHP 7.0.5 | Node.js 8 | `deploydog/php-nodejs-web-build-tools:php7.0.5/nodejs8` |
| PHP 7.0.6 | Node.js 6 | `deploydog/php-nodejs-web-build-tools:php7.0.6/nodejs6` |
| PHP 7.0.6 | Node.js 8 | `deploydog/php-nodejs-web-build-tools:php7.0.6/nodejs8` |
| PHP 7.0.7 | Node.js 6 | `deploydog/php-nodejs-web-build-tools:php7.0.7/nodejs6` |
| PHP 7.0.7 | Node.js 8 | `deploydog/php-nodejs-web-build-tools:php7.0.7/nodejs8` |
| PHP 7.0.8 | Node.js 6 | `deploydog/php-nodejs-web-build-tools:php7.0.8/nodejs6` |
| PHP 7.0.8 | Node.js 8 | `deploydog/php-nodejs-web-build-tools:php7.0.8/nodejs8` |
| PHP 7.0.9 | Node.js 6 | `deploydog/php-nodejs-web-build-tools:php7.0.9/nodejs6` |
| PHP 7.0.9 | Node.js 8 | `deploydog/php-nodejs-web-build-tools:php7.0.9/nodejs8` |
| PHP 7.0.10 | Node.js 6 | `deploydog/php-nodejs-web-build-tools:php7.0.10/nodejs6` |
| PHP 7.0.10 | Node.js 8 | `deploydog/php-nodejs-web-build-tools:php7.0.10/nodejs8` |
| PHP 7.0.11 | Node.js 6 | `deploydog/php-nodejs-web-build-tools:php7.0.11/nodejs6` |
| PHP 7.0.11 | Node.js 8 | `deploydog/php-nodejs-web-build-tools:php7.0.11/nodejs8` |
| PHP 7.0.12 | Node.js 6 | `deploydog/php-nodejs-web-build-tools:php7.0.12/nodejs6` |
| PHP 7.0.12 | Node.js 8 | `deploydog/php-nodejs-web-build-tools:php7.0.12/nodejs8` |
| PHP 7.0.13 | Node.js 6 | `deploydog/php-nodejs-web-build-tools:php7.0.13/nodejs6` |
| PHP 7.0.13 | Node.js 8 | `deploydog/php-nodejs-web-build-tools:php7.0.13/nodejs8` |
| PHP 7.0.14 | Node.js 6 | `deploydog/php-nodejs-web-build-tools:php7.0.14/nodejs6` |
| PHP 7.0.14 | Node.js 8 | `deploydog/php-nodejs-web-build-tools:php7.0.14/nodejs8` |
| PHP 7.0.15 | Node.js 6 | `deploydog/php-nodejs-web-build-tools:php7.0.15/nodejs6` |
| PHP 7.0.15 | Node.js 8 | `deploydog/php-nodejs-web-build-tools:php7.0.15/nodejs8` |
| PHP 7.0.16 | Node.js 6 | `deploydog/php-nodejs-web-build-tools:php7.0.16/nodejs6` |
| PHP 7.0.16 | Node.js 8 | `deploydog/php-nodejs-web-build-tools:php7.0.16/nodejs8` |
| PHP 7.0.17 | Node.js 6 | `deploydog/php-nodejs-web-build-tools:php7.0.17/nodejs6` |
| PHP 7.0.17 | Node.js 8 | `deploydog/php-nodejs-web-build-tools:php7.0.17/nodejs8` |
| PHP 7.0.18 | Node.js 6 | `deploydog/php-nodejs-web-build-tools:php7.0.18/nodejs6` |
| PHP 7.0.18 | Node.js 8 | `deploydog/php-nodejs-web-build-tools:php7.0.18/nodejs8` |
| PHP 7.0.19 | Node.js 6 | `deploydog/php-nodejs-web-build-tools:php7.0.19/nodejs6` |
| PHP 7.0.19 | Node.js 8 | `deploydog/php-nodejs-web-build-tools:php7.0.19/nodejs8` |
| PHP 7.0.20 | Node.js 6 | `deploydog/php-nodejs-web-build-tools:php7.0.20/nodejs6` |
| PHP 7.0.20 | Node.js 8 | `deploydog/php-nodejs-web-build-tools:php7.0.20/nodejs8` |
| PHP 7.0.21 | Node.js 6 | `deploydog/php-nodejs-web-build-tools:php7.0.21/nodejs6` |
| PHP 7.0.21 | Node.js 8 | `deploydog/php-nodejs-web-build-tools:php7.0.21/nodejs8` |
| PHP 7.0.22 | Node.js 6 | `deploydog/php-nodejs-web-build-tools:php7.0.22/nodejs6` |
| PHP 7.0.22 | Node.js 8 | `deploydog/php-nodejs-web-build-tools:php7.0.22/nodejs8` |
| PHP 7.0.23 | Node.js 6 | `deploydog/php-nodejs-web-build-tools:php7.0.23/nodejs6` |
| PHP 7.0.23 | Node.js 8 | `deploydog/php-nodejs-web-build-tools:php7.0.23/nodejs8` |
| PHP 7.1.0 | Node.js 6 | `deploydog/php-nodejs-web-build-tools:php7.1.0/nodejs6` |
| PHP 7.1.0 | Node.js 8 | `deploydog/php-nodejs-web-build-tools:php7.1.0/nodejs8` |
| PHP 7.1.1 | Node.js 6 | `deploydog/php-nodejs-web-build-tools:php7.1.1/nodejs6` |
| PHP 7.1.1 | Node.js 8 | `deploydog/php-nodejs-web-build-tools:php7.1.1/nodejs8` |
| PHP 7.1.2 | Node.js 6 | `deploydog/php-nodejs-web-build-tools:php7.1.2/nodejs6` |
| PHP 7.1.2 | Node.js 8 | `deploydog/php-nodejs-web-build-tools:php7.1.2/nodejs8` |
| PHP 7.1.3 | Node.js 6 | `deploydog/php-nodejs-web-build-tools:php7.1.3/nodejs6` |
| PHP 7.1.3 | Node.js 8 | `deploydog/php-nodejs-web-build-tools:php7.1.3/nodejs8` |
| PHP 7.1.4 | Node.js 6 | `deploydog/php-nodejs-web-build-tools:php7.1.4/nodejs6` |
| PHP 7.1.4 | Node.js 8 | `deploydog/php-nodejs-web-build-tools:php7.1.4/nodejs8` |
| PHP 7.1.5 | Node.js 6 | `deploydog/php-nodejs-web-build-tools:php7.1.5/nodejs6` |
| PHP 7.1.5 | Node.js 8 | `deploydog/php-nodejs-web-build-tools:php7.1.5/nodejs8` |
| PHP 7.1.6 | Node.js 6 | `deploydog/php-nodejs-web-build-tools:php7.1.6/nodejs6` |
| PHP 7.1.6 | Node.js 8 | `deploydog/php-nodejs-web-build-tools:php7.1.6/nodejs8` |
| PHP 7.1.7 | Node.js 6 | `deploydog/php-nodejs-web-build-tools:php7.1.7/nodejs6` |
| PHP 7.1.7 | Node.js 8 | `deploydog/php-nodejs-web-build-tools:php7.1.7/nodejs8` |
| PHP 7.1.8 | Node.js 6 | `deploydog/php-nodejs-web-build-tools:php7.1.8/nodejs6` |
| PHP 7.1.8 | Node.js 8 | `deploydog/php-nodejs-web-build-tools:php7.1.8/nodejs8` |
| PHP 7.1.9 | Node.js 6 | `deploydog/php-nodejs-web-build-tools:php7.1.9/nodejs6` |
| PHP 7.1.9 | Node.js 8 | `deploydog/php-nodejs-web-build-tools:php7.1.9/nodejs8` |

### Looking for a specific patch release of a QA PHP version?
| PHP Version  | Node.js Version | Full Docker Image Name |
| ------------ | --------------- | ---------------------- |
| PHP 5.6.32 | Node.js 6 | `deploydog/php-nodejs-web-build-tools:php5.6.32/nodejs6` |
| PHP 5.6.32 | Node.js 8 | `deploydog/php-nodejs-web-build-tools:php5.6.32/nodejs8` |
| PHP 7.0.24 | Node.js 6 | `deploydog/php-nodejs-web-build-tools:php7.0.24/nodejs6` |
| PHP 7.0.24 | Node.js 8 | `deploydog/php-nodejs-web-build-tools:php7.0.24/nodejs8` |
| PHP 7.1.10 | Node.js 6 | `deploydog/php-nodejs-web-build-tools:php7.1.10/nodejs6` |
| PHP 7.1.10 | Node.js 8 | `deploydog/php-nodejs-web-build-tools:php7.1.10/nodejs8` |

Last updated Thu 7th Sep 2017 12:07pm