<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'GdprExtensionsComPinterestProfile',
        'gdprpinterestprofile',
        [
            \GdprExtensionsCom\GdprExtensionsComPinterestProfile\Controller\GdprPinterestController::class => 'index'
        ],
        // non-cacheable actions
        [
            \GdprExtensionsCom\GdprExtensionsComPinterestProfile\Controller\GdprPinterestController::class => '',
            \GdprExtensionsCom\GdprExtensionsComPinterestProfile\Controller\GdprManagerController::class => 'create, update, delete'
        ],
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
    );

    // register plugin for cookie widget
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'GdprExtensionsComPinterestProfile',
        'gdprcookiewidget',
        [
            \GdprExtensionsCom\GdprExtensionsComPinterestProfile\Controller\GdprCookieWidgetController::class => 'index'
        ],
        // non-cacheable actions
        [],
    );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    gdprcookiewidget {
                        iconIdentifier = gdpr_extensions_com_pinterest_profile-plugin-gdprpinterestprofile
                        title = cookie
                        description = LLL:EXT:gdpr_extensions_com_pinterest_profile/Resources/Private/Language/locallang_db.xlf:tx_gdpr_extensions_com_pinterest_profile_gdprpinterest.description
                        tt_content_defValues {
                            CType = list
                            list_type = gdprextensionscompinterestprofile_gdprcookiewidget
                        }
                    }
                }
                show = *
            }
       }'
    );
    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod.wizards.newContentElement.wizardItems {
               gdpr.header = LLL:EXT:gdpr_extensions_com_pinterest_profile/Resources/Private/Language/locallang_db.xlf:tx_gdpr_extensions_com_pinterest_profile_gdprpinterest.name.tab
        }'
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.gdpr {
                elements {
                    gdprpinterestprofile {
                        iconIdentifier = gdpr_extensions_com_pinterest_profile-plugin-gdprpinterestprofile
                        title = LLL:EXT:gdpr_extensions_com_pinterest_profile/Resources/Private/Language/locallang_db.xlf:tx_gdpr_extensions_com_pinterest_profile_gdprpinterest.name
                        description = LLL:EXT:gdpr_extensions_com_pinterest_profile/Resources/Private/Language/locallang_db.xlf:tx_gdpr_extensions_com_pinterest_profile_gdprpinterest.description
                        tt_content_defValues {
                            CType = gdprextensionscompinterestprofile_gdprpinterestprofile
                        }
                    }
                }
                show = *
            }
       }'
    );
})();
