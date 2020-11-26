<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

return [
    'ctrl' => [
        'title' => 'LLL:EXT:legacy_extensions/Resources/Private/Language/locallang_db.xlf:tx_legacy_exntesion_domain_model_order
        ',
        'label' => 'order_identifier',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'dividers2tabs' => true,
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'company_name,company_street,company_zip,company_city,company_country,company_director_name,company_billing_email,company_branch,company_taxt_id,contact_person_name,contact_person_first_name,contact_person_last_name,contact_person_position,contact_person_email,contact_person_phone,accept_terms_of_service,contact_person_salutation,order_identifier,token',
        'iconfile' => 'EXT:legacy_extensions/Resources/Public/Icons/tx_legacy_exntesion_domain_model_order
        .gif',
    ],
    'interface' => [
        'showRecordFieldList' => 'hidden, is_test, is_gs1_gln, crdate, company_name, company_gln, company_street, company_zip, company_city, company_country, company_director_name, company_billing_email, company_branch,company_taxt_id, contact_person_name, contact_person_first_name, contact_person_last_name,contact_person_position, contact_person_email, contact_person_phone, accept_terms_of_service, contact_person_salutation, order_identifier, token, confirmation_mail_sent, registration_mail_sent',
    ],
    'types' => [
        '1' => ['showitem' => 'hidden, is_test, is_gs1_gln, crdate, company_name, company_gln, company_street, company_zip, company_city, company_country, company_director_name, company_billing_email, company_branch,company_taxt_id, contact_person_name, contact_person_first_name, contact_person_last_name,contact_person_position, contact_person_email, contact_person_phone, accept_terms_of_service, contact_person_salutation, order_identifier, token, confirmation_mail_sent, registration_mail_sent'],
    ],
    'palettes' => [
        '1' => ['showitem' => 'hidden, is_test, is_gs1_gln, crdate, company_name, company_gln, company_street, company_zip, company_city, company_country, company_director_name, company_billing_email, company_branch,company_taxt_id, contact_person_name, contact_person_first_name, contact_person_last_name,contact_person_position, contact_person_email, contact_person_phone, accept_terms_of_service, contact_person_salutation, order_identifier, token, confirmation_mail_sent, registration_mail_sent'],
    ],
    'columns' => [
        'hidden' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
            ],
        ],
        'crdate' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.crdate',
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'tstamp' => [
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.tstamp',
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'is_processed' => [
            'exclude' => 1,
            'label' => 'Processed',
            'config' => [
                'type' => 'check',
            ],
        ],
        'processed_tstamp' => [
            'exclude' => 1,
            'label' => 'Process TS',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'datetime',
                'readOnly' => 1,
            ],
        ],
        'is_test' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:legacy_extensions/Resources/Private/Language/locallang_db.xlf:tx_legacy_exntesion_domain_model_order
            .is_test',
            'config' => [
                'type' => 'check',
            ],
        ],
        'is_gs1_gln' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:legacy_extensions/Resources/Private/Language/locallang_db.xlf:tx_legacy_exntesion_domain_model_order
            .is_gs1_gln',
            'config' => [
                'type' => 'check',
            ],
        ],
        'starttime' => [
            'exclude' => 1,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'max' => 20,
                'eval' => 'datetime',
                'checkbox' => 0,
                'default' => 0,
                'range' => [
                    'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y')),
                ],
            ],
        ],
        'endtime' => [
            'exclude' => 1,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'max' => 20,
                'eval' => 'datetime',
                'checkbox' => 0,
                'default' => 0,
                'range' => [
                    'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y')),
                ],
            ],
        ],
        'company_gln' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:legacy_extensions/Resources/Private/Language/locallang_db.xlf:tx_legacy_exntesion_domain_model_order
            .company_gln',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required',
            ],
        ],
        'company_name' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:legacy_extensions/Resources/Private/Language/locallang_db.xlf:tx_legacy_exntesion_domain_model_order
            .company_name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required',
            ],
        ],
        'company_street' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:legacy_extensions/Resources/Private/Language/locallang_db.xlf:tx_legacy_exntesion_domain_model_order
            .company_street',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required',
            ],
        ],
        'company_zip' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:legacy_extensions/Resources/Private/Language/locallang_db.xlf:tx_legacy_exntesion_domain_model_order
            .company_zip',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required',
            ],
        ],
        'company_city' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:legacy_extensions/Resources/Private/Language/locallang_db.xlf:tx_legacy_exntesion_domain_model_order
            .company_city',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required',
            ],
        ],
        'company_country' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:legacy_extensions/Resources/Private/Language/locallang_db.xlf:tx_legacy_exntesion_domain_model_order
            .company_country',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required',
            ],
        ],
        'company_director_name' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:legacy_extensions/Resources/Private/Language/locallang_db.xlf:tx_legacy_exntesion_domain_model_order
            .company_director_name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required',
            ],
        ],
        'company_billing_email' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:legacy_extensions/Resources/Private/Language/locallang_db.xlf:tx_legacy_exntesion_domain_model_order
            .company_billing_email',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required',
            ],
        ],
        'company_branch' => [
            'exclude' => true,
            'label' => 'LLL:EXT:legacy_extensions/Resources/Private/Language/locallang_db.xlf:tx_legacy_exntesion_domain_model_order
            .company_branch',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
            ],
        ],
        'company_tax_id' => [
            'exclude' => true,
            'label' => 'LLL:EXT:legacy_extensions/Resources/Private/Language/locallang_db.xlf:tx_legacy_exntesion_domain_model_order
            .company_tax_id',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
            ],
        ],
        'contact_person_name' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:legacy_extensions/Resources/Private/Language/locallang_db.xlf:tx_legacy_exntesion_domain_model_order
            .contact_person_name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required',
            ],
        ],
        'contact_person_first_name' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:legacy_extensions/Resources/Private/Language/locallang_db.xlf:tx_legacy_exntesion_domain_model_order
            .contact_person_first_name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required',
            ],
        ],
        'contact_person_last_name' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:legacy_extensions/Resources/Private/Language/locallang_db.xlf:tx_legacy_exntesion_domain_model_order
            .contact_person_last_name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required',
            ],
        ],
        'contact_person_position' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:legacy_extensions/Resources/Private/Language/locallang_db.xlf:tx_legacy_exntesion_domain_model_order
            .contact_person_position',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required',
            ],
        ],
        'contact_person_email' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:legacy_extensions/Resources/Private/Language/locallang_db.xlf:tx_legacy_exntesion_domain_model_order
            .contact_person_email',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required',
            ],
        ],
        'contact_person_phone' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:legacy_extensions/Resources/Private/Language/locallang_db.xlf:tx_legacy_exntesion_domain_model_order
            .contact_person_phone',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required',
            ],
        ],
        'accept_terms_of_service' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:legacy_extensions/Resources/Private/Language/locallang_db.xlf:tx_legacy_exntesion_domain_model_order
            .accept_terms_of_service',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'contact_person_salutation' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:legacy_extensions/Resources/Private/Language/locallang_db.xlf:tx_legacy_exntesion_domain_model_order
            .contact_person_salutation',
            'config' => [
                'type' => 'select',
                'items' => [
                    ['-', 0],
                    [
                        'LLL:EXT:legacy_extensions/Resources/Private/Language/locallang.xlf:form.contactPersonSalutation.1.label',
                        1,
                    ],
                    [
                        'LLL:EXT:legacy_extensions/Resources/Private/Language/locallang.xlf:form.contactPersonSalutation.2.label',
                        2,
                    ],
                ],
                'size' => 1,
                'maxitems' => 1,
                'eval' => 'required',
            ],
        ],
        'order_identifier' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:legacy_extensions/Resources/Private/Language/locallang_db.xlf:tx_legacy_exntesion_domain_model_order
            .order_identifier',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'readOnly' => true,
            ],
        ],
        'order_status' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:legacy_extensions/Resources/Private/Language/locallang_db.xlf:tx_legacy_exntesion_domain_model_order
            .order_status',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
            ],
        ],
        'token' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:legacy_extensions/Resources/Private/Language/locallang_db.xlf:tx_legacy_exntesion_domain_model_order
            .token',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'readOnly' => true,
            ],
        ],
        'confirmation_mail_sent' => [
            'exclude' => 1,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:legacy_extensions/Resources/Private/Language/locallang_db.xlf:tx_legacy_exntesion_domain_model_order
            .confirmation_mail_sent',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'max' => 20,
                'eval' => 'datetime',
                'checkbox' => 0,
                'default' => 0,
                'range' => [
                    'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y')),
                ],
            ],
        ],
        'registration_mail_sent' => [
            'exclude' => 1,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:legacy_extensions/Resources/Private/Language/locallang_db.xlf:tx_legacy_exntesion_domain_model_order
            .registration_mail_sent',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'max' => 20,
                'eval' => 'datetime',
                'checkbox' => 0,
                'default' => 0,
                'range' => [
                    'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y')),
                ],
            ],
        ],
    ],
];
