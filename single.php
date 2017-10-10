<?php get_header(); ?>
<?php if (!has_post_format('aside')): ?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="page"><div class="page_layout page_margin_top clearfix"><div class="row page_margin_top"><div class="column column_1_1"><div class="horizontal_carousel_container small"><ul class="blog horizontal_carousel autoplay-1 scroll-1 visible-3 navigation-1 easing-easeInOutQuint duration-750"><?php $cat = get_field('cat'); $args = array ('cat'=>$cat,'posts_per_page'=> "8");$the_query = new WP_Query( $args ); if($the_query->have_posts()): $count=1;while ( $the_query->have_posts() ) : $the_query->the_post(); $post->ID; ?><li class="post"><a href="<?php echo get_permalink(); ?>" title="<?php echo get_the_title(); ?>"><?php  $feat_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'medium' );?><?php if( $feat_image): ?><img src='<?php echo $feat_image[0]; ?>' title='<?php echo get_the_title($post->ID); ?>' alt='<?php echo get_the_title($post->ID); ?>'><?php endif; ?></a><h5><a href="<?php echo get_permalink($post->ID); ?>" title="<?php echo get_the_title($post->ID); ?>"><?php echo get_the_title($post->ID); ?></a></h5><ul class="post_details simple"><li class="category"><?php $posttags = get_the_tags(); if ($posttags) { $tagsnumber1=1; foreach($posttags as $tag) { if($tagsnumber1 == 1){ ?><a href="<?php echo get_tag_link($tag->term_id); ?>" title='<?php echo get_the_title(); ?>'><?php echo $tag->name; ?></a><?php } $tagsnumber1++;} }?></li><li class="date"><?php echo get_the_date(); ?></li></ul></li><?php  $count++; endwhile; endif; $post->ID = $postba; wp_reset_postdata(); ?></ul></div></div></div><hr class="divider page_margin_top">
<div class="row page_margin_top"><div class="column column_2_3"><div class="row"><div class="post single"><h1 class="post_title"><?php echo get_the_title(); ?></h1><ul class="post_details clearfix"><li class="detail category">In <?php $posttags1 = get_the_tags(); if ($posttags1) { $tagsnumber2=1; foreach($posttags1 as $tag) { if($tagsnumber2==1){ ?><a href="<?php echo get_tag_link($tag->term_id); ?>" title='<?php echo get_the_title(); ?>'><?php echo $tag->name; ?></a><?php } $tagsnumber2++;} } ?></li><li class="detail date"><?php echo get_the_date('F j Y' ); ?></li><?php if(!get_field('youtube_video_id')): ?><li class="detail category"><a href="<?php echo get_field('youtube_download'); ?>" target='_blank'>Download</a></li><?php endif; if(get_field('youtube_video_id')): ?> <li class="detail category"><a href="https://www.ssyoutube.com/watch?v=<?php echo get_field('youtube_video_id'); ?>" target='_blank'>Download</a></li><?php endif; ?><li><div class="fb-like" data-href="https://www.facebook.com/livevideoshub/" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div></li></ul><?php if(get_field('newslink')): ?><a href="<?php echo get_field('newslink'); ?>" class="anthorlink" title="<?php echo get_the_title(); ?>" target='_blank' >If Below Video Not Playing Click This Link For Full show </a><?php endif; ?>

<?php if(get_field('youtube_video_id')): ?><div class="post_content clearfix"><iframe width="100%"  src="https://www.youtube.com/embed/<?php echo get_field('youtube_video_id'); ?><?php if(!is_user_logged_in()){echo '?autoplay=1';} ?>" frameborder="0" allowfullscreen rel="nofollow" class="livevideoshub_video_height"></iframe></div><?php endif; ?><?php if(get_field('custom_video_url')): ?><video id="my-video" class="video-js livevideoshub_video_height" controls preload="auto" width="100%" poster="<?php  $feat_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'medium' );?><?php if( $feat_image): ?><?php echo $feat_image[0]; ?><?php endif; ?>" data-setup="{}" ><source src="<?php echo get_field("custom_video_url"); ?>" type='video/mp4'><source src="MY_VIDEO.webm" type='video/webm'></video><?php endif; ?>

