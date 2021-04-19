<?php
/**
 * The header top details for displaying header top details
 * 
 * @package best-it
 */
if(!function_exists('best_it_header_top_section')){

	function best_it_header_top_section(){
//header top display or not get value from header customizer
if (get_theme_mod('best-it-header-top-info-display') == 'Yes') { ?>

<div class="top-bar">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 col-sm-6">
				<div class="left-top">
					<?php
					//header top Email number get value from header customizer
					if (get_theme_mod('best-it-header-top-info-email-number-display')) { ?>
					<div class="email-box">
						<a href="mailto:<?php echo get_theme_mod('best-it-header-top-info-email-number-display'); ?>"><i class="fa fa-envelope-o" aria-hidden="true"></i><?php echo get_theme_mod('best-it-header-top-info-email-number-display'); ?></a>
					</div>
					<?php }?>
					<?php 
					//header top phone number get value from header customizer
					if (get_theme_mod('best-it-header-top-info-phone-number-display')) { ?>
					<div class="phone-box">
						<a href="tel:<?php echo get_theme_mod('best-it-header-top-info-phone-number-display'); ?>"><i class="fa fa-phone" aria-hidden="true"></i> <?php echo get_theme_mod('best-it-header-top-info-phone-number-display'); ?></a>
					</div>
					<?php }?>
				</div>
			</div>
			<div class="col-md-6 col-sm-6">
				<div class="right-top">
					<div class="social-box">
						<ul>
							<?php 
							//header top facebook link get value from header customizer
							if (get_theme_mod('best-it-header-top-info-facebook-display')) { ?>
							<li><a href="<?php echo esc_url(get_theme_mod('best-it-header-top-info-facebook-display'));?>"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
							<?php }?>
							<?php 
							//header top Instagram link get value from header customizer
							if (get_theme_mod('best-it-header-top-info-Instagram-display')) { ?>
							<li><a href="<?php echo esc_url(get_theme_mod('best-it-header-top-info-Instagram-display'));?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<?php }?>
							<?php 
							//header top linkedin link get value from header customizer
							if (get_theme_mod('best-it-header-top-info-linkedin-display')) { ?>
							<li><a href="<?php echo esc_url(get_theme_mod('best-it-header-top-info-linkedin-display'));?>"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
							<?php }?>
							<?php 
							//header top twitter link get value from header customizer
							if (get_theme_mod('best-it-header-top-info-twitter-display')) { ?>
							<li><a href="<?php echo esc_url(get_theme_mod('best-it-header-top-info-twitter-display'));?>"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
							<?php }?>
							<?php 
							//header top blogger rss link get value from header customizer
							if (get_theme_mod('best-it-header-top-info-blogger-link-display')) { ?>
							<li><a href="<?php echo esc_url(get_theme_mod('best-it-header-top-info-blogger-link-display'));?>"><i class="fa fa-rss-square" aria-hidden="true"></i></a></li>
							<?php }?>
						<ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
}

}

add_action("do_best_it_header_top_section","best_it_header_top_section");

}