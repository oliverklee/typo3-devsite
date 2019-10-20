# TYPO3 development site extension

[![Build Status](https://travis-ci.org/oliverklee/typo3-devsite.svg?branch=master)](https://travis-ci.org/oliverklee/typo3-devsite)
[![Latest Stable Version](https://poser.pugx.org/oliverklee/typo3-devsite/v/stable.svg)](https://packagist.org/packages/oliverklee/typo3-devsite)
[![Total Downloads](https://poser.pugx.org/oliverklee/typo3-devsite/downloads.svg)](https://packagist.org/packages/oliverklee/typo3-devsite)
[![Latest Unstable Version](https://poser.pugx.org/oliverklee/typo3-devsite/v/unstable.svg)](https://packagist.org/packages/oliverklee/typo3-devsite)
[![License](https://poser.pugx.org/oliverklee/typo3-devsite/license.svg)](https://packagist.org/packages/oliverklee/typo3-devsite)

This is a TYPO3 extension that contains the basics of a site which
I use for developing in TYPO3. It helps to create a working site
with navigation and nice CSS extremely quickly.

In addition, minification and concatenation of JavaScript and CSS is
disabled, making debugging less of a pain.

## Installation

### Installing via Composer

Require the package `"oliverklee/typo3-devsite"`.

### Installing without Composer

Symlink the `typo3-devsite` folder as `typo3_devsite`
(i.e., convert the hyphen to an underscore).

### For TYPO3 CMS >= 7.6

For TYPO3 CMS >= 7.6, the use of Fluid Styled Content is recommended.

1. Uninstall the extension css_styled_content (if it is installed).
2. Install the extension fluid_styled_content (provided by the Core).
3. In your TypoScript template, include the following static templates:
    * Content Elements (fluid_styled content)
    * Content Elements CSS (optional) (fluid_styled content)
    * TYPO3 development site (typo3-devsite)

### For TYPO3 CMS 6.2

For TYPO3 CMS 6.2, the use of CSS Styled Content is recommended.
(The backport of Fluid Styled Content does not provide a login form yet.)

2. Install the extension css_styled_content (provided by the Core).
3. In your TypoScript template, include the following static templates:
    * CSS Styled Content (css_styled_content)
    * TYPO3 development site (typo3-devsite)

### favicon.ico

There's a small favicon.ico in ```Resources/Public/Icons/```
for copying to your site root.