<?php if(get_field('full_episode_id',$post->ID)): ?>
<?php $full_episode_id = get_field('full_episode_id', $post->ID); ?>
<video id="my-video" class="video-js livevideoshub_video_height" controls preload="auto" width="100%" poster="<?php  $feat_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'medium' );?><?php if( $feat_image): ?><?php echo $feat_image[0]; ?><?php endif; ?>" data-setup="{}" ><source src="<?php echo get_field('custom_video_url', $full_episode_id); ?>" type='video/mp4'><source src="MY_VIDEO.webm" type='video/webm'></video><?php endif; ?><div class="positionset1">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Sidebar -->
<ins class="adsbygoogle"
     style="display:inline-block;width:336px;height:280px"
     data-ad-client="ca-pub-1518250080154239"
     data-ad-slot="7259666331"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div><?php if(get_field('newslink')): ?><a href="<?php echo get_field('newslink'); ?>" style="padding:0px;" class="anthorlink" title="<?php echo get_the_title(); ?>">If Above Video Not Playing Click This Link For Full show </a><?php endif; ?>
<div class="post_content clearfix"><div><div class="text"><h2 class="excerpt" style="margin-top:0px;"><?php echo get_field('subtitle'); ?></h2><?php echo apply_filters('the_content',$post->post_content); ?><div class="width150"><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script><ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-1518250080154239" data-ad-slot="8723242738" data-ad-format="link"></ins><script>(adsbygoogle = window.adsbygoogle || []).push({});</script></div><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- contact -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-1518250080154239"
     data-ad-slot="2550265139"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script><?php if(get_field('jabardasth_download')): ?><h3 ><a style='color:#000; font-size:20px;' target="_blank" href='https://www.ssyoutube.com/watch?v=<?php echo get_field('jabardasth_download'); ?>'>Download This Video</a></h3><?php endif; ?></div></div></div><?php  $feat_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'medium' );?><?php if( $feat_image): ?><a href="<?php echo $feat_image[0]; ?>" class="post_image page_margin_top prettyPhoto" title="<?php echo get_the_title(); ?>"><img src='<?php echo $feat_image[0]; ?>' title='<?php echo get_the_title(); ?>' alt='<?php echo get_the_title(); ?>'></a><?php endif; ?></div></div><div class="row page_margin_top"><div class="share_box clearfix"><label>Share:</label><ul class="social_icons clearfix"><li><a target="_blank" title="<?php echo get_the_title(); ?>" href="http://www.facebook.com/sharer.php?u=<?php echo get_permalink(); ?>" class="social_icon facebook">&nbsp;</a></li><li><a target="_blank" title="<?php echo get_the_title(); ?>" href="http://twitter.com/share?url=<?php echo get_permalink(); ?>" class="social_icon twitter">&nbsp;</a></li><li><a title="<?php echo get_the_title(); ?>" target="_blank" href="http://www.digg.com/submit?url=<?php echo get_permalink(); ?>" class="social_icon digg">&nbsp;</a></li><li><a  title="<?php echo get_the_title(); ?>" target="_blank" href="https://plus.google.com/share?url=<?php echo get_permalink(); ?>" class="social_icon googleplus">&nbsp;</a></li><li><a title="<?php echo get_the_title(); ?>" target="_blank" href="javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());" class="social_icon pinterest">&nbsp;</a></li><li><a title="<?php echo get_the_title(); ?>" target="_blank"  href="http://reddit.com/submit?url=<?php echo get_permalink(); ?>&amp;title=<?php echo get_the_title(); ?>" class="social_icon reddit">&nbsp;</a></li><li><a title="<?php echo get_the_title(); ?>" target="_blank"  href="http://www.stumbleupon.com/submit?url=<?php echo get_permalink(); ?>&amp;title=<?php echo get_the_title(); ?>" class="social_icon stumbleupon">&nbsp;</a></li><li><a title="<?php echo get_the_title(); ?>" target="_blank"  href="http://www.tumblr.com/share/link?url=<?php echo get_permalink(); ?>" class="social_icon tumblr">&nbsp;</a></li><li><a title="<?php echo get_the_title(); ?>" text="<?php echo get_the_title(); ?>" target="_blank"  href="https://www.blogger.com/blog-this.g?u=<?php echo get_permalink(); ?>&n=<?php echo get_the_title(); ?>&t=<?php echo get_the_excerpt(); ?>" class="social_icon blogger">&nbsp;</a></li></ul></div></div><div class="row page_margin_top"><ul class="taxonomies tags left clearfix"><?php $posttags = get_the_tags();?><?php if ($posttags) { foreach($posttags as $tag) {?><li><a href="<?php echo get_tag_link($tag->term_id); ?>" title='<?php echo get_the_title(); ?>'><?php echo $tag->name; ?></a></li><?php } } ?></ul><ul class="taxonomies categories right clearfix"><?php 	$categories = get_the_category(); if ( ! empty( $categories ) ) { foreach( $categories as $category ) { echo '<li><a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' .get_the_title(). '">' . esc_html( $category->name ) . '</a></li>'; } } ?></ul></div><div class="row page_margin_top_section"><h4 class="box_header">Most Views</h4><div class="horizontal_carousel_container page_margin_top"><ul class="blog horizontal_carousel autoplay-1 scroll-1 navigation-1 easing-easeInOutQuint duration-750"><?php if(get_field('category2')){ $cat2 = get_field('category2'); }else{ $cat = get_field('cat'); $cat2 = $cat; } $args = array ( 'cat'=>$cat2, "posts_per_page"=>"8" ); $the_query = new WP_Query( $args ); if($the_query->have_posts()): while ( $the_query->have_posts() ) : $the_query->the_post(); $post->ID; ?><li class="post"><a href="<?php echo get_permalink(); ?>" title="<?php echo get_the_title(); ?>"><?php  $feat_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'medium' );?><?php if( $feat_image): ?><img src='<?php echo $feat_image[0]; ?>' title='<?php echo get_the_title($post->ID); ?>' alt='<?php echo get_the_title($post->ID); ?>'><?php endif; ?></a><h5><a href="<?php echo get_permalink(); ?>" title="<?php echo get_the_title(); ?>"><?php echo get_the_title(); ?></a></h5><ul class="post_details simple"><li class="category"><?php $posttags = get_the_tags();?><?php if ($posttags) { $tagcount22=1; foreach($posttags as $tag) { if($tagcount22==1){ ?> <a href="<?php echo get_tag_link($tag->term_id); ?>" title='<?php echo get_the_title(); ?>'> <?php echo $tag->name; ?></a><?php } $tagcount22++;} } ?> </li> <li class="date"> <?php echo get_the_date(); ?> </li> </ul></li> <?php endwhile; endif; $post->ID = $postba;  wp_reset_postdata(); ?> </ul> </div><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- mturk -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-1518250080154239"
     data-ad-slot="9404697537"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div><div class="row page_margin_top_section"><?php echo comments_template();?></div></div><div class="column column_1_3"><?php echo get_sidebar(); ?></div></div></div></div>
