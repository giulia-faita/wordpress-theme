<?php
/**
 * Template Name: Chi siamo
 * 
 * https://developer.wordpress.org/themes/template-files-section/page-template-files/
 *
 * @package WordPress
 * @subpackage Sam_Theme
 * @since 1.0.0
*/
?>

<?php 
if ( have_posts() ) {
 while ( have_posts() ) { the_post(); ?>

<?php get_header(); ?>

<div class="container section-y-padding">
        <div class="row">
            <div class="col">
                <h1 class="text-primary text-uppercase"><?php  the_title(); ?></h1>
                <?php  the_content(); ?>
            </div>
        </div>
</div>


<?php
 } // end while
} // end if
?>

<?php get_footer(); ?>