<?php
/*
    DOKEOS - elearning and course management software

    For a full list of contributors, see documentation/credits.html
   
    This program is free software; you can redistribute it and/or
    modify it under the terms of the GNU General Public License
    as published by the Free Software Foundation; either version 2
    of the License, or (at your option) any later version.
    See "documentation/licence.html" more details.
 
    Contact: 
		Dokeos
		Rue des Palais 44 Paleizenstraat
		B-1030 Brussels - Belgium
		Tel. +32 (2) 211 34 56
*/

/**
*	@package dokeos.survey
* 	@author 
* 	@version $Id: attach_survey.php 10550 2006-12-24 16:17:25Z pcool $
*/

/*
==============================================================================
		INIT SECTION
==============================================================================
*/
// name of the language file that needs to be included 
$language_file = 'survey';

require_once ('../inc/global.inc.php');
//api_protect_admin_script();
require_once (api_get_path(LIBRARY_PATH).'/fileManage.lib.php');
require_once (api_get_path(CONFIGURATION_PATH) ."/add_course.conf.php");
require_once (api_get_path(LIBRARY_PATH)."/add_course.lib.inc.php");
require_once (api_get_path(LIBRARY_PATH)."/course.lib.php");
require (api_get_path(LIBRARY_PATH)."/groupmanager.lib.php");
require_once (api_get_path(LIBRARY_PATH)."/surveymanager.lib.php");
$status = surveymanager::get_status();
if($status==5)
{
api_protect_admin_script();
}
require_once (api_get_path(LIBRARY_PATH)."/usermanager.lib.php");
$MonthsLong = array(get_lang('JanuaryLong'), get_lang('FebruaryLong'), get_lang('"MarchLong'), get_lang('AprilLong'), get_lang('MayLong'), get_lang('JuneLong'), get_lang('JulyLong'), get_lang('AugustLong'), get_lang('SeptemberLong'), get_lang('OctoberLong'), get_lang('NovemberLong'), get_lang('DecemberLong')); 
$arr_date = explode("-",date("Y-m-d"));
$curr_year = $arr_date[0];
$curr_month = $arr_date[1];
$curr_day = $arr_date[2];
$coursePathWeb = api_get_path(WEB_COURSE_PATH);
$coursePathSys = api_get_path(SYS_COURSE_PATH);
$table_user = Database :: get_main_table(TABLE_MAIN_USER);
$cidReq = $_REQUEST['cidReq'];
$db_name = $_REQUEST['db_name'];
$table_survey = Database :: get_course_table('survey');
$table_group = Database :: get_course_table('survey_group');
$table_question = Database :: get_course_table('questions');
$table_course = Database :: get_main_table(TABLE_MAIN_COURSE);
$table_course_survey_rel = Database :: get_main_table(TABLE_MAIN_COURSE_SURVEY);
$tool_name = get_lang('CreateNewSurvey');
$tool_name1 = get_lang('CreateNewSurvey');
$interbreadcrumb[] = array ("url" => "survey_list.php", "name" => get_lang('Survey'));
$course_id = $_SESSION['_course']['id'];
$oldsurveyid=$_REQUEST['surveyid'];
$gids = $_REQUEST['gids'];
$survey_name=surveymanager::get_surveyname($db_name,$oldsurveyid);