<?php endif; ?>
<?php if (has_post_format('aside')): ?>
<?php include('cricket_functions.php'); ?>
<style type="text/css">
  
  .second-innings {
    font-size: 25px;
    color: #000;
    padding: 5px 0px;
    font-weight: bold;
  }
  .match_status{
    font-size: 16px;
    color: #ED1C24;
    padding: 5px 0px;
  }
  .man-of-the-match{
    font-size: 18px;
    color: #000;
    padding: 15px 0px;
  }
  .man-of-the-match span{
    color: #111;
    font-size: 14px;
  }
  .second-innings.completed{
    font-size: 20px;
    color: #111;
  }
   .col-md-8 table th{
    color: #333;
   }
   .col-md-8 table thead, .col-md-4 table thead{
    background: #ED1C24;
    color: #fff;
   }
   .col-md-8 table thead th{
    color: #fff;
   }
   .col-md-8 table td a, .col-md-4 table td a{
      color:  #4080ff;
   }
  .col-md-8 table td, .col-md-4 table td{
    padding: 8px 0px;
  }
  .col-md-8 table, .col-md-4 table{
    width: 99%;
    color: #000;
  }
  @media (min-width:991px ){
  .col-md-8{
    width:60%;
    float: left;
  }
  
  .col-md-4{
    width: 40%;
    float: left;
  }
  }
  @media (max-width:768px ){
  .col-md-8{
    width:100%;
  }
  .col-md-4{
    width: 100%;
  }
  }
