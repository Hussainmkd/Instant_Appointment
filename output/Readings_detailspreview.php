<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

include("include/Readings_variables.php");

$mode=postvalue("mode");

if(!@$_SESSION["UserID"])
{ 
	return;
}
if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search"))
{
	return;
}

include('include/xtempl.php');
$xt = new Xtempl();

$layout = new TLayout("detailspreview","BoldOrange","MobileOrange");
$layout->blocks["bare"] = array();
$layout->containers["0"] = array();

$layout->containers["0"][] = array("name"=>"detailspreviewheader","block"=>"","substyle"=>1);


$layout->skins["0"] = "empty";
$layout->blocks["bare"][] = "0";
$layout->containers["0"] = array();

$layout->containers["0"][] = array("name"=>"detailspreviewdetailsfount","block"=>"","substyle"=>1);


$layout->containers["0"][] = array("name"=>"detailspreviewdispfirst","block"=>"display_first","substyle"=>1);


$layout->skins["0"] = "empty";
$layout->blocks["bare"][] = "0";
$layout->containers["detailspreviewgrid"] = array();

$layout->containers["detailspreviewgrid"][] = array("name"=>"detailspreviewfields","block"=>"details_data","substyle"=>1);


$layout->skins["detailspreviewgrid"] = "grid";
$layout->blocks["bare"][] = "detailspreviewgrid";$page_layouts["Readings_detailspreview"] = $layout;


$recordsCounter = 0;

//	process masterkey value
$mastertable=postvalue("mastertable");
if($mastertable!="")
{
	$_SESSION[$strTableName."_mastertable"]=$mastertable;
//	copy keys to session
	$i=1;
	while(isset($_REQUEST["masterkey".$i]))
	{
		$_SESSION[$strTableName."_masterkey".$i]=$_REQUEST["masterkey".$i];
		$i++;
	}
	if(isset($_SESSION[$strTableName."_masterkey".$i]))
		unset($_SESSION[$strTableName."_masterkey".$i]);
}
else
	$mastertable=$_SESSION[$strTableName."_mastertable"];

//$strSQL = $gstrSQL;

if($mastertable=="dbo.Module")
{
	$where ="";
		$where.= GetFullFieldName("Module ID")."=".make_db_value("Module ID",$_SESSION[$strTableName."_masterkey1"]);
}


$str = SecuritySQL("Search");
if(strlen($str))
	$where.=" and ".$str;
$strSQL = gSQLWhere($where);

$strSQL.=" ".$gstrOrderBy;

$rowcount=gSQLRowCount($where);

$xt->assign("row_count",$rowcount);
if ( $rowcount ) {
	$xt->assign("details_data",true);
	$rs=db_query($strSQL,$conn);

	$display_count=10;
	if($mode=="inline")
		$display_count*=2;
	if($rowcount>$display_count+2)
	{
		$xt->assign("display_first",true);
		$xt->assign("display_count",$display_count);
	}
	else
		$display_count = $rowcount;

	$rowinfo=array();
		
	while (($data = db_fetch_array($rs)) && $recordsCounter<$display_count) {
		$recordsCounter++;
		$row=array();
		$keylink="";
		$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["Record ID"]));

	
	//	Record ID - 
		    $value="";
				$value = ProcessLargeText(GetData($data,"Record ID", ""),"field=Record+ID".$keylink,"",MODE_PRINT);
			$row["Record_ID_value"]=$value;
	//	Module ID - 
		    $value="";
				$value=DisplayLookupWizard("Module ID",$data["Module ID"],$data,$keylink,MODE_PRINT);
			$row["Module_ID_value"]=$value;
	//	Voltage Red - 
		    $value="";
				$value = ProcessLargeText(GetData($data,"Voltage Red", ""),"field=Voltage+Red".$keylink,"",MODE_PRINT);
			$row["Voltage_Red_value"]=$value;
	//	Voltage Blue - 
		    $value="";
				$value = ProcessLargeText(GetData($data,"Voltage Blue", ""),"field=Voltage+Blue".$keylink,"",MODE_PRINT);
			$row["Voltage_Blue_value"]=$value;
	//	Voltage Yellow - 
		    $value="";
				$value = ProcessLargeText(GetData($data,"Voltage Yellow", ""),"field=Voltage+Yellow".$keylink,"",MODE_PRINT);
			$row["Voltage_Yellow_value"]=$value;
	//	Currunt Red - 
		    $value="";
				$value = ProcessLargeText(GetData($data,"Currunt Red", ""),"field=Currunt+Red".$keylink,"",MODE_PRINT);
			$row["Currunt_Red_value"]=$value;
	//	Currunt Blue - 
		    $value="";
				$value = ProcessLargeText(GetData($data,"Currunt Blue", ""),"field=Currunt+Blue".$keylink,"",MODE_PRINT);
			$row["Currunt_Blue_value"]=$value;
	//	Currunt Yellow - 
		    $value="";
				$value = ProcessLargeText(GetData($data,"Currunt Yellow", ""),"field=Currunt+Yellow".$keylink,"",MODE_PRINT);
			$row["Currunt_Yellow_value"]=$value;
	//	PF Red - 
		    $value="";
				$value = ProcessLargeText(GetData($data,"PF Red", ""),"field=PF+Red".$keylink,"",MODE_PRINT);
			$row["PF_Red_value"]=$value;
	//	PF Blue - 
		    $value="";
				$value = ProcessLargeText(GetData($data,"PF Blue", ""),"field=PF+Blue".$keylink,"",MODE_PRINT);
			$row["PF_Blue_value"]=$value;
	//	PF Yellow - 
		    $value="";
				$value = ProcessLargeText(GetData($data,"PF Yellow", ""),"field=PF+Yellow".$keylink,"",MODE_PRINT);
			$row["PF_Yellow_value"]=$value;
	//	Peak Power - 
		    $value="";
				$value = ProcessLargeText(GetData($data,"Peak Power", ""),"field=Peak+Power".$keylink,"",MODE_PRINT);
			$row["Peak_Power_value"]=$value;
	//	Date Time - Short Date
		    $value="";
				$value = ProcessLargeText(GetData($data,"Date Time", "Short Date"),"field=Date+Time".$keylink,"",MODE_PRINT);
			$row["Date_Time_value"]=$value;
	//	IsSync - Checkbox
		    $value="";
				$value = GetData($data,"IsSync", "Checkbox");
			$row["IsSync_value"]=$value;
	//	Currunt Readings - 
		    $value="";
				$value = ProcessLargeText(GetData($data,"Currunt Readings", ""),"field=Currunt+Readings".$keylink,"",MODE_PRINT);
			$row["Currunt_Readings_value"]=$value;
	$rowinfo[]=$row;
	}
	$xt->assign_loopsection("details_row",$rowinfo);
} else {
}
$xt->display("Readings_detailspreview.htm");
if($mode!="inline"){
	echo "counterSeparator".postvalue("counter");
	$layout = GetPageLayout(GoodFieldName($strTableName), 'detailspreview');
	if($layout)
	{
		$rtl = $xt->getReadingOrder() == 'RTL' ? 'RTL' : '';
		echo "counterSeparator"."styles/".$layout->style."/style".$rtl
			."counterSeparator"."pagestyles/".$layout->name.$rtl
			."counterSeparator".$layout->style." page-".$layout->name;
	}	
}	
?>