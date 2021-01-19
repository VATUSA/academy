<?php
require_once(dirname(__FILE__).'/header.php');
$bodyattributes = $OUTPUT->body_attributes([$bodyclasses]);
$templatecontext = [
'sitename' => format_string($SITE->shortname, true, ['context' => context_course::instance(SITEID), "escape" => false]),
'output' => $OUTPUT,
'bodyattributes' => $bodyattributes,
'internalbannertagline' => $internalbannertagline,
];
echo $OUTPUT->render_from_template('theme_klassroom/contentonly', $templatecontext);
require_once(dirname(__FILE__).'/footer.php');
