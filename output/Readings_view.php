<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
include("include/Readings_variables.php");

add_nocache_headers();
//	check if logged in
if(!@$_SESSION["UserID"] || !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search"))
{ 
	$_SESSION["MyURL"]=$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
	header("Location: login.php?message=expired"); 
	return;
}

$layout = new TLayout("view2","BoldOrange","MobileOrange");
$layout->blocks["top"] = array();
$layout->skins["pdf"] = "empty";
$layout->blocks["top"][] = "pdf";
$layout->containers["view"] = array();

$layout->containers["view"][] = array("name"=>"viewheader","block"=>"","substyle"=>2);


$layout->containers["view"][] = array("name"=>"wrapper","block"=>"","substyle"=>1);


$layout->containers["fields"] = array();

$layout->containers["fields"][] = array("name"=>"viewfields","block"=>"","substyle"=>1);


$layout->containers["fields"][] = array("name"=>"viewbuttons","block"=>"","substyle"=>2);


$layout->skins["fields"] = "fields";

$layout->skins["view"] = "1";
$layout->blocks["top"][] = "view";
$layout->skins["details"] = "empty";
$layout->blocks["top"][] = "details";$page_layouts["Readings_view"] = $layout;




include('include/xtempl.php');
include('classes/runnerpage.php');
include("classes/searchclause.php");
$xt = new Xtempl();


$query = $gQuery->Copy();

$filename = "";	
$message = "";
$key = array();
$next = array();
$prev = array();
$all = postvalue("all");
$pdf = postvalue("pdf");
$mypage = 1;

//Show view page as popUp or not
$inlineview = (postvalue("onFly") ? true : false);

//If show view as popUp, get parent Id
if($inlineview)
	$parId = postvalue("parId");
else
	$parId = 0;

//Set page id	
if(postvalue("id"))
	$id = postvalue("id");
else
	$id = 1;

//$isNeedSettings = true;//($inlineview && postvalue("isNeedSettings") == 'true') || (!$inlineview);	
	
// assign an id			
$xt->assign("id",$id);

//array of params for classes
$params = array("pageType" => PAGE_VIEW, "id" =>$id, "tName"=>$strTableName);
$params["xt"] = &$xt;
//Get array of tabs for edit page
$params['useTabsOnView'] = useTabsOnView($strTableName);
if($params['useTabsOnView'])
	$params['arrViewTabs'] = GetViewTabs($strTableName);
$pageObject = new RunnerPage($params);

// SearchClause class stuff
$pageObject->searchClauseObj->parseRequest();
$_SESSION[$strTableName.'_advsearch'] = serialize($pageObject->searchClauseObj);

// proccess big google maps

// add button events if exist
$pageObject->addButtonHandlers();

//For show detail tables on master page view
$dpParams = array();
if($pageObject->isShowDetailTables && !isMobile())
{
	$ids = $id;
	$pageObject->jsSettings['tableSettings'][$strTableName]['dpParams'] = array();
}


//	Before Process event
if($eventObj->exists("BeforeProcessView"))
	$eventObj->BeforeProcessView($conn);

$strWhereClause = '';
$strHavingClause = '';
if(!$all)
{
//	show one record only
	$keys=array();
	$strWhereClause="";
	$keys["Record ID"]=postvalue("editid1");
	$strWhereClause = KeyWhere($keys);
	$strSQL = gSQLWhere($strWhereClause);
}
else
{
	if ($_SESSION[$strTableName."_SelectedSQL"]!="" && @$_REQUEST["records"]=="") 
	{
		$strSQL = $_SESSION[$strTableName."_SelectedSQL"];
		$strWhereClause=@$_SESSION[$strTableName."_SelectedWhere"];
	}
	else
	{
		$strWhereClause=@$_SESSION[$strTableName."_where"];
		$strHavingClause=@$_SESSION[$strTableName."_having"];
		$strSQL=gSQLWhere($strWhereClause,$strHavingClause);
	}
//	order by
	$strOrderBy=$_SESSION[$strTableName."_order"];
	if(!$strOrderBy)
		$strOrderBy=$gstrOrderBy;
	$strSQL.=" ".trim($strOrderBy);
}

$strSQLbak = $strSQL;
if($eventObj->exists("BeforeQueryView"))
	$eventObj->BeforeQueryView($strSQL,$strWhereClause);
if($strSQLbak == $strSQL)
{
	$strSQL=gSQLWhere($strWhereClause,$strHavingClause);
	if($all)
	{
		$numrows=gSQLRowCount($strWhereClause,$strHavingClause);
		$strSQL.=" ".trim($strOrderBy);
	}
}
else
{
//	changed $strSQL - old style	
	if($all)
	{
		$numrows=GetRowCount($strSQL);
	}
}

if(!$all)
{
	LogInfo($strSQL);
	$rs=db_query($strSQL,$conn);
}
else
{
//	 Pagination:
	$nPageSize=0;
	if(@$_REQUEST["records"]=="page" && $numrows)
	{
		$mypage=(integer)@$_SESSION[$strTableName."_pagenumber"];
		$nPageSize=(integer)@$_SESSION[$strTableName."_pagesize"];
		if($numrows<=($mypage-1)*$nPageSize)
			$mypage=ceil($numrows/$nPageSize);
		if(!$nPageSize)
			$nPageSize=$gPageSize;
		if(!$mypage)
			$mypage=1;
		$strSQL = AddTop($strSQL, $mypage*$nPageSize);
	}
	$rs=db_query($strSQL,$conn);
	db_pageseek($rs,$nPageSize,$mypage);
}

$data=db_fetch_array($rs);

if($eventObj->exists("ProcessValuesView"))
	$eventObj->ProcessValuesView($data);

$out="";
$first=true;

$templatefile="";
$fieldsArr = array();
$arr = array();
$arr['fName'] = "Record ID";
$arr['viewFormat'] = ViewFormat("Record ID", $strTableName);
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Module ID";
$arr['viewFormat'] = ViewFormat("Module ID", $strTableName);
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Voltage Red";
$arr['viewFormat'] = ViewFormat("Voltage Red", $strTableName);
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Voltage Blue";
$arr['viewFormat'] = ViewFormat("Voltage Blue", $strTableName);
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Voltage Yellow";
$arr['viewFormat'] = ViewFormat("Voltage Yellow", $strTableName);
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Currunt Red";
$arr['viewFormat'] = ViewFormat("Currunt Red", $strTableName);
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Currunt Blue";
$arr['viewFormat'] = ViewFormat("Currunt Blue", $strTableName);
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Currunt Yellow";
$arr['viewFormat'] = ViewFormat("Currunt Yellow", $strTableName);
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "PF Red";
$arr['viewFormat'] = ViewFormat("PF Red", $strTableName);
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "PF Blue";
$arr['viewFormat'] = ViewFormat("PF Blue", $strTableName);
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "PF Yellow";
$arr['viewFormat'] = ViewFormat("PF Yellow", $strTableName);
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Peak Power";
$arr['viewFormat'] = ViewFormat("Peak Power", $strTableName);
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Date Time";
$arr['viewFormat'] = ViewFormat("Date Time", $strTableName);
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "IsSync";
$arr['viewFormat'] = ViewFormat("IsSync", $strTableName);
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Currunt Readings";
$arr['viewFormat'] = ViewFormat("Currunt Readings", $strTableName);
$fieldsArr[] = $arr;

$mainTableOwnerID = GetTableData($strTableName,".mainTableOwnerID",'');
$ownerIdValue="";

$pageObject->setGoogleMapsParams($fieldsArr);

while($data)
{
	$xt->assign("show_key1", htmlspecialchars(GetData($data,"Record ID", "")));

	$keylink="";
	$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["Record ID"]));

