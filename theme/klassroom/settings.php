<?php
defined('MOODLE_INTERNAL') || die;
require_once('mycform.php');

$ADMIN->add('themes', new admin_category('theme_klassroom', 'klassroom'));
$settings = new theme_boost_admin_settingspage_tabs('themesettingklassroom', get_string('configtitle', 'theme_klassroom'));
$page = new admin_settingpage('theme_klassroom_general', get_string('generalsettings', 'theme_klassroom'));
// favicon.
$name = 'theme_klassroom/favicon';
$title = get_string('favicon', 'theme_klassroom');
$description = get_string('favicondesc', 'theme_klassroom');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'favicon');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// facebook url setting.
$name = 'theme_klassroom/facebook';
$title = get_string('facebook', 'theme_klassroom');
$description = get_string('facebook_desc', 'theme_klassroom');
$default = 'http://www.facebook.com/mycollege';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// twitter url setting.
$name = 'theme_klassroom/twitter';
$title = get_string('twitter', 'theme_klassroom');
$description = get_string('twitter_desc', 'theme_klassroom');
$default = 'http://www.twitter.com/mycollege';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// googleplus url setting.
$name = 'theme_klassroom/googleplus';
$title = get_string('googleplus', 'theme_klassroom');
$description = get_string('googleplus_desc', 'theme_klassroom');
$default = 'http://www.googleplus.com/mycollege';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// pinterest url setting.
$name = 'theme_klassroom/pinterest';
$title = get_string('pinterest', 'theme_klassroom');
$description = get_string('pinterest_desc', 'theme_klassroom');
$default = 'http://www.pinterest.com/mycollege';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// instagram url setting.
$name = 'theme_klassroom/instagram';
$title = get_string('instagram', 'theme_klassroom');
$description = get_string('instagram_desc', 'theme_klassroom');
$default = 'http://www.instagram.com/mycollege';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// youtube url setting.
$name = 'theme_klassroom/youtube';
$title = get_string('youtube', 'theme_klassroom');
$description = get_string('youtube_desc', 'theme_klassroom');
$default = 'http://www.youtube.com/mycollege';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// flickr url setting.
$name = 'theme_klassroom/flickr';
$title = get_string('flickr', 'theme_klassroom');
$description = get_string('flickr_desc', 'theme_klassroom');
$default = 'http://www.flickr.com/mycollege';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// whatsapp url setting.
$name = 'theme_klassroom/whatsapp';
$title = get_string('whatsapp', 'theme_klassroom');
$description = get_string('whatsapp_desc', 'theme_klassroom');
$default = 'http://www.whatsapp.com/mycollege';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// skype url setting.
$name = 'theme_klassroom/skype';
$title = get_string('skype', 'theme_klassroom');
$description = get_string('skype_desc', 'theme_klassroom');
$default = 'http://www.skype.com/mycollege';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// github url setting.
$name = 'theme_klassroom/github';
$title = get_string('github', 'theme_klassroom');
$description = get_string('github_desc', 'theme_klassroom');
$default = 'http://www.github.com/mycollege';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// contactnumber.
$name = 'theme_klassroom/contactnumber';
$title = get_string('contactnumber', 'theme_klassroom');
$description = get_string('contactnumber_desc', 'theme_klassroom');
$default = '0 900 555 22 33';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Logo file setting.
$name = 'theme_klassroom/logo';
$title = get_string('logo','theme_klassroom');
$description = get_string('logo_desc', 'theme_klassroom');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'logo');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// applynow .
$name = 'theme_klassroom/applynow';
$title = get_string('applynow', 'theme_klassroom');
$description = get_string('applynowdesc', 'theme_klassroom');
$default = 'Apply Now';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// applynowurl .
$name = 'theme_klassroom/applynowurl';
$title = get_string('applynowurl', 'theme_klassroom');
$description = get_string('applynowurldesc', 'theme_klassroom');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

//  internalbanner setting.
$name = 'theme_klassroom/internalbanner';
$title = get_string('internalbanner', 'theme_klassroom');
$description = get_string('internalbanner_desc', 'theme_klassroom');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'internalbanner');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// internalbannertagline .
$name = 'theme_klassroom/internalbannertagline';
$title = get_string('internalbannertagline', 'theme_klassroom');
$description = get_string('internalbannertagline_desc', 'theme_klassroom');
$default = 'The only source of knowledge is experience.';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// displaycolourswitchersection setting.
$name = 'theme_klassroom/displaycolourswitchersection';
$title = get_string('displaycolourswitchersection','theme_klassroom');
$description = get_string('displaycolourswitchersection_desc', 'theme_klassroom');
$default = 1;
$choices = array(0=>'No', 1=>'Yes');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$page->add($setting);

// colourswitcherheading .
$name = 'theme_klassroom/colourswitcherheading';
$title = get_string('colourswitcherheading', 'theme_klassroom');
$description = get_string('colourswitcherheading_desc', 'theme_klassroom');
$default = 'CHOOSE THEME OPTIONS';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// colourswitchertagline .
$name = 'theme_klassroom/colourswitchertagline';
$title = get_string('colourswitchertagline', 'theme_klassroom');
$description = get_string('colourswitchertagline_desc', 'theme_klassroom');
$default = 'PREDEFINED COLOR SKINS';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// colourswitcherdescription .
$name = 'theme_klassroom/colourswitcherdescription';
$title = get_string('colourswitcherdescription', 'theme_klassroom');
$description = get_string('colourswitcherdescription_desc', 'theme_klassroom');
$default = 'You will find much more options for colors and styling in admin panel. This predefined colors can use all users.';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// sitebluecolor.
$name = 'theme_klassroom/sitebluecolor';
$title = get_string('sitebluecolor', 'theme_klassroom');
$description = get_string('sitebluecolor_desc', 'theme_klassroom');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '#002647');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// siteorangecolor.
$name = 'theme_klassroom/siteorangecolor';
$title = get_string('siteorangecolor', 'theme_klassroom');
$description = get_string('siteorangecolor_desc', 'theme_klassroom');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '#f9a53b');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// sitegreencolor.
$name = 'theme_klassroom/sitegreencolor';
$title = get_string('sitegreencolor', 'theme_klassroom');
$description = get_string('sitegreencolor_desc', 'theme_klassroom');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '#7eb34e');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// sitelightbluecolor.
$name = 'theme_klassroom/sitelightbluecolor';
$title = get_string('sitelightbluecolor', 'theme_klassroom');
$description = get_string('sitelightbluecolor_desc', 'theme_klassroom');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '#02a0b7');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// sitevioletcolor.
$name = 'theme_klassroom/sitevioletcolor';
$title = get_string('sitevioletcolor', 'theme_klassroom');
$description = get_string('sitevioletcolor_desc', 'theme_klassroom');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '#3f4aa5');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// siteredcolor.
$name = 'theme_klassroom/siteredcolor';
$title = get_string('siteredcolor', 'theme_klassroom');
$description = get_string('siteredcolor_desc', 'theme_klassroom');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '#f14f4a');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

//  loginbg setting.
$name = 'theme_klassroom/loginbg';
$title = get_string('loginbg', 'theme_klassroom');
$description = get_string('loginbg_desc', 'theme_klassroom');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'loginbg');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Must add the page after definiting all the settings!
$settings->add($page);
$page = new admin_settingpage('theme_klassroom_slider', get_string('slidersettings', 'theme_klassroom'));
// displayslidersection setting.
$name = 'theme_klassroom/displayslidersection';
$title = get_string('displayslidersection','theme_klassroom');
$description = get_string('displayslidersection_desc', 'theme_klassroom');
$default = 1;
$choices = array(0=>'No', 1=>'Yes');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$page->add($setting);
// slider1image setting.
$name = 'theme_klassroom/slider1image';
$title = get_string('slider1image','theme_klassroom');
$description = get_string('slider1image_desc', 'theme_klassroom');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'slider1image');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// slider1caption.
$name = 'theme_klassroom/slider1caption';
$title = get_string('slider1caption', 'theme_klassroom');
$description = get_string('slider1caption_desc', 'theme_klassroom');
$default = 'Campus Is An Online Platform';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// slider1heading .
$name = 'theme_klassroom/slider1heading';
$title = get_string('slider1heading', 'theme_klassroom');
$description = get_string('slider1heading_desc', 'theme_klassroom');
$default = 'Designed to Make Learning';
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// slider2image setting.
$name = 'theme_klassroom/slider2image';
$title = get_string('slider2image','theme_klassroom');
$description = get_string('slider2image_desc', 'theme_klassroom');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'slider2image');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// slider2caption.
$name = 'theme_klassroom/slider2caption';
$title = get_string('slider2caption', 'theme_klassroom');
$description = get_string('slider2caption_desc', 'theme_klassroom');
$default = 'Bring Tutoring Right to Your Home.';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// slider2heading .
$name = 'theme_klassroom/slider2heading';
$title = get_string('slider2heading', 'theme_klassroom');
$description = get_string('slider2heading_desc', 'theme_klassroom');
$default = 'Education is the Key to Your Success';
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// slider3image setting.
$name = 'theme_klassroom/slider3image';
$title = get_string('slider3image','theme_klassroom');
$description = get_string('slider3image_desc', 'theme_klassroom');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'slider3image');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// slider3caption.
$name = 'theme_klassroom/slider3caption';
$title = get_string('slider3caption', 'theme_klassroom');
$description = get_string('slider3caption_desc', 'theme_klassroom');
$default = 'Take the world best courses, online.';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// slider3heading .
$name = 'theme_klassroom/slider3heading';
$title = get_string('slider3heading', 'theme_klassroom');
$description = get_string('slider3heading_desc', 'theme_klassroom');
$default = 'Your Bright Future is Our Mission';
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// slider4image setting.
$name = 'theme_klassroom/slider4image';
$title = get_string('slider4image','theme_klassroom');
$description = get_string('slider4image_desc', 'theme_klassroom');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'slider4image');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);


// slider4caption.
$name = 'theme_klassroom/slider4caption';
$title = get_string('slider4caption', 'theme_klassroom');
$description = get_string('slider4caption_desc', 'theme_klassroom');
$default = 'Learning & Fun For Everyone.';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// slider4heading .
$name = 'theme_klassroom/slider4heading';
$title = get_string('slider4heading', 'theme_klassroom');
$description = get_string('slider4heading_desc', 'theme_klassroom');
$default = 'A community of Best & Inspired Learners';
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);


