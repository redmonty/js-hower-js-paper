<?php
/* Plugin Name: Page Animations And Transitions
Description: Page Animations And Transition is provide multiple Animation effect to your WordPress site. Show your page with stylish transition. 
Version: 1.8.9
Author: weblizar
Author URI: http://weblizar.com/plugins/
Plugin URI: http://weblizar.com/plugins/
*/

// Translate all text & labels of plugin
add_action('plugins_loaded', 'Page_anim_ReadyTranslation');

define('WL_Page_Ainm_URI', plugins_url('',__FILE__));
function Page_anim_ReadyTranslation() {
	load_plugin_textdomain('weblizar', FALSE, dirname( plugin_basename(__FILE__)).'/languages/' );	
}

function weblizar_page_anim_activate() {
	$wl_page_trans_options = array();
	$wl_page_trans_options['weblizar_page_in_trans']="none";
	$wl_page_trans_options['weblizar_page_out_trans']="none";
	$wl_page_trans_options['weblizar_page_in_durations']="1400";
	$wl_page_trans_options['weblizar_page_out_durations']="800";
	add_option('wl_page_trans_options', $wl_page_trans_options);
}
register_activation_hook( __FILE__, 'weblizar_page_anim_activate' );

// Admin dashboard Menu Pages For Page animation and transition
add_action('admin_menu','weblizar_page_anim_widget_menu');
function weblizar_page_anim_widget_menu() {
    //Main menu of Page animation and transition
    $menu = add_menu_page('Page Animation And Transition', __('Page Animations', 'weblizar'), 'administrator', 'weblizar-page-animation', '','dashicons-admin-page');
    // Page Animation settings page
    $SubMenu1 = add_submenu_page( 'weblizar-page-animation', 'Page Animation Settings', __('Page Animation Settings', 'weblizar'), 'administrator', 'weblizar-page-animation', 'display_page_anim_setting_page' );
   
	add_action('admin_print_styles-'.$menu, 'pagr_anim_admin_enqueue_script');
    add_action('admin_print_styles-'.$SubMenu1, 'pagr_anim_admin_enqueue_script');	
}

 /**
 * Weblizar Admin Menu CSS
 */
function pagr_anim_admin_enqueue_script() {	
	wp_enqueue_script('bootjs-google', 'js/bootstrap.min.js');	
	wp_enqueue_script('weblizar-tab-js-google', WL_Page_Ainm_URI .'/js/option-js.js',array('media-upload', 'jquery-ui-sortable'));
	wp_enqueue_style('weblizar-option-style-google', WL_Page_Ainm_URI .'/css/weblizar-option-style.css');
	wp_enqueue_style('op-bootstrap-google', WL_Page_Ainm_URI. '/css/bootstrap.css');
	wp_enqueue_style('weblizar-bootstrap-responsive-google', WL_Page_Ainm_URI .'/css/bootstrap-responsive.css');
	wp_enqueue_style('font-awesome-op', 'css/font-awesome.min.css');
	wp_enqueue_style('pricing-table-google', WL_Page_Ainm_URI .'/css/pricing-table.css');
}

function weblizar_page_anim_scripts() {
	wp_enqueue_script('jquery');
	wp_enqueue_style( 'weblizar-page-animation-css', WL_Page_Ainm_URI.'/css/animsition.min.css' );
	wp_enqueue_script( 'weblizar-page-animation-js', WL_Page_Ainm_URI.'/js/animsition.min.js' );
}

add_action( 'wp_enqueue_scripts', 'weblizar_page_anim_scripts' );
add_action( 'wp_enqueue_style', 'weblizar_page_anim_scripts' );

