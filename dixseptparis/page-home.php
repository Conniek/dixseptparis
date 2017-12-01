<?php 
/*  
* Template Name: Home Page 
* Description: Home page 
*/ 

 get_header(); ?>

<div id="hero-and-body">

	<!-- PAGEBODY -->

	<section id="page-body">

			<!-- VIDEO  DIXSEPT -->


		<div id="fullpage" class="scroll_page">
			<div id="hero" id="hero" class="hero-full slide__content text-light videobg-section"
        data-phattype="vimeo" 
        data-phatvideoid="226586881"
        data-phatratio="21/9"
        data-phatposter="files/uploads/1680x1100-dark.jpg"
        data-phatmute="false"
        data-phatplaypause="true"
        >
				<div id="scrolldown" class="center">
					<span class="scroll-btn__label">Scroller</span>
					<div class="scroll-btn__line">
						<div class="scroll-btn__inner-line"></div>
					</div>
				</div>
			</div>
			<?php 
			if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
			?>
			<div id="post-<?php the_ID(); ?>" class="slide__content text-light" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
			<?php } ?>
				<div class="slide__inner align-center">
					<h2 class="heading1"><a href="<?php echo get_field('lien_vers_page_home'); ?>"><?php  the_field('titre_headind_1'); ?></a></h2>
					<h3 class="heading2"><?php  the_field('titre_heading_2'); ?></h3>
					<p><?php  the_field('description_home'); ?></p>
					<a href="<?php echo get_field('lien_vers_page_home'); ?>" class="sr-button style-3"><?php  the_field('texte_button_home'); ?></a>
				</div>
			</div>
			<?php global $post, $wp_query, $request;
				$portfolio_options = get_option( 'prtfl_options' );

			$count = 0;
			if ( get_query_var( 'paged' ) ) {
				$paged = get_query_var( 'paged' );
			} elseif ( get_query_var( 'page' ) ) {
				$paged = get_query_var( 'page' );
			} else {
				$paged = 1;
			}
			$per_page = $showitems = get_option( 'posts_per_page' );
			$technologies = isset( $wp_query->query_vars["technologies"] ) ? $wp_query->query_vars["technologies"] : "";
			$executor_profile = isset( $wp_query->query_vars["portfolio_executor_profile"] ) ? $wp_query->query_vars["portfolio_executor_profile"] : "";
			
				$args = array(
					'post_type'			=>	'portfolio',
					'post_status'		=>	'publish',
					'orderby'			=>	$portfolio_options['order_by'],
					'order'				=>	$portfolio_options['order'],
					'posts_per_page'	=>	$per_page,
					'paged'				=>	$paged,
				    'meta_query' => array(
				        array(
				            'key' => 'mise_en_avant_sur_la_home', // name of custom field
				            'value' => '"oui"', // matches exactly "red"
				            'compare' => 'LIKE'
				        )
				    )
				);


			$second_query = new WP_Query( $args );
			$request = $second_query->request;

			if ( $second_query->have_posts() ) :
				while ( $second_query->have_posts() ) : $second_query->the_post(); ?>
					<?php $post_thumbnail_id	=	get_post_thumbnail_id( $post->ID );
					if ( empty ( $post_thumbnail_id ) ) {
						$args = array(
							'post_parent'		=>	$post->ID,
							'post_type'			=>	'attachment',
							'post_mime_type'	=>	'image',
							'numberposts'		=>	1
						);
						$attachments		=	get_children( $args );
						$post_thumbnail_id	=	key( $attachments );
					}
					$image			=	wp_get_attachment_image_src( $post_thumbnail_id, 'full' );
					$image_alt		=	get_post_meta( $post_thumbnail_id, '_wp_attachment_image_alt', true );
					$post_meta		=	get_post_meta( $post->ID, 'prtfl_information', true );

					$short_descr	=	isset( $post_meta['_prtfl_short_descr'] ) ? $post_meta['_prtfl_short_descr'] : '';
					if ( empty( $short_descr ) )
						$short_descr = get_the_excerpt();
					$title = get_the_title();
					if ( empty( $title ) )
						$title = '(' . __( 'No title', 'portfolio-pro' ) . ')';

					$permalink = get_permalink();
					if ( ! empty( $image[0] ) ) { ?>
						<div id="post-<?php the_ID(); ?>" class="slide__content text-light" style="background-image: url('<?php echo $image[0]; ?>')">
							<div class="slide__inner align-center">
								<h2 class="heading1"><a href="<?php echo $permalink; ?>"><?php echo $title; ?></a></h2>
								<h3 class="heading2"><?php echo $short_descr; ?></h3>
								<a href="<?php echo $permalink; ?>" class="sr-button style-3">Voir le projet</a>
							</div>
						</div>
					<?php } ?>
				<?php endwhile;
			endif;?>	
		</div>
	</section>
	<!-- PAGEBODY -->
</div>
 
<?php get_footer(); ?>
