<?php
    //header
    include_once('templates/header.php');
    include_once('helpers/url.php');
?>
<!-- ---------------------------------------------------------- -->
    

<main>
    <div id="title-container">
        <h1>About us!</h1>
        <p>Our team</p>
    </div>
        <div class="team-member">
            <h2 class="member-name">John Doe</h2>
            <p class="member-description">
                <img src="<?= $IMAGES ?>john-doe.jpg" alt="Team member">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Nulla vitae elit libero, a pharetra augue. 
                Nullam id dolor id nibh ultricies vehicula ut id elit. 
                Nullam quis risus eget urna mollis ornare vel eu leo. 
                Nullam id dolor id nibh ultricies vehicula ut id elit. 
                Nullam quis risus eget urna mollis ornare vel eu leo.
            </p>
        </div>
    </div>
</main>


<!-- ---------------------------------------------------------- -->
<?php
    //footer    
    include_once('templates/footer.php');
?>