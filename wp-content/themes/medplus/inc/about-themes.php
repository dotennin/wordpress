<?php
/**
 * Eaterstop Lite About Theme
 *
 * @package Eaterstop Lite
 */

//about theme info
add_action( 'admin_menu', 'medplus_abouttheme' );
function medplus_abouttheme() {    	
	add_theme_page( __('About Theme Info', 'medplus'), __('About Theme Info', 'medplus'), 'edit_theme_options', 'medplus_guide', 'medplus_mostrar_guide');   
} 

//guidline for about theme
function medplus_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
?>

<style type="text/css">
@media screen and (min-width: 800px) {
.wrap-GT{ display:table;}
.gt-left {float:left; width: 55%; padding: 2%; margin:10px 0 0 15px; background-color:#fff;}
.heading-gt{font-size:18px; color:#0073AA; font-weight:bold; padding-bottom:10px; border-bottom:1px solid #ccc;}
.gt-right {float:right; width: 32%; padding:2%; margin:10px 0 0 15px; background-color:#fff;}
.clear{ clear:both;}
.wrap-GT ul{ margin:0; padding:0;}
.wrap-GT ul li{ list-style: disc inside none;}
.wrap-GT ul li:hover{ color:#0073AA; cursor:pointer;}
}
</style>

<div class="wrap-GT">
	<div class="gt-left">
   		   <div class="heading-gt">
			  <?php _e('About Theme Info', 'medplus'); ?>
		   </div>
          <p><?php _e('Medplus is a free medical WordPress theme. it is perfect Theme for hospital, clinic, pharmacy, dental, orthopedics, welness spa etc. also user for corporate, industrial,  and  commercial websites. it is compatible with WooCommerce, Nextgen gallery ,Contact Form 7, and many WordPress popular plugins.','medplus'); ?></p>
<div class="heading-gt"><?php _e('Theme Features', 'medplus'); ?></div>
 

<div class="col-2">
  <h4><?php _e('Theme Customizer', 'medplus'); ?></h4>
  <div class="description"><?php _e('The built-in customizer panel quickly change aspects of the design and display changes live before saving them.', 'medplus'); ?></div>
</div>

<div class="col-2">
  <h4><?php _e('Responsive Ready', 'medplus'); ?></h4>
  <div class="description"><?php _e('The themes layout will automatically adjust and fit on any screen resolution and looks great on any device. Fully optimized for iPhone and iPad.', 'medplus'); ?></div>
</div>

<div class="col-2">
<h4><?php _e('Cross Browser Compatible', 'medplus'); ?></h4>
<div class="description"><?php _e('Our themes are tested in all mordern web browsers and compatible with the latest version including Chrome,Firefox, Safari, Opera, IE8 and above.', 'medplus'); ?></div>
</div>

<div class="col-2">
<h4><?php _e('E-commerce', 'medplus'); ?></h4>
<div class="description"><?php _e('Fully compatible with WooCommerce plugin. Just install the plugin and turn your site into a full featured online shop and start selling products.', 'medplus'); ?></div>
</div>

</div><!-- .gt-left -->
	
	<div class="gt-right">			
			<div style="font-weight:bold;">				
				<a href="<?php echo medplus_live_demo; ?>" target="_blank"><?php _e('Live Demo', 'medplus'); ?></a> | 
				<a href="<?php echo medplus_protheme_url; ?>"><?php _e('Purchase Pro', 'medplus'); ?></a> | 
				<a href="<?php echo medplus_theme_doc; ?>" target="_blank"><?php _e('Theme Documentation', 'medplus'); ?></a>
                <div style="height:5px"></div>
				<hr />  
                <ul>
                 <li><?php _e('Theme Customizer', 'medplus'); ?></li>
                 <li><?php _e('Responsive Ready', 'medplus'); ?></li>
                 <li><?php _e('Cross Browser Compatible', 'medplus'); ?></li>
                 <li><?php _e('E-commerce', 'medplus'); ?></li>
                 <li><?php _e('Contact Form 7 Plugin Compatible', 'medplus'); ?></li>  
                 <li><?php _e('User Friendly', 'medplus'); ?></li> 
                 <li><?php _e('Translation Ready', 'medplus'); ?></li>
                 <li><?php _e('Many Other Plugins  Compatible', 'medplus'); ?></li>   
                </ul>              
               
			</div>		
	</div><!-- .gt-right-->
    <div class="clear"></div>
</div><!-- .wrap-GT -->
<?php } ?>