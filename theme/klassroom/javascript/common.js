$(document).ready(function () {

  if ($('body')) {
    $('body').addClass('fixed-nav');
  }
  /*
  ====== Navigation section start ======
*/

  try {
    var mainNav = $("#nav-main");
    var navNode = mainNav && mainNav.find(".navbar");
    var ulNode = navNode && navNode.find("ul.navbar-nav");
    if (ulNode.find("li.dropdown")) {
      ulNode.find("li.dropdown").each(function (i, list) {
        var divDrop = $(list).find("div.dropdown-menu");
        var divNode = document.createElement(divDrop[0].nodeName);
        var ul = document.createElement('ul');
        $(ul)[0].classList = "dropdown-list";
        $(ul).attr({
          "role": "menu",
          "aria-labelledby": "drop-down-menu"
        });
        ul.innerHTML = divDrop[0].innerHTML;
        divDrop[0].replaceWith(ul, divNode);
        $(list).find('div').remove();
      });
    }

    var ddItem = $("ul.dropdown-list a.dropdown-item");
    if (ddItem) {
      for (var i = 0; i < ddItem.length; i += 1) {
        ddItem.slice(i, i + 1).wrapAll("<li></li>");
      }
    }
  } catch (ignore) {}

  try {
    if ($("nav.navbar ul.navbar-nav.navigation")) {
      $("nav.navbar ul.navbar-nav.navigation").addClass("main-menu theme-ddmenu");
    }
    if ($("nav.navbar ul.navbar-nav")) {
      $("nav.navbar ul.navbar-nav li.nav-item").removeClass("nav-item");
    }
    if ($("nav.navbar ul.navbar-nav.main-menu")) {
      $("nav.navbar ul.navbar-nav.main-menu").attr({
        "data-animtype": 2,
        "data-animspeed": 450
      });
      //$("nav.navbar ul.navbar-nav.main-menu li.dropdown ul.dropdown-list a.dropdown-item").removeClass("dropdown-item");
    }


  } catch (ignore) {}

  //<b class="mobile-arrow"></b>
  try {
    if ($('#nav-main nav.navbar ul.main-menu li.dropdown')) {
      $.each($('#nav-main nav.navbar ul.main-menu li.dropdown a[data-toggle="dropdown"]'), function (index, obj) {
        var arrow = document.createElement('b');
        $(arrow)[0].classList = "mobile-arrow";
        obj.append(arrow);
      });
    }
  } catch (ignore) {}

  try {
    $('#page-header .mini-block').before("<p id='internalbannertagline' class='tagline'></p>");
    var categoryTag = document.getElementById("internalbannertagline") ? document.getElementById("internalbannertagline").innerHTML = internalbannertagline : '';
  } catch (ignore) {}

});