</style>
<div class="page"><div class="page_layout page_margin_top clearfix"><div class="row page_margin_top"><div class="column column_1_1"><div class="horizontal_carousel_container small"><ul class="blog horizontal_carousel autoplay-1 scroll-1 visible-3 navigation-1 easing-easeInOutQuint duration-750"><?php $cat = get_field('cat'); $args = array ('cat'=>$cat,'posts_per_page'=> "8");$the_query = new WP_Query( $args ); if($the_query->have_posts()): $count=1;while ( $the_query->have_posts() ) : $the_query->the_post(); $post->ID; ?><li class="post"><a href="<?php echo get_permalink(); ?>" title="<?php echo get_the_title(); ?>"><?php  $feat_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'medium' );?><?php if( $feat_image): ?><img src='<?php echo $feat_image[0]; ?>' title='<?php echo get_the_title($post->ID); ?>' alt='<?php echo get_the_title($post->ID); ?>'><?php endif; ?></a><h5><a href="<?php echo get_permalink($post->ID); ?>" title="<?php echo get_the_title($post->ID); ?>"><?php echo get_the_title($post->ID); ?></a></h5><ul class="post_details simple"><li class="category"><?php $posttags = get_the_tags(); if ($posttags) { foreach($posttags as $tag) { ?><a href="<?php echo get_tag_link($tag->term_id); ?>" title='<?php echo get_the_title(); ?>'><?php echo $tag->name; ?></a><?php } }?></li><li class="date"><?php echo get_the_date(); ?></li></ul></li><?php  $count++; endwhile; endif; $post->ID = $postba; wp_reset_postdata(); ?></ul></div></div></div><hr class="divider page_margin_top">
<div class="row page_margin_top"><div class="column column_2_3"><div class="row"><div class="post single"><h1 class="post_title"><?php echo get_the_title(); ?></h1><ul class="post_details clearfix"><li class="detail category">In <?php $posttags1 = get_the_tags(); if ($posttags1) { foreach($posttags1 as $tag) { ?><a href="<?php echo get_tag_link($tag->term_id); ?>" title='<?php echo get_the_title(); ?>'><?php echo $tag->name; ?></a><?php } } ?></li><li class="detail date"><?php echo get_the_date('F j Y' ); ?></li><?php if(!get_field('youtube_video_id')): ?><li class="detail category"><a href="<?php echo get_field('youtube_download'); ?>" target='_blank'>Download</a></li><?php endif; if(get_field('youtube_video_id')): ?> <li class="detail category"><a href="https://www.ssyoutube.com/watch?v=<?php echo get_field('youtube_video_id'); ?>" target='_blank'>Download</a></li><?php endif; ?><li><div class="fb-like" data-href="https://www.facebook.com/livevideoshub/" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div></li></ul><?php if(get_field('newslink')): ?><a href="<?php echo get_field('newslink'); ?>" class="anthorlink" title="<?php echo get_the_title(); ?>" target='_blank' >If Below Video Not Playing Click This Link For Full show </a><?php endif; ?>
<div class="width150"><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script><ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-1518250080154239" data-ad-slot="8723242738" data-ad-format="link"></ins><script>(adsbygoogle = window.adsbygoogle || []).push({});</script></div>
<?php if(get_field('youtube_video_id')): ?><div class="post_content clearfix"><iframe width="100%"  src="https://www.youtube.com/embed/<?php echo get_field('youtube_video_id'); ?><?php if(!is_user_logged_in()){echo '?autoplay=1';} ?>" frameborder="0" allowfullscreen rel="nofollow" class="livevideoshub_video_height"></iframe></div><?php endif; ?><?php if(get_field('custom_video_url')): ?><video id="my-video" class="video-js livevideoshub_video_height" controls preload="auto" width="100%" poster="<?php  $feat_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'medium' );?><?php if( $feat_image): ?><?php echo $feat_image[0]; ?><?php endif; ?>" data-setup="{}" ><source src="<?php echo get_field("custom_video_url"); ?>" type='video/mp4'><source src="MY_VIDEO.webm" type='video/webm'></video><?php endif; ?>
<div class="positionset">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- mturk -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-1518250080154239"
     data-ad-slot="9404697537"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div>
