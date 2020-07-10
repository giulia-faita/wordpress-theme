<?php
/**
 * The template for displaying the 404 template in the Twenty Twenty theme.
 *
 * @package WordPress
 * @subpackage Giulia_theme
 * @since 1.0.0
 */

get_header();
?>

<main id="site-content" role="main">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section-inner thin error404-content text-center my-5">

                    <h1 class="entry-title text-primary text-uppercase mt-5"><?php _e( '404', 'Giulia-theme' ); ?></h1>
                    <h1 class="entry-title  mb-5"><?php _e( 'Pagina non trovata', 'giulia-theme' ); ?></h1>

                    <div class="intro-text my-5"><p><?php _e( 'La pagina che stavi cercando non è stata trovata. Potrebbe essere stata rimossa o rinominata.', 'giulia-theme' ); ?></p></div>

                    <?php
                    get_search_form(
                        array(
                            'label' => __( '404 not found', 'Giulia-theme' ),
                        )
                    );
                    ?> 
                

                </div><!-- .section-inner -->
            </div>
        </div>
    </div>

	

</main><!-- #site-content -->

<?php
get_footer();



