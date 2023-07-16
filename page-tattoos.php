<?php get_header(); ?>

<div id="bg-video" class="bg-video">
    <video autoplay muted loop playsinline preload="true">
        <source src="<?php echo get_template_directory_uri() . "/assets/images/flamealive.mp4"?>" type="video/mp4">
    </video>
</div>

<nav class="site-header">
    <div class="social-container" id="top-left">
        <h2><a class="link-style" href="/flashes/">FLASHES</a></h2>
    </div>

    <div class="social-container" id="top-right">
        <h2><a class="link-style" href="https://instagram.com/aemyitattoo">INSTAGRAM</a></h2>
    </div>

    <div class="social-container" id="bottom-left">
        <h2><a class="link-style" href="/">HOME</a></h2>
    </div>

    <div class="social-container" id="bottom-right">
        <h2><a class="link-style" href="/booking/">BOOKING</a></h2>
    </div>
</nav>

<div class="tattoos-container">
    <?php
        $tatPosts = new WP_Query("cat=3"); 
        if ($tatPosts->have_posts()): 
            while ($tatPosts->have_posts()) : $tatPosts->the_post();
                ?>
                    <div class="post-link">
                        <a href="<?php echo( get_the_permalink() ); ?>">
                            <?php the_post_thumbnail(array(400,400)); ?>
                        </a>
                    </div>
                <?php
            endwhile;
        else:
            echo '<p>no posts found</p>';
        endif 
    ?>
</div>

<?php get_footer(); ?>