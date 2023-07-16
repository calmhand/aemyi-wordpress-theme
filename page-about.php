<?php get_header(); ?>
<header class="site-header">
    <div class="social-container" id="bottom-left">
        <h2><a class="link-style" href="/">HOME</a></h2>
    </div>

    <div class="social-container" id="bottom-right">
        <h2><a class="link-style" href="https://calmhand.github.io/portfolio/">SITE BY CALMHAND</a></h2>
    </div>
</header>

<div id="bg-video" class="bg-video">
    <video autoplay muted loop>
        <source src="<?php echo get_template_directory_uri() . "/assets/images/flamealive.mp4"?>" type="video/mp4">
    </video>
</div>

<div class="about-container">
    <div class="about-content">
        <div style="width: 100%;">
            <?php the_content(); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>