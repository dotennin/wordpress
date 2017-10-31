<?php 

/**
 * Template Name: Home Page
 **/

 get_header();

?>

</div><!-- #page -->
</div><!-- .container -->
</div>

<?php if(get_theme_mod("bnr_on_off_opt") != '' && get_theme_mod("bnr_on_off_opt") == 'on'): ?>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
      <div class="item active">
      <?php if(get_theme_mod("bnr_img1") != ''): ?>
      
          <img src="<?php echo esc_url(get_theme_mod("bnr_img1")); ?>" />
      
      <?php endif;?>
        
        <div class="carousel-caption">
          <h3><?php echo esc_html(get_theme_mod("banner_caption")); ?></h3>
          <p><?php echo esc_html(get_theme_mod("banner_content")); ?></p>
          <a href="<?php echo esc_url(get_theme_mod("banner_btn_link"));?>"><?php echo esc_html(get_theme_mod("banner_button")); ?></a>
        </div>
      </div>
    </div>
    	<div class="mouse">
    		<img src="<?php echo esc_url(get_template_directory_uri(). '/images/mouse.jpg'); ?>" />
    	</div>
  </div>
  <?php endif; ?>
  
  <?php if(get_theme_mod("service_sec_on_off") != '' && get_theme_mod("service_sec_on_off") == 'on'): ?>
  <div class="container">
  
  	<div class="col-sm-12 section-aber">
      <h1><?php echo esc_html(get_theme_mod("bottom_heading")); ?></h1>
  		<p><?php echo esc_html(get_theme_mod("bottom_content")); ?></p>
  	</div>
	
  	<div class="row">
  		<div class="col-sm-4 standard-text">
  			<span class="fa fa-lightbulb-o"></span>
        <h1><?php echo esc_html(get_theme_mod("sub_heading")); ?></h1>
        <p><?php echo esc_html(get_theme_mod("sub_content")); ?></p>
  		<a href="<?php echo esc_url(get_theme_mod("service1_arrow_link"));?>"><span class="fa fa-angle-right icons1"></span></a>
  		</div>
		
  		<div class="col-sm-4 standard-text">
  			<span class="fa fa-futbol-o"></span>
        <h1><?php echo esc_html(get_theme_mod("sub_heading2")); ?></h1>
        <p><?php echo esc_html(get_theme_mod("sub_content2")); ?></p>
  		<a href="<?php echo esc_url(get_theme_mod("service2_arrow_link"));?>"><span class="fa fa-angle-right icons1"></span></a>
  		</div>
		
  		<div class="col-sm-4 standard-text">
  			<span class="fa fa-briefcase"></span>
  			<h1><?php echo esc_html(get_theme_mod("sub_heading3")); ?></h1>
        <p><?php echo esc_html(get_theme_mod("sub_content3")); ?></p>
  		<a href="<?php echo esc_url(get_theme_mod("service3_arrow_link"));?>"><span class="fa fa-angle-right icons1"></span></a>
  		</div>
  	</div>
	
</div>
<?php endif; ?>
 
 <?php if(get_theme_mod("side_baner_on_off") != '' && get_theme_mod("side_baner_on_off") == 'on'): ?>
 <div class="container-fluid main-section">
  	<div class="row">
	  	<div class="col-sm-7 bg-design">
	  		<h3><?php echo esc_html(get_theme_mod("side_banner_heading")); ?></h3>
        <p><?php echo esc_html(get_theme_mod("side_banner_content")); ?></p>
        <a href="<?php echo esc_url(get_theme_mod("side_banner_btn1_link"));?>"><?php echo esc_html(get_theme_mod("side_banner_button1")); ?></a>
        <a href="<?php echo esc_url(get_theme_mod("side_banner_btn2_link"));?>"><?php echo esc_html(get_theme_mod("side_banner_button2")); ?></a>
	  	</div>
      <div class="col-sm-5 custom-section">
      <?php if(get_theme_mod("side_banner_img") != ''): ?>
      
          <img src="<?php echo esc_url(get_theme_mod("side_banner_img")); ?>" />
      
      <?php endif;?>
        
      </div>
	  </div>
  </div>
<?php endif; ?>
  
