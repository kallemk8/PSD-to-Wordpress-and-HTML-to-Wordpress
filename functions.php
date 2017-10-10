<?php 
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'post-formats', array( 'aside' ) );

	add_theme_support('menus');
	register_nav_menus( array(
		'header-menu' => 'Header Menu',
		'footer_menu' => 'Footer Menu'
	) );

	if( function_exists('acf_add_options_page') ) {
	
		acf_add_options_page();

	}
	register_sidebar( array(
		'name'          => __( 'Primary Sidebar', 'twentyfourteen' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Main sidebar that appears on the left.', 'twentyfourteen' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="box_header page_margin_top_section">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => __( 'Cricket Sidebar', 'twentyfourteen' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Main sidebar that appears on the left.', 'twentyfourteen' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="box_header page_margin_top_section">',
		'after_title'   => '</h4>',
	) );
 
	/*$labels = array(
	'name'               => _x( 'Photos', 'post type general name' ),
	'singular_name'      => _x( 'Photo', 'post type singular name' ),
	'add_new'            => _x( 'Add New', 'Photo' ),
	'add_new_item'       => __( 'Add New Photo' ),
	'edit_item'          => __( 'Edit Photo' ),
	'new_item'           => __( 'New Photo' ),
	'all_items'          => __( 'All Photos' ),
	'view_item'          => __( 'View Photos' ),
	'search_items'       => __( 'Search Photos' ),
	'not_found'          => __( 'No photos found' ),
	'not_found_in_trash' => __( 'No photos found in the Trash' ), 
	'parent_item_colon'  => '',
	'menu_name'          => 'Photos'
	);
	$args = array(
		'labels'        => $labels,
		'description'   => '',
		'public'        => true,
		'menu_position' => 5,
		'supports'      => array( 'title','thumbnail','editor'),
		'has_archive'   => false,
		'query_var' => true,
		'taxonomies' => array('photos_category'),
	);

	register_post_type( 'Photos',$args );	
	add_action('init', 'add_category_offers');
	function add_category_offers() {
		$labels = array(
			'name'              => _x( 'Photos Categories', 'taxonomy general name' ),
			'singular_name'     => _x( 'Category', 'taxonomy singular name' ),
			'search_items'      => __( 'Search Categories' ),
			'all_items'         => __( 'All Categories' ),
			'parent_item'       => __( 'Parent Category' ),
			'parent_item_colon' => __( 'Parent Category:' ),
			'edit_item'         => __( 'Edit Category' ),
			'update_item'       => __( 'Update Category' ),
			'add_new_item'      => __( 'Add New Category' ),
			'new_item_name'     => __( 'New Category Name' ),
			'menu_name'         => __( 'Categories' ),
		);

		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'photos_category' ),
		);

	    register_taxonomy('photos_category', 'photos',$args);
	    //register_taxonomy_for_object_type('post_tag', 'portfolio');
	  
 	}*/
/**
 * Custom template tags for Twenty Fourteen
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

if ( ! function_exists( 'twentyfourteen_paging_nav' ) ) :
/**
 * Display navigation to next/previous set of posts when applicable.
 *
 * @since Twenty Fourteen 1.0
 *
 * @global WP_Query   $wp_query   WordPress Query object.
 * @global WP_Rewrite $wp_rewrite WordPress Rewrite object.
 */
function twentyfourteen_paging_nav() {
	global $wp_query, $wp_rewrite;

	// Don't print empty markup if there's only one page.
	if ( $wp_query->max_num_pages < 2 ) {
		return;
	}

	$paged        = get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1;
	$pagenum_link = html_entity_decode( get_pagenum_link() );
	$query_args   = array();
	$url_parts    = explode( '?', $pagenum_link );

	if ( isset( $url_parts[1] ) ) {
		wp_parse_str( $url_parts[1], $query_args );
	}

	$pagenum_link = remove_query_arg( array_keys( $query_args ), $pagenum_link );
	$pagenum_link = trailingslashit( $pagenum_link ) . '%_%';

	$format  = $wp_rewrite->using_index_permalinks() && ! strpos( $pagenum_link, 'index.php' ) ? 'index.php/' : '';
	$format .= $wp_rewrite->using_permalinks() ? user_trailingslashit( $wp_rewrite->pagination_base . '/%#%', 'paged' ) : '?paged=%#%';

	// Set up paginated links.
	$links = paginate_links( array(
		'base'     => $pagenum_link,
		'format'   => $format,
		'total'    => $wp_query->max_num_pages,
		'current'  => $paged,
		'mid_size' => 1,
		'add_args' => array_map( 'urlencode', $query_args ),
		'prev_text' => __( '&larr; ', 'twentyfourteen' ),
		'next_text' => __( ' &rarr;', 'twentyfourteen' ),
	) );

	if ( $links ) :

	?>
	<nav class="navigation paging-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php _e( 'Posts navigation', 'twentyfourteen' ); ?></h1>
		<div class="pagination loop-pagination">
			<?php echo $links; ?>
		</div><!-- .pagination -->
	</nav><!-- .navigation -->
	<?php
	endif;
}
endif;


 	add_action('wp_enqueue_scripts', 'interval_load_css'); 
	if( !function_exists('interval_load_css') ) {
		function interval_load_css(){
			wp_enqueue_style( 'Roboto','//fonts.googleapis.com/css?family=Roboto:300,400,700', array(), '1.1');	 	
			wp_enqueue_style( 'roboto-condensed','//fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700', array(), '3.2.1');	 	
			wp_enqueue_style( 'reset',get_template_directory_uri().'/style/reset.css', array(), '1.2');	 	
			wp_enqueue_style( 'superfish',get_template_directory_uri().'/style/superfish.css', array(), '1.3');	 	
			wp_enqueue_style( 'prettyPhoto',get_template_directory_uri().'/style/prettyPhoto.css', array(), '1.4');	 	
				 	
			wp_enqueue_style( 'style',get_template_directory_uri().'/style/style.css', array(), '1.7');	 	
			wp_enqueue_style( 'menu_styles',get_template_directory_uri().'/style/menu_styles.css', array(), '1.6');	 	
				
			wp_enqueue_style( 'responsive',get_template_directory_uri().'/style/responsive.css', array(), '2.0');	 	
			wp_enqueue_style( 'odometer',get_template_directory_uri().'/style/odometer-theme-default.css', array(), '2.0');	 	
			wp_enqueue_style( 'video-js','http://vjs.zencdn.net/5.10.7/video-js.css', array(), '2.0');	 	
			
		}
	}


	add_action('wp_enqueue_scripts', 'interval_load_scripts');
	if( !function_exists('interval_load_scripts') ) {
	  function interval_load_scripts(){
	     wp_deregister_script('jquery');
	    wp_enqueue_script('jquery');
		 wp_enqueue_script( 'jquery', get_template_directory_uri().'/js/jquery-1.11.1.min.js',array(),'1.3.2' ,true); 
		 wp_enqueue_script( 'modernizr', get_template_directory_uri().'/js/jquery-migrate-1.2.1.min.js',array(),'1.3.2' ,true); 
		 wp_enqueue_script( 'ba-bbq', get_template_directory_uri().'/js/jquery.ba-bbq.min.js',array(),'1.3.2' ,true); 
		 wp_enqueue_script( 'custom', get_template_directory_uri().'/js/jquery-ui-1.11.1.custom.min.js',array(),'1.3.2' ,true); 
		 wp_enqueue_script( 'easing', get_template_directory_uri().'/js/jquery.easing.1.3.js',array(),'1.3.2' ,true); 
		 wp_enqueue_script( 'carouFredSel-6', get_template_directory_uri().'/js/jquery.carouFredSel-6.2.1-packed.js',array(),'1.3.2' ,true); 
		 wp_enqueue_script( 'touchSwipe', get_template_directory_uri().'/js/jquery.touchSwipe.min.js',array(),'1.3.2' ,true); 
		 wp_enqueue_script( 'transit', get_template_directory_uri().'/js/jquery.transit.min.js',array(),'1.3.2' ,true); 
		 wp_enqueue_script( 'sliderControl', get_template_directory_uri().'/js/jquery.sliderControl.js',array(),'1.3.2' ,true); 
		 wp_enqueue_script( 'timeago', get_template_directory_uri().'/js/jquery.timeago.js',array(),'1.3.2' ,true); 
		 wp_enqueue_script( 'hint', get_template_directory_uri().'/js/jquery.hint.js',array(),'1.3.2' ,true); 
		 wp_enqueue_script( 'prettyPhoto', get_template_directory_uri().'/js/jquery.prettyPhoto.js',array(),'1.3.2' ,true); 
		 wp_enqueue_script( 'qtip', get_template_directory_uri().'/js/jquery.qtip.min.js',array(),'1.3.2' ,true); 
		 wp_enqueue_script( 'blockUI', get_template_directory_uri().'/js/jquery.blockUI.js',array(),'1.3.2' ,true); 
		 wp_enqueue_script( 'google map', '//maps.google.com/maps/api/js?sensor=false',array(),'1.3.2' ,true); 
		 wp_enqueue_script( 'main', get_template_directory_uri().'/js/main.js',array(),'1.3.2' ,true); 
		 wp_enqueue_script( 'odometer', get_template_directory_uri().'/js/odometer.min.js',array(),'1.3.2' ,true); 
		 wp_enqueue_script( 'vieo-js', 'http://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js',array(),'1.3.2' ,true); 
	  }
	}

class wpb_widget extends WP_Widget {
	function __construct() {
		parent::__construct( 'wpb_widget',__('Recent Posts With thum', 'wpb_widget_domain'),array( 'description' => __( 'Get all recent post', 'wpb_widget_domain' ), ));
	}
	public function widget( $args, $instance ) {

		$title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : __( 'Recent Posts' );

		$r = new WP_Query( apply_filters( 'widget_posts_args', array(
			'posts_per_page'      => '4',
			'no_found_rows'       => true,
			'post_status'         => 'publish',
			'ignore_sticky_posts' => true
		) ) ); 
		echo $args['before_widget']; ?>
		<?php if ( $title ) {
			echo "<h4 class='box_header'>".$title." <a class='more homepagemore page_margin_top' href=".home_url()."/category/trailers/>MORE</a></h4>"; } echo "<ul class='blog small clearfix'>"; while ( $r->have_posts() ) : $r->the_post(); ?><li class="post"><a href="<?php echo get_permalink(); ?>" title="<?php echo get_the_title(); ?>"><span class="icon small video"></span><?php the_post_thumbnail(array( 100, 100) ); ?></a><div class="post_content"><h5><a href="<?php echo get_permalink(); ?>" title="<?php echo get_the_title(); ?>"><?php echo get_the_title(); ?></a></h5><ul class="post_details simple"><li class="category"><?php $posttags = get_the_tags();?><?php if ($posttags) { $tagcount=1; foreach($posttags as $tag) { if($tagcount==1){ ?> <a href="<?php echo get_tag_link($tag->term_id); ?>" title='<?php echo get_the_title(); ?>'><?php echo $tag->name; ?></a><?php } $tagcount++; } } ?> </li></ul></div></li><?php endwhile; echo '</ul>';
		}

	public function form( $instance ) {
		$title     = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';
	?>
	<p><label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" /></p>
	<?php
	}

	public function update( $new_instance, $old_instance ) {
		
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		return $instance;
	}

} 

function wpb_load_widget() {
    register_widget( 'wpb_widget' );
}

add_action( 'widgets_init', 'wpb_load_widget' );

class wp_videosongs extends WP_Widget {
	function __construct() {
		parent::__construct( 'wp_videosongs',__('Video Songs', 'wpb_widget_domain'),array( 'description' => __( 'Get all Video songs', 'wpb_widget_domain' ), ));
		
	}
	public function widget( $args, $instance ) {
		$title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : __( 'Recent Posts' );
		$cat_id = ( ! empty( $instance['cat_id'] ) ) ? $instance['cat_id'] : __( '1' );
		$number = ( ! empty( $instance['number'] ) ) ? $instance['number'] : __( '5' );
		$cat_name = ( ! empty( $instance['cat_name'] ) ) ? $instance['cat_name'] : __( 'trailers' );
		$r = new WP_Query( apply_filters( 'widget_posts_args', array(
			'posts_per_page'      => $number,
			'no_found_rows'       => true,
			'post_status'         => 'publish',
			'cat'         => $cat_id,
			'ignore_sticky_posts' => true
		) ) );
		echo $args['before_widget']; ?>
		<?php if ( $title ) { echo "<h4 class='box_header page_margin_top_section'>".$title." <a class='more homepagemore page_margin_top' href=".home_url().'/category/'.$cat_name.">MORE </a></h4>"; } echo "<ul class='blog small clearfix'>"; while ( $r->have_posts() ) : $r->the_post(); ?><li class="post"><a href="<?php echo get_permalink(); ?>" title="<?php echo get_the_title(); ?>"><span class="icon small video"></span><?php the_post_thumbnail(array( 100, 100) ); ?></a><div class="post_content"><h5><a href="<?php echo get_permalink(); ?>" title="<?php echo get_the_title(); ?>"><?php echo get_the_title(); ?></a></h5><ul class="post_details simple"><li class="category"><?php $posttags = get_the_tags();?><?php if ($posttags) { $tagcount2=1; foreach($posttags as $tag) { if($tagcount2==1){ ?><a href="<?php echo get_tag_link($tag->term_id); ?>" title='<?php echo get_the_title(); ?>'><?php echo $tag->name; ?></a><?php }$tagcount2++; } } ?></li></ul></div></li><?php endwhile;  echo '</ul>'; }

	public function form( $instance ) {
		$title     = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';
		$cat_id     = isset( $instance['cat_id'] ) ? esc_attr( $instance['cat_id'] ) : '';
		$number     = isset( $instance['number'] ) ? esc_attr( $instance['number'] ) : '';
		$cat_name     = isset( $instance['cat_name'] ) ? esc_attr( $instance['cat_name'] ) : '';
	?>
	<p><label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" /></p>
	<p>
	<label for="<?php echo $this->get_field_id( 'cat_id' ); ?>"><?php _e( 'Category:' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'cat_id' ); ?>" name="<?php echo $this->get_field_name( 'cat_id' ); ?>" type="text" value="<?php echo $cat_id; ?>" /></p>
		<p>
	<label for="<?php echo $this->get_field_id( 'number' ); ?>"><?php _e( 'Number of Posts:' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'number' ); ?>" name="<?php echo $this->get_field_name( 'number' ); ?>" type="text" value="<?php echo $number; ?>" /></p>
		<label for="<?php echo $this->get_field_id( 'cat_name' ); ?>"><?php _e( 'Category Name:' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'cat_name' ); ?>" name="<?php echo $this->get_field_name( 'cat_name' ); ?>" type="text" value="<?php echo $cat_name; ?>" /></p>

	<?php
	}

	
	public function update( $new_instance, $old_instance ) {
		
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['cat_id'] = strip_tags($new_instance['cat_id']);
		$instance['number'] = strip_tags($new_instance['number']);
		$instance['cat_name'] = strip_tags($new_instance['cat_name']);
		return $instance;
	}

} 

function wpb_videosong_widget() {
    register_widget( 'wp_videosongs' );
}

add_action( 'widgets_init', 'wpb_videosong_widget' );
setcookie(TEST_COOKIE, 'WP Cookie check', 0, COOKIEPATH, COOKIE_DOMAIN);
if ( SITECOOKIEPATH != COOKIEPATH ) setcookie(TEST_COOKIE, 'WP Cookie check', 0, SITECOOKIEPATH, COOKIE_DOMAIN);

?>