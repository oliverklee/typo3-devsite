<?php
$EM_CONF['typo3_devsite'] = [
    'title' => 'TYPO3 CMS development site',
    'description' => 'Contains the basics of a site which Oliver Klee uses for developing in TYPO3.',
    'category' => 'services',
    'author' => 'Oliver Klee',
    'author_email' => 'typo3-coding@oliverklee.de',
    'state' => 'stable',
    'clearCacheOnLoad' => 1,
    'author_company' => 'oliverklee.de',
    'version' => '3.1.0',
    'constraints' => [
        'depends' => [
            'php' => '7.2.0-',
            'typo3' => '9.5.0-9.5.99',
            'frontend' => '9.5.0-9.5.99',
            'fluid' => '9.5.0-9.5.99',
            'fluid_styled_content' => '9.5.0-9.5.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
