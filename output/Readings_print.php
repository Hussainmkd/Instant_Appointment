<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
include("classes/searchclause.php");

add_nocache_headers();

include("include/Readings_variables.php");

if(!@$_SESSION["UserID"])
{ 
	$_SESSION["MyURL"]=$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
	header("Location: login.php?message=expired"); 
	return;
}
if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Export"))
{
	echo "<p>".mlang_message("NO_PERMISSIONS")."<a href=\"login.php\">".mlang_message("BACK_TO_LOGIN")."</a></p>";
	return;
}

$layout = new TLayout("print","BoldOrange","MobileOrange");
$layout->blocks["center"] = array();
$layout->containers["grid"] = array();

$layout->containers["grid"][] = array("name"=>"printgrid","block"=>"grid_block","substyle"=>1);


$layout->skins["grid"] = "empty";
$layout->blocks["center"][] = "grid";$layout->blocks["top"] = array();
$layout->containers["master"] = array();

$layout->containers["master"][] = array("name"=>"masterinfoprint","block"=>"mastertable_block","substyle"=>1);


$layout->skins["master"] = "empty";
$layout->blocks["top"][] = "master";
$layout->skins["pdf"] = "empty";
$layout->blocks["top"][] = "pdf";$page_layouts["Readings_print"] = $layout;


include('include/xtempl.php');
include('classes/runnerpage.php');

$xt = new Xtempl();
$id = postvalue("id") != "" ? postvalue("id") : 1;
$all = postvalue("all");
$pageName = "print.php";

//array of params for classes
$params = array("pageType" => PAGE_PRINT, 
				"id" =>$id, 
				"tName"=>$strTableName);
$params["xt"] = &$xt;
	
$pageObject = new RunnerPage($params);

// add button events if exist
$pageObject->addButtonHandlers();

// Modify query: remove blob fields from fieldlist.
// Blob fields on a print page are shown using imager.php (for example).
// They don't need to be selected from DB in print.php itself.
if(!postvalue("pdf"))
	$gQuery->ReplaceFieldsWithDummies(GetBinaryFieldsIndices());

//	Before Process event
if($eventObj->exists("BeforeProcessPrint"))
	$eventObj->BeforeProcessPrint($conn);

$strWhereClause="";
$strHavingClause="";

$selected_recs=array();
if (@$_REQUEST["a"]!="") 
{
	$sWhere = "1=0";	
	
//	process selection
	if (@$_REQUEST["mdelete"])
	{
		foreach(@$_REQUEST["mdelete"] as $ind)
		{
			$keys=array();
			$keys["Record ID"]=refine($_REQUEST["mdelete1"][mdeleteIndex($ind)]);
			$selected_recs[]=$keys;
		}
	}
	elseif(@$_REQUEST["selection"])
	{
		foreach(@$_REQUEST["selection"] as $keyblock)
		{
			$arr=explode("&",refine($keyblock));
			if(count($arr)<1)
				continue;
			$keys=array();
			$keys["Record ID"]=urldecode($arr[0]);
			$selected_recs[]=$keys;
		}
	}

	foreach($selected_recs as $keys)
	{
		$sWhere = $sWhere . " or ";
		$sWhere.=KeyWhere($keys);
	}
	$strSQL = gSQLWhere($sWhere);
	$strWhereClause=$sWhere;
}
else
{
	$strWhereClause=@$_SESSION[$strTableName."_where"];
	$strHavingClause=@$_SESSION[$strTableName."_having"];
	$strSQL = gSQLWhere($strWhereClause, $strHavingClause);
}
if(postvalue("pdf"))
	$strWhereClause = @$_SESSION[$strTableName."_pdfwhere"];

$_SESSION[$strTableName."_pdfwhere"] = $strWhereClause;


$strOrderBy=$_SESSION[$strTableName."_order"];
if(!$strOrderBy)
	$strOrderBy=$gstrOrderBy;
$strSQL.=" ".trim($strOrderBy);

$strSQLbak = $strSQL;
if($eventObj->exists("BeforeQueryPrint"))
	$eventObj->BeforeQueryPrint($strSQL,$strWhereClause,$strOrderBy);

//	Rebuild SQL if needed

