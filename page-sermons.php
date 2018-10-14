<?php
/*
Template Name: Sermons Page
*/
?>

<?php get_header(); ?>

<section class="sermons">
  <h2 class="section-heading"><span>Sermons</span></h2>
  <div class="grid">
    <?php 
    $args = array(
      'post_type' => 'sermon',
      'orderby' => 'publish_date',
      'order' => 'DESC'
    );
    $sermon = new WP_Query($args);
    while($sermon->have_posts()) : $sermon->the_post(); ?>
      <!--start post-->
      <div class="single-sermon">
        <h3 class="sermon-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <p class="sermon-preacher">Preacher: <?php echo(types_render_field("preacher-full-name", array("raw" => true))); ?></p>
        <date class="sermon-date">Preached on: <?php echo(types_render_field("sermon-date", array("raw" => false))); ?></date>
        <p class="sermon-tags"><?php the_tags(); ?></p>
        <div class="audio-wrapper clear">
          <div class="sermon-audio"><?php echo(types_render_field("sermon-audio", array("raw" => false))); ?></div>
          <a class="button manuscript smallcaps" href="<?php the_permalink(); ?>">read manuscript</a>
        </div>
      </div>
      <!--end post-->

    <?php endwhile; ?>
    <?php wp_reset_postdata(); // reset the query ?>
  </div>
  
</section>

<?php get_footer(); ?>
