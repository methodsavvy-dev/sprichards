( function( jQuery ) {
	if ( ! document.querySelector( '.home-experience-block' ) ) {
		return;
	}

	jQuery( '.home-experience-block .mouse-area' ).each( function(
		index,
		element
	) {
		jQuery( element ).mouseenter( function() {
			jQuery( '.home-experience-block .mouse-area' ).removeClass(
				'active'
			);
			jQuery( element ).addClass( 'active' );

			const option = jQuery( element ).data( 'option' );
			jQuery( '.desktop__backgrounds img' ).removeClass( 'active' );
			jQuery( '.desktop__backgrounds img[data-option="' + option + '"]' ).addClass( 'active' );
		} );

		jQuery( element ).mouseleave( function() {
			jQuery( '.home-experience-block .mouse-area' ).removeClass(
				'active'
			);

			// Add the active class to the default background image.
			jQuery( '.desktop__backgrounds img' ).removeClass( 'active' );
			jQuery( '.desktop__backgrounds img[data-option="0"]' ).addClass( 'active' );
		} );
	} );
}( jQuery ) );