if($strSQL!=$strSQLbak)
{
//	changed $strSQL - old style	
	$numrows=GetRowCount($strSQL);
}
else
{
	$strSQL = gSQLWhere($strWhereClause, $strHavingClause);
	$strSQL.=" ".trim($strOrderBy);
	
	$rowcount=false;
	if($eventObj->exists("ListGetRowCount"))
	{
		$masterKeysReq=array();
		for($i = 0; $i < count($pageObject->detailKeysByM); $i ++)
			$masterKeysReq[]=$_SESSION[$strTableName."_masterkey".($i + 1)];
			$rowcount=$eventObj->ListGetRowCount($pageObject->searchClauseObj,$_SESSION[$strTableName."_mastertable"],$masterKeysReq,$selected_recs);
	}
	if($rowcount!==false)
		$numrows=$rowcount;
	else
	{
		$numrows = gSQLRowCount($strWhereClause, $strHavingClause);
	}
}

LogInfo($strSQL);

$mypage=(integer)$_SESSION[$strTableName."_pagenumber"];
if(!$mypage)
	$mypage=1;

//	page size
$PageSize=(integer)$_SESSION[$strTableName."_pagesize"];
if(!$PageSize)
	$PageSize = GetTableData($strTableName,".pageSize",0);

if($PageSize<0)
	$all = 1;	
	
$recno = 1;
$records = 0;	
$maxpages = 1;
$pageindex = 1;
$pageno=1;

if(!$all)
{	
	if($numrows)
	{
		$maxRecords = $numrows;
		$maxpages = ceil($maxRecords/$PageSize);
					
		if($mypage > $maxpages)
			$mypage = $maxpages;
		
		if($mypage < 1) 
			$mypage = 1;
		
		$maxrecs = $PageSize;
	}
	$listarray = false;
	if($eventObj->exists("ListQuery"))
		$listarray = $eventObj->ListQuery($pageObject->searchClauseObj,$_SESSION[$strTableName."_arrFieldForSort"],$_SESSION[$strTableName."_arrHowFieldSort"],$_SESSION[$strTableName."_mastertable"],$masterKeysReq,$selected_recs,$PageSize,$mypage);
	if($listarray!==false)
		$rs = $listarray;
	else
	{
			if($numrows)
		{
			$strSQL = AddTop($strSQL, $mypage*$PageSize);
		}
		$rs = db_query($strSQL,$conn);
		db_pageseek($rs,$PageSize,$mypage);
	}
	
	//	hide colunm headers if needed
	$recordsonpage = $numrows-($mypage-1)*$PageSize;
	if($recordsonpage>$PageSize)
		$recordsonpage = $PageSize;
		
	$xt->assign("page_number",true);
	$xt->assign("maxpages",$maxpages);
	$xt->assign("pageno",$mypage);
}
else
{
	$listarray = false;
	if($eventObj->exists("ListQuery"))
		$listarray=$eventObj->ListQuery($pageObject->searchClauseObj,$_SESSION[$strTableName."_arrFieldForSort"],$_SESSION[$strTableName."_arrHowFieldSort"],$_SESSION[$strTableName."_mastertable"],$masterKeysReq,$selected_recs,$PageSize,$mypage);
	if($listarray!==false)
		$rs = $listarray;
	else
		$rs = db_query($strSQL,$conn);
	$recordsonpage = $numrows;
	$maxpages = ceil($recordsonpage/30);
	$xt->assign("page_number",true);
	$xt->assign("maxpages",$maxpages);
}


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
$pageObject->setGoogleMapsParams($fieldsArr);

$colsonpage=1;
if($colsonpage>$recordsonpage)
	$colsonpage=$recordsonpage;
if($colsonpage<1)
	$colsonpage=1;


//	fill $rowinfo array
	$pages = array();
	$rowinfo = array();
	$rowinfo["data"]=array();
	if($eventObj->exists("ListFetchArray"))
		$data = $eventObj->ListFetchArray($rs);
	else
		$data = db_fetch_array($rs);	

	while($data)
	{
		if($eventObj->exists("BeforeProcessRowPrint"))
		{
			if(!$eventObj->BeforeProcessRowPrint($data))
			{
				if($eventObj->exists("ListFetchArray"))
					$data = $eventObj->ListFetchArray($rs);
				else
					$data = db_fetch_array($rs);
				continue;
			}
		}
		break;
	}
	
	while($data && ($all || $recno<=$PageSize))
	{
		$row=array();
		$row["grid_record"]=array();
		$row["grid_record"]["data"]=array();
		for($col=1;$data && ($all || $recno<=$PageSize) && $col<=1;$col++)
		{
			$record=array();
			$recno++;
			$records++;
			$keylink="";
			$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["Record ID"]));


