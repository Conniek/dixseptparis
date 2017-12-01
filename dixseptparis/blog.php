<?php 
/*  
* Template Name: Blog 
* Description: Page Journal 
*/ 

 get_header(); ?>

<div id="hero-and-body">

	<?php 
	if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
	?>
		<section id="hero" class="hero-full text-light" style="background-image: url('<?php the_post_thumbnail_url(); ?>'); height: auto; background-size: cover;     background-attachment: fixed;">
			<div id="page-title" class="wrapper-small">
				<h1 class="heading1 align-center"><?php the_title(); ?></h1>
			</div>       
		</section>
	<?php } 
	?>

	<section id="page-body">
		<div class="wrapper-medium blog-page">
			<div class="spacer-big"></div>
	   		<?php query_posts('post_type=post&post_status=publish&posts_per_page=10&paged='. get_query_var('paged')); ?>

			<?php if( have_posts() ): ?>

		        <?php while( have_posts() ): the_post(); ?>




				<div class="kc-wrap-columns clearfix" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				 <?php if ($wp_query->current_post % 2 == 0): ?>
			        <div class="kc_col-sm-6  kc_col-xs-12 kc_column kc_col_thumbnail odd">
			    <?php else: ?>
			        <div class="kc_col-sm-6 kc_col-xs-12 kc_column kc_col_thumbnail even">
			    <?php endif ?>
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
					</div>

					<div class="kc_col-sm-6 kc_col-xs-12 kc_column kc_col_text" >
						<div class="spacer-medium"></div>
						<blockquote class="align-center">
							<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<p><?php the_excerpt(__('...','example')); ?></p>
						</blockquote>
						<div class="spacer-medium"></div>
					</div>
				</div>

		        <?php endwhile; ?>

			<?php endif; wp_reset_query(); ?>
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
