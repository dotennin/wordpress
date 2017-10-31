<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="container">
 *
 * @package  Medplus
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php $hideheadertop = get_theme_mod('disabled_headertop', '1'); ?>
		<?php if($hideheadertop == ''){ ?>
<div class="header-top">
    <div class="container">
        <div class="left">
		   <div class="social-icons">
					<?php if ( get_theme_mod('fb_link') != "") { ?>
                    <a title="facebook" class="fa fa-facebook" target="_blank" href="<?php echo esc_url(get_theme_mod('fb_link')); ?>"></a> 
                    <?php } ?>
                    
                    <?php if ( get_theme_mod('twitt_link') != "") { ?>
                    <a title="twitter" class="fa fa-twitter" target="_blank" href="<?php echo esc_url(get_theme_mod('twitt_link')); ?>"></a>
                    <?php } ?> 
                    
                    <?php if ( get_theme_mod('gplus_link') != "") { ?>
                    <a title="google-plus" class="fa fa-google-plus" target="_blank" href="<?php echo esc_url(get_theme_mod('gplus_link')); ?>"></a>
                    <?php } ?>
                    
                    <?php if ( get_theme_mod('linked_link') != "") { ?> 
                    <a title="linkedin" class="fa fa-linkedin" target="_blank" href="<?php echo esc_url(get_theme_mod('linked_link')); ?>"></a>
                    <?php } ?>
           </div>  
        
        </div>
        <div class="right">
          <?php if ( ! dynamic_sidebar( 'header-info' ) ) : ?>
                 <div class="headerinfo">                  
                  <?php $header_phone = get_theme_mod('header_phone');
                   if( !empty($header_phone) ){ ?>
                    <i class="fa fa-phone"></i><?php echo esc_html( $header_phone); ?>                   
                 <?php } ?>
                 
                  <?php $header_address = get_theme_mod('header_address');
                   if( !empty($header_address) ){ ?>
                    <i class="fa fa-envelope"></i> <?php echo esc_html( $header_address); ?>
                 <?php } ?>
                                 
                 </div>                 
            <?php endif; // end sidebar widget area ?>  
        
         
        </div>
        <div class="clear"></div>
     </div> 
  </div><!-- end .headertop -->
<?php } ?>

<div class="header">
        <div class="container">
            <div class="logo">
                <?php medplus_the_custom_logo(); ?>   
                <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a></h1>                
                <?php $description = get_bloginfo( 'description', 'display' );
                      if ( $description || is_customize_preview() ) : ?>
                        <span><?php echo $description; ?></span>
                <?php endif; ?>  
            </div><!-- logo -->
            <div class="header_right">
             <div class="toggle">
                <a class="toggleMenu" href="#"><?php _e('Menu','medplus'); ?></a>
             </div><!-- toggle --> 
            <div class="sitenav">
                    <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
            </div><!-- site-nav -->
            </div><!-- header_right -->
            <div class="clear"></div>
        </div><!-- container -->
  </div><!--.header -->

<?php if ( is_front_page() && !is_home() ) { ?>
	<?php $hideslide = get_theme_mod('disabled_slides', '1'); ?>
		<?php if($hideslide == ''){ ?>               
                <?php for($sld=2; $sld<5; $sld++) { ?>
                	<?php if( get_theme_mod('page-setting'.$sld)) { ?>
                	<?php $slidequery = new WP_query('page_id='.get_theme_mod('page-setting'.$sld,true)); ?>
                	<?php while( $slidequery->have_posts() ) : $slidequery->the_post();
                			$image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));
                			$img_arr[] = $image;
               				$id_arr[] = $post->ID;
                		endwhile;
                	}
                }
                ?>
