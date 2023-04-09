<?php
    //header
    include_once('templates/header.php');
    //database
    include_once('data/posts.php');
?>
<!-- ---------------------------------------------------------- -->
    

<main>
    <div id="title-container">
        <h1>UK-BR Tech News</h1>
        <p>Your technology news website in England.</p>
    </div>
    <div id="posts-container">
        <?php foreach($posts as $post): ?>
            <div class="post-box">
                <img src="<?= $IMAGES . $post['img']?>" alt="<?= $post['title'] ?>">
                <h2 class="post-title">
                    <a href="<?= $POSTS ?>?id=<?= $post['id'] ?>"><?= $post['title'] ?></a>
                </h2>
                <p class="post-description">
                    <?= $post['description'] ?>
                </p>
                <div class="tags-container">
                    <?php foreach($post['tags'] as $tag): ?>
                        <a href="<?= $TAGS ?>?tag=<?= $tag ?>" class="tag"><?= $tag ?></a>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</main>


<!-- ---------------------------------------------------------- -->
<?php
    //footer    
    include_once('templates/footer.php');
?>