<?php 
/*  
* Template Name: Contact 
* Description: Contact 
*/ 

 get_header(); ?>

<div id="hero-and-body">

	<section id="hero" class="hero-full text-light" style="background-image: url('<?php the_post_thumbnail_url(); ?>'); height: auto; background-size: cover;     background-attachment: fixed;">
		<div id="page-title" class="wrapper-small">
			<h1 class="heading1 align-center"><?php the_title(); ?></h1>
		</div>       
	</section>

	<section id="page-body">
		<div class="wrapper contact-page">
			<?php
				while ( have_posts() ) : the_post();

				the_content();

				endwhile; // End of the loop.
				?>	
		</div>
	</section>

	<section id="widget_creations">
		<div class="portfolio-crea">
			<div class="portfolio-crea-title"><a href="?page_id=128">Nos créations</a></div>
		</div>
	</section>


	<section class="hero-bg text-light widget">
		<div class="videobg-section videobg_height"
	        data-phattype="vimeo" 
	        data-phatvideoid="232575150"
	        data-phatratio="21/9"
	        data-phatposter="files/uploads/1680x1100-dark.jpg"
	        data-phatmute="false"
	        data-phatplaypause="true"
	        >
		    <div class="wrapper-small align-center">
				<div class="spacer-big"></div>
				<h3 class="heading1 align-center"><?php the_field('titre'); ?></h3>
				<?php 
				$link = get_field('button_link_to_page');
				if( $link ): ?>
				<a href="<?php echo $link; ?>" class="sr-button style-3"><?php the_field('button_title'); ?></a>
				<?php endif; ?>
				<div class="spacer-big"></div>
			</div> 
		</div>
	</section>
</div>
 
<?php get_footer(); ?>
