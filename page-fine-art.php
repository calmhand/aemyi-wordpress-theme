<?php get_header(); ?>
<nav class="site-header">
    <div class="social-container" id="bottom-left">
        <h2><a class="link-style" href="/about/">ABOUT</a></h2>
    </div>
    <div class="social-container" id="bottom-right">
        <h2><a class="link-style" href="/">HOME</a></h2>
    </div>
</nav>

<div id="bg-video" class="bg-video">
    <video autoplay muted loop playsinline preload="true">
        <source src="<?php echo get_template_directory_uri() . "/assets/images/newlgitch.mp4"?>" type="video/mp4">
    </video>
</div>

<div class="artworks-container">
    <?php
        the_content();
        $artPosts = new WP_Query("cat=8"); 
        if ($artPosts->have_posts()): 
            while ($artPosts->have_posts()) : $artPosts->the_post();
                ?>
                    <div class="post-link">
                        <a href="<?php echo( get_the_permalink() ); ?>">
                            <?php the_post_thumbnail(array(400,400)); ?>
                        </a>
                        <span style="color: white;" class="post-link-title"><?php the_title(); ?></span>
                    </div>
                <?php
            endwhile;
        else:
            echo '<p>no posts found</p>';
        endif 
    ?>
</div>

<?php get_footer(); ?>