//	Record ID - 
			$value="";
				$value = ProcessLargeText(GetData($data,"Record ID", ""),"field=Record+ID".$keylink,"",MODE_PRINT);
			$record["Record_ID_value"]=$value;

//	Module ID - 
			$value="";
				$value=DisplayLookupWizard("Module ID",$data["Module ID"],$data,$keylink,MODE_PRINT);
			$record["Module_ID_value"]=$value;

//	Voltage Red - 
			$value="";
				$value = ProcessLargeText(GetData($data,"Voltage Red", ""),"field=Voltage+Red".$keylink,"",MODE_PRINT);
			$record["Voltage_Red_value"]=$value;

//	Voltage Blue - 
			$value="";
				$value = ProcessLargeText(GetData($data,"Voltage Blue", ""),"field=Voltage+Blue".$keylink,"",MODE_PRINT);
			$record["Voltage_Blue_value"]=$value;

//	Voltage Yellow - 
			$value="";
				$value = ProcessLargeText(GetData($data,"Voltage Yellow", ""),"field=Voltage+Yellow".$keylink,"",MODE_PRINT);
			$record["Voltage_Yellow_value"]=$value;

//	Currunt Red - 
			$value="";
				$value = ProcessLargeText(GetData($data,"Currunt Red", ""),"field=Currunt+Red".$keylink,"",MODE_PRINT);
			$record["Currunt_Red_value"]=$value;

//	Currunt Blue - 
			$value="";
				$value = ProcessLargeText(GetData($data,"Currunt Blue", ""),"field=Currunt+Blue".$keylink,"",MODE_PRINT);
			$record["Currunt_Blue_value"]=$value;

//	Currunt Yellow - 
			$value="";
				$value = ProcessLargeText(GetData($data,"Currunt Yellow", ""),"field=Currunt+Yellow".$keylink,"",MODE_PRINT);
			$record["Currunt_Yellow_value"]=$value;

//	PF Red - 
			$value="";
				$value = ProcessLargeText(GetData($data,"PF Red", ""),"field=PF+Red".$keylink,"",MODE_PRINT);
			$record["PF_Red_value"]=$value;

//	PF Blue - 
			$value="";
				$value = ProcessLargeText(GetData($data,"PF Blue", ""),"field=PF+Blue".$keylink,"",MODE_PRINT);
			$record["PF_Blue_value"]=$value;

//	PF Yellow - 
			$value="";
				$value = ProcessLargeText(GetData($data,"PF Yellow", ""),"field=PF+Yellow".$keylink,"",MODE_PRINT);
			$record["PF_Yellow_value"]=$value;

//	Peak Power - 
			$value="";
				$value = ProcessLargeText(GetData($data,"Peak Power", ""),"field=Peak+Power".$keylink,"",MODE_PRINT);
			$record["Peak_Power_value"]=$value;

//	Date Time - Short Date
			$value="";
				$value = ProcessLargeText(GetData($data,"Date Time", "Short Date"),"field=Date+Time".$keylink,"",MODE_PRINT);
			$record["Date_Time_value"]=$value;

//	IsSync - Checkbox
			$value="";
				$value = GetData($data,"IsSync", "Checkbox");
			$record["IsSync_value"]=$value;

