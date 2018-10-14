<?php get_header(); ?>

</header>


<?php the_post(); ?>

  <section class="single">

    <article class="post" id="post-<?php the_ID(); ?>">
      <?php if ( get_post_type( get_the_ID() ) == 'sermon' ) {?>

        <div class="sermon-header">
          <h3 class="sermon-title"><?php the_title(); ?></h3>
          <div class="sermon-underline"></div>
        </div>

        <div class="audio-wrapper clear">
          <div class="sermon-audio"><?php echo(types_render_field("sermon-audio", array("raw" => false))); ?></div>
          <a class="button smallcaps" href="#">view propers</a>
        </div>

        <div class="sermon-manuscript"><?php echo(types_render_field("sermon-manuscript", array("raw" => false))); ?></div>

        <div class="double-line-flourish"></div>

        <div class="sermon-info">
          <p class="sermon-preacher">Preacher: <?php echo(types_render_field("preacher-full-name", array("raw" => true))); ?></p>
          <date class="sermon-date">Preached on: <?php echo(types_render_field("sermon-date", array("raw" => false))); ?></date>
          <p class="sermon-tags"><?php the_tags(); ?></p>
        </div>

        <div class="double-line-flourish"></div>
        
    
      <?php
      } ?>
    </article>
  </section>

<?php get_footer(); ?>
