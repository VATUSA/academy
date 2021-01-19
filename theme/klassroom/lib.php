<?php
// This line protects the file from being accessed by a URL directly.
defined('MOODLE_INTERNAL') || die();
function theme_klassroom_get_main_scss_content($theme) {
global $CFG;
$scss = '';
$filename = !empty($theme->settings->preset) ? $theme->settings->preset : null;
$fs = get_file_storage();
$context = context_system::instance();
//$scss .= file_get_contents($CFG->dirroot . '/theme/klassroom/scss/klassroom/pre.scss');
if ($filename && ($presetfile = $fs->get_file($context->id, 'theme_klassroom', 'preset', 0, '/', $filename))) {
$scss .= $presetfile->get_content();
} else {
// Safety fallback - maybe new installs etc.
/*
====== post.scss for internal pages/sections====
*/
$scss .= file_get_contents($CFG->dirroot . '/theme/klassroom/scss/preset/default.scss');
}
/*
====== post.scss for internal page such as Dashboard====
*/
$scss .= file_get_contents($CFG->dirroot . '/theme/klassroom/scss/klassroom/post.scss');
/*
====== custom.scss for customization pages/sections ====
*/
$scss .= file_get_contents($CFG->dirroot . '/theme/klassroom/scss/custom.scss');


$scss .= ".block_calendar_month .card-body .calendar-controls .previous{background-image: url([[pix:theme|arrow-left]])}";
$scss .= ".block_calendar_month .card-body .calendar-controls .next{background-image: url([[pix:theme|arrow-right]])}";
$scss .= "body.pagelayout-frontpage button.sldr-prv{background-image: url([[pix:theme|prev]]), url([[pix:theme|tr1]]);}";
$scss .= "body.pagelayout-frontpage button.sldr-nxt{background-image: url([[pix:theme|next]]), url([[pix:theme|tr1]]);}";
$scss .= "body.pagelayout-frontpage .captions div{background-image: url([[pix:theme|tr1]]);}";

if ($allcoursesbgurl = $theme->setting_file_url('allcoursesbg', 'allcoursesbg')) {
$scss .= "#allcourses {background-image:  url('$allcoursesbgurl');}";
} else {
$scss .= "#allcourses {background-image: url([[pix:theme|all-course-bg]]);}";
}

if ($enrolledcoursesbgurl = $theme->setting_file_url('enrolledcoursesbg', 'enrolledcoursesbg')) {
$scss .= "#enrolledcourses {background-image:  url('$enrolledcoursesbgurl');}";
} else {
$scss .= "#enrolledcourses {background-image: url([[pix:theme|enrolledcourses-bg]]);}";
}

if ($eventsbgurl = $theme->setting_file_url('eventsbg', 'eventsbg')) {
$scss .= ".events {background-image:  url('$eventsbgurl');}";
} else {
$scss .= ".events {background-image: url([[pix:theme|events]]);}";
}


if ($footerbackgroundurl = $theme->setting_file_url('footerbackground', 'footerbackground')) {
$scss .= "#page-footer {background-image:  url('$footerbackgroundurl');}";
} else {
$scss .= "#page-footer {background-image: url([[pix:theme|footer-bg]]);}";
}
if ($internalbannerurl = $theme->setting_file_url('internalbanner', 'internalbanner')) {
$scss .= ".internalbanner {background-image:  url('$internalbannerurl');}";
} else {
$scss .= ".internalbanner {background-image: url([[pix:theme|internalbanner]]);}";
}
if ($loginbgurl = $theme->setting_file_url('loginbg', 'loginbg')) {
$scss .= "body.pagelayout-login #page{background-image:  url('$loginbgurl');}";
} else {
$scss .= "body.pagelayout-login #page{background-image: url([[pix:theme|loginbackground]]);}";
}

if ($loginbgurl = $theme->setting_file_url('loginbg', 'loginbg')) {
$scss .= "body.pagelayout-login #page{background-image:  url('$loginbgurl');}";
}



return $scss;
}
/**
* Get SCSS to prepend.
*
* @param theme_config $theme The theme config object.
* @return array
*/
function theme_klassroom_get_pre_scss($theme) {
$scss = '';
$configurable = [
// Config key => [variableName, ...].
'sitebluecolor' => 'siteblcolor',
'siteorangecolor' => 'siteorcolor',
'sitegreencolor' => 'sitegrcolor',
'sitelightbluecolor' => 'sitelightblcolor',
'sitevioletcolor' => 'siteviocolor',
'siteredcolor' => 'siterecolor',

];
// Prepend variables first.
foreach ($configurable as $configkey => $targets) {
$value = isset($theme->settings->{$configkey}) ? $theme->settings->{$configkey} : null;
if (empty($value)) {
continue;
}
array_map(function($target) use (&$scss, $value) {
$scss .= '$' . $target . ': ' . $value . ";\n";
}, (array) $targets);
}
// Prepend pre-scss.
if (!empty($theme->settings->scsspre)) {
$scss .= $theme->settings->scsspre;
}
return $scss;
}
/**
* Inject additional SCSS.
*
* @param theme_config $theme The theme config object.
* @return string
*/
function theme_klassroom_get_extra_scss($theme) {
global $CFG;
$content = '';
// Set the page background image.
$imageurl = $theme->setting_file_url('backgroundimage', 'backgroundimage');
if (!empty($imageurl)) {
$content .= '$imageurl: "' . $imageurl . '";';
$content .= file_get_contents($CFG->dirroot .
'/theme/klassroom/scss/klassroom/body-background.scss');
}
if (!empty($theme->settings->navbardark)) {
$content .= file_get_contents($CFG->dirroot .
'/theme/klassroom/scss/klassroom/navbar-dark.scss');
} else {
$content .= file_get_contents($CFG->dirroot .
'/theme/klassroom/scss/klassroom/navbar-light.scss');
}
if (!empty($theme->settings->scss)) {
$content .= $theme->settings->scss;
}
return $content;
}
/**
* Get compiled css.
*
* @return string compiled css
*/
function theme_klassroom_get_precompiled_css() {
global $CFG;
return file_get_contents($CFG->dirroot . '/theme/klassroom/style/moodle.css');
}
function theme_klassroom_get_custom_precompiled_css(){
global $CFG;
return file_get_contents($CFG->dirroot . '/theme/klassroom/style/custom.css');
}
/**
* Serves any files associated with the theme settings.
*
* @param stdClass $course
* @param stdClass $cm
* @param context $context
* @param string $filearea
* @param array $args
* @param bool $forcedownload
* @param array $options
* @return bool
*/

