<?php //$id: $
/**
 * Script opened in an iframe and containing the learning path's navigation and progress bar
 * @package dokeos.learnpath
 * @author Yannick Warnier <ywarnier@beeznest.org>
 * @license	GNU/GPL - See Dokeos license directory for details
 */
/**
 * Script
 */
// name of the language file that needs to be included 
$language_file[] = "scormdocument";
$language_file[] = "scorm";
$language_file[] = "learnpath";
require_once('back_compat.inc.php');
require_once('learnpath.class.php');
require_once('scorm.class.php');
require_once('aicc.class.php');

//error_log('New LP - Loaded lp_nav: '.$_SERVER['REQUEST_URI'],0);

if(isset($_SESSION['lpobject']))
{
	//if($debug>0) //error_log('New LP - in lp_nav.php - SESSION[lpobject] is defined',0);
	$oLP = unserialize($_SESSION['lpobject']);
	if(is_object($oLP)){
		$_SESSION['oLP'] = $oLP;
	}else{
		//error_log('New LP - in lp_nav.php - SESSION[lpobject] is not object - dying',0);
		die('Could not instanciate lp object');
	}
}

$htmlHeadXtra[] = '<script language="JavaScript" type="text/javascript">
  var dokeos_xajax_handler = window.parent.oxajax;
</script>';
if($_SESSION['oLP']->mode == 'fullscreen'){
	$htmlHeadXtra[] = '<style type="text/css" media="screen, projection">
						/*<![CDATA[*/
						@import "scormfs.css";
						/*]]>*/
						</style>';
}else{
	$htmlHeadXtra[] = '<style type="text/css" media="screen, projection">
						/*<![CDATA[*/
						@import "scorm.css";
						/*]]>*/
						</style>';
}
include_once('../inc/reduced_header.inc.php');
?>

<body>
	<div class="lp_navigation_elem">
	  <?php echo $_SESSION['oLP']->get_progress_bar(); ?>
	  <?php echo $_SESSION['oLP']->get_navigation_bar(); ?>
	</div>
</body>
</html>
<?php
if(!empty($_SESSION['oLP'])){
	$_SESSION['lpobject'] = serialize($_SESSION['oLP']);
}
?>
