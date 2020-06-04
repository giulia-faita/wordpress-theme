<?php
/**
 * The homepage template 
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Sam_Theme
 * @since 1.0.0
 */
?>

<?php get_header(); ?>

<!-- page hero -->
<?php get_template_part('template-parts/sections/section-page-hero')?>

<!-- section who we are -->
<?php get_template_part('template-parts/sections/section-who-we-are')?>

<!-- section blog -->
<?php get_template_part('template-parts/sections/section-blog')?>





<div class="container">
    <div class="row">
        <div class="col">


         

<?php 
//wordpress loop
if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); 
        // Display post content
        ?>
        <h1>
            <?php the_title();?>
        </h1>
        <div>
            <?php the_content();?>
        </div>
        <small>
            <?php the_excerpt();?>
        </small>
        <?php
    endwhile; 
else:
    _e('Sorry, no posts matched your criteria.','samtheme');
endif; 
?>

        </div>
    </div>
</div>
<?php get_footer(); ?>