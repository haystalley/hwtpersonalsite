/*!
 * Item: Kitzu
 * Description: Personal Portfolio Template
 * Author/Developer: Exill
 * Author/Developer URL: https://themeforest.net/user/exill
 * Version: v1.1.0
 * License: Themeforest Standard Licenses: https://themeforest.net/licenses
 */

/*----------- CUSTOM JS SCRIPTS -----------*/

(function($) {
  'use strict';
  $(function() {
    // Code here executes When the DOM is loaded...
  });
  $("body").on("contextmenu",function(e)
    return false;
  });
  $(window).on('load', function() {
    // Code here executes When the page is loaded
    $("img").bind("contextmenu", function(e){return false})
  });
}(jQuery)); 


function rightclick(value1){
  alert(value1);
}

$(document).ready(function() {
  $(document).keyup(function(event) {
      var key = event.which;
      if(key == 37) { // Left arrow key
          $(".portfolio-item").not(":animated").animate({ scrollLeft: "-=340px" }, 500);
      }
      if(key == 39) { //Right arrow key
          $(".portfolio-item").not(":animated").animate({ scrollLeft: "+=340px" }, 500);
      }
  });
});