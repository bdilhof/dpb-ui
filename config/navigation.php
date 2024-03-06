<?php

return [
    'homepage' => 'homepage',
    'items' => [
        [
            'label' => 'pages.homepage', // Enter language key for page title or just plain string name
            'url' => 'homepage' // Enter named route, e.g. 'users.index'
        ],
        [
            'label' => 'Dropdown menu',
            'subpages' => [
                [
                    'label' => 'pages.dropdown1', 
                    'url' => 'dropdown1.index',
                ],
                [
                    'label' => 'Dropdown item 2',
                    'url' => 'dropdown2.index',
                ],
            ],
        ],
    ]
];