<?php if(get_field('newslink')): ?><a href="<?php echo get_field('newslink'); ?>" style="padding:0px;" class="anthorlink" title="<?php echo get_the_title(); ?>">If Above Video Not Playing Click This Link For Full show </a><?php endif; ?><div class="post_content clearfix"><div><h2 class="excerpt" style="margin-top:0px;"><?php echo get_field('subtitle'); ?></h2><div class="width150"><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script><ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-1518250080154239" data-ad-slot="8723242738" data-ad-format="link"></ins><script>(adsbygoogle = window.adsbygoogle || []).push({});</script></div><div class="text">
<?php if($match_type==2 || $match_type==3): ?>
<?php if($innings!=0): ?>
<div class="second-innings <?php if($innings==2){echo "completed";} ?>" >
  <span><?php echo get_team_mini_name($teamone); ?></span>
  <span class="<?php if($innings==1){echo "match_running";} ?>"><?php echo get_match_totals($postid, 1); ?><?php if(get_wickets($postid, 1)!=10){echo "/".get_wickets($postid, 1);} if(get_wickets($postid, 1)==10){echo '-all out' ;} ?><?php echo "&nbsp;&nbsp;(".get_match_overs($postid, 1).".".get_match_remaining_balls($postid, 1)."overs)"; ?></span>
</div>
<?php endif; ?>
<?php if($innings==2): ?>
<div class="second-innings " >
  <span><?php echo get_team_mini_name($teamtwo); ?></span> 
  <span class="<?php if($innings==2){echo "match_running";} ?>"><?php echo get_match_totals($postid, 2); ?><?php if(get_wickets($postid, 2)!=10){echo "/".get_wickets($postid, 2);} if(get_wickets($postid, 2)==10){echo '-all out' ;} ?><?php echo "&nbsp;&nbsp;(".get_match_overs($postid, 2).".".get_match_remaining_balls($postid, 2)."overs)"; ?></span>
</div>
<?php endif; ?>
<?php endif; ?>
<div class="match_status" >
<?php if($match_type==2||$match_type==3||$match_status==2): ?>
<div class="match-result-completed" >
<?php if($match_status==2): ?>
<?php echo $match_result;?>
<?php endif; ?>
  <?php if($match_status==1||$match_status==0): ?>
    <?php if($innings==2): ?>
      <?php echo get_team_name($team); ?> Need <?php echo get_match_totals($postid, 1)-get_match_totals($postid, 2)+1; ?> runs in  <?Php if($match_type==3):?>
  <?php echo 120-get_balls($postid, 2); ?> ball
  <?Php endif; ?>
  <?Php if($match_type==2):?>
  <?php echo 300-get_balls($postid, 2); ?> ball
  <?Php endif; ?>
    <?php endif; ?>
    <?php if($innings==1): ?>
    <?php echo get_session_text($postid); ?>
    <?php endif; ?> 
  <?php endif; ?>
</div>
<?php endif; ?>
<?php if($match_status==1): ?>
<?php if($match_type==1): ?>
  <?php if($innings==1): ?>
  <div class="match-result-completed" >
  <?php echo get_session_text($postid); ?> 
  </div>
  <?php endif; ?>
<?php if($innings==2): ?>
<div class="match-result-completed" >
   <?php echo get_session_text($postid); ?>  - <?php echo get_team_name($team); ?>
  <?php if(get_match_totals($postid, 1)>get_match_totals($postid, 2)): ?>
  trail by <?php echo get_match_totals($postid, 1)-get_match_totals($postid, 2); ?> runs
  <?php endif; ?>
  <?php if(get_match_totals($postid, 2)>get_match_totals($postid, 1)): ?>
    Lead <?php echo get_match_totals($postid,2)-get_match_totals($postid, 1); ?> Runs
  <?php endif; ?>
</div>
<?php endif; ?>
<?php if($innings==3): ?>
<div class="match-result-completed" >
  <?php echo get_session_text($postid); ?>  - <?php echo get_team_name($team); ?>
  <?php if(get_match_totals($postid, 2)>(get_match_totals($postid, 1)+get_match_totals($postid, 3))): ?>
  trail by <?php echo get_match_totals($postid, 2)-(get_match_totals($postid, 1)+get_match_totals($postid, 3)); ?> runs
  <?php endif; ?>
  <?php if(get_match_totals($postid, 2)<get_match_totals($postid, 1)+get_match_totals($postid, 3)): ?>
    Lead <?php echo (get_match_totals($postid, 1)+get_match_totals($postid, 3))-get_match_totals($postid, 2); ?> 
  <?php endif; ?>
