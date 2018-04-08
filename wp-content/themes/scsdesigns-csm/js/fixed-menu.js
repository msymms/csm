/* 
 * File fixed-menu.js
 * 
 * This keeps the menu on top as the screen scrolls at smaller
 * 
 */

jQuery(document).ready(function ($) {
    var $window = $(window),
            $stickyEl = $('#site-navigation');
    
    $window.scroll(function () {
        $stickyEl.toggleClass('fixed', $window.scrollTop() > 9);
    });

});
