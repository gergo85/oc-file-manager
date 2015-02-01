<?php

return [
    'plugin' => [
        'name' => 'Fájlkezelő',
        'description' => 'Menedzseld a fájlaidat és mappáidat.',
        'author' => 'Szabó Gergő'
    ],
    'error' => [
        'text' => 'Először telepítenie kell a következő plugint:',
        'plugin' => 'Wysiwyg Editors'
    ],
    'widget' => [
        'basic' => [
            'label' => 'Alapvető fájl statisztika',
            'folders' => 'Mappák',
            'files' => 'Fájlok',
            'size' => 'Méret'
        ],
        'type' => [
            'label' => 'Fájl típus statisztika',
            'audio' => 'Audió',
            'archive' => 'Archív',
            'code' => 'Kód',
            'doc' => 'Doksi',
            'image' => 'Kép',
            'other' => 'Egyéb',
            'prezi' => 'Prezi',
            'table' => 'Táblázat',
            'text' => 'Szöveg',
            'video' => 'Videó'
        ],
        'pieces' => 'darab',
        'limit' => 'Feltöltési korlát'
    ]
];
