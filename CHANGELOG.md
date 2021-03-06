# Change log

All notable changes to this project will be documented in this file.
This project adheres to [Semantic Versioning](https://semver.org/).

## x.y.z

### Added

### Changed

### Deprecated

### Removed
- Drop support for PHP 7.0 and 7.1 (#91)

### Fixed

## 3.1.0

### Added
- Add JSON and YAML linting to the CI build (#78)
- Add PHP 8 compatibility (#77)
- Add a `.editorconfig` to match the Core (#72)
- Enable the admin panel (#51)

### Changed
- Move the CI from Travis CI to GitHub Actions (#76, #79, #80, #82)
- Change the default git branch from `master` to `main` (#75)
- Move the static file registrations to `Configuration/TCA/` (#49, #52)

### Removed
- Drop the CSS and JavaScript source maps (#50)

### Fixed
- Use the official TYPO3 Fluid XML namespace (#87)
- Add margin to make space for the admin panel (#85)
- Disabled unused backend columns (#84)
- Use the UTF8-enabled locales (#83)

## 3.0.0

### Added
- Mark as compatible with TYPO3 9.5 (#46)

### Removed
- Remove the old extension icon files (#47)
- Drop support for PHP 5 (#44)
- Drop support for TYPO3 7.6 (#43)

## 2.0.0

### Added
- Add PHP 7.3 to the Travis CI build (#36)
- Support all versions of PHP 7.x (#34)

### Changed
- Use the new content rendering TypoScript (#40, #2)
- Update jQuery to 3.4.1 (#38)
- Update Twitter Bootstrap to 4.3.1 (#37)
- Require fluid_styled_content (#35)

### Deprecated
- Support for TYPO3 7.6 will be dropped for version 3.0.
- Support for PHP 5 will be dropped for version 3.0.

### Removed
- Drop the .htaccess files for private folders (#41)
- Drop support for TYPO3 6.2 (#31, #33)

### Fixed
- Re-add compatibility with PHP 5.5 for TYPO3 7.6 (#39)
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
