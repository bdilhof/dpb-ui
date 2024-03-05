<?php

return [
    'homepage' => 'homepage',
    'items' => [
        [
            'label' => 'Home', // Enter title of menu item
            'url' => 'homepage' // Enter named route, e.g. 'users.index'
        ],
        [
            'label' => 'Dropdown menu',
            'subpages' => [
                [
                    'label' => 'Dropdown item 1',
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