$settings->add($page);
// Front Page settings.
$page = new admin_settingpage('theme_klassroom_frontpage', get_string('frontpagesettings', 'theme_klassroom'));
// allcoursestagline .
$name = 'theme_klassroom/allcoursestagline';
$title = get_string('allcoursestagline', 'theme_klassroom');
$description = get_string('allcoursestagline_desc', 'theme_klassroom');
$default = 'All Our Available Courses Listed Below.';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// mycoursestagline .
$name = 'theme_klassroom/mycoursestagline';
$title = get_string('mycoursestagline', 'theme_klassroom');
$description = get_string('mycoursestagline_desc', 'theme_klassroom');
$default = 'You Can Enroll Wide Range Of Courses In This Canvas To Full Fill Your Dreams.';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// blockcustombutton.
$name = 'theme_klassroom/blockcustombutton';
$title = get_string('blockcustombutton', 'theme_klassroom');
$description = get_string('blockcustombutton_desc', 'theme_klassroom');
$default = 'Buy Now';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// blockcustombuttonurl.
$name = 'theme_klassroom/blockcustombuttonurl';
$title = get_string('blockcustombuttonurl', 'theme_klassroom');
$description = get_string('blockcustombuttonurl_desc', 'theme_klassroom');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// blockheading.
$name = 'theme_klassroom/blockheading';
$title = get_string('blockheading', 'theme_klassroom');
$description = get_string('blockheading_desc', 'theme_klassroom');
$default = 'Our Blocks';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// blocktagline.
$name = 'theme_klassroom/blocktagline';
$title = get_string('blocktagline', 'theme_klassroom');
$description = get_string('blocktagline_desc', 'theme_klassroom');
$default = 'You can see list of blocks here.';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// displayannouncementsection setting.
$name = 'theme_klassroom/displayannouncementsection';
$title = get_string('displayannouncementsection','theme_klassroom');
$description = get_string('displayannouncementsection_desc', 'theme_klassroom');
$default = 1;
$choices = array(0=>'No', 1=>'Yes');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$page->add($setting);

// announcementheading .
$name = 'theme_klassroom/announcementheading';
$title = get_string('announcementheading', 'theme_klassroom');
$description = get_string('announcementheading_desc', 'theme_klassroom');
$default = 'Powerful & easy to use';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// announcementtagline .
$name = 'theme_klassroom/announcementtagline';
$title = get_string('announcementtagline', 'theme_klassroom');
$description = get_string('announcementtagline_desc', 'theme_klassroom');
$default = 'Theme For University, School, eLearning and Online Tutorial';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// buttonreadmore .
$name = 'theme_klassroom/buttonreadmore';
$title = get_string('buttonreadmore', 'theme_klassroom');
$description = get_string('buttonreadmore_desc', 'theme_klassroom');
$default = 'Read More';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// buttonreadmoreurl .
$name = 'theme_klassroom/buttonreadmoreurl';
$title = get_string('buttonreadmoreurl', 'theme_klassroom');
$description = get_string('buttonreadmoreurl_desc', 'theme_klassroom');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// buttonbuynow .
$name = 'theme_klassroom/buttonbuynow';
$title = get_string('buttonbuynow', 'theme_klassroom');
$description = get_string('buttonbuynow_desc', 'theme_klassroom');
$default = 'Buy Now';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// buttonbuynowurl .
$name = 'theme_klassroom/buttonbuynowurl';
$title = get_string('buttonbuynowurl', 'theme_klassroom');
$description = get_string('buttonbuynowurl_desc', 'theme_klassroom');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// displaywelcomesection setting.
$name = 'theme_klassroom/displaywelcomesection';
$title = get_string('displaywelcomesection','theme_klassroom');
$description = get_string('displaywelcomesection_desc', 'theme_klassroom');
$default = 1;
$choices = array(0=>'No', 1=>'Yes');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$page->add($setting);

// welcometagline .
$name = 'theme_klassroom/welcometagline';
$title = get_string('welcometagline', 'theme_klassroom');
$description = get_string('welcometagline_desc', 'theme_klassroom');
$default = 'Welcome There!';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// welcomeheading .
$name = 'theme_klassroom/welcomeheading';
$title = get_string('welcomeheading', 'theme_klassroom');
$description = get_string('welcomeheading_desc', 'theme_klassroom');
$default = 'Welcome to Klassroom';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// welcomedescription .
$name = 'theme_klassroom/welcomedescription';
$title = get_string('welcomedescription', 'theme_klassroom');
$description = get_string('welcomedescription_desc', 'theme_klassroom');
$default = "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.";
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// welcomelistone .
$name = 'theme_klassroom/welcomelistone';
$title = get_string('welcomelistone', 'theme_klassroom');
$description = get_string('welcomelistone_desc', 'theme_klassroom');
$default = '20 Years Of Educational Experience';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// welcomelistoneurl .
$name = 'theme_klassroom/welcomelistoneurl';
$title = get_string('welcomelistoneurl', 'theme_klassroom');
$description = get_string('welcomelistoneurl_desc', 'theme_klassroom');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// welcomelisttwo .
$name = 'theme_klassroom/welcomelisttwo';
$title = get_string('welcomelisttwo', 'theme_klassroom');
$description = get_string('welcomelisttwo_desc', 'theme_klassroom');
$default = 'Practice Areas';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// welcomelisttwourl .
$name = 'theme_klassroom/welcomelisttwourl';
$title = get_string('welcomelisttwourl', 'theme_klassroom');
$description = get_string('welcomelisttwourl_desc', 'theme_klassroom');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// welcomelistthree .
$name = 'theme_klassroom/welcomelistthree';
$title = get_string('welcomelistthree', 'theme_klassroom');
$description = get_string('welcomelistthree_desc', 'theme_klassroom');
$default = 'Testimonials';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// welcomelistthreeurl .
$name = 'theme_klassroom/welcomelistthreeurl';
$title = get_string('welcomelistthreeurl', 'theme_klassroom');
$description = get_string('welcomelistthreeurl_desc', 'theme_klassroom');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// displaycustomsection setting.
$name = 'theme_klassroom/displaycustomsection';
$title = get_string('displaycustomsection','theme_klassroom');
$description = get_string('displaycustomsection_desc', 'theme_klassroom');
$default = 1;
$choices = array(0=>'No', 1=>'Yes');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$page->add($setting);

// custombox1heading .
$name = 'theme_klassroom/custombox1heading';
$title = get_string('custombox1heading', 'theme_klassroom');
$description = get_string('custombox1heading_desc', 'theme_klassroom');
$default = 'Modern and vibrant design';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// custombox1description .
$name = 'theme_klassroom/custombox1description';
$title = get_string('custombox1description', 'theme_klassroom');
$description = get_string('custombox1description_desc', 'theme_klassroom');
$default = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// custombox2heading .
$name = 'theme_klassroom/custombox2heading';
$title = get_string('custombox2heading', 'theme_klassroom');
$description = get_string('custombox2heading_desc', 'theme_klassroom');
$default = 'SEO and Speed optimization';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// custombox2description .
$name = 'theme_klassroom/custombox2description';
$title = get_string('custombox2description', 'theme_klassroom');
$description = get_string('custombox2description_desc', 'theme_klassroom');
$default = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// custombox3heading .
$name = 'theme_klassroom/custombox3heading';
$title = get_string('custombox3heading', 'theme_klassroom');
$description = get_string('custombox3heading_desc', 'theme_klassroom');
$default = 'Highly professional coding standard';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// custombox3description .
$name = 'theme_klassroom/custombox3description';
$title = get_string('custombox3description', 'theme_klassroom');
$description = get_string('custombox3description_desc', 'theme_klassroom');
$default = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// custombox4heading .
$name = 'theme_klassroom/custombox4heading';
$title = get_string('custombox4heading', 'theme_klassroom');
$description = get_string('custombox4heading_desc', 'theme_klassroom');
$default = 'Documentation and Support';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// custombox4description .
$name = 'theme_klassroom/custombox4description';
$title = get_string('custombox4description', 'theme_klassroom');
$description = get_string('custombox4description_desc', 'theme_klassroom');
$default = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

//  allcoursesbg setting.
$name = 'theme_klassroom/allcoursesbg';
$title = get_string('allcoursesbg','theme_klassroom');
$description = get_string('allcoursesbg_desc', 'theme_klassroom');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'allcoursesbg');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);


// displayfeaturedpostssection setting.
$name = 'theme_klassroom/displayfeaturedpostssection';
$title = get_string('displayfeaturedpostssection','theme_klassroom');
$description = get_string('displayfeaturedpostssection_desc', 'theme_klassroom');
$default = 1;
$choices = array(0=>'No', 1=>'Yes');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$page->add($setting);

// featuredposttagline .
$name = 'theme_klassroom/featuredposttagline';
$title = get_string('featuredposttagline', 'theme_klassroom');
$description = get_string('featuredposttagline_desc', 'theme_klassroom');
$default = 'From the blog';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// featuredpostheading .
$name = 'theme_klassroom/featuredpostheading';
$title = get_string('featuredpostheading', 'theme_klassroom');
$description = get_string('featuredpostheading_desc', 'theme_klassroom');
$default = 'Featured Posts';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// featuredpostimage setting.
$name = 'theme_klassroom/featuredpostimage';
$title = get_string('featuredpostimage','theme_klassroom');
$description = get_string('featuredpostimage_desc', 'theme_klassroom');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'featuredpostimage');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// featuredposturl .
$name = 'theme_klassroom/featuredposturl';
$title = get_string('featuredposturl', 'theme_klassroom');
$description = get_string('featuredposturl_desc', 'theme_klassroom');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// featuredposttitle .
$name = 'theme_klassroom/featuredposttitle';
$title = get_string('featuredposttitle', 'theme_klassroom');
$description = get_string('featuredposttitle_desc', 'theme_klassroom');
$default = '5 Ways to Help English Language Learners';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// featuredposttags .
$name = 'theme_klassroom/featuredposttags';
$title = get_string('featuredposttags', 'theme_klassroom');
$description = get_string('featuredposttags_desc', 'theme_klassroom');
$default = 'BOOKS, STORIES';
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// featuredpostdate .
$name = 'theme_klassroom/featuredpostdate';
$title = get_string('featuredpostdate', 'theme_klassroom');
$description = get_string('featuredpostdate_desc', 'theme_klassroom');
$default = 'February 28, 2017';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// featuredpostdescription .
$name = 'theme_klassroom/featuredpostdescription';
$title = get_string('featuredpostdescription', 'theme_klassroom');
$description = get_string('featuredpostdescription_desc', 'theme_klassroom');
$default = 'Contrary to popular belief, Lorem Ipsum is not simply random text.';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// featuredpostbuttontext .
$name = 'theme_klassroom/featuredpostbuttontext';
$title = get_string('featuredpostbuttontext', 'theme_klassroom');
$description = get_string('featuredpostbuttontext_desc', 'theme_klassroom');
$default = 'Learn More';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// featuredpostbuttonurl .
$name = 'theme_klassroom/featuredpostbuttonurl';
$title = get_string('featuredpostbuttonurl', 'theme_klassroom');
$description = get_string('featuredpostbuttonurl_desc', 'theme_klassroom');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

//  enrolledcoursesbg setting.
$name = 'theme_klassroom/enrolledcoursesbg';
$title = get_string('enrolledcoursesbg','theme_klassroom');
$description = get_string('enrolledcoursesbg_desc', 'theme_klassroom');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'enrolledcoursesbg');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);