<?php if(!empty($id_arr)){ ?>
        <div id="slider" class="nivoSlider">
            <?php 
            $i=1;
            foreach($img_arr as $url){ ?>
            <?php if(!empty($url)){ ?>
            <img src="<?php echo $url; ?>" title="#slidecaption<?php echo $i; ?>" />
            <?php }else{ ?>
            <img src="<?php echo esc_url( get_template_directory_uri() ) ; ?>/images/slides/slider-default.jpg" title="#slidecaption<?php echo $i; ?>" />
            <?php } ?>
            <?php $i++; }  ?>
        </div>   
<?php 
	$i=1;
		foreach($id_arr as $id){ 
		$title = get_the_title( $id ); 
		$post = get_post($id); 
		$content = esc_html( wp_trim_words( $post->post_content, 20, '' ) );
?>                 
<div id="slidecaption<?php echo $i; ?>" class="nivo-html-caption">
    <div class="slide_info">
    	<h2><?php echo $title; ?></h2>
    	<p><?php echo $content; ?></p>        
    </div>
</div>      
    <?php $i++; } ?>       
     </div><!--end .slider area-->
     <?php wp_reset_postdata(); ?>
<div class="clear"></div>        
<?php } ?>
<?php } } ?>


 <?php if ( is_front_page() && ! is_home() ) { ?> 
 <?php $hideappo = get_theme_mod('disabled_appointment', '1'); ?>
		<?php if($hideappo == ''){ ?>  
 <section id="pagearea">
    <div class="container">
         <?php if( get_theme_mod('appointment')) { ?>
                    <?php $queryvar = new WP_query('page_id='.get_theme_mod('appointment' ,true)); ?>
                    <?php while( $queryvar->have_posts() ) : $queryvar->the_post();?> 
                          <div class="appointmentbx">
                            <h2><?php the_title(); ?></h2>                           
                            <p><?php echo wp_trim_words( get_the_content(), 50, '...' ); ?></p>
                            <a class="appointmentbtn" href="<?php the_permalink(); ?>"><?php _e('Get an Appointment','medplus'); ?></a>
                         </div>
						<?php endwhile;
						wp_reset_postdata(); ?>                      
             <?php } ?>
             
             </div>
    <div class="clear"></div>
    </div><!-- .container -->
</section><!-- #pagearea -->
<?php } ?>  

 <?php $hidepgbxes = get_theme_mod('disabled_pageboxes', '1'); ?>
		<?php if($hidepgbxes == ''){ ?>  
<div id="ourservices">
    <div class="container">
         <?php if( get_theme_mod('welcomepage',false) ) { ?>
        		<?php $queryvar = new wp_query('page_id='.get_theme_mod('welcomepage',true));				
						while( $queryvar->have_posts() ) : $queryvar->the_post(); ?>
                        <div class="leftwrap"> 							
                            <h2><?php the_title(); ?></h2>                           
                             <p><?php echo wp_trim_words( get_the_content(), 40, '...' ); ?></p>
                            <a class="ReadMore" href="<?php the_permalink(); ?>"><?php _e('Read More &raquo;','medplus'); ?></a>
                         </div>
						<?php endwhile;
						wp_reset_postdata(); ?>                            
             <?php } ?>
             
           <div class="rightwrap">             
          		  <?php for($v=1; $v<5; $v++) { ?>       
                        <?php if( get_theme_mod('box'.$v,false)) { ?>          
                            <?php $querygt = new WP_query('page_id='.get_theme_mod('box'.$v,true)); ?>				
                                 <?php while( $querygt->have_posts() ) : $querygt->the_post(); ?> 
                                    <div class="cols2 <?php if($v % 2 == 0) { echo "lastcols"; } ?>">                                    
                                      <?php if(has_post_thumbnail() ) { ?>
                                        <div class="servicesthumb"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a> </div>
                                      <?php } ?>
                                       <div class="srvcontent">
                                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>                                    
                                        <p><?php echo wp_trim_words( get_the_content(), 25, '...' ); ?></p>
                                       </div>                                
                                    </div>
                              <?php endwhile;
                                  wp_reset_postdata(); ?>
                                    
               <?php } } ?>             
             </div><!-- .rightwrap -->
      <div class="clear"></div>
    </div><!-- .container -->
</div><!-- #ourservices -->  
<?php } ?>     
<?php } ?>