//html element
/*( function ( $ ) {
	var siteMenu, siteNavMenu, menuToggle, hideMenu;
	
	//create dropdown 
	function initNav( wrapper ) {
		
		//Add dropdown button 
		var dropdownBtn = $('<button />', {'class:' 'dropdown-btn', 'aria-expanded': false}).append
		( $( '<span />', {'class':'screen-text', text: screenText.expand} ) );
		
		//Attach dropdown button
		wrapper.find('.menu-item-has-children > a').after( dropdownBtn );
		
		//Add sub-menu
		wrapper.find(' .current-menu-ancestor > button' ).addClass( 'toggled-on' );
		wrapper.find(' .current-menu-ancestor > .sub-menu' ).addClass( 'toggled-on' );
		
		wrapper.find( '.menu-item-has-children' ).attr( 'aria-haspopup' , 'true' );
		
		wrapper.find( '.dropdown-btn' ).click( function(e) {
			var self = $(this);
			e.alert("hello");
			
		});
		
	
	}
	
	initNav( $('#site-nav-menu') );	
	
}
)( jQuery );

*/

( function( $) {
	

	
	$( document ).ready( function(){
			
			//Clicked Menu	
			$( '.menu-link' ).click( function(e){
					$( '#site-menu' ).toggleClass('open');  //transform menu-line
				    $( '.content-main' ).toggleClass('open');
					$( 'body' ).toggleClass('open');
			});
		
	});
	
})(jQuery);



