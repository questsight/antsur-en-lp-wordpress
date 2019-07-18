jQuery( document ).ready( function() {
	jQuery( '#hamburger' ).click( function () {
		jQuery( '.hamburger__item' ).toggleClass( 'hamburger__item_open' );
    jQuery( '#navigation' ).toggleClass('navigation__hidden');
    jQuery( '#navigation' ).toggleClass('top-in');
	});
});