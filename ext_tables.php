<?php
defined('TYPO3_MODE') or die('Access denied.');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
  'typo3-devsite',
  'Configuration/TypoScript',
  'TYPO3 development site'
);
