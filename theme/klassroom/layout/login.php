<?php
   defined('MOODLE_INTERNAL') || die();
   require_once(dirname(__FILE__).'/header.php');
   
   $bodyattributes = $OUTPUT->body_attributes($bodyclasses);
   
   $templatecontext = [
       'sitename' => format_string($SITE->shortname, true, ['context' => context_course::instance(SITEID), "escape" => false]),
       'output' => $OUTPUT,
       'bodyattributes' => $bodyattributes,
   
       // Global
       'favicon' => $favicon,
   ];
   
   echo $OUTPUT->render_from_template('theme_klassroom/login', $templatecontext);
   ?>
