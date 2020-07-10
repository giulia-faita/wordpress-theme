<?php
/**
 * The template for displaying the search form.
 *
 * @package WordPress
 * @subpackage Giulia_Theme
 * @since 1.0.0
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
  <label>
    <input type="search" class="search-field" placeholder="Cerca nel sito…" value="" name="s" title="Cerca:" />
  </label>
  <input type="submit" class="btn btn-search btn-primary text-uppercase rounded-0 my-5" value="Cerca" />
</form>