////////////////////////////////////////////
//Record ID - 
	
	$value="";
	$value = ProcessLargeText(GetData($data,"Record ID", ""),"","",MODE_VIEW);
	if($mainTableOwnerID=="Record ID")
		$ownerIdValue=$value;
	$xt->assign("Record_ID_value",$value);
	if(!$pageObject->isAppearOnTabs("Record ID"))
		$xt->assign("Record_ID_fieldblock",true);
	else
		$xt->assign("Record_ID_tabfieldblock",true);
////////////////////////////////////////////
//Module ID - 
	
	$value="";
	$value=DisplayLookupWizard("Module ID",$data["Module ID"],$data,$keylink,MODE_VIEW);
	if($mainTableOwnerID=="Module ID")
		$ownerIdValue=$value;
	$xt->assign("Module_ID_value",$value);
	if(!$pageObject->isAppearOnTabs("Module ID"))
		$xt->assign("Module_ID_fieldblock",true);
	else
		$xt->assign("Module_ID_tabfieldblock",true);
////////////////////////////////////////////
//Voltage Red - 
	
	$value="";
	$value = ProcessLargeText(GetData($data,"Voltage Red", ""),"","",MODE_VIEW);
	if($mainTableOwnerID=="Voltage Red")
		$ownerIdValue=$value;
	$xt->assign("Voltage_Red_value",$value);
	if(!$pageObject->isAppearOnTabs("Voltage Red"))
		$xt->assign("Voltage_Red_fieldblock",true);
	else
		$xt->assign("Voltage_Red_tabfieldblock",true);
