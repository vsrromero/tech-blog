<?php
    //header
    include_once('templates/header.php');
    include_once('data/posts.php');
?>
<!-- ---------------------------------------------------------- -->
    

<main>
    <div id="title-container">
        <h1>UK-BR Tech News</h1>
        <p>News archive</p>
    </div>
    <div id="news-container">
        <?php
            foreach($posts as $post){
                echo '<div class="news-post-box">';
                echo '<img src="' . $IMAGES . $post['img'] . '" alt="' . $post['title'] . '">';
                echo '<h2 class="post-title">';
                echo '<a href="' . $POSTS . '?id=' . $post['id'] . '">' . $post['title'] . '</a>';
                echo '</h2>';
                echo '<p class="post-description">';
                echo $post['description'];
                echo '</p>';
                echo '<div class="tags-news-container">';
                foreach($post['tags'] as $tag){
                    echo '<a href="#" class="news-tag">' . $tag . '</a>';
                }
                echo '</div>';
                echo '</div>';
            }
                
        ?>
    </div>
</main>


<!-- ---------------------------------------------------------- -->
<?php
    //footer    
    include_once('templates/footer.php');
?>