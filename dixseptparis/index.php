<?php get_header(); ?>

<div id="hero-and-body">

<?php 
if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
?>
	<section id="hero" class="hero-full text-light" style="background-image: url('<?php the_post_thumbnail_url(); ?>'); height: auto; background-size: cover;     background-attachment: fixed;">
		<div id="page-title" class="wrapper-small">
			<h1 class="heading1 align-center"><?php the_title(); ?></h1>
			<p class="p3" style="margin-left: 40%;"><?php the_field('description_manifesto'); ?></p>
		</div>       
	</section>
<?php } ?>
	<?php 
	if ( have_posts() ) : while ( have_posts() ) : the_post();

		get_template_part( 'content', get_post_format() );

	endwhile; endif; 
	?>
</div>


 
<?php get_footer(); ?>