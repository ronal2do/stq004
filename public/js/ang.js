// makes sure the whole site is loaded
      jQuery(window).on('load',function() {
              // will first fade out the loading animation
        jQuery("#status").fadeOut();
              // will fade out the whole DIV that covers the website.
      	jQuery("#preloader").delay(1000).fadeOut("slow");
      })


var myapp = angular.module('myapp', [
      "ngMask"
  ])
