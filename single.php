<?php
get_header();
?>
<header class="site-header">
    <div class="social-container" id="bottom-left">
        <h2><a class="link-style" href="javascript:history.back()">GO BACK</a></h2>
    </div>
    <div class="social-container" id="bottom-right">
        <h2><a class="link-style" href="/">HOME</a></h2>
    </div>
</header>
<body class="main">
    <div id="bg-video" class="bg-video">
        <video autoplay muted loop>
            <source src="<?php echo get_template_directory_uri() . "/assets/images/bg_vid.mp4"?>" type="video/mp4">
        </video>
    </div>
    <div class="posts-container">
        <h1 class="post-title"> <?php the_title(); ?> </h1><br>
        <?php
            the_post_thumbnail('full', ['id' => 'post-image']);
            ?>
            <div class="post-content">
                <?php the_content(); ?>
            </div>
            <?php
        ?>
    </div>
    <div>
        
    </div>
</body>

<?php
get_footer();
?>