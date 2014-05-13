<?php
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
    array(
        'Cache test: Cached',
        'nr_cachetest_cached',
    )
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
    array(
        'Cache test: Uncached',
        'nr_cachetest_uncached',
    )
);

$TCA['tt_content']['types']['list']['subtypes_addlist']['nr_cachetest_cached']
    = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    'nr_cachetest_cached',
    'FILE:EXT:' . $_EXTKEY . '/flexform.xml'
);

$TCA['tt_content']['types']['list']['subtypes_addlist']['nr_cachetest_uncached']
    = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    'nr_cachetest_uncached',
    'FILE:EXT:' . $_EXTKEY . '/flexform.xml'
);
?>
