<?php
defined('MOODLE_INTERNAL') || die();
//echo $CFG->dirroot;
require_once($CFG->dirroot . "/course/renderer.php");
class theme_klassroom_core_course_renderer extends core_course_renderer{
protected $enablecategoryimage;
public function __construct(moodle_page $page, $target) {
parent::__construct($page, $target);
static $theme;
if (empty($theme)) {
$theme = theme_config::load('klassroom');
}
$this->enablecategoryimage = (!empty($theme->settings->enablecategoryimage)) ? $theme->settings->enablecategoryimage : false;
}
protected function coursecat_category(coursecat_helper $chelper, $coursecat, $depth) {
//$content .= html_writer::start_tag('div', array('class' => 'customcategory')); 
global $theme, $PAGE;
if (!$this->enablecategoryimage) {
return parent::coursecat_category($chelper, $coursecat, $depth);
}
global $CFG, $DB;
// Open category tag.
$classes = array('category');
if (empty($coursecat->visible)) {
$classes[] = 'dimmed_category';
}
if ($chelper->get_subcat_depth() > 0 && $depth >= $chelper->get_subcat_depth()) {
// Do not load content.
$categorycontent = '';
$classes[] = 'notloaded';
if ($coursecat->get_children_count() ||
($chelper->get_show_courses() >= self::COURSECAT_SHOW_COURSES_COLLAPSED && $coursecat->get_courses_count())
) {
$classes[] = 'with_children';
$classes[] = 'collapsed';
}
} else {
// Load category content.
$categorycontent = $this->coursecat_category_content($chelper, $coursecat, $depth);
$classes[] = 'loaded';
if (!empty($categorycontent)) {
$classes[] = 'with_children';
}
}
$classes[] = 'klassroomcats';
//$classes[] = 'span3';
if (intval($CFG->version) >= 2013111800) {
// Make sure JS file to expand category content is included.
$this->coursecat_include_js();
}
$content = html_writer::start_tag('div', array(
'class' => join(' ', $classes),
'data-categoryid' => $coursecat->id,
'data-depth' => $depth,
'data-showcourses' => $chelper->get_show_courses(),
'data-type' => self::COURSECAT_TYPE_CATEGORY,
));
// Category name.
$categoryname = html_writer::tag('span', $coursecat->get_formatted_name());
$categoryimagenum = 'categoryimage' . $coursecat->id;
// Do a settings check to output our icon for the category.
if (!empty($PAGE->theme->settings->enablecategoryimage)) {
if (!empty($PAGE->theme->settings->$categoryimagenum) &&
!empty($PAGE->theme->settings->enablecustomcategoryimage)
) {
// User has set a value for the category.
$val =  $PAGE->theme->setting_file_url($categoryimagenum, $categoryimagenum);
} else {
// User hasn't set a value for the category, get the default.
$val =  $PAGE->theme->setting_file_url('defaultcategoryimage', 'defaultcategoryimage');
}
}
if (!empty($val)) {
$icon = html_writer::tag('img', '', array('aria-hidden' => 'true', 'src' => '' . $val));
} else {
$df = $CFG->wwwroot . "/theme/klassroom/pix/defaultCategories.png";
$icon = html_writer::tag('img', '', array('aria-hidden' => 'true', 'src' => '' . $df));
}
$categoryimage = html_writer::link(new moodle_url('/course/index.php', array('categoryid' => $coursecat->id)), $icon);
$categoryname = html_writer::link(new moodle_url('/course/index.php', array('categoryid' => $coursecat->id)), $categoryname);
if ($chelper->get_show_courses() == self::COURSECAT_SHOW_COURSES_COUNT && ($coursescount = $coursecat->get_courses_count())) {
$categoryname .= html_writer::tag('span', ' (' . $coursescount . ')', array('title' => get_string('numberofcourses'), 'class' => 'numberofcourse'));
}
$content .= html_writer::tag('div', $categoryimage, array('class' => 'categoryimage'));
//$content .= html_writer::start_tag('div', array('class' => 'category-content'));    
$content .= html_writer::start_tag('div', array('class' => 'info'));
$content .= html_writer::tag(($depth > 1) ? 'h4' : 'h3', $categoryname, array('class' => 'categoryname'));
$content .= html_writer::end_tag('div'); // Class .info.
$content .= html_writer::start_tag('div', array('class' => 'categorydescription'));
$content .= html_writer::tag('div', $coursecat->description);
$content .= html_writer::end_tag('div'); // Class .categorydescription.
// Add category content to the output.
$content .= html_writer::tag('div', $categorycontent, array('class' => 'content'));
$content .= html_writer::end_tag('div'); // Class .category.
//$content .= html_writer::end_tag('div'); // Category-Content.    
return $content;
}
} // core_course_renderer_end
