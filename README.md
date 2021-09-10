# MageMontreal PwaRedirect

 - [Main Functionalities](#markdown-header-main-functionalities)
 - [Installation](#markdown-header-installation)
 - [Configuration](#markdown-header-configuration)
 - [Specifications](#markdown-header-specifications)
 - [Attributes](#markdown-header-attributes)


## Main Functionalities

This module redirect any customer access to the default theme of the Magento backend installation, if you are using headless pwa, you do not want to any customer happens to access the backend Magento installation.

## Installation

    composer require magemontreal/module-pwaredirect

### Via Composer

 - Install the module composer by running `composer require magemontreal/module-pwaredirect`
 - enable the module by running `php bin/magento module:enable MageMontreal_PwaRedirect`
 - apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`

### Or Zip file

 - Download the module's zip file.
 - Unzip the zip file in `app/code/MageMontreal`
 - Enable the module by running `php bin/magento module:enable MageMontreal_PwaRedirect`
 - Apply database updates by running `php bin/magento setup:upgrade`
 - Flush the cache by running `php bin/magento cache:flush`
 
## Configuration

 - Module Enabled (pwaredirect/config/is_enabled)
 - PWA URL (pwaredirect/config/redirect_url) - URL of your PWA store front

## License

This project is released under the [GNU license](https://github.com/MageMontreal/magento2-pwa-redirect/blob/master/LICENSE.txt).

Copyright © 2021-present. MageMontreal.