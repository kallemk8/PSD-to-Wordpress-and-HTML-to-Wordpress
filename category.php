<?php get_header(); ?>
<style type="text/css">
	.video-title-page{
		font-weight: normal;
		min-height: 70px;
	}
	.video-site li a{
		padding: 0px 10px !important;
		font-size: 14px;
	}
	.only-mobile{
		display: none;
		min-height: 1px !important;
	}
	ul.tvshowclass li img{
	width: 100%;
	height: 170px;
	
}
.youtubeimage{margin:-30px 0px; min-height: 240px;}
.min-height-1{
	max-height: 1px;
	overflow: hidden;
}
	@media (max-width: 500px){
		.only-mobile{
			display: block;
		}
		.video-site li a{
			padding: 0px !important;
		}
		.video-title-page{
			margin: 0px 0px 15px 0px;
			min-height: 30px;
			padding: 5px 0px;
		}
	}
</style>
<div class="page">
	<div class="page_header clearfix page_margin_top">
		<h1 class="page_title"> <?php echo single_cat_title(); ?></h1>	
		<div class="category-desc"><?php echo category_description(); ?> </div>
	</div>
	<div class="page_layout clearfix">
				<div class="row">
					<ul class="tvshowclass homepage">
						<?php 
	                    
							if(have_posts()):
						$count=1;
							while ( have_posts() ) : the_post();
						?>
						
						<li>
							<a href="<?php echo get_permalink(); ?>" title="<?php echo get_the_title(); ?>">
								<?php  $feat_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'medium' );?>
									<?php if(get_field('youtube_video_id')): ?>
										<img class="youtubeimage"  src="https://img.youtube.com/vi/<?php echo get_field('youtube_video_id'); ?>/sddefault.jpg" title="<?php echo get_the_title(); ?>" alt="<?php echo get_the_title(); ?>" />
										<?php else: ?>
										<?php if( $feat_image): ?>
											<img src='<?php echo $feat_image[0]; ?>' title='<?php echo get_the_title(); ?>' alt='<?php echo get_the_title(); ?>'>
										<?php endif;endif;  ?>
								
								<span class="post-image-play-button" ></span>
								<?php if(get_field('video_length')): ?>
								<span class="timier" ><?php echo get_field('video_length'); ?></span>
								<?php endif; ?>
							</a>
							
							<div class="post-title">
								<a href="<?php echo get_permalink(); ?>" title="<?php echo get_the_title(); ?>">
								<?php echo get_the_title(); ?>
								</a>
								<div class="min-height-1" style="font-size: 12px; color: #000;">
									<?php echo get_the_excerpt(); ?>
								</div> 
								<div class="post-date">
									<span></span><?php echo get_the_date(); ?>
								</div>
							</div>
						</li>
						
						<?php 
							$count++; endwhile;
							
							endif;
						?>
					</ul>
				</div>
				<ul class="pagination clearfix page_margin_top_section">
					<?php twentyfourteen_paging_nav(); ?>
				</ul>
			</div>
		</div>
<?php get_footer(); ?>