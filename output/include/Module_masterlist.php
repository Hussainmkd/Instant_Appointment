<?php
include_once(getabspath("include/Module_settings.php"));

function DisplayMasterTableInfo_Module($params)
{
	$detailtable=$params["detailtable"];
	$keys=$params["keys"];
	global $conn,$strTableName;
	$xt = new Xtempl();
	$oldTableName=$strTableName;
	$strTableName="dbo.Module";

//$strSQL = "SELECT ID,   [Module Type],   [Module Status],   [Module Condition],   [Serial Num],   [Entry Date]  FROM dbo.[Module]";

$sqlHead="SELECT ID,   [Module Type],   [Module Status],   [Module Condition],   [Serial Num],   [Entry Date]";
$sqlFrom="FROM dbo.[Module]";
$sqlWhere="";
$sqlTail="";

$where="";
$mKeys = array();
$showKeys = "";

global $page_styles, $page_layouts, $page_layout_names, $container_styles;

$layout = new TLayout("masterlist","BoldOrange","MobileOrange");
$layout->blocks["bare"] = array();
$layout->containers["0"] = array();

$layout->containers["0"][] = array("name"=>"masterlistheader","block"=>"","substyle"=>1);


$layout->skins["0"] = "empty";
$layout->blocks["bare"][] = "0";
$layout->containers["mastergrid"] = array();

$layout->containers["mastergrid"][] = array("name"=>"masterlistfields","block"=>"","substyle"=>1);


$layout->skins["mastergrid"] = "grid";
$layout->blocks["bare"][] = "mastergrid";$page_layouts["Module_masterlist"] = $layout;


if($detailtable=="dbo.Anomalies")
{
		$where.= GetFullFieldName("ID")."=".make_db_value("ID",$keys[1-1]);
	$showKeys .= " ".GetFieldLabel("dbo_Module","ID").": ".$keys[1-1];
	$xt->assign('showKeys',$showKeys);
	
}
if($detailtable=="dbo.Customer Module Assignment")
{
		$where.= GetFullFieldName("ID")."=".make_db_value("ID",$keys[1-1]);
	$showKeys .= " ".GetFieldLabel("dbo_Module","ID").": ".$keys[1-1];
	$xt->assign('showKeys',$showKeys);
	
}
if($detailtable=="dbo.Readings")
{
		$where.= GetFullFieldName("ID")."=".make_db_value("ID",$keys[1-1]);
	$showKeys .= " ".GetFieldLabel("dbo_Module","ID").": ".$keys[1-1];
	$xt->assign('showKeys',$showKeys);
	
}
	if(!$where)
	{
		$strTableName=$oldTableName;
		return;
	}
	$str = SecuritySQL("Search");
	if(strlen($str))
		$where.=" and ".$str;

	$strWhere=whereAdd($sqlWhere,$where);
	if(strlen($strWhere))
		$strWhere=" where ".$strWhere." ";
	$strSQL= $sqlHead.' '.$sqlFrom.$strWhere.$sqlTail;

//	$strSQL=AddWhere($strSQL,$where);
	LogInfo($strSQL);
	$rs=db_query($strSQL,$conn);
	$data=db_fetch_array($rs);
	if(!$data)
	{
		$strTableName=$oldTableName;
		return;
	}
	$keylink="";
	$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["ID"]));
	


//	ID - 
			$value="";
				$value = ProcessLargeText(GetData($data,"ID", ""),"field=ID".$keylink);
			$xt->assign("ID_mastervalue",$value);

//	Module Type - 
			$value="";
				$value=DisplayLookupWizard("Module Type",$data["Module Type"],$data,$keylink,MODE_LIST);
			$xt->assign("Module_Type_mastervalue",$value);

//	Module Status - 
			$value="";
				$value=DisplayLookupWizard("Module Status",$data["Module Status"],$data,$keylink,MODE_LIST);
			$xt->assign("Module_Status_mastervalue",$value);

//	Module Condition - 
			$value="";
				$value=DisplayLookupWizard("Module Condition",$data["Module Condition"],$data,$keylink,MODE_LIST);
			$xt->assign("Module_Condition_mastervalue",$value);

//	Serial Num - 
			$value="";
				$value = ProcessLargeText(GetData($data,"Serial Num", ""),"field=Serial+Num".$keylink);
			$xt->assign("Serial_Num_mastervalue",$value);

//	Entry Date - Short Date
			$value="";
				$value = ProcessLargeText(GetData($data,"Entry Date", "Short Date"),"field=Entry+Date".$keylink);
			$xt->assign("Entry_Date_mastervalue",$value);
	$xt->display("Module_masterlist.htm");
	$strTableName=$oldTableName;
}

?>