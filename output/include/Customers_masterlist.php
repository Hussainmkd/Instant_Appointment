<?php
include_once(getabspath("include/Customers_settings.php"));

function DisplayMasterTableInfo_Customers($params)
{
	$detailtable=$params["detailtable"];
	$keys=$params["keys"];
	global $conn,$strTableName;
	$xt = new Xtempl();
	$oldTableName=$strTableName;
	$strTableName="dbo.Customers";

//$strSQL = "SELECT ID,   Name,   [Father Name],   Address,   Contact,   Location,   [Customer Type]  FROM dbo.Customers";

$sqlHead="SELECT ID,   Name,   [Father Name],   Address,   Contact,   Location,   [Customer Type]";
$sqlFrom="FROM dbo.Customers";
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
$layout->blocks["bare"][] = "mastergrid";$page_layouts["Customers_masterlist"] = $layout;


if($detailtable=="dbo.Customer Module Assignment")
{
		$where.= GetFullFieldName("ID")."=".make_db_value("ID",$keys[1-1]);
	$showKeys .= " ".GetFieldLabel("dbo_Customers","ID").": ".$keys[1-1];
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

//	Name - 
			$value="";
				$value = ProcessLargeText(GetData($data,"Name", ""),"field=Name".$keylink);
			$xt->assign("Name_mastervalue",$value);

//	Father Name - 
			$value="";
				$value = ProcessLargeText(GetData($data,"Father Name", ""),"field=Father+Name".$keylink);
			$xt->assign("Father_Name_mastervalue",$value);

//	Address - 
			$value="";
				$value = ProcessLargeText(GetData($data,"Address", ""),"field=Address".$keylink);
			$xt->assign("Address_mastervalue",$value);

//	Contact - 
			$value="";
				$value = ProcessLargeText(GetData($data,"Contact", ""),"field=Contact".$keylink);
			$xt->assign("Contact_mastervalue",$value);

//	Location - 
			$value="";
				$value=DisplayLookupWizard("Location",$data["Location"],$data,$keylink,MODE_LIST);
			$xt->assign("Location_mastervalue",$value);

//	Customer Type - 
			$value="";
				$value=DisplayLookupWizard("Customer Type",$data["Customer Type"],$data,$keylink,MODE_LIST);
			$xt->assign("Customer_Type_mastervalue",$value);
	$xt->display("Customers_masterlist.htm");
	$strTableName=$oldTableName;
}

?>