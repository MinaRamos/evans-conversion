		<!-- footer -->
		<footer  class="ftco-footer ftco-section" role="contentinfo">
			<div class="container">
				<div class="row mb-5">
					<div class="col-md">
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-1') ) : ?>
						<?php endif; ?>
					</div>
					<div class="col-md">
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-2') ) : ?>
						<?php endif; ?>
					</div>
					<div class="col-md">
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-3') ) : ?>
						<?php endif; ?>
					</div>
					<div class="col-md">
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-4') ) : ?>
						<?php endif; ?>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-center">
						<!-- copyright -->
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-copyright') ) : ?>
						<?php endif; ?>
					</div>
					<!-- /wrapper -->
				</div>
        	</div>
		</footer>
		<!-- /footer -->

<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

		<?php wp_footer(); ?>

	</body>
</html>

  