// displaymarketingsection setting.
$name = 'theme_klassroom/displaymarketingsection';
$title = get_string('displaymarketingsection','theme_klassroom');
$description = get_string('displaymarketingsection_desc', 'theme_klassroom');
$default = 1;
$choices = array(0=>'No', 1=>'Yes');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$page->add($setting);
// marketingheading.
$name = 'theme_klassroom/marketingheading';
$title = get_string('marketingheading', 'theme_klassroom');
$description = get_string('marketingheading_desc', 'theme_klassroom');
$default = 'Committed to educating and nurturing all students so they may grow towards responsible global citizenship.';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$settings->add($page);
// Category setting page.
$page = new admin_settingpage('theme_klassroom_category', get_string('categorysettings', 'theme_klassroom'));
// categorytagline .
$name = 'theme_klassroom/categorytagline';
$title = get_string('categorytagline', 'theme_klassroom');
$description = get_string('categorytagline_desc', 'theme_klassroom');
$default = 'All Our Available Categories Listed Below.';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Category Image.
$name = 'theme_klassroom/enablecategoryimage';
$title = get_string('enablecategoryimage', 'theme_klassroom');
$description = get_string('enablecategoryimage_desc', 'theme_klassroom');
$default = true;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// We only want to output category Image options if the parent setting is enabled.
if (get_config('theme_klassroom', 'enablecategoryimage')) {
// Default image Selector.
$name = 'theme_klassroom/defaultcategoryimage';
$title = get_string('defaultcategoryimage', 'theme_klassroom');
$description = get_string('defaultcategoryimage_desc', 'theme_klassroom');
//$default = '';
$setting = new admin_setting_configstoredfile($name, $title, $description, 'defaultcategoryimage');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// enablecustomcategoryimage.
$name = 'theme_klassroom/enablecustomcategoryimage';
$title = get_string('enablecustomcategoryimage', 'theme_klassroom');
$description = get_string('enablecustomcategoryimage_desc', 'theme_klassroom');
$setting = new admin_setting_configcheckbox($name, $title, $description, 0);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
if (get_config('theme_klassroom', 'enablecustomcategoryimage')) { 
// This is the descriptor for Custom Category image.
$name = 'theme_klassroom/categoryimageinfo';
$heading = get_string('categoryimageinfo', 'theme_klassroom');
$information = get_string('categoryimageinfo_desc', 'theme_klassroom');
$setting = new admin_setting_heading($name, $heading, $information);
$page->add($setting);
// Get the default category icon.
$defaultcategoryimage = get_config('theme_klassroom', 'defaultcategoryimage');
if (empty($defaultcategoryimage)) {
$defaultcategoryimage = '';
}
// Get all category IDs and their pretty names.
//require_once($CFG->libdir . '/coursecatlib.php');
$coursecats = core_course_category::make_categories_list();
//echo '<pre>';print_r($coursecats); exit;
// Go through all categories and create the necessary settings.
foreach ($coursecats as $key => $value) {
$category = core_course_category::get($key);
// Category image for each category.
$name = 'theme_klassroom/categoryimage';
$title = $value;
$description = get_string('categoryimagecategory', 'theme_klassroom', array('category' => $value));
//$default = $defaultcategoryimage;
if($category->parent==0){
$setting = new admin_setting_configstoredfile($name . $key, $title, $description, 'categoryimage'.$key);
}
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
}
unset($coursecats);
}
}
$settings->add($page);
// Event setting page.
$page = new admin_settingpage('theme_klassroom_event', get_string('eventsettings', 'theme_klassroom'));
// displayeventsection setting.
$name = 'theme_klassroom/displayeventsection';
$title = get_string('displayeventsection','theme_klassroom');
$description = get_string('displayeventsection_desc', 'theme_klassroom');
$default = 1;
$choices = array(0=>'No', 1=>'Yes');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$page->add($setting);

//  eventsbg setting.
$name = 'theme_klassroom/eventsbg';
$title = get_string('eventsbg','theme_klassroom');
$description = get_string('eventsbg_desc', 'theme_klassroom');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'eventsbg');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// eventtagline .
$name = 'theme_klassroom/eventtagline';
$title = get_string('eventtagline', 'theme_klassroom');
$description = get_string('eventtagline_desc', 'theme_klassroom');
$default = 'ALL ABOUT EVENTS UPDATES';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// eventheading .
$name = 'theme_klassroom/eventheading';
$title = get_string('eventheading', 'theme_klassroom');
$description = get_string('eventheading_desc', 'theme_klassroom');
$default = 'Upcoming Events';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// displayevent1box setting.
$name = 'theme_klassroom/displayevent1box';
$title = get_string('displayevent1box','theme_klassroom');
$description = get_string('displayevent1box_desc', 'theme_klassroom');
$default = 1;
$choices = array(0=>'No', 1=>'Yes');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$page->add($setting);

// event1image setting.
$name = 'theme_klassroom/event1image';
$title = get_string('event1image','theme_klassroom');
$description = get_string('event1image_desc', 'theme_klassroom');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'event1image');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// event1day .
$name = 'theme_klassroom/event1day';
$title = get_string('event1day', 'theme_klassroom');
$description = get_string('event1day_desc', 'theme_klassroom');
$default = '31';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// event1monthyear .
$name = 'theme_klassroom/event1monthyear';
$title = get_string('event1monthyear', 'theme_klassroom');
$description = get_string('event1monthyear_desc', 'theme_klassroom');
$default = 'Dec 2017';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// event1title .
$name = 'theme_klassroom/event1title';
$title = get_string('event1title', 'theme_klassroom');
$description = get_string('event1title_desc', 'theme_klassroom');
$default = 'Art Open Day';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// event1titleurl .
$name = 'theme_klassroom/event1titleurl';
$title = get_string('event1titleurl', 'theme_klassroom');
$description = get_string('event1titleurl_desc', 'theme_klassroom');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// event1location .
$name = 'theme_klassroom/event1location';
$title = get_string('event1location', 'theme_klassroom');
$description = get_string('event1location_desc', 'theme_klassroom');
$default = 'Paris, France';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// event1description .
$name = 'theme_klassroom/event1description';
$title = get_string('event1description', 'theme_klassroom');
$description = get_string('event1description_desc', 'theme_klassroom');
$default = 'There are many variations of passages of Lorem Ipsum available…';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// event1viewmap .
$name = 'theme_klassroom/event1viewmap';
$title = get_string('event1viewmap', 'theme_klassroom');
$description = get_string('event1viewmap_desc', 'theme_klassroom');
$default = 'View Map';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// event1viewmapurl .
$name = 'theme_klassroom/event1viewmapurl';
$title = get_string('event1viewmapurl', 'theme_klassroom');
$description = get_string('event1viewmapurl_desc', 'theme_klassroom');
$default = 'https://www.google.com/maps';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// event1price .
$name = 'theme_klassroom/event1price';
$title = get_string('event1price', 'theme_klassroom');
$description = get_string('event1price_desc', 'theme_klassroom');
$default = '$99';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);


// displayevent2box setting.
$name = 'theme_klassroom/displayevent2box';
$title = get_string('displayevent2box','theme_klassroom');
$description = get_string('displayevent2box_desc', 'theme_klassroom');
$default = 1;
$choices = array(0=>'No', 1=>'Yes');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$page->add($setting);

// event2image setting.
$name = 'theme_klassroom/event2image';
$title = get_string('event2image','theme_klassroom');
$description = get_string('event2image_desc', 'theme_klassroom');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'event2image');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// event2day .
$name = 'theme_klassroom/event2day';
$title = get_string('event2day', 'theme_klassroom');
$description = get_string('event2day_desc', 'theme_klassroom');
$default = '28';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// event2monthyear .
$name = 'theme_klassroom/event2monthyear';
$title = get_string('event2monthyear', 'theme_klassroom');
$description = get_string('event2monthyear_desc', 'theme_klassroom');
$default = 'Mar 2017';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// event2title .
$name = 'theme_klassroom/event2title';
$title = get_string('event2title', 'theme_klassroom');
$description = get_string('event2title_desc', 'theme_klassroom');
$default = 'Conference';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// event2titleurl .
$name = 'theme_klassroom/event2titleurl';
$title = get_string('event2titleurl', 'theme_klassroom');
$description = get_string('event2titleurl_desc', 'theme_klassroom');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// event2location .
$name = 'theme_klassroom/event2location';
$title = get_string('event2location', 'theme_klassroom');
$description = get_string('event2location_desc', 'theme_klassroom');
$default = 'Paris, France';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// event2description .
$name = 'theme_klassroom/event2description';
$title = get_string('event2description', 'theme_klassroom');
$description = get_string('event2description_desc', 'theme_klassroom');
$default = 'There are many variations of passages of Lorem Ipsum available…';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// event2viewmap .
$name = 'theme_klassroom/event2viewmap';
$title = get_string('event2viewmap', 'theme_klassroom');
$description = get_string('event2viewmap_desc', 'theme_klassroom');
$default = 'View Map';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// event2viewmapurl .
$name = 'theme_klassroom/event2viewmapurl';
$title = get_string('event2viewmapurl', 'theme_klassroom');
$description = get_string('event2viewmapurl_desc', 'theme_klassroom');
$default = 'https://www.google.com/maps';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// event2price .
$name = 'theme_klassroom/event2price';
$title = get_string('event2price', 'theme_klassroom');
$description = get_string('event2price_desc', 'theme_klassroom');
$default = '$30';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);





// displayevent3box setting.
$name = 'theme_klassroom/displayevent3box';
$title = get_string('displayevent3box','theme_klassroom');
$description = get_string('displayevent3box_desc', 'theme_klassroom');
$default = 1;
$choices = array(0=>'No', 1=>'Yes');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$page->add($setting);

// event3image setting.
$name = 'theme_klassroom/event3image';
$title = get_string('event3image','theme_klassroom');
$description = get_string('event3image_desc', 'theme_klassroom');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'event3image');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// event3day .
$name = 'theme_klassroom/event3day';
$title = get_string('event3day', 'theme_klassroom');
$description = get_string('event3day_desc', 'theme_klassroom');
$default = '15';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// event3monthyear .
$name = 'theme_klassroom/event3monthyear';
$title = get_string('event3monthyear', 'theme_klassroom');
$description = get_string('event3monthyear_desc', 'theme_klassroom');
$default = 'Aug 2017';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// event3title .
$name = 'theme_klassroom/event3title';
$title = get_string('event3title', 'theme_klassroom');
$description = get_string('event3title_desc', 'theme_klassroom');
$default = 'Performance';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// event3titleurl .
$name = 'theme_klassroom/event3titleurl';
$title = get_string('event3titleurl', 'theme_klassroom');
$description = get_string('event3titleurl_desc', 'theme_klassroom');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// event3location .
$name = 'theme_klassroom/event3location';
$title = get_string('event3location', 'theme_klassroom');
$description = get_string('event3location_desc', 'theme_klassroom');
$default = 'Paris, France';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// event3description .
$name = 'theme_klassroom/event3description';
$title = get_string('event3description', 'theme_klassroom');
$description = get_string('event3description_desc', 'theme_klassroom');
$default = 'There are many variations of passages of Lorem Ipsum available…';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// event3viewmap .
$name = 'theme_klassroom/event3viewmap';
$title = get_string('event3viewmap', 'theme_klassroom');
$description = get_string('event3viewmap_desc', 'theme_klassroom');
$default = 'View Map';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// event3viewmapurl .
$name = 'theme_klassroom/event3viewmapurl';
$title = get_string('event3viewmapurl', 'theme_klassroom');
$description = get_string('event3viewmapurl_desc', 'theme_klassroom');
$default = 'https://www.google.com/maps';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// event3price .
$name = 'theme_klassroom/event3price';
$title = get_string('event3price', 'theme_klassroom');
$description = get_string('event3price_desc', 'theme_klassroom');
$default = '$45';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// displayevent4box setting.
$name = 'theme_klassroom/displayevent4box';
$title = get_string('displayevent4box','theme_klassroom');
$description = get_string('displayevent4box_desc', 'theme_klassroom');
$default = 1;
$choices = array(0=>'No', 1=>'Yes');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$page->add($setting);

