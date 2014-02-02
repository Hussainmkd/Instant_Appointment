<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");
include("include/dbcommon.php");
include("classes/searchclause.php");
session_cache_limiter("none");

include("include/Anomalies_variables.php");

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

$layout = new TLayout("export","BoldOrange","MobileOrange");
$layout->blocks["top"] = array();
$layout->containers["export"] = array();

$layout->containers["export"][] = array("name"=>"exportheader","block"=>"","substyle"=>2);


$layout->containers["export"][] = array("name"=>"exprange_header","block"=>"rangeheader_block","substyle"=>3);


$layout->containers["export"][] = array("name"=>"exprange","block"=>"range_block","substyle"=>1);


$layout->containers["export"][] = array("name"=>"expoutput_header","block"=>"","substyle"=>3);


$layout->containers["export"][] = array("name"=>"expoutput","block"=>"","substyle"=>1);


$layout->containers["export"][] = array("name"=>"expbuttons","block"=>"","substyle"=>2);


$layout->skins["export"] = "fields";
$layout->blocks["top"][] = "export";$page_layouts["Anomalies_export"] = $layout;


// Modify query: remove blob fields from fieldlist.
// Blob fields on an export page are shown using imager.php (for example).
// They don't need to be selected from DB in export.php itself.
//$gQuery->ReplaceFieldsWithDummies(GetBinaryFieldsIndices());

//	Before Process event
if($eventObj->exists("BeforeProcessExport"))
	$eventObj->BeforeProcessExport($conn);

$strWhereClause="";
$strHavingClause="";
$selected_recs=array();
$options = "1";

header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 
include('include/xtempl.php');
include('classes/runnerpage.php');
$xt = new Xtempl();
include("include/export_functions.php");
$id = postvalue("id") != "" ? postvalue("id") : 1;
//array of params for classes
$params = array("pageType" => PAGE_EXPORT, "id" =>$id, "tName"=>$strTableName);
$params["xt"] = &$xt;
if(!$eventObj->exists("ListGetRowCount") && !$eventObj->exists("ListQuery"))
	$params["needSearchClauseObj"] = false;
$pageObject = new RunnerPage($params);

