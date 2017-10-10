<?php get_header(); 
/*
	Template name: Photos
*/
?>
<div class="page">
	<div class="page_header clearfix page_margin_top">
		<div class="page_header_left">
			<h1 class="page_title">Category <?php echo single_cat_title(); ?></h1>
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
		<div class="row">
			<div class="column column_2_3">
				<div class="row">
					<ul class="blog big">
						<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
						<!-- mturk -->
						<ins class="adsbygoogle"
						     style="display:block"
						     data-ad-client="ca-pub-1518250080154239"
						     data-ad-slot="9404697537"
						     data-ad-format="auto"></ins>
						<script>
						(adsbygoogle = window.adsbygoogle || []).push({});
						</script>
						<?php
				            $args = array(
				                'post_type' => 'photos',
				                'nopaging' => true
				            );
				            $products = new WP_Query( $args );
				            if( $products->have_posts() ):
				                $count=1;
				                
				                while( $products->have_posts() ) :
				                    $products->the_post();
				                    $postid = $post->ID;
				        ?>  
						<li class="post" style="border-bottom:1px solid #ccc; padding-bottom:5px;">
							<a href="<?php echo get_permalink(); ?>" title="<?php echo get_the_title(); ?>">
								<?php  $feat_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'medium' );?>
								<?php if( $feat_image): ?>
								<img src='<?php echo $feat_image[0]; ?>' title='<?php echo get_the_title(); ?>' alt='<?php echo get_the_title(); ?>'>
								<?php endif; ?>
							</a>
							<div class="post_content">
								<h2 class="with_number">
									<a href="<?php echo get_permalink(); ?>" title="<?php echo get_the_title(); ?>"><?php echo get_the_title(); ?></a>
									
								</h2>
								<!-- <ul class="post_details">
									<li class="category">
										<?php $posttags = get_terms('photos_category');?>
										<?php 
											if ($posttags) {
											foreach($posttags as $tag) {
										?>
											<a href="<?php echo get_tag_link($tag->term_id); ?>" title='<?php echo get_the_title(); ?>'>
												<?php echo $tag->name; ?>
											</a>
										<?php 
											}
											}
										?>
									</li>
									<li class="date">
										<?php echo get_the_date('g:i F j, Y' ); ?>
									</li>
								</ul> -->

								<p><?php echo substr(get_the_excerpt(),0,100); ?></p>
								<br/>
								<br/>
								<a class="read_more" href="<?php echo get_permalink(); ?>" title="<?php echo get_the_title(); ?>"><span class="arrow"></span><span>SEE PHOTOS</span></a>
								<a class="read_more" href="<?php echo get_permalink(); ?>" title="<?php echo get_the_title(); ?>"><span class="arrow"></span><span>DOWNLOAD</span></a>
							</div>
						</li>
						
						<?php 
							$count++;
							endwhile;
							endif;
						?>
					</ul>
				</div>
				<ul class="pagination clearfix page_margin_top_section">
					<?php twentyfourteen_paging_nav(); ?>
				</ul>
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Innerpage -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-1518250080154239"
     data-ad-slot="4087483139"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
			</div>
			<div class="column column_1_3 page_margin_top">
				<?php echo get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>			
<?php get_footer(); ?>