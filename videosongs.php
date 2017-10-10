<?php echo get_header(); 
	/*
		Template Name: Video Songs
	*/
?> 
<style type="text/css">
	
	ul.tvshowclass li img{
	width: 100%;
	height: 170px;
	
}
</style>
<div class="page">

	<div class="page_layout page_margin_top clearfix">
		<div class="row">
			<ul class="tvshowclass video-site">
				<?php 
					while(has_sub_field('video_songs')):
					$tag = get_tag(get_sub_field('movies'));
				?>
				 <li class="">
				 	<a href="<?php home_url(); ?>/tag/<?php echo $tag->slug; ?>" title="Watch Free <?php echo $tag->name; ?> Video Songs ">
						<?php if( get_sub_field('movie_image')): ?>
						<img src="<?php echo get_sub_field('movie_image'); ?>" title="Watch Free <?php echo $tag->name; ?> Video Songs " alt="Watch Free <?php echo $tag->name; ?> Video Songs ">
						<?php endif; ?>
					</a>
					<h5 class="video-title-page"><a href="<?php home_url(); ?>/tag/<?php echo $tag->slug; ?>" title="Watch Free <?php echo $tag->name; ?> Video Songs "><?php echo $tag->name; ?> Video Songs</a></h5>
				</li> 
				
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
</div>
<?php get_footer(); ?>