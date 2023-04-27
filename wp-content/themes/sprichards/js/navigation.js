/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
( function() {
	const initMenu = function( navType ) {
		const mobileNavigationRef = document.getElementById(
			'mobile-navigation__nav'
		);
		const mobileNavigationContainerRef =
			document.getElementsByClassName( 'mobile-navigation' )[ 0 ];

		const desktopNavigationRef = document.getElementById(
			'desktop-navigation__nav'
		);

		let siteNavigation = mobileNavigationRef;

		if ( navType === 'desktop' ) {
			siteNavigation = desktopNavigationRef;
		}

		// Return early if the navigation doesn't exist.
		if ( ! siteNavigation ) {
			return;
		}

		const bodyElement = document.getElementsByTagName( 'body' )[ 0 ];

		const closeBtnRef =
			document.getElementsByClassName( 'close-menu-btn' )[ 0 ];
		const openBtnRef =
			document.getElementsByClassName( 'open-menu-btn' )[ 0 ];

		let button = closeBtnRef;

		if ( navType === 'desktop' ) {
			button = openBtnRef;
		}

		// Return early if the button doesn't exist.
		if ( 'undefined' === typeof button ) {
			return;
		}

		const menu = siteNavigation.getElementsByTagName( 'ul' )[ 0 ];

		// Hide menu toggle button if menu is empty and return early.
		if ( 'undefined' === typeof menu ) {
			button.style.display = 'none';
			return;
		}

		if ( ! menu.classList.contains( 'nav-menu' ) ) {
			menu.classList.add( 'nav-menu' );
		}

		// Toggle the .toggled class and the aria-expanded value each time the button is clicked.
		const toggleAriaExpanded = function( status ) {
			button.setAttribute( 'aria-expanded', status );
		};

		// Adds or removes .toggled class to the mobile navigation container.
		button.addEventListener( 'click', function() {
			if ( navType === 'desktop' ) {
				mobileNavigationContainerRef.classList.add( 'toggled' );
				bodyElement.classList.add( 'menu-opened' );
				toggleAriaExpanded( 'true' );
			} else if ( navType === 'mobile' ) {
				mobileNavigationContainerRef.classList.remove( 'toggled' );
				bodyElement.classList.remove( 'menu-opened' );
				toggleAriaExpanded( 'false' );
			}
		} );

		// Get all the link elements within the menu.
		const links = menu.getElementsByTagName( 'a' );

		// Get all the link elements with children within the menu.
		const linksWithChildren = menu.querySelectorAll(
			'.menu-item-has-children > a, .page_item_has_children > a'
		);

		// Toggle focus each time a menu link is focused or blurred.
		for ( const link of links ) {
			link.addEventListener( 'focus', toggleFocus, true );
			link.addEventListener( 'blur', toggleFocus, true );
		}

		// Toggle focus each time a menu link with children receive a touch event.
		for ( const link of linksWithChildren ) {
			link.addEventListener( 'touchstart', toggleFocus, { passive: true } );
		}

		/**
		 * Sets or removes .focus class on an element.
		 *
		 * @param {Object} ev
		 */
		function toggleFocus( ev ) {
			const listElement = ev.target.parentNode;

			if (
				( event.type === 'focus' || event.type === 'blur' ) &&
				listElement.classList.contains( 'menu-item-has-children' )
			) {
				let self = this;
				// Move up through the ancestors of the current link until we hit .nav-menu.
				while ( ! self.classList.contains( 'nav-menu' ) ) {
					// On li elements toggle the class .focus.
					if ( 'li' === self.tagName.toLowerCase() ) {
						self.classList.toggle( 'focus' );
					}
					self = self.parentNode;
				}
			}

			if ( event.type === 'touchstart' ) {
				const menuItem = this.parentNode;
				for ( const link of menuItem.parentNode.children ) {
					if ( menuItem !== link ) {
						link.classList.remove( 'focus' );
					}
				}
				menuItem.classList.toggle( 'focus' );
			}
		}
	};

	// Initialize the desktop menu.
	initMenu( 'desktop' );

	// Initialize the mobile menu.
	initMenu( 'mobile' );
}() );
