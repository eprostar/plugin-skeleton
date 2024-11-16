<?php

// translations for VendorName/Skeleton
return [

    'model_label' => 'ModelName',
    'plural_model_label' => 'ModelName',

    'cluster' => [
        'label' => 'ModelNameverwaltung',
    ],

    'pages' => [
        'index' => [
            'header_actions' => [
                'create' => [
                    'label' => 'Neues ModelName anlegen',
                ],
            ],
        ],

        'trashed_warehouses' => [
            'navigation_label' => 'Papierkorb',
            'label' => 'ModelName',
            'title' => 'ModelName',

            'empty_state' => [
                'heading' => 'Papierkorb ist leer',
                'description' => 'Es befinden sich keine ModelName im Papierkorb.',
                'no_results' => [
                    'heading' => '0 Ergebnisse gefunden',
                    'description' => 'Im Papierkorb wurden keine ModelName gefunden, die Ihren Suchkriterien entsprechen.',
                ],
            ],
        ],
    ],

    'form' => [
        'fields' => [
            'name' => [
                'label' => 'Name',
                'placeholder' => 'Name des ModelName',
                'helper_text' => 'Geben Sie den Namen des ModelName ein',
            ],
        ],

        'tabs' => [
            'general' => [
                'label' => 'Allgemein',
                'heading' => 'Allgemeine Informationen',
                'description' => 'Allgemeine Informationen zum ModelName',
            ],
        ],
    ],

    'table' => [

        'heading' => 'ModelName',
        'description' => 'Übersicht aller ModelName',

        'empty_state' => [
            'heading' => 'Keine ModelName gefunden',
            'description' => 'Es wurden noch keine ModelName angelegt.',

            'no_results' => [
                'heading' => '0 Ergebnisse gefunden',
                'description' => 'Es wurden keine ModelName gefunden, die Ihren Suchkriterien entsprechen.',
            ],

        ],

        'columns' => [
            'name' => [
                'label' => 'Name',
            ],
        ],
    ],
];
