# Change log

All notable changes to this project will be documented in this file.
This project adheres to [Semantic Versioning](https://semver.org/).

## x.y.z

### Added
- Add PHP 7.3 to the Travis CI build (#36)
- Support all versions of PHP 7.x (#34)

### Changed
- Update Twitter Bootstrap to 4.3.1 (#37)
- Require fluid_styled_content (#35)

### Deprecated

### Removed
- Drop support for TYPO3 6.2 and PHP 5.x (#31, #33)

### Fixed
- Provide and reference the correct license files (#32) 

## 1.0.1

### Fixed
- Fix the extension name in the TypoScript template registration (#29, #30)

## 1.0.0

### Added
- Officially support PHP 7.2 (#22)
- Enable detailed error messages in the FE (#21)
- lint the TypoScript
- Composer script for linting the PHP files

### Changed
- Change the license to GPL V2+ (#27)

### Deprecated
- Support for TYPO3 6.2 will be dropped in version 2.0

### Fixed
- Keep development files out of the packages (#26)
- Fix TYPO3-specific issues in composer.json (#24)
- Provide the extension icon in Resources/ (#23)
- Fix path to the Bootstrap bundle JS (#17)
- Fix deprecation log warnings in TYPO3 7.6 (#16)
- Move config.txt to a location where it will be included (#15)