</div>
<?php endif; ?>
<?php if($innings==4): ?>
<div class="match-result-completed" >
  <?php echo get_session_text($postid); ?>  - <?php echo get_team_name($team); ?>
  <?php if((get_match_totals($postid, 1)+get_match_totals($postid, 3))>get_match_totals($postid, 2)): ?>
  need <?php echo (get_match_totals($postid, 1)+get_match_totals($postid, 3)+1)-(get_match_totals($postid, 2)+get_match_totals($postid, 4)); ?> runs
  <?php endif; ?>
</div>
<?php endif; ?>
<?php endif; ?>
<?php endif; ?>
<?php if($man_of_the_match): ?>
<div class="man-of-the-match">
  PLAYER OF THE MATCH
  <br/>
  <span><?php echo $man_of_the_match; ?></span>
</div>
<?php endif; ?>
<?php if($man_of_the_series): ?>
<div class="man-of-the-match">
  PLAYER OF THE SERIES 
  <br/>
  <span><?php echo $man_of_the_series; ?></span>
</div>
<?php endif; ?>
</div>
<?php if($innings!=0): ?>
            <div class="batsman-on-pitch">
              <div class="row">
              <div class="col-md-8">
              <?php if($playingbatsman): ?>
              <table class="table  table-batsmanonly">
              <thead><tr><th ><b>Batsman</b></th><th class="width50"><b>R</b></th><th class="width50"><b>B</b></th><th class="width50"><b>4s</b></th><th class="width50"><b>6s</b></th><th class="width50"><b>SR</b></th></tr></thead>
              <tbody>
                <?php echo $playingbatsman; ?>
              </tbody>
              </table>
              <?php endif; ?>
              <?php if($playingbowler): ?>
              <table class="table  table-bowleronly"><thead><tr><th><b>Bowler</b></th><th class="width50"><b>O</b></th><th class="width50"><b>R</b></th><th class="width50"><b>W</b></th><th class="width50"><b>M</b></th><th class="width50"><b>NB</b></th></tr></thead>
              <tbody>
                <?php echo $playingbowler; ?>
              </tbody>
              </table>
              <?php endif; ?>
              </div>
              <div class="col-md-4">
                <table class="table table-bordered table-lastwicketsetion">
                  <thead>
                    <tr>
                      <th>Key Stars</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php echo $last_wicket_section; ?>
                  </tbody>
                </table>
              </div>
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
              </div>

              <div class="recent-balls">
                <b>Recent: </b> 
                <span>
                <?php echo $recentball_score; ?>
                </span>
              </div>
            </div>
            <?php endif; ?>
            <?php if($innings!=0): ?>
            <?php if(get_field('newslink')): ?><a href="<?php echo get_field('newslink'); ?>" style="padding:0px;" class="anthorlink" target="_blank" title="<?php echo get_the_title(); ?>">Full Score Card </a><?php endif; ?>
          <?php endif; ?>
          <br/>
           <?php if($innings!=0): ?>
            <a href="" style="padding:0px;" class="anthorlink" title="<?php echo get_the_title(); ?>">Refresh Score </a>
          <?php endif; ?>
