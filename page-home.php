<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>

<section class="home">
  <h2 class="section-heading"><span>Sunday Morning</span></h2>

  <div class="service-times-bg">
    <div class="service-times">
      <h3>Sunday Service Times</h3>
      <p>7:00am - Morning Prayer</p>
      <p>8:00am - Holy Eucharist (<span class="italic">said</span>)</p>
      <p>10:00am - Holy Eucharist (<span class="italic">sung</span>) with Incense*</p>
      <span id="footnote" class="italic">*Childcare available for children younger than 5 years old</span>
    </div>
  </div>

  <p class="drop-sc">
    Since the first Easter Morning, Sunday has been set apart as "the Lord's Day," a weekly celebration of the Resurrection of Jesus Christ from the Dead. At Saint Paul's Church, we look forward to the “life of the world to come” and participate in this weekly celebration by doing what Our Lord commanded us to do in His Holy Gospel: we gather together and celebrate the Holy Eucharist.
  </p>

  <a class="button smallcaps" href="/worship">view daily service schedule</a>

  <p id="learn-more"><span class="smallcaps">learn more about: </span><a class="link" href="#">Worship at Saint Paul's</a> <a class="link" href="#">Ministries & Outreach</a> <a class="link" href="#">Anglicanism</a> </p>
  <a class="button magazine-button smallcaps" href="http://www.saintpaulsmelbourne.org/wp-content/uploads/2018/10/whole-issue.pdf">download parish magazine</a>
  <h4 id="latest-sermon">Latest Sermon</h4>
  <?php 
    $args = array(
      'post_type' => 'sermon',
      'orderby' => 'publish_date',
      'order' => 'DESC',
      'posts_per_page' => 1
    );
    $sermon = new WP_Query($args);
    while($sermon->have_posts()) : $sermon->the_post(); ?>
      <!--start post-->
      <div class="sermon-audio"><?php echo(types_render_field("sermon-audio", array("raw" => false))); ?></div>
      <!--end post-->

    <?php endwhile; ?>
    <?php wp_reset_postdata(); // reset the query
  ?>
  <div class="text-divider">
    <div class="text-wrap clear">
      <p class="verse">And they continued stedfastly in the apostles' doctrine and fellowship, and in breaking of bread, and in prayers…</p>
      <p class="citation">- The Acts of the Apostles 2:42</p>
    </div>
  </div>
  <h2 class="section-heading"><span>Daily Worship</span></h2>
  <p class="drop-sc">
    The world is full of distractions. These can keep us from being still and knowing the God we worship. We, at Saint Paul’s, believe in the importance of daily prayer and spiritual devotions. Come, pray, and find rest in Our Lord’s Sacramental Presence.
  </p>
  <div class="devotions-bg">
    <ul class="devotions">
      <h3 class="smallcaps">opportunities for devotion:</h3>
      <li><a class="link">Morning Prayer</a></li>
      <li><a class="link">Evening Prayer</a></li>
      <li><a class="link">Weekday Eucharist</a></li>
      <li><a class="link">Eucharistic Adoration</a></li>
      <li><a class="link">The Rosary</a></li>
      <li><a class="link">Stations of the Cross</a></li>
    </ul>
  </div>
  <span id="caption" class="italic">A beautiful stained-glass window from our Lady Chapel</span>
</section>

<?php get_footer(); ?>
