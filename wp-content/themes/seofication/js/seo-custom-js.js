jQuery( document ).ready( function( $ ) {

		// for sidebar toggle on shop page js
	if(jQuery(window).width()<767){ 
		
		jQuery("#sidebar1").hide();
		
		jQuery(".filter-area").click(function(){
			
			jQuery("#sidebar1").slideToggle();
		
		});

	}
	
	// for submenu dropdown on tab and mobile
		if(jQuery(window).width()<=1024){ 
			
			$( ".main-navigation ul li.menu-item-has-children" ).prepend( '<span class="fa fa-angle-down"></span>' );
			
			$('.main-navigation ul li.menu-item-has-children .fa.fa-angle-down').click(function(){
				
				$(this).next().next().slideToggle();
				
			});

		}
	
	
});