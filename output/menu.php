<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");


include("include/dbcommon.php");

if(!@$_SESSION["UserID"])
{
	header("Location: login.php");
	return;
}

$layout = new TLayout("menu","BoldOrange","MobileOrange");
$layout->blocks["top"] = array();
$layout->containers["menu"] = array();

$layout->containers["menu"][] = array("name"=>"menulogas","block"=>"loggedas_block","substyle"=>1);


$layout->containers["menu"][] = array("name"=>"menulogout","block"=>"logout_link","substyle"=>1);



$layout->containers["menu"][] = array("name"=>"vmenu","block"=>"menu_block","substyle"=>1);


$layout->skins["menu"] = "menu";
$layout->blocks["top"][] = "menu";$page_layouts["menu"] = $layout;


include('include/xtempl.php');
include('classes/runnerpage.php');
$xt = new Xtempl();

$id = postvalue("id")!=="" ? postvalue("id") : 1;

//array of params for classes
$params["pageType"] = PAGE_MENU;
$params["id"] = $id; 
$params["isGroupSecurity"] = $isGroupSecurity;
$params["xt"] = &$xt;
$params["tName"] = "global";
$params["needSearchClauseObj"] = false;
$pageObject = new RunnerPage($params);

// button handlers file names

//	Before Process event
if($globalEvents->exists("BeforeProcessMenu"))
	$globalEvents->BeforeProcessMenu($conn);

$pageObject->body["begin"] .= "<script type=\"text/javascript\" src=\"include/loadfirst.js\"></script>";
$pageObject->body["begin"] .= "<script type=\"text/javascript\" src=\"include/lang/".getLangFileName(mlang_getcurrentlang()).".js\"></script>";				

$pageObject->addCommonJs();

//fill jsSettings and ControlsHTMLMap
$pageObject->fillSetCntrlMaps();
$pageObject->body['end'] .= '<script>';
$pageObject->body['end'] .= "window.controlsMap = ".my_json_encode($pageObject->controlsHTMLMap).";";
$pageObject->body['end'] .= "window.settings = ".my_json_encode($pageObject->jsSettings).";</script>";
$pageObject->body["end"] .= "<script type=\"text/javascript\" src=\"include/runnerJS/RunnerAll.js\"></script>";
$pageObject->body["end"] .= '<script>'.$pageObject->PrepareJS()."</script>";
$xt->assignbyref("body",$pageObject->body);

$xt->assign("username",$_SESSION["UserID"]);
$xt->assign("changepwd_link",$_SESSION["AccessLevel"] != ACCESS_LEVEL_GUEST);
$xt->assign("changepwdlink_attrs","onclick=\"window.location.href='changepwd.php';return false;\"");
$xt->assign("logoutlink_attrs","onclick=\"window.location.href='login.php?a=logout';return false;\"");

$xt->assign("loggedas_block",true);
$xt->assign("logout_link",true);

// get redirect location for menu page
$redirect = $pageObject->getRedirectForMenuPage();
if($redirect)
{
	header("Location: ".$redirect); 
	exit();
}

$xt->assign("menu_block",true);
$templatefile = "menu.htm";
if($globalEvents->exists("BeforeShowMenu"))
	$globalEvents->BeforeShowMenu($xt, $templatefile);

$xt->display($templatefile);
?>