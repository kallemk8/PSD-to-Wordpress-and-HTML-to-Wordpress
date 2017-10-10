<?php echo get_header(); 
	/*
		Template Name: TV Shows
	*/
?> 
<style type="text/css">
	
	ul.tvshowclass li img{
	width: 100%;
	height: 170px;
	
}
</style>
<div class="page">
	<div class="page_header clearfix page_margin_top">
		<h1 class="page_title">Top Tv Shows in India</h1>	
	</div>
	<div class="page_layout page_margin_top clearfix">
		<div class="row">
			<h4 class="box_header">Hindi TV Shows</h4>
			<ul class="tvshowclass">
				<?php while(has_sub_field('tv_shows')): ?>
                 <?php if(get_sub_field('select_language')=="Hindi"): ?>
				 <li class="">
				 	<a href="<?php the_sub_field('cat_url'); ?>" title="<?php the_sub_field('cat_name'); ?>">
						
						<?php if( get_sub_field('image')): ?>
						<img src="<?php echo get_sub_field('image'); ?>" title="<?php get_sub_field('cat_name'); ?>" alt="<?php the_sub_field('cat_name'); ?>">
						<?php endif; ?>
					</a>
					<h5><a href="<?php the_sub_field('cat_url'); ?>" title="<?php the_sub_field('cat_name'); ?>"><?php the_sub_field('cat_name'); ?></a></h5>
					
				</li> 
				<?php endif; ?>
				<?php
				endwhile;
				?>
			</ul>
		</div>
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<!-- Large Harizantal -->
		<ins class="adsbygoogle"
		     style="display:inline-block;width:970px;height:250px"
		     data-ad-client="ca-pub-1518250080154239"
		     data-ad-slot="4009519132"></ins>
		<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
		</div>
		<div class="page_layout page_margin_top clearfix">
		<div class="row">
			<h4 class="box_header">Telugu TV Shows</h4>
			 <ul class="tvshowclass">
				<?php while(has_sub_field('tv_shows')): ?>
               	<?php if(get_sub_field('select_language')=="Telugu"): ?>
				 <li class="">
				 	<a href="<?php the_sub_field('cat_url'); ?>" title="<?php the_sub_field('cat_name'); ?>">
						
						<?php if( get_sub_field('image')): ?>
						<img src="<?php echo get_sub_field('image'); ?>" title="<?php get_sub_field('cat_name'); ?>" alt="<?php the_sub_field('cat_name'); ?>">
						<?php endif; ?>
					</a>
					<h5><a href="<?php the_sub_field('cat_url'); ?>" title="<?php the_sub_field('cat_name'); ?>"><?php the_sub_field('cat_name'); ?></a></h5>
					
				</li> 
				<?php endif; ?>
				<?php
				endwhile;
				?>
			</ul> 
			
		</div>
	</div>
</div>
<?php get_footer(); ?>