////////////////////////////////////////////
//Voltage Blue - 
	
	$value="";
	$value = ProcessLargeText(GetData($data,"Voltage Blue", ""),"","",MODE_VIEW);
	if($mainTableOwnerID=="Voltage Blue")
		$ownerIdValue=$value;
	$xt->assign("Voltage_Blue_value",$value);
	if(!$pageObject->isAppearOnTabs("Voltage Blue"))
		$xt->assign("Voltage_Blue_fieldblock",true);
	else
		$xt->assign("Voltage_Blue_tabfieldblock",true);
////////////////////////////////////////////
//Voltage Yellow - 
	
	$value="";
	$value = ProcessLargeText(GetData($data,"Voltage Yellow", ""),"","",MODE_VIEW);
	if($mainTableOwnerID=="Voltage Yellow")
		$ownerIdValue=$value;
	$xt->assign("Voltage_Yellow_value",$value);
	if(!$pageObject->isAppearOnTabs("Voltage Yellow"))
		$xt->assign("Voltage_Yellow_fieldblock",true);
	else
		$xt->assign("Voltage_Yellow_tabfieldblock",true);
////////////////////////////////////////////
//Currunt Red - 
	
	$value="";
	$value = ProcessLargeText(GetData($data,"Currunt Red", ""),"","",MODE_VIEW);
	if($mainTableOwnerID=="Currunt Red")
		$ownerIdValue=$value;
	$xt->assign("Currunt_Red_value",$value);
	if(!$pageObject->isAppearOnTabs("Currunt Red"))
		$xt->assign("Currunt_Red_fieldblock",true);
	else
		$xt->assign("Currunt_Red_tabfieldblock",true);
////////////////////////////////////////////
//Currunt Blue - 
	
	$value="";
	$value = ProcessLargeText(GetData($data,"Currunt Blue", ""),"","",MODE_VIEW);
	if($mainTableOwnerID=="Currunt Blue")
		$ownerIdValue=$value;
	$xt->assign("Currunt_Blue_value",$value);
	if(!$pageObject->isAppearOnTabs("Currunt Blue"))
		$xt->assign("Currunt_Blue_fieldblock",true);
	else
		$xt->assign("Currunt_Blue_tabfieldblock",true);
