<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");

add_nocache_headers();

include('include/xtempl.php');
include("include/Electricity_Rates_variables.php");
include('classes/runnerpage.php');
include('classes/listpage.php');
include("classes/searchpanel.php");
include("classes/searchcontrol.php");
include("classes/searchclause.php");
include("classes/panelsearchcontrol.php");	

if(!@$_SESSION["UserID"])
{ 
	$_SESSION["MyURL"]=$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
	header("Location: login.php?message=expired"); 
	return;
}
if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search") && !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Add"))
{
	if(IsAdmin())
		echo "<p>".mlang_message("NO_PERMISSIONS")."<br><a href=\"admin_rights_list.php\">".mlang_message("AA_PROCEED_TO_ADMINAREA1")."</a> ".mlang_message("AA_PROCEED_TO_ADMINAREA2")."</p>";
	else
		echo "<p>".mlang_message("NO_PERMISSIONS")." <a href=\"login.php\">".mlang_message("BACK_TO_LOGIN")."</a></p>";
	exit();
}


$layout = new TLayout("list2","BoldOrange","MobileOrange");
$layout->blocks["center"] = array();
$layout->containers["recordcontrols"] = array();

$layout->containers["recordcontrols"][] = array("name"=>"recordcontrols_new","block"=>"newrecord_controls","substyle"=>1);


$layout->containers["recordcontrols"][] = array("name"=>"recordcontrol","block"=>"record_controls","substyle"=>1);


$layout->skins["recordcontrols"] = "1";
$layout->blocks["center"][] = "recordcontrols";
$layout->containers["message"] = array();

$layout->containers["message"][] = array("name"=>"message","block"=>"message_block","substyle"=>1);


$layout->skins["message"] = "2";
$layout->blocks["center"][] = "message";
$layout->containers["grid"] = array();

$layout->containers["grid"][] = array("name"=>"grid","block"=>"grid_block","substyle"=>1);


$layout->skins["grid"] = "grid";
$layout->blocks["center"][] = "grid";
$layout->containers["pagination"] = array();

$layout->containers["pagination"][] = array("name"=>"pagination","block"=>"pagination_block","substyle"=>1);


$layout->skins["pagination"] = "2";
$layout->blocks["center"][] = "pagination";$layout->blocks["left"] = array();
$layout->containers["lang"] = array();

$layout->containers["lang"][] = array("name"=>"languages","block"=>"languages_block","substyle"=>1);


$layout->skins["lang"] = "menu";
$layout->blocks["left"][] = "lang";
$layout->containers["logg"] = array();

$layout->containers["logg"][] = array("name"=>"loggedas","block"=>"security_block","substyle"=>1);


$layout->skins["logg"] = "menu";
$layout->blocks["left"][] = "logg";
$layout->containers["left"] = array();

$layout->containers["left"][] = array("name"=>"searchpanel","block"=>"searchPanel","substyle"=>1);


$layout->containers["left"][] = array("name"=>"vmenu","block"=>"menu_block","substyle"=>1);


$layout->skins["left"] = "menu";
$layout->blocks["left"][] = "left";$layout->blocks["top"] = array();
$layout->skins["master"] = "empty";
$layout->blocks["top"][] = "master";
$layout->containers["toplinks"] = array();

$layout->containers["toplinks"][] = array("name"=>"toplinks_print","block"=>"prints_block","substyle"=>1);


$layout->containers["toplinks"][] = array("name"=>"toplinks_advsearch","block"=>"asearch_link","substyle"=>1);


$layout->containers["toplinks"][] = array("name"=>"toplinks_import","block"=>"import_link","substyle"=>1);


$layout->containers["toplinks"][] = array("name"=>"toplinks_export","block"=>"export_link","substyle"=>1);



$layout->skins["toplinks"] = "empty";
$layout->blocks["top"][] = "toplinks";
$layout->containers["search"] = array();

$layout->containers["search"][] = array("name"=>"search","block"=>"searchform_block","substyle"=>1);


$layout->containers["search"][] = array("name"=>"search_buttons","block"=>"searchformbuttons_block","substyle"=>1);


$layout->containers["search"][] = array("name"=>"details_found","block"=>"details_block","substyle"=>1);


$layout->containers["search"][] = array("name"=>"page_of","block"=>"pages_block","substyle"=>1);


$layout->containers["search"][] = array("name"=>"recsperpage","block"=>"recordspp_block","substyle"=>1);


$layout->skins["search"] = "2";
$layout->blocks["top"][] = "search";$page_layouts["Electricity_Rates_list"] = $layout;



//	Include necessary files in accordance with mode displaying page
if (postvalue("mode")=="")
{
	$mode = LIST_SIMPLE;
	include('classes/listpage_simple.php');
	include("classes/searchpanelsimple.php");	
}
elseif(postvalue("mode") == "ajax")
{
	$mode = LIST_AJAX;
	include('classes/listpage_simple.php');
	include('classes/listpage_ajax.php');
	include("classes/searchpanelsimple.php");	
}
elseif(postvalue("mode") == "lookup")
{	
	include('classes/listpage_embed.php');
	include('classes/listpage_lookup.php');
	include("classes/searchpanellookup.php");	
	$mode=LIST_LOOKUP;
	//determine which field should be used to select values
			$params["lookupSelectField"] = "Units";
	}
elseif(postvalue("mode")=="listdetails")
{
	
	include('classes/listpage_embed.php');
	include('classes/listpage_dpinline.php');
	$mode=LIST_DETAILS;
}
$xt = new Xtempl();

// Modify query: remove blob fields from fieldlist.
// Blob fields on a list page are shown using imager.php (for example).
// They don't need to be selected from DB in list.php itself.
$noBlobReplace = false;

if (!$noBlobReplace){
	$gQuery->ReplaceFieldsWithDummies(GetBinaryFieldsIndices());
}
$options = array();
//array of params for classes
$options["pageType"] = PAGE_LIST;
$options["id"] = postvalue("id") ? postvalue("id") : 1;
$options["mode"] = $mode;
$options['xt'] = &$xt;
$options['mainMasterPageType'] = postvalue("mainmasterpagetype");
$options['masterPageType'] = postvalue("masterpagetype");
$options["masterTable"] = postvalue("mastertable");
$options["masterId"] = postvalue("masterid");
$options["firstTime"] = postvalue("firsttime");

$i = 1;
while(isset($_REQUEST["masterkey".$i])) 
{	
	$options["masterKeysReq"][$i] = $_REQUEST["masterkey".$i];
	$i++;
}
$pageObject = ListPage::createListPage($strTableName, $options);
 

unset($_SESSION["message_add"]);
unset($_SESSION["message_edit"]);

// prepare code for build page
$pageObject->prepareForBuildPage();

$includesArr = array();

//include files if need
for($i=0;$i<count($includesArr);$i++)
	include($includesArr[$i]);

// show page depends of mode

$pageObject->showPage();

?>
