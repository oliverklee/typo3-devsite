<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'TYPO3 CMS development site',
    'description' => 'This is a TYPO3 extension that contains the basics of a site which I use for developing in TYPO3.',
    'category' => 'services',
    'author' => 'Oliver Klee',
    'author_email' => 'typo3-coding@oliverklee.de',
    'state' => 'beta',
    'clearCacheOnLoad' => 1,
    'author_company' => 'oliverklee.de',
    'version' => '3.3.6',
    'constraints' => [
        'depends' => [
            'php' => '5.5.0-7.1.99',
            'typo3' => '6.2.0-8.9.99'
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
