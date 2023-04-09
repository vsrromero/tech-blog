<?php
    include_once('helpers/url.php');
    include_once('routes/routes.php');
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $STYLES?>/style.css">
    <link rel="stylesheet" href="<?= $NORMALIZE?>">
    <title>UK-BR Tech</title>
</head>
<body>
<header>

    <!-- include logo and navigation as a link -->
    <a href="<?= $ROUTES["index"]["url"] ?>" id="logo"><img src="<?= $IMAGES?>/logo.png" alt="UK-BR News"></a>
    <nav>
        <ul id="navbar">
            <?php foreach ($ROUTES as $route_name => $route_info): ?>
                <li><a href="<?= $route_info['url'] ?>" class="nav-link"><?= $route_info['title'] ?></a></li>
            <?php endforeach; ?>
        </ul>
    </nav>
</header>