function klassroom_initialise_colourswitcher(moodle_page $page) {
user_preference_allow_ajax_update('theme_klassroom_chosen_colour', PARAM_ALPHA);
$page->requires->yui_module('moodle-theme_klassroom-colourswitcher', 'M.theme_klassroom.initColourSwitcher', array(array('div'=>'#colourswitcher')));
}
/**
* Gets the colour the user has selected, or the default if they have never changed
*
* @param string $default The default colour to use, normally red
* @return string The colour the user has selected
*/
function klassroom_get_colour() {
if (!empty($_COOKIE['klassroom'])){
$default = $_COOKIE['klassroom'];
}else{
$default='blue';
}
$color = get_user_preferences('theme_klassroom_chosen_colour', $default);
if (!empty($_COOKIE['klassroom']) && $_COOKIE['klassroom'] != $color){
set_user_preference('theme_klassroom_chosen_colour', $_COOKIE['klassroom']);
return $_COOKIE['klassroom'];
}
return $color;
}
/**
* Checks if the user is switching colours with a refresh (JS disabled)
*
* If they are this updates the users preference in the database
*
* @return bool
*/
function klassroom_check_colourswitch() {
$changecolour = optional_param('klassroomcolour', null, PARAM_ALPHA);
if (in_array($changecolour, array('blue', 'green', 'red', 'orange', 'yellow', 'pink'))) {
setcookie("klassroom", $changecolour, time()+3600*24*365*10, "/"); // set color in cookie
return set_user_preference('theme_klassroom_chosen_colour', $changecolour);
}
return false;
}


