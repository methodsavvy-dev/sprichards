( function( ) {
	if ( ! document.querySelector( '#primary-menu' ) && ! document.querySelector( '#menu-item-754' ) && ! document.querySelector( '#menu-item-752' ) ) {
		return;
	}

	const portalsMenuItem = document.querySelector( '#menu-item-752' );
	const csMenuItem = document.querySelector( '#menu-item-754' );

	if ( portalsMenuItem.classList.contains( 'current-menu-item' ) || csMenuItem.classList.contains( 'current_page_item' ) ) {
		csMenuItem.classList.remove( 'current-menu-ancestor', 'current-menu-parent' );
		portalsMenuItem.classList.remove( 'current-menu-item', 'current_page_item' );
	}
}( ) );
