<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package storefront
 */

get_header(); ?>
    <?php
      get_header();?>
Copy code
<figure>
    <video controls muted loop autoplay preload="auto" id="videoBoulangerie">
        <?php
            $video_id = 119; // ID de la vidéo dans les médias de WP
            $video_url = wp_get_attachment_url( $video_id );
        ?>
        <source type="video/mp4" src="<?php echo $video_url; ?>"></source>
    </video>
</figure>
      <?php if(have_posts()) :
        while(have_posts()) : the_post();

          // print_r(get_post_type());
          // get_template_part( 'template-parts/content', get_post_type() );

        endwhile;
      else :

        // get_template_part( 'template-parts/content', 'none' );

      endif;

      do_action( 'storefront_sidebar' );
      get_footer();

    ?>

 <?php get_footer();?>