function display_page_anim_setting_page() { ?>	
	<div class="wrap" id="weblizar_wrap" >		
		<div id="content_wrap">			
			<div class="weblizar-header" >
				<h2><span><?php _e('Page Animations & Transitions','weblizar'); ?></span></h2>			
				<div class="weblizar-submenu-links" id="weblizar-submenu-links">
					<ul>
						<li class=""><img src="<?php echo WL_Page_Ainm_URI.'/images/star_PNG1590.png';?>"/> <a href="http://wordpress.org/plugins/page-animations-and-transitions/" target="_blank" title="Support Forum"><?php _e('Rate Us On WordPress','weblizar'); ?></a></li>
					</ul>
				</div>			
			</div>		
			<div id="content">
				<div id="options_tabs" class="ui-tabs ">
					<ul class="options_tabs ui-tabs-nav" role="tablist" id="nav">					
						<li class="active"><a href="#" id="general"><div class="dashicons dashicons-admin-home"></div><?php _e('Page Animations','weblizar');?></a></li>					
						<li ><a href="#" id="ourproduct" style="background-color: #F8504B;color: #F8F3F3;" ><div class="dashicons dashicons-plus"></div><?php _e('More Products','weblizar');?></a></li>
					</ul>					
					<?php require_once('option-settings.php'); ?>	
				</div>		
			</div>
			<div class="weblizar-header" style="margin-top:0px; border-radius: 0px 0px 6px 6px;">			
				<div class="weblizar-submenu-links"  style="margin-top:15px;">				
				<ul>
					<li style="color:#fff">  <a href="http://weblizar.com" style="color:#fff;text-decoration: underline;" target="_blank" title="Support Forum"><?php _e('Developed By Weblizar','weblizar'); ?></a></li>
				</ul>
				<div><!-- weblizar-submenu-links -->
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<?php
}

// Add specific CSS class by filter
add_filter('body_class','weblizar_page_anim_class_names');
function weblizar_page_anim_class_names($classes) {
	// add 'class-name' to the $classes array
	$wl_page_trans_options = get_option('wl_page_trans_options'); 
	$weblizar_page_in_trans= $wl_page_trans_options['weblizar_page_in_trans'];
	$weblizar_page_out_trans= $wl_page_trans_options['weblizar_page_out_trans'];
	if( $weblizar_page_in_trans=="none" and $weblizar_page_out_trans=="none"){
		$classes[] = '';
	} else {
		$classes[] = 'animsition';
	}
	// return the $classes array
	return $classes;
}

function weblizar_page_anim_footer() {
   $wl_page_trans_options = get_option('wl_page_trans_options'); 
   $weblizar_page_in_trans= $wl_page_trans_options['weblizar_page_in_trans'];
   $weblizar_page_out_trans= $wl_page_trans_options['weblizar_page_out_trans'];
	$weblizar_page_in_durations = $wl_page_trans_options['weblizar_page_in_durations'];
   $weblizar_page_out_durations =  $wl_page_trans_options['weblizar_page_out_durations']
   ?>
   <script>
	jQuery(document).ready(function() {
		jQuery(".animsition").animsition({
			inClass               :   '<?php echo esc_js($weblizar_page_in_trans) ?>',
			outClass              :   '<?php echo esc_js($weblizar_page_out_trans) ?>',
			inDuration            :    <?php echo esc_js($weblizar_page_in_durations) ?>,
			outDuration           :    <?php echo esc_js($weblizar_page_out_durations) ?>,
			linkElement			:   'a:not([target="_blank"]):not([href^="#"]):not([href*=".gif"]):not([href*=".mov"]):not([href*=".swf"]):not([href*=".jpg"]):not([href*=".jpeg"]):not([href*=".png"])',
			touchSupport          :    true, 
			loading               :    true,
			loadingParentElement  :   'body', //animation wrapper element
			loadingClass          :   'animsition-loading',
			unSupportCss          : [
										'animation-duration',
										'-webkit-animation-duration',
										'-o-animation-duration'
									]
		});
	}); 
	</script>
   <?php
}
add_action('wp_footer', 'weblizar_page_anim_footer');
?>