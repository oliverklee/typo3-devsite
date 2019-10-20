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
    'version' => '1.0.1',
    'constraints' => [
        'depends' => [
            'php' => '7.0.0-7.9.99',
            'typo3' => '7.6.0-8.7.99',
            'frontend' => '7.6.0-8.7.99',
            'fluid' => '7.6.0-8.7.99',
            'fluid_styled_content' => '7.6.0-8.7.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
