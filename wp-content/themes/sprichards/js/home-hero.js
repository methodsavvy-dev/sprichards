( function( jQuery ) {
	if ( ! document.querySelector( '.home-hero-block' ) ) {
		return;
	}

	/**
	 * Remove the active class from all images.
	 */
	const removeActiveClassOnImages = function() {
		jQuery( '.nav-image' ).each( function() {
			jQuery( this ).removeClass( 'active' );
		} );
	};

	/**
	 * Add the active class to the image that matches the data-nav-image attribute.
	 */
	jQuery( '.click-area' ).mouseenter( function( ev ) {
		removeActiveClassOnImages();
		jQuery( '.nav-image__0' + ev.currentTarget.dataset.option ).addClass( 'active' );
	} );

	/**
	 * Remove the active class from all images.
	 * This is needed when the mouse leaves the click area.
	 * Otherwise the last image will remain active.
	 */
	jQuery( '.click-area' ).mouseleave( function() {
		removeActiveClassOnImages();

		// Add the active class to the default image.
		jQuery( '.nav-image__00' ).addClass( 'active' );
	} );
}( jQuery ) );
