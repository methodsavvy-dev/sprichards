( function() {
	if ( ! document.querySelector( '.logistics-map-block' ) ) {
		return;
	}

	/**
	 * id="1" Atlanta
	 * id="2" Boston
	 * id="3" Charlotte
	 * id="4" Grand Rapids
	 * id="5" Los Angeles
	 * id="6" Kansas City
	 * id="7" Oklahoma City
	 * id="8" Sacramento
	 * id="9" Seattle
	 * id="10" Baltimore
	 * id="11" Chicago
	 * id="12" Dallas
	 * id="13" Houston
	 * id="14" Memphis
	 * id="15" New Jersey
	 * id="16" Philadelphia
	 * id="17" Salt Lake
	 * id="18" St. Louis
	 * id="19" birmingham
	 * id="20" Columbus
	 * id="21" Denver
	 * id="22" Indianapolis
	 * id="23" Miami
	 * id="24" New York
	 * id="25" Phoenix
	 * id="26" San Antonio
	 * id="27" St. Paul
	 * id="28" Tampa
	 */

	const n1 = { id: 'n1', states: [ 2, 24, 15, 16, 10 ] };
	const n2 = {
		id: 'n2',
		states: [ 1, 18, 23, 6, 28, 7, 19, 12, 14, 13, 3, 26, 27 ],
	};
	const n3 = { id: 'n3', states: [ 4, 11, 22, 20 ] };
	const n4 = { id: 'n4', states: [ 17, 21, 25, 5, 8, 9 ] };

	const appElement = document.querySelector( '.logistics-map-block__app' );
	const liElements = appElement.querySelectorAll( 'li' );

	const mapElement = document.querySelector( '.network-map' );
	const mapOverlayElement = mapElement.querySelector(
		'.network-map__overlay'
	);
	const mapBaseElement = mapElement.querySelector( '.network-map__base' );

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
		phone01Element.textContent = data.phone1;
		phone02Element.textContent = data.phone2;
		phone01Element.href = 'tel:' + data.phone1;
		phone02Element.href = 'tel:' + data.phone2;
		address01Element.textContent = data.address1;
		address02Element.textContent = data.address2;
	};

	// set the default network info on page load
	setInfo( networkInfoElement.dataset );

	/**
	 * Clear all active classes.
	 *
	 * @return {void}
	 */
	const clearActive = () => {
		liElements.forEach( ( element ) => {
			element.classList.remove( 'active' );
			element.classList.remove( 'semi-active' );
		} );
	};

	/**
	 * Set the base map.
	 *
	 * @param {string} id The id of the network.
	 * @return {void}
	 */
	const setBaseMap = ( id ) => {
		mapBaseElement.classList.remove( 'n1', 'n2', 'n3', 'n4', 'default' );

		if ( ! id ) {
			mapBaseElement.classList.add( 'default' );
			return;
		}

		mapBaseElement.classList.add( id );
	};

	/**
	 * Set the overlay map.
	 *
	 * @param {number} id
	 */
	const setOverlayMap = ( id ) => {
		mapOverlayElement.className = 'network-map__overlay';

		if ( ! id ) {
			return;
		}

		mapOverlayElement.classList.add( 's' + id );
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
				setMarkerByAddress( event.target.dataset.address1 + ' ' + event.target.dataset.address2 );

				const id = event.target.dataset.id;
				this.classList.add( 'active' );

				// find the network where the id is in the states array
				const n = [ n1, n2, n3, n4 ].find( ( network ) => {
					return network.states.includes( parseInt( id ) );
				} );

				// setBaseMap( n.id );
				setOverlayMap( id );

				n.states.forEach( ( stateId ) => {
					const liElement = appElement.querySelector(
						`li[data-id="${ stateId }"]`
					);

					if ( liElement.classList.contains( 'active' ) ) {
						return;
					}
					liElement.classList.add( 'semi-active' );
				} );
			},
			false
		);
	} );

	let map, marker;

	const splitLatLng = ( latlngstr ) => {
		const latlng = latlngstr.split( ',' );
		return { lat: parseFloat( latlng[ 0 ] ), lng: parseFloat( latlng[ 1 ] ) };
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
		gotoMapButton.setAttribute( 'style', 'margin: 5px; border: 1px solid; padding: 1px 12px; font: bold 11px Roboto, Arial, sans-serif; color: #000000; background-color: #FFFFFF; cursor: pointer;' );
		gotoMapButton.href = 'https://www.google.com/maps/search/?api=1&query=' + encodeURIComponent( networkInfoElement.dataset.address1 + ' ' + networkInfoElement.dataset.address2 );
		gotoMapButton.target = '_blank';

		map.controls[ google.maps.ControlPosition.TOP_RIGHT ].push( gotoMapButton );
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
		button.href = 'https://www.google.com/maps/search/?api=1&query=' + encodeURIComponent( address );
	};

	initMap();
}( jQuery ) );
