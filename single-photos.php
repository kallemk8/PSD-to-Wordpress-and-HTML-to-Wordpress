<?php get_header(); ?>
<style type="text/css">
	h1.post_title{
		font-size: 30px;
	}
	.photos_single_page{
		list-style: none;
	}
	.photos_single_page li {
		display: inline-block;
		width: 32%;
	}
	.photos_single_page li a img{
		
		max-width: 100%;

	}
</style>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="page">
	<div class="page_layout page_margin_top clearfix">
		


		<hr class="divider page_margin_top">
		<div class="row page_margin_top">
			<div class="column column_2_3">
				<div class="row">
					<div class="post single">
						
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
						
						<h1 class="post_title">
							<?php echo get_the_title(); ?>
						</h1>
						<ul class="post_details clearfix">
							<li class="detail category">In 
								<?php $posttags1 = get_terms('photos_category');?>
								<?php 
									if ($posttags1) {
									foreach($posttags1 as $tag) {
								?>
									<a href="<?php echo get_tag_link($tag->term_id); ?>" title='<?php echo get_the_title(); ?>'>
										<?php echo $tag->name; ?>
									</a>
								<?php 
									}
									}
								?>
							</li>
							<li class="detail date"><?php echo get_the_date('F j Y' ); ?></li>
							
							
							<li><div class="fb-like" data-href="https://www.facebook.com/livevideoshub/" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div></li>
						</ul>
						<?php if(get_field('youtube_video_id')): ?>
						<div class="post_content page_margin_top_section clearfix">
							<iframe width="100%" height="400" src="https://www.youtube.com/embed/<?php echo get_field('youtube_video_id'); ?>?autoplay=1" frameborder="0" allowfullscreen></iframe>
						</div>
						<?php endif; ?>
						<div class="sentence">
							<span class="text"><?php echo get_field('image_tag'); ?></span>
						</div>
						<div class="post_content page_margin_top_section clearfix">
							<div class="">
								<h2 class="excerpt"><?php echo get_field('subtitle'); ?></h2>
								
								<div class="text">
									<ul class='photos_single_page'>
										<?php $count=1; while(has_sub_field('list_of_images')): ?>

										<li>
											<a href="<?php echo get_sub_field('images'); ?>" class="post_image page_margin_top prettyPhoto" title="<?php echo get_the_title(); ?>">
											<img src="<?php echo get_sub_field('images'); ?>" title='<?php echo get_the_title(); ?>' alt='<?php echo get_the_title(); ?>'>
										</a>
										</li>
										
										<?php $count++; endwhile; ?>
									</ul>
									<?php echo apply_filters('the_content',$post->post_content); ?>
								</div>
							</div>
						</div>
						
						
						

						<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
						<!-- contact -->
						<ins class="adsbygoogle"
						     style="display:block"
						     data-ad-client="ca-pub-1518250080154239"
						     data-ad-slot="2550265139"
						     data-ad-format="auto"></ins>
						<script>
						(adsbygoogle = window.adsbygoogle || []).push({});
						</script>
					</div>
				</div>
				<div class="row page_margin_top">
					<div class="share_box clearfix">
						<label>Share:</label>
						<ul class="social_icons clearfix">
							<li>
								<a target="_blank" title="<?php echo get_the_title(); ?>" href="http://www.facebook.com/sharer.php?u=<?php echo get_permalink(); ?>" class="social_icon facebook">
									&nbsp;
								</a>
							</li>
							<li>
								<a target="_blank" title="<?php echo get_the_title(); ?>" href="http://twitter.com/share?url=<?php echo get_permalink(); ?>" class="social_icon twitter">
									&nbsp;
								</a>
							</li>
							<li>
								<a title="<?php echo get_the_title(); ?>" target="_blank" href="http://www.digg.com/submit?url=<?php echo get_permalink(); ?>" class="social_icon digg">
									&nbsp;
								</a>
							</li>
							<li>
								<a  title="<?php echo get_the_title(); ?>" target="_blank" href="https://plus.google.com/share?url=<?php echo get_permalink(); ?>" class="social_icon googleplus">
									&nbsp;
								</a>
							</li>
							<li>
								<a title="<?php echo get_the_title(); ?>" target="_blank" href="javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());" class="social_icon pinterest">
									&nbsp;
								</a>
							</li>
							<li>
								<a title="<?php echo get_the_title(); ?>" target="_blank"  href="http://reddit.com/submit?url=<?php echo get_permalink(); ?>&amp;title=<?php echo get_the_title(); ?>" class="social_icon reddit">
									&nbsp;
								</a>
							</li>
							<li>
								<a title="<?php echo get_the_title(); ?>" target="_blank"  href="http://www.stumbleupon.com/submit?url=<?php echo get_permalink(); ?>&amp;title=<?php echo get_the_title(); ?>" class="social_icon stumbleupon">
									&nbsp;
								</a>
							</li>
							<li>
								<a title="<?php echo get_the_title(); ?>" target="_blank"  href="http://www.tumblr.com/share/link?url=<?php echo get_permalink(); ?>" class="social_icon tumblr">
									&nbsp;
								</a>
							</li>
							<li>
								<a title="<?php echo get_the_title(); ?>" text="<?php echo get_the_title(); ?>" target="_blank"  href="https://www.blogger.com/blog-this.g?u=<?php echo get_permalink(); ?>&n=<?php echo get_the_title(); ?>&t=<?php echo get_the_title(); ?>" class="social_icon blogger">
									&nbsp;
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="row page_margin_top">
					<ul class="taxonomies tags left clearfix">
						<?php $posttags = get_terms('photos_category');?>
						<?php 
							if ($posttags) {
							foreach($posttags as $tag) {
						?>

						<li><a href="<?php echo get_tag_link($tag->term_id); ?>" title='<?php echo get_the_title(); ?>'>
								<?php echo $tag->name; ?>
							</a></li>
						<?php 
							}
							}
						?>
					</ul>
					<ul class="taxonomies categories right clearfix">
					<?php 	$categories = get_the_category();
						
						if ( ! empty( $categories ) ) {
						    foreach( $categories as $category ) {
						      echo '<li><a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' .get_the_title(). '">' . esc_html( $category->name ) . '</a></li>';
						    }
						   
						} 
						?>
						

					</ul>
				</div>
				<div class="row page_margin_top_section">
					<h4 class="box_header">Most Views</h4>
					<div class="horizontal_carousel_container page_margin_top">
						<ul class="blog horizontal_carousel autoplay-1 scroll-1 navigation-1 easing-easeInOutQuint duration-750">
							<?php 
								if(get_field('category2')){
									$cat2 = get_field('category2');
								}else{
									$cat = get_field('cat');
									$cat2 = $cat;
								}
								$args = array (
									'cat'=>$cat2
								);
								
								$the_query = new WP_Query( $args );
								if($the_query->have_posts()):
								while ( $the_query->have_posts() ) : $the_query->the_post();
								$post->ID;

							?>
							<li class="post">
								<a href="<?php echo get_permalink(); ?>" title="<?php echo get_the_title(); ?>">
									<?php  $feat_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'medium' );?>
									<?php if( $feat_image): ?>
									<img src='<?php echo $feat_image[0]; ?>' title='<?php echo get_the_title($post->ID); ?>' alt='<?php echo get_the_title($post->ID); ?>'>
									<?php endif; ?>
								</a>
								<h5><a href="<?php echo get_permalink(); ?>" title="<?php echo get_the_title(); ?>"><?php echo get_the_title(); ?></a></h5>
								<ul class="post_details simple">
									<li class="category">
										<?php $posttags = get_the_tags();?>
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
											<?php echo get_the_date(); ?>
										</li>
								</ul>
							</li>
							<?php 

								endwhile;
								endif;
								$post->ID = $postba; 
								wp_reset_postdata();

						 	?>
						</ul>
					</div>
				</div>
				<div class="row page_margin_top_section">
					
					<?php echo comments_template();?>
				</div>
			</div>
			<div class="column column_1_3">
				<?php echo get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>			
<?php get_footer(); ?> 