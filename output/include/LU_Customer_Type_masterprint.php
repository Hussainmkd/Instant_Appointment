<?php
include_once(getabspath("include/LU_Customer_Type_settings.php"));

function DisplayMasterTableInfo_LU_Customer_Type($params)
{
	$detailtable=$params["detailtable"];
	$keys=$params["keys"];
	global $conn,$strTableName;
	$xt = new Xtempl();
	
	$oldTableName=$strTableName;
	$strTableName="dbo.LU_Customer Type";

//$strSQL = "SELECT Code,   [Type]  FROM dbo.[LU_Customer Type]";

$sqlHead="SELECT Code,   [Type]";
$sqlFrom="FROM dbo.[LU_Customer Type]";
$sqlWhere="";
$sqlTail="";

$where="";

global $page_styles, $page_layouts, $page_layout_names, $container_styles;
$layout = new TLayout("masterprint","BoldOrange","MobileOrange");
$layout->blocks["bare"] = array();
$layout->containers["0"] = array();

$layout->containers["0"][] = array("name"=>"masterprintheader","block"=>"","substyle"=>1);


$layout->skins["0"] = "empty";
$layout->blocks["bare"][] = "0";
$layout->containers["mastergrid"] = array();

$layout->containers["mastergrid"][] = array("name"=>"masterprintfields","block"=>"","substyle"=>1);


$layout->skins["mastergrid"] = "grid";
$layout->blocks["bare"][] = "mastergrid";$page_layouts["LU_Customer_Type_masterprint"] = $layout;


if($detailtable=="dbo.Customers")
{
		$where.= GetFullFieldName("Code")."=".make_db_value("Code",$keys[1-1]);
	
}
if(!$where)
{
	$strTableName=$oldTableName;
	return;
}
	$str = SecuritySQL("Export");
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
	$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["Code"]));
	


//	Code - 
			$value="";
				$value = ProcessLargeText(GetData($data,"Code", ""),"field=Code".$keylink,"",MODE_PRINT);
			$xt->assign("Code_mastervalue",$value);

//	Type - 
			$value="";
				$value = ProcessLargeText(GetData($data,"Type", ""),"field=Type".$keylink,"",MODE_PRINT);
			$xt->assign("Type_mastervalue",$value);
	$xt->display("LU_Customer_Type_masterprint.htm");
	$strTableName=$oldTableName;

}

?>