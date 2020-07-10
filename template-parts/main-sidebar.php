<?php
/**
 * Main sidebar
 * 
 * https://developer.wordpress.org/themes/template-files-section/page-template-files/
 *
 * @package WordPress
 * @subpackage Giulia_Theme
 * @since 1.0.0
*/
?>


<?php if ( is_active_sidebar( 'sidebar-1' ) ) { ?>
    <div class="sidebar">
        <?php dynamic_sidebar('sidebar-1'); ?>
    </div>
<?php } ?>

