<?php
    include_once('helpers/url.php');

    $ROUTES = [
        'index' => [
            'title' => 'Home',
            'url' => $BASE_URL . 'index.php'
        ],
        'library' => [
            'title' => 'library',
            'url' => $BASE_URL . 'library.php'
        ],
        'about' => [
            'title' => 'About',
            'url' => $BASE_URL . 'about.php'
        ],
        'contact' => [
            'title' => 'Contact',
            'url' => $BASE_URL . 'contact.php'
        ]
    ]
?>