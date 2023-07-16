<?php get_header(); ?>
<nav class="site-header">
    <div class="social-container" id="top-left">
        <h2><a class="link-style" href="/tattoos/">TATTOOS</a></h2>
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
<div class="flashes-container" id="flashes-container">
    
    <div class="skin-tone-controls">
        <button onclick="changeBackground(`#fef6ee`)" id="skintone-one"></button>
        <button onclick="changeBackground(`#ffe6da`)" id="skintone-two"></button>
        <button onclick="changeBackground(`#f4d5b8`)" id="skintone-three"></button>
        <button onclick="changeBackground(`#c28567`)" id="skintone-four"></button>
        <button onclick="changeBackground(`#602e17`)" id="skintone-five"></button>
        <button onclick="changeBackground(`#352408`)" id="skintone-six"></button>
    </div>

    <div class="flash-list">
        <?php
            $flashPosts = new WP_Query("cat=4"); 
            if ($flashPosts->have_posts()): 
                while ($flashPosts->have_posts()) : $flashPosts->the_post();
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

    <div class="controller-note"> Select a flash for more details.<br> Use the controller to test skin tones. </div>
</div>
<?php get_footer(); ?>