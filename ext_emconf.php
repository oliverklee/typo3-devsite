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
    'version' => '2.0.0',
    'constraints' => [
        'depends' => [
            'php' => '5.5.0-7.9.99',
            'typo3' => '8.7.0-8.7.99',
            'frontend' => '8.7.0-8.7.99',
            'fluid' => '8.7.0-8.7.99',
            'fluid_styled_content' => '8.7.0-8.7.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
