jQuery( document ).ready( function() {
	jQuery( '#hamburger' ).click( function () {
		jQuery( '.hamburger__item' ).toggleClass( 'hamburger__item_open' );
    jQuery( '#navigation' ).toggleClass('navigation__hidden');
    jQuery( '#navigation' ).toggleClass('top-in');
	});
});
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
jQuery(window).on("load",function(){
  jQuery("a[rel='m_PageScroll2id']").mPageScroll2id({
    offset: 60,
  });  
});
jQuery( document ).ready( function() {
	jQuery( '#button-left' ).click( function () {
    if ( window.matchMedia( '(min-width: 768px)' ).matches ) {
      jQuery( '#box-center' ).addClass('hidden');
      jQuery( '#box-right' ).addClass('hidden');
    }
    jQuery( '#content-left' ).addClass('hidden');
    jQuery( '#button-left' ).addClass('hidden');
    jQuery( '#detail-left' ).removeClass('hidden');
    jQuery( '#close-left' ).removeClass('hidden');
    jQuery( '#box-left' ).addClass('animation-program');
    jQuery( '#detail-left' ).addClass('animation-opacity');
	});
  jQuery( '#button-center' ).click( function () {
    if ( window.matchMedia( '(min-width: 768px)' ).matches ) {
      jQuery( '#box-left' ).addClass('hidden');
      jQuery( '#box-right' ).addClass('hidden');
    }
    jQuery( '#content-center' ).addClass('hidden');
    jQuery( '#button-center' ).addClass('hidden');
    jQuery( '#detail-center' ).removeClass('hidden');
    jQuery( '#close-center' ).removeClass('hidden');
    jQuery( '#box-center' ).addClass('animation-program');
    jQuery( '#detail-center' ).addClass('animation-opacity');
	});
  jQuery( '#button-right' ).click( function () {
    if ( window.matchMedia( '(min-width: 768px)' ).matches ) {
      jQuery( '#box-center' ).addClass('hidden');
      jQuery( '#box-left' ).addClass('hidden');
    }
    jQuery( '#content-right' ).addClass('hidden');
    jQuery( '#button-right' ).addClass('hidden');
    jQuery( '#detail-right' ).removeClass('hidden');
    jQuery( '#close-right' ).removeClass('hidden');
    jQuery( '#box-right' ).addClass('animation-program');
    jQuery( '#detail-right' ).addClass('animation-opacity');
	});
  jQuery( '#close-left' ).click( function () {
    if ( window.matchMedia( '(min-width: 768px)' ).matches ) {
      jQuery( '#box-center' ).removeClass('hidden');
      jQuery( '#box-right' ).removeClass('hidden');
    }
    jQuery( '#content-left' ).removeClass('hidden');
    jQuery( '#button-left' ).removeClass('hidden');
    jQuery( '#detail-left' ).addClass('hidden');
    jQuery( '#close-left' ).addClass('hidden');
    jQuery( '#box-left' ).removeClass('animation-program');
    jQuery( '#detail-left' ).removeClass('animation-opacity');
	});
  jQuery( '#close-center' ).click( function () {
    if ( window.matchMedia( '(min-width: 768px)' ).matches ) {
      jQuery( '#box-left' ).removeClass('hidden');
      jQuery( '#box-right' ).removeClass('hidden');
    }
    jQuery( '#content-center' ).removeClass('hidden');
    jQuery( '#button-center' ).removeClass('hidden');
    jQuery( '#detail-center' ).addClass('hidden');
    jQuery( '#close-center' ).addClass('hidden');
    jQuery( '#box-center' ).removeClass('animation-program');
    jQuery( '#detail-center' ).removeClass('animation-opacity');
	});
  jQuery( '#close-right' ).click( function () {
    if ( window.matchMedia( '(min-width: 768px)' ).matches ) {
      jQuery( '#box-center' ).removeClass('hidden');
      jQuery( '#box-left' ).removeClass('hidden');
    }
    jQuery( '#content-right' ).removeClass('hidden');
    jQuery( '#button-right' ).removeClass('hidden');
    jQuery( '#detail-right' ).addClass('hidden');
    jQuery( '#close-right' ).addClass('hidden');
    jQuery( '#box-right' ).removeClass('animation-program');
    jQuery( '#detail-right' ).removeClass('animation-opacity');
	});
});