//	Currunt Readings - 
			$value="";
				$value = ProcessLargeText(GetData($data,"Currunt Readings", ""),"field=Currunt+Readings".$keylink,"",MODE_PRINT);
			$record["Currunt_Readings_value"]=$value;
			if($col<$colsonpage)
				$record["endrecord_block"]=true;
			$record["grid_recordheader"]=true;
			$record["grid_vrecord"]=true;
			
			if($eventObj->exists("BeforeMoveNextPrint"))
				$eventObj->BeforeMoveNextPrint($data,$row,$record);
				
			$row["grid_record"]["data"][]=$record;
			
			if($eventObj->exists("ListFetchArray"))
				$data = $eventObj->ListFetchArray($rs);
			else
				$data = db_fetch_array($rs);
				
			while($data)
			{
				if($eventObj->exists("BeforeProcessRowPrint"))
				{
					if(!$eventObj->BeforeProcessRowPrint($data))
					{
						if($eventObj->exists("ListFetchArray"))
							$data = $eventObj->ListFetchArray($rs);
						else
							$data = db_fetch_array($rs);
						continue;
					}
				}
				break;
			}
		}
		if($col<=$colsonpage)
		{
			$row["grid_record"]["data"][count($row["grid_record"]["data"])-1]["endrecord_block"]=false;
		}
		$row["grid_rowspace"]=true;
		$row["grid_recordspace"] = array("data"=>array());
		for($i=0;$i<$colsonpage*2-1;$i++)
			$row["grid_recordspace"]["data"][]=true;
		
		$rowinfo["data"][]=$row;
		
		if($all && $records>=30)
		{
			$page=array("grid_row" =>$rowinfo);
			$page["pageno"]=$pageindex;
			$pageindex++;
			$pages[] = $page;
			$records=0;
			$rowinfo=array();
		}
		
	}
	if(count($rowinfo))
	{
		$page=array("grid_row" =>$rowinfo);
		if($all)
			$page["pageno"]=$pageindex;
		$pages[] = $page;
	}
	
	for($i=0;$i<count($pages);$i++)
	{
	 	if($i<count($pages)-1)
			$pages[$i]["begin"]="<div name=page class=printpage>";
		else
		    $pages[$i]["begin"]="<div name=page>";
			
		$pages[$i]["end"]="</div>";
	}

	$page=array();
	$page["data"]=&$pages;
	$xt->assignbyref("page",$page);

	
//	display master table info
$mastertable=$_SESSION[$strTableName."_mastertable"];
$masterkeys=array();
if($mastertable=="dbo.Module")
{
//	include proper masterprint.php code
	include("include/Module_masterprint.php");
	$masterkeys[]=@$_SESSION[$strTableName."_masterkey1"];
	$params=array("detailtable"=>"dbo.Readings","keys"=>$masterkeys);
	$master=array();
	$master["func"]="DisplayMasterTableInfo_Module";
	$master["params"]=$params;
	$xt->assignbyref("showmasterfile",$master);
	$xt->assign("mastertable_block",true);
}

$strSQL=$_SESSION[$strTableName."_sql"];

$isPdfView = false;
if (GetTableData($strTableName, ".isUsebuttonHandlers", false) || $isPdfView)
{
	$pageObject->body["begin"] .="<script type=\"text/javascript\" src=\"include/loadfirst.js\"></script>\r\n";
		$pageObject->body["begin"] .= "<script type=\"text/javascript\" src=\"include/lang/".getLangFileName(mlang_getcurrentlang()).".js\"></script>";
	
	$pageObject->fillSetCntrlMaps();
	$pageObject->body['end'] .= '<script>';
	$pageObject->body['end'] .= "window.controlsMap = ".my_json_encode($pageObject->controlsHTMLMap).";";
	$pageObject->body['end'] .= "window.settings = ".my_json_encode($pageObject->jsSettings).";";
	$pageObject->body['end'] .= '</script>';
		$pageObject->body["end"] .= "<script language=\"JavaScript\" src=\"include/runnerJS/RunnerAll.js\"></script>\r\n";
	$pageObject->addCommonJs();
}


if (GetTableData($strTableName, ".isUsebuttonHandlers", false) || $isPdfView)
	$pageObject->body["end"] .= "<script>".$pageObject->PrepareJS()."</script>";

$xt->assignbyref("body",$pageObject->body);
$xt->assign("grid_block",true);