// event4image setting.
$name = 'theme_klassroom/event4image';
$title = get_string('event4image','theme_klassroom');
$description = get_string('event4image_desc', 'theme_klassroom');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'event4image');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// event4day .
$name = 'theme_klassroom/event4day';
$title = get_string('event4day', 'theme_klassroom');
$description = get_string('event4day_desc', 'theme_klassroom');
$default = '26';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// event4monthyear .
$name = 'theme_klassroom/event4monthyear';
$title = get_string('event4monthyear', 'theme_klassroom');
$description = get_string('event4monthyear_desc', 'theme_klassroom');
$default = 'Jan 2017';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// event4title .
$name = 'theme_klassroom/event4title';
$title = get_string('event4title', 'theme_klassroom');
$description = get_string('event4title_desc', 'theme_klassroom');
$default = 'Lecture';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// event4titleurl .
$name = 'theme_klassroom/event4titleurl';
$title = get_string('event4titleurl', 'theme_klassroom');
$description = get_string('event4titleurl_desc', 'theme_klassroom');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// event4location .
$name = 'theme_klassroom/event4location';
$title = get_string('event4location', 'theme_klassroom');
$description = get_string('event4location_desc', 'theme_klassroom');
$default = 'Paris, France';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// event4description .
$name = 'theme_klassroom/event4description';
$title = get_string('event4description', 'theme_klassroom');
$description = get_string('event4description_desc', 'theme_klassroom');
$default = 'There are many variations of passages of Lorem Ipsum available…';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// event4viewmap .
$name = 'theme_klassroom/event4viewmap';
$title = get_string('event4viewmap', 'theme_klassroom');
$description = get_string('event4viewmap_desc', 'theme_klassroom');
$default = 'View Map';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// event4viewmapurl .
$name = 'theme_klassroom/event4viewmapurl';
$title = get_string('event4viewmapurl', 'theme_klassroom');
$description = get_string('event4viewmapurl_desc', 'theme_klassroom');
$default = 'https://www.google.com/maps';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// event4price .
$name = 'theme_klassroom/event4price';
$title = get_string('event4price', 'theme_klassroom');
$description = get_string('event4price_desc', 'theme_klassroom');
$default = '$78';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$settings->add($page);

// Project setting page.
$page = new admin_settingpage('theme_klassroom_project',  get_string('projectsettings', 'theme_klassroom'));

// displayprojectsection setting.
$name = 'theme_klassroom/displayprojectsection';
$title = get_string('displayprojectsection','theme_klassroom');
$description = get_string('displayprojectsection_desc', 'theme_klassroom');
$default = 1;
$choices = array(0=>'No', 1=>'Yes');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$page->add($setting);

// projecttagline .
$name = 'theme_klassroom/projecttagline';
$title = get_string('projecttagline', 'theme_klassroom');
$description = get_string('projecttagline_desc', 'theme_klassroom');
$default = 'ALL ABOUT PROJECTS UPDATES';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// projectheading .
$name = 'theme_klassroom/projectheading';
$title = get_string('projectheading', 'theme_klassroom');
$description = get_string('projectheading_desc', 'theme_klassroom');
$default = 'Projects';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// displayproject1box setting.
$name = 'theme_klassroom/displayproject1box';
$title = get_string('displayproject1box','theme_klassroom');
$description = get_string('displayproject1box_desc', 'theme_klassroom');
$default = 1;
$choices = array(0=>'No', 1=>'Yes');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$page->add($setting);

// project1title .
$name = 'theme_klassroom/project1title';
$title = get_string('project1title', 'theme_klassroom');
$description = get_string('project1title_desc', 'theme_klassroom');
$default = 'Innovation Projects News Reports';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// project1description .
$name = 'theme_klassroom/project1description';
$title = get_string('project1description', 'theme_klassroom');
$description = get_string('project1description_desc', 'theme_klassroom');
$default = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// project1readmore .
$name = 'theme_klassroom/project1readmore';
$title = get_string('project1readmore', 'theme_klassroom');
$description = get_string('project1readmore_desc', 'theme_klassroom');
$default = 'Read More';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// project1readmoreurl .
$name = 'theme_klassroom/project1readmoreurl';
$title = get_string('project1readmoreurl', 'theme_klassroom');
$description = get_string('project1readmoreurl_desc', 'theme_klassroom');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// displayproject2box setting.
$name = 'theme_klassroom/displayproject2box';
$title = get_string('displayproject2box','theme_klassroom');
$description = get_string('displayproject2box_desc', 'theme_klassroom');
$default = 1;
$choices = array(0=>'No', 1=>'Yes');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$page->add($setting);

// project2title .
$name = 'theme_klassroom/project2title';
$title = get_string('project2title', 'theme_klassroom');
$description = get_string('project2title_desc', 'theme_klassroom');
$default = 'Consumerism, Market and Childhood';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// project2description .
$name = 'theme_klassroom/project2description';
$title = get_string('project2description', 'theme_klassroom');
$description = get_string('project2description_desc', 'theme_klassroom');
$default = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// project2readmore .
$name = 'theme_klassroom/project2readmore';
$title = get_string('project2readmore', 'theme_klassroom');
$description = get_string('project2readmore_desc', 'theme_klassroom');
$default = 'Read More';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// project2readmoreurl .
$name = 'theme_klassroom/project2readmoreurl';
$title = get_string('project2readmoreurl', 'theme_klassroom');
$description = get_string('project2readmoreurl_desc', 'theme_klassroom');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);


// displayproject3box setting.
$name = 'theme_klassroom/displayproject3box';
$title = get_string('displayproject3box','theme_klassroom');
$description = get_string('displayproject3box_desc', 'theme_klassroom');
$default = 1;
$choices = array(0=>'No', 1=>'Yes');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$page->add($setting);

// project3title .
$name = 'theme_klassroom/project3title';
$title = get_string('project3title', 'theme_klassroom');
$description = get_string('project3title_desc', 'theme_klassroom');
$default = 'The Innovation Projects Report 2018-2019';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// project3description .
$name = 'theme_klassroom/project3description';
$title = get_string('project3description', 'theme_klassroom');
$description = get_string('project3description_desc', 'theme_klassroom');
$default = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// project3readmore .
$name = 'theme_klassroom/project3readmore';
$title = get_string('project3readmore', 'theme_klassroom');
$description = get_string('project3readmore_desc', 'theme_klassroom');
$default = 'Read More';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// project3readmoreurl .
$name = 'theme_klassroom/project3readmoreurl';
$title = get_string('project3readmoreurl', 'theme_klassroom');
$description = get_string('project3readmoreurl_desc', 'theme_klassroom');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// projectaddbanner setting.
$name = 'theme_klassroom/projectaddbanner';
$title = get_string('projectaddbanner','theme_klassroom');
$description = get_string('projectaddbanner_desc', 'theme_klassroom');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'projectaddbanner');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$settings->add($page);

// Photo Gallery Settings
$page = new admin_settingpage('theme_klassroom_photogallery',  get_string('photogallerysettings', 'theme_klassroom'));

// displayphotogallerysection setting.
$name = 'theme_klassroom/displayphotogallerysection';
$title = get_string('displayphotogallerysection','theme_klassroom');
$description = get_string('displayphotogallerysection_desc', 'theme_klassroom');
$default = 1;
$choices = array(0=>'No', 1=>'Yes');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$page->add($setting);

