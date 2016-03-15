<?php
return [
    'plugin' => [
        'name' => 'File Manager',
        'description' => 'Gestisce i tuoi file e le tue cartelle.',
        'author' => 'Gergő Szabó'
    ],
    'error' => [
        'text' => 'Prima di tutto <b>devi installare ed attivare</b> il seguente plugin:',
        'plugin' => 'Wysiwyg Editors'
    ],
    'settings' => [
        'tooltip1' => 'Puoi nascondere le statistiche o gli elementi di aiuto nella pagina <b>preferenze del Back-end</b> del menù profilo (posizionato nell\'angolo in alto a destra).',
        'tooltip2' => 'Se vuoi nascondere anche il link Media nel menù in alto, scarica dall'October Marketplace il plugin <b>Backend Plus</b>.',
        'tooltip3' => 'Per favore <b>dai una valutazione a questo plugin</b> se ti ha aiutato nel tuo lavoro:',
        'hide_stat' => 'Nascondi le statistiche del plugin File Manager.',
        'hide_help' => 'Nascondi l'aiuto del plugin File Manager.'
    ],
    'widget' => [
        'basic' => [
            'title' => 'File Manager - Statistiche file',
            'label' => 'Statistiche File',
            'folders' => 'Cartelle',
            'files' => 'File',
            'size' => 'Dimensione'
        ],
        'type' => [
            'title' => 'File Manager - Statistiche sui tipi di file',
            'label' => 'Statistiche sui tipi di file',
            'graph' => 'Grafico',
            'audio' => 'Audio',
            'archive' => 'Archivio',
            'code' => 'Codice',
            'doc' => 'Documento',
            'image' => 'Immagine',
            'prezi' => 'Prezi',
            'table' => 'Tabella',
            'text' => 'Testo',
            'video' => 'Video'
        ],
        'pieces' => 'elemento|elementi',
        'limit' => 'Limite di caricamento'
    ],
    'shortcuts' => [
        'cut' => 'taglia',
        'copy' => 'copia',
        'paste' => 'incolla',
        'delete' => 'cancella',
        'select' => 'seleziona tutto',
        'upload' => 'carica',
        'info' => 'ottieni informazioni',
        'search' => 'cerca',
        'main_folder' => 'cartella principale',
        'parent_folder' => 'cartella superiore',
        'open' => 'apri',
        'view' => 'visualizza',
        'back' => 'indietro',
        'forward' => 'avanti',
        'new_folder' => 'nuova cartella',
        'reload' => 'ricarica',
        'download' => 'scarica',
        'rename' => 'rinomina',
        'first_item' => 'primo elemento',
        'last_item' => 'ultimo elemento',
        'up' => 'SÙ',
        'down' => 'GIÙ',
        'left' => 'SINISTRA',
        'right' => 'DESTRA'
    ]
];
