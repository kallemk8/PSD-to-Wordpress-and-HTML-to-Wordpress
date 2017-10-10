<?php 
	get_header(); 
	/*
		Template Name: News
	*/
?>
	<div class="page">
	<div class="page_layout page_margin_top clearfix">
		<div class="row">
			<div class="column column_2_3">
				<div class="row ">
					<div class="column column_1_2">
						<h4 class="box_header">Entertainment News</h4>
						<ul class="blog small clearfix">
							<?php 
			                    query_posts('cat=6&posts_per_page=20');
								if(have_posts()):
								$count=1;
								while ( have_posts() ) : the_post();
							?>
							<li class="post">
							<h6>
							<a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a>
							</h6>
							</li>
							<?php endwhile; ?>
							<?php endif; ?>
						</ul>
						<a class="more page_margin_top" href="http://livevideoshub.com/category/news">READ MORE</a>
					</div>
					<div class="column column_1_2">
						<h4 class="box_header">Political News</h4>
						<ul class="blog small clearfix">
							<?php 
			                    query_posts('cat=83&posts_per_page=20');
								if(have_posts()):
								$count=1;
								while ( have_posts() ) : the_post();
							?>
							<li class="post">
							<h6>
							<a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a>
							</h6>
							</li>
							<?php endwhile; ?>
							<?php endif; ?>

						</ul>
						<a class="more page_margin_top" href="https://www.livevideoshub.com/category/reviews/">READ MORE</a>
					</div>
				</div>
			</div>
			<div class="column column_1_3">
				<h4 class="box_header">Movie Reviews</h4>
				<ul class="blog small clearfix">
					<?php 
	                    query_posts('cat=209&posts_per_page=20');
						if(have_posts()):
						$count=1;
						while ( have_posts() ) : the_post();
					?>
					<li class="post">
					<h6>
					<a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a>
					</h6>
					</li>
					<?php endwhile; ?>
					<?php endif; ?>
				</ul>
				<a class="more page_margin_top" href="https://www.livevideoshub.com/category/reviews/">READ MORE</a>

				
			</div>
		</div> 
	</div>
	</div>
<?php get_footer(); ?>