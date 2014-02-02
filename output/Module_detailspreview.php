<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

include("include/Module_variables.php");

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
$layout->blocks["bare"][] = "detailspreviewgrid";$page_layouts["Module_detailspreview"] = $layout;


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

if($mastertable=="dbo.LU_Module Condition")
{
	$where ="";
		$where.= GetFullFieldName("Module Condition")."=".make_db_value("Module Condition",$_SESSION[$strTableName."_masterkey1"]);
}
if($mastertable=="dbo.LU_Module Status")
{
	$where ="";
		$where.= GetFullFieldName("Module Status")."=".make_db_value("Module Status",$_SESSION[$strTableName."_masterkey1"]);
}
if($mastertable=="dbo.LU_Module Type")
{
	$where ="";
		$where.= GetFullFieldName("Module Type")."=".make_db_value("Module Type",$_SESSION[$strTableName."_masterkey1"]);
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
		$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["ID"]));

	
	//	ID - 
		    $value="";
				$value = ProcessLargeText(GetData($data,"ID", ""),"field=ID".$keylink,"",MODE_PRINT);
			$row["ID_value"]=$value;
	//	Module Type - 
		    $value="";
				$value=DisplayLookupWizard("Module Type",$data["Module Type"],$data,$keylink,MODE_PRINT);
			$row["Module_Type_value"]=$value;
	//	Module Status - 
		    $value="";
				$value=DisplayLookupWizard("Module Status",$data["Module Status"],$data,$keylink,MODE_PRINT);
			$row["Module_Status_value"]=$value;
	//	Module Condition - 
		    $value="";
				$value=DisplayLookupWizard("Module Condition",$data["Module Condition"],$data,$keylink,MODE_PRINT);
			$row["Module_Condition_value"]=$value;
	//	Serial Num - 
		    $value="";
				$value = ProcessLargeText(GetData($data,"Serial Num", ""),"field=Serial+Num".$keylink,"",MODE_PRINT);
			$row["Serial_Num_value"]=$value;
	//	Entry Date - Short Date
		    $value="";
				$value = ProcessLargeText(GetData($data,"Entry Date", "Short Date"),"field=Entry+Date".$keylink,"",MODE_PRINT);
			$row["Entry_Date_value"]=$value;
	$rowinfo[]=$row;
	}
	$xt->assign_loopsection("details_row",$rowinfo);
} else {
}
$xt->display("Module_detailspreview.htm");
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