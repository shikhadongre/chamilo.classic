<?php
/* For licensing terms, see /license.txt */

/**
*
* @package chamilo.learnpath
*/
/**
 * Code
 */

$_SESSION['whereami'] = 'lp/impress';
$this_section = SECTION_COURSES;

/* Libraries */
require_once 'back_compat.inc.php';
require_once 'scorm.lib.php';
require_once 'learnpath.class.php';
require_once 'learnpathItem.class.php';

//To prevent the template class
$show_learnpath = true;

api_protect_course_script();

$lp_id      = intval($_GET['lp_id']);

// Check if the learning path is visible for student - (LP requisites) 
if (!api_is_allowed_to_edit(null, true) && !learnpath::is_lp_visible_for_student($lp_id, api_get_user_id())) {
    api_not_allowed();
}     

//Checking visibility (eye icon)
$visibility = api_get_item_visibility(api_get_course_info(), TOOL_LEARNPATH, $lp_id, $action, api_get_user_id(), api_get_session_id());
if (!api_is_allowed_to_edit(null, true) && intval($visibility) == 0 ) {
     api_not_allowed();
}

if (empty($_SESSION['oLP'])) {
    api_not_allowed();
}

$debug = 0;

if ($debug) { error_log('------ Entering lp_impress.php -------'); }

$course_code    = api_get_course_id();
$course_id      = api_get_course_int_id();

$htmlHeadXtra[] = api_get_js('impress.js');
$htmlHeadXtra[] = '<script> 
    
$(document).ready(function() {
    impress().init(); 
});
</script>';

$list = $_SESSION['oLP']->get_toc();

$html = '';
$step = 1;
foreach ($list as $toc) {    
    $html .= '<div id="step-'.$step.'" class="step slide" data-x="0" data-y="-1500" >';
    $html .= $toc['title'];
    $html .= "</div>\n";
    $step ++;
}

$tpl = new Template($tool_name, false, false, true);

$tpl->assign('html', $html);
$content = $tpl->fetch('default/learnpath/impress.tpl');
$tpl->assign('content', $content);
$tpl->display_one_col_template();