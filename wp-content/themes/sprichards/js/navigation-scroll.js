( function( jQuery ) {
	if ( ! document.querySelector( '#primary-menu' ) ) {
		return;
	}

	let didScroll;
	let lastScrollTop = 0;

	const delta = 5;
	const navbarHeight = jQuery( '#masthead' ).outerHeight();

	jQuery( window ).scroll( function() {
		didScroll = true;
	} );

	setInterval( function() {
		if ( didScroll ) {
			hasScrolled();
			didScroll = false;
		}
	}, 250 );

	function hasScrolled() {
		const st = jQuery( this ).scrollTop();

		// Make sure they scroll more than delta
		if ( Math.abs( lastScrollTop - st ) <= delta ) {
			return;
		}

		if ( st > lastScrollTop && st > navbarHeight ) {
			jQuery( '#masthead' ).removeClass( 'nav-down' ).addClass( 'nav-up' );
		} else if ( st >= 0 && st <= navbarHeight ) {
			jQuery( '#masthead' ).removeClass( 'nav-down nav-up' );
		} else if ( st + jQuery( window ).height() < jQuery( document ).height() ) {
			jQuery( '#masthead' ).removeClass( 'nav-up' ).addClass( 'nav-down' );
		}

		lastScrollTop = st;
	}
}( jQuery ) );