if ($_POST['action'] == 'add_survey')
{
	$surveycode=$_POST['survey_code'];
	$surveytitle = $_POST['survey_title'];
	$surveysubtitle = $_POST['survey_subtitle'];
	//$cidReq = $_configuration['db_prefix'].$_POST['cidReq'];
	$author = $_POST['author'];
	$survey_language = $_POST['survey_language'];
	$availablefrom = $_POST['fyear']."-".$_POST['fmonth']."-".$_POST['fday'];
	$availabletill = $_POST['end_fyear']."-".$_POST['end_fmonth']."-".$_POST['end_fday'];
	$isshare = $_POST['isshare'];
	$surveytemplate = $_POST['template'];
	$surveyintroduction = $_POST['content'];
	$surveythanks = $_POST['thanks'];
	$savailablefrom=mktime(0,0,0,$_POST['fmonth'],$_POST['fday'], $_POST['fyear']); 
    $savailabletill=mktime(0,0,0,$_POST['end_fmonth'],$_POST['end_fday'], $_POST['end_fyear']);
    $cidReq=$_REQUEST['cidReq'];
	$gids = $_POST['gids'];
	$db_name = $_REQUEST['db_name'];
	$surveyid = $_REQUEST['surveyid'];	
	if(isset($_POST['back']))
	{
		$cidReq=$_REQUEST['cidReq'];
		$surveyid=$_REQUEST['surveyid'];
		$db_name=$_REQUEST['db_name'];
		header("location:create_from_existing_survey.php?cidReq=$cidReq&surveyid=$surveyid&db_name=$db_name");
	}
	$surveytitle=trim($surveytitle);
	$surveycode=trim($surveycode);
	if(empty ($surveytitle))
	{
		$error_message = get_lang('PleaseEnterSurveyTitle');      
	}
	elseif ($savailabletill<=$savailablefrom){
	$error_message = get_lang('PleaseEnterValidDate');
	}
	elseif (empty ($surveycode)){
	$error_message = get_lang('PleaseEnterValidCode');
	}
	else
    {
		$result=SurveyManager::get_survey_code($table_survey,$surveycode);
				
		if(!empty($result))
		{
			$error_message=get_lang('ThisCodeAlradyExists');
		}
		else
		{
     $survey_id = SurveyManager::create_survey($surveycode, $surveytitle, $surveysubtitle, $author, $survey_language, $availablefrom, $availabletill, $isshare, $surveytemplate, $surveyintroduction, $surveythanks, $table_survey, $table_group);
	 $cidReq=$_GET['cidReq'];
	$curr_dbname=SurveyManager::create_course_survey_rel($cidReq,$survey_id,$table_course,$table_course_survey_rel);
    $oldsurveyid=$_POST['surveyid'];
	$gids = $_POST['gids'];
	$db_name = $_REQUEST['db_name'];
	//surveymanager::insert_existing_groups($survey_id,$gids,$table_group,$table_question);
	surveymanager::import_group($survey_id,$gids,$db_name,$curr_dbname);
    /*
	$survey_id = SurveyManager::create_survey_attach($surveycode, $surveytitle, $surveysubtitle, $author, $survey_language, $availablefrom, $availabletill, $isshare, $surveytemplate, $surveyintroduction,$table_survey, $table_group);
    $oldsurveyid=$_POST['oldsurveyid'];
	SurveyManager::attach_survey($oldsurveyid,$survey_id,$table_group,$table_question);
	*/
	if (isset($_POST['next']))
	{
		 $cidReq=$_GET['cidReq'];
		 header("location:select_question_group.php?surveyid=$survey_id&cidReq=$cidReq&curr_dbname=$curr_dbname");
		 exit;
	}
	else
	{
		 $cidReq=$_GET['cidReq'];
		 header("location:survey_list.php?&cidReq=$cidReq");
		 exit;
	}
	}
	}	
}
Display::display_header($tool_name);
api_display_tool_title($tool_name1);
//echo "<pre>";
//print_r($_SESSION);
//echo "</pre>";
if( isset($error_message) )
{
	Display::display_error_message($error_message);	
}
?>
<SCRIPT LANGUAGE="JavaScript">
<!-- Begin
function displayTemplate(form) {
var inf = form.template.value;
if(inf=="")
	{
	   alert("Please Select a Template");
	}
else
	{
window.open(inf+".htm", 'popup', 'width=900,height=800,toolbar = no, status = no');
	}
//window.open(inf+".htm");
//win.document.write("" + inf + "");
}
//  End -->
</script>

<script src=tbl_change.js type="text/javascript" language="javascript"></script>
<form name="new_calendar_item" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>?cidReq=<?php echo $cidReq; ?>">
<input type="hidden" name="action" value="add_survey">
<input type="hidden" name="surveyid" value="<?php echo $oldsurveyid; ?>">
<input type="hidden" name="db_name" value="<?php echo $db_name; ?>">
<input type="hidden" name="gids" value="<?php echo $gids; ?>">
<table>
<tr>
 <td><?php echo get_lang('SurveyCode'); ?></td>
 <td><input type="text" name="survey_code" size="20" maxlength="39" value="<?php echo $surveycode; ?>"></td>
</tr>
<tr>
  <td><?php echo get_lang('SurveyTitle'); ?></td>
  <td><input type="text" name="survey_title" size="40" maxlength="79" value="<?php echo $surveytitle ?>"></td>
</tr>
<tr>
  <td><?php echo get_lang('SurveySubtitle'); ?></td>
  <td><input type="text" name="survey_subtitle" size="40" maxlength="79" value="<?php echo $surveysubtitle ?>"></td>
</tr>
<tr>
<?php
   if($_SESSION['is_platformAdmin']=='1'||$_SESSION['is_courseAdmin'])
   {
 echo "<td>";
 echo get_lang('Author'); 
 echo "</td>";
 echo "<td>";  	
 UserManager::get_teacher_list($course_id, $author_id);
 echo "</td>";
   }   
?>  
</tr>
<tr>
  <td><?php echo get_lang('SurveyLanguage'); ?>&nbsp;</td>
  <td>
	<select name="survey_language">
    <option value="english"  selected="selected">English</option>
    <option value="french" >Fran&ccedil;ais</option>
    <option value="dutch" >Nederlands</option>
    </select>
  </td>
</tr>
<tr id="subtitle">
  <td><?php echo get_lang('AvailableFrom'); ?>&nbsp;</td>
  <td>	
