# typo3-devsite
This is a TYPO3 extension that contains the basics of a site which I use for developing in TYPO3.

[![Flattr this git repo](https://button.flattr.com/flattr-badge-large.png)](https://flattr.com/submit/auto?fid=45y2xw&url=https%3A%2F%2Fgithub.com%2Foliverklee%2Ftypo3-devsite)

## Installation

### TYPO3 CMS >= 7.6

1. Install the extension fluid_styled_content (provided by the Core).
2. In your TypoScript template, include the following static templates:
    * Content Elements (fluid_styled content)
    * Content Elements CSS (optional) (fluid_styled content)
    * TYPO3 development site (typo3-devsite)

### TYPO3 CMS 6.2

1. Install the extension content_rendering_core (from the TER).
2. In your TypoScript template, include the following static templates:
    * Content Elements (content_rendering_core)
    * Content Elements CSS (optional) (content_rendering_core)
    * TYPO3 development site (typo3-devsite)