function theme_klassroom_pluginfile($course, $cm, $context, $filearea, $args, $forcedownload, array $options = array()) {
$coursecats = core_course_category::make_categories_list();
foreach ($coursecats as $key => $value) {
if ($context->contextlevel == CONTEXT_SYSTEM and $filearea === 'categoryimage'.$key) {
$theme = theme_config::load('klassroom');
return $theme->setting_file_serve('categoryimage'.$key, $args, $forcedownload, $options);
}
}
if ($context->contextlevel == CONTEXT_SYSTEM && ($filearea === 'favicon' || $filearea === 'logo' || $filearea === 'slider1image' || 
$filearea === 'slider2image' || $filearea === 'slider3image' || $filearea === 'slider4image' 
|| $filearea === 'defaultcategoryimage' || $filearea === 'categoryimage'.$key || $filearea === 'event1image' || $filearea === 'event2image' || 
$filearea === 'event3image' || $filearea === 'event4image' || $filearea === 'projectaddbanner' || $filearea === 'classroomimage1' || 
$filearea === 'classroomimage2' || $filearea === 'classroomimage3' || $filearea === 'classroomimage4' || $filearea === 'classroomimage5' || 
$filearea === 'classroomimage6' || $filearea === 'classroomimage7' || $filearea === 'classroomimage8' || $filearea === 'classroomimage9' || 
$filearea === 'eventimage1' || $filearea === 'eventimage2' || $filearea === 'eventimage3' || $filearea === 'eventimage4' || 
$filearea === 'eventimage5' || $filearea === 'eventimage6' || $filearea === 'seminarimage1' || $filearea === 'seminarimage2' || 
$filearea === 'seminarimage3' || $filearea === 'seminarimage4' || $filearea === 'seminarimage5' || $filearea === 'seminarimage6' || 
$filearea === 'tutor1image' || $filearea === 'tutor2image' || $filearea === 'tutor3image' || $filearea === 'tutor4image' || 
$filearea === 'tutor5image' || $filearea === 'tutor6image' || $filearea === 'tutor7image' || $filearea === 'tutor8image' || 
$filearea === 'tutor9image' || $filearea === 'clientlogo1' || $filearea === 'clientlogo2' || $filearea === 'clientlogo3' || 
$filearea === 'clientlogo4' || $filearea === 'clientlogo5' || $filearea === 'clientlogo6' || $filearea === 'footerbackground' || $filearea === 'footerlogo' || $filearea === 'internalbanner' || 
$filearea === 'loginbg' || $filearea === 'allcoursesbg' || $filearea === 'enrolledcoursesbg' || $filearea === 'featuredpostimage' || $filearea === 'eventsbg')) {
$theme = theme_config::load('klassroom');
// By default, theme files must be cache-able by both browsers and proxies.
if (!array_key_exists('cacheability', $options)) {
$options['cacheability'] = 'public';
}
return $theme->setting_file_serve($filearea, $args, $forcedownload, $options);
} else {
send_file_not_found();
}    
}
/* Multilanguage
--------------------- */
function theme_klassroom_get_setting($setting, $format = false) {
global $CFG;
require_once($CFG->dirroot . '/lib/weblib.php');
static $theme;
if (empty($theme)) {
$theme = theme_config::load('klassroom');
}
if (empty($theme->settings->$setting)) {
return false;
} else if (!$format) {
return $theme->settings->$setting;
} else if ($format === 'format_text') {
return format_text($theme->settings->$setting, FORMAT_PLAIN);
} else if ($format === 'format_html') {
return format_text($theme->settings->$setting, FORMAT_HTML, array('trusted' => true, 'noclean' => true));
} else {
return format_string($theme->settings->$setting);
}
}