// photogallerytagline .
$name = 'theme_klassroom/photogallerytagline';
$title = get_string('photogallerytagline', 'theme_klassroom');
$description = get_string('photogallerytagline_desc', 'theme_klassroom');
$default = 'ALL OUR CAMPUS PHOTOS';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// photogalleryheading .
$name = 'theme_klassroom/photogalleryheading';
$title = get_string('photogalleryheading', 'theme_klassroom');
$description = get_string('photogalleryheading_desc', 'theme_klassroom');
$default = 'Campus Gallery';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// classroomimage1 setting.
$name = 'theme_klassroom/classroomimage1';
$title = get_string('classroomimage1','theme_klassroom');
$description = get_string('classroomimage1_desc', 'theme_klassroom');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'classroomimage1');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// classroomimage1caption .
$name = 'theme_klassroom/classroomimage1caption';
$title = get_string('classroomimage1caption', 'theme_klassroom');
$description = get_string('classroomimage1caption_desc', 'theme_klassroom');
$default = 'Classroom';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// classroomimage1buttontext .
$name = 'theme_klassroom/classroomimage1buttontext';
$title = get_string('classroomimage1buttontext', 'theme_klassroom');
$description = get_string('classroomimage1buttontext_desc', 'theme_klassroom');
$default = 'Link Here';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// classroomimage1buttonurl .
$name = 'theme_klassroom/classroomimage1buttonurl';
$title = get_string('classroomimage1buttonurl', 'theme_klassroom');
$description = get_string('classroomimage1buttonurl_desc', 'theme_klassroom');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// classroomimage2 setting.
$name = 'theme_klassroom/classroomimage2';
$title = get_string('classroomimage2','theme_klassroom');
$description = get_string('classroomimage2_desc', 'theme_klassroom');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'classroomimage2');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// classroomimage2caption .
$name = 'theme_klassroom/classroomimage2caption';
$title = get_string('classroomimage2caption', 'theme_klassroom');
$description = get_string('classroomimage2caption_desc', 'theme_klassroom');
$default = 'Classroom';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// classroomimage2buttontext .
$name = 'theme_klassroom/classroomimage2buttontext';
$title = get_string('classroomimage2buttontext', 'theme_klassroom');
$description = get_string('classroomimage2buttontext_desc', 'theme_klassroom');
$default = 'Link Here';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// classroomimage2buttonurl .
$name = 'theme_klassroom/classroomimage2buttonurl';
$title = get_string('classroomimage2buttonurl', 'theme_klassroom');
$description = get_string('classroomimage2buttonurl_desc', 'theme_klassroom');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// classroomimage3 setting.
$name = 'theme_klassroom/classroomimage3';
$title = get_string('classroomimage3','theme_klassroom');
$description = get_string('classroomimage3_desc', 'theme_klassroom');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'classroomimage3');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// classroomimage3caption .
$name = 'theme_klassroom/classroomimage3caption';
$title = get_string('classroomimage3caption', 'theme_klassroom');
$description = get_string('classroomimage3caption_desc', 'theme_klassroom');
$default = 'Classroom';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// classroomimage3buttontext .
$name = 'theme_klassroom/classroomimage3buttontext';
$title = get_string('classroomimage3buttontext', 'theme_klassroom');
$description = get_string('classroomimage3buttontext_desc', 'theme_klassroom');
$default = 'Link Here';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// classroomimage3buttonurl .
$name = 'theme_klassroom/classroomimage3buttonurl';
$title = get_string('classroomimage3buttonurl', 'theme_klassroom');
$description = get_string('classroomimage3buttonurl_desc', 'theme_klassroom');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// classroomimage4 setting.
$name = 'theme_klassroom/classroomimage4';
$title = get_string('classroomimage4','theme_klassroom');
$description = get_string('classroomimage4_desc', 'theme_klassroom');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'classroomimage4');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// classroomimage4caption .
$name = 'theme_klassroom/classroomimage4caption';
$title = get_string('classroomimage4caption', 'theme_klassroom');
$description = get_string('classroomimage4caption_desc', 'theme_klassroom');
$default = 'Classroom';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// classroomimage4buttontext .
$name = 'theme_klassroom/classroomimage4buttontext';
$title = get_string('classroomimage4buttontext', 'theme_klassroom');
$description = get_string('classroomimage4buttontext_desc', 'theme_klassroom');
$default = 'Link Here';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// classroomimage4buttonurl .
$name = 'theme_klassroom/classroomimage4buttonurl';
$title = get_string('classroomimage4buttonurl', 'theme_klassroom');
$description = get_string('classroomimage4buttonurl_desc', 'theme_klassroom');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// classroomimage5 setting.
$name = 'theme_klassroom/classroomimage5';
$title = get_string('classroomimage5','theme_klassroom');
$description = get_string('classroomimage5_desc', 'theme_klassroom');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'classroomimage5');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// classroomimage5caption .
$name = 'theme_klassroom/classroomimage5caption';
$title = get_string('classroomimage5caption', 'theme_klassroom');
$description = get_string('classroomimage5caption_desc', 'theme_klassroom');
$default = 'Classroom';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// classroomimage5buttontext .
$name = 'theme_klassroom/classroomimage5buttontext';
$title = get_string('classroomimage5buttontext', 'theme_klassroom');
$description = get_string('classroomimage5buttontext_desc', 'theme_klassroom');
$default = 'Link Here';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// classroomimage5buttonurl .
$name = 'theme_klassroom/classroomimage5buttonurl';
$title = get_string('classroomimage5buttonurl', 'theme_klassroom');
$description = get_string('classroomimage5buttonurl_desc', 'theme_klassroom');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// classroomimage6 setting.
$name = 'theme_klassroom/classroomimage6';
$title = get_string('classroomimage6','theme_klassroom');
$description = get_string('classroomimage6_desc', 'theme_klassroom');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'classroomimage6');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// classroomimage6caption .
$name = 'theme_klassroom/classroomimage6caption';
$title = get_string('classroomimage6caption', 'theme_klassroom');
$description = get_string('classroomimage6caption_desc', 'theme_klassroom');
$default = 'Classroom';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// classroomimage6buttontext .
$name = 'theme_klassroom/classroomimage6buttontext';
$title = get_string('classroomimage6buttontext', 'theme_klassroom');
$description = get_string('classroomimage6buttontext_desc', 'theme_klassroom');
$default = 'Link Here';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// classroomimage6buttonurl .
$name = 'theme_klassroom/classroomimage6buttonurl';
$title = get_string('classroomimage6buttonurl', 'theme_klassroom');
$description = get_string('classroomimage6buttonurl_desc', 'theme_klassroom');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// classroomimage7 setting.
$name = 'theme_klassroom/classroomimage7';
$title = get_string('classroomimage7','theme_klassroom');
$description = get_string('classroomimage7_desc', 'theme_klassroom');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'classroomimage7');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// classroomimage7caption .
$name = 'theme_klassroom/classroomimage7caption';
$title = get_string('classroomimage7caption', 'theme_klassroom');
$description = get_string('classroomimage7caption_desc', 'theme_klassroom');
$default = 'Classroom';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// classroomimage7buttontext .
$name = 'theme_klassroom/classroomimage7buttontext';
$title = get_string('classroomimage7buttontext', 'theme_klassroom');
$description = get_string('classroomimage7buttontext_desc', 'theme_klassroom');
$default = 'Link Here';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// classroomimage7buttonurl .
$name = 'theme_klassroom/classroomimage7buttonurl';
$title = get_string('classroomimage7buttonurl', 'theme_klassroom');
$description = get_string('classroomimage7buttonurl_desc', 'theme_klassroom');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// classroomimage8 setting.
$name = 'theme_klassroom/classroomimage8';
$title = get_string('classroomimage8','theme_klassroom');
$description = get_string('classroomimage8_desc', 'theme_klassroom');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'classroomimage8');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// classroomimage8caption .
$name = 'theme_klassroom/classroomimage8caption';
$title = get_string('classroomimage8caption', 'theme_klassroom');
$description = get_string('classroomimage8caption_desc', 'theme_klassroom');
$default = 'Classroom';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// classroomimage8buttontext .
$name = 'theme_klassroom/classroomimage8buttontext';
$title = get_string('classroomimage8buttontext', 'theme_klassroom');
$description = get_string('classroomimage8buttontext_desc', 'theme_klassroom');
$default = 'Link Here';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// classroomimage8buttonurl .
$name = 'theme_klassroom/classroomimage8buttonurl';
$title = get_string('classroomimage8buttonurl', 'theme_klassroom');
$description = get_string('classroomimage8buttonurl_desc', 'theme_klassroom');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// classroomimage9 setting.
$name = 'theme_klassroom/classroomimage9';
$title = get_string('classroomimage9','theme_klassroom');
$description = get_string('classroomimage9_desc', 'theme_klassroom');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'classroomimage9');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// classroomimage9caption .
$name = 'theme_klassroom/classroomimage9caption';
$title = get_string('classroomimage9caption', 'theme_klassroom');
$description = get_string('classroomimage9caption_desc', 'theme_klassroom');
$default = 'Classroom';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// classroomimage9buttontext .
$name = 'theme_klassroom/classroomimage9buttontext';
$title = get_string('classroomimage9buttontext', 'theme_klassroom');
$description = get_string('classroomimage9buttontext_desc', 'theme_klassroom');
$default = 'Link Here';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// classroomimage9buttonurl .
$name = 'theme_klassroom/classroomimage9buttonurl';
$title = get_string('classroomimage9buttonurl', 'theme_klassroom');
$description = get_string('classroomimage9buttonurl_desc', 'theme_klassroom');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// eventimage1 setting.
$name = 'theme_klassroom/eventimage1';
$title = get_string('eventimage1','theme_klassroom');
$description = get_string('eventimage1_desc', 'theme_klassroom');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'eventimage1');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// eventimage1caption .
$name = 'theme_klassroom/eventimage1caption';
$title = get_string('eventimage1caption', 'theme_klassroom');
$description = get_string('eventimage1caption_desc', 'theme_klassroom');
$default = 'Event';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// eventimage1buttontext .
$name = 'theme_klassroom/eventimage1buttontext';
$title = get_string('eventimage1buttontext', 'theme_klassroom');
$description = get_string('eventimage1buttontext_desc', 'theme_klassroom');
$default = 'Link Here';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// eventimage1buttonurl .
$name = 'theme_klassroom/eventimage1buttonurl';
$title = get_string('eventimage1buttonurl', 'theme_klassroom');
$description = get_string('eventimage1buttonurl_desc', 'theme_klassroom');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// eventimage2 setting.
$name = 'theme_klassroom/eventimage2';
$title = get_string('eventimage2','theme_klassroom');
$description = get_string('eventimage2_desc', 'theme_klassroom');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'eventimage2');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// eventimage2caption .
$name = 'theme_klassroom/eventimage2caption';
$title = get_string('eventimage2caption', 'theme_klassroom');
$description = get_string('eventimage2caption_desc', 'theme_klassroom');
$default = 'Event';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// eventimage2buttontext .
$name = 'theme_klassroom/eventimage2buttontext';
$title = get_string('eventimage2buttontext', 'theme_klassroom');
$description = get_string('eventimage2buttontext_desc', 'theme_klassroom');
$default = 'Link Here';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// eventimage2buttonurl .
$name = 'theme_klassroom/eventimage2buttonurl';
$title = get_string('eventimage2buttonurl', 'theme_klassroom');
$description = get_string('eventimage2buttonurl_desc', 'theme_klassroom');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// eventimage3 setting.
$name = 'theme_klassroom/eventimage3';
$title = get_string('eventimage3','theme_klassroom');
$description = get_string('eventimage3_desc', 'theme_klassroom');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'eventimage3');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// eventimage3caption .
$name = 'theme_klassroom/eventimage3caption';
$title = get_string('eventimage3caption', 'theme_klassroom');
$description = get_string('eventimage3caption_desc', 'theme_klassroom');
$default = 'Event';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// eventimage3buttontext .
$name = 'theme_klassroom/eventimage3buttontext';
$title = get_string('eventimage3buttontext', 'theme_klassroom');
$description = get_string('eventimage3buttontext_desc', 'theme_klassroom');
$default = 'Link Here';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// eventimage3buttonurl .
$name = 'theme_klassroom/eventimage3buttonurl';
$title = get_string('eventimage3buttonurl', 'theme_klassroom');
$description = get_string('eventimage3buttonurl_desc', 'theme_klassroom');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// eventimage4 setting.
$name = 'theme_klassroom/eventimage4';
$title = get_string('eventimage4','theme_klassroom');
$description = get_string('eventimage4_desc', 'theme_klassroom');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'eventimage4');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// eventimage4caption .
$name = 'theme_klassroom/eventimage4caption';
$title = get_string('eventimage4caption', 'theme_klassroom');
$description = get_string('eventimage4caption_desc', 'theme_klassroom');
$default = 'Event';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// eventimage4buttontext .
$name = 'theme_klassroom/eventimage4buttontext';
$title = get_string('eventimage4buttontext', 'theme_klassroom');
$description = get_string('eventimage4buttontext_desc', 'theme_klassroom');
$default = 'Link Here';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// eventimage4buttonurl .
$name = 'theme_klassroom/eventimage4buttonurl';
$title = get_string('eventimage4buttonurl', 'theme_klassroom');
$description = get_string('eventimage4buttonurl_desc', 'theme_klassroom');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// eventimage5 setting.
$name = 'theme_klassroom/eventimage5';
$title = get_string('eventimage5','theme_klassroom');
$description = get_string('eventimage5_desc', 'theme_klassroom');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'eventimage5');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// eventimage5caption .
$name = 'theme_klassroom/eventimage5caption';
$title = get_string('eventimage5caption', 'theme_klassroom');
$description = get_string('eventimage5caption_desc', 'theme_klassroom');
$default = 'Event';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// eventimage5buttontext .
$name = 'theme_klassroom/eventimage5buttontext';
$title = get_string('eventimage5buttontext', 'theme_klassroom');
$description = get_string('eventimage5buttontext_desc', 'theme_klassroom');
$default = 'Link Here';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// eventimage5buttonurl .
$name = 'theme_klassroom/eventimage5buttonurl';
$title = get_string('eventimage5buttonurl', 'theme_klassroom');
$description = get_string('eventimage5buttonurl_desc', 'theme_klassroom');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// eventimage6 setting.
$name = 'theme_klassroom/eventimage6';
$title = get_string('eventimage6','theme_klassroom');
$description = get_string('eventimage6_desc', 'theme_klassroom');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'eventimage6');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// eventimage6caption .
$name = 'theme_klassroom/eventimage6caption';
$title = get_string('eventimage6caption', 'theme_klassroom');
$description = get_string('eventimage6caption_desc', 'theme_klassroom');
$default = 'Event';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// eventimage6buttontext .
$name = 'theme_klassroom/eventimage6buttontext';
$title = get_string('eventimage6buttontext', 'theme_klassroom');
$description = get_string('eventimage6buttontext_desc', 'theme_klassroom');
$default = 'Link Here';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// eventimage6buttonurl .
$name = 'theme_klassroom/eventimage6buttonurl';
$title = get_string('eventimage6buttonurl', 'theme_klassroom');
$description = get_string('eventimage6buttonurl_desc', 'theme_klassroom');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);


