<?php
/**
 * Template Name: Chi siamo
 * 
 * https://developer.wordpress.org/themes/template-files-section/page-template-files/
 *
 * @package WordPress
 * @subpackage Giulia_Theme
 * @since 1.0.0
*/
?>

<?php
//loop di worpress
if ( have_posts() ) {
 while ( have_posts() ) { the_post(); ?>

<?php get_header(); ?>

    <section class="">
        <div class="container section-y-padding">
            <div class="row">
                <div class="col">
                    <h1 class="text-primary text-uppercase"><?php  the_title(); ?></h1>
                    <div class="my-5"> <?php the_post_thumbnail('full', array('class' => 'your-class-name')); ?> </div>

                    <div> <?php  the_content(); ?> </div>
                </div>
            </div>
        </div>
    </section>

<?php
 } // end while
} // end if
?>

<?php get_footer(); ?>