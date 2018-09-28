<?php
/*
Template Name: Sermons Page
*/
?>

<?php get_header(); ?>

<section class="sermons">
  <h2 class="section-heading"><span>Sermons</span></h2>
  <div class="sermons grid">
    <?php 
    $args = array(
      'post_type' => 'sermon'
    );
    $sermon = new WP_Query($args);
    while($sermon->have_posts()) : $sermon->the_post(); ?>
      <!--start post-->
      <div class="sermon">
        <p><?php the_title(); ?></p>
        <p><?php echo(types_render_field("sermon-date", array("raw" => false))); ?></p>
        <div class="audio"><?php echo(types_render_field("sermon-audio", array("raw" => false))); ?></div>
      </div>
      <!--end post-->

    <?php endwhile; ?>
    <?php wp_reset_postdata(); // reset the query ?>
  </div>
  
</section>

<?php get_footer(); ?>
