/** Enable lightGallery for each Gallery block on the front page. */
document.addEventListener( 'DOMContentLoaded', function () {
	document.querySelectorAll( '.wp-block-gallery' ).forEach( function ( gallery ) {
		lightGallery( gallery, {
			selector: 'a',
		} );
	} );
} );
