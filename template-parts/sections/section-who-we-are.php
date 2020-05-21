<?php
/**
 * The homepage who we are section file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Sam_Theme
 * @since 1.0.0
 */
?>
 
 <?php
$who_we_are= get_field('who_we_are');

if($who_we_are):
?>

 <!-- sezione chi siamo -->
 <section class="section section-who-we-are">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 section-y-padding">
                        <h2 class="text-primary text-uppercase">
                        
                        <?php 
                            if(isset ($who_we_are['title'])&& $who_we_are['title'] ){ 
                                echo $who_we_are['title']; 
                            } else {
                                the_title();
                            }
                            ?>
                        </h2>

                        <?php if(isset ($who_we_are['content'])&& $who_we_are['content']):?>
                            <p><?php echo $who_we_are['content']?></p>
                        <?php endif; ?>
                        <?php if(isset ($who_we_are['call_to_action'])&& $who_we_are['call_to_action']):?>
                            <a href="<?php echo $who_we_are['call_to_action']['url'] ?>" target="<?php echo $who_we_are['call_to_action']['target'] ?>" class="btn btn-primary text-uppercase btn-lg rounded-0"><?php echo $who_we_are['call_to_action']['title'] ?></a>
                        <?php endif; ?>

                            
                    </div>

                    <div class="col-12 col-md-6 d-none d-md-block">
                    <img class="img-who-we-are d-none d-md-block" src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.png" alt="maglietta vans">
                      
                    </div>
                </div>
            </div>
        </section>

        <?php endif; ?>