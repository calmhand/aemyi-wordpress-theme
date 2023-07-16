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

<div class="error-container">
    Page not found.
</div>

<?php get_footer(); ?>

<style>
    .error-container {
        min-height: 100vh;
        font-family: 'Archivo Black', sans-serif;
        color: #fe024a;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
</style>