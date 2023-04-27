/**
 * File home-counter.js.
 *
 * Handles the counter on the home page.
 *
 * @param {Function} gsap
 * @param {Function} ScrollTrigger
 */
( function( gsap, ScrollTrigger ) {
	if ( ! document.querySelector( '.home-counter' ) ) {
		return;
	}

	document.addEventListener( 'DOMContentLoaded', function() {
		gsap.registerPlugin( ScrollTrigger );

		ScrollTrigger.create( {
			trigger: '.home-counter',
			onEnter() {
				// counts the numbers from 0 to the number in the data attribute
				gsap.to( '.home-counter__number', {
					innerText: ( i, target ) => {
						return target.dataset.number;
					},
					snap: {
						innerText: 5,
					},
					duration: 2,
				} );
			},
		} );
	} );
}( gsap, ScrollTrigger ) );
