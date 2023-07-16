<?php get_header(); ?>

<nav class="site-header">
    <div class="social-container" id="bottom-left">
        <h2><a class="link-style" href="/">HOME</a></h2>
    </div>
</nav>

<div class="contact-container">
    <?php the_content(); the_post_thumbnail(); ?>
</div>

<?php get_footer(); ?>