if (@$_REQUEST["a"]!="")
{
	$options = "";
	$sWhere = "1=0";	

//	process selection
	$selected_recs=array();
	if (@$_REQUEST["mdelete"])
	{
		foreach(@$_REQUEST["mdelete"] as $ind)
		{
			$keys=array();
			$keys["ID"]=refine($_REQUEST["mdelete1"][mdeleteIndex($ind)]);
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
			$keys["ID"]=urldecode($arr[0]);
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
	
	$_SESSION[$strTableName."_SelectedSQL"] = $strSQL;
	$_SESSION[$strTableName."_SelectedWhere"] = $sWhere;
	$_SESSION[$strTableName."_SelectedRecords"] = $selected_recs;
}

if ($_SESSION[$strTableName."_SelectedSQL"]!="" && @$_REQUEST["records"]=="") 
{
	$strSQL = $_SESSION[$strTableName."_SelectedSQL"];
	$strWhereClause=@$_SESSION[$strTableName."_SelectedWhere"];
	$selected_recs = $_SESSION[$strTableName."_SelectedRecords"];
}
else
{
	$strWhereClause=@$_SESSION[$strTableName."_where"];
	$strHavingClause=@$_SESSION[$strTableName."_having"];
	$strSQL=gSQLWhere($strWhereClause,$strHavingClause);
}

$mypage=1;
if(@$_REQUEST["type"])
{
//	order by
	$strOrderBy=$_SESSION[$strTableName."_order"];
	if(!$strOrderBy)
		$strOrderBy=$gstrOrderBy;
	$strSQL.=" ".trim($strOrderBy);

	$strSQLbak = $strSQL;
	if($eventObj->exists("BeforeQueryExport"))
		$eventObj->BeforeQueryExport($strSQL,$strWhereClause,$strOrderBy);
//	Rebuild SQL if needed
	if($strSQL!=$strSQLbak)
	{
//	changed $strSQL - old style	
		$numrows=GetRowCount($strSQL);
	}
	else
	{
		$strSQL = gSQLWhere($strWhereClause,$strHavingClause);
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
			$numrows=gSQLRowCount($strWhereClause,$strHavingClause);
	}
	LogInfo($strSQL);

//	 Pagination:

	$nPageSize = 0;
	if(@$_REQUEST["records"]=="page" && $numrows)
	{
		$mypage = (integer)@$_SESSION[$strTableName."_pagenumber"];
		$nPageSize = (integer)@$_SESSION[$strTableName."_pagesize"];
		
		if(!$nPageSize)
			$nPageSize = GetTableData($strTableName,".pageSize",0);
				
		if($nPageSize<0)
			$nPageSize = 0;
			
		if($nPageSize>0)
		{
			if($numrows<=($mypage-1)*$nPageSize)
				$mypage = ceil($numrows/$nPageSize);
		
			if(!$mypage)
				$mypage = 1;
			
					$strSQL = AddTop($strSQL, $mypage*$nPageSize);
		}
	}
	$listarray = false;
	if($eventObj->exists("ListQuery"))
		$listarray = $eventObj->ListQuery($pageObject->searchClauseObj,$_SESSION[$strTableName."_arrFieldForSort"],$_SESSION[$strTableName."_arrHowFieldSort"],$_SESSION[$strTableName."_mastertable"],$masterKeysReq,$selected_recs,$nPageSize,$mypage);
	if($listarray!==false)
		$rs = $listarray;
	elseif($nPageSize>0)
	{
					$rs = db_query($strSQL,$conn);
			db_pageseek($rs,$nPageSize,$mypage);
	}
	else
		$rs = db_query($strSQL,$conn);

	if(!ini_get("safe_mode"))
		set_time_limit(300);
	
	if(substr(@$_REQUEST["type"],0,5)=="excel")
	{
//	remove grouping
		$locale_info["LOCALE_SGROUPING"]="0";
		$locale_info["LOCALE_SMONGROUPING"]="0";
		ExportToExcel();
	}
	else if(@$_REQUEST["type"]=="word")
	{
		ExportToWord();
	}
	else if(@$_REQUEST["type"]=="xml")
	{
		ExportToXML();
	}
	else if(@$_REQUEST["type"]=="csv")
	{
		$locale_info["LOCALE_SGROUPING"]="0";
		$locale_info["LOCALE_SDECIMAL"]=".";
		$locale_info["LOCALE_SMONGROUPING"]="0";
		$locale_info["LOCALE_SMONDECIMALSEP"]=".";
		ExportToCSV();
	}
	db_close($conn);
	return;
}

// add button events if exist
$pageObject->addButtonHandlers();

if($options)
{
	$xt->assign("rangeheader_block",true);
	$xt->assign("range_block",true);
}

$xt->assign("exportlink_attrs", 'id="saveButton'.$pageObject->id.'"');

$pageObject->body["begin"] .="<script type=\"text/javascript\" src=\"include/loadfirst.js\"></script>\r\n";
$pageObject->body["begin"] .= "<script type=\"text/javascript\" src=\"include/lang/".getLangFileName(mlang_getcurrentlang()).".js\"></script>";

$pageObject->fillSetCntrlMaps();
$pageObject->body['end'] .= '<script>';
$pageObject->body['end'] .= "window.controlsMap = ".my_json_encode($pageObject->controlsHTMLMap).";";
$pageObject->body['end'] .= "window.settings = ".my_json_encode($pageObject->jsSettings).";";
$pageObject->body['end'] .= '</script>';
$pageObject->body["end"] .= "<script language=\"JavaScript\" src=\"include/runnerJS/RunnerAll.js\"></script>\r\n";
$pageObject->addCommonJs();

$pageObject->body["end"] .= "<script>".$pageObject->PrepareJS()."</script>";
$xt->assignbyref("body",$pageObject->body);

$xt->display("Anomalies_export.htm");

function ExportToWord()
{
	global $cCharset;
	header("Content-Type: application/vnd.ms-word");
	header("Content-Disposition: attachment;Filename=Anomalies.doc");

	echo "<html>";
	echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=".$cCharset."\">";
	echo "<body>";
	echo "<table border=1>";

	WriteTableData();

	echo "</table>";
	echo "</body>";
	echo "</html>";
}

function ExportToXML()
{
	global $nPageSize,$rs,$strTableName,$conn,$eventObj;
	header("Content-Type: text/xml");
	header("Content-Disposition: attachment;Filename=Anomalies.xml");
	if($eventObj->exists("ListFetchArray"))
		$row = $eventObj->ListFetchArray($rs);
	else
		$row = db_fetch_array($rs);	
	//if(!$row)
	//	return;
		
	global $cCharset;
	
	echo "<?xml version=\"1.0\" encoding=\"".$cCharset."\" standalone=\"yes\"?>\r\n";
	echo "<table>\r\n";
	$i=0;
	
	
	while((!$nPageSize || $i<$nPageSize) && $row)
	{
		
		$values = array();
			$values["ID"] = GetData($row,"ID","");
			$values["Module ID"] = DisplayLookupWizard("Module ID",$row["Module ID"],$row,"",MODE_EXPORT);		
			$values["Anomaly Description"] = GetData($row,"Anomaly Description","");
			$values["Anomaly Type"] = DisplayLookupWizard("Anomaly Type",$row["Anomaly Type"],$row,"",MODE_EXPORT);		
			$values["Date Time"] = GetData($row,"Date Time","");
			$values["Action Taken"] = DisplayLookupWizard("Action Taken",$row["Action Taken"],$row,"",MODE_EXPORT);		
		
		
		$eventRes = true;
		if ($eventObj->exists('BeforeOut'))
		{			
			$eventRes = $eventObj->BeforeOut($row, $values);
		}
		if ($eventRes)
		{
			$i++;
			echo "<row>\r\n";
			foreach ($values as $fName => $val)
			{
				$field = htmlspecialchars(XMLNameEncode($fName));
				echo "<".$field.">";
				echo htmlspecialchars($values[$fName]);
				echo "</".$field.">\r\n";
			}
			echo "</row>\r\n";
		}
		
		
		if($eventObj->exists("ListFetchArray"))
			$row = $eventObj->ListFetchArray($rs);
		else
			$row = db_fetch_array($rs);	
	}
	echo "</table>\r\n";
}

function ExportToCSV()
{
	global $rs,$nPageSize,$strTableName,$conn,$eventObj;
	header("Content-Type: application/csv");
	header("Content-Disposition: attachment;Filename=Anomalies.csv");
	
	if($eventObj->exists("ListFetchArray"))
		$row = $eventObj->ListFetchArray($rs);
	else
		$row = db_fetch_array($rs);	
//	if(!$row)
//		return;
	
		
		
	$totals=array();

	
// write header
	$outstr="";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"ID\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Module ID\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Anomaly Description\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Anomaly Type\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Date Time\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Action Taken\"";
	echo $outstr;
	echo "\r\n";

// write data rows
	$iNumberOfRows = 0;
	while((!$nPageSize || $iNumberOfRows<$nPageSize) && $row)
	{
		
		
		$values = array();
			$format="";
			$values["ID"] = GetData($row,"ID",$format);
		$values["Module ID"] = DisplayLookupWizard("Module ID",$row["Module ID"],$row,"",MODE_EXPORT);
			$format="";
			$values["Anomaly Description"] = GetData($row,"Anomaly Description",$format);
		$values["Anomaly Type"] = DisplayLookupWizard("Anomaly Type",$row["Anomaly Type"],$row,"",MODE_EXPORT);
			$format="Short Date";
			$values["Date Time"] = GetData($row,"Date Time",$format);
		$values["Action Taken"] = DisplayLookupWizard("Action Taken",$row["Action Taken"],$row,"",MODE_EXPORT);

		$eventRes = true;
		if ($eventObj->exists('BeforeOut'))
		{			
			$eventRes = $eventObj->BeforeOut($row,$values);
		}
		if ($eventRes)
		{
			$outstr="";			
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"','""',$values["ID"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"','""',$values["Module ID"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"','""',$values["Anomaly Description"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"','""',$values["Anomaly Type"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"','""',$values["Date Time"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"','""',$values["Action Taken"]).'"';
			echo $outstr;
		}
		
		$iNumberOfRows++;
		if($eventObj->exists("ListFetchArray"))
			$row = $eventObj->ListFetchArray($rs);
		else
			$row = db_fetch_array($rs);	
			
		if(((!$nPageSize || $iNumberOfRows<$nPageSize) && $row) && $eventRes)
			echo "\r\n";
	}
}


function WriteTableData()
{
	global $rs,$nPageSize,$strTableName,$conn,$eventObj;
	
	if($eventObj->exists("ListFetchArray"))
		$row = $eventObj->ListFetchArray($rs);
	else
		$row = db_fetch_array($rs);	
//	if(!$row)
//		return;
// write header
	echo "<tr>";
	if($_REQUEST["type"]=="excel")
	{
		echo '<td style="width: 100" x:str>'.PrepareForExcel(GetFieldLabel("dbo_Anomalies","ID")).'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel(GetFieldLabel("dbo_Anomalies","Module_ID")).'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel(GetFieldLabel("dbo_Anomalies","Anomaly_Description")).'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel(GetFieldLabel("dbo_Anomalies","Anomaly_Type")).'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel(GetFieldLabel("dbo_Anomalies","Date_Time")).'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel(GetFieldLabel("dbo_Anomalies","Action_Taken")).'</td>';	
	}
	else
	{
		echo "<td>".GetFieldLabel("dbo_Anomalies","ID")."</td>";
		echo "<td>".GetFieldLabel("dbo_Anomalies","Module_ID")."</td>";
		echo "<td>".GetFieldLabel("dbo_Anomalies","Anomaly_Description")."</td>";
		echo "<td>".GetFieldLabel("dbo_Anomalies","Anomaly_Type")."</td>";
		echo "<td>".GetFieldLabel("dbo_Anomalies","Date_Time")."</td>";
		echo "<td>".GetFieldLabel("dbo_Anomalies","Action_Taken")."</td>";
	}
	echo "</tr>";
		$totals["ID"]=0;
		$totalsFields[]=array('fName'=>"ID", 'totalsType'=>'', 'viewFormat'=>"");
		$totals["Module ID"]=0;
		$totalsFields[]=array('fName'=>"Module ID", 'totalsType'=>'', 'viewFormat'=>"");
		$totals["Anomaly Description"]=0;
		$totalsFields[]=array('fName'=>"Anomaly Description", 'totalsType'=>'', 'viewFormat'=>"");
		$totals["Anomaly Type"]=0;
		$totalsFields[]=array('fName'=>"Anomaly Type", 'totalsType'=>'', 'viewFormat'=>"");
		$totals["Date Time"]=0;
		$totalsFields[]=array('fName'=>"Date Time", 'totalsType'=>'', 'viewFormat'=>"Short Date");
		$totals["Action Taken"]=0;
		$totalsFields[]=array('fName'=>"Action Taken", 'totalsType'=>'', 'viewFormat'=>"");
	$totals=array();
// write data rows
	$iNumberOfRows = 0;
	while((!$nPageSize || $iNumberOfRows<$nPageSize) && $row)
	{
		countTotals($totals,$totalsFields, $row);
			
		$values = array();	

					
							$format="";
			
			$values["ID"] = GetData($row,"ID",$format);
					$values["Module ID"] = "";	
			if(strlen($row["Module ID"]))
			{
				$values["Module ID"] = DisplayLookupWizard("Module ID", $row["Module ID"], $row,"",MODE_EXPORT);
			}
					
							$format="";
			
			$values["Anomaly Description"] = GetData($row,"Anomaly Description",$format);
					$values["Anomaly Type"] = "";	
			if(strlen($row["Anomaly Type"]))
			{
				$values["Anomaly Type"] = DisplayLookupWizard("Anomaly Type", $row["Anomaly Type"], $row,"",MODE_EXPORT);
			}
					
							$format="Short Date";
			
			$values["Date Time"] = GetData($row,"Date Time",$format);
					$values["Action Taken"] = "";	
			if(strlen($row["Action Taken"]))
			{
				$values["Action Taken"] = DisplayLookupWizard("Action Taken", $row["Action Taken"], $row,"",MODE_EXPORT);
			}

		
		$eventRes = true;
		if ($eventObj->exists('BeforeOut'))
		{			
			$eventRes = $eventObj->BeforeOut($row, $values);
		}
		if ($eventRes)
		{
			$iNumberOfRows++;
			echo "<tr>";

							echo '<td>';
						
			
									$format="";
									echo htmlspecialchars($values["ID"]);
			echo '</td>';
							echo '<td>';
						
				
								if($_REQUEST["type"]=="excel")
					echo PrepareForExcel($values["Module ID"]);
				else
					echo htmlspecialchars($values["Module ID"]);
					
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
						
			
									$format="";
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["Anomaly Description"]);
					else
						echo htmlspecialchars($values["Anomaly Description"]);
			echo '</td>';
							echo '<td>';
						
				
								if($_REQUEST["type"]=="excel")
					echo PrepareForExcel($values["Anomaly Type"]);
				else
					echo htmlspecialchars($values["Anomaly Type"]);
					
			echo '</td>';
							echo '<td>';
						
			
									$format="Short Date";
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["Date Time"]);
					else
						echo htmlspecialchars($values["Date Time"]);
			echo '</td>';
							echo '<td>';
						
				
								if($_REQUEST["type"]=="excel")
					echo PrepareForExcel($values["Action Taken"]);
				else
					echo htmlspecialchars($values["Action Taken"]);
					
			echo '</td>';
			echo "</tr>";
		}		
		
		
		if($eventObj->exists("ListFetchArray"))
			$row = $eventObj->ListFetchArray($rs);
		else
			$row = db_fetch_array($rs);	
	}
	
}

function XMLNameEncode($strValue)
{	
	$search=array(" ","#","'","/","\\","(",")",",","[");
	$ret=str_replace($search,"",$strValue);
	$search=array("]","+","\"","-","_","|","}","{","=");
	$ret=str_replace($search,"",$ret);
	return $ret;
}

function PrepareForExcel($str)
{
	$ret = htmlspecialchars($str);
	if (substr($ret,0,1)== "=") 
		$ret = "&#61;".substr($ret,1);
	return $ret;

}

function countTotals(&$totals,$totalsFields, $data) 
{
	for($i = 0; $i < count($totalsFields); $i ++) 
	{
		if($totalsFields[$i]['totalsType'] == 'COUNT') 
			$totals[$totalsFields[$i]['fName']]+=($data[$totalsFields[$i]['fName']]!= "");
		else if($totalsFields[$i]['viewFormat'] == "Time") 
		{
			$time = GetTotalsForTime($data[$totalsFields[$i]['fName']]);
			$totals[$totalsFields[$i]['fName']] += $time[2]+$time[1]*60 + $time[0]*3600;
		} 
		else 
			$totals[$totalsFields[$i]['fName']]+=($data[$totalsFields[$i]['fName']]+ 0);
	}
}
?>
