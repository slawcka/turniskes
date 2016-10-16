<?php
/*
Template Name: Home Page
 */
// Custom Fields
//Advanced custom fieldsss

$aprasymo_pavadinimas = get_field('aprasymo_pavadinimas');

get_header(); ?>

    <?php get_template_part('content','hero'); ?>
    <?php get_template_part('content','aprasymas'); ?>

    <section class="aprasymas bwhite">
        <div class="container-fluid">
            <div class="row text-center ">
                <h2><?php echo $aprasymo_pavadinimas; ?></h2>

            </div>


           <?php $loop= new WP_Query (array('post_type' => 'aprasymo_turinys', 'orderby' => 'post_id', 'order' => 'ASC' )); ?>
           <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="container-fluid ">
                <div class="container">
                    <div class="row">
                       <div class="col-sm-5  aprasymas-pav">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="col-sm-7  aprasymas-tekstas">
                            <h3><?php the_title(); ?></h3>
                            <p>
                                <?php the_content(); ?>
                            </p>
                            <a class="button" href="<?php echo get_page_link(384); ?>">Daugiau</a>
                        </div>


                    </div>
                </div>
            </div>
             <?php endwhile; ?>
        </div>
    </section>
<div class="foot">
    <?php get_footer(); ?>
    </div>
