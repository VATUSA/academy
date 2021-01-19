
  $(document).ready(function () {


    /*=====
                ======= Home Page Category Start============
            ============*/

    try {
      var frontpageCategoryNames = $('#frontpage-category-names').html();
      if (typeof frontpageCategoryNames !== 'undefined' && frontpageCategoryNames !== null) {
        $('.defaultcategories > .container').prepend('<div id="frontpage-category-names">' + frontpageCategoryNames + '</div>');
        $('#region-main #frontpage-category-names').css({
          'display': 'none'
        });
      }

      var frontpageCategoryNames = $('#frontpage-category-names').html();
      if (typeof frontpageCategoryNames !== 'undefined' && frontpageCategoryNames !== null) {
        $('.customcategories').prepend('<div id="frontpage-category-names">' + frontpageCategoryNames + '</div>');
        $('#region-main #frontpage-category-names').css({
          'display': 'none'
        });
      };
      if (typeof frontpageCategoryNames === "undefined") {
        $('.customcategories,.defaultcategories').css({
          'display': 'none'
        });
      }
      if ($('#region-main #frontpage-category-names')) {
        $('#region-main #frontpage-category-names').remove();
      }

      if ($('#frontpage-category-names > h2'));
      $('#frontpage-category-names > h2').addClass('all');
      var elements = document.getElementsByClassName('all');
      if (elements) {
        for (var i = 0; i < elements.length; i++) {
          if (elements[i].innerHTML == 'Course categories') {
            elements[i].innerHTML = "Online course categories";
            break;
          }
        }
      }

      $('#frontpage-category-names h2.all').after("<p id='categorytagline' class='tagline'></p>");
      var categoryTag = document.getElementById("categorytagline") ? document.getElementById("categorytagline").innerHTML = categorytagline : '';


      if ($(".customcategories")) {
        $(".customcategories").append("<a class='seeall btn' href='course/'>View all categories <i class='fa fa-long-arrow-right' aria-hidden='true'></i></a>");
      }

      $('.customcategories .subcategories:first').addClass('row');


      $(".customcategories .category[data-depth='1']").wrapAll("<div id='CustomCategories' class='owl-carousel owl-theme owl-loaded owl-drag'></div>");
      $(".customcategories .category").addClass("item");
      $(".owl-item:first").addClass("active");

      if ($('#CustomCategories')) {
        if ($('body').hasClass('dir-rtl') === true) {
          $('#CustomCategories').addClass('owl-rtl');
          $("#CustomCategories").owlCarousel({
            rtl: true,
            navigation: true,
            autoplay: true,
            slideSpeed: 300,
            paginationSpeed: 400,
            dots: false,
            responsiveClass: true,
            responsive: {
              0: {
                items: 1,
                nav: true
              },
              600: {
                items: 2,
                nav: true,
              },
              1000: {
                items: 5,
                nav: true,
              }
            }

          });
        } else {
          $("#CustomCategories").owlCarousel({
            rtl: false,
            navigation: true,
            autoplay: true,
            slideSpeed: 300,
            paginationSpeed: 400,
            dots: false,
            responsiveClass: true,
            responsive: {
              0: {
                items: 1,
                nav: true
              },
              600: {
                items: 2,
                nav: true,
              },
              1000: {
                items: 5,
                nav: true,
              }
            }

          });
        }
      }


      // course customization start


      var customCateg = jQuery(".customcategories");
      if (customCateg) {
        var subCateg = customCateg && customCateg.find(".subcategories");
        var ownItem = subCateg && subCateg.find(".owl-item");
        var categoryItem = ownItem && ownItem.find('.category');
        categoryItem.each(function (index, obj) {
          var numOfCourse = jQuery(obj).find(".numberofcourse").eq(0);
          var orgContent = numOfCourse.html();
          var numContent = orgContent !== undefined ? orgContent.replace(/[\])}[{(]/g, '').trim() : '';
          var num = numContent !== "" ? parseInt(numContent) : '';
          var contentNode = jQuery(obj).find('.content');
          var course = num !== 1 ? "courses" : "course";
          if (num !== '') {
            jQuery("<span class='course-num'>" + num + " " + course + "</span>").insertAfter(contentNode)
          } else {
            jQuery("<span class='course-num'>0 course</span>").insertAfter(contentNode)
          }
          numOfCourse.addClass('hidden')
        });
      }

    } catch (ignore) {}

    /*=====
        ======= Home Page Category End============
    ============*/


    /*=====
    ======= Search Course Section Start============
============*/

    try {
      var courseSearch = $('#coursesearch').html();
      if (typeof courseSearch !== 'undefined' && courseSearch !== null) {
        if ($('.searchcourses > .container')) {
          $('.searchcourses > .container').append('<form id="coursesearch" action="./course/search.php">' + courseSearch + '</div>');
        }
        if ($('#region-main #coursesearch')) {
          $('#region-main #coursesearch').remove();
        }

      };
      if ($('#coursesearch').length === 0) {
        $('#page .searchcourses').remove();
      }
    } catch (ignore) {}

    /*=====
    ======= Search Course Section End============
============*/

    /*=====
           ======= Front page course placement start ============
       ============*/
    try {
      var frontpageAvailableCourseList = $('#frontpage-available-course-list').html();
      if (typeof frontpageAvailableCourseList !== 'undefined' && frontpageAvailableCourseList !== null) {
        if ($('#allcourses')) {
          $('#allcourses > .container').append('<div id="frontpage-available-course-list">' + frontpageAvailableCourseList + '</div>');
        }
        if ($('#region-main #frontpage-available-course-list')) {
          $('#region-main #frontpage-available-course-list').remove();
        }

      };
      if ($('#frontpage-available-course-list').length === 0) {
        if ($('#page #allcourses')) {
          $('#page #allcourses').remove();
        }
      }

      if ($('#frontpage-available-course-list > h2')) {
        $('#frontpage-available-course-list h2')[0].innerHTML = "Courses We Provided";
        $('#frontpage-available-course-list > h2').after('<p id="allcoursestagline" class="tagline"></p>');
        var allCoursesTag = document.getElementById("allcoursestagline") ? document.getElementById("allcoursestagline").innerHTML = allcoursestagline : '';
      }
    } catch (ignore) {}
    /*=====
            ======= Front page course placement end ============
        ============*/

    /*=====
            ======= More Less Content============
        ============*/

    try {
      // Configure/customize these variables.
      var showChar = 55; // How many characters are shown by default
      var ellipsestext = "";
      var moretext = "...More";
      var lesstext = "...Less";


      $('.frontpage-course-list-all .content .summary, .frontpage-course-list-enrolled .content .summary, #CustomCategories .category .categorydescription').each(function (index, obj) {
        var tHTML = "";
        var teachers = $(obj).find('.teachers');
        if (teachers.length > 0) {
          var tHTML = teachers.html();
        }
        if ($(this).children('.teachers')) {
          $(this).children('.teachers').remove();
        }
        var content = $(this).html();

        if (content.length > showChar) {
          content = strip(content);

          function strip(html) {
            var tmp = document.createElement("DIV");
            tmp.innerHTML = html;
            return tmp.textContent || tmp.innerText;
          }
          var c = content.substr(0, showChar);
          var h = content.substr(showChar, content.length - showChar);

          var html = c + '<span class="moreellipses">' + ellipsestext + ' </span><span class="morecontent"><span>' + h + "<ul class='teachers'>" + tHTML + "</ul>" + '</span>  <a href="" class="morelink">' + moretext + '</a></span>';

          $(this).html(html);
          var teachersNode = $(this).children('.morecontent').children('span').children('.teachers');
          if (teachersNode) {
            var tInnerHTML = teachersNode.html();
            if (tInnerHTML === "") {
              teachersNode.remove();
            }
          }

        }

      });
    } catch (ignore) {}

    /*=====
            ======= More Less Content End============
        ============*/

    /*=====
          ======= Home Page All Courses Start============
      ============*/
    try {
      var mainWrapper = $('.frontpage-course-list-all, .frontpage-course-list-enrolled, .course_category_tree');
      if (mainWrapper) {
        mainWrapper.each(function (ind, obj) {
          var coursebox = $(obj).find('.coursebox');
          if (coursebox) {
            coursebox.each(function (index, obj) {
              var courseimage = $(obj).find('.content .courseimage');
              var summaryNode = $(obj).find('.content .summary');
              var teacherNode = $(obj).find('.content ul.teachers');
              var moreContentNode = summaryNode && summaryNode.find(".morecontent span");
              var findDiv = $(obj).find('.info');
              if (courseimage.length > 0) {
                courseimage.insertBefore(findDiv);
              }else{
                $(obj).find('.content').addClass("nonimage");
              }
              if (findDiv && summaryNode) {
                findDiv.insertBefore(summaryNode);
              }

              if (teacherNode.length > 0 && moreContentNode.length > 0) {
                moreContentNode.append(teacherNode);
              }
            });
          }
        });
      }

      if ($(".frontpage-course-list-all > .coursebox")) {
        $("#allcourses .frontpage-course-list-all > .coursebox").wrapAll("<div id='allOurCourses' class='owl-carousel owl-theme owl-loaded owl-drag'></div>");
        $(".frontpage-course-list-all > .coursebox").addClass("item");
        $(".owl-item:first").addClass("active");
      }
      if ($('#allOurCourses')) {
        if ($('body').hasClass('dir-rtl') === true) {
          $('#allOurCourses').addClass('owl-rtl');
          $("#allOurCourses").owlCarousel({
            rtl: true,
            navigation: true,
            autoplay: true,
            slideSpeed: 300,
            paginationSpeed: 400,
            dots: false,
            responsiveClass: true,
            responsive: {
              0: {
                items: 1,
                nav: true
              },
              600: {
                items: 2,
                nav: true,
              },
              1000: {
                items: 4,
                nav: true,
              }
            }

          });
        } else {
          $("#allOurCourses").owlCarousel({
            rtl: false,
            navigation: true,
            autoplay: true,
            slideSpeed: 300,
            paginationSpeed: 400,
            dots: false,
            responsiveClass: true,
            responsive: {
              0: {
                items: 1,
                nav: true
              },
              600: {
                items: 2,
                nav: true,
              },
              1000: {
                items: 4,
                nav: true,
              }
            }

          });
        }
      }

      if ($("#owl-demo > .owl-nav")) {
        $("#owl-demo > .owl-nav").insertBefore(".frontpage-course-list-all > .owl-carousel");
      }


      /* Paging Morelink */
      if ($('.paging-morelink > a')) {
        $('.paging-morelink > a').addClass('paging-morelink-link');
      }
      var elements = document.getElementsByClassName('paging-morelink-link');
      if (elements) {
        for (var i = 0; i < elements.length; i++) {
          if (elements[i].innerHTML == 'All courses') {
            elements[i].innerHTML = "View all courses";
            break;
          }
        }
      }
      if ($('.paging-morelink > a')) {
        $(".paging-morelink > a").append("<i class='fa fa-long-arrow-right' aria-hidden='true'></i>");
      }
    } catch (ignore) {}
    /*=====
        ======= Home Page All Courses End============
    ============*/

    /*=====
        ======= Front page available course list "enter" start============
    ============*/

    try {
      var fpageCourseListAll = $("#frontpage-available-course-list");
      var fpageAllCourse = fpageCourseListAll && fpageCourseListAll.find(".frontpage-course-list-all");
      var owlItem = fpageAllCourse && fpageAllCourse.find(".owl-item .coursebox");
      owlItem.each(function (j, node) {
        $(node).mouseenter(function (event) {
          event.stopPropagation();
			if($(event.currentTarget).find('.content').length > 0 ){
				var contentTag = $(event.currentTarget).find('.content');
				if(contentTag.find(".info h3.coursename a").length > 0){
					var courseNameTag = contentTag && contentTag.find(".info h3.coursename a");
					var hrefTag = courseNameTag && courseNameTag[0].href;
					var summaryTag = contentTag && contentTag.find(".summary");
					if (summaryTag) {
						if (contentTag.find('.visitlink').length === 0) {

						  $("<div class='visitlink'><a href=' " + hrefTag + "'><span>Enter<i class='fa fa-arrow-circle-o-right' aria-hidden='true'></i></span></a></div>").insertAfter(summaryTag);

						}
					}
					
				}
			  
			}         
        });
    });

    } catch (ignore) {}

    try {
      if ($('#frontpage-available-course-list .coursebox .content') || $('#frontpage-course-list .coursebox .content')) {
        $.each($('#frontpage-available-course-list .coursebox .content, #frontpage-course-list .coursebox .content'), function (index, item) {
          $(item).attr('data-simplebar', "init");
        });
      }
    } catch (ignore) {}
    /*=====
          ======= Front page available course list "enter" end============
      ============*/

    /*=====
          ======= Home page Site News Start============
      ============*/

    var siteNewsForum = $('#site-news-forum').html();
    if (typeof siteNewsForum !== 'undefined' && siteNewsForum !== null) {
      if ($('.news-col8')) {
        $('.news-col8').append('<div id="site-news-forum">' + siteNewsForum + '</div>');
      }
      if ($('#region-main #site-news-forum')) {
        $('#region-main #site-news-forum').remove();
      }
    };
    if ($('#site-news-forum').length === 0) {
      $('#page .news-col8').remove();

    }

    if ($('#site-news-forum')) {
      $('#site-news-forum .forum-post-container').addClass('clearfix');
    }

    if ($('#site-news-forum h2').length !== 0) {
      $('#site-news-forum h2')[0].innerHTML = "Latest News";

    }

    /*=====
        ======= Home page Site News End============
    ============*/

    /*=====
          ======= Home Page Enrolled Courses Start============
      ============*/
    try {
      var frontpageCourseList = $('#frontpage-course-list').html();
      if (typeof frontpageCourseList !== 'undefined' && frontpageCourseList !== null) {
        if ($('#enrolledcourses')) {
          $('#enrolledcourses > .container').append('<div id="frontpage-course-list">' + frontpageCourseList + '</div>');
        }
        if ($('#region-main #frontpage-course-list')) {
          $('#region-main #frontpage-course-list').remove();
        }

      };
      if ($('#frontpage-course-list').length === 0) {
        if ($('#page #enrolledcourses')) {
          $('#page #enrolledcourses').remove();
        }
      }

      if ($('#frontpage-course-list > h2')) {
        $('#frontpage-course-list h2')[0].innerHTML = "Enrolled Courses";
        $('#frontpage-course-list > h2').after('<p id="mycoursestagline" class="tagline"></p>');
        var myCoursesTag = document.getElementById("mycoursestagline") ? document.getElementById("mycoursestagline").innerHTML = mycoursestagline : '';
      }

      if ($(".frontpage-course-list-enrolled > .coursebox")) {
        $("#enrolledcourses .frontpage-course-list-enrolled > .coursebox").wrapAll("<div id='myEnrolledCourses' class='owl-carousel owl-theme owl-loaded owl-drag'></div>");
        $(".frontpage-course-list-enrolled > .coursebox").addClass("item");
        $(".owl-item:first").addClass("active");
      }
      if ($('#myEnrolledCourses')) {
        if ($('body').hasClass('dir-rtl') === true) {
          $('#myEnrolledCourses').addClass('owl-rtl');
          $("#myEnrolledCourses").owlCarousel({
            rtl: true,
            navigation: true,
            autoplay: true,
            slideSpeed: 300,
            paginationSpeed: 400,
            dots: false,
            responsiveClass: true,
            responsive: {
              0: {
                items: 1,
                nav: true
              },
              600: {
                items: 2,
                nav: true,
              },
              1000: {
                items: 4,
                nav: true,
              }
            }

          });
        } else {
          $("#myEnrolledCourses").owlCarousel({
            rtl: false,
            navigation: true,
            autoplay: true,
            slideSpeed: 300,
            paginationSpeed: 400,
            dots: false,
            responsiveClass: true,
            responsive: {
              0: {
                items: 1,
                nav: true
              },
              600: {
                items: 2,
                nav: true,
              },
              1000: {
                items: 4,
                nav: true,
              }
            }

          });
        }
      }

      if ($("#owl-demo > .owl-nav")) {
        $("#owl-demo > .owl-nav").insertBefore(".frontpage-course-list-enrolled > .owl-carousel");
      }

      /* Paging Morelink */
      if ($('.paging-morelink > a')) {
        $('.paging-morelink > a').addClass('paging-morelink-link');
      }
      var elements = document.getElementsByClassName('paging-morelink-link');
      if (elements) {
        for (var i = 0; i < elements.length; i++) {
          if (elements[i].innerHTML == 'All courses') {
            elements[i].innerHTML = "View all courses";
            break;
          }
        }
      }
    } catch (ignore) {}
    /*=====
        ======= Home Page Enrolled Courses End============
    ============*/

    /*=====
        ======= Front page enrolled course list "enter" start============
    ============*/

    try {
      var fpageCourseList = $("#frontpage-course-list");
      var fpageEnrolledCourse = fpageCourseList && fpageCourseList.find(".frontpage-course-list-enrolled");
      var owlItem = fpageEnrolledCourse && fpageEnrolledCourse.find(".owl-item .coursebox");
      owlItem.each(function (j, node) {
        $(node).mouseenter(function (event) {
          event.stopPropagation();
          var contentTag = $(event.currentTarget).find('.content');
          var courseNameTag = contentTag && contentTag.find(".info h3.coursename a");
          var hrefTag = courseNameTag && courseNameTag[0].href;
          var summaryTag = contentTag && contentTag.find(".summary");
          if (summaryTag) {
            if (contentTag.find('.visitlink').length === 0) {
              $("<div class='visitlink'><a href=' " + hrefTag + "'><span>Enter<i class='fa fa-arrow-circle-o-right' aria-hidden='true'></i></span></a></div>").insertAfter(summaryTag);
            }
          }
        });
      });

    } catch (ignore) {}

    /*=====
          ======= Front page enrolled course list "enter" end============
      ============*/

    /*=====
    ======= For Main Calendar Section Start============
============*/

    $("body#page-calendar-view .calendar-controls").addClass("clearfix");

    /*=====
    ======= For Main Calendar Section End============
============*/

    /*=====
    ======= Morelink click action start============
============*/
    try {
      $(".morelink").click(function () {
        if ($(this).hasClass("less")) {
          $(this).removeClass("less");
          $(this).html(moretext);
        } else {
          $(this).addClass("less");
          $(this).html(lesstext);
        }
        $(this).parent().prev().toggle();
        $(this).prev().toggle();
        return false;
      });
    } catch (ignore) {}
    /*=====
    ======= Morelink click action end============
}
============*/

    /*=====
    ======= Photo Gallery Section Start============
============*/


    var selectedClass = "";
    $(".fil-cat").click(function () {
      selectedClass = $(this).attr("data-rel");
      $("#portfolio").fadeTo(100, 0.1);
      $("#portfolio div").not("." + selectedClass).fadeOut().removeClass('scale-anm');
      setTimeout(function () {
        $("." + selectedClass).fadeIn().addClass('scale-anm');
        $("#portfolio").fadeTo(300, 1);
      }, 300);

    });


    /*=====
    ======= Photo Gallery Section End============
============*/

  });

