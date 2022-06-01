<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'TYPO3 CMS development site',
    'description' => 'Contains the basics of a site which Oliver Klee uses for developing in TYPO3.',
    'category' => 'services',
    'author' => 'Oliver Klee',
    'author_email' => 'typo3-coding@oliverklee.de',
    'state' => 'stable',
    'clearCacheOnLoad' => 1,
    'author_company' => 'oliverklee.de',
    'version' => '4.0.0',
    'constraints' => [
        'depends' => [
            'php' => '7.2.0-',
            'typo3' => '10.4.0-10.4.99',
            'frontend' => '10.4.0-10.4.99',
            'fluid' => '10.4.0-10.4.99',
            'fluid_styled_content' => '10.4.0-10.4.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
