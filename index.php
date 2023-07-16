<?php
get_header();
?>
<nav class="nav">
    <h2 id="top-left"><a class="link-style" href="/tattoos/">TATTOOS</a></h2>
    <h2 id="top" ><a class="link-style" href="/fine-art/">FINE ART</a></h2>
    <h2 id="top-right"><a class="link-style" href="/flashes/">FLASHES</a></h2>
    <h2 id="middle-left"><a class="link-style" href="https://instagram.com/aemyitattoo">INSTAGRAM</a></h2>
    <h2 id="middle-right"><a class="link-style" href="/press/">PRESS</a></h2>
    <h2 id="bottom-left"><a class="link-style" href="/about/">ABOUT</a></h2>
    <h2 id="bottom-right"><a class="link-style" href="/booking/">BOOKING</a></h2>
</nav>

<div class="bg-video">
    <video autoplay muted loop playsinline preload="true">
        <source src="<?php echo get_template_directory_uri() . "/assets/images/logo_spin.mp4"?>" type="video/mp4">
    </video>
</div>

<div class="posts-container">
    <?php
        if (have_posts()) {
            while(have_posts()) {
                the_post();
                
            }
        }
    ?>
</div>

<?php 
get_footer();
?>