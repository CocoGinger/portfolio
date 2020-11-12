/**
 * Website js scripts init
 */

jQuery( document ).ready(function($) {
  'use strict';


var $container = $('.masonry').imagesLoaded( function() {
//var $container = $('.masonry');
$container.imagesLoaded(function(){
$container.masonry({
  // options
  columnWidth: 0,
  itemSelector: '.grid-item',
  percentPosition: true,
  //columnWidth: 200
});});});

      // Show the load more button again
      $( '#infinite-handle' ).fadeIn();
 
   // $( function() { // Ready

   //    var settings = { 
   //        anchors: 'a',
   //        blacklist: '.wp-link'
   //    };

  //     $( '#page' ).smoothState( settings );
  // } );     
} );