( function( ) {
	if ( ! document.querySelector( '.infinite-brand-carousel-block' ) ) {
		return;
	}

	const stripElement = document.querySelector( '.infinite-brand-carousel-block__strip' );

	setTimeout( () => {
		stripElement.classList.add( 'animate' );
	}, 1000 );
}( ) );