////////////////////////////////////////////
//Currunt Yellow - 
	
	$value="";
	$value = ProcessLargeText(GetData($data,"Currunt Yellow", ""),"","",MODE_VIEW);
	if($mainTableOwnerID=="Currunt Yellow")
		$ownerIdValue=$value;
	$xt->assign("Currunt_Yellow_value",$value);
	if(!$pageObject->isAppearOnTabs("Currunt Yellow"))
		$xt->assign("Currunt_Yellow_fieldblock",true);
	else
		$xt->assign("Currunt_Yellow_tabfieldblock",true);
////////////////////////////////////////////
//PF Red - 
	
	$value="";
	$value = ProcessLargeText(GetData($data,"PF Red", ""),"","",MODE_VIEW);
	if($mainTableOwnerID=="PF Red")
		$ownerIdValue=$value;
	$xt->assign("PF_Red_value",$value);
	if(!$pageObject->isAppearOnTabs("PF Red"))
		$xt->assign("PF_Red_fieldblock",true);
	else
		$xt->assign("PF_Red_tabfieldblock",true);
////////////////////////////////////////////
//PF Blue - 
	
	$value="";
	$value = ProcessLargeText(GetData($data,"PF Blue", ""),"","",MODE_VIEW);
	if($mainTableOwnerID=="PF Blue")
		$ownerIdValue=$value;
	$xt->assign("PF_Blue_value",$value);
	if(!$pageObject->isAppearOnTabs("PF Blue"))
		$xt->assign("PF_Blue_fieldblock",true);
	else
		$xt->assign("PF_Blue_tabfieldblock",true);
////////////////////////////////////////////
//PF Yellow - 
	
	$value="";
	$value = ProcessLargeText(GetData($data,"PF Yellow", ""),"","",MODE_VIEW);
	if($mainTableOwnerID=="PF Yellow")
		$ownerIdValue=$value;
	$xt->assign("PF_Yellow_value",$value);
	if(!$pageObject->isAppearOnTabs("PF Yellow"))
		$xt->assign("PF_Yellow_fieldblock",true);
	else
		$xt->assign("PF_Yellow_tabfieldblock",true);
////////////////////////////////////////////
//Peak Power - 
	
	$value="";
	$value = ProcessLargeText(GetData($data,"Peak Power", ""),"","",MODE_VIEW);
	if($mainTableOwnerID=="Peak Power")
		$ownerIdValue=$value;
	$xt->assign("Peak_Power_value",$value);
	if(!$pageObject->isAppearOnTabs("Peak Power"))
		$xt->assign("Peak_Power_fieldblock",true);
	else
		$xt->assign("Peak_Power_tabfieldblock",true);
////////////////////////////////////////////
//Date Time - Short Date
	
	$value="";
	$value = ProcessLargeText(GetData($data,"Date Time", "Short Date"),"","",MODE_VIEW);
	if($mainTableOwnerID=="Date Time")
		$ownerIdValue=$value;
	$xt->assign("Date_Time_value",$value);
	if(!$pageObject->isAppearOnTabs("Date Time"))
		$xt->assign("Date_Time_fieldblock",true);
	else
		$xt->assign("Date_Time_tabfieldblock",true);
////////////////////////////////////////////
//IsSync - Checkbox
	
	$value="";
	$value = GetData($data,"IsSync", "Checkbox");
	if($mainTableOwnerID=="IsSync")
		$ownerIdValue=$value;
	$xt->assign("IsSync_value",$value);
	if(!$pageObject->isAppearOnTabs("IsSync"))
		$xt->assign("IsSync_fieldblock",true);
	else
		$xt->assign("IsSync_tabfieldblock",true);
////////////////////////////////////////////
//Currunt Readings - 
	
	$value="";
	$value = ProcessLargeText(GetData($data,"Currunt Readings", ""),"","",MODE_VIEW);
	if($mainTableOwnerID=="Currunt Readings")
		$ownerIdValue=$value;
	$xt->assign("Currunt_Readings_value",$value);
	if(!$pageObject->isAppearOnTabs("Currunt Readings"))
		$xt->assign("Currunt_Readings_fieldblock",true);
	else
		$xt->assign("Currunt_Readings_tabfieldblock",true);

