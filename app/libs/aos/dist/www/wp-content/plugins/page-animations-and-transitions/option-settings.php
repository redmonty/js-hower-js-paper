<?php 
if(isset($_POST['weblizar_page_anim_submit'])) {
	$weblizar_page_in_trans		=	sanitize_option('weblizar_page_in_trans', $_POST['weblizar_page_in_trans']);
	$weblizar_page_out_trans	=	sanitize_option('weblizar_page_out_trans',$_POST['weblizar_page_out_trans']);
	$weblizar_page_in_durations	=	sanitize_text_field( $_POST['weblizar_page_in_durations']);
	$weblizar_page_out_durations	=	sanitize_text_field( $_POST['weblizar_page_out_durations']);

	$wl_page_trans_options['weblizar_page_in_trans']= $weblizar_page_in_trans;
	$wl_page_trans_options['weblizar_page_out_trans']= $weblizar_page_out_trans;
	$wl_page_trans_options['weblizar_page_in_durations']= intval($weblizar_page_in_durations);
	$wl_page_trans_options['weblizar_page_out_durations']= intval($weblizar_page_out_durations);
	update_option('wl_page_trans_options', $wl_page_trans_options );
}
$wl_page_trans_options = get_option('wl_page_trans_options'); 
?>
<style>
.form-horizontal{
	float:left;
	width:100%;
}
.form-horizontal .form-group {
	margin-right: -15px;
	margin-left: -15px;
	float: left;
	width:100%;
}
</style>
<div class="block ui-tabs-panel active" id="option-general">		
	<div class="col-md-12">
			<div id="heading">
				<table><tr><td cols=2 ><h2><?php _e('Page Animations Settings','weblizar');?></h2></td></tr></table>
			</div>	
			<form class="form-horizontal" role="form" action="#" method="POST" name="google_plus_form" >
				<div class="form-group">
					<label  class="col-sm-4"><?php _e('Page In Animations','weblizar'); ?></label>
					<div class="col-sm-8">
						<?php  $weblizar_page_in_trans= $wl_page_trans_options['weblizar_page_in_trans']; ?>
						<select id="weblizar_page_in_trans" name="weblizar_page_in_trans" style="width:70%;" >
							<option value="none" <?php if ('none' == $weblizar_page_in_trans) echo 'selected="selected"'; ?>>None</option>
							<option value="fade-in" <?php if ('fade-in' == $weblizar_page_in_trans) echo 'selected="selected"'; ?>>Fade In</option>
							<option value="fade-in-up" <?php if ('fade-in-up' == $weblizar_page_in_trans) echo 'selected="selected"'; ?>>Fade In Up</option>
							<option value="fade-in-down" <?php if ('fade-in-down' == $weblizar_page_in_trans) echo 'selected="selected"'; ?>>Fade In Down</option>
							<option value="fade-in-left" <?php if ('fade-in-left' == $weblizar_page_in_trans) echo 'selected="selected"'; ?>>Fade In Left</option>
							<option value="fade-in-right" <?php if ('fade-in-right' == $weblizar_page_in_trans) echo 'selected="selected"'; ?>>Fade In Right</option>
							<option value="rotate-in" <?php if ('rotate-in' == $weblizar_page_in_trans) echo 'selected="selected"'; ?>>Rotate In</option>
							<option value="flip-in-x" <?php if ('flip-in-x' == $weblizar_page_in_trans) echo 'selected="selected"'; ?>>Flip In X</option>
							<option value="flip-in-y" <?php if ('flip-in-y' == $weblizar_page_in_trans) echo 'selected="selected"'; ?>>Flip In Y</option>
							<option value="zoom-in" <?php if ('zoom-in' == $weblizar_page_in_trans) echo 'selected="selected"'; ?>>Zoom In</option>
						</select>
						<p class="help-block"><?php _e('Select Your Website Page In Animation','weblizar'); ?></p>
					</div>
				</div>
				
				<div class="form-group">
					<label  class="col-sm-4"><?php _e('Page Out Animations','weblizar'); ?></label>
					<div class="col-sm-8">
						<?php $weblizar_page_out_trans= $wl_page_trans_options['weblizar_page_out_trans']; ?>
						<select name="weblizar_page_out_trans" id="weblizar_page_out_trans" style="width:70%;">
							<option value="none" <?php if ('none' == $weblizar_page_out_trans) echo 'selected="selected"'; ?>>None</option>
							<option value="fade-out" <?php if ('fade-out' == $weblizar_page_out_trans) echo 'selected="selected"'; ?>>Fade Out</option>
							<option value="fade-out-up" <?php if ('fade-out-up' == $weblizar_page_out_trans) echo 'selected="selected"'; ?>>Fade Out Up</option>
							<option value="fade-out-down" <?php if ('fade-out-down' == $weblizar_page_out_trans) echo 'selected="selected"'; ?>>Fade Out Down</option>
							<option value="fade-out-left"  <?php if ('fade-out-left' == $weblizar_page_out_trans) echo 'selected="selected"'; ?>>Fade Out Left</option>
							<option value="fade-out-right" <?php if ('fade-out-right' == $weblizar_page_out_trans) echo 'selected="selected"'; ?>>Fade Out Right</option>
							<option value="rotate-out" <?php if ('rotate-out' == $weblizar_page_out_trans) echo 'selected="selected"'; ?>>Rotate Out</option>
							<option value="flip-out-x" <?php if ('flip-out-x' == $weblizar_page_out_trans) echo 'selected="selected"'; ?>>Flip Out X</option>
							<option value="flip-out-y" <?php if ('flip-out-y' == $weblizar_page_out_trans) echo 'selected="selected"'; ?>>Flip Out Y</option>
							<option value="zoom-out" <?php if ('zoom-out' == $weblizar_page_out_trans) echo 'selected="selected"'; ?>>Zoom Out</option>
						</select>
						<p class="help-block"><?php _e('Select Your Website Page Out Animation','weblizar'); ?></p>
					</div>
				</div>
				
				<div class="form-group">
					<label  class="col-sm-4"><?php _e('Page In Durations','weblizar'); ?></label>
					<div class="col-sm-8">
						<?php  $weblizar_page_in_durations= $wl_page_trans_options['weblizar_page_in_durations']; ?>
						<select name="weblizar_page_in_durations" id="weblizar_page_in_durations" style="width:70%;">
							<option value="200" <?php if ('200' == $weblizar_page_in_durations) echo 'selected="selected"'; ?>>200</option>
							<option value="400" <?php if ('400' == $weblizar_page_in_durations) echo 'selected="selected"'; ?>>400</option>
							<option value="600" <?php if ('600' == $weblizar_page_in_durations) echo 'selected="selected"'; ?>>600</option>
							<option value="800" <?php if ('800' == $weblizar_page_in_durations) echo 'selected="selected"'; ?>>800</option>
							<option value="1000" <?php if ('1000' == $weblizar_page_in_durations) echo 'selected="selected"'; ?>>1000</option>
							<option value="1200" <?php if ('1200' == $weblizar_page_in_durations) echo 'selected="selected"'; ?>>1200</option>
							<option value="1400" <?php if ('1400' == $weblizar_page_in_durations) echo 'selected="selected"'; ?>>1400</option>
							<option value="1600" <?php if ('1600' == $weblizar_page_in_durations) echo 'selected="selected"'; ?>>1600</option>
							<option value="1800" <?php if ('1800' == $weblizar_page_in_durations) echo 'selected="selected"'; ?>>1800</option>
							<option value="2000" <?php if ('2000' == $weblizar_page_in_durations) echo 'selected="selected"'; ?>>2000</option>
						</select>
						<p class="help-block"><?php _e('Select Your Website Page In Animation Durations(Speed)','weblizar'); ?></p>
					</div>
				</div>
				
				<div class="form-group">
					<label  class="col-sm-4"><?php _e('Page Out Durations','weblizar'); ?></label>
					<div class="col-sm-8">
						<?php $weblizar_page_out_durations= $wl_page_trans_options['weblizar_page_out_durations']; ?>
						<select name="weblizar_page_out_durations" id="weblizar_page_out_durations" style="width:70%;">
							<option value="100" <?php if ('100' == $weblizar_page_out_durations) echo 'selected="selected"'; ?>>100</option>
							<option value="200" <?php if ('200' == $weblizar_page_out_durations) echo 'selected="selected"'; ?>>200</option>
							<option value="300" <?php if ('300' == $weblizar_page_out_durations) echo 'selected="selected"'; ?>>300</option>
							<option value="400" <?php if ('400' == $weblizar_page_out_durations) echo 'selected="selected"'; ?>>400</option>
							<option value="500" <?php if ('500' == $weblizar_page_out_durations) echo 'selected="selected"'; ?>>500</option>
							<option value="600" <?php if ('600' == $weblizar_page_out_durations) echo 'selected="selected"'; ?>>600</option>
							<option value="700" <?php if ('700' == $weblizar_page_out_durations) echo 'selected="selected"'; ?>>700</option>
							<option value="800" <?php if ('800' == $weblizar_page_out_durations) echo 'selected="selected"'; ?>>800</option>
							<option value="900" <?php if ('900' == $weblizar_page_out_durations) echo 'selected="selected"'; ?>>900</option>
							<option value="1000" <?php if ('1000' == $weblizar_page_out_durations) echo 'selected="selected"'; ?>>1000</option>
						</select>
						<p class="help-block"><?php _e('Select Your Website Page Out Animation Durations(Speed)','weblizar'); ?></p>
					</div>
				</div>
				<div class="form-group">
					<div class="">
					  <button type="submit" class="btn btn-primary" name="weblizar_page_anim_submit" id="weblizar_page_anim_submit" value="submit">Save Changes</button>
					</div>
				</div>
			</form>
	</div>
	