<?php if(get_theme_mod("feature_sec_on_off") != '' && get_theme_mod("feature_sec_on_off") == 'on'): ?>
<div class="container">
    <div class="col-sm-12 buiness">
        <h3><?php echo esc_html(get_theme_mod("feature_heading")); ?></h3>
        <p><?php echo esc_html(get_theme_mod("feature_content")); ?></p>
    </div>
	
    <div class="row">
        <div class="col-sm-4 optimization">
                <div class="engine1">
                <?php if(get_theme_mod("feature_img") != ''): ?>
      
                    <img src="<?php echo esc_url(get_theme_mod("feature_img")); ?>" />
      
                <?php endif;?>

                    <h2><?php echo esc_html(get_theme_mod("feature_sub_heading")); ?></h2>
                </div>
                <div class="hover-section">
                    <h2><?php echo esc_html(get_theme_mod("feature_hover_heading")); ?></h2>
                    <p><?php echo esc_html(get_theme_mod("feature_hover_content")); ?></p>
                    <a href="<?php echo esc_url(get_theme_mod("feature_sec1_btn_link"));?>"><?php echo esc_html(get_theme_mod("feature_hover_button")); ?></a> 
                </div>
        </div>
		
        <div class="col-sm-4 optimization">
                <div class="engine1">
                <?php if(get_theme_mod("feature_img2") != ''): ?>
      
                    <img src="<?php echo esc_url(get_theme_mod("feature_img2")); ?>" />
      
                <?php endif;?>
                    
                    <h2><?php echo esc_html(get_theme_mod("feature_sub_heading2")); ?></h2>
                </div>
                <div class="hover-section">
                    <h2><?php echo esc_html(get_theme_mod("feature_hover_heading2")); ?></h2>
                    <p><?php echo esc_html(get_theme_mod("feature_hover_content2")); ?></p>
                    <a href="<?php echo esc_url(get_theme_mod("feature_sec2_btn_link"));?>"><?php echo esc_html(get_theme_mod("feature_hover_button2")); ?></a>
                </div>
        </div>
		
        <div class="col-sm-4 optimization">
                <div class="engine1">
                <?php if(get_theme_mod("feature_img3") != ''): ?>
      
                    <img src="<?php echo esc_url(get_theme_mod("feature_img3")); ?>" />
      
                <?php endif;?>

                    <h2><?php echo esc_html(get_theme_mod("feature_sub_heading3")); ?></h2>
                </div>
                <div class="hover-section">
                    <h2><?php echo esc_html(get_theme_mod("feature_hover_heading3")); ?></h2>
                    <p><?php echo esc_html(get_theme_mod("feature_hover_content3")); ?></p>
                    <a href="<?php echo esc_url(get_theme_mod("feature_sec3_btn_link"));?>"><?php echo esc_html(get_theme_mod("feature_hover_button3")); ?></a>
                </div>
        </div>

        <div class="col-sm-4 optimization">
                <div class="engine1">
                     <?php if(get_theme_mod("feature_img4") != ''): ?>
      
                          <img src="<?php echo esc_url(get_theme_mod("feature_img4")); ?>" />
      
                      <?php endif;?>
                    <h2><?php echo esc_html(get_theme_mod("feature_sub_heading4")); ?></h2>
                </div>
                <div class="hover-section">
                   <h2><?php echo esc_html(get_theme_mod("feature_hover_heading4")); ?></h2>
                    <p><?php echo esc_html(get_theme_mod("feature_hover_content4")); ?></p>
                    <a href="<?php echo esc_url(get_theme_mod("feature_sec4_btn_link"));?>"><?php echo esc_html(get_theme_mod("feature_hover_button4")); ?></a>
                </div>
        </div>
		
        <div class="col-sm-4 optimization">
                <div class="engine1">
                     <?php if(get_theme_mod("feature_img5") != ''): ?>
      
                          <img src="<?php echo esc_url(get_theme_mod("feature_img5")); ?>" />
      
                     <?php endif;?>
                   <h2><?php echo esc_html(get_theme_mod("feature_sub_heading5")); ?></h2>
                </div>
                <div class="hover-section">
                    <h2><?php echo esc_html(get_theme_mod("feature_hover_heading5")); ?></h2>
                    <p><?php echo esc_html(get_theme_mod("feature_hover_content5")); ?></p>
                    <a href="<?php echo esc_url(get_theme_mod("feature_sec5_btn_link"));?>"><?php echo esc_html(get_theme_mod("feature_hover_button5")); ?></a>
                </div>
        </div>
		
        <div class="col-sm-4 optimization">
                <div class="engine1">
                     <?php if(get_theme_mod("feature_img6") != ''): ?>
      
                          <img src="<?php echo esc_url(get_theme_mod("feature_img6")); ?>" />
      
                     <?php endif;?>
                    <h2><?php echo esc_html(get_theme_mod("feature_sub_heading6")); ?></h2>
                </div>
                <div class="hover-section">
                   <h2><?php echo esc_html(get_theme_mod("feature_hover_heading6")); ?></h2>
                    <p><?php echo esc_html(get_theme_mod("feature_hover_content6")); ?></p>
                    <a href="<?php echo esc_url(get_theme_mod("feature_sec6_btn_link"));?>"><?php echo esc_html(get_theme_mod("feature_hover_button6")); ?></a>
                </div>
        </div>
	
        <div class="col-sm-4 optimization">
                <div class="engine1">
                     <?php if(get_theme_mod("feature_img7") != ''): ?>
      
                          <img src="<?php echo esc_url(get_theme_mod("feature_img7")); ?>" />
      
                     <?php endif;?>
                    <h2><?php echo esc_html(get_theme_mod("feature_sub_heading7")); ?></h2>
                </div>
                <div class="hover-section">
                    <h2><?php echo esc_html(get_theme_mod("feature_hover_heading7")); ?></h2>
                    <p><?php echo esc_html(get_theme_mod("feature_hover_content7")); ?></p>
                    <a href="<?php echo esc_url(get_theme_mod("feature_sec7_btn_link"));?>"><?php echo esc_html(get_theme_mod("feature_hover_button7")); ?></a>
                </div>
        </div>
		
        <div class="col-sm-4 optimization">
                <div class="engine1">
                     <?php if(get_theme_mod("feature_img8") != ''): ?>
      
                          <img src="<?php echo esc_url(get_theme_mod("feature_img8")); ?>" />
      
                     <?php endif;?>
                   <h2><?php echo esc_html(get_theme_mod("feature_sub_heading8")); ?></h2>
                </div>
                <div class="hover-section">
                    <h2><?php echo esc_html(get_theme_mod("feature_hover_heading8")); ?></h2>
                    <p><?php echo esc_html(get_theme_mod("feature_hover_content8")); ?></p>
                    <a href="<?php echo esc_url(get_theme_mod("feature_sec8_btn_link"));?>"><?php echo esc_html(get_theme_mod("feature_hover_button8")); ?></a>
                </div>
        </div>
		
        <div class="col-sm-4 optimization">
                <div class="engine1">
                     <?php if(get_theme_mod("feature_img9") != ''): ?>
      
                            <img src="<?php echo esc_url(get_theme_mod("feature_img9")); ?>" />
      
                     <?php endif;?>
                    <h2><?php echo esc_html(get_theme_mod("feature_sub_heading9")); ?></h2>
                </div>
                <div class="hover-section">
                    <h2><?php echo esc_html(get_theme_mod("feature_hover_heading9")); ?></h2>
                    <p><?php echo esc_html(get_theme_mod("feature_hover_content9")); ?></p>
                    <a href="<?php echo esc_url(get_theme_mod("feature_sec9_btn_link"));?>"><?php echo esc_html(get_theme_mod("feature_hover_button9")); ?></a>
                </div>
        </div>
    </div>
	
</div> <!-- container -->
<?php endif; ?>
	
	<?php if(get_theme_mod("statistics_sec_on_off") != '' && get_theme_mod("statistics_sec_on_off") == 'on'): ?>
    <div class="container-fluid ranking-banner">
        <div class="container">
            <div class="col-sm-12 satisfied">
                  <ul>
                      <li><?php echo esc_html(get_theme_mod("statistics_count1")); ?><span><?php echo esc_html(get_theme_mod("statistics_result1")); ?></span></li>
                      <li><?php echo esc_html(get_theme_mod("statistics_count2")); ?><span><?php echo esc_html(get_theme_mod("statistics_result2")); ?></span></li>
                      <li><?php echo esc_html(get_theme_mod("statistics_count3")); ?><span><?php echo esc_html(get_theme_mod("statistics_result3")); ?></span></li>
                      <li><?php echo esc_html(get_theme_mod("statistics_count3")); ?><span><?php echo esc_html(get_theme_mod("statistics_result3")); ?></span></li>
                  </ul> 
            </div>
        </div>
    </div>
	<?php endif; ?>

    </div>
<?php get_footer(); ?>