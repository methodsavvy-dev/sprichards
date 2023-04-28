( function() {
	if ( ! document.querySelector( '.logistics-map-editable-block' ) ) {
		return;
	}

	const appElement = document.querySelector(
		'.logistics-map-editable-block__app'
	);
	const liElements = appElement.querySelectorAll( 'li' );

	const mapElement = document.querySelector( '.network-map' );
	const mapOverlayElement = mapElement.querySelector(
		'.network-map__overlay'
	);

	const networkInfoElement = document.querySelector( '.network-info' );
	const nameElement = networkInfoElement.querySelector(
		'.network-info__name'
	);
	const phone01Element = networkInfoElement.querySelector(
		'.network-info__phone-01'
	);
	const phone02Element = networkInfoElement.querySelector(
		'.network-info__phone-02'
	);
	const address01Element = networkInfoElement.querySelector(
		'.network-info__address-01'
	);
	const address02Element = networkInfoElement.querySelector(
		'.network-info__address-02'
	);
	/**
	 * Set the network info.
	 *
	 * @param {Object} data
	 * @return {void}
	 */
	const setInfo = ( data ) => {
		nameElement.textContent = data.name;
		phone01Element.textContent = data.phone0;
		phone02Element.textContent = data.phone1;
		phone01Element.href = 'tel:' + data.phone0;
		phone02Element.href = 'tel:' + data.phone1;
		address01Element.textContent = data.address0;
		address02Element.textContent = data.address1;
	};

	// set the default network info on page load
	setInfo( liElements[ 0 ].dataset );

	/**
	 * Clear all active classes.
	 *
	 * @return {void}
	 */
	const clearActive = () => {
		liElements.forEach( ( element ) => {
			element.classList.remove( 'active' );
		} );
	};

	/**
	 * Set the overlay map.
	 *
	 * @param {string} url
	 */
	const setOverlayMap = ( url ) => {
		if ( url ) {
			mapOverlayElement.style.backgroundImage = 'url(' + url + ')';
		} else {
			mapOverlayElement.style.backgroundImage = 'none';
		}
	};

	/**
	 * Add click event to each li element.
	 * When clicked, clear all active classes and add active class to the clicked element.
	 */
	liElements.forEach( ( element ) => {
		element.addEventListener(
			'click',
			function( event ) {
				if ( this.classList.contains( 'active' ) ) {
					clearActive();
					return;
				}

				clearActive();
				setInfo( event.target.dataset );
				setMarkerByAddress(
					event.target.dataset.address1 +
						' ' +
						event.target.dataset.address2
				);

				this.classList.add( 'active' );

				setOverlayMap( event.target.dataset.mapOverlay );
			},
			false
		);
	} );

	let map, marker;

	const splitLatLng = ( latlngstr ) => {
		const latlng = latlngstr.split( ',' );
		return {
			lat: parseFloat( latlng[ 0 ] ),
			lng: parseFloat( latlng[ 1 ] ),
		};
	};

	/**
	 * Add a Google Maps instance with a marker and a button to open Google Maps.
	 *
	 * @return {void}
	 * @see https://developers.google.com/maps/documentation/javascript/adding-a-google-map
	 */
	const initMap = () => {
		// default coordinates
		const latlng = splitLatLng( networkInfoElement.dataset.coordinates );

		map = new google.maps.Map(
			document.getElementById( 'network-info__map' ),
			{
				center: { lat: latlng.lat, lng: latlng.lng },
				zoom: 16,
				mapTypeControl: false,
				streetViewControl: false,
				fullscreenControl: false,
				zoomControlOptions: {
					position: google.maps.ControlPosition.LEFT_BOTTOM,
					style: google.maps.ZoomControlStyle.SMALL,
				},
			}
		);

		marker = new google.maps.Marker( {
			position: { lat: latlng.lat, lng: latlng.lng },
			map,
		} );

		// add a button to open Google Maps with default address
		const gotoMapButton = document.createElement( 'a' );

		gotoMapButton.id = 'goto-map-button';
		gotoMapButton.innerHTML = 'Open Google Maps';
		gotoMapButton.setAttribute(
			'style',
			'margin: 5px; border: 1px solid; padding: 1px 12px; font: bold 11px Roboto, Arial, sans-serif; color: #000000; background-color: #FFFFFF; cursor: pointer;'
		);
		gotoMapButton.href =
			'https://www.google.com/maps/search/?api=1&query=' +
			encodeURIComponent(
				networkInfoElement.dataset.address1 +
					' ' +
					networkInfoElement.dataset.address2
			);
		gotoMapButton.target = '_blank';

		map.controls[ google.maps.ControlPosition.TOP_RIGHT ].push(
			gotoMapButton
		);
	};

	/**
	 * Set the marker by address.
	 *
	 * @param {string} address
	 * @return {void}
	 * @see https://developers.google.com/maps/documentation/javascript/geocoding
	 */
	const setMarkerByAddress = ( address ) => {
		const geocoder = new google.maps.Geocoder();
		geocoder.geocode( { address }, ( results, status ) => {
			if ( status === 'OK' ) {
				const latlng = results[ 0 ].geometry.location;
				marker.setPosition( latlng );
				map.panTo( marker.getPosition() );
				setGoogleMapsButtonUrl( address );
			}
		} );
	};

	/**
	 * Set the Google Maps button URL.
	 *
	 * @param {string} address
	 * @return {void}
	 */
	const setGoogleMapsButtonUrl = ( address ) => {
		const button = document.getElementById( 'goto-map-button' );
		button.href =
			'https://www.google.com/maps/search/?api=1&query=' +
			encodeURIComponent( address );
	};

	initMap();
}( jQuery ) );