<?php echo apply_filters('the_content',$post->post_content); ?>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- mturk -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-1518250080154239"
     data-ad-slot="9404697537"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div></div></div><?php  $feat_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'medium' );?><?php if( $feat_image): ?><a href="<?php echo $feat_image[0]; ?>" class="post_image page_margin_top prettyPhoto" title="<?php echo get_the_title(); ?>"><img src='<?php echo $feat_image[0]; ?>' title='<?php echo get_the_title(); ?>' alt='<?php echo get_the_title(); ?>'></a><?php endif; ?></div></div><div class="row page_margin_top"><div class="share_box clearfix"><label>Share:</label><ul class="social_icons clearfix"><li><a target="_blank" title="<?php echo get_the_title(); ?>" href="http://www.facebook.com/sharer.php?u=<?php echo get_permalink(); ?>" class="social_icon facebook">&nbsp;</a></li><li><a target="_blank" title="<?php echo get_the_title(); ?>" href="http://twitter.com/share?url=<?php echo get_permalink(); ?>" class="social_icon twitter">&nbsp;</a></li><li><a title="<?php echo get_the_title(); ?>" target="_blank" href="http://www.digg.com/submit?url=<?php echo get_permalink(); ?>" class="social_icon digg">&nbsp;</a></li><li><a  title="<?php echo get_the_title(); ?>" target="_blank" href="https://plus.google.com/share?url=<?php echo get_permalink(); ?>" class="social_icon googleplus">&nbsp;</a></li><li><a title="<?php echo get_the_title(); ?>" target="_blank" href="javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());" class="social_icon pinterest">&nbsp;</a></li><li><a title="<?php echo get_the_title(); ?>" target="_blank"  href="http://reddit.com/submit?url=<?php echo get_permalink(); ?>&amp;title=<?php echo get_the_title(); ?>" class="social_icon reddit">&nbsp;</a></li><li><a title="<?php echo get_the_title(); ?>" target="_blank"  href="http://www.stumbleupon.com/submit?url=<?php echo get_permalink(); ?>&amp;title=<?php echo get_the_title(); ?>" class="social_icon stumbleupon">&nbsp;</a></li><li><a title="<?php echo get_the_title(); ?>" target="_blank"  href="http://www.tumblr.com/share/link?url=<?php echo get_permalink(); ?>" class="social_icon tumblr">&nbsp;</a></li><li><a title="<?php echo get_the_title(); ?>" text="<?php echo get_the_title(); ?>" target="_blank"  href="https://www.blogger.com/blog-this.g?u=<?php echo get_permalink(); ?>&n=<?php echo get_the_title(); ?>&t=<?php echo get_the_excerpt(); ?>" class="social_icon blogger">&nbsp;</a></li></ul></div></div><div class="row page_margin_top"><ul class="taxonomies tags left clearfix"><?php $posttags = get_the_tags();?><?php if ($posttags) { foreach($posttags as $tag) {?><li><a href="<?php echo get_tag_link($tag->term_id); ?>" title='<?php echo get_the_title(); ?>'><?php echo $tag->name; ?></a></li><?php } } ?></ul><ul class="taxonomies categories right clearfix"><?php   $categories = get_the_category(); if ( ! empty( $categories ) ) { foreach( $categories as $category ) { echo '<li><a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' .get_the_title(). '">' . esc_html( $category->name ) . '</a></li>'; } } ?></ul></div><div class="row page_margin_top_section"><h4 class="box_header">Most Views</h4><div class="horizontal_carousel_container page_margin_top"><ul class="blog horizontal_carousel autoplay-1 scroll-1 navigation-1 easing-easeInOutQuint duration-750"><?php if(get_field('category2')){ $cat2 = get_field('category2'); }else{ $cat = get_field('cat'); $cat2 = $cat; } $args = array ( 'cat'=>$cat2, "posts_per_page"=>"8" ); $the_query = new WP_Query( $args ); if($the_query->have_posts()): while ( $the_query->have_posts() ) : $the_query->the_post(); $post->ID; ?><li class="post"><a href="<?php echo get_permalink(); ?>" title="<?php echo get_the_title(); ?>"><?php  $feat_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'medium' );?><?php if( $feat_image): ?><img src='<?php echo $feat_image[0]; ?>' title='<?php echo get_the_title($post->ID); ?>' alt='<?php echo get_the_title($post->ID); ?>'><?php endif; ?></a><h5><a href="<?php echo get_permalink(); ?>" title="<?php echo get_the_title(); ?>"><?php echo get_the_title(); ?></a></h5><ul class="post_details simple"><li class="category"><?php $posttags = get_the_tags();?><?php if ($posttags) { foreach($posttags as $tag) { ?> <a href="<?php echo get_tag_link($tag->term_id); ?>" title='<?php echo get_the_title(); ?>'> <?php echo $tag->name; ?></a><?php } } ?> </li> <li class="date"> <?php echo get_the_date(); ?> </li> </ul></li> <?php endwhile; endif; $post->ID = $postba;  wp_reset_postdata(); ?> </ul> </div></div><div class="row page_margin_top_section"><?php echo comments_template();?></div><div data-WRID="WRID-149814004305079250" data-widgetType="featuredDeals" data-responsive="yes" data-class="affiliateAdsByFlipkart" height="250" width="300"></div><script async src="//affiliate.flipkart.com/affiliate/widgets/FKAffiliateWidgets.js"></script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div><div class="column column_1_3"><?php echo get_sidebar(); ?></div></div></div></div>


<?php endif; ?>
<?php get_footer(); ?> 