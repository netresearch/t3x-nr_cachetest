<?php
defined('TYPO3_MODE') or die('Access denied.');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPItoST43(
    $_EXTKEY,
    'class.tx_nrcachetest_plugin.php',
    '_cached',
    'list_type',
    1//cached
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPItoST43(
    $_EXTKEY,
    'class.tx_nrcachetest_plugin.php',
    '_uncached',
    'list_type',
    0//not cached
);
?>
