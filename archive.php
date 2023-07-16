<?php get_header(); ?>

<div id="bg-video" class="bg-video">
    <video autoplay muted loop playsinline preload="true">
        <source src="<?php echo get_template_directory_uri() . "/assets/images/flamealive.mp4"?>" type="video/mp4">
    </video>
</div>

<div class="archive-container">
    <?php
        if (have_posts()) {
            while(have_posts()) {
                the_post();
                ?>
                    <a class="post-link" href=<?php echo( get_the_permalink() ); ?>>
                        <?php the_post_thumbnail(array(400,400)); ?>
                        <span class="post-link-title"><?php the_title(); ?></span>
                    </a>
                <?php
            }
        }
    ?>
</div>

<?php get_footer(); ?>

<style>
    .archive-container {
        min-height: 100vh;
        font-family: 'Archivo Black', sans-serif;
        color: #fe024a;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
    }
</style>