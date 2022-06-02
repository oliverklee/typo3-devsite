# TYPO3 development site extension

[![TYPO3 V10](https://img.shields.io/badge/TYPO3-10-orange.svg)](https://get.typo3.org/version/10)
[![TYPO3 V11](https://img.shields.io/badge/TYPO3-11-orange.svg)](https://get.typo3.org/version/11)
[![License](https://poser.pugx.org/oliverklee/typo3-devsite/license.svg)](https://packagist.org/packages/oliverklee/typo3-devsite)
[![Total Downloads](https://poser.pugx.org/oliverklee/typo3-devsite/downloads.svg)](https://packagist.org/packages/oliverklee/typo3-devsite)
[![GitHub CI Status](https://github.com/oliverklee/typo3-devsite/workflows/CI/badge.svg?branch=main)](https://github.com/oliverklee/typo3-devsite/actions)

This is a TYPO3 extension that contains the basics of a site which
I use for developing in TYPO3. It helps to create a working site
with navigation and nice CSS extremely quickly.

In addition, minification and concatenation of JavaScript and CSS is
disabled, making debugging less of a pain.

## Installation

This package should only be installed via Composer, not from the TER.

### Installing the package via Composer

Require the package `"oliverklee/typo3-devsite"`.

### Within the TYPO3 back end

1. Uninstall the extension css_styled_content (if it is installed).
2. Install the extension fluid_styled_content (provided by the Core).
3. In your TypoScript template, include the following static templates:
    * Content Elements (fluid_styled content)
    * Content Elements CSS (optional) (fluid_styled content)
    * TYPO3 development site (typo3-devsite)

### favicon.ico

There's a small favicon.ico in ```Resources/Public/Icons/```
for copying to your site root.
