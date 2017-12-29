# TYPO3 development site extension

[![Flattr this git repo](https://button.flattr.com/flattr-badge-large.png)](https://flattr.com/submit/auto?fid=45y2xw&url=https%3A%2F%2Fgithub.com%2Foliverklee%2Ftypo3-devsite)

This is a TYPO3 extension that contains the basics of a site which
I use for developing in TYPO3. It helps to create a working site
with navigation and nice CSS extremely quickly.

In addition, minification and concatenation of JavaScript and CSS is
disabled, making debugging less of a pain.

## Installation

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