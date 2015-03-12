			<footer role="contentinfo">

				<div id="inner-footer" class="clearfix">

					<nav class="col700 gradient">
						<?php bones_footer_links(); // Adjust using Menus in Wordpress Admin ?>
					</nav>

					<a href="http://ymcagivetoday.org/calymcayg" id="footer-donate">Donate</a>

					<?php if ( is_front_page() ) {

						do_action( 'addthis_widget', $url, $title, $customAddThis = array(
							'preferred' => '0', //the numbenr of auto personalized services
							'more' => true,
							'services' => 'facebook,twitter,google_plusone',
							)
					 	);

					 	} else {

					 	} ?>

				</div> <!-- end #inner-footer -->

				<div id="below-footer">
					<p id="below-footer-left">2555 3rd Street, Suite 215 Sacramento CA 95818 | (916) 287-9622</p>
					<p id="below-footer-right">&copy California YMCA Youth & Government | <a href="/terms-of-use/">Terms of Use</a> | Website by <a href="http://chrisbauer.org">Chris Bauer</a></p>
				</div>

			</footer> <!-- end footer -->

		</div> <!-- end #container -->

		<!-- scripts are now optimized via Modernizr.load -->
		<script src="<?php echo get_template_directory_uri(); ?>/library/js/scripts.js"></script>

		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->

		<script type="text/javascript">
			  var uvOptions = {};
			  (function() {
			    var uv = document.createElement('script'); uv.type =
			'text/javascript'; uv.async = true;
			    uv.src = ('https:' == document.location.protocol ? 'https://' :
			'http://') + 'widget.uservoice.com/Wy1ADc8DaEMYwvxZElG3g.js';
			    var s = document.getElementsByTagName('script')[0];
			s.parentNode.insertBefore(uv, s);
			  })();
		</script>

		<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/library/js/slick/slick.min.js"></script>		

		<?php wp_footer(); // js scripts are inserted using this function ?>



	</body>

</html>