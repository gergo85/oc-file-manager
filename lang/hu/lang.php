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
    'settings' => [
        'tooltip1' => 'A statisztika és a súgó elemek elrejthetőek a <b>Beállítások > Admin felület</b> oldalon.',
        'tooltip2' => 'Amennyiben el szeretné rejteni a Média linket a felső menüben, töltse le hozzá a <b>Backend Plus</b> bővítményt az October piacteréről.',
        'tooltip3' => 'Kérjük <b>értékelje a bővítményt</b>, amennyiben segítette a munkáját:',
        'hide_stat' => 'Statisztika rejtése a Fájlkezelő bővítménynél.',
        'hide_help' => 'Súgó rejtése a Fájlkezelő bővítménynél.'
    ],
    'widget' => [
        'basic' => [
            'label' => 'Alapvető fájl statisztika',
            'folders' => 'Mappa',
            'files' => 'Fájl',
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
