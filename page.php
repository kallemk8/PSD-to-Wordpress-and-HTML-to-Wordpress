<?php get_header(); ?>
<div class="page">
	<div class="page_header clearfix page_margin_top">
		<div class="page_header_left">
			<h1 class="page_title"><?php echo get_the_title(); ?></h1>
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
					<?php echo get_the_title(); ?>
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
			<?php  $feat_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID) ,'full');?>
			<?php if( $feat_image): ?>
			<div class="column">
			<img src='<?php echo $feat_image[0]; ?>' class="responsive pr_preload" title='<?php echo get_the_title(); ?>' alt='<?php echo get_the_title(); ?>'>
			</div>
			<?php endif; ?>
			<div class="column">
				<!--<h1 class="about_title"><?php echo get_the_title(); ?></h1>-->
				<h2 class="about_subtitle"><?php echo get_field('subtitle'); ?></h2>
				<p class="text padding_top_0 page_margin_top">
					<?php echo apply_filters('the_content',$post->post_content); ?>
				</p>
			</div>
		</div>
	</div>
</div>			
<?php get_footer(); ?>