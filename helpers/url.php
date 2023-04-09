<?php

    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";

    $BASE_URL = $protocol . $_SERVER['SERVER_NAME'] . dirname($_SERVER['REQUEST_URI'] . '?') . '/';
    
    $STYLES = $BASE_URL . 'css';
    $NORMALIZE = $BASE_URL . 'node_modules/normalize.css/normalize.css';

    $IMAGES = $BASE_URL . 'img/';

    $POSTS = $BASE_URL . 'post.php';

