<?php /** @noinspection PhpUndefinedVariableInspection */

/***************************************************************
 * Extension Manager/Repository config file for ext "static_info_tables_cz".
 *
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
    'title' => 'Static Info Tables (cz)',
    'description' => '(cz) language pack wrapper for static_info_tables_cs',
    'category' => 'misc',
    'version' => '6.9.0',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearcacheonload' => 0,
    'author' => 'Ephraim Härer',
    'author_email' => 'ephraim.haerer@renolit.com',
    'author_company' => 'RENOLIT SE',
    'constraints' => [
        'depends' => [
            'static_info_tables' => '6.7.0-6.9.99',
            'static_info_tables_cs' => '6.7.0-6.9.99',
            'php' => '7.2.0-7.4.99',
            'typo3' => '8.7.0-10.4.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];

