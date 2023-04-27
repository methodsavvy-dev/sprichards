( function( gsap ) {
	if ( ! document.querySelector( '.timeline-block' ) ) {
		return;
	}

	gsap.registerPlugin( ScrollTrigger );

	const duration = 5;
	const timelineEl = document.querySelector( '.timeline-block__content' );
	const sections = gsap.utils.toArray( '.timeline-block__item' );

	const tl = gsap.timeline( {
		scrollTrigger: {
			trigger: timelineEl,
			start: 'top top+=200',
			end: '+=5000',
			pin: true,
			scrub: 1,
			snap: 1 / ( sections.length - 1 ),
		},
	} );

	tl.to( sections, {
		duration,
		ease: 'none',
		xPercent: -100 * ( sections.length - 1 ),
	} );
}( gsap ) );
