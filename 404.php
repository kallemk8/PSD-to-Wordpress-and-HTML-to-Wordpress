<?php get_header(); ?>
<div class="page">
	<div class="page_header clearfix page_margin_top">
		<div class="page_header_left">
			<h1 class="page_title">Error 404</h1>
		</div>
		<div class="page_header_right">
			<ul class="bread_crumb">
				<li>
					<a title="Home" href="<?php echo home_url(); ?>">
						Home
					</a>
				</li>
				<li class="separator icon_small_arrow right_gray">
					&nbsp;
				</li>
				<li>
					Error 404
				</li>
			</ul>
		</div>
	</div>
	<div class="page_layout clearfix">
		<div class="divider_block clearfix">
			<hr class="divider first">
			<hr class="divider subheader_arrow">
			<hr class="divider last">
		</div>
		<div class="row page_margin_top">
			<div class="column column_2_3">
				<div class="item_content clearfix">
					<span class="features_icon not_found animated_element animation-scale"></span>
					<div class="text">
						<h1 class="about_title">Page</h1>
						<h1 class="about_subtitle">Not Found</h1>
					</div>
				</div>
				<h3 class="page_margin_top">We're sorry but we can't seem find the page you requested.<br>This might be because you have typed the web address incorrectly.</h3>
				<p class="padding_top_30">In the meantime, try one of options listed below:</p>
				<h3 class="margin_top_20">Go To Page:</h3>
				<ul class="list no_border indent spacing">
					<li class="bullet style_2"><a title="Home" href="<?php echo home_url(); ?>">Home Page</a></li>
					<li class="bullet style_2"><a title="Blog" href="<?php echo home_url(); ?>/blog">Blog</a></li>
					<li class="bullet style_2"><a title="Contact" href="<?php echo home_url(); ?>/contact">Contact</a></li>
				</ul>
			</div>
			<div class="column column_1_3">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>		
<?php get_footer(); ?>