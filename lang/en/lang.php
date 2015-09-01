<?php

return [
    'plugin' => [
        'name' => 'File Manager',
        'description' => 'Manage your files and folders.',
        'author' => 'Gergő Szabó'
    ],
    'error' => [
        'text' => 'First of all <b>you need to install and activate</b> the following plugin:',
        'plugin' => 'Wysiwyg Editors'
    ],
    'settings' => [
        'tooltip1' => 'You can hide the statistics or help elements in <b>Back-end preferences</b> page of profile menu (located on the top right corner).',
        'tooltip2' => 'If would you like to hide the Media link in top menu too, get download the <b>Backend Plus</b> plugin from October Marketplace.',
        'tooltip3' => 'Please <b>rate this plugin</b> if it helped your work:',
        'hide_stat' => 'Hide the statistics by File Manager plugin.',
        'hide_help' => 'Hide the help by File Manager plugin.'
    ],
    'widget' => [
        'basic' => [
            'title' => 'File Manager - File statistics',
            'label' => 'File statistics',
            'folders' => 'Folders',
            'files' => 'Files',
            'size' => 'Size'
        ],
        'type' => [
            'title' => 'File Manager - File type statistics',
            'label' => 'File type statistics',
            'graph' => 'Graph',
            'audio' => 'Audio',
            'archive' => 'Archive',
            'code' => 'Code',
            'doc' => 'Document',
            'image' => 'Image',
            'prezi' => 'Prezi',
            'table' => 'Table',
            'text' => 'Text',
            'video' => 'Video'
        ],
        'pieces' => 'piece|pieces',
        'limit' => 'Upload limit'
    ],
    'shortcuts' => [
        'cut' => 'cut',
        'copy' => 'copy',
        'paste' => 'paste',
        'delete' => 'delete',
        'select' => 'select all',
        'upload' => 'upload',
        'info' => 'get info',
        'search' => 'search',
        'main_folder' => 'main folder',
        'parent_folder' => 'parent folder',
        'open' => 'open',
        'view' => 'view',
        'back' => 'back',
        'forward' => 'forward',
        'new_folder' => 'new folder',
        'reload' => 'reload',
        'download' => 'download',
        'rename' => 'rename',
        'first_item' => 'first item',
        'last_item' => 'last item',
        'up' => 'UP',
        'down' => 'DOWN',
        'left' => 'LEFT',
        'right' => 'RIGHT'
    ]
];
