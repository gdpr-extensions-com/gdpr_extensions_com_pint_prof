<?php
defined('TYPO3') || die();

$frontendLanguageFilePrefix = 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:';
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'GdprExtensionsComPintProf',
    'gdprpinterestprofile',
    'PinterestProfile'
);

$fields = [
    'gdpr_pinterest_profile_url' => [
        'exclude' => true,
        'label' => 'LLL:EXT:gdpr_extensions_com_pint_prof/Resources/Private/Language/locallang_db.xlf:tx_gdpr_extensions_com_pint_prof_gdprpinterest.gdpr_vid_url',
        'description' => 'LLL:EXT:gdpr_extensions_com_pint_prof/Resources/Private/Language/locallang_db.xlf:tx_gdpr_extensions_com_tiktik_gdprpinterest.gdpr_vid_url.description',
        'config' => [
            'type' => 'input',
            'renderType' => 'inputLink',
            'eval' => 'required'
        ]
    ],
    'scale_profile_height' => [
        'exclude' => true,
        'label' => 'LLL:EXT:gdpr_extensions_com_pint_prof/Resources/Private/Language/locallang_db.xlf:tx_gdpr_extensions_com_pint_prof_gdprpinterest.scale_profile_height',
        'description' => 'LLL:EXT:gdpr_extensions_com_pint_prof/Resources/Private/Language/locallang_db.xlf:tx_gdpr_extensions_com_tiktik_gdprpinterest.scale_profile_height.description',
        'config' => [
            'type' => 'input',
            'renderType' => 'input'
        ]
    ],
    'scale_profile_width' => [
        'exclude' => true,
        'label' => 'LLL:EXT:gdpr_extensions_com_pint_prof/Resources/Private/Language/locallang_db.xlf:tx_gdpr_extensions_com_pint_prof_gdprpinterest.scale_profile_width',
        'description' => 'LLL:EXT:gdpr_extensions_com_pint_prof/Resources/Private/Language/locallang_db.xlf:tx_gdpr_extensions_com_tiktik_gdprpinterest.scale_profile_width.description',
        'config' => [
            'type' => 'input',
            'renderType' => 'input'
        ]
    ],
    'board_profile_width' => [
        'exclude' => true,
        'label' => 'LLL:EXT:gdpr_extensions_com_pinterest/Resources/Private/Language/locallang_db.xlf:tx_gdpr_extensions_com_pinterest_gdprpinterest.board_width',
        'description' => 'LLL:EXT:gdpr_extensions_com_pinterest/Resources/Private/Language/locallang_db.xlf:tx_gdpr_extensions_com_tiktik_gdprpinterest.board_width.description',
        'config' => [
            'type' => 'input',
            'renderType' => 'input'
        ]
    ],
    
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $fields);

$GLOBALS['TCA']['tt_content']['types']['gdprextensionscompintprof_gdprpinterestprofile'] = [
    'showitem' => '
                --palette--;' . $frontendLanguageFilePrefix . 'palette.general;general,
                gdpr_pinterest_profile_url,scale_profile_width,scale_profile_height,board_profile_width,
                --div--;' . $frontendLanguageFilePrefix . 'tabs.appearance,
                --palette--;' . $frontendLanguageFilePrefix . 'palette.frames;frames,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                --palette--;;language,
                --div--;' . $frontendLanguageFilePrefix . 'tabs.access,
                hidden;' . $frontendLanguageFilePrefix . 'field.default.hidden,
                --palette--;' . $frontendLanguageFilePrefix . 'palette.access;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
        ',
];
