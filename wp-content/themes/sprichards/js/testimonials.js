( function( jQuery ) {
	if ( ! document.querySelector( '.owl-carousel' ) && ! document.querySelector( '.testimonials-block' ) ) {
		return;
	}

	jQuery( '.owl-carousel' ).owlCarousel( {
		loop: true,
		margin: 32,
		responsiveClass: true,
		responsive: {
			0: {
				items: 1,
				nav: false,
			},
			768: {
				items: 3,
				nav: false,
			},
		},
	} );

	const prevBtns = document.querySelectorAll( '.testimonials-block__nav__prev' );
	const nextBtns = document.querySelectorAll( '.testimonials-block__nav__next' );

	if ( ! prevBtns || ! nextBtns ) {
		return;
	}

	prevBtns.forEach( ( btn ) => {
		btn.addEventListener( 'click', function() {
			jQuery( '.owl-carousel' ).trigger( 'prev.owl.carousel' );
		} );
	} );

	nextBtns.forEach( ( btn ) => {
		btn.addEventListener( 'click', function() {
			jQuery( '.owl-carousel' ).trigger( 'next.owl.carousel' );
		} );
	} );
}( jQuery ) );
