<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Moose_Framework
 */

?>
<!-- <h1>I am contact content</h1> -->
<article id="post-<?php the_ID(); ?>" <?php post_class('single-page'); ?>>
	<header class="entry-header contact-header">
		<?php the_title( '<h1 class="entry-title text-center">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">

		<article class="only-text">

			<section class="row contact-top-row hide">

				<div class="col-sm-12 col-md-6 col-lg-6 -col-sm-push-6 col-md-push-6 col-lg-push-6  wow slideInRight" data-wow-duration="2s" data-wow-delay=".5s">
					<img class="img-responsive" src="http://tiana.devhtmlfive.com/wp-content/uploads/2016/01/for-contact-page-final-7.jpg" alt="">
				</div>
				
				<div class="col-sm-12 col-md-6 col-lg-6 -col-sm-pull-6 col-md-pull-6 col-lg-pull-6 wow slideInLeft" data-wow-duration="2s" data-wow-delay=".5s" >
					
					<h3>Do you speak Freedom? It's ok if you don't, I speak English too.</h3>

					<ul class="contact-social">

						<div class="row">
							<li class="col-md-3"><span class="icon-container"><a href="#"><i class="fa fa-twitter fa-2x"></i></a></span></li>
							<p class="col-md-9">Follow Me on Twitter	</p>	
						</div>
						<div class="row">

							<li class="col-md-3"><span class="icon-container"><a href="#"><i class="fa fa-facebook fa-2x"></i></a></span></li>
							<p class="col-md-9">Like Me on Facebook</p>		
						</div>
						
						<div class="row">
							<!-- <span><a href="#"><i class="fa fa-google-plus fa-2x"></i></a></span>				 -->
							<li class="col-md-3"><span class="icon-container"><a href="#"><i class="fa fa-instagram fa-2x"></i></a></span></li>	
							<p class="col-md-9">Follow Me on Instagram</p>	
						</div>
						<div class="row">

							<li class="col-md-3"><span class="icon-container"><a href="#"><i class="fa fa-pinterest fa-2x"></i></a></span></li>	
							<p class="col-md-9">Follow Me on Pinterest</p>			
						</div>
						<div class="row">

							<li class="col-md-3"><span class="icon-container"><a href="#"><i class="fa fa-linkedin fa-2x"></i></a></span></li>	
							<p class="col-md-9">Follow Me on Pinterest</p>			
						</div>

					</ul>

				</div>
							

			</section>

			<section class="contact-form-row  wow slideInUp" data-wow-duration="2s" data-wow-delay=".5s">
				<?php
					the_content();

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'moose-frame' ),
						'after'  => '</div>',
					) );
				?>
			</section>
		
		</article>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					esc_html__( 'Edit %s', 'moose-frame' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
