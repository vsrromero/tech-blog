<?php
    //header
    include_once('templates/header.php');
    include_once('data/posts.php');
    include_once('data/categories.php');

    if(isset($_GET['id'])){
        $post_id = $_GET['id'];
        $current_post;

        foreach($posts as $post) {
            if($post['id'] == $post_id){
                $current_post = $post;
            }
        }

    }
?>
<!-- ---------------------------------------------------------- -->
    
<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"> <?= $current_post['title'] ?> </h1>
        <p id="post-description">
            <?= $current_post['description'] ?>
        </p>
        <div class="img-container">
            <img src="<?= $IMAGES . $current_post['img']?>" alt="<?= $current_post['title'] ?>">
        </div>
        <p class="post-content">
            <?= $current_post['content'] ?>
        </p>
    </div>
    
    <aside class="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach($current_post['tags'] as $tag): ?>
                <?php /*<li><a href="<?= $TAGS ?>?tag=<?= $tag ?>" class="tag"><?= $tag ?></a></li> */?>
                <li><a href="#" class="tag"><?= $tag ?></a></li>
            <?php endforeach; ?>
        </ul>
            <h3 class="categories-title">Categories</h3>
            <ul id="categories-list">
                <?php foreach($categories as $category): ?>
                    <?php /* <li><a href="<?= $CATEGORIES ?>?category=<?= $category ?>" class="category"><?= $category ?></a></li> */ ?>
                    <li><a href="#" class="category"><?= $category ?></a></li>
                <?php endforeach; ?>
            </ul>
    </aside>
            
</main>
<!-- ---------------------------------------------------------- -->
<?php
    //footer    
    include_once('templates/footer.php');
?>