<?php
include_once(getabspath("include/User_Roles_settings.php"));

function DisplayMasterTableInfo_User_Roles($params)
{
	$detailtable=$params["detailtable"];
	$keys=$params["keys"];
	global $conn,$strTableName;
	$xt = new Xtempl();
	$oldTableName=$strTableName;
	$strTableName="dbo.User Roles";

//$strSQL = "SELECT Code,   [Role]  FROM dbo.[User Roles]";

$sqlHead="SELECT Code,   [Role]";
$sqlFrom="FROM dbo.[User Roles]";
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
$layout->blocks["bare"][] = "mastergrid";$page_layouts["User_Roles_masterlist"] = $layout;


if($detailtable=="dbo.System Users")
{
		$where.= GetFullFieldName("Code")."=".make_db_value("Code",$keys[1-1]);
	$showKeys .= " ".GetFieldLabel("dbo_User_Roles","Code").": ".$keys[1-1];
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
	$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["Code"]));
	


//	Code - 
			$value="";
				$value = ProcessLargeText(GetData($data,"Code", ""),"field=Code".$keylink);
			$xt->assign("Code_mastervalue",$value);

//	Role - 
			$value="";
				$value = ProcessLargeText(GetData($data,"Role", ""),"field=Role".$keylink);
			$xt->assign("Role_mastervalue",$value);
	$xt->display("User_Roles_masterlist.htm");
	$strTableName=$oldTableName;
}

?>