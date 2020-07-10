<?php
/**
 * Template Name: Text
 * 
 * https://developer.wordpress.org/themes/template-files-section/page-template-files/
 *
 * @package WordPress
 * @subpackage Giulia_Theme
 * @since 1.0.0
*/
?>

<?php
 
 $args = array(
     'post_type' => 'post',
     'posts_per_page' => 4,
     'paged' => 2,
     'order'   => 'DISC',
     'orderby' => 'title'
);
 
 // The Query
 $the_query = new WP_Query( $args );
 
 ?>



<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col">

                <?php 
        if ( have_posts() ) {
        while ( have_posts() ) { the_post();
            $post_link= get_permalink();
            $post_title= get_the_title();
             ?>

        
        <a href="<?php echo $post_link; ?>">  <h1><?php echo $post_title; ?> </h1> </a>
        
        </div>
    </div>
</div>



<?php
 } // end while
} // end if
?>

<?php get_footer(); ?>