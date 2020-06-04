<?php
/**
 * The homepage single post template 
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Sam_Theme
 * @since 1.0.0
 */
?>

<?php get_header(); ?>

<main id="site-content" role="main">
    <div class="container">
        <div class="row">
            <div class="col">

                <?php
                    if (have_posts() ) :
                        while (have_posts() ) :
                            the_post(); ?>

                            <h1> <?php the_title(); ?> </h1>
                            <?php          
                        endwhile;
                    endif;
                ?>

            </div>
        </div>
    </div>
</main>    

<?php get_footer(); ?>