<?php
   defined('MOODLE_INTERNAL') || die();
   
   klassroom_check_colourswitch();
   klassroom_initialise_colourswitcher($PAGE);
   
   user_preference_allow_ajax_update('drawer-open-nav', PARAM_ALPHA);
   require_once($CFG->libdir . '/behat/lib.php');
   //require_once(dirname(__FILE__).'/fonts.php');
   
   // General Settings
   
   if (!empty($PAGE->theme->settings->favicon)) {
             $favicon = $PAGE->theme->setting_file_url('favicon', 'favicon');
         } else {
             $favicon = $OUTPUT->image_url('favicon', 'theme');
         }
             $hasfacebook    = (empty($PAGE->theme->settings->facebook)) ? false : $PAGE->theme->settings->facebook;
         // If any of the above social networks are true, sets this to true.
         $hassocialnetworks = ($hasfacebook) ? true : false;
         
         $hastwitter    = (empty($PAGE->theme->settings->twitter)) ? false : $PAGE->theme->settings->twitter;
         // If any of the above social networks are true, sets this to true.
         $hassocialnetworks = ($hastwitter) ? true : false;
         
         $hasgoogleplus    = (empty($PAGE->theme->settings->googleplus)) ? false : $PAGE->theme->settings->googleplus;
         // If any of the above social networks are true, sets this to true.
         $hassocialnetworks = ($hasgoogleplus) ? true : false;
         
         $haspinterest    = (empty($PAGE->theme->settings->pinterest)) ? false : $PAGE->theme->settings->pinterest;
         // If any of the above social networks are true, sets this to true.
         $hassocialnetworks = ($haspinterest) ? true : false;
         
         $hasinstagram    = (empty($PAGE->theme->settings->instagram)) ? false : $PAGE->theme->settings->instagram;
         // If any of the above social networks are true, sets this to true.
         $hassocialnetworks = ($hasinstagram) ? true : false;
         
         $hasyoutube    = (empty($PAGE->theme->settings->youtube)) ? false : $PAGE->theme->settings->youtube;
         // If any of the above social networks are true, sets this to true.
         $hassocialnetworks = ($hasyoutube) ? true : false;
         
         $hasflickr    = (empty($PAGE->theme->settings->flickr)) ? false : $PAGE->theme->settings->flickr;
         // If any of the above social networks are true, sets this to true.
         $hassocialnetworks = ($hasflickr) ? true : false;
         
         $haswhatsapp    = (empty($PAGE->theme->settings->whatsapp)) ? false : $PAGE->theme->settings->whatsapp;
         // If any of the above social networks are true, sets this to true.
         $hassocialnetworks = ($haswhatsapp) ? true : false;
         
         $hasskype    = (empty($PAGE->theme->settings->skype)) ? false : $PAGE->theme->settings->skype;
         // If any of the above social networks are true, sets this to true.
         $hassocialnetworks = ($hasskype) ? true : false;
         
         $hasgithub    = (empty($PAGE->theme->settings->github)) ? false : $PAGE->theme->settings->github;
         // If any of the above social networks are true, sets this to true.
         $hassocialnetworks = ($hasgithub) ? true : false;
   
    if (!empty($PAGE->theme->settings->contactnumber)) {
      $contactnumber = theme_klassroom_get_setting('contactnumber',true);
      }else {
      $contactnumber = '';
      }
   
   if (!empty($PAGE->theme->settings->logo)) {
     $logourl = $PAGE->theme->setting_file_url('logo', 'logo');
   }else{
     $logourl =$OUTPUT->image_url('logo', 'theme');
   }
      if (!empty($PAGE->theme->settings->applynow)) {
        $applynow = theme_klassroom_get_setting('applynow',true);
      }else {
        $applynow = '';
      }
   if (!empty($PAGE->theme->settings->applynowurl)) {
        $applynowurl = theme_klassroom_get_setting('applynowurl',true);
      }else {
        $applynowurl = '';
      }
      if (!empty($PAGE->theme->settings->internalbannertagline)) {
        $internalbannertagline = theme_klassroom_get_setting('internalbannertagline',true);
      }else {
        $internalbannertagline = '';
      }
      $displaycolourswitchersection = (empty($PAGE->theme->settings->displaycolourswitchersection) ||$PAGE->theme->settings->displaycolourswitchersection < 1) ? 0 : 1;
   
      if (!empty($PAGE->theme->settings->colourswitcherheading)) {
        $colourswitcherheading = theme_klassroom_get_setting('colourswitcherheading',true);
      }else {
        $colourswitcherheading = '';
      }
      if (!empty($PAGE->theme->settings->colourswitchertagline)) {
        $colourswitchertagline = theme_klassroom_get_setting('colourswitchertagline',true);
      }else {
        $colourswitchertagline = '';
      }
      if (!empty($PAGE->theme->settings->colourswitcherdescription)) {
        $colourswitcherdescription = theme_klassroom_get_setting('colourswitcherdescription',true);
      }else {
        $colourswitcherdescription = '';
      }
        // Slider Section
   $displayslidersection = (empty($PAGE->theme->settings->displayslidersection) ||$PAGE->theme->settings->displayslidersection < 1) ? 0 : 1;
   
   if (!empty($PAGE->theme->settings->slider1image)) {
         $slider1image = $PAGE->theme->setting_file_url('slider1image', 'slider1image');
      } else {
          $slider1image = $OUTPUT->image_url('slider/slider1image', 'theme');
      }
   
      if (!empty($PAGE->theme->settings->slider1caption)) {
        $slider1caption = theme_klassroom_get_setting('slider1caption',true);
      }else {
        $slider1caption = '';
      }
      if (!empty($PAGE->theme->settings->slider1heading)) {
        $slider1heading = theme_klassroom_get_setting('slider1heading','format_html');
      }else {
        $slider1heading = '';
      }
      // Slider2
      if (!empty($PAGE->theme->settings->slider2image)) {
         $slider2image = $PAGE->theme->setting_file_url('slider2image', 'slider2image');
      } else {
          $slider2image = $OUTPUT->image_url('slider/slider2image', 'theme');
      }
   
      if (!empty($PAGE->theme->settings->slider2caption)) {
        $slider2caption = theme_klassroom_get_setting('slider2caption',true);
      }else {
        $slider2caption = '';
      }
   
   if (!empty($PAGE->theme->settings->slider2heading)) {
        $slider2heading = theme_klassroom_get_setting('slider2heading','format_html');
      }else {
        $slider2heading = '';
      }
   
      // Slider3
      if (!empty($PAGE->theme->settings->slider3image)) {
         $slider3image = $PAGE->theme->setting_file_url('slider3image', 'slider3image');
      } else {
          $slider3image = $OUTPUT->image_url('slider/slider3image', 'theme');
      }
   
      if (!empty($PAGE->theme->settings->slider3caption)) {
        $slider3caption = theme_klassroom_get_setting('slider3caption',true);
      }else {
        $slider3caption = '';
      }
   
   if (!empty($PAGE->theme->settings->slider3heading)) {
        $slider3heading = theme_klassroom_get_setting('slider3heading','format_html');
      }else {
        $slider3heading = '';
      }
   
      // Slider4
      if (!empty($PAGE->theme->settings->slider4image)) {
         $slider4image = $PAGE->theme->setting_file_url('slider4image', 'slider4image');
      } else {
          $slider4image = $OUTPUT->image_url('slider/slider4image', 'theme');
      }
      if (!empty($PAGE->theme->settings->slider4caption)) {
        $slider4caption = theme_klassroom_get_setting('slider4caption',true);
      }else {
        $slider4caption = '';
      }
      if (!empty($PAGE->theme->settings->slider4heading)) {
        $slider4heading = theme_klassroom_get_setting('slider4heading','format_html');
      }else {
        $slider4heading = '';
      }
      
   // Frontpage Settings
   
      if (!empty($PAGE->theme->settings->allcoursestagline)) {
        $allcoursestagline = theme_klassroom_get_setting('allcoursestagline',true);
      }else {
        $allcoursestagline = '';
      }
      if (!empty($PAGE->theme->settings->mycoursestagline)) {
        $mycoursestagline = theme_klassroom_get_setting('mycoursestagline',true);
      }else {
        $mycoursestagline = '';
      }
      if (!empty($PAGE->theme->settings->blockcustombutton)) {
        $blockcustombutton = theme_klassroom_get_setting('blockcustombutton',true);
      }else {
        $blockcustombutton = '';
      }
      if (!empty($PAGE->theme->settings->blockcustombuttonurl)) {
        $blockcustombuttonurl = theme_klassroom_get_setting('blockcustombuttonurl',true);
      }else {
        $blockcustombuttonurl = '';
      }
      if (!empty($PAGE->theme->settings->blockheading)) {
        $blockheading = theme_klassroom_get_setting('blockheading',true);
      }else {
        $blockheading = '';
      }
      if (!empty($PAGE->theme->settings->blocktagline)) {
        $blocktagline = theme_klassroom_get_setting('blocktagline',true);
      }else {
        $blocktagline = '';
      }
   $displayannouncementsection = (empty($PAGE->theme->settings->displayannouncementsection) ||$PAGE->theme->settings->displayannouncementsection < 1) ? 0 : 1;
   if (!empty($PAGE->theme->settings->announcementheading)) {
        $announcementheading = theme_klassroom_get_setting('announcementheading',true);
      }else {
        $announcementheading = '';
      }
   if (!empty($PAGE->theme->settings->announcementtagline)) {
        $announcementtagline = theme_klassroom_get_setting('announcementtagline',true);
      }else {
        $announcementtagline = '';
      }
   if (!empty($PAGE->theme->settings->buttonreadmore)) {
        $buttonreadmore = theme_klassroom_get_setting('buttonreadmore',true);
      }else {
        $buttonreadmore = '';
      }
   if (!empty($PAGE->theme->settings->buttonreadmoreurl)) {
        $buttonreadmoreurl = theme_klassroom_get_setting('buttonreadmoreurl',true);
      }else {
        $buttonreadmoreurl = '';
      }
   if (!empty($PAGE->theme->settings->buttonbuynow)) {
        $buttonbuynow = theme_klassroom_get_setting('buttonbuynow',true);
      }else {
        $buttonbuynow = '';
      }
   if (!empty($PAGE->theme->settings->buttonbuynowurl)) {
        $buttonbuynowurl = theme_klassroom_get_setting('buttonbuynowurl',true);
      }else {
        $buttonbuynowurl = '';
      }
   
   $displaywelcomesection = (empty($PAGE->theme->settings->displaywelcomesection) ||$PAGE->theme->settings->displaywelcomesection < 1) ? 0 : 1;
   
   if (!empty($PAGE->theme->settings->welcometagline)) {
        $welcometagline = theme_klassroom_get_setting('welcometagline',true);
      }else {
        $welcometagline = '';
      }
   
   if (!empty($PAGE->theme->settings->welcomeheading)) {
        $welcomeheading = theme_klassroom_get_setting('welcomeheading',true);
      }else {
        $welcomeheading = '';
      }
   if (!empty($PAGE->theme->settings->welcomedescription)) {
        $welcomedescription = theme_klassroom_get_setting('welcomedescription',true);
      }else {
        $welcomedescription = '';
      }
   if (!empty($PAGE->theme->settings->welcomelistone)) {
        $welcomelistone = theme_klassroom_get_setting('welcomelistone',true);
      }else {
        $welcomelistone = '';
      }
   if (!empty($PAGE->theme->settings->welcomelistoneurl)) {
        $welcomelistoneurl = theme_klassroom_get_setting('welcomelistoneurl',true);
      }else {
        $welcomelistoneurl = '';
      }
   if (!empty($PAGE->theme->settings->welcomelisttwo)) {
        $welcomelisttwo = theme_klassroom_get_setting('welcomelisttwo',true);
      }else {
        $welcomelisttwo = '';
      }
   if (!empty($PAGE->theme->settings->welcomelisttwourl)) {
        $welcomelisttwourl = theme_klassroom_get_setting('welcomelisttwourl',true);
      }else {
        $welcomelisttwourl = '';
      }
   if (!empty($PAGE->theme->settings->welcomelistthree)) {
        $welcomelistthree = theme_klassroom_get_setting('welcomelistthree',true);
      }else {
        $welcomelistthree = '';
      }
   if (!empty($PAGE->theme->settings->welcomelistthreeurl)) {
        $welcomelistthreeurl = theme_klassroom_get_setting('welcomelistthreeurl',true);
      }else {
        $welcomelistthreeurl = '';
      }
   $displaycustomsection = (empty($PAGE->theme->settings->displaycustomsection) ||$PAGE->theme->settings->displaycustomsection < 1) ? 0 : 1;
   
   if (!empty($PAGE->theme->settings->custombox1heading)) {
        $custombox1heading = theme_klassroom_get_setting('custombox1heading',true);
      }else {
        $custombox1heading = '';
      }
   if (!empty($PAGE->theme->settings->custombox1description)) {
        $custombox1description = theme_klassroom_get_setting('custombox1description',true);
      }else {
        $custombox1description = '';
      }
   if (!empty($PAGE->theme->settings->custombox2heading)) {
        $custombox2heading = theme_klassroom_get_setting('custombox2heading',true);
      }else {
        $custombox2heading = '';
      }
   if (!empty($PAGE->theme->settings->custombox2description)) {
        $custombox2description = theme_klassroom_get_setting('custombox2description',true);
      }else {
        $custombox2description = '';
      }
   if (!empty($PAGE->theme->settings->custombox3heading)) {
        $custombox3heading = theme_klassroom_get_setting('custombox3heading',true);
      }else {
        $custombox3heading = '';
      }
   if (!empty($PAGE->theme->settings->custombox3description)) {
        $custombox3description = theme_klassroom_get_setting('custombox3description',true);
      }else {
        $custombox3description = '';
      }
   if (!empty($PAGE->theme->settings->custombox4heading)) {
        $custombox4heading = theme_klassroom_get_setting('custombox4heading',true);
      }else {
        $custombox4heading = '';
      }
   if (!empty($PAGE->theme->settings->custombox4description)) {
        $custombox4description = theme_klassroom_get_setting('custombox4description',true);
      }else {
        $custombox4description = '';
      }
   
   $displayfeaturedpostssection = (empty($PAGE->theme->settings->displayfeaturedpostssection) ||$PAGE->theme->settings->displayfeaturedpostssection < 1) ? 0 : 1;
   
   if (!empty($PAGE->theme->settings->featuredposttagline)) {
        $featuredposttagline = theme_klassroom_get_setting('featuredposttagline',true);
      }else {
        $featuredposttagline = '';
      }
   if (!empty($PAGE->theme->settings->featuredpostheading)) {
        $featuredpostheading = theme_klassroom_get_setting('featuredpostheading',true);
      }else {
        $featuredpostheading = '';
      }
   // featuredpostimage
      if (!empty($PAGE->theme->settings->featuredpostimage)) {
         $featuredpostimage = $PAGE->theme->setting_file_url('featuredpostimage', 'featuredpostimage');
      } else {
          $featuredpostimage = $OUTPUT->image_url('featuredpostimage', 'theme');
      }
   if (!empty($PAGE->theme->settings->featuredposturl)) {
        $featuredposturl = theme_klassroom_get_setting('featuredposturl',true);
      }else {
        $featuredposturl = '';
      }
   if (!empty($PAGE->theme->settings->featuredposttitle)) {
        $featuredposttitle = theme_klassroom_get_setting('featuredposttitle',true);
      }else {
        $featuredposttitle = '';
      }
   if (!empty($PAGE->theme->settings->featuredposttags)) {
        $featuredposttags = theme_klassroom_get_setting('featuredposttags','format_html');
      }else {
        $featuredposttags = '';
      }
   if (!empty($PAGE->theme->settings->featuredpostdate)) {
        $featuredpostdate = theme_klassroom_get_setting('featuredpostdate',true);
      }else {
        $featuredpostdate = '';
      }
   if (!empty($PAGE->theme->settings->featuredpostdescription)) {
        $featuredpostdescription = theme_klassroom_get_setting('featuredpostdescription',true);
      }else {
        $featuredpostdescription = '';
      }
   if (!empty($PAGE->theme->settings->featuredpostbuttontext)) {
        $featuredpostbuttontext = theme_klassroom_get_setting('featuredpostbuttontext',true);
      }else {
        $featuredpostbuttontext = '';
      }
   if (!empty($PAGE->theme->settings->featuredpostbuttonurl)) {
        $featuredpostbuttonurl = theme_klassroom_get_setting('featuredpostbuttonurl',true);
      }else {
        $featuredpostbuttonurl = '';
      }
   
   $displaymarketingsection = (empty($PAGE->theme->settings->displaymarketingsection) ||$PAGE->theme->settings->displaymarketingsection < 1) ? 0 : 1;
      
      if (!empty($PAGE->theme->settings->marketingheading)) {
        $marketingheading = theme_klassroom_get_setting('marketingheading',true);
      }else {
        $marketingheading = '';
      }
   
   // Category Section
   
      if (!empty($PAGE->theme->settings->categorytagline)) {
           $categorytagline = theme_klassroom_get_setting('categorytagline',true);
         }else {
           $categorytagline = '';
         }
   
         if (!empty($PAGE->theme->settings->enablecategoryimage)) {
           $enablecategoryimage = theme_klassroom_get_setting('enablecategoryimage',true);
         }else {
           $enablecategoryimage = '';
         }
         
         // Event Settings
   
   $displayeventsection = (empty($PAGE->theme->settings->displayeventsection) ||$PAGE->theme->settings->displayeventsection < 1) ? 0 : 1;
   
   if (!empty($PAGE->theme->settings->eventtagline)) {
        $eventtagline = theme_klassroom_get_setting('eventtagline',true);
      }else {
        $eventtagline = '';
      }
   if (!empty($PAGE->theme->settings->eventheading)) {
        $eventheading = theme_klassroom_get_setting('eventheading',true);
      }else {
        $eventheading = '';
      }
   
   $displayevent1box = (empty($PAGE->theme->settings->displayevent1box) ||$PAGE->theme->settings->displayevent1box < 1) ? 0 : 1;
   // event1image
      if (!empty($PAGE->theme->settings->event1image)) {
         $event1image = $PAGE->theme->setting_file_url('event1image', 'event1image');
      } else {
          $event1image = $OUTPUT->image_url('events/01', 'theme');
      }
   if (!empty($PAGE->theme->settings->event1day)) {
        $event1day = theme_klassroom_get_setting('event1day',true);
      }else {
        $event1day = '';
      }
   if (!empty($PAGE->theme->settings->eventmonthyear)) {
        $eventmonthyear = theme_klassroom_get_setting('eventmonthyear',true);
      }else {
        $eventmonthyear = '';
      }
   if (!empty($PAGE->theme->settings->event1monthyear)) {
        $event1monthyear = theme_klassroom_get_setting('event1monthyear',true);
      }else {
        $event1monthyear = '';
      }
   if (!empty($PAGE->theme->settings->event1title)) {
        $event1title = theme_klassroom_get_setting('event1title',true);
      }else {
        $event1title = '';
      }
   if (!empty($PAGE->theme->settings->event1titleurl)) {
        $event1titleurl = theme_klassroom_get_setting('event1titleurl',true);
      }else {
        $event1titleurl = '';
      }
   
   if (!empty($PAGE->theme->settings->event1location)) {
        $event1location = theme_klassroom_get_setting('event1location',true);
      }else {
        $event1location = '';
      }
   if (!empty($PAGE->theme->settings->event1description)) {
        $event1description = theme_klassroom_get_setting('event1description',true);
      }else {
        $event1description = '';
      }
   if (!empty($PAGE->theme->settings->event1viewmap)) {
        $event1viewmap = theme_klassroom_get_setting('event1viewmap',true);
      }else {
        $event1viewmap = '';
      }
   if (!empty($PAGE->theme->settings->event1viewmapurl)) {
        $event1viewmapurl = theme_klassroom_get_setting('event1viewmapurl',true);
      }else {
        $event1viewmapurl = '';
      }
   if (!empty($PAGE->theme->settings->event1price)) {
        $event1price = theme_klassroom_get_setting('event1price',true);
      }else {
        $event1price = '';
      }
   
   
   $displayevent2box = (empty($PAGE->theme->settings->displayevent2box) ||$PAGE->theme->settings->displayevent2box < 1) ? 0 : 1;
   // event2image
      if (!empty($PAGE->theme->settings->event2image)) {
         $event2image = $PAGE->theme->setting_file_url('event2image', 'event2image');
      } else {
          $event2image = $OUTPUT->image_url('events/02', 'theme');
      }
   if (!empty($PAGE->theme->settings->event2day)) {
        $event2day = theme_klassroom_get_setting('event2day',true);
      }else {
        $event2day = '';
      }
   if (!empty($PAGE->theme->settings->eventmonthyear)) {
        $eventmonthyear = theme_klassroom_get_setting('eventmonthyear',true);
      }else {
        $eventmonthyear = '';
      }
   if (!empty($PAGE->theme->settings->event2monthyear)) {
        $event2monthyear = theme_klassroom_get_setting('event2monthyear',true);
      }else {
        $event2monthyear = '';
      }
   if (!empty($PAGE->theme->settings->event2title)) {
        $event2title = theme_klassroom_get_setting('event2title',true);
      }else {
        $event2title = '';
      }
   if (!empty($PAGE->theme->settings->event2titleurl)) {
        $event2titleurl = theme_klassroom_get_setting('event2titleurl',true);
      }else {
        $event2titleurl = '';
      }
   
   if (!empty($PAGE->theme->settings->event2location)) {
        $event2location = theme_klassroom_get_setting('event2location',true);
      }else {
        $event2location = '';
      }
   if (!empty($PAGE->theme->settings->event2description)) {
        $event2description = theme_klassroom_get_setting('event2description',true);
      }else {
        $event2description = '';
      }
   if (!empty($PAGE->theme->settings->event2viewmap)) {
        $event2viewmap = theme_klassroom_get_setting('event2viewmap',true);
      }else {
        $event2viewmap = '';
      }
   if (!empty($PAGE->theme->settings->event2viewmapurl)) {
        $event2viewmapurl = theme_klassroom_get_setting('event2viewmapurl',true);
      }else {
        $event2viewmapurl = '';
      }
   if (!empty($PAGE->theme->settings->event2price)) {
        $event2price = theme_klassroom_get_setting('event2price',true);
      }else {
        $event2price = '';
      }
   
   $displayevent3box = (empty($PAGE->theme->settings->displayevent3box) ||$PAGE->theme->settings->displayevent3box < 1) ? 0 : 1;
   // event3image
      if (!empty($PAGE->theme->settings->event3image)) {
         $event3image = $PAGE->theme->setting_file_url('event3image', 'event3image');
      } else {
          $event3image = $OUTPUT->image_url('events/03', 'theme');
      }
   if (!empty($PAGE->theme->settings->event3day)) {
        $event3day = theme_klassroom_get_setting('event3day',true);
      }else {
        $event3day = '';
      }
   if (!empty($PAGE->theme->settings->eventmonthyear)) {
        $eventmonthyear = theme_klassroom_get_setting('eventmonthyear',true);
      }else {
        $eventmonthyear = '';
      }
   if (!empty($PAGE->theme->settings->event3monthyear)) {
        $event3monthyear = theme_klassroom_get_setting('event3monthyear',true);
      }else {
        $event3monthyear = '';
      }
   if (!empty($PAGE->theme->settings->event3title)) {
        $event3title = theme_klassroom_get_setting('event3title',true);
      }else {
        $event3title = '';
      }
   if (!empty($PAGE->theme->settings->event3titleurl)) {
        $event3titleurl = theme_klassroom_get_setting('event3titleurl',true);
      }else {
        $event3titleurl = '';
      }
   
   if (!empty($PAGE->theme->settings->event3location)) {
        $event3location = theme_klassroom_get_setting('event3location',true);
      }else {
        $event3location = '';
      }
   if (!empty($PAGE->theme->settings->event3description)) {
        $event3description = theme_klassroom_get_setting('event3description',true);
      }else {
        $event3description = '';
      }
   if (!empty($PAGE->theme->settings->event3viewmap)) {
        $event3viewmap = theme_klassroom_get_setting('event3viewmap',true);
      }else {
        $event3viewmap = '';
      }
   if (!empty($PAGE->theme->settings->event3viewmapurl)) {
        $event3viewmapurl = theme_klassroom_get_setting('event3viewmapurl',true);
      }else {
        $event3viewmapurl = '';
      }
   if (!empty($PAGE->theme->settings->event3price)) {
        $event3price = theme_klassroom_get_setting('event3price',true);
      }else {
        $event3price = '';
      }
   
   $displayevent4box = (empty($PAGE->theme->settings->displayevent4box) ||$PAGE->theme->settings->displayevent4box < 1) ? 0 : 1;
   // event4image
      if (!empty($PAGE->theme->settings->event4image)) {
         $event4image = $PAGE->theme->setting_file_url('event4image', 'event4image');
      } else {
          $event4image = $OUTPUT->image_url('events/04', 'theme');
      }
   if (!empty($PAGE->theme->settings->event4day)) {
        $event4day = theme_klassroom_get_setting('event4day',true);
      }else {
        $event4day = '';
      }
   if (!empty($PAGE->theme->settings->eventmonthyear)) {
        $eventmonthyear = theme_klassroom_get_setting('eventmonthyear',true);
      }else {
        $eventmonthyear = '';
      }
   if (!empty($PAGE->theme->settings->event4monthyear)) {
        $event4monthyear = theme_klassroom_get_setting('event4monthyear',true);
      }else {
        $event4monthyear = '';
      }
   if (!empty($PAGE->theme->settings->event4title)) {
        $event4title = theme_klassroom_get_setting('event4title',true);
      }else {
        $event4title = '';
      }
   if (!empty($PAGE->theme->settings->event4titleurl)) {
        $event4titleurl = theme_klassroom_get_setting('event4titleurl',true);
      }else {
        $event4titleurl = '';
      }
   
   if (!empty($PAGE->theme->settings->event4location)) {
        $event4location = theme_klassroom_get_setting('event4location',true);
      }else {
        $event4location = '';
      }
   if (!empty($PAGE->theme->settings->event4description)) {
        $event4description = theme_klassroom_get_setting('event4description',true);
      }else {
        $event4description = '';
      }
   if (!empty($PAGE->theme->settings->event4viewmap)) {
        $event4viewmap = theme_klassroom_get_setting('event4viewmap',true);
      }else {
        $event4viewmap = '';
      }
   if (!empty($PAGE->theme->settings->event4viewmapurl)) {
        $event4viewmapurl = theme_klassroom_get_setting('event4viewmapurl',true);
      }else {
        $event4viewmapurl = '';
      }
   if (!empty($PAGE->theme->settings->event4price)) {
        $event4price = theme_klassroom_get_setting('event4price',true);
      }else {
        $event4price = '';
      }
   
         // Project Settings
   
   $displayprojectsection = (empty($PAGE->theme->settings->displayprojectsection) ||$PAGE->theme->settings->displayprojectsection < 1) ? 0 : 1;
   
   if (!empty($PAGE->theme->settings->projecttagline)) {
        $projecttagline = theme_klassroom_get_setting('projecttagline',true);
      }else {
        $projecttagline = '';
      }
   if (!empty($PAGE->theme->settings->projectheading)) {
        $projectheading = theme_klassroom_get_setting('projectheading',true);
      }else {
        $projectheading = '';
      }
   $displayproject1box = (empty($PAGE->theme->settings->displayproject1box) ||$PAGE->theme->settings->displayproject1box < 1) ? 0 : 1;
   
   if (!empty($PAGE->theme->settings->project1title)) {
        $project1title = theme_klassroom_get_setting('project1title',true);
      }else {
        $project1title = '';
      }
   if (!empty($PAGE->theme->settings->project1description)) {
        $project1description = theme_klassroom_get_setting('project1description',true);
      }else {
        $project1description = '';
      }
   if (!empty($PAGE->theme->settings->project1readmore)) {
        $project1readmore = theme_klassroom_get_setting('project1readmore',true);
      }else {
        $project1readmore = '';
      }
   if (!empty($PAGE->theme->settings->project1readmoreurl)) {
        $project1readmoreurl = theme_klassroom_get_setting('project1readmoreurl',true);
      }else {
        $project1readmoreurl = '';
      }
   
   $displayproject2box = (empty($PAGE->theme->settings->displayproject2box) ||$PAGE->theme->settings->displayproject2box < 1) ? 0 : 1;
   
   if (!empty($PAGE->theme->settings->project2title)) {
        $project2title = theme_klassroom_get_setting('project2title',true);
      }else {
        $project2title = '';
      }
   if (!empty($PAGE->theme->settings->project2description)) {
        $project2description = theme_klassroom_get_setting('project2description',true);
      }else {
        $project2description = '';
      }
   if (!empty($PAGE->theme->settings->project2readmore)) {
        $project2readmore = theme_klassroom_get_setting('project2readmore',true);
      }else {
        $project2readmore = '';
      }
   if (!empty($PAGE->theme->settings->project2readmoreurl)) {
        $project2readmoreurl = theme_klassroom_get_setting('project2readmoreurl',true);
      }else {
        $project2readmoreurl = '';
      }
   
   $displayproject3box = (empty($PAGE->theme->settings->displayproject3box) ||$PAGE->theme->settings->displayproject3box < 1) ? 0 : 1;
   
   if (!empty($PAGE->theme->settings->project3title)) {
        $project3title = theme_klassroom_get_setting('project3title',true);
      }else {
        $project3title = '';
      }
   if (!empty($PAGE->theme->settings->project3description)) {
        $project3description = theme_klassroom_get_setting('project3description',true);
      }else {
        $project3description = '';
      }
   if (!empty($PAGE->theme->settings->project3readmore)) {
        $project3readmore = theme_klassroom_get_setting('project3readmore',true);
      }else {
        $project3readmore = '';
      }
   if (!empty($PAGE->theme->settings->project3readmoreurl)) {
        $project3readmoreurl = theme_klassroom_get_setting('project3readmoreurl',true);
      }else {
        $project3readmoreurl = '';
      }
   
   // projectaddbanner
      if (!empty($PAGE->theme->settings->projectaddbanner)) {
         $projectaddbanner = $PAGE->theme->setting_file_url('projectaddbanner', 'projectaddbanner');
      } else {
          $projectaddbanner = $OUTPUT->image_url('projectaddbanner', 'theme');
      }
   
      // Photo Gallery Settings
   
   $displayphotogallerysection = (empty($PAGE->theme->settings->displayphotogallerysection) ||$PAGE->theme->settings->displayphotogallerysection < 1) ? 0 : 1;
   
      if (!empty($PAGE->theme->settings->photogallerytagline)) {
        $photogallerytagline = theme_klassroom_get_setting('photogallerytagline',true);
      }else {
        $photogallerytagline = '';
      }
      if (!empty($PAGE->theme->settings->photogalleryheading)) {
        $photogalleryheading = theme_klassroom_get_setting('photogalleryheading',true);
      }else {
        $photogalleryheading = '';
      }
   
   // classroomimage1
      if (!empty($PAGE->theme->settings->classroomimage1)) {
         $classroomimage1 = $PAGE->theme->setting_file_url('classroomimage1', 'classroomimage1');
      } else {
          $classroomimage1 = $OUTPUT->image_url('photogallery/classroom/01', 'theme');
      }
      if (!empty($PAGE->theme->settings->classroomimage1caption)) {
        $classroomimage1caption = theme_klassroom_get_setting('classroomimage1caption',true);
      }else {
        $classroomimage1caption = '';
      }
      if (!empty($PAGE->theme->settings->classroomimage1buttontext)) {
        $classroomimage1buttontext = theme_klassroom_get_setting('classroomimage1buttontext',true);
      }else {
        $classroomimage1buttontext = '';
      }
      if (!empty($PAGE->theme->settings->classroomimage1buttonurl)) {
        $classroomimage1buttonurl = theme_klassroom_get_setting('classroomimage1buttonurl',true);
      }else {
        $classroomimage1buttonurl = '';
      }
   
   // classroomimage2
      if (!empty($PAGE->theme->settings->classroomimage2)) {
         $classroomimage2 = $PAGE->theme->setting_file_url('classroomimage2', 'classroomimage2');
      } else {
          $classroomimage2 = $OUTPUT->image_url('photogallery/classroom/02', 'theme');
      }
      if (!empty($PAGE->theme->settings->classroomimage2caption)) {
        $classroomimage2caption = theme_klassroom_get_setting('classroomimage2caption',true);
      }else {
        $classroomimage2caption = '';
      }
      if (!empty($PAGE->theme->settings->classroomimage2buttontext)) {
        $classroomimage2buttontext = theme_klassroom_get_setting('classroomimage2buttontext',true);
      }else {
        $classroomimage2buttontext = '';
      }
      if (!empty($PAGE->theme->settings->classroomimage2buttonurl)) {
        $classroomimage2buttonurl = theme_klassroom_get_setting('classroomimage2buttonurl',true);
      }else {
        $classroomimage2buttonurl = '';
      }
   
   // classroomimage3
      if (!empty($PAGE->theme->settings->classroomimage3)) {
         $classroomimage3 = $PAGE->theme->setting_file_url('classroomimage3', 'classroomimage3');
      } else {
          $classroomimage3 = $OUTPUT->image_url('photogallery/classroom/03', 'theme');
      }
      if (!empty($PAGE->theme->settings->classroomimage3caption)) {
        $classroomimage3caption = theme_klassroom_get_setting('classroomimage3caption',true);
      }else {
        $classroomimage3caption = '';
      }
      if (!empty($PAGE->theme->settings->classroomimage3buttontext)) {
        $classroomimage3buttontext = theme_klassroom_get_setting('classroomimage3buttontext',true);
      }else {
        $classroomimage3buttontext = '';
      }
      if (!empty($PAGE->theme->settings->classroomimage3buttonurl)) {
        $classroomimage3buttonurl = theme_klassroom_get_setting('classroomimage3buttonurl',true);
      }else {
        $classroomimage3buttonurl = '';
      }
   
   // classroomimage4
      if (!empty($PAGE->theme->settings->classroomimage4)) {
         $classroomimage4 = $PAGE->theme->setting_file_url('classroomimage4', 'classroomimage4');
      } else {
          $classroomimage4 = $OUTPUT->image_url('photogallery/classroom/04', 'theme');
      }
      if (!empty($PAGE->theme->settings->classroomimage4caption)) {
        $classroomimage4caption = theme_klassroom_get_setting('classroomimage4caption',true);
      }else {
        $classroomimage4caption = '';
      }
      if (!empty($PAGE->theme->settings->classroomimage4buttontext)) {
        $classroomimage4buttontext = theme_klassroom_get_setting('classroomimage4buttontext',true);
      }else {
        $classroomimage4buttontext = '';
      }
      if (!empty($PAGE->theme->settings->classroomimage4buttonurl)) {
        $classroomimage4buttonurl = theme_klassroom_get_setting('classroomimage4buttonurl',true);
      }else {
        $classroomimage4buttonurl = '';
      }
      
   // classroomimage5
      if (!empty($PAGE->theme->settings->classroomimage5)) {
         $classroomimage5 = $PAGE->theme->setting_file_url('classroomimage5', 'classroomimage5');
      } else {
          $classroomimage5 = $OUTPUT->image_url('photogallery/classroom/05', 'theme');
      }
      if (!empty($PAGE->theme->settings->classroomimage5caption)) {
        $classroomimage5caption = theme_klassroom_get_setting('classroomimage5caption',true);
      }else {
        $classroomimage5caption = '';
      }
      if (!empty($PAGE->theme->settings->classroomimage5buttontext)) {
        $classroomimage5buttontext = theme_klassroom_get_setting('classroomimage5buttontext',true);
      }else {
        $classroomimage5buttontext = '';
      }
      if (!empty($PAGE->theme->settings->classroomimage5buttonurl)) {
        $classroomimage5buttonurl = theme_klassroom_get_setting('classroomimage5buttonurl',true);
      }else {
        $classroomimage5buttonurl = '';
      }
   
   // classroomimage6
      if (!empty($PAGE->theme->settings->classroomimage6)) {
         $classroomimage6 = $PAGE->theme->setting_file_url('classroomimage6', 'classroomimage6');
      } else {
          $classroomimage6 = $OUTPUT->image_url('photogallery/classroom/06', 'theme');
      }
      if (!empty($PAGE->theme->settings->classroomimage6caption)) {
        $classroomimage6caption = theme_klassroom_get_setting('classroomimage6caption',true);
      }else {
        $classroomimage6caption = '';
      }
      if (!empty($PAGE->theme->settings->classroomimage6buttontext)) {
        $classroomimage6buttontext = theme_klassroom_get_setting('classroomimage6buttontext',true);
      }else {
        $classroomimage6buttontext = '';
      }
      if (!empty($PAGE->theme->settings->classroomimage6buttonurl)) {
        $classroomimage6buttonurl = theme_klassroom_get_setting('classroomimage6buttonurl',true);
      }else {
        $classroomimage6buttonurl = '';
      }
   
   // classroomimage7
      if (!empty($PAGE->theme->settings->classroomimage7)) {
         $classroomimage7 = $PAGE->theme->setting_file_url('classroomimage7', 'classroomimage7');
      } else {
          $classroomimage7 = $OUTPUT->image_url('photogallery/classroom/07', 'theme');
      }
      if (!empty($PAGE->theme->settings->classroomimage7caption)) {
        $classroomimage7caption = theme_klassroom_get_setting('classroomimage7caption',true);
      }else {
        $classroomimage7caption = '';
      }
      if (!empty($PAGE->theme->settings->classroomimage7buttontext)) {
        $classroomimage7buttontext = theme_klassroom_get_setting('classroomimage7buttontext',true);
      }else {
        $classroomimage7buttontext = '';
      }
      if (!empty($PAGE->theme->settings->classroomimage7buttonurl)) {
        $classroomimage7buttonurl = theme_klassroom_get_setting('classroomimage7buttonurl',true);
      }else {
        $classroomimage7buttonurl = '';
      }
   
   // classroomimage8
      if (!empty($PAGE->theme->settings->classroomimage8)) {
         $classroomimage8 = $PAGE->theme->setting_file_url('classroomimage8', 'classroomimage8');
      } else {
          $classroomimage8 = $OUTPUT->image_url('photogallery/classroom/08', 'theme');
      }
      if (!empty($PAGE->theme->settings->classroomimage8caption)) {
        $classroomimage8caption = theme_klassroom_get_setting('classroomimage8caption',true);
      }else {
        $classroomimage8caption = '';
      }
      if (!empty($PAGE->theme->settings->classroomimage8buttontext)) {
        $classroomimage8buttontext = theme_klassroom_get_setting('classroomimage8buttontext',true);
      }else {
        $classroomimage8buttontext = '';
      }
      if (!empty($PAGE->theme->settings->classroomimage8buttonurl)) {
        $classroomimage8buttonurl = theme_klassroom_get_setting('classroomimage8buttonurl',true);
      }else {
        $classroomimage8buttonurl = '';
      }
   
   // classroomimage9
      if (!empty($PAGE->theme->settings->classroomimage9)) {
         $classroomimage9 = $PAGE->theme->setting_file_url('classroomimage9', 'classroomimage9');
      } else {
          $classroomimage9 = $OUTPUT->image_url('photogallery/classroom/09', 'theme');
      }
      if (!empty($PAGE->theme->settings->classroomimage9caption)) {
        $classroomimage9caption = theme_klassroom_get_setting('classroomimage9caption',true);
      }else {
        $classroomimage9caption = '';
      }
      if (!empty($PAGE->theme->settings->classroomimage9buttontext)) {
        $classroomimage9buttontext = theme_klassroom_get_setting('classroomimage9buttontext',true);
      }else {
        $classroomimage9buttontext = '';
      }
      if (!empty($PAGE->theme->settings->classroomimage9buttonurl)) {
        $classroomimage9buttonurl = theme_klassroom_get_setting('classroomimage9buttonurl',true);
      }else {
        $classroomimage9buttonurl = '';
      }
   
   // eventimage1
      if (!empty($PAGE->theme->settings->eventimage1)) {
         $eventimage1 = $PAGE->theme->setting_file_url('eventimage1', 'eventimage1');
      } else {
          $eventimage1 = $OUTPUT->image_url('photogallery/event/01', 'theme');
      }
      if (!empty($PAGE->theme->settings->eventimage1caption)) {
        $eventimage1caption = theme_klassroom_get_setting('eventimage1caption',true);
      }else {
        $eventimage1caption = '';
      }
      if (!empty($PAGE->theme->settings->eventimage1buttontext)) {
        $eventimage1buttontext = theme_klassroom_get_setting('eventimage1buttontext',true);
      }else {
        $eventimage1buttontext = '';
      }
      if (!empty($PAGE->theme->settings->eventimage1buttonurl)) {
        $eventimage1buttonurl = theme_klassroom_get_setting('eventimage1buttonurl',true);
      }else {
        $eventimage1buttonurl = '';
      }
   
   // eventimage2
      if (!empty($PAGE->theme->settings->eventimage2)) {
         $eventimage2 = $PAGE->theme->setting_file_url('eventimage2', 'eventimage2');
      } else {
          $eventimage2 = $OUTPUT->image_url('photogallery/event/02', 'theme');
      }
      if (!empty($PAGE->theme->settings->eventimage2caption)) {
        $eventimage2caption = theme_klassroom_get_setting('eventimage2caption',true);
      }else {
        $eventimage2caption = '';
      }
      if (!empty($PAGE->theme->settings->eventimage2buttontext)) {
        $eventimage2buttontext = theme_klassroom_get_setting('eventimage2buttontext',true);
      }else {
        $eventimage2buttontext = '';
      }
      if (!empty($PAGE->theme->settings->eventimage2buttonurl)) {
        $eventimage2buttonurl = theme_klassroom_get_setting('eventimage2buttonurl',true);
      }else {
        $eventimage2buttonurl = '';
      }
   
   // eventimage3
      if (!empty($PAGE->theme->settings->eventimage3)) {
         $eventimage3 = $PAGE->theme->setting_file_url('eventimage3', 'eventimage3');
      } else {
          $eventimage3 = $OUTPUT->image_url('photogallery/event/03', 'theme');
      }
      if (!empty($PAGE->theme->settings->eventimage3caption)) {
        $eventimage3caption = theme_klassroom_get_setting('eventimage3caption',true);
      }else {
        $eventimage3caption = '';
      }
      if (!empty($PAGE->theme->settings->eventimage3buttontext)) {
        $eventimage3buttontext = theme_klassroom_get_setting('eventimage3buttontext',true);
      }else {
        $eventimage3buttontext = '';
      }
      if (!empty($PAGE->theme->settings->eventimage3buttonurl)) {
        $eventimage3buttonurl = theme_klassroom_get_setting('eventimage3buttonurl',true);
      }else {
        $eventimage3buttonurl = '';
      }
   
   // eventimage4
      if (!empty($PAGE->theme->settings->eventimage4)) {
         $eventimage4 = $PAGE->theme->setting_file_url('eventimage4', 'eventimage4');
      } else {
          $eventimage4 = $OUTPUT->image_url('photogallery/event/04', 'theme');
      }
      if (!empty($PAGE->theme->settings->eventimage4caption)) {
        $eventimage4caption = theme_klassroom_get_setting('eventimage4caption',true);
      }else {
        $eventimage4caption = '';
      }
      if (!empty($PAGE->theme->settings->eventimage4buttontext)) {
        $eventimage4buttontext = theme_klassroom_get_setting('eventimage4buttontext',true);
      }else {
        $eventimage4buttontext = '';
      }
      if (!empty($PAGE->theme->settings->eventimage4buttonurl)) {
        $eventimage4buttonurl = theme_klassroom_get_setting('eventimage4buttonurl',true);
      }else {
        $eventimage4buttonurl = '';
      }
   
   // eventimage5
      if (!empty($PAGE->theme->settings->eventimage5)) {
         $eventimage5 = $PAGE->theme->setting_file_url('eventimage5', 'eventimage5');
      } else {
          $eventimage5 = $OUTPUT->image_url('photogallery/event/05', 'theme');
      }
      if (!empty($PAGE->theme->settings->eventimage5caption)) {
        $eventimage5caption = theme_klassroom_get_setting('eventimage5caption',true);
      }else {
        $eventimage5caption = '';
      }
      if (!empty($PAGE->theme->settings->eventimage5buttontext)) {
        $eventimage5buttontext = theme_klassroom_get_setting('eventimage5buttontext',true);
      }else {
        $eventimage5buttontext = '';
      }
      if (!empty($PAGE->theme->settings->eventimage5buttonurl)) {
        $eventimage5buttonurl = theme_klassroom_get_setting('eventimage5buttonurl',true);
      }else {
        $eventimage5buttonurl = '';
      }
   
   // eventimage6
      if (!empty($PAGE->theme->settings->eventimage6)) {
         $eventimage6 = $PAGE->theme->setting_file_url('eventimage6', 'eventimage6');
      } else {
          $eventimage6 = $OUTPUT->image_url('photogallery/event/06', 'theme');
      }
      if (!empty($PAGE->theme->settings->eventimage6caption)) {
        $eventimage6caption = theme_klassroom_get_setting('eventimage6caption',true);
      }else {
        $eventimage6caption = '';
      }
      if (!empty($PAGE->theme->settings->eventimage6buttontext)) {
        $eventimage6buttontext = theme_klassroom_get_setting('eventimage6buttontext',true);
      }else {
        $eventimage6buttontext = '';
      }
      if (!empty($PAGE->theme->settings->eventimage6buttonurl)) {
        $eventimage6buttonurl = theme_klassroom_get_setting('eventimage6buttonurl',true);
      }else {
        $eventimage6buttonurl = '';
      }
   
   // seminarimage1
      if (!empty($PAGE->theme->settings->seminarimage1)) {
         $seminarimage1 = $PAGE->theme->setting_file_url('seminarimage1', 'seminarimage1');
      } else {
          $seminarimage1 = $OUTPUT->image_url('photogallery/seminar/01', 'theme');
      }
      if (!empty($PAGE->theme->settings->seminarimage1caption)) {
        $seminarimage1caption = theme_klassroom_get_setting('seminarimage1caption',true);
      }else {
        $seminarimage1caption = '';
      }
      if (!empty($PAGE->theme->settings->seminarimage1buttontext)) {
        $seminarimage1buttontext = theme_klassroom_get_setting('seminarimage1buttontext',true);
      }else {
        $seminarimage1buttontext = '';
      }
      if (!empty($PAGE->theme->settings->seminarimage1buttonurl)) {
        $seminarimage1buttonurl = theme_klassroom_get_setting('seminarimage1buttonurl',true);
      }else {
        $seminarimage1buttonurl = '';
      }
   
   // seminarimage2
      if (!empty($PAGE->theme->settings->seminarimage2)) {
         $seminarimage2 = $PAGE->theme->setting_file_url('seminarimage2', 'seminarimage2');
      } else {
          $seminarimage2 = $OUTPUT->image_url('photogallery/seminar/02', 'theme');
      }
      if (!empty($PAGE->theme->settings->seminarimage2caption)) {
        $seminarimage2caption = theme_klassroom_get_setting('seminarimage2caption',true);
      }else {
        $seminarimage2caption = '';
      }
      if (!empty($PAGE->theme->settings->seminarimage2buttontext)) {
        $seminarimage2buttontext = theme_klassroom_get_setting('seminarimage2buttontext',true);
      }else {
        $seminarimage2buttontext = '';
      }
      if (!empty($PAGE->theme->settings->seminarimage2buttonurl)) {
        $seminarimage2buttonurl = theme_klassroom_get_setting('seminarimage2buttonurl',true);
      }else {
        $seminarimage2buttonurl = '';
      }
   
   // seminarimage3
      if (!empty($PAGE->theme->settings->seminarimage3)) {
         $seminarimage3 = $PAGE->theme->setting_file_url('seminarimage3', 'seminarimage3');
      } else {
          $seminarimage3 = $OUTPUT->image_url('photogallery/seminar/03', 'theme');
      }
      if (!empty($PAGE->theme->settings->seminarimage3caption)) {
        $seminarimage3caption = theme_klassroom_get_setting('seminarimage3caption',true);
      }else {
        $seminarimage3caption = '';
      }
      if (!empty($PAGE->theme->settings->seminarimage3buttontext)) {
        $seminarimage3buttontext = theme_klassroom_get_setting('seminarimage3buttontext',true);
      }else {
        $seminarimage3buttontext = '';
      }
      if (!empty($PAGE->theme->settings->seminarimage3buttonurl)) {
        $seminarimage3buttonurl = theme_klassroom_get_setting('seminarimage3buttonurl',true);
      }else {
        $seminarimage3buttonurl = '';
      }
   
   // seminarimage4
      if (!empty($PAGE->theme->settings->seminarimage4)) {
         $seminarimage4 = $PAGE->theme->setting_file_url('seminarimage4', 'seminarimage4');
      } else {
          $seminarimage4 = $OUTPUT->image_url('photogallery/seminar/04', 'theme');
      }
      if (!empty($PAGE->theme->settings->seminarimage4caption)) {
        $seminarimage4caption = theme_klassroom_get_setting('seminarimage4caption',true);
      }else {
        $seminarimage4caption = '';
      }
      if (!empty($PAGE->theme->settings->seminarimage4buttontext)) {
        $seminarimage4buttontext = theme_klassroom_get_setting('seminarimage4buttontext',true);
      }else {
        $seminarimage4buttontext = '';
      }
      if (!empty($PAGE->theme->settings->seminarimage4buttonurl)) {
        $seminarimage4buttonurl = theme_klassroom_get_setting('seminarimage4buttonurl',true);
      }else {
        $seminarimage4buttonurl = '';
      }
   
   // seminarimage5
      if (!empty($PAGE->theme->settings->seminarimage5)) {
         $seminarimage5 = $PAGE->theme->setting_file_url('seminarimage5', 'seminarimage5');
      } else {
          $seminarimage5 = $OUTPUT->image_url('photogallery/seminar/05', 'theme');
      }
      if (!empty($PAGE->theme->settings->seminarimage5caption)) {
        $seminarimage5caption = theme_klassroom_get_setting('seminarimage5caption',true);
      }else {
        $seminarimage5caption = '';
      }
      if (!empty($PAGE->theme->settings->seminarimage5buttontext)) {
        $seminarimage5buttontext = theme_klassroom_get_setting('seminarimage5buttontext',true);
      }else {
        $seminarimage5buttontext = '';
      }
      if (!empty($PAGE->theme->settings->seminarimage5buttonurl)) {
        $seminarimage5buttonurl = theme_klassroom_get_setting('seminarimage5buttonurl',true);
      }else {
        $seminarimage5buttonurl = '';
      }
   
   // seminarimage6
      if (!empty($PAGE->theme->settings->seminarimage6)) {
         $seminarimage6 = $PAGE->theme->setting_file_url('seminarimage6', 'seminarimage6');
      } else {
          $seminarimage6 = $OUTPUT->image_url('photogallery/seminar/06', 'theme');
      }
      if (!empty($PAGE->theme->settings->seminarimage6caption)) {
        $seminarimage6caption = theme_klassroom_get_setting('seminarimage6caption',true);
      }else {
        $seminarimage6caption = '';
      }
      if (!empty($PAGE->theme->settings->seminarimage6buttontext)) {
        $seminarimage6buttontext = theme_klassroom_get_setting('seminarimage6buttontext',true);
      }else {
        $seminarimage6buttontext = '';
      }
      if (!empty($PAGE->theme->settings->seminarimage6buttonurl)) {
        $seminarimage6buttonurl = theme_klassroom_get_setting('seminarimage6buttonurl',true);
      }else {
        $seminarimage6buttonurl = '';
      }
   
   // Tutor Settings
   $displaytutorsection = (empty($PAGE->theme->settings->displaytutorsection) ||$PAGE->theme->settings->displaytutorsection < 1) ? 0 : 1;
      
      if (!empty($PAGE->theme->settings->tutorssectionheading )) {
        $tutorssectionheading  = theme_klassroom_get_setting('tutorssectionheading',true);
      }else {
        $tutorssectionheading  = '';
      }
      if (!empty($PAGE->theme->settings->tutorssectiontagline  )) {
        $tutorssectiontagline   = theme_klassroom_get_setting('tutorssectiontagline',true);
      }else {
        $tutorssectiontagline   = '';
      }
      $displaytutor1 = (empty($PAGE->theme->settings->displaytutor1) ||$PAGE->theme->settings->displaytutor1 < 1) ? 0 : 1;
      
      if (!empty($PAGE->theme->settings->tutor1image)) {
        $tutor1image = $PAGE->theme->setting_file_url('tutor1image', 'tutor1image');
      } else {
        $tutor1image = $OUTPUT->image_url('tutors/01', 'theme');
      }
      if (!empty($PAGE->theme->settings->tutor1name)) {
        $tutor1name = theme_klassroom_get_setting('tutor1name','format_html');
      }else {
        $tutor1name = '';
      }
      if (!empty($PAGE->theme->settings->tutor1url)) {
        $tutor1url = theme_klassroom_get_setting('tutor1url',true);
      }else {
        $tutor1url = '';
      }
      if (!empty($PAGE->theme->settings->tutor1designation)) {
        $tutor1designation = theme_klassroom_get_setting('tutor1designation',true);
      }else {
        $tutor1designation = '';
      }
      if (!empty($PAGE->theme->settings->tutor1rating)) {
        $tutor1rating = theme_klassroom_get_setting('tutor1rating','format_html');
      }else {
        $tutor1rating = '';
      }
      if (!empty($PAGE->theme->settings->tutor1comment)) {
        $tutor1comment = theme_klassroom_get_setting('tutor1comment',true);
      }else {
        $tutor1comment = '';
      }
      $displaytutor2 = (empty($PAGE->theme->settings->displaytutor2) ||$PAGE->theme->settings->displaytutor2 < 1) ? 0 : 1;
      
      if (!empty($PAGE->theme->settings->tutor2image)) {
        $tutor2image = $PAGE->theme->setting_file_url('tutor2image', 'tutor2image');
      } else {
        $tutor2image = $OUTPUT->image_url('tutors/02', 'theme');
      }
      if (!empty($PAGE->theme->settings->tutor2name)) {
        $tutor2name = theme_klassroom_get_setting('tutor2name','format_html');
      }else {
        $tutor2name = '';
      }
      if (!empty($PAGE->theme->settings->tutor2url)) {
        $tutor2url = theme_klassroom_get_setting('tutor2url',true);
      }else {
        $tutor2url = '';
      }
      if (!empty($PAGE->theme->settings->tutor2designation)) {
        $tutor2designation = theme_klassroom_get_setting('tutor2designation',true);
      }else {
        $tutor2designation = '';
      }
      if (!empty($PAGE->theme->settings->tutor2rating)) {
        $tutor2rating = theme_klassroom_get_setting('tutor2rating','format_html');
      }else {
        $tutor2rating = '';
      }
      if (!empty($PAGE->theme->settings->tutor2comment)) {
        $tutor2comment = theme_klassroom_get_setting('tutor2comment',true);
      }else {
        $tutor2comment = '';
      }
      $displaytutor3 = (empty($PAGE->theme->settings->displaytutor3) ||$PAGE->theme->settings->displaytutor3 < 1) ? 0 : 1;
      
      if (!empty($PAGE->theme->settings->tutor3image)) {
        $tutor3image = $PAGE->theme->setting_file_url('tutor3image', 'tutor3image');
      } else {
        $tutor3image = $OUTPUT->image_url('tutors/03', 'theme');
      }
      if (!empty($PAGE->theme->settings->tutor3name)) {
        $tutor3name = theme_klassroom_get_setting('tutor3name','format_html');
      }else {
        $tutor3name = '';
      }
      if (!empty($PAGE->theme->settings->tutor3url)) {
        $tutor3url = theme_klassroom_get_setting('tutor3url',true);
      }else {
        $tutor3url = '';
      }
      if (!empty($PAGE->theme->settings->tutor3designation)) {
        $tutor3designation = theme_klassroom_get_setting('tutor3designation',true);
      }else {
        $tutor3designation = '';
      }
      if (!empty($PAGE->theme->settings->tutor3rating)) {
        $tutor3rating = theme_klassroom_get_setting('tutor3rating','format_html');
      }else {
        $tutor3rating = '';
      }
      if (!empty($PAGE->theme->settings->tutor3comment)) {
        $tutor3comment = theme_klassroom_get_setting('tutor3comment',true);
      }else {
        $tutor3comment = '';
      }
      $displaytutor4 = (empty($PAGE->theme->settings->displaytutor4) ||$PAGE->theme->settings->displaytutor4 < 1) ? 0 : 1;
      
      if (!empty($PAGE->theme->settings->tutor4image)) {
        $tutor4image = $PAGE->theme->setting_file_url('tutor4image', 'tutor4image');
      } else {
        $tutor4image = $OUTPUT->image_url('tutors/04', 'theme');
      }
      if (!empty($PAGE->theme->settings->tutor4name)) {
        $tutor4name = theme_klassroom_get_setting('tutor4name','format_html');
      }else {
        $tutor4name = '';
      }
      if (!empty($PAGE->theme->settings->tutor4url)) {
        $tutor4url = theme_klassroom_get_setting('tutor4url',true);
      }else {
        $tutor4url = '';
      }
      if (!empty($PAGE->theme->settings->tutor4designation)) {
        $tutor4designation = theme_klassroom_get_setting('tutor4designation',true);
      }else {
        $tutor4designation = '';
      }
      if (!empty($PAGE->theme->settings->tutor4rating)) {
        $tutor4rating = theme_klassroom_get_setting('tutor4rating','format_html');
      }else {
        $tutor4rating = '';
      }
      if (!empty($PAGE->theme->settings->tutor4comment)) {
        $tutor4comment = theme_klassroom_get_setting('tutor4comment',true);
      }else {
        $tutor4comment = '';
      }
      $displaytutor5 = (empty($PAGE->theme->settings->displaytutor5) ||$PAGE->theme->settings->displaytutor5 < 1) ? 0 : 1;
      
      if (!empty($PAGE->theme->settings->tutor5image)) {
        $tutor5image = $PAGE->theme->setting_file_url('tutor5image', 'tutor5image');
      } else {
        $tutor5image = $OUTPUT->image_url('tutors/05', 'theme');
      }
      if (!empty($PAGE->theme->settings->tutor5name)) {
        $tutor5name = theme_klassroom_get_setting('tutor5name','format_html');
      }else {
        $tutor5name = '';
      }
      if (!empty($PAGE->theme->settings->tutor5url)) {
        $tutor5url = theme_klassroom_get_setting('tutor5url',true);
      }else {
        $tutor5url = '';
      }
      if (!empty($PAGE->theme->settings->tutor5designation)) {
        $tutor5designation = theme_klassroom_get_setting('tutor5designation',true);
      }else {
        $tutor5designation = '';
      }
      if (!empty($PAGE->theme->settings->tutor5rating)) {
        $tutor5rating = theme_klassroom_get_setting('tutor5rating','format_html');
      }else {
        $tutor5rating = '';
      }
      if (!empty($PAGE->theme->settings->tutor5comment)) {
        $tutor5comment = theme_klassroom_get_setting('tutor5comment',true);
      }else {
        $tutor5comment = '';
      }
      $displaytutor6 = (empty($PAGE->theme->settings->displaytutor6) ||$PAGE->theme->settings->displaytutor6 < 1) ? 0 : 1;
      
      if (!empty($PAGE->theme->settings->tutor6image)) {
        $tutor6image = $PAGE->theme->setting_file_url('tutor6image', 'tutor6image');
      } else {
        $tutor6image = $OUTPUT->image_url('tutors/06', 'theme');
      }
      if (!empty($PAGE->theme->settings->tutor6name)) {
        $tutor6name = theme_klassroom_get_setting('tutor6name','format_html');
      }else {
        $tutor6name = '';
      }
      if (!empty($PAGE->theme->settings->tutor6url)) {
        $tutor6url = theme_klassroom_get_setting('tutor6url',true);
      }else {
        $tutor6url = '';
      }
      if (!empty($PAGE->theme->settings->tutor6designation)) {
        $tutor6designation = theme_klassroom_get_setting('tutor6designation',true);
      }else {
        $tutor6designation = '';
      }
      if (!empty($PAGE->theme->settings->tutor6rating)) {
        $tutor6rating = theme_klassroom_get_setting('tutor6rating','format_html');
      }else {
        $tutor6rating = '';
      }
      if (!empty($PAGE->theme->settings->tutor6comment)) {
        $tutor6comment = theme_klassroom_get_setting('tutor6comment',true);
      }else {
        $tutor6comment = '';
      }
      $displaytutor7 = (empty($PAGE->theme->settings->displaytutor7) ||$PAGE->theme->settings->displaytutor7 < 1) ? 0 : 1;
      
      if (!empty($PAGE->theme->settings->tutor7image)) {
        $tutor7image = $PAGE->theme->setting_file_url('tutor7image', 'tutor7image');
      } else {
        $tutor7image = $OUTPUT->image_url('tutors/07', 'theme');
      }
      if (!empty($PAGE->theme->settings->tutor7name)) {
        $tutor7name = theme_klassroom_get_setting('tutor7name','format_html');
      }else {
        $tutor7name = '';
      }
      if (!empty($PAGE->theme->settings->tutor7url)) {
        $tutor7url = theme_klassroom_get_setting('tutor7url',true);
      }else {
        $tutor7url = '';
      }
      if (!empty($PAGE->theme->settings->tutor7designation)) {
        $tutor7designation = theme_klassroom_get_setting('tutor7designation',true);
      }else {
        $tutor7designation = '';
      }
      if (!empty($PAGE->theme->settings->tutor7rating)) {
        $tutor7rating = theme_klassroom_get_setting('tutor7rating','format_html');
      }else {
        $tutor7rating = '';
      }
      if (!empty($PAGE->theme->settings->tutor7comment)) {
        $tutor7comment = theme_klassroom_get_setting('tutor7comment',true);
      }else {
        $tutor7comment = '';
      }
      $displaytutor8 = (empty($PAGE->theme->settings->displaytutor8) ||$PAGE->theme->settings->displaytutor8 < 1) ? 0 : 1;
      
      if (!empty($PAGE->theme->settings->tutor8image)) {
        $tutor8image = $PAGE->theme->setting_file_url('tutor8image', 'tutor8image');
      } else {
        $tutor8image = $OUTPUT->image_url('tutors/08', 'theme');
      }
      if (!empty($PAGE->theme->settings->tutor8name)) {
        $tutor8name = theme_klassroom_get_setting('tutor8name','format_html');
      }else {
        $tutor8name = '';
      }
      if (!empty($PAGE->theme->settings->tutor8url)) {
        $tutor8url = theme_klassroom_get_setting('tutor8url',true);
      }else {
        $tutor8url = '';
      }
      if (!empty($PAGE->theme->settings->tutor8designation)) {
        $tutor8designation = theme_klassroom_get_setting('tutor8designation',true);
      }else {
        $tutor8designation = '';
      }
      if (!empty($PAGE->theme->settings->tutor8rating)) {
        $tutor8rating = theme_klassroom_get_setting('tutor8rating','format_html');
      }else {
        $tutor8rating = '';
      }
      if (!empty($PAGE->theme->settings->tutor8comment)) {
        $tutor8comment = theme_klassroom_get_setting('tutor8comment',true);
      }else {
        $tutor8comment = '';
      }
      $displaytutor9 = (empty($PAGE->theme->settings->displaytutor9) ||$PAGE->theme->settings->displaytutor9 < 1) ? 0 : 1;
      
      if (!empty($PAGE->theme->settings->tutor9image)) {
        $tutor9image = $PAGE->theme->setting_file_url('tutor9image', 'tutor9image');
      } else {
        $tutor9image = $OUTPUT->image_url('tutors/09', 'theme');
      }
      if (!empty($PAGE->theme->settings->tutor9name)) {
        $tutor9name = theme_klassroom_get_setting('tutor9name','format_html');
      }else {
        $tutor9name = '';
      }
      if (!empty($PAGE->theme->settings->tutor9url)) {
        $tutor9url = theme_klassroom_get_setting('tutor9url',true);
      }else {
        $tutor9url = '';
      }
      if (!empty($PAGE->theme->settings->tutor9designation)) {
        $tutor9designation = theme_klassroom_get_setting('tutor9designation',true);
      }else {
        $tutor9designation = '';
      }
      if (!empty($PAGE->theme->settings->tutor9rating)) {
        $tutor9rating = theme_klassroom_get_setting('tutor9rating','format_html');
      }else {
        $tutor9rating = '';
      }
      if (!empty($PAGE->theme->settings->tutor9comment)) {
        $tutor9comment = theme_klassroom_get_setting('tutor9comment',true);
      }else {
        $tutor9comment = '';
      }
         // Footer Settings
         
         $displayclientlogoarea = (empty($PAGE->theme->settings->displayclientlogoarea) ||$PAGE->theme->settings->displayclientlogoarea < 1) ? 0 : 1;
   
         if (!empty($PAGE->theme->settings->clientlogo1)) {
            $clientlogo1 = $PAGE->theme->setting_file_url('clientlogo1', 'clientlogo1');
         } else {
             $clientlogo1 = $OUTPUT->image_url('clientlogos/clogo_1', 'theme');
         }
         if (!empty($PAGE->theme->settings->clientlogo2)) {
            $clientlogo2 = $PAGE->theme->setting_file_url('clientlogo2', 'clientlogo2');
         } else {
             $clientlogo2 = $OUTPUT->image_url('clientlogos/clogo_2', 'theme');
         }
         if (!empty($PAGE->theme->settings->clientlogo3)) {
            $clientlogo3 = $PAGE->theme->setting_file_url('clientlogo3', 'clientlogo3');
         } else {
             $clientlogo3 = $OUTPUT->image_url('clientlogos/clogo_3', 'theme');
         }
         if (!empty($PAGE->theme->settings->clientlogo4)) {
            $clientlogo4 = $PAGE->theme->setting_file_url('clientlogo4', 'clientlogo4');
         } else {
             $clientlogo4 = $OUTPUT->image_url('clientlogos/clogo_4', 'theme');
         }
   
   
         if (!empty($PAGE->theme->settings->clientlogo5)) {
            $clientlogo5 = $PAGE->theme->setting_file_url('clientlogo5', 'clientlogo5');
         } else {
             $clientlogo5 = $OUTPUT->image_url('clientlogos/clogo_5', 'theme');
         }
   
         if (!empty($PAGE->theme->settings->clientlogo6)) {
            $clientlogo6 = $PAGE->theme->setting_file_url('clientlogo6', 'clientlogo6');
         } else {
             $clientlogo6 = $OUTPUT->image_url('clientlogos/clogo_6', 'theme');
         }
   
         if (!empty($PAGE->theme->settings->footerlogo)) {
           $footerlogo = $PAGE->theme->setting_file_url('footerlogo', 'footerlogo');
         } else {
           $footerlogo = $OUTPUT->image_url('footer-logo', 'theme');
         }
      
      if (!empty($PAGE->theme->settings->footersection1description)) {
        $footersection1description = theme_klassroom_get_setting('footersection1description',true);
      }else {
        $footersection1description = '';
      }
      if (!empty($PAGE->theme->settings->footersection2heading)) {
             $footersection2heading = theme_klassroom_get_setting('footersection2heading',true);
         }else {
             $footersection2heading = '';
         }
         if (!empty($PAGE->theme->settings->footersection2link1)) {
             $footersection2link1 = theme_klassroom_get_setting('footersection2link1',true);
         }else {
             $footersection2link1 = '';
         }
         if (!empty($PAGE->theme->settings->footersection2link1url)) {
             $footersection2link1url = theme_klassroom_get_setting('footersection2link1url',true);
         }else {
             $footersection2link1url = '';
         }
         if (!empty($PAGE->theme->settings->footersection2link2)) {
             $footersection2link2 = theme_klassroom_get_setting('footersection2link2',true);
         }else {
             $footersection2link2 = '';
         }
         if (!empty($PAGE->theme->settings->footersection2link2url)) {
             $footersection2link2url = theme_klassroom_get_setting('footersection2link2url',true);
         }else {
             $footersection2link2url = '';
         }
         if (!empty($PAGE->theme->settings->footersection2link3)) {
             $footersection2link3 = theme_klassroom_get_setting('footersection2link3',true);
         }else {
             $footersection2link3 = '';
         }
         if (!empty($PAGE->theme->settings->footersection2link3url)) {
             $footersection2link3url = theme_klassroom_get_setting('footersection2link3url',true);
         }else {
             $footersection2link3url = '';
         }
         if (!empty($PAGE->theme->settings->footersection2link4)) {
             $footersection2link4 = theme_klassroom_get_setting('footersection2link4',true);
         }else {
             $footersection2link4 = '';
         }
         if (!empty($PAGE->theme->settings->footersection2link4url)) {
             $footersection2link4url = theme_klassroom_get_setting('footersection2link4url',true);
         }else {
             $footersection2link4url = '';
         }
         if (!empty($PAGE->theme->settings->footersection2link5)) {
             $footersection2link5 = theme_klassroom_get_setting('footersection2link5',true);
         }else {
             $footersection2link5 = '';
         }
         if (!empty($PAGE->theme->settings->footersection2link5url)) {
             $footersection2link5url = theme_klassroom_get_setting('footersection2link5url',true);
         }else {
             $footersection2link5url = '';
         }
      if (!empty($PAGE->theme->settings->footersection3heading)) {
             $footersection3heading = theme_klassroom_get_setting('footersection3heading',true);
         }else {
             $footersection3heading = '';
         }
         if (!empty($PAGE->theme->settings->footersection3link1)) {
             $footersection3link1 = theme_klassroom_get_setting('footersection3link1',true);
         }else {
             $footersection3link1 = '';
         }
         if (!empty($PAGE->theme->settings->footersection3link1url)) {
             $footersection3link1url = theme_klassroom_get_setting('footersection3link1url',true);
         }else {
             $footersection3link1url = '';
         }
         if (!empty($PAGE->theme->settings->footersection3link2)) {
             $footersection3link2 = theme_klassroom_get_setting('footersection3link2',true);
         }else {
             $footersection3link2 = '';
         }
         if (!empty($PAGE->theme->settings->footersection3link2url)) {
             $footersection3link2url = theme_klassroom_get_setting('footersection3link2url',true);
         }else {
             $footersection3link2url = '';
         }
         if (!empty($PAGE->theme->settings->footersection3link3)) {
             $footersection3link3 = theme_klassroom_get_setting('footersection3link3',true);
         }else {
             $footersection3link3 = '';
         }
         if (!empty($PAGE->theme->settings->footersection3link3url)) {
             $footersection3link3url = theme_klassroom_get_setting('footersection3link3url',true);
         }else {
             $footersection3link3url = '';
         }
         if (!empty($PAGE->theme->settings->footersection3link4)) {
             $footersection3link4 = theme_klassroom_get_setting('footersection3link4',true);
         }else {
             $footersection3link4 = '';
         }
         if (!empty($PAGE->theme->settings->footersection3link4url)) {
             $footersection3link4url = theme_klassroom_get_setting('footersection3link4url',true);
         }else {
             $footersection3link4url = '';
         }
         if (!empty($PAGE->theme->settings->footersection3link5)) {
             $footersection3link5 = theme_klassroom_get_setting('footersection3link5',true);
         }else {
             $footersection3link5 = '';
         }
         if (!empty($PAGE->theme->settings->footersection3link5url)) {
             $footersection3link5url = theme_klassroom_get_setting('footersection3link5url',true);
         }else {
             $footersection3link5url = '';
         }
      if (!empty($PAGE->theme->settings->footersection4heading)) {
             $footersection4heading = theme_klassroom_get_setting('footersection4heading',true);
         }else {
             $footersection4heading = '';
         }
         if (!empty($PAGE->theme->settings->footersection4link1)) {
             $footersection4link1 = theme_klassroom_get_setting('footersection4link1',true);
         }else {
             $footersection4link1 = '';
         }
         if (!empty($PAGE->theme->settings->footersection4link1url)) {
             $footersection4link1url = theme_klassroom_get_setting('footersection4link1url',true);
         }else {
             $footersection4link1url = '';
         }
         if (!empty($PAGE->theme->settings->footersection4link2)) {
             $footersection4link2 = theme_klassroom_get_setting('footersection4link2',true);
         }else {
             $footersection4link2 = '';
         }
         if (!empty($PAGE->theme->settings->footersection4link2url)) {
             $footersection4link2url = theme_klassroom_get_setting('footersection4link2url',true);
         }else {
             $footersection4link2url = '';
         }
         if (!empty($PAGE->theme->settings->footersection4link3)) {
             $footersection4link3 = theme_klassroom_get_setting('footersection4link3',true);
         }else {
             $footersection4link3 = '';
         }
         if (!empty($PAGE->theme->settings->footersection4link3url)) {
             $footersection4link3url = theme_klassroom_get_setting('footersection4link3url',true);
         }else {
             $footersection4link3url = '';
         }
         if (!empty($PAGE->theme->settings->footersection4link4)) {
             $footersection4link4 = theme_klassroom_get_setting('footersection4link4',true);
         }else {
             $footersection4link4 = '';
         }
         if (!empty($PAGE->theme->settings->footersection4link4url)) {
             $footersection4link4url = theme_klassroom_get_setting('footersection4link4url',true);
         }else {
             $footersection4link4url = '';
         }
         if (!empty($PAGE->theme->settings->footersection4link5)) {
             $footersection4link5 = theme_klassroom_get_setting('footersection4link5',true);
         }else {
             $footersection4link5 = '';
         }
         if (!empty($PAGE->theme->settings->footersection4link5url)) {
             $footersection4link5url = theme_klassroom_get_setting('footersection4link5url',true);
         }else {
             $footersection4link5url = '';
         }
   
         
         if (!empty($PAGE->theme->settings->backtotop)) {
           $backtotop = theme_klassroom_get_setting('backtotop',true);
         }else {
           $backtotop = '';
         }
           $bodyclasses[] = 'klassroom-'.klassroom_get_colour();
   ?>
