<?php include('functions.php'); 
 $gallery = $_GET['gallery']; 
	$gallery2 = $app->get_the_gallery_title($gallery);
 ?>
<!DOCTYPE HTML>
<html lang = "en">
	<head>
		<title><?php echo $gallery2['GalleryName']; ?> - Live News</title>
		<meta name="description" content="<?php echo $gallery2['GalleryName']; ?>"/>
		<meta name="robots" content="noodp"/>
		<meta name="keywords" content="<?php echo $gallery2['GalleryName']; ?>"/>
		<meta name="author" content="Livevideoshub">
		<?php include('styles.php'); ?>
		<link rel="stylesheet" href="<?php echo home_base_url(); ?>css/lightbox.min.css">
	</head>
	<style type="text/css">
		.post-title-class{
			font-size: 22px;
		}
		.composs-main-article-media img{
			width: 100%;
			height: 300px;
		}
		.composs-main-article-head{
			margin-bottom: 0px;
			border: none;
			padding-bottom: 0px;
		}
		.recent-posts{
			width: 100%;
			margin-top: 30px;
		}
		.recent-posts a{
			font-size: 12px;
		}
		.section-title{
			margin-bottom: 0px;
			padding: 0px 15px;
		}
		.section-title h1{
			margin: 0px;
		}
		@media (min-width: 768px){
		.recent-posts img{
			height: 100px;
		}
		}
		.max-width{
			max-width: 100%;
		}
		.margin-bottom15{
			margin-bottom: 15px;
		}
	</style>
	<body >
	<div class="site_container">

		<?php include('menu.php'); ?>
		<div class="page">
		<div class="row page_margin_top">
		<div class="column column_2_3">
				<div class="row">
					<div class="post single">
						<h1 class="post_title">
							Built on Brotherhood, Club Lives Up to Name
						</h1>
						<ul class="post_details clearfix">
							<li class="detail category">In <a href="?page=category&amp;cat=health" title="HEALTH">Health</a></li>
							<li class="detail date">8:25 PM, Feb 23</li>
							<li class="detail author">By <a href="?page=author" title="Anna Shubina">Anna Shubina</a></li>
							<li class="detail views">6 254 Views</li>
							<li class="detail comments"><a href="#comments_list" class="scroll_to_comments" title="6 Comments">6 Comments</a></li>
						</ul>
						<div class="horizontal_carousel_container thin page_margin_top gallery_control">
							<ul class="horizontal_carousel control-for-post-gallery visible-5 autoplay-0 scroll-1 navigation-1 easing-easeInOutQuint duration-750">
								<li>
									<a href="#"><img src='images/samples/130x95/image_01.jpg' alt='img'></a>
								</li>
								<li>
									<a href="#"><img src='images/samples/130x95/image_10.jpg' alt='img'></a>
								</li>
								<li>
									<a href="#"><img src='images/samples/130x95/image_03.jpg' alt='img'></a>
								</li>
								<li>
									<a href="#"><img src='images/samples/130x95/image_09.jpg' alt='img'></a>
								</li>
								<li>
									<a href="#"><img src='images/samples/130x95/image_07.jpg' alt='img'></a>
								</li>
								<li>
									<a href="#"><img src='images/samples/130x95/image_05.jpg' alt='img'></a>
								</li>
								<li>
									<a href="#"><img src='images/samples/130x95/image_02.jpg' alt='img'></a>
								</li>
								<li>
									<a href="#"><img src='images/samples/130x95/image_08.jpg' alt='img'></a>
								</li>
							</ul>
						</div>
						<div id="control-by-post-gallery" class="horizontal_carousel_container big margin_top_10">
							<ul id="post-gallery" class="horizontal_carousel visible-1 autoplay-0 scroll-1 navigation-1 easing-easeInOutQuint duration-750">
								<li>
									<!--class="prettyPhoto" rel="prettyPhoto[gallery]"-->
									<a href="images/samples/690x450/image_01.jpg" data-rel="gallery" title="Struggling Nuremberg Sack Coach Verbeek">
										<span class="icon fullscreen animated"></span>
										<img src='images/samples/690x450/image_01.jpg' alt='img'>
									</a>
								</li>
								<li>
									<a href="images/samples/690x450/image_10.jpg" data-rel="gallery" title="Built on Brotherhood, Club Lives Up to Name">
										<span class="icon fullscreen animated"></span>
										<img src='images/samples/690x450/image_10.jpg' alt='img'>
									</a>
								</li>
								<li>
									<a href="images/samples/690x450/image_03.jpg" data-rel="gallery" title="New Painkiller Rekindles Addiction Concerns">
										<span class="icon fullscreen animated"></span>
										<img src='images/samples/690x450/image_03.jpg' alt='img'>
									</a>
								</li>
								<li>
									<a href="images/samples/690x450/image_09.jpg" data-rel="gallery" title="New Painkiller Rekindles Addiction Concerns">
										<span class="icon fullscreen animated"></span>
										<img src='images/samples/690x450/image_09.jpg' alt='img'>
									</a>
								</li>
								<li>
									<a href="images/samples/690x450/image_07.jpg" data-rel="gallery" title="New Painkiller Rekindles Addiction Concerns">
										<span class="icon fullscreen animated"></span>
										<img src='images/samples/690x450/image_07.jpg' alt='img'>
									</a>
								</li>
								<li>
									<a href="images/samples/690x450/image_05.jpg" data-rel="gallery" title="New Painkiller Rekindles Addiction Concerns">
										<span class="icon fullscreen animated"></span>
										<img src='images/samples/690x450/image_05.jpg' alt='img'>
									</a>
								</li>
								<li>
									<a href="images/samples/690x450/image_02.jpg" data-rel="gallery" title="New Painkiller Rekindles Addiction Concerns">
										<span class="icon fullscreen animated"></span>
										<img src='images/samples/690x450/image_02.jpg' alt='img'>
									</a>
								</li>
								<li>
									<a href="images/samples/690x450/image_08.jpg" data-rel="gallery" title="New Painkiller Rekindles Addiction Concerns">
										<span class="icon fullscreen animated"></span>
										<img src='images/samples/690x450/image_08.jpg' alt='img'>
									</a>
								</li>
							</ul>
						</div>
						<div id="gallery-popup" class="gallery_popup">
							<div class="header_container padding_top_bottom_15">
								<div class="header clearfix">
									<h1><a title="Pressroom" href="?page=home">Pressroom</a></h1>
									<a href="#" class="gallery_close close_popup"></a>
								</div>
							</div>
							<div class="header_container">
								<div class="horizontal_carousel_container thin gallery_control">
									<ul class="horizontal_carousel control-for-post-gallery-popup visible-8 autoplay-0 scroll-1 navigation-1 easing-easeInOutQuint duration-750">
										<li>
											<a href="#"><img src='images/samples/130x95/image_01.jpg' alt='img'></a>
										</li>
										<li>
											<a href="#"><img src='images/samples/130x95/image_10.jpg' alt='img'></a>
										</li>
										<li>
											<a href="#"><img src='images/samples/130x95/image_03.jpg' alt='img'></a>
										</li>
										<li>
											<a href="#"><img src='images/samples/130x95/image_09.jpg' alt='img'></a>
										</li>
										<li>
											<a href="#"><img src='images/samples/130x95/image_07.jpg' alt='img'></a>
										</li>
										<li>
											<a href="#"><img src='images/samples/130x95/image_05.jpg' alt='img'></a>
										</li>
										<li>
											<a href="#"><img src='images/samples/130x95/image_02.jpg' alt='img'></a>
										</li>
										<li>
											<a href="#"><img src='images/samples/130x95/image_08.jpg' alt='img'></a>
										</li>
									</ul>
								</div>
							</div>
							<div class="page">
								<div class="row page_margin_top">
									<div id="control-by-post-gallery-popup" class="horizontal_carousel_container big margin_top_10">
										<ul id="post-gallery-popup" class="horizontal_carousel visible-1 autoplay-0 scroll-1 navigation-0 easing-easeInOutQuint duration-750">
											<li>
												<div class="column column_2_3">
													<img src='images/samples/690x450/image_01.jpg' alt='img'>
												</div>
												<div class="column column_1_3">
													<h3 class="page_margin_top">
														Club Lives Up to Name
													</h3>
													<p>
														Since December, the United Kingdom has faced relentless assault from some of the worst winter weather on record. It began with the worst storm and tidal surges in 60 years.
													</p>
													<div class="sentence margin_top_0">
														<span class="author">John Smith, Flickr</span>
													</div>
													<div class="clearfix">
														<a class="read_more close_popup page_margin_top_section" href="#" title="Read more"><span class="arrow"></span><span>RETURN TO POST</span></a>
													</div>
													<div class="share_box page_margin_top_section clearfix">
														<label>Share:</label>
														<ul class="social_icons dark clearfix">
															<li>
																<a target="_blank" title="" href="http://facebook.com/QuanticaLabs" class="social_icon facebook">
																	&nbsp;
																</a>
															</li>
															<li>
																<a target="_blank" title="" href="https://twitter.com/QuanticaLabs" class="social_icon twitter">
																	&nbsp;
																</a>
															</li>
															<li>
																<a title="" href="mailto:contact@pressroom.com" class="social_icon mail">
																	&nbsp;
																</a>
															</li>
															<li>
																<a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon envato">
																	&nbsp;
																</a>
															</li>
															<li>
																<a title="" href="#" class="social_icon instagram">
																	&nbsp;
																</a>
															</li>
															<li>
																<a title="" href="#" class="social_icon pinterest">
																	&nbsp;
																</a>
															</li>
														</ul>
													</div>
												</div>
											</li>
											<li>
												<div class="column column_2_3">
													<img src='images/samples/690x450/image_10.jpg' alt='img'>
												</div>
												<div class="column column_1_3">
													<h3 class="page_margin_top">
														Syrian Civilians Trapped
													</h3>
													<p>
														Since December, the United Kingdom has faced relentless assault from some of the worst winter weather on record. It began with the worst storm and tidal surges in 60 years.
														Since December, the United Kingdom has faced relentless assault from some of the worst winter weather on record. It began with the worst storm and tidal surges in 60 years.
													</p>
													<div class="sentence margin_top_0">
														<span class="author">John Smith, Flickr</span>
													</div>
													<div class="clearfix">
														<a class="read_more close_popup page_margin_top_section" href="#" title="Read more"><span class="arrow"></span><span>RETURN TO POST</span></a>
													</div>
													<div class="share_box page_margin_top_section clearfix">
														<label>Share:</label>
														<ul class="social_icons dark clearfix">
															<li>
																<a target="_blank" title="" href="http://facebook.com/QuanticaLabs" class="social_icon facebook">
																	&nbsp;
																</a>
															</li>
															<li>
																<a target="_blank" title="" href="https://twitter.com/QuanticaLabs" class="social_icon twitter">
																	&nbsp;
																</a>
															</li>
															<li>
																<a title="" href="mailto:contact@pressroom.com" class="social_icon mail">
																	&nbsp;
																</a>
															</li>
															<li>
																<a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon envato">
																	&nbsp;
																</a>
															</li>
															<li>
																<a title="" href="#" class="social_icon instagram">
																	&nbsp;
																</a>
															</li>
															<li>
																<a title="" href="#" class="social_icon pinterest">
																	&nbsp;
																</a>
															</li>
														</ul>
													</div>
												</div>
											</li>
											<li>
												<div class="column column_2_3">
													<img src='images/samples/690x450/image_03.jpg' alt='img'>
												</div>
												<div class="column column_1_3">
													<h3 class="page_margin_top">
														Study Linking Illness
													</h3>
													<p>
														Since December, the United Kingdom has faced relentless assault from some of the worst winter weather on record. It began with the worst storm and tidal surges in 60 years.
													</p>
													<div class="sentence margin_top_0">
														<span class="author">John Smith, Flickr</span>
													</div>
													<div class="clearfix">
														<a class="read_more close_popup page_margin_top_section" href="#" title="Read more"><span class="arrow"></span><span>RETURN TO POST</span></a>
													</div>
													<div class="share_box page_margin_top_section clearfix">
														<label>Share:</label>
														<ul class="social_icons dark clearfix">
															<li>
																<a target="_blank" title="" href="http://facebook.com/QuanticaLabs" class="social_icon facebook">
																	&nbsp;
																</a>
															</li>
															<li>
																<a target="_blank" title="" href="https://twitter.com/QuanticaLabs" class="social_icon twitter">
																	&nbsp;
																</a>
															</li>
															<li>
																<a title="" href="mailto:contact@pressroom.com" class="social_icon mail">
																	&nbsp;
																</a>
															</li>
															<li>
																<a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon envato">
																	&nbsp;
																</a>
															</li>
															<li>
																<a title="" href="#" class="social_icon instagram">
																	&nbsp;
																</a>
															</li>
															<li>
																<a title="" href="#" class="social_icon pinterest">
																	&nbsp;
																</a>
															</li>
														</ul>
													</div>
												</div>
											</li>
											<li>
												<div class="column column_2_3">
													<img src='images/samples/690x450/image_09.jpg' alt='img'>
												</div>
												<div class="column column_1_3">
													<h3 class="page_margin_top">
														Club Lives Up to Name
													</h3>
													<p>
														Since December, the United Kingdom has faced relentless assault from some of the worst winter weather on record. It began with the worst storm and tidal surges in 60 years.
													</p>
													<div class="sentence margin_top_0">
														<span class="author">John Smith, Flickr</span>
													</div>
													<div class="clearfix">
														<a class="read_more close_popup page_margin_top_section" href="#" title="Read more"><span class="arrow"></span><span>RETURN TO POST</span></a>
													</div>
													<div class="share_box page_margin_top_section clearfix">
														<label>Share:</label>
														<ul class="social_icons dark clearfix">
															<li>
																<a target="_blank" title="" href="http://facebook.com/QuanticaLabs" class="social_icon facebook">
																	&nbsp;
																</a>
															</li>
															<li>
																<a target="_blank" title="" href="https://twitter.com/QuanticaLabs" class="social_icon twitter">
																	&nbsp;
																</a>
															</li>
															<li>
																<a title="" href="mailto:contact@pressroom.com" class="social_icon mail">
																	&nbsp;
																</a>
															</li>
															<li>
																<a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon envato">
																	&nbsp;
																</a>
															</li>
															<li>
																<a title="" href="#" class="social_icon instagram">
																	&nbsp;
																</a>
															</li>
															<li>
																<a title="" href="#" class="social_icon pinterest">
																	&nbsp;
																</a>
															</li>
														</ul>
													</div>
												</div>
											</li>
											<li>
												<div class="column column_2_3">
													<img src='images/samples/690x450/image_07.jpg' alt='img'>
												</div>
												<div class="column column_1_3">
													<h3 class="page_margin_top">
														Nuclear Fusion is Closer
													</h3>
													<p>
														Since December, the United Kingdom has faced relentless assault from some of the worst winter weather on record. It began with the worst storm and tidal surges in 60 years.
														Since December, the United Kingdom has faced relentless assault from some of the worst winter weather on record. It began with the worst storm and tidal surges in 60 years.
														Since December, the United Kingdom has faced relentless assault from some of the worst winter weather on record. It began with the worst storm and tidal surges in 60 years.
													</p>
													<div class="sentence margin_top_0">
														<span class="author">John Smith, Flickr</span>
													</div>
													<div class="clearfix">
														<a class="read_more close_popup page_margin_top_section" href="#" title="Read more"><span class="arrow"></span><span>RETURN TO POST</span></a>
													</div>
													<div class="share_box page_margin_top_section clearfix">
														<label>Share:</label>
														<ul class="social_icons dark clearfix">
															<li>
																<a target="_blank" title="" href="http://facebook.com/QuanticaLabs" class="social_icon facebook">
																	&nbsp;
																</a>
															</li>
															<li>
																<a target="_blank" title="" href="https://twitter.com/QuanticaLabs" class="social_icon twitter">
																	&nbsp;
																</a>
															</li>
															<li>
																<a title="" href="mailto:contact@pressroom.com" class="social_icon mail">
																	&nbsp;
																</a>
															</li>
															<li>
																<a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon envato">
																	&nbsp;
																</a>
															</li>
															<li>
																<a title="" href="#" class="social_icon instagram">
																	&nbsp;
																</a>
															</li>
															<li>
																<a title="" href="#" class="social_icon pinterest">
																	&nbsp;
																</a>
															</li>
														</ul>
													</div>
												</div>
											</li>
											<li>
												<div class="column column_2_3">
													<img src='images/samples/690x450/image_05.jpg' alt='img'>
												</div>
												<div class="column column_1_3">
													<h3 class="page_margin_top">
														Struggling Nuremberg Sack
													</h3>
													<p>
														Since December, the United Kingdom has faced relentless assault from some of the worst winter weather on record. It began with the worst storm and tidal surges in 60 years.
													</p>
													<div class="sentence margin_top_0">
														<span class="author">John Smith, Flickr</span>
													</div>
													<div class="clearfix">
														<a class="read_more close_popup page_margin_top_section" href="#" title="Read more"><span class="arrow"></span><span>RETURN TO POST</span></a>
													</div>
													<div class="share_box page_margin_top_section clearfix">
														<label>Share:</label>
														<ul class="social_icons dark clearfix">
															<li>
																<a target="_blank" title="" href="http://facebook.com/QuanticaLabs" class="social_icon facebook">
																	&nbsp;
																</a>
															</li>
															<li>
																<a target="_blank" title="" href="https://twitter.com/QuanticaLabs" class="social_icon twitter">
																	&nbsp;
																</a>
															</li>
															<li>
																<a title="" href="mailto:contact@pressroom.com" class="social_icon mail">
																	&nbsp;
																</a>
															</li>
															<li>
																<a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon envato">
																	&nbsp;
																</a>
															</li>
															<li>
																<a title="" href="#" class="social_icon instagram">
																	&nbsp;
																</a>
															</li>
															<li>
																<a title="" href="#" class="social_icon pinterest">
																	&nbsp;
																</a>
															</li>
														</ul>
													</div>
												</div>
											</li>
											<li>
												<div class="column column_2_3">
													<img src='images/samples/690x450/image_02.jpg' alt='img'>
												</div>
												<div class="column column_1_3">
													<h3 class="page_margin_top">
														New Painkiller
													</h3>
													<p>
														Since December, the United Kingdom has faced relentless assault from some of the worst winter weather on record. It began with the worst storm and tidal surges in 60 years.
													</p>
													<div class="sentence margin_top_0">
														<span class="author">John Smith, Flickr</span>
													</div>
													<div class="clearfix">
														<a class="read_more close_popup page_margin_top_section" href="#" title="Read more"><span class="arrow"></span><span>RETURN TO POST</span></a>
													</div>
													<div class="share_box page_margin_top_section clearfix">
														<label>Share:</label>
														<ul class="social_icons dark clearfix">
															<li>
																<a target="_blank" title="" href="http://facebook.com/QuanticaLabs" class="social_icon facebook">
																	&nbsp;
																</a>
															</li>
															<li>
																<a target="_blank" title="" href="https://twitter.com/QuanticaLabs" class="social_icon twitter">
																	&nbsp;
																</a>
															</li>
															<li>
																<a title="" href="mailto:contact@pressroom.com" class="social_icon mail">
																	&nbsp;
																</a>
															</li>
															<li>
																<a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon envato">
																	&nbsp;
																</a>
															</li>
															<li>
																<a title="" href="#" class="social_icon instagram">
																	&nbsp;
																</a>
															</li>
															<li>
																<a title="" href="#" class="social_icon pinterest">
																	&nbsp;
																</a>
															</li>
														</ul>
													</div>
												</div>
											</li>
											<li>
												<div class="column column_2_3">
													<img src='images/samples/690x450/image_08.jpg' alt='img'>
												</div>
												<div class="column column_1_3">
													<h3 class="page_margin_top">
														Built on Brotherhood
													</h3>
													<p>
														Since December, the United Kingdom has faced relentless assault from some of the worst winter weather on record. It began with the worst storm and tidal surges in 60 years.
													</p>
													<div class="sentence margin_top_0">
														<span class="author">John Smith, Flickr</span>
													</div>
													<div class="clearfix">
														<a class="read_more close_popup page_margin_top_section" href="#" title="Read more"><span class="arrow"></span><span>RETURN TO POST</span></a>
													</div>
													<div class="share_box page_margin_top_section clearfix">
														<label>Share:</label>
														<ul class="social_icons dark clearfix">
															<li>
																<a target="_blank" title="" href="http://facebook.com/QuanticaLabs" class="social_icon facebook">
																	&nbsp;
																</a>
															</li>
															<li>
																<a target="_blank" title="" href="https://twitter.com/QuanticaLabs" class="social_icon twitter">
																	&nbsp;
																</a>
															</li>
															<li>
																<a title="" href="mailto:contact@pressroom.com" class="social_icon mail">
																	&nbsp;
																</a>
															</li>
															<li>
																<a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon envato">
																	&nbsp;
																</a>
															</li>
															<li>
																<a title="" href="#" class="social_icon instagram">
																	&nbsp;
																</a>
															</li>
															<li>
																<a title="" href="#" class="social_icon pinterest">
																	&nbsp;
																</a>
															</li>
														</ul>
													</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="post_content page_margin_top_section clearfix">
							<div class="content_box">
								<h3 class="excerpt">Politicians have looked weak in the face of such natural disaster, with many facing criticism from local residents for doing little more than turning up as flood tourists at the site of disasters.</h3>
								<div class="text">
									<p>Britons are normally never more comfortable than when talking about the weather, but recent extreme weather events have began to test that theory. Since December, the United Kingdom has faced a relentless assault from some of the worst winter weather on record. It began with the worst storm and tidal surges in 60 years hitting the North Sea coastline, floods that ruined Christmas for thousands across Surrey and Dorset and in January, the most exceptional period of rainfall since 1766. The deluge has transformed swathes of southern England into cold, dark lakes, destroying homes and businesses, and in some cases taking lives.</p>
									<p>Politicians have looked weak in the face of such natural disaster, with many facing criticism from local residents for doing little more than turning up as “flood tourists” at the site of disasters, incapable of helping those in crisis and only there for a photo opportunity. The Environment Agency, the body responsible for combating floods and managing rivers, has also been blamed for failing to curb the disasters. But there’s an ever larger debate over the role of climate change in the current floods and storms, and it has been unremittingly hostile.</p>
									<blockquote class="inside_text page_margin_top">
										Politicians have looked weak in the face of such natural disaster, with many facing criticism from local residents.
										<span class="author">&#8212;&nbsp;&nbsp;Julia Slingo, ETF</span>
									</blockquote>
									<p>For those affected by flooding however, their immediate concerns are not necessarily about the manmade changes to the earth’s atmosphere. A YouGov poll from February found that while 84% of those surveyed believed Britain was likely to experience similar extreme weather events in the next few years, only 30% thought it was connected to man-made climate change.</p>
									<p>There is no evidence to counter the basic premise that a warmer world will lead to more intense daily and hourly rain events. When heavy rain in 2000 devastated parts of Britain, a later study found the climate change had doubled the chances of the flood occurring, said Julia Slingo.</p>
									<a title="6 Comments" href="#comments_list" class="read_more page_margin_top scroll_to_comments"><span class="arrow"></span><span>6 COMMENTS</span></a>
								</div>
							</div>
							<div class="author_box animated_element">
								<div class="author">
									<a title="Anna Shubina" href="?page=author" class="thumb">
										<img alt="img" src="images/samples/Team_100x100/image_02.jpg">
									</a>
									<div class="details">
										<h5><a title="Anna Shubina" href="?page=author">Anna Shubina</a></h5>
										<h6>EDITOR</h6>
										<a href="?page=author" class="more highlight margin_top_15">PROFILE</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row page_margin_top">
					<div class="share_box clearfix">
						<label>Share:</label>
						<ul class="social_icons clearfix">
							<li>
								<a target="_blank" title="" href="http://facebook.com/QuanticaLabs" class="social_icon facebook">
									&nbsp;
								</a>
							</li>
							<li>
								<a target="_blank" title="" href="https://twitter.com/QuanticaLabs" class="social_icon twitter">
									&nbsp;
								</a>
							</li>
							<li>
								<a title="" href="mailto:contact@pressroom.com" class="social_icon mail">
									&nbsp;
								</a>
							</li>
							<li>
								<a title="" href="#" class="social_icon skype">
									&nbsp;
								</a>
							</li>
							<li>
								<a title="" href="http://themeforest.net/user/QuanticaLabs?ref=QuanticaLabs" class="social_icon envato">
									&nbsp;
								</a>
							</li>
							<li>
								<a title="" href="#" class="social_icon instagram">
									&nbsp;
								</a>
							</li>
							<li>
								<a title="" href="#" class="social_icon pinterest">
									&nbsp;
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="row page_margin_top">
					<ul class="taxonomies tags left clearfix">
						<li>
							<a href="#" title="People">PEOPLE</a>
						</li>
						<li>
							<a href="#" title="Sport">SPORT</a>
						</li>
					</ul>
					<ul class="taxonomies categories right clearfix">
						<li>
							<a href="?page=category&amp;cat=health" title="HEALTH">HEALTH</a>
						</li>
					</ul>
				</div>
				<div class="row page_margin_top_section">
					<h4 class="box_header">Posts Carousel</h4>
					<div class="horizontal_carousel_container page_margin_top">
						<ul class="blog horizontal_carousel autoplay-1 scroll-1 navigation-1 easing-easeInOutQuint duration-750">
							<li class="post">
								<a href="?page=post" title="New Painkiller Rekindles Addiction Concerns">
									<img src='images/samples/330x242/image_08.jpg' alt='img'>
								</a>
								<h5><a href="?page=post" title="New Painkiller Rekindles Addiction Concerns">New Painkiller Rekindles Addiction Concerns</a></h5>
								<ul class="post_details simple">
									<li class="category"><a href="?page=category&amp;cat=health" title="HEALTH">HEALTH</a></li>
									<li class="date">
										10:11 PM, Feb 02
									</li>
								</ul>
							</li>
							<li class="post">
								<a href="?page=post" title="High Altitudes May Aid Weight Control">
									<img src='images/samples/330x242/image_01.jpg' alt='img'>
								</a>
								<h5><a href="?page=post" title="High Altitudes May Aid Weight Control">High Altitudes May Aid Weight Control</a></h5>
								<ul class="post_details simple">
									<li class="category"><a href="?page=category&amp;cat=health" title="HEALTH">HEALTH</a></li>
									<li class="date">
										10:11 PM, Feb 02
									</li>
								</ul>
							</li>
							<li class="post">
								<a href="?page=post_gallery" title="Built on Brotherhood, Club Lives Up to Name">
									<span class="icon gallery"><!--<span class="info">999</span>--></span>
									<img src='images/samples/330x242/image_03.jpg' alt='img'>
								</a>
								<h5><a href="?page=post_gallery" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a></h5>
								<ul class="post_details simple">
									<li class="category"><a href="?page=category&amp;cat=health" title="HEALTH">HEALTH</a></li>
									<li class="date">
										10:11 PM, Feb 02
									</li>
								</ul>
							</li>
							<li class="post first">
								<a href="?page=post" title="Built on Brotherhood, Club Lives Up to Name">
									<img src='images/samples/330x242/image_09.jpg' alt='img'>
								</a>
								<h5><a href="?page=post" title="Built on Brotherhood, Club Lives Up to Name">Built on Brotherhood, Club Lives Up to Name</a></h5>
								<ul class="post_details simple">
									<li class="category"><a href="?page=category&amp;cat=health" title="HEALTH">HEALTH</a></li>
									<li class="date">
										10:11 PM, Feb 02
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
				<div class="row page_margin_top_section">
					<h4 class="box_header">Leave a Comment</h4>
					<p class="padding_top_30">Your email address will not be published. Required fields are marked with *</p>
					<form class="comment_form margin_top_15" id="comment_form" method="post" action="/Pressroom/Template/?page=post_gallery">
						<fieldset class="column column_1_3">
							<input class="text_input" name="name" type="text" value="Your Name *" placeholder="Your Name *">
						</fieldset>
						<fieldset class="column column_1_3">
							<input class="text_input" name="email" type="text" value="Your Email *" placeholder="Your Email *">
						</fieldset>
						<fieldset class="column column_1_3">
							<input class="text_input" name="website" type="text" value="Website" placeholder="Website">
						</fieldset>
						<fieldset>
							<textarea name="message" placeholder="Comment *">Comment *</textarea>
						</fieldset>
						<fieldset>
							<input type="submit" value="POST COMMENT" class="more active">
							<a href="#cancel" id="cancel_comment" title="Cancel reply">Cancel reply</a>
						</fieldset>
					</form>
				</div>
				<div class="row page_margin_top_section">
					<h4 class="box_header">6 Comments</h4>
					<ul id="comments_list">
						<li class="comment clearfix" id="comment-1">
							<div class="comment_author_avatar">
								&nbsp;
							</div>
							<div class="comment_details">
								<div class="posted_by clearfix">
									<h5><a class="author" href="#" title="Kevin Nomad">Kevin Nomad</a></h5>
									<abbr title="22 July 2014" class="timeago">22 July 2014</abbr>
								</div>
								<p>
									Donec ipsum diam, pretium mollis dapibus risus. Nullam tindun pulvinar at interdum eget, suscipit eget felis. Pellentesque est faucibus tincidunt risus id interdum primis orci cubilla gravida id interdum eget.
								</p>
								<a class="read_more" href="#comment_form" title="Reply">
									<span class="arrow"></span><span>REPLY</span>
								</a>
							</div>
						</li>
						<li class="comment clearfix" id="comment-2">
							<div class="comment_author_avatar">
								&nbsp;
							</div>
							<div class="comment_details">
								<div class="posted_by clearfix">
									<h5><a class="author" href="#" title="Kevin Nomad">Kevin Nomad</a></h5>
									<abbr title="22 July 2014" class="timeago">22 July 2014</abbr>
								</div>
								<p>
									Donec ipsum diam, pretium mollis dapibus risus. Nullam tindun pulvinar at interdum eget, suscipit eget felis. Pellentesque est faucibus tincidunt risus id interdum primis orci cubilla gravida id interdum eget.
								</p>
								<a class="read_more" href="#comment_form" title="Reply">
									<span class="arrow"></span><span>REPLY</span>
								</a>
							</div>
							<ul class="children">
								<li class="comment clearfix">
									<a href="#comment-2" class="parent_arrow"></a>
									<div class="comment_author_avatar">
										&nbsp;
									</div>
									<div class="comment_details">
										<div class="posted_by clearfix">
											<h5><a class="author" href="#" title="Keith Douglas">Keith Douglas</a><a href="#comment-2" class="in_reply">@Kevin Nomad</a></h5>
											<abbr title="22 July 2014" class="timeago">22 July 2014</abbr>
										</div>
										<p>
											Donec ipsum diam, pretium mollis dapibus risus. Nullam tindun pulvinar at interdum eget, suscipit eget felis. Pellentesque est faucibus tincidunt risus id interdum primis orci cubilla gravida id interdum eget.
										</p>
										<a class="read_more" href="#comment_form" title="Reply">
											<span class="arrow"></span><span>REPLY</span>
										</a>
									</div>
								</li>
								<li class="comment clearfix">
									<a href="#comment-2" class="parent_arrow"></a>
									<div class="comment_author_avatar">
										&nbsp;
									</div>
									<div class="comment_details">
										<div class="posted_by clearfix">
											<h5><a class="author" href="#" title="Keith Douglas">Keith Douglas</a><a href="#comment-2" class="in_reply">@Kevin Nomad</a></h5>
											<abbr title="22 July 2014" class="timeago">22 July 2014</abbr>
										</div>
										<p>
											Donec ipsum diam, pretium mollis dapibus risus. Nullam tindun pulvinar at interdum eget, suscipit eget felis. Pellentesque est faucibus tincidunt risus id interdum primis orci cubilla gravida id interdum eget.
										</p>
										<a class="read_more" href="#comment_form" title="Reply">
											<span class="arrow"></span><span>REPLY</span>
										</a>
									</div>
								</li>
							</ul>
						</li>
					</ul>
					<ul class="pagination page_margin_top_section">
						<li class="left">
							<a href="#" title="">&nbsp;</a>
						</li>
						<li class="selected">
							<a href="#" title="">
								1
							</a>
						</li>
						<li>
							<a href="#" title="">
								2
							</a>
						</li>
						<li>
							<a href="#" title="">
								3
							</a>
						</li>
						<li class="right">
							<a href="#" title="">&nbsp;</a>
						</li>
					</ul>
				</div>
			</div>
		<section class="content-section">

			<div class="container">
				<div class="col-md-9">
					<div class="section-title"><h1><?php echo $gallery2['GalleryName']; ?></h1></div>
					
					<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script><ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-1518250080154239" data-ad-slot="8723242738" data-ad-format="link"></ins><script>(adsbygoogle = window.adsbygoogle || []).push({});</script><br/><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script><ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-1518250080154239" data-ad-slot="9404697537" data-ad-format="auto"></ins><script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
				<?php 
					$directory = "admin/uploads/".$gallery."/";
					$images = glob($directory . "*.jpg");
					$count=1;
					foreach($images as $image):
				?>
					<div class="col-md-3 margin-bottom15" >
						<a href="<?php echo home_base_url(); ?><?php echo $image; ?>" data-lightbox="example-1" title='<?php echo $gallery2['GalleryName']; ?>'>
						<img src="<?php echo home_base_url(); ?><?php echo $image; ?>" class='max-width'/>
						</a>
					</div>
					<?php if($count%4==0){echo "<div class='clearfix'></div>";} ?>
				<?php
					$count++;
					endforeach;
				?>
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script><ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-1518250080154239" data-ad-slot="8723242738" data-ad-format="link"></ins><script>(adsbygoogle = window.adsbygoogle || []).push({});</script><br/><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script><ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-1518250080154239" data-ad-slot="9404697537" data-ad-format="auto"></ins><script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
				</div>
				<div class="col-md-3">
						<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script><ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-1518250080154239" data-ad-slot="8723242738" data-ad-format="link"></ins><script>(adsbygoogle = window.adsbygoogle || []).push({});</script><br/><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script><ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-1518250080154239" data-ad-slot="9404697537" data-ad-format="auto"></ins><script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
				</div>

			</div>
		</section>
		<script src="<?php echo home_base_url(); ?>jscript/lightbox-plus-jquery.min.js"></script>
<?php include('footer.php'); ?>