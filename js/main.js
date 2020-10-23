jQuery(document).ready(function($) {


// nav shrink
$(window).scroll(function(){
    if ($(this).scrollTop() > 30) {
       $('nav').addClass('shrink');
    } else {
       $('nav').removeClass('shrink');
    }
  });

  // lazy load videos
  ( function() {

  	var youtube = document.querySelectorAll( ".youtube" );

  	for (var i = 0; i < youtube.length; i++) {

  		var source = "https://img.youtube.com/vi/"+ youtube[i].dataset.embed +"/sddefault.jpg";

  		var image = new Image();
  				image.src = source;
  				image.addEventListener( "load", function() {
  					youtube[ i ].appendChild( image );
  				}( i ) );

  				youtube[i].addEventListener( "click", function() {

  					var iframe = document.createElement( "iframe" );

  							iframe.setAttribute( "frameborder", "0" );
  							iframe.setAttribute( "allowfullscreen", "" );
  							iframe.setAttribute( "src", "https://www.youtube.com/embed/"+ this.dataset.embed +"?rel=0&showinfo=0&autoplay=1" );

  							this.innerHTML = "";
  							this.appendChild( iframe );
  				} );
  	};

  } )();



// toggle

$("#toggle-btnn").click(function(){
//	$("#mobile-menu-custom").removeClass('');
$("#mobile-menu-custom").toggleClass("collapse collapsed");
});

// Bootstrap menu magic
$(window).resize(function() {
if ($(window).width() < 768) {
  $(".dropdown-toggle").attr('data-toggle', 'dropdown');
} else {
  $(".dropdown-toggle").removeAttr('data-toggle dropdown');
}
});



//Galerry toggle
$('.gimage').click(function() {
  $(this).toggleClass('open');
  $(this).siblings().removeClass('open');
});



});





// BOOTSTRAP WP
jQuery( document ).ready( function( $ ) {

    $( 'input.search-field' ).addClass( 'form-control' );

    // the search widget
    $( 'input.search-field' ).addClass( 'form-control' );
    $( 'input.search-submit' ).addClass( 'btn btn-default' );

    $( '.widget_rss ul' ).addClass( 'media-list' );

    $( '.widget_meta ul, .widget_recent_entries ul, .widget_archive ul, .widget_categories ul, .widget_nav_menu ul, .widget_pages ul' ).addClass( 'nav' );

    $( '.widget_recent_comments ul#recentcomments' ).css( 'list-style', 'none').css( 'padding-left', '0' );
    $( '.widget_recent_comments ul#recentcomments li' ).css( 'padding', '5px 15px');

    $( 'table#wp-calendar' ).addClass( 'table table-striped');
} );
