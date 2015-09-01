<?php

return [
    'plugin' => [
        'name' => 'Fájlkezelő',
        'description' => 'Menedzseld a fájlaidat és mappáidat.',
        'author' => 'Szabó Gergő'
    ],
    'error' => [
        'text' => 'Először <b>telepítenie és aktíválnia kell</b> a következő plugint:',
        'plugin' => 'Wysiwyg Editors'
    ],
    'settings' => [
        'tooltip1' => 'A statisztika és a súgó elemek elrejthetőek a (jobb felső sarokban lévő) személyes menü <b>Admin felület</b> oldalán.',
        'tooltip2' => 'Amennyiben el szeretné rejteni a Média linket a felső menüben, töltse le a <b>Backend Plus</b> bővítményt az October piacteréről.',
        'tooltip3' => 'Kérjük <b>értékelje a bővítményt</b>, amennyiben segítette a munkáját:',
        'hide_stat' => 'Statisztika rejtése a Fájlkezelő bővítménynél.',
        'hide_help' => 'Súgó rejtése a Fájlkezelő bővítménynél.'
    ],
    'widget' => [
        'basic' => [
            'title' => 'Fájlkezelő - Fájl statisztika',
            'label' => 'Fájl statisztika',
            'folders' => 'Mappa',
            'files' => 'Fájl',
            'size' => 'Méret'
        ],
        'type' => [
            'title' => 'Fájlkezelő - Fájltípus statisztika',
            'label' => 'Fájltípus statisztika',
            'graph' => 'Grafikon',
            'audio' => 'Audió',
            'archive' => 'Archív',
            'code' => 'Kód',
            'doc' => 'Doksi',
            'image' => 'Kép',
            'prezi' => 'Prezi',
            'table' => 'Táblázat',
            'text' => 'Szöveg',
            'video' => 'Videó'
        ],
        'pieces' => 'darab',
        'limit' => 'Feltöltési korlát'
    ],
    'shortcuts' => [
        'cut' => 'kivágás',
        'copy' => 'másolás',
        'paste' => 'beillesztés',
        'delete' => 'törlés',
        'select' => 'mind kijelölése',
        'upload' => 'feltöltés',
        'info' => 'tulajdonságok',
        'search' => 'keresés',
        'main_folder' => 'főmappa',
        'parent_folder' => 'szülő mappa',
        'open' => 'megnyitás',
        'view' => 'előnézet',
        'back' => 'vissza',
        'forward' => 'előre',
        'new_folder' => 'új mappa',
        'reload' => 'újratöltés',
        'download' => 'letöltés',
        'rename' => 'átnevezés',
        'first_item' => 'első elem',
        'last_item' => 'utolsó elem',
        'up' => 'FEL',
        'down' => 'LE',
        'left' => 'BALRA',
        'right' => 'JOBBRA'
    ]
];
