<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

// define new fields
$tempColumns = array(
    'subtitle' => array(
        'exclude' => 0,
        'label' => 'LLL:EXT:extend_operations/Resources/Private/Language/locallang_db.xlf:tx_extend_operations_domain_model_operation.subtitle',
        'config' => array(
            'type' => 'input',
            'size' => 60,
            'eval' => 'trim'
        ),
    ),
);

// add field to tca
ExtensionManagementUtility::addTCAcolumns(
    'tx_operations_domain_model_operation',
    $tempColumns
);

// add new field subtitle after title
ExtensionManagementUtility::addToAllTCAtypes("tx_operations_domain_model_operation", 'subtitle', '', 'after:title');