<select name="fday">
<?php 
	for($i=1;$i<=31;$i++){
	if($i<=9) $val = "0".$i;
	else $val = $i;
	if ($val==$curr_day) $selected = "selected";
	else $selected = "";
	echo "<option value=\"$val\" $selected>$i</option>";
	}
?>
</select>
<!-- month: january ->
december -->
<select name="fmonth">
<?
		for($i=1;$i<count($MonthsLong);$i++)
		{
			if($i<=9)
			$val = "0".$i;
			else
			$val = $i;
			if($val == $curr_month)
			echo   "<option value=\"$val\" selected>".$MonthsLong[$i-1]."</option>\n";
			else
			echo   "<option value=\"$val\">".$MonthsLong[$i-1]."</option>\n";
		}
?>
</select>
<select name="fyear">
<?php 
	for($i=$curr_year;$i<=$curr_year+10;$i++){
		if($i == $curr_year)
		echo   "<option value=\"$i\" selected>$i</option>\n";
		else
		echo   "<option value=\"$i\">$i</option>\n";
	}
?>
</select>
<a title="Calender" href="javascript:openCalendar('new_calendar_item', 'f')"><img src="../img/calendar_select.gif" border="0" align="absmiddle"/></a></td>
	</tr>
				
<tr id="subtitle">
  <td><?php echo get_lang('AvailableTill'); ?>&nbsp;</td>
  <td>
<select name="end_fday">
	<?php for($i=1;$i<=31;$i++){
		if($i<=9)
		$val = "0".$i;
		else
		$val = $i;
		if ($val==$curr_day) $selected = "selected";
		else $selected = "";
		echo "<option value=\"$val\" $selected>$i</option>";	
		}
	?>
</select>
    <!-- month: january ->
december -->
<select name="end_fmonth">
<?php 
		for($i=1;$i<count($MonthsLong);$i++)
		{
			if($i<=9)
			$val = "0".$i;
			else
			$val = $i;
			if($val == $curr_month)
			echo   "<option value=\"$val\" selected>".$MonthsLong[$i-1]."</option>\n";
			else
			echo   "<option value=\"$val\">".$MonthsLong[$i-1]."</option>\n";
		}
?>
</select>
<select name="end_fyear">
<?php 
	for($i=$curr_year;$i<=$curr_year+10;$i++){
		if($i == $curr_year+1)
		echo   "<option value=\"$i\" selected>$i</option>\n";
		else
		echo   "<option value=\"$i\">$i</option>\n";
	}
?>
</select>
<a title="Calender" href="javascript:openCalendar('new_calendar_item', 'end_f')"><img src="../img/calendar_select.gif" border="0" align="absmiddle"/></a></td>
	</tr>
<tr>
<td valign="top"><?php echo get_lang('IsShareSurvey'); ?>&nbsp;</td>
<td>
<input type="radio" name="isshare" value="1">Yes&nbsp;<input type="radio" name="isshare" value="0" checked>No
</td>
</tr>
 <tr>
  <td><?php echo get_lang('SurveyTemplate'); ?>&nbsp;</td>
<td>
<select name="template">
<option value="template1">OFO_nl</option>
<option value="template2">IFA_fr</option>
<option value="template3">SPF P&O_FR</option>
<option value="template4">FOD P&O_NL</option>
<option value="template5">Blank</option>
</select>
<input type="button" value="<?php echo get_lang('Preview');?>" onClick="displayTemplate(new_calendar_item)">
</td>
</tr>
<tr><td valign="top"><?php echo get_lang('SurveyIntroduction'); ?>&nbsp;</td>
 <td>
   <?php
         api_disp_html_area('content',$content,'300px');
			/*$oFCKeditor = new FCKeditor('content') ;
			$oFCKeditor->BasePath = 'FCKeditor/';
			$oFCKeditor->Value = 'Enter your introduction text here';
			$oFCKeditor->Width  = '600' ;
			$oFCKeditor->Height = '400' ;
			$oFCKeditor->Create();
*/
   ?>
          <br>
        </td>
 </tr>
 <tr><td valign="top"><?php echo get_lang('Thanks'); ?>&nbsp;</td>
 <td>
 <?php
      api_disp_html_area('thanks',$thanks,'200px');
 ?>
 <br>
 </td>
 </tr>
  <tr>
 <td><?php echo get_lang('SurveyAttached');?>&nbsp;&nbsp;<?php echo $survey_name;?></td>
 </tr>
 </table>
 <tr>
  <td>&nbsp;</td>
  <td><input type="submit" name="back" value="<?php echo get_lang('Back');?>"></td>
  <td><input type="submit" name="saveandexit" value="<?php echo get_lang('CreateLater'); ?>"></td>
  <td><input type="submit" name="next" value="<?php echo get_lang('Next'); ?>"></td>
</tr>
</table>
</form>
</table>
<?php
Display :: display_footer();
?>