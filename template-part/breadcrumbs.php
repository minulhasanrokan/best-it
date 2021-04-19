<?php
/**
 * Generate breadcrumbs
 * @author best-it
 *
 */
if(!function_exists('best_it_breadcrumbs')){

	function best_it_breadcrumbs(){
?>

<div class="banner-area banner-bg-1">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="banner">
					<h2><?php the_title();?></h2>
					<ul class="page-title-link">
						<li><a href="<?php echo esc_url(home_url());?>">Home</a></li>
						<li>
							<?php
								function get_breadcrumb() {
								    if (is_category() || is_single()) {
								        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
								        the_category(' &bull; ');
								            if (is_single()) {
								                echo " &nbsp;&nbsp;&#187;&nbsp;&nbsp; ";
								                the_title();
								            }
								    } elseif (is_page()) {
								        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
								        echo the_title();
								    } elseif (is_search()) {
								        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ";
								        echo '"<em>';
								        echo the_search_query();
								        echo '</em>"';
								    }
								}
							?>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
}
add_action("do_best_it_breadcrumbs","best_it_breadcrumbs");
}