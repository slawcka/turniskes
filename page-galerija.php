<?php
/*   Template Name: galerija    */
get_header();
$thumbnail_url = wp_get_attachment_url (get_post_thumbnail_id ($post->ID) );
$telefono_numeris = get_field('telefono_numeris');
?>

    <?php  ?>


    <?php if( has_post_thumbnail() ) { //check feature image  ?>

    <section class="feature-image" style="background: url('<?php echo $thumbnail_url; ?>') no-repeat; background-size: cover;">
        <div class="container text-center">
            <div class="row">
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
    </section>

    <?php } else { //falback image ?>

    <section class="feature-image feature-image-default">
        <div class="container text-center">
            <div class="row">
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
    </section>

    <?php } ?>

    <div class="container-fluid ">
        <div class="row">

        </div>
    </div>

    <div class="container">
        <div class="row text-center">
            <div class="pad20">
                <?php while (have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
                <?php endwhile; ?>
            </div>
            <div class="row">
            </div>
        </div>
    </div>


        <?php get_footer(); ?>
