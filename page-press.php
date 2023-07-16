<?php get_header(); ?>

<div id="bg-video" class="bg-video">
    <video autoplay muted loop playsinline preload="true">
        <source src="<?php echo get_template_directory_uri() . "/assets/images/flamealive.mp4"?>" type="video/mp4">
    </video>
</div>

<nav class="site-header">
    <div class="social-container" id="bottom-right">
        <h2><a class="link-style" href="https://instagram.com/aemyitattoo">INSTAGRAM</a></h2>
    </div>

    <div class="social-container" id="bottom-left">
        <h2><a class="link-style" href="/">HOME</a></h2>
    </div>
</nav>

<div class="press-container">
    <?php
        $pressPosts = new WP_Query("cat=11"); 
        if ($pressPosts->have_posts()): 
            while ($pressPosts->have_posts()) : $pressPosts->the_post();
                ?>
                    <a class="press-item" href="<?php echo( get_the_permalink() ); ?>">
                        <?php the_title(); ?>
                    </a>
                    <span class="divider" ></span>
                <?php
            endwhile;
        else:
            echo '<p>no posts found</p>';
        endif 
    ?>
</div>

<?php get_footer(); ?>