// seminarimage1 setting.
$name = 'theme_klassroom/seminarimage1';
$title = get_string('seminarimage1','theme_klassroom');
$description = get_string('seminarimage1_desc', 'theme_klassroom');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'seminarimage1');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// seminarimage1caption .
$name = 'theme_klassroom/seminarimage1caption';
$title = get_string('seminarimage1caption', 'theme_klassroom');
$description = get_string('seminarimage1caption_desc', 'theme_klassroom');
$default = 'Seminar';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// seminarimage1buttontext .
$name = 'theme_klassroom/seminarimage1buttontext';
$title = get_string('seminarimage1buttontext', 'theme_klassroom');
$description = get_string('seminarimage1buttontext_desc', 'theme_klassroom');
$default = 'Link Here';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// seminarimage1buttonurl .
$name = 'theme_klassroom/seminarimage1buttonurl';
$title = get_string('seminarimage1buttonurl', 'theme_klassroom');
$description = get_string('seminarimage1buttonurl_desc', 'theme_klassroom');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// seminarimage2 setting.
$name = 'theme_klassroom/seminarimage2';
$title = get_string('seminarimage2','theme_klassroom');
$description = get_string('seminarimage2_desc', 'theme_klassroom');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'seminarimage2');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// seminarimage2caption .
$name = 'theme_klassroom/seminarimage2caption';
$title = get_string('seminarimage2caption', 'theme_klassroom');
$description = get_string('seminarimage2caption_desc', 'theme_klassroom');
$default = 'Seminar';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// seminarimage2buttontext .
$name = 'theme_klassroom/seminarimage2buttontext';
$title = get_string('seminarimage2buttontext', 'theme_klassroom');
$description = get_string('seminarimage2buttontext_desc', 'theme_klassroom');
$default = 'Link Here';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// seminarimage2buttonurl .
$name = 'theme_klassroom/seminarimage2buttonurl';
$title = get_string('seminarimage2buttonurl', 'theme_klassroom');
$description = get_string('seminarimage2buttonurl_desc', 'theme_klassroom');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// seminarimage3 setting.
$name = 'theme_klassroom/seminarimage3';
$title = get_string('seminarimage3','theme_klassroom');
$description = get_string('seminarimage3_desc', 'theme_klassroom');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'seminarimage3');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// seminarimage3caption .
$name = 'theme_klassroom/seminarimage3caption';
$title = get_string('seminarimage3caption', 'theme_klassroom');
$description = get_string('seminarimage3caption_desc', 'theme_klassroom');
$default = 'Seminar';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// seminarimage3buttontext .
$name = 'theme_klassroom/seminarimage3buttontext';
$title = get_string('seminarimage3buttontext', 'theme_klassroom');
$description = get_string('seminarimage3buttontext_desc', 'theme_klassroom');
$default = 'Link Here';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// seminarimage3buttonurl .
$name = 'theme_klassroom/seminarimage3buttonurl';
$title = get_string('seminarimage3buttonurl', 'theme_klassroom');
$description = get_string('seminarimage3buttonurl_desc', 'theme_klassroom');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);


// seminarimage4 setting.
$name = 'theme_klassroom/seminarimage4';
$title = get_string('seminarimage4','theme_klassroom');
$description = get_string('seminarimage4_desc', 'theme_klassroom');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'seminarimage4');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// seminarimage4caption .
$name = 'theme_klassroom/seminarimage4caption';
$title = get_string('seminarimage4caption', 'theme_klassroom');
$description = get_string('seminarimage4caption_desc', 'theme_klassroom');
$default = 'Seminar';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// seminarimage4buttontext .
$name = 'theme_klassroom/seminarimage4buttontext';
$title = get_string('seminarimage4buttontext', 'theme_klassroom');
$description = get_string('seminarimage4buttontext_desc', 'theme_klassroom');
$default = 'Link Here';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// seminarimage4buttonurl .
$name = 'theme_klassroom/seminarimage4buttonurl';
$title = get_string('seminarimage4buttonurl', 'theme_klassroom');
$description = get_string('seminarimage4buttonurl_desc', 'theme_klassroom');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// seminarimage5 setting.
$name = 'theme_klassroom/seminarimage5';
$title = get_string('seminarimage5','theme_klassroom');
$description = get_string('seminarimage5_desc', 'theme_klassroom');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'seminarimage5');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// seminarimage5caption .
$name = 'theme_klassroom/seminarimage5caption';
$title = get_string('seminarimage5caption', 'theme_klassroom');
$description = get_string('seminarimage5caption_desc', 'theme_klassroom');
$default = 'Seminar';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// seminarimage5buttontext .
$name = 'theme_klassroom/seminarimage5buttontext';
$title = get_string('seminarimage5buttontext', 'theme_klassroom');
$description = get_string('seminarimage5buttontext_desc', 'theme_klassroom');
$default = 'Link Here';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// seminarimage5buttonurl .
$name = 'theme_klassroom/seminarimage5buttonurl';
$title = get_string('seminarimage5buttonurl', 'theme_klassroom');
$description = get_string('seminarimage5buttonurl_desc', 'theme_klassroom');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);


// seminarimage6 setting.
$name = 'theme_klassroom/seminarimage6';
$title = get_string('seminarimage6','theme_klassroom');
$description = get_string('seminarimage6_desc', 'theme_klassroom');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'seminarimage6');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// seminarimage6caption .
$name = 'theme_klassroom/seminarimage6caption';
$title = get_string('seminarimage6caption', 'theme_klassroom');
$description = get_string('seminarimage6caption_desc', 'theme_klassroom');
$default = 'Seminar';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// seminarimage6buttontext .
$name = 'theme_klassroom/seminarimage6buttontext';
$title = get_string('seminarimage6buttontext', 'theme_klassroom');
$description = get_string('seminarimage6buttontext_desc', 'theme_klassroom');
$default = 'Link Here';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// seminarimage6buttonurl .
$name = 'theme_klassroom/seminarimage6buttonurl';
$title = get_string('seminarimage6buttonurl', 'theme_klassroom');
$description = get_string('seminarimage6buttonurl_desc', 'theme_klassroom');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$settings->add($page);

// Tutor setting.
$page = new admin_settingpage('theme_klassroom_tutor',  get_string('tutorsettings', 'theme_klassroom'));

// displaytutorsection setting.
$name = 'theme_klassroom/displaytutorsection';
$title = get_string('displaytutorsection','theme_klassroom');
$description = get_string('displaytutorsection_desc', 'theme_klassroom');
$default = 1;
$choices = array(0=>'No', 1=>'Yes');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$page->add($setting);
// tutorssectionheading .
$name = 'theme_klassroom/tutorssectionheading';
$title = get_string('tutorssectionheading', 'theme_klassroom');
$description = get_string('tutorssectionheading_desc', 'theme_klassroom');
$default = 'Lead Teachers';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// tutorssectiontagline  .
$name = 'theme_klassroom/tutorssectiontagline';
$title = get_string('tutorssectiontagline', 'theme_klassroom');
$description = get_string('tutorssectiontagline_desc', 'theme_klassroom');
$default = 'The names we are proud of';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// displaytutor1 setting.
$name = 'theme_klassroom/displaytutor1';
$title = get_string('displaytutor1','theme_klassroom');
$description = get_string('displaytutor1_desc', 'theme_klassroom');
$default = 1;
$choices = array(0=>'No', 1=>'Yes');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$page->add($setting);
// tutor1image.
$name = 'theme_klassroom/tutor1image';
$title = get_string('tutor1image', 'theme_klassroom');
$description = get_string('tutor1image_desc', 'theme_klassroom');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'tutor1image');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// tutor1name.
$name = 'theme_klassroom/tutor1name';
$title = get_string('tutor1name', 'theme_klassroom');
$description = get_string('tutor1name_desc', 'theme_klassroom');
$default = 'Doris Wilson';
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// tutor1url.
$name = 'theme_klassroom/tutor1url';
$title = get_string('tutor1url', 'theme_klassroom');
$description = get_string('tutor1url_desc', 'theme_klassroom');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// tutor1designation.
$name = 'theme_klassroom/tutor1designation';
$title = get_string('tutor1designation', 'theme_klassroom');
$description = get_string('tutor1designation_desc', 'theme_klassroom');
$default = 'Phd, Master';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// tutor1rating .
$name = 'theme_klassroom/tutor1rating';
$title = get_string('tutor1rating', 'theme_klassroom');
$description = get_string('tutor1rating_desc', 'theme_klassroom');
$default = '4.9/5';
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// tutor1comment .
$name = 'theme_klassroom/tutor1comment';
$title = get_string('tutor1comment', 'theme_klassroom');
$description = get_string('tutor1comment_desc', 'theme_klassroom');
$default = 'thank u mam for explaining so well!! and showing ur concern towards me!! :)';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// displaytutor2 setting.
$name = 'theme_klassroom/displaytutor2';
$title = get_string('displaytutor2','theme_klassroom');
$description = get_string('displaytutor2_desc', 'theme_klassroom');
$default = 1;
$choices = array(0=>'No', 1=>'Yes');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$page->add($setting);
// tutor2image.
$name = 'theme_klassroom/tutor2image';
$title = get_string('tutor2image', 'theme_klassroom');
$description = get_string('tutor2image_desc', 'theme_klassroom');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'tutor2image');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// tutor2name.
$name = 'theme_klassroom/tutor2name';
$title = get_string('tutor2name', 'theme_klassroom');
$description = get_string('tutor2name_desc', 'theme_klassroom');
$default = 'A. T. Whitecotton';
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// tutor2url.
$name = 'theme_klassroom/tutor2url';
$title = get_string('tutor2url', 'theme_klassroom');
$description = get_string('tutor2url_desc', 'theme_klassroom');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// tutor2designation.
$name = 'theme_klassroom/tutor2designation';
$title = get_string('tutor2designation', 'theme_klassroom');
$description = get_string('tutor2designation_desc', 'theme_klassroom');
$default = 'Phd, History';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// tutor2rating .
$name = 'theme_klassroom/tutor2rating';
$title = get_string('tutor2rating', 'theme_klassroom');
$description = get_string('tutor2rating_desc', 'theme_klassroom');
$default = '4.9/5';
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// tutor2comment .
$name = 'theme_klassroom/tutor2comment';
$title = get_string('tutor2comment', 'theme_klassroom');
$description = get_string('tutor2comment_desc', 'theme_klassroom');
$default = 'i have started to love Maths bcos of u! tnx lot mam!!!!';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);



