<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>

<section class="home">

  <h2 class="double-line-heading main"><span>Sunday Morning</span></h2>

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

  <?php include(TEMPLATEPATH."/global-parts/section-divider-quote-acts.php"); ?>
  
  <h2 class="double-line-heading main"><span>Daily Worship</span></h2>
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

  <?php include(TEMPLATEPATH."/global-parts/section-divider-text-centered.php"); ?>

  <!--<h2 class="section-heading"><span>Christian Fellowship</span></h2>-->
  <h2 class="double-line-heading main"><span>Latest Publications</span></h3>

  <div class="latest-magazine clear">
    <div class="text-wrap">
      <h3 class="magazine-title"><span class="italic">Regula Vitae</span></h3>
      <p class="magazine-desc">
        <span class="italic">Regula Vitae</span> is a Latin phrase that translated into English means, <span class="italic">"a rule of life."</span> Essentially, a rule of life is a private rule of prayer; that is to say, it is a thoughtful, personal, and conscious lifestyle that encourages one to grow closer to God and to become more and more like Him through a <span class="italic">regular</span> devotional life. Often times, Christians will subscribe to a common rule, sharing together in the pursuit of holiness. It is for this reason that the official parish magazine of Saint Paul's, Melbourne bears this title. <span class="italic">Regula Vitae</span> is published with the intention of helping the faithful of Saint Paul's Church encourage one another in the pursuit of holiness. It is published on the first of the month and is available in both print and electronic format. It is filled with news about Saint Paul's Anglican Church, <a class="link" href="https://anglicanprovince.org/">the Diocese of the Eastern United States</a>, theological articles, and other subjects of importance.
      </p>
    </div>
    
    <div class="mag-thumb-wrap">
      <div class="thumbnail"></div>
      <a class="button magazine-button smallcaps" href="http://www.saintpaulsmelbourne.org/wp-content/uploads/2018/10/whole-issue.pdf">download latest issue</a>
    </div>
  </div>
  

  <div class="latest-loop-3">
    <h3 class="double-line-heading sub smallcaps"><span>sermons</span></h3>
    <div class="grid">
      <?php 
        $args = array(
          'posts_per_page'  => '3',
          'post_type' => 'sermon'
        );
        $query = new WP_Query($args);
          if($query->have_posts()){
            while($query->have_posts()): ?>
              <?php $query->the_post(); ?>

              <article class="post-preview grid-1-3 clear">
                <a class="thumbnail" href="<?php the_permalink(); ?>">
                  <?php if(has_post_thumbnail()){ ?>
                    <?php the_post_thumbnail(); ?>
                  <?php } ?>
                </a>
                <a class="title" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
              </article>
            
            <?php endwhile;
          }
        // clean up after wp_query
        wp_reset_postdata(); 
      ?>
    </div>
  </div>
  <!--
  <div class="latest-loop-3">
    <h3 class="double-line-heading sub smallcaps"><span>articles</span></h3>
    <div class="grid">
      <?php /*
        $args = array(
          'posts_per_page'  => '3',
          'post_type' => 'post'
        );
        $query = new WP_Query($args);
          if($query->have_posts()){
            while($query->have_posts()): ?>
              <?php $query->the_post(); ?>

              <article class="post-preview grid-1-3 clear">
                <a class="thumbnail" href="<?php the_permalink(); ?>">
                  <?php 
                    if(has_post_thumbnail()){ ?>
                      <?php the_post_thumbnail(); 
                    }
                    else { ?>
                       <img src="images/green.jpg"> <?php
                     } 
                    ?>
                </a>
                <a class="title" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
              </article>
            
            <?php endwhile;
          }
        // clean up after wp_query
        wp_reset_postdata(); 
      */?>
    </div>
  </div>


  <div class="latest-loop-3">
    <h3 class="double-line-heading sub smallcaps"><span>news & announcements</span></h3>
    <div class="grid">
      <?php /*
        $args = array(
          'posts_per_page'  => '3',
          'post_type' => 'post',
          'cat' => 'News & Announcements'
        );
        $query = new WP_Query($args);
          if($query->have_posts()){
            while($query->have_posts()): ?>
              <?php $query->the_post(); ?>

              <article class="post-preview grid-1-3 clear">
                <a class="thumbnail" href="<?php the_permalink(); ?>">
                  <?php if(has_post_thumbnail()){ ?>
                    <?php the_post_thumbnail(); ?>
                  <?php } ?>
                </a>
                <a class="title" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
              </article>
            
            <?php endwhile;
          }
        // clean up after wp_query
        wp_reset_postdata(); 
      */?>
    </div>
  </div>
-->
</section>

<?php get_footer(); ?>