$xt->assign("Record_ID_fieldheadercolumn",true);
$xt->assign("Record_ID_fieldheader",true);
$xt->assign("Record_ID_fieldcolumn",true);
$xt->assign("Record_ID_fieldfootercolumn",true);
$xt->assign("Module_ID_fieldheadercolumn",true);
$xt->assign("Module_ID_fieldheader",true);
$xt->assign("Module_ID_fieldcolumn",true);
$xt->assign("Module_ID_fieldfootercolumn",true);
$xt->assign("Voltage_Red_fieldheadercolumn",true);
$xt->assign("Voltage_Red_fieldheader",true);
$xt->assign("Voltage_Red_fieldcolumn",true);
$xt->assign("Voltage_Red_fieldfootercolumn",true);
$xt->assign("Voltage_Blue_fieldheadercolumn",true);
$xt->assign("Voltage_Blue_fieldheader",true);
$xt->assign("Voltage_Blue_fieldcolumn",true);
$xt->assign("Voltage_Blue_fieldfootercolumn",true);
$xt->assign("Voltage_Yellow_fieldheadercolumn",true);
$xt->assign("Voltage_Yellow_fieldheader",true);
$xt->assign("Voltage_Yellow_fieldcolumn",true);
$xt->assign("Voltage_Yellow_fieldfootercolumn",true);
$xt->assign("Currunt_Red_fieldheadercolumn",true);
$xt->assign("Currunt_Red_fieldheader",true);
$xt->assign("Currunt_Red_fieldcolumn",true);
$xt->assign("Currunt_Red_fieldfootercolumn",true);
$xt->assign("Currunt_Blue_fieldheadercolumn",true);
$xt->assign("Currunt_Blue_fieldheader",true);
$xt->assign("Currunt_Blue_fieldcolumn",true);
$xt->assign("Currunt_Blue_fieldfootercolumn",true);
$xt->assign("Currunt_Yellow_fieldheadercolumn",true);
$xt->assign("Currunt_Yellow_fieldheader",true);
$xt->assign("Currunt_Yellow_fieldcolumn",true);
$xt->assign("Currunt_Yellow_fieldfootercolumn",true);
$xt->assign("PF_Red_fieldheadercolumn",true);
$xt->assign("PF_Red_fieldheader",true);
$xt->assign("PF_Red_fieldcolumn",true);
$xt->assign("PF_Red_fieldfootercolumn",true);
$xt->assign("PF_Blue_fieldheadercolumn",true);
$xt->assign("PF_Blue_fieldheader",true);
$xt->assign("PF_Blue_fieldcolumn",true);
$xt->assign("PF_Blue_fieldfootercolumn",true);
$xt->assign("PF_Yellow_fieldheadercolumn",true);
$xt->assign("PF_Yellow_fieldheader",true);
$xt->assign("PF_Yellow_fieldcolumn",true);
$xt->assign("PF_Yellow_fieldfootercolumn",true);
$xt->assign("Peak_Power_fieldheadercolumn",true);
$xt->assign("Peak_Power_fieldheader",true);
$xt->assign("Peak_Power_fieldcolumn",true);
$xt->assign("Peak_Power_fieldfootercolumn",true);
$xt->assign("Date_Time_fieldheadercolumn",true);
$xt->assign("Date_Time_fieldheader",true);
$xt->assign("Date_Time_fieldcolumn",true);
$xt->assign("Date_Time_fieldfootercolumn",true);
$xt->assign("IsSync_fieldheadercolumn",true);
$xt->assign("IsSync_fieldheader",true);
$xt->assign("IsSync_fieldcolumn",true);
$xt->assign("IsSync_fieldfootercolumn",true);
$xt->assign("Currunt_Readings_fieldheadercolumn",true);
$xt->assign("Currunt_Readings_fieldheader",true);
$xt->assign("Currunt_Readings_fieldcolumn",true);
$xt->assign("Currunt_Readings_fieldfootercolumn",true);

	$record_header=array("data"=>array());
	$record_footer=array("data"=>array());
	for($i=0;$i<$colsonpage;$i++)
	{
		$rheader=array();
		$rfooter=array();
		if($i<$colsonpage-1)
		{
			$rheader["endrecordheader_block"]=true;
			$rfooter["endrecordheader_block"]=true;
		}
		$record_header["data"][]=$rheader;
		$record_footer["data"][]=$rfooter;
	}
	$xt->assignbyref("record_header",$record_header);
	$xt->assignbyref("record_footer",$record_footer);
	$xt->assign("grid_header",true);
	$xt->assign("grid_footer",true);


$templatefile = "Readings_print.htm";
$pageObject->templatefile = $templatefile;
	
if($eventObj->exists("BeforeShowPrint"))
	$eventObj->BeforeShowPrint($xt,$templatefile);

if(!postvalue("pdf"))
	$xt->display($templatefile);
else
{
	$xt->load_template($templatefile);
	$page = $xt->fetch_loaded();
	$pagewidth=postvalue("width")*1.05;
	$pageheight=postvalue("height")*1.05;
	$landscape=false;
		if($pagewidth>$pageheight)
		{
			$landscape=true;
			if($pagewidth/$pageheight<297/210)
				$pagewidth = 297/210*$pageheight;
		}
		else
		{
			if($pagewidth/$pageheight<210/297)
				$pagewidth = 210/297*$pageheight;
		}
}

?>