// displaytutor3 setting.
$name = 'theme_klassroom/displaytutor3';
$title = get_string('displaytutor3','theme_klassroom');
$description = get_string('displaytutor3_desc', 'theme_klassroom');
$default = 1;
$choices = array(0=>'No', 1=>'Yes');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$page->add($setting);
// tutor3image.
$name = 'theme_klassroom/tutor3image';
$title = get_string('tutor3image', 'theme_klassroom');
$description = get_string('tutor3image_desc', 'theme_klassroom');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'tutor3image');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// tutor3name.
$name = 'theme_klassroom/tutor3name';
$title = get_string('tutor3name', 'theme_klassroom');
$description = get_string('tutor3name_desc', 'theme_klassroom');
$default = 'Sarah Norris';
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// tutor3url.
$name = 'theme_klassroom/tutor3url';
$title = get_string('tutor3url', 'theme_klassroom');
$description = get_string('tutor3url_desc', 'theme_klassroom');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// tutor3designation.
$name = 'theme_klassroom/tutor3designation';
$title = get_string('tutor3designation', 'theme_klassroom');
$description = get_string('tutor3designation_desc', 'theme_klassroom');
$default = 'Phd, Science';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// tutor3rating .
$name = 'theme_klassroom/tutor3rating';
$title = get_string('tutor3rating', 'theme_klassroom');
$description = get_string('tutor3rating_desc', 'theme_klassroom');
$default = '5.0/5';
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// tutor3comment .
$name = 'theme_klassroom/tutor3comment';
$title = get_string('tutor3comment', 'theme_klassroom');
$description = get_string('tutor3comment_desc', 'theme_klassroom');
$default = 'Awesome class... All the concepts taught in a very easy manner...';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);


// displaytutor4 setting.
$name = 'theme_klassroom/displaytutor4';
$title = get_string('displaytutor4','theme_klassroom');
$description = get_string('displaytutor4_desc', 'theme_klassroom');
$default = 1;
$choices = array(0=>'No', 1=>'Yes');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$page->add($setting);
// tutor4image.
$name = 'theme_klassroom/tutor4image';
$title = get_string('tutor4image', 'theme_klassroom');
$description = get_string('tutor4image_desc', 'theme_klassroom');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'tutor4image');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// tutor4name.
$name = 'theme_klassroom/tutor4name';
$title = get_string('tutor4name', 'theme_klassroom');
$description = get_string('tutor4name_desc', 'theme_klassroom');
$default = 'Mary Belle Greenwell';
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// tutor4url.
$name = 'theme_klassroom/tutor4url';
$title = get_string('tutor4url', 'theme_klassroom');
$description = get_string('tutor4url_desc', 'theme_klassroom');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// tutor4designation.
$name = 'theme_klassroom/tutor4designation';
$title = get_string('tutor4designation', 'theme_klassroom');
$description = get_string('tutor4designation_desc', 'theme_klassroom');
$default = 'Biology Instructor';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// tutor4rating .
$name = 'theme_klassroom/tutor4rating';
$title = get_string('tutor4rating', 'theme_klassroom');
$description = get_string('tutor4rating_desc', 'theme_klassroom');
$default = '5.0/5';
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// tutor4comment .
$name = 'theme_klassroom/tutor4comment';
$title = get_string('tutor4comment', 'theme_klassroom');
$description = get_string('tutor4comment_desc', 'theme_klassroom');
$default = 'i finally found someone who could make me understand!!!! :D';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// displaytutor5 setting.
$name = 'theme_klassroom/displaytutor5';
$title = get_string('displaytutor5','theme_klassroom');
$description = get_string('displaytutor5_desc', 'theme_klassroom');
$default = 1;
$choices = array(0=>'No', 1=>'Yes');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$page->add($setting);
// tutor5image.
$name = 'theme_klassroom/tutor5image';
$title = get_string('tutor5image', 'theme_klassroom');
$description = get_string('tutor5image_desc', 'theme_klassroom');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'tutor5image');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// tutor5name.
$name = 'theme_klassroom/tutor5name';
$title = get_string('tutor5name', 'theme_klassroom');
$description = get_string('tutor5name_desc', 'theme_klassroom');
$default = 'Elizabeth Vaughn';
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// tutor5url.
$name = 'theme_klassroom/tutor5url';
$title = get_string('tutor5url', 'theme_klassroom');
$description = get_string('tutor5url_desc', 'theme_klassroom');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// tutor5designation.
$name = 'theme_klassroom/tutor5designation';
$title = get_string('tutor5designation', 'theme_klassroom');
$description = get_string('tutor5designation_desc', 'theme_klassroom');
$default = 'Phd, Master';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// tutor5rating .
$name = 'theme_klassroom/tutor5rating';
$title = get_string('tutor5rating', 'theme_klassroom');
$description = get_string('tutor5rating_desc', 'theme_klassroom');
$default = '3.8/5';
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// tutor5comment .
$name = 'theme_klassroom/tutor5comment';
$title = get_string('tutor5comment', 'theme_klassroom');
$description = get_string('tutor5comment_desc', 'theme_klassroom');
$default = 'he teaches Algebra in a way we can understand as soon as he tells .';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);


// displaytutor6 setting.
$name = 'theme_klassroom/displaytutor6';
$title = get_string('displaytutor6','theme_klassroom');
$description = get_string('displaytutor6_desc', 'theme_klassroom');
$default = 1;
$choices = array(0=>'No', 1=>'Yes');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$page->add($setting);
// tutor6image.
$name = 'theme_klassroom/tutor6image';
$title = get_string('tutor6image', 'theme_klassroom');
$description = get_string('tutor6image_desc', 'theme_klassroom');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'tutor6image');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// tutor6name.
$name = 'theme_klassroom/tutor6name';
$title = get_string('tutor6name', 'theme_klassroom');
$description = get_string('tutor6name_desc', 'theme_klassroom');
$default = 'Helen Levings';
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// tutor6url.
$name = 'theme_klassroom/tutor6url';
$title = get_string('tutor6url', 'theme_klassroom');
$description = get_string('tutor6url_desc', 'theme_klassroom');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// tutor6designation.
$name = 'theme_klassroom/tutor6designation';
$title = get_string('tutor6designation', 'theme_klassroom');
$description = get_string('tutor6designation_desc', 'theme_klassroom');
$default = 'Phd, English';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// tutor6rating .
$name = 'theme_klassroom/tutor6rating';
$title = get_string('tutor6rating', 'theme_klassroom');
$description = get_string('tutor6rating_desc', 'theme_klassroom');
$default = '3.8/5';
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// tutor6comment .
$name = 'theme_klassroom/tutor6comment';
$title = get_string('tutor6comment', 'theme_klassroom');
$description = get_string('tutor6comment_desc', 'theme_klassroom');
$default = 'fabulous class.... super hard chapter but complete clarity..:';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// displaytutor7 setting.
$name = 'theme_klassroom/displaytutor7';
$title = get_string('displaytutor7','theme_klassroom');
$description = get_string('displaytutor7_desc', 'theme_klassroom');
$default = 1;
$choices = array(0=>'No', 1=>'Yes');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$page->add($setting);
// tutor7image.
$name = 'theme_klassroom/tutor7image';
$title = get_string('tutor7image', 'theme_klassroom');
$description = get_string('tutor7image_desc', 'theme_klassroom');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'tutor7image');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// tutor7name.
$name = 'theme_klassroom/tutor7name';
$title = get_string('tutor7name', 'theme_klassroom');
$description = get_string('tutor7name_desc', 'theme_klassroom');
$default = 'Martha Flowers';
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// tutor7url.
$name = 'theme_klassroom/tutor7url';
$title = get_string('tutor7url', 'theme_klassroom');
$description = get_string('tutor7url_desc', 'theme_klassroom');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// tutor7designation.
$name = 'theme_klassroom/tutor7designation';
$title = get_string('tutor7designation', 'theme_klassroom');
$description = get_string('tutor7designation_desc', 'theme_klassroom');
$default = 'Phd, Master';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// tutor7rating .
$name = 'theme_klassroom/tutor7rating';
$title = get_string('tutor7rating', 'theme_klassroom');
$description = get_string('tutor7rating_desc', 'theme_klassroom');
$default = '4.0/5';
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// tutor7comment .
$name = 'theme_klassroom/tutor7comment';
$title = get_string('tutor7comment', 'theme_klassroom');
$description = get_string('tutor7comment_desc', 'theme_klassroom');
$default = 'i always love ur sessions mam bcos u make studies interesting....';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// displaytutor8 setting.
$name = 'theme_klassroom/displaytutor8';
$title = get_string('displaytutor8','theme_klassroom');
$description = get_string('displaytutor8_desc', 'theme_klassroom');
$default = 1;
$choices = array(0=>'No', 1=>'Yes');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$page->add($setting);
// tutor8image.
$name = 'theme_klassroom/tutor8image';
$title = get_string('tutor8image', 'theme_klassroom');
$description = get_string('tutor8image_desc', 'theme_klassroom');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'tutor8image');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// tutor8name.
$name = 'theme_klassroom/tutor8name';
$title = get_string('tutor8name', 'theme_klassroom');
$description = get_string('tutor8name_desc', 'theme_klassroom');
$default = 'Ruth Louise Williams';
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// tutor8url.
$name = 'theme_klassroom/tutor8url';
$title = get_string('tutor8url', 'theme_klassroom');
$description = get_string('tutor8url_desc', 'theme_klassroom');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// tutor8designation.
$name = 'theme_klassroom/tutor8designation';
$title = get_string('tutor8designation', 'theme_klassroom');
$description = get_string('tutor8designation_desc', 'theme_klassroom');
$default = 'Biology Instructor';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// tutor8rating .
$name = 'theme_klassroom/tutor8rating';
$title = get_string('tutor8rating', 'theme_klassroom');
$description = get_string('tutor8rating_desc', 'theme_klassroom');
$default = '4.0/5';
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// tutor8comment .
$name = 'theme_klassroom/tutor8comment';
$title = get_string('tutor8comment', 'theme_klassroom');
$description = get_string('tutor8comment_desc', 'theme_klassroom');
$default = 'thank u mam for explaining so well!! and showing ur concern towards me!! :';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// displaytutor9 setting.
$name = 'theme_klassroom/displaytutor9';
$title = get_string('displaytutor9','theme_klassroom');
$description = get_string('displaytutor9_desc', 'theme_klassroom');
$default = 1;
$choices = array(0=>'No', 1=>'Yes');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$page->add($setting);
// tutor9image.
$name = 'theme_klassroom/tutor9image';
$title = get_string('tutor9image', 'theme_klassroom');
$description = get_string('tutor9image_desc', 'theme_klassroom');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'tutor9image');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// tutor9name.
$name = 'theme_klassroom/tutor9name';
$title = get_string('tutor9name', 'theme_klassroom');
$description = get_string('tutor9name_desc', 'theme_klassroom');
$default = 'Lucy Harshbarger';
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// tutor9url.
$name = 'theme_klassroom/tutor9url';
$title = get_string('tutor9url', 'theme_klassroom');
$description = get_string('tutor9url_desc', 'theme_klassroom');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// tutor9designation.
$name = 'theme_klassroom/tutor9designation';
$title = get_string('tutor9designation', 'theme_klassroom');
$description = get_string('tutor9designation_desc', 'theme_klassroom');
$default = 'Phd, English';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// tutor9rating .
$name = 'theme_klassroom/tutor9rating';
$title = get_string('tutor9rating', 'theme_klassroom');
$description = get_string('tutor9rating_desc', 'theme_klassroom');
$default = '5.0/5';
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// tutor9comment .
$name = 'theme_klassroom/tutor9comment';
$title = get_string('tutor9comment', 'theme_klassroom');
$description = get_string('tutor9comment_desc', 'theme_klassroom');
$default = 'thank u mam for explaining so well!! and showing ur concern towards me!! :)';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

