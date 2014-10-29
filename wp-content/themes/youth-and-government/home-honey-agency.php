<?php
/*
Template Name: Home Honey Agency Tax Time
*/
?>

<?php get_header(); ?>

			<div id="content" class="clearfix">


				<div id="slider-map">
					<?php the_uds_billboard(homepage) ?>

					<div id="map">
					<a href="http://calymca.org/calymca-wordpress/wp-content/uploads/2014/10/2014AnnualReport-FINAL.pdf"><img src="<?php bloginfo('template_directory'); ?>/library/images/2014AnnualReport.png" style="margin-right: 10px;"></a>

					</div><!-- /map -->

				</div><!-- /slider-map -->


				<div id="big-buttons">
					<a href="/programs/" class="col300">Participate</a>
					<a href="/get-involved/volunteer-opportunities/" class="col300">Volunteer</a>
					<a href="/get-involved/fundraising-projects/" class="col300">Give</a>

				</div>

				<div id="main" class="col620 left first clearfix" role="main">

						<div id="snippets" class="hentry">

						<h2>Latest News</h2>
						<?php $args = array( 'numberposts' => 3 ); ?>
						<?php $frontpage_posts = get_posts( $args ); ?>
						<?php if( $posts ) : ?>

							<section>
								<?php foreach( $frontpage_posts as $post ) : setup_postdata( $post ); ?>

								<header>
									<h3><a href=<?php the_permalink() ?>>
									<?php the_title(); ?>
									</a></h3>
								</header>

								<article>
									<?php
										if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
  										the_post_thumbnail();
  										}
  									?>

									<?php echo wp_get_attachment_image( 1 ); ?>
									<?php the_excerpt(); ?>
								</article>

								<?php endforeach; ?>
							</section>

						<?php endif; ?>

						<a href="/our-cause/news/">View all news items &#187;</a>

					</div>




				</div> <!-- end #main -->

				<?php get_sidebar(); // sidebar 1 ?>

			</div> <!-- end #content -->

				<div class="sponsors">
					<h4>We gratefully acknowledge the following companies for their commitment to ensuring that democracy continues to be learned by each generation.  Their financial support is deeply appreciated.</h4>
					<div class="top-row">
						<a class="sponsor lower top-row" href="http://www.agclawfirm.com/"><img src="<?php echo get_template_directory_uri(); ?>/library/images/supporters/alvarez-glasman-colvin.png" alt="alvarez-glasman-colvin" ></a>
						<a class="sponsor lower top-row" href="http://www.belkin.com/us"><img src="<?php echo get_template_directory_uri(); ?>/library/images/supporters/belkin.png" alt="belkin"></a>
						<a class="sponsor chevron top-row" href="http://www.chevron.com/"><img src="<?php echo get_template_directory_uri(); ?>/library/images/supporters/chevron.png" alt="chevron"></a>
						<a class="sponsor gibson-dunn lower top-row" href="http://www.gibsondunn.com"><img src="<?php echo get_template_directory_uri(); ?>/library/images/supporters/gibson-dunn.png" alt="gibson-dunn"></a>
						<a class="sponsor hsubu" href="http://www.hsubutravel.com/"><img src="<?php echo get_template_directory_uri(); ?>/library/images/supporters/hsubu.png" alt="hsubu"></a>
					</div>
					<div class="bottom-row">
						<a class="sponsor keenan" href="http://www.keenan.com/"><img src="<?php echo get_template_directory_uri(); ?>/library/images/supporters/keenan.png" alt="keenan"></a>
						<a class="sponsor lower" href="http://www.majesticrealty.com/"><img src="<?php echo get_template_directory_uri(); ?>/library/images/supporters/majestic.png" alt="majestic reality"></a>
						<a class="sponsor supershuttle lower" href="http://www.supershuttle.com/"><img src="<?php echo get_template_directory_uri(); ?>/library/images/supporters/supershuttle.png" alt="super shuttle"></a>
						<a class="walmart lower" href="http://www.walmart.com/"><img class="sponsor" src="<?php echo get_template_directory_uri(); ?>/library/images/supporters/walmart.png" alt="walmart"></a>
						<a class="inland-empire lower" href="http://www.iesbuses.com/"><img class="sponsor" src="<?php echo get_template_directory_uri(); ?>/library/images/supporters/inland-empire.png" alt="inland empire"></a>
					</div>
				</div>

<?php get_footer(); ?>