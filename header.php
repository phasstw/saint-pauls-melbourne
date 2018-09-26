<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

	<meta charset='<?php bloginfo('charset') ?>'>
	<?php if (is_search()) { ?>
		<meta name="robots" content="noindex, nofollow">
	<?php }?>
	<meta name="viewport" content="width=device-width">
	<!-- link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/global.css" type="text/css" -->
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>">

	<meta property="og:url"           content="<?php echo get_the_permalink(); ?>" />
	<meta property="og:type"          content="website" />
	<meta property="og:title"         content="<?php echo the_title_attribute(); ?>" />
	<meta property="og:description"   content="Website description here." />
	<meta property="og:image"         content="<?php echo the_post_thumbnail_url( 'large'); ?>" />

	<title>
		<?php 
			if(is_home()) { 
				echo " Blog | ";
				echo bloginfo("name");
			} 
			else { 
				echo wp_title(" | ", false, 'right');
				echo bloginfo("name");
			} 
		?>
	</title>

	<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
	<div class="page-wrap">
		<header>
			<span class="anchor" id="menu"></span><!--used to close/opon nav menu and show/hide menu buttons-->

			<nav class="grid clear">
				<div class="buttons-left">
					<a href="<?php echo get_site_url() ?>/worship/">
						<div class="button">worship</div>
					</a>
					<a href="<?php echo get_site_url() ?>/fellowship/">
						<div class="button">fellowship</div>
					</a>
					<a href="<?php echo get_site_url() ?>/education/">
						<div class="button">education</div>
					</a>
				</div>

				<a href="<?php echo get_site_url() ?>/" class="logo">
					<h1 class="smallcaps">saint</h1>
					<div class="logo"></div>
					<h1 class="smallcaps">paul's</h1>
				</a>

				<div class="buttons-right">
					<a href="<?php echo get_site_url() ?>/sermons/">
						<div class="button">sermons</div>
					</a>
					<a href="<?php echo get_site_url() ?>/about/">
						<div class="button">about</div>
					</a>
					<a href="<?php echo get_site_url() ?>/contact/">
						<div class="button">contact</div>
					</a>
					<a class="menu open" href="#menu">
						<div class="button fa fa-bars"></div>
					</a>
					<a class="menu close" href="#">
						<div class="button fa fa-bars"></div>
					</a>
				</div>
			</nav>
			<?php if(!is_single()){ ?>
				<div class="hero-overlay">
					<h1 class="header-title">
					<?php 
						if(is_page('home')){ 
							echo "Saint Paul's";				
						}
						if(is_page('worship')){
								echo 'Worship';	
						}
						if(is_page('fellowship')){
								echo 'Fellowship';	
						}
						if(is_page('education')){
								echo 'Education';	
						}
						if(is_page('sermons')){
								echo 'Sermons';	
						}

						if(is_home()){ //wordpress does not have a conditional function/tag for blog page (i.e., is_home)
								echo 'News';	
						}
						if(is_page('about')){
								echo 'About';	
						}
						if(is_page('contact')){
								echo 'Contact';	
						}
					?>
					</h1>
					<?php 
						if(is_page('home')){ 
							echo '<div class="hero-line"></div><h1 class="header-title-2">Anglican Church</h1>';				
						}
					?>
					</h2>
				</div>
			<?php 
			}//end if
			else {
				if(has_post_thumbnail()){?>
				<div class="hero-featured-image">
					<?php the_post_thumbnail(); ?>
				</div> <?php
				}
			}
			?>





			<?php
				/*PHP for Custom Page Featured Images; not used currently, but may want later

				//get hero for index.php and also apply it to archive.php
				if(is_home() || is_archive()) { 
					$page_for_posts = get_option( 'page_for_posts' );
					echo '<div class="hero-img" role="image">';
					include(TEMPLATEPATH."/global-parts/navigation-menu.php");
					get_the_post_thumbnail($page_for_posts, 'large');
					echo '</div>';
				}
				//get hero for all pages except index.php, archive.php, and single.php
				if ( has_post_thumbnail() && !is_single()) {
					echo '<div class="hero-img" role="image">';
					include(TEMPLATEPATH."/global-parts/navigation-menu.php");
					if(is_page('home')){
						the_post();
					}
					the_post_thumbnail();
					echo '</div>';
					
				}
				if(is_single()){
					echo '<div class="hero-img single-post" role="image">';
					include(TEMPLATEPATH."/global-parts/navigation-menu.php");
						the_post_thumbnail();
					echo '</div>';
				}	
				*/
				?>
			<?php
			if (is_page('home')){
				echo "<div class='info-box'><h2>Come & Worship With Us:</h2><address><a href='https://goo.gl/maps/yySKRFePhq92'>7200 N. Wickham Road<br>Melbourne, FL 32940</a></address></div>";
			}
			?>
		</header>