/*$jsKeysObj = 'window.recKeysObj = {';
	$jsKeysObj .= "'".jsreplace("Record ID")."': '".(jsreplace(@$data["Record ID"]))."', ";
$jsKeysObj = substr($jsKeysObj, 0, strlen($jsKeysObj)-2);
$jsKeysObj .= '};';
$pageObject->AddJsCode($jsKeysObj);	
*/
/////////////////////////////////////////////////////////////
if($pageObject->isShowDetailTables && !isMobile())
{
	if(count($dpParams['ids']))
	{
		$xt->assign("detail_tables",true);
		include('classes/listpage.php');
		include('classes/listpage_embed.php');
		include('classes/listpage_dpinline.php');
	}
	
	$dControlsMap = array();
	
	for($d=0;$d<count($dpParams['ids']);$d++)
	{
		$options = array();
		//array of params for classes
		$options["mode"] = LIST_DETAILS;
		$options["pageType"] = PAGE_LIST;
		$options["masterPageType"] = PAGE_VIEW;
		$options["mainMasterPageType"] = PAGE_VIEW;
		$options['masterTable'] = "dbo.Readings";
		$options['firstTime'] = 1;
		
		$strTableName = $dpParams['strTableNames'][$d];
		include("include/".GetTableURL($strTableName)."_settings.php");
		if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search"))
		{
			$strTableName = "dbo.Readings";
			continue;
		}
		
		$options['xt'] = new Xtempl();
		$options['id'] = $dpParams['ids'][$d];
		$options['flyId'] = $pageObject->genId()+1;
		$mkr = 1;
		foreach($mKeys[$strTableName] as $mk)
		{
			$options['masterKeysReq'][$mkr++] = $data[$mk];
		}
		$listPageObject = ListPage::createListPage($strTableName, $options);
		// prepare code
		$listPageObject->prepareForBuildPage();
		// show page
		if(!$pdf && $listPageObject->isDispGrid())
		{
			//add detail settings to master settings
			$listPageObject->fillSetCntrlMaps();
			$pageObject->jsSettings['tableSettings'][$strTableName]	= $listPageObject->jsSettings['tableSettings'][$strTableName];
			$dControlsMap[$strTableName] = $listPageObject->controlsMap;
			foreach($listPageObject->jsSettings['global']['shortTNames'] as $keySet=>$val)
			{
				if(!array_key_exists($keySet,$pageObject->settingsMap["globalSettings"]['shortTNames']))
				{
					$pageObject->settingsMap["globalSettings"]['shortTNames'][$keySet] = $val;
				}
			}
			
			//Add detail's js files to master's files
			$pageObject->copyAllJSFiles($listPageObject->grabAllJSFiles());
			
			//Add detail's css files to master's files
			$pageObject->copyAllCSSFiles($listPageObject->grabAllCSSFiles());
		}
		//$xt->assign("displayDetailTable_".GoodFieldName($strTableName), array("func" => "showDetailTable","params" => array("dpObject" => $listPageObject, "dpParams" => $strTableName)));
		$xtParams = array("method"=>'showPage', "params"=> false);
		$xtParams['object'] = $listPageObject;
		$xt->assign("displayDetailTable_".GoodFieldName($listPageObject->tName), $xtParams);
		
		$pageObject->controlsMap['dpTablesParams'][] = array('tName'=>$strTableName, 'id'=>$options['id']);
	}
	$pageObject->controlsMap['dControlsMap'] = $dControlsMap;
	$strTableName = "dbo.Readings";
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Begin prepare for Next Prev button
if(!@$_SESSION[$strTableName."_noNextPrev"] && !$inlineview && !$pdf)
{
	$pageObject->getNextPrevRecordKeys($data,"Search",$next,$prev);
}
//End prepare for Next Prev button
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


if ($pageObject->googleMapCfg['isUseGoogleMap'])
{
	$pageObject->initGmaps();
}

$pageObject->addCommonJs();

//fill tab groups name and sections name to controls
$pageObject->fillCntrlTabGroups();

if(!$inlineview)
{
	$pageObject->body["begin"].="<script type=\"text/javascript\" src=\"include/loadfirst.js\"></script>\r\n";
		$pageObject->body["begin"].= "<script type=\"text/javascript\" src=\"include/lang/".getLangFileName(mlang_getcurrentlang()).".js\"></script>";		
	
	$pageObject->jsSettings['tableSettings'][$strTableName]["keys"] = $keys;
	$pageObject->jsSettings['tableSettings'][$strTableName]["prevKeys"] = $prev;
	$pageObject->jsSettings['tableSettings'][$strTableName]["nextKeys"] = $next; 
	
	// assign body end
	$pageObject->body['end'] = array();
	$pageObject->body['end']["method"] = "assignBodyEnd";
	$pageObject->body['end']["object"] = &$pageObject;
	
	$xt->assign("body",$pageObject->body);
	$xt->assign("flybody",true);
}
else
{
	$xt->assign("footer",false);
	$xt->assign("header",false);
	$xt->assign("flybody",$pageObject->body);
	$xt->assign("body",true);
	$xt->assign("pdflink_block",false);
	
	$pageObject->fillSetCntrlMaps();
	
	$returnJSON['controlsMap'] = $pageObject->controlsHTMLMap;
	$returnJSON['settings'] = $pageObject->jsSettings;
}
$xt->assign("style_block",true);
$xt->assign("stylefiles_block",true);

$editlink="";
$editkeys=array();
	$editkeys["editid1"]=postvalue("editid1");
foreach($editkeys as $key=>$val)
{
	if($editlink)
		$editlink.="&";
	$editlink.=$key."=".$val;
}
$xt->assign("editlink_attrs","id=\"editLink".$id."\" name=\"editLink".$id."\" onclick=\"window.location.href='Readings_edit.php?".$editlink."'\"");

$strPerm = GetUserPermissions($strTableName);
if(CheckSecurity($ownerIdValue,"Edit") && !$inlineview && strpos($strPerm, "E")!==false)
	$xt->assign("edit_button",true);
else	
	$xt->assign("edit_button",false);

if(!$pdf && !$all && !$inlineview)
{
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Begin show Next Prev button
    $nextlink=$prevlink="";
	if(count($next))
    {
		$xt->assign("next_button",true);
	 		$nextlink .="editid1=".htmlspecialchars(rawurlencode($next[1]));
		$xt->assign("nextbutton_attrs","id=\"nextButton".$id."\"");
	}
	else 
		$xt->assign("next_button",false);
	if(count($prev))
	{
		$xt->assign("prev_button",true);
			$prevlink .="editid1=".htmlspecialchars(rawurlencode($prev[1]));
		$xt->assign("prevbutton_attrs","id=\"prevButton".$id."\"");
	}
    else 
		$xt->assign("prev_button",false);
//End show Next Prev button
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	$xt->assign("back_button",true);
	$xt->assign("backbutton_attrs","id=\"backButton".$id."\"");
}

$oldtemplatefile=$templatefile;
$templatefile = "Readings_view.htm";

if(!$all)
{
	if($eventObj->exists("BeforeShowView"))
		$eventObj->BeforeShowView($xt,$templatefile,$data);
	
	if(!$pdf)
	{
		if(!$inlineview)
			$xt->display($templatefile);
		else{
				$xt->load_template($templatefile);
				$returnJSON['html'] = $xt->fetch_loaded('style_block').$xt->fetch_loaded('body');
				$returnJSON['idStartFrom'] = $id+1;
				echo (my_json_encode($returnJSON)); 
			}
	}
	break;
}
}


?>