$settings->add($page);

// Advanced settings.
$page = new admin_settingpage('theme_klassroom_footer', get_string('footersettings', 'theme_klassroom'));
$name = 'theme_klassroom/displayclientlogoarea';
$title = get_string('displayclientlogoarea','theme_klassroom');
$description = get_string('displayclientlogoareadesc', 'theme_klassroom');
$default = 1;
$choices = array(0=>'No', 1=>'Yes');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$page->add($setting);
// clientlogo1.
$name = 'theme_klassroom/clientlogo1';
$title = get_string('clientlogo1', 'theme_klassroom');
$description = get_string('clientlogo1_desc', 'theme_klassroom');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'clientlogo1');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// clientlogo2.
$name = 'theme_klassroom/clientlogo2';
$title = get_string('clientlogo2', 'theme_klassroom');
$description = get_string('clientlogo2_desc', 'theme_klassroom');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'clientlogo2');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// clientlogo3.
$name = 'theme_klassroom/clientlogo3';
$title = get_string('clientlogo3', 'theme_klassroom');
$description = get_string('clientlogo3_desc', 'theme_klassroom');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'clientlogo3');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// clientlogo4.
$name = 'theme_klassroom/clientlogo4';
$title = get_string('clientlogo4', 'theme_klassroom');
$description = get_string('clientlogo4_desc', 'theme_klassroom');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'clientlogo4');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);


// clientlogo5.
$name = 'theme_klassroom/clientlogo5';
$title = get_string('clientlogo5', 'theme_klassroom');
$description = get_string('clientlogo5_desc', 'theme_klassroom');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'clientlogo5');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// clientlogo6.
$name = 'theme_klassroom/clientlogo6';
$title = get_string('clientlogo6', 'theme_klassroom');
$description = get_string('clientlogo6_desc', 'theme_klassroom');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'clientlogo6');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);


//  footerBackground setting.
$name = 'theme_klassroom/footerbackground';
$title = get_string('footerbackground', 'theme_klassroom');
$description = get_string('footerbackground_desc', 'theme_klassroom');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'footerbackground');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
//  footerlogo setting.
$name = 'theme_klassroom/footerlogo';
$title = get_string('footerlogo','theme_klassroom');
$description = get_string('footerlogo_desc', 'theme_klassroom');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'footerlogo');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// footersection1description .
$name = 'theme_klassroom/footersection1description';
$title = get_string('footersection1description', 'theme_klassroom');
$description = get_string('footersection1description_desc', 'theme_klassroom');
$default = 'Lorem ipsum dolor sit amet, et alienum electram consulatu pri, modo dolore albucius ea cum. Malis vocibus inimicus.';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// footersection2heading.
$name = 'theme_klassroom/footersection2heading';
$title = get_string('footersection2heading', 'theme_klassroom');
$description = get_string('footersection2heading_desc', 'theme_klassroom');
$default = 'Study at klassroom';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// footersection2link1.
$name = 'theme_klassroom/footersection2link1';
$title = get_string('footersection2link1', 'theme_klassroom');
$description = get_string('footersection2link1_desc', 'theme_klassroom');
$default = 'Undergraduate';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// footersection2link1url.
$name = 'theme_klassroom/footersection2link1url';
$title = get_string('footersection2link1url', 'theme_klassroom');
$description = get_string('footersection2link1url_desc', 'theme_klassroom');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// footersection2link2.
$name = 'theme_klassroom/footersection2link2';
$title = get_string('footersection2link2', 'theme_klassroom');
$description = get_string('footersection2link2_desc', 'theme_klassroom');
$default = 'Graduate';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// footersection2link2url.
$name = 'theme_klassroom/footersection2link2url';
$title = get_string('footersection2link2url', 'theme_klassroom');
$description = get_string('footersection2link2url_desc', 'theme_klassroom');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// footersection2link3.
$name = 'theme_klassroom/footersection2link3';
$title = get_string('footersection2link3', 'theme_klassroom');
$description = get_string('footersection2link3_desc', 'theme_klassroom');
$default = 'Continuing education';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// footersection2link3url.
$name = 'theme_klassroom/footersection2link3url';
$title = get_string('footersection2link3url', 'theme_klassroom');
$description = get_string('footersection2link3url_desc', 'theme_klassroom');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// footersection2link4.
$name = 'theme_klassroom/footersection2link4';
$title = get_string('footersection2link4', 'theme_klassroom');
$description = get_string('footersection2link4_desc', 'theme_klassroom');
$default = 'Executive and professional education';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// footersection2link4url.
$name = 'theme_klassroom/footersection2link4url';
$title = get_string('footersection2link4url', 'theme_klassroom');
$description = get_string('footersection2link4url_desc', 'theme_klassroom');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// footersection2link5.
$name = 'theme_klassroom/footersection2link5';
$title = get_string('footersection2link5', 'theme_klassroom');
$description = get_string('footersection2link5_desc', 'theme_klassroom');
$default = 'Courses in education';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// footersection2link5url.
$name = 'theme_klassroom/footersection2link5url';
$title = get_string('footersection2link5url', 'theme_klassroom');
$description = get_string('footersection2link5url_desc', 'theme_klassroom');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// footersection3heading.
$name = 'theme_klassroom/footersection3heading';
$title = get_string('footersection3heading', 'theme_klassroom');
$description = get_string('footersection3heading_desc', 'theme_klassroom');
$default = 'About the University';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// footersection3link1.
$name = 'theme_klassroom/footersection3link1';
$title = get_string('footersection3link1', 'theme_klassroom');
$description = get_string('footersection3link1_desc', 'theme_klassroom');
$default = 'How the University and Colleges work';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// footersection3link1url.
$name = 'theme_klassroom/footersection3link1url';
$title = get_string('footersection3link1url', 'theme_klassroom');
$description = get_string('footersection3link1url_desc', 'theme_klassroom');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// footersection3link2.
$name = 'theme_klassroom/footersection3link2';
$title = get_string('footersection3link2', 'theme_klassroom');
$description = get_string('footersection3link2_desc', 'theme_klassroom');
$default = 'Visiting the University';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// footersection3link2url.
$name = 'theme_klassroom/footersection3link2url';
$title = get_string('footersection3link2url', 'theme_klassroom');
$description = get_string('footersection3link2url_desc', 'theme_klassroom');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// footersection3link3.
$name = 'theme_klassroom/footersection3link3';
$title = get_string('footersection3link3', 'theme_klassroom');
$description = get_string('footersection3link3_desc', 'theme_klassroom');
$default = 'Departments A - to Z';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// footersection3link3url.
$name = 'theme_klassroom/footersection3link3url';
$title = get_string('footersection3link3url', 'theme_klassroom');
$description = get_string('footersection3link3url_desc', 'theme_klassroom');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// footersection3link4.
$name = 'theme_klassroom/footersection3link4';
$title = get_string('footersection3link4', 'theme_klassroom');
$description = get_string('footersection3link4_desc', 'theme_klassroom');
$default = 'Education';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// footersection3link4url.
$name = 'theme_klassroom/footersection3link4url';
$title = get_string('footersection3link4url', 'theme_klassroom');
$description = get_string('footersection3link4url_desc', 'theme_klassroom');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// footersection3link5.
$name = 'theme_klassroom/footersection3link5';
$title = get_string('footersection3link5', 'theme_klassroom');
$description = get_string('footersection3link5_desc', 'theme_klassroom');
$default = 'Jobs';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// footersection3link5url.
$name = 'theme_klassroom/footersection3link5url';
$title = get_string('footersection3link5url', 'theme_klassroom');
$description = get_string('footersection3link5url_desc', 'theme_klassroom');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// footersection4heading.
$name = 'theme_klassroom/footersection4heading';
$title = get_string('footersection4heading', 'theme_klassroom');
$description = get_string('footersection4heading_desc', 'theme_klassroom');
$default = 'Resources';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// footersection4link1.
$name = 'theme_klassroom/footersection4link1';
$title = get_string('footersection4link1', 'theme_klassroom');
$description = get_string('footersection4link1_desc', 'theme_klassroom');
$default = 'A - to Z Index';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// footersection4link1url.
$name = 'theme_klassroom/footersection4link1url';
$title = get_string('footersection4link1url', 'theme_klassroom');
$description = get_string('footersection4link1url_desc', 'theme_klassroom');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// footersection4link2.
$name = 'theme_klassroom/footersection4link2';
$title = get_string('footersection4link2', 'theme_klassroom');
$description = get_string('footersection4link2_desc', 'theme_klassroom');
$default = 'Campus Map';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// footersection4link2url.
$name = 'theme_klassroom/footersection4link2url';
$title = get_string('footersection4link2url', 'theme_klassroom');
$description = get_string('footersection4link2url_desc', 'theme_klassroom');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// footersection4link3.
$name = 'theme_klassroom/footersection4link3';
$title = get_string('footersection4link3', 'theme_klassroom');
$description = get_string('footersection4link3_desc', 'theme_klassroom');
$default = 'Directory';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// footersection4link3url.
$name = 'theme_klassroom/footersection4link3url';
$title = get_string('footersection4link3url', 'theme_klassroom');
$description = get_string('footersection4link3url_desc', 'theme_klassroom');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// footersection4link4.
$name = 'theme_klassroom/footersection4link4';
$title = get_string('footersection4link4', 'theme_klassroom');
$description = get_string('footersection4link4_desc', 'theme_klassroom');
$default = 'klassroom Profiles';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// footersection4link4url.
$name = 'theme_klassroom/footersection4link4url';
$title = get_string('footersection4link4url', 'theme_klassroom');
$description = get_string('footersection4link4url_desc', 'theme_klassroom');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// footersection4link5.
$name = 'theme_klassroom/footersection4link5';
$title = get_string('footersection4link5', 'theme_klassroom');
$description = get_string('footersection4link5_desc', 'theme_klassroom');
$default = 'Discussion';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// footersection4link5url.
$name = 'theme_klassroom/footersection4link5url';
$title = get_string('footersection4link5url', 'theme_klassroom');
$description = get_string('footersection4link5url_desc', 'theme_klassroom');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Back to top button.
$name = 'theme_klassroom/backtotop';
$title = get_string('backtotop', 'theme_klassroom');
$description = get_string('backtotop_desc', 'theme_klassroom');
$default = '1';
$setting = new admin_setting_configcheckbox($name, $title, $description, $default);
$page->add($setting);
$settings->add($page);
// Advanced settings.
$page = new admin_settingpage('theme_klassroom_advanced', get_string('advancedsettings', 'theme_klassroom'));
// Raw SCSS to include before the content.
$setting = new admin_setting_scsscode('theme_klassroom/scsspre',
get_string('rawscsspre', 'theme_boost'), get_string('rawscsspre_desc', 'theme_boost'), '', PARAM_RAW);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
// Raw SCSS to include after the content.
$setting = new admin_setting_scsscode('theme_klassroom/scss', get_string('rawscss', 'theme_boost'),
get_string('rawscss_desc', 'theme_boost'), '', PARAM_RAW);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);
$settings->add($page);
