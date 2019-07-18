jQuery( document ).ready( function() {
  if ( window.matchMedia( '(min-width: 768px)' ).matches ) {
    jQuery( '#navigation' ).removeClass( 'navigation__hidden' );
  }
  jQuery( '.navigation__item' ).click( function () {
    if ( window.matchMedia( '(max-width: 767px)' ).matches ) {
      jQuery( '.hamburger__item' ).toggleClass( 'hamburger__item_open' );
      jQuery( '#navigation' ).toggleClass('navigation__hidden');
      jQuery( '#navigation' ).toggleClass('top-in');
    }
	});
});