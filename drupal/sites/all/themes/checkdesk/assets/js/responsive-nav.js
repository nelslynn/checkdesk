/*jslint nomen: true, plusplus: true, todo: true, white: true, browser: true, indent: 2 */
(function ($) {
	'use strict';

	// frontpage swap header logos and hide header on page scroll
  Drupal.behaviors.responsiveNav = {
    attach: function(context) {
      var nav = responsiveNav(".nav-collapse", { // Selector
        animate: false, // Boolean: Use CSS3 transitions, true or false
        transition: 284, // Integer: Speed of the transition, in milliseconds
        customToggle: ".nav-toggle", // Selector: Specify the ID of a custom toggle
        closeOnNavClick: false, // Boolean: Close the navigation when one of the links are clicked
        openPos: "fixed", // String: Position of the opened nav, relative or static
        navClass: "nav-collapse", // String: Default CSS class. If changed, you need to edit the CSS too!
        navActiveClass: "js-nav-active", // String: Class that is added to  element when nav is active
        jsClass: "js", // String: 'JS enabled' class which is added to  element
        open: function(){
          // Make metabar position relative so it pushes down
          // when the navigation expands
          $('.metabar').css('position', 'relative');
          $('#main').css('top', '0px');
        },
        close: function(){
          // move metabar back to top
          $('.metabar').css('top', '');
        },
      });

      // Run code on entry and exit from media queries
      // see: https://github.com/sparkbox/mediaCheck
      // see: _variables for standar breakpoint variables if needed
      
      mediaCheck({
        media: '(max-width: 750px)',
        entry: function() {
          // On mobile: Make sign in / sign up button small and trim copy
          $('.btn-sign-in-up').text(Drupal.t('Sign in')).addClass('btn-sm');
          // make avatar small
          $('#my-account-link .avatar-menu').removeClass('thumb-40').addClass('thumb-38');
        },
        exit: function() {
          // Restore sign in / sign up button size and copy
          $('.btn-sign-in-up').text(Drupal.t('Sign in / Sign up')).removeClass('btn-sm');
          // make avatar big again
          $('#my-account-link .avatar-menu').removeClass('thumb-38').addClass('thumb-40');
        }
      });

    }
  };

  // search page responsive
  Drupal.behaviors.responsiveSearch = {
    attach: function(context) {
      mediaCheck({
        media: '(max-width: 750px)',
        entry: function() {
          // Show filters toggle button
          $('.content-filter .filters-toggle').removeClass('element-hidden');
          // By default collapse all filters
          $('.content-filter .filters-toggle').parent().find('.filter-list').children().not('#edit-keys-wrapper').hide();
        },
        exit: function() {
         $('.content-filter .filters-toggle').addClass('element-hidden');
        }
      });


      // Show/hide filters
      $('.content-filter .filters-toggle').unbind('click').click(function(event) {
        var target = $(this).parent(),
            element = target.parent();

        if (element.find('.filter-list').children().not('#edit-keys-wrapper').is(':visible')) {
          element.find('.filter-list').children().not('#edit-keys-wrapper').hide();        
          element.removeClass('filters-open').addClass('filters-close');
          $(this).text('Show filters');
        } else {
          element.find('.filter-list').children().not('#edit-keys-wrapper').show();        
          element.removeClass('filters-close').addClass('filters-open');
          $(this).text('Hide filters');
        }
        return false;
      });

    }
  };

}(jQuery));