</div>
<!---------------- footer customization Settings form ------------------------>
<link rel='stylesheet'   href='http://demo.weblizar.com/green-lantern-premium/wp-content/themes/green-lantern-premium/css/font-awesome-ie7.css?ver=3.9.2' type='text/css' media='all' />
<div class="block ui-tabs-panel deactive" id="option-ourproduct" >
	<div class="row-fluid pricing-table pricing-three-column">
	<div class="plan-name centre"> 
	<a style="margin-bottom:10px;textt-align:center" target="_new" href="http://weblizar.com"><img  src="<?php echo WL_Page_Ainm_URI."/images/weblizar-logo.png";?>" /></a>
	<div class="purchase_btn_div">
	</div>
	</div>	
	<div class="plan-name">
        <h2>Weblizar's Responsive Wordpress Theme</h2>
		<h6>Get The Premium, And Create your website Beautifully.  </h6>
    </div>	
	
	<div class="col-md-4  demoftr "> 
		<h2>Enigma Premium</h2>
		<div class="img-wrapper">
			<div class="enigma_home_portfolio_showcase">
				<img class="enigma_img_responsive ftr_img"  src="<?php echo WL_Page_Ainm_URI.'/images/enigma.jpg' ;?>">
				<div class="enigma_home_portfolio_showcase_overlay">
					<div class="enigma_home_portfolio_showcase_overlay_inner ">
						<div class="enigma_home_portfolio_showcase_icons">
							<a title="Link" data-toggle="modal" data-target="#myModal" href="https://weblizar.com/themes/enigma-premium/" target="_new">View Detail</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Modal  -->
	<div class="modal " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content ">
		  <div class="modal-header ">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			<h4 class="modal-title" id="myModalLabel"> <a class="pro-dir-button" data-toggle="modal" data-target="#myModalGreen"  data-dismiss="modal" href="View Detail#" class="pro-dir-button"><i style="color:#000;line-height:1.5" class="fa fa-angle-right fa-2x"></i></a>
			</h4>
		  </div>
		  <div class="modal-body">
			<div class="col-md-6">
				<img class="enigma_img_responsive ftr_img"  src="<?php echo WL_Page_Ainm_URI.'/images/enigma.png' ;?>">
			</div>
			<div class="col-md-6">
				<div class="theme-info">
					<h3 class="theme-name">Enigma  Premium Theme</h3>
					<h4 class="theme-author">By <a href="http://weblizar.com/" title="Visit author homepage">weblizar</a></h4>
					<p class="theme-description">Enigma is HTML5 & CSS3 Responsive WordPress Business theme with business style , 7 blog templates , 6 portfolio templates and many more</p>
					<h4  style="margin-top:20px;">Features</h4>
					<div class="col-md-6">
						<div class="enigma_sidebar_link">
							<p>
								<i class="fa fa-angle-right"></i>Responsive Design
							</p>
							<p>
								<i class="fa fa-angle-right"></i>Retina Ready 
							</p>
							<p>
								<i class="fa fa-angle-right"></i>Html5 & Css3 
							</p>
							<p>
								<i class="fa fa-angle-right"></i>Multi-purpose Theme
							</p>
							<p>
								<i class="fa fa-angle-right"></i>Unlimited Color Schemes
							</p>
							<p>
								<i class="fa fa-angle-right"></i>Multiple Templates 
							</p>
						
						</div>
					</div>
					<div class="col-md-6">
						<div class="enigma_sidebar_link">
							<p>
								<i class="fa fa-angle-right"></i>All Browser Support
							</p>
							<p>
								<i class="fa fa-angle-right"></i>Powerful Option Panel
							</p>
							<p>
								<i class="fa fa-angle-right"></i>Coming Soon Mode
							</p>
							<p>
								<i class="fa fa-angle-right"></i>Custom Shortcode
							</p>
							<p>
								<i class="fa fa-angle-right"></i>Isotope Effects and lightbox
							</p>
							<p>
								<i class="fa fa-angle-right"></i>Fast & Friendly Support 
							</p>
						</div>
					</div>
					<div class="col-md-12" style="margin-top:20px;">
						<a class="btn btn-success btn-lg" target="_new" href="#">View Demo</a>&nbsp;&nbsp;
						<a  class="btn btn-danger btn-lg" target="_new" href="#">Purchase Now</a>
					</div>
				</div>
			</div>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			
		  </div>
		</div>
	  </div>
	</div>
	
	
	<div class="col-md-4  demoftr "> 
		<h2>Green Lantern  Premium</h2>
		<div class="img-wrapper">
			<div class="enigma_home_portfolio_showcase">
				<img class="enigma_img_responsive ftr_img"  src="<?php echo WL_Page_Ainm_URI.'/images/weblizar-theme.jpg'; ?>">
				<div class="enigma_home_portfolio_showcase_overlay">
					<div class="enigma_home_portfolio_showcase_overlay_inner ">
						<div class="enigma_home_portfolio_showcase_icons">
							<a title="Link" data-toggle="modal" data-target="#myModalGreen" href="https://weblizar.com/themes/weblizar-premium-theme/" target="_new">View Detail</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Modal  -->
	<div class="modal" id="myModalGreen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content ">
		  <div class="modal-header ">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			<h4 class="modal-title" id="myModalLabel"><a data-toggle="modal" data-target="#myModal"  data-dismiss="modal" href="View Detail#" class="pro-dir-button"><i style="color:#000;line-height:1.5" class="fa fa-angle-left fa-2x"></i></a> <a data-toggle="modal" data-target="#myModalweblizar"  data-dismiss="modal" href="View Detail#"  class="pro-dir-button"><i style="color:#000;line-height:1.5" class="fa fa-angle-right fa-2x"></i></a>
			</h4>
		  </div>
		  <div class="modal-body">
			<div class="col-md-6">
				<img class="enigma_img_responsive ftr_img"  src="<?php echo WL_Page_Ainm_URI.'/images/green-lantern-theme.jpg'; ?>">
			</div>
			<div class="col-md-6">
				<div class="theme-info">
					<h3 class="theme-name">Green Lantern  Premium Theme</h3>
					<h4 class="theme-author">By <a href="http://weblizar.com/" title="Visit author homepage">weblizar</a></h4>
					<p class="theme-description">Green Lantern is a Full Responsive Multi-Purpose Theme suitable for Business , corporate office amd others .Cool Blog Layout and full width page also present</p>
					<h4  style="margin-top:20px;">Features</h4>
					<div class="col-md-6">
						<div class="enigma_sidebar_link">
							<p>
								<i class="fa fa-angle-right"></i>Responsive Design
							</p>
							<p>
								<i class="fa fa-angle-right"></i>Retina Ready 
							</p>
							<p>
								<i class="fa fa-angle-right"></i>Html5 & Css3 
							</p>
							<p>
								<i class="fa fa-angle-right"></i>Multi-purpose Theme
							</p>
							<p>
								<i class="fa fa-angle-right"></i>Unlimited Color Schemes
							</p>
							<p>
								<i class="fa fa-angle-right"></i>Multiple Templates 
							</p>
						
						</div>
					</div>
					<div class="col-md-6">
						<div class="enigma_sidebar_link">
							<p>
								<i class="fa fa-angle-right"></i>All Browser Support
							</p>
							<p>
								<i class="fa fa-angle-right"></i>Powerful Option Panel
							</p>
							<p>
								<i class="fa fa-angle-right"></i>Coming Soon Mode
							</p>
							<p>
								<i class="fa fa-angle-right"></i>Custom Shortcode
							</p>
							<p>
								<i class="fa fa-angle-right"></i>Isotope Effects and lightbox
							</p>
							<p>
								<i class="fa fa-angle-right"></i>Fast & Friendly Support 
							</p>
						</div>
					</div>
					<p></p>
					<div class="col-md-12" style="margin-top:20px;">
						<a class="btn btn-success btn-lg" target="_new" href="http://weblizar.com/preview/#green_lantern">View Demo</a>&nbsp;&nbsp;
						<a  class="btn btn-danger btn-lg" target="_new" href="http://weblizar.com/themes/green-lantern-premium-theme/">Purchase Now</a>
					</div>
					
				</div>
			</div>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			
		  </div>
		</div>
	  </div>
	</div>
	
	
	<div class="col-md-4 demoftr "> 
		<h2>Weblizar  Premium</h2>
		<div class="img-wrapper">
			<div class="enigma_home_portfolio_showcase">
				<img class="enigma_img_responsive ftr_img" src="<?php echo WL_Page_Ainm_URI.'/images/weblizar-theme.jpg'; ?>">
				<div class="enigma_home_portfolio_showcase_overlay">
					<div class="enigma_home_portfolio_showcase_overlay_inner ">
						<div class="enigma_home_portfolio_showcase_icons">
							<a title="Link" data-toggle="modal" data-target="#myModalweblizar" href="View Detail#">View Detail</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Modal  -->
	<div class="modal" id="myModalweblizar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content ">
		  <div class="modal-header ">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			<h4 class="modal-title" id="myModalLabel"><a data-toggle="modal" data-target="#myModalGreen"  data-dismiss="modal" href="View Detail#" class="pro-dir-button"><i style="color:#000;line-height:1.5" class="fa fa-angle-left fa-2x"></i></a> <a data-toggle="modal" data-target="#myModallightbox"  data-dismiss="modal" href="View Detail#"   class="pro-dir-button"><i style="color:#000;line-height:1.5" class="fa fa-angle-right fa-2x"></i></a>
			</h4>
		  </div>
		  <div class="modal-body">
			<div class="col-md-6">
				<img class="enigma_img_responsive ftr_img"  src="<?php echo WL_Page_Ainm_URI."/images/weblizar-theme.jpg"; ?>">
			</div>
			<div class="col-md-6">
				<div class="theme-info">
					<h3 class="theme-name">Weblizar  Premium Theme</h3>
					<h4 class="theme-author">By <a href="http://weblizar.com/" title="Visit author homepage">weblizar</a></h4>
					<p class="theme-description">Responsive Multi-Purpose Theme suitable for Business , corporate office and others .Cool Blog Layout and full width page.You can also use it for  portfolio, blogging or any type of site. Built with Twitter bootstrap</p>
					<h4  style="margin-top:20px;">Features</h4>
					<div class="col-md-6">
						<div class="enigma_sidebar_link">
							<p>
								<i class="fa fa-angle-right"></i>Responsive Design
							</p>
							<p>
								<i class="fa fa-angle-right"></i>Retina Ready 
							</p>
							<p>
								<i class="fa fa-angle-right"></i>Html5 & Css3 
							</p>
							<p>
								<i class="fa fa-angle-right"></i>Multi-purpose Theme
							</p>
							<p>
								<i class="fa fa-angle-right"></i>Unlimited Color Schemes
							</p>
							<p>
								<i class="fa fa-angle-right"></i>Multiple Templates 
							</p>
						
						</div>
					</div>
					<div class="col-md-6">
						<div class="enigma_sidebar_link">
							<p>
								<i class="fa fa-angle-right"></i>All Browser Support
							</p>
							<p>
								<i class="fa fa-angle-right"></i>Powerful Option Panel
							</p>
							<p>
								<i class="fa fa-angle-right"></i>Coming Soon Mode
							</p>
							<p>
								<i class="fa fa-angle-right"></i>Custom Shortcode
							</p>
							<p>
								<i class="fa fa-angle-right"></i>Isotope Effects and lightbox
							</p>
							<p>
								<i class="fa fa-angle-right"></i>Fast & Friendly Support 
							</p>
						</div>
					</div>
					<p></p>
					<div class="col-md-12" style="margin-top:20px;">
						<a class="btn btn-success btn-lg" target="_new" href="http://weblizar.com/preview/#weblizar_pro">View Demo</a>&nbsp;&nbsp;
						<a  class="btn btn-danger btn-lg" target="_new"  href="http://weblizar.com/themes/weblizar-premium-theme/">Purchase Now</a>
					</div>
					
				</div>
			</div>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			
		  </div>
		</div>
	  </div>
	</div>
	
	
	</div>
	
	
	<div class="row-fluid pricing-table pricing-three-column">
	<div class="plan-name">
        <h2>Weblizar's Responsive Wordpress Plugins</h2>
		<h6>Get the Plugin and create beautiful Galleries and Slideshow.</h6>
    </div>
	<div class="col-md-6 demoftr">
		<h2>Lightbox Slider Pro</h2>
		<div class="img-wrapper">
			<div class="enigma_home_portfolio_showcase">
				<img class="enigma_img_responsive ftr_img"  src="<?php echo WL_Page_Ainm_URI.'/images/fancy.jpg'; ?>">
				<div class="enigma_home_portfolio_showcase_overlay">
					<div class="enigma_home_portfolio_showcase_overlay_inner ">
						<div class="enigma_home_portfolio_showcase_icons">
							<a title="Link" data-toggle="modal" data-target="#myModallightbox" href="View Detail#">View Detail</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	
	</div>
	<!-- Modal  -->
	<div class="modal " id="myModallightbox" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content ">
		  <div class="modal-header ">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			<h4 class="modal-title" id="myModalLabel"> <a class="pro-dir-button" data-toggle="modal" data-target="#myModalweblizar"  data-dismiss="modal" href="View Detail#" class="pro-dir-button"><i style="color:#000;line-height:1.5" class="fa fa-angle-left fa-2x"></i></a> <a class="pro-dir-button" data-toggle="modal" data-target="#myModalresponsive"  data-dismiss="modal" href="View Detail#" class="pro-dir-button"><i style="color:#000;line-height:1.5" class="fa fa-angle-right fa-2x"></i></a>
			</h4>
		  </div>
		  <div class="modal-body">
			<div class="col-md-6">
				<img class="enigma_img_responsive ftr_img"  src="<?php echo WL_Page_Ainm_URI.'/images/fancy.jpg'; ?>">
			</div>
			<div class="col-md-6">
				<div class="theme-info">
					<h3 class="theme-name">LightBox Slider Pro</h3>
					<h4 class="theme-author">By <a href="http://weblizar.com/" title="Visit author homepage">weblizar</a></h4>
					<p class="theme-description">Lightbox Slider is premium wordpress plugin to create gallery with lightbox slide</p>
					<h4  style="margin-top:20px;">Features</h4>
					<div class="col-md-6">
						<div class="enigma_sidebar_link">
							<p>
								<i class="fa fa-angle-right"></i>Responsive Design
							</p>
							<p>
								<i class="fa fa-angle-right"></i>Ultimate Lightbox   
							</p>
							<p>
								<i class="fa fa-angle-right"></i>5 Gallery Layout 
							</p>
							<p>
								<i class="fa fa-angle-right"></i>500+ Fonts Styles
							</p>
							<p>
								<i class="fa fa-angle-right"></i>10 Color Opacity
							</p>
							<p>
								<i class="fa fa-angle-right"></i>8 Lightbox 
							</p>
						
						</div>
					</div>
					<div class="col-md-6">
						<div class="enigma_sidebar_link">
							<p>
								<i class="fa fa-angle-right"></i>Gallery Shortcode
							</p>
							<p>
								<i class="fa fa-angle-right"></i>Unlimited Color Schemes
							</p>
							<p>
								<i class="fa fa-angle-right"></i>Retina Ready
							</p>
							<p>
								<i class="fa fa-angle-right"></i>Isotope Effects
							</p>
							<p>
								<i class="fa fa-angle-right"></i>All Browser Support
							</p>
							<p>
								<i class="fa fa-angle-right"></i>Fast & Friendly Support 
							</p>
						</div>
					</div>
					<div class="col-md-12" style="margin-top:20px;">
						<a class="btn btn-success btn-lg" target="_new" href="http://weblizar.com/lightbox-slider-pro/">View Demo</a>&nbsp;&nbsp;
						<a  class="btn btn-danger btn-lg" target="_new" href="http://weblizar.com/lightbox-slider-pro/">Purchase Now</a>
					</div>
				</div>
			</div>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			
		  </div>
		</div>
	  </div>
	</div>
	
	<div class="col-md-6 demoftr">
		<h2>Reponsive Photo Gallery</h2>
		<div class="img-wrapper">
			<div class="enigma_home_portfolio_showcase">
				<img class="enigma_img_responsive ftr_img"  src="<?php echo WL_Page_Ainm_URI.'/images/gallery-pro.jpg'; ?>">
				<div class="enigma_home_portfolio_showcase_overlay">
					<div class="enigma_home_portfolio_showcase_overlay_inner ">
						<div class="enigma_home_portfolio_showcase_icons">
							<a title="Link" data-toggle="modal" data-target="#myModalresponsive" href="View Detail#">View Detail</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	
	</div>
	<!-- Modal  -->
	<div class="modal " id="myModalresponsive" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content ">
		  <div class="modal-header ">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			<h4 class="modal-title" id="myModalLabel"> <a class="pro-dir-button" data-toggle="modal" data-target="#myModallightbox"  data-dismiss="modal" href="View Detail#" class="pro-dir-button"><i style="color:#000;line-height:1.5" class="fa fa-angle-left fa-2x"></i></a>
			</h4>
		  </div>
		  <div class="modal-body">
			<div class="col-md-6">
				<img class="enigma_img_responsive ftr_img"  src="<?php echo WL_Page_Ainm_URI.'/images/gallery-pro.jpg'; ?>">
			</div>
			<div class="col-md-6">
				<div class="theme-info">
					<h3 class="theme-name">Responsive Photo Gallery</h3>
					<h4 class="theme-author">By <a href="http://weblizar.com/" title="Visit author homepage">weblizar</a></h4>
					<p class="theme-description">A Highly Animated Image Gallery Plugin For WordPress</p>
					<h4  style="margin-top:20px;">Features</h4>
					<div class="col-md-6">
						<div class="enigma_sidebar_link">
							<p>
								<i class="fa fa-angle-right"></i>Responsive Design
							</p>
							<p>
								<i class="fa fa-angle-right"></i>8 Animation Effect  
							</p>
							<p>
								<i class="fa fa-angle-right"></i>5 Gallery Layout 
							</p>
							<p>
								<i class="fa fa-angle-right"></i>500+ Fonts Styles
							</p>
							<p>
								<i class="fa fa-angle-right"></i>10 Color Opacity
							</p>
							<p>
								<i class="fa fa-angle-right"></i>2 Lightbox 
							</p>
						
						</div>
					</div>
					<div class="col-md-6">
						<div class="enigma_sidebar_link">
							<p>
								<i class="fa fa-angle-right"></i>Gallery Shortcode
							</p>
							<p>
								<i class="fa fa-angle-right"></i>Unlimited Color Schemes
							</p>
							<p>
								<i class="fa fa-angle-right"></i>Retina Ready
							</p>
							<p>
								<i class="fa fa-angle-right"></i>Isotope Effects
							</p>
							<p>
								<i class="fa fa-angle-right"></i>All Browser Support
							</p>
							<p>
								<i class="fa fa-angle-right"></i>Fast & Friendly Support 
							</p>
						</div>
					</div>
					<div class="col-md-12" style="margin-top:20px;">
						<a class="btn btn-success btn-lg" target="_new" href="http://weblizar.com/plugins/responsive-photo-gallery-pro/">View Demo</a>&nbsp;&nbsp;
						<a  class="btn btn-danger btn-lg" target="_new" href="http://weblizar.com/plugins/responsive-photo-gallery-pro/">Purchase Now</a>
					</div>
				</div>
			</div>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			
		  </div>
		</div>
	  </div>
	</div>
	
	</div>											
	<div class="plan-name centre"> 
	<div class="purchase_btn_div">
	  <a href="http://weblizar.com/" target="_new" class="btn btn-primary btn-lg dmobtn">View Site</a>		
	</div>
	</div>
</div>