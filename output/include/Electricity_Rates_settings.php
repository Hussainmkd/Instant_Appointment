<?php
$tdataElectricity_Rates=array();
	$tdataElectricity_Rates[".NumberOfChars"]=80; 
	$tdataElectricity_Rates[".ShortName"]="Electricity_Rates";
	$tdataElectricity_Rates[".OwnerID"]="";
	$tdataElectricity_Rates[".OriginalTable"]="dbo.Electricity Rates";


	
//	field labels
$fieldLabelsElectricity_Rates = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsElectricity_Rates["English"]=array();
	$fieldToolTipsElectricity_Rates["English"]=array();
	$fieldLabelsElectricity_Rates["English"]["Units"] = "Units";
	$fieldToolTipsElectricity_Rates["English"]["Units"] = "";
	$fieldLabelsElectricity_Rates["English"]["PerUnit_Price"] = "PerUnit Price";
	$fieldToolTipsElectricity_Rates["English"]["PerUnit Price"] = "";
	if (count($fieldToolTipsElectricity_Rates["English"])){
		$tdataElectricity_Rates[".isUseToolTips"]=true;
	}
}
if(mlang_getcurrentlang()=="Urdu")
{
	$fieldLabelsElectricity_Rates["Urdu"]=array();
	$fieldToolTipsElectricity_Rates["Urdu"]=array();
	$fieldLabelsElectricity_Rates["Urdu"]["Units"] = "Units";
	$fieldToolTipsElectricity_Rates["Urdu"]["Units"] = "";
	$fieldLabelsElectricity_Rates["Urdu"]["PerUnit_Price"] = "PerUnit Price";
	$fieldToolTipsElectricity_Rates["Urdu"]["PerUnit Price"] = "";
	if (count($fieldToolTipsElectricity_Rates["Urdu"])){
		$tdataElectricity_Rates[".isUseToolTips"]=true;
	}
}


	
	$tdataElectricity_Rates[".NCSearch"]=true;

	

$tdataElectricity_Rates[".shortTableName"] = "Electricity_Rates";
$tdataElectricity_Rates[".nSecOptions"] = 0;
$tdataElectricity_Rates[".recsPerRowList"] = 1;	
$tdataElectricity_Rates[".tableGroupBy"] = "0";
$tdataElectricity_Rates[".mainTableOwnerID"] = "";
$tdataElectricity_Rates[".moveNext"] = 1;




$tdataElectricity_Rates[".showAddInPopup"] = false;

$tdataElectricity_Rates[".showEditInPopup"] = false;

$tdataElectricity_Rates[".showViewInPopup"] = false;


$tdataElectricity_Rates[".fieldsForRegister"] = array();

$tdataElectricity_Rates[".listAjax"] = false;

	$tdataElectricity_Rates[".audit"] = false;

	$tdataElectricity_Rates[".locking"] = false;
	
$tdataElectricity_Rates[".listIcons"] = true;
$tdataElectricity_Rates[".edit"] = true;
$tdataElectricity_Rates[".inlineEdit"] = true;
$tdataElectricity_Rates[".view"] = true;

$tdataElectricity_Rates[".exportTo"] = true;

$tdataElectricity_Rates[".printFriendly"] = true;

$tdataElectricity_Rates[".delete"] = true;

$tdataElectricity_Rates[".showSimpleSearchOptions"] = false;

$tdataElectricity_Rates[".showSearchPanel"] = true;


$tdataElectricity_Rates[".isUseAjaxSuggest"] = true;

$tdataElectricity_Rates[".rowHighlite"] = true;


// button handlers file names

$tdataElectricity_Rates[".addPageEvents"] = false;

$tdataElectricity_Rates[".arrKeyFields"][] = "Units";

// use datepicker for search panel
$tdataElectricity_Rates[".isUseCalendarForSearch"] = false;

// use timepicker for search panel
$tdataElectricity_Rates[".isUseTimeForSearch"] = false;

$tdataElectricity_Rates[".isUseiBox"] = false;


	

	


$tdataElectricity_Rates[".isUseInlineAdd"] = true;

$tdataElectricity_Rates[".isUseInlineEdit"] = true;
$tdataElectricity_Rates[".isUseInlineJs"] = $tdataElectricity_Rates[".isUseInlineAdd"] || $tdataElectricity_Rates[".isUseInlineEdit"];

$tdataElectricity_Rates[".allSearchFields"] = array();

$tdataElectricity_Rates[".globSearchFields"][] = "Units";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Units", $tdataElectricity_Rates[".allSearchFields"]))
{
	$tdataElectricity_Rates[".allSearchFields"][] = "Units";	
}
$tdataElectricity_Rates[".globSearchFields"][] = "PerUnit Price";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("PerUnit Price", $tdataElectricity_Rates[".allSearchFields"]))
{
	$tdataElectricity_Rates[".allSearchFields"][] = "PerUnit Price";	
}


$tdataElectricity_Rates[".googleLikeFields"][] = "Units";
$tdataElectricity_Rates[".googleLikeFields"][] = "PerUnit Price";



$tdataElectricity_Rates[".advSearchFields"][] = "Units";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Units", $tdataElectricity_Rates[".allSearchFields"])) 
{
	$tdataElectricity_Rates[".allSearchFields"][] = "Units";	
}
$tdataElectricity_Rates[".advSearchFields"][] = "PerUnit Price";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("PerUnit Price", $tdataElectricity_Rates[".allSearchFields"])) 
{
	$tdataElectricity_Rates[".allSearchFields"][] = "PerUnit Price";	
}

$tdataElectricity_Rates[".isTableType"] = "list";


	



// Access doesn't support subqueries from the same table as main
$tdataElectricity_Rates[".subQueriesSupAccess"] = true;





$tdataElectricity_Rates[".pageSize"] = 20;

$gstrOrderBy = "";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy = "order by ".$gstrOrderBy;
$tdataElectricity_Rates[".strOrderBy"] = $gstrOrderBy;
	
$tdataElectricity_Rates[".orderindexes"] = array();

$tdataElectricity_Rates[".sqlHead"] = "SELECT Units,   [PerUnit Price]";
$tdataElectricity_Rates[".sqlFrom"] = "FROM dbo.[Electricity Rates]";
$tdataElectricity_Rates[".sqlWhereExpr"] = "";
$tdataElectricity_Rates[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataElectricity_Rates[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataElectricity_Rates[".arrGroupsPerPage"] = $arrGPP;

	$tableKeys = array();
	$tableKeys[] = "Units";
	$tdataElectricity_Rates[".Keys"] = $tableKeys;

//	Units
	$fdata = array();
	$fdata["strName"] = "Units";
	$fdata["ownerTable"] = "dbo.Electricity Rates";
	$fdata["Label"]=GetFieldLabel("dbo_Electricity_Rates","Units"); 
	
		
		
	$fdata["FieldType"]= 3;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "Units";
	
		$fdata["FullName"]= "Units";
	
		$fdata["IsRequired"]=true; 
	
		
		
		
		
				$fdata["Index"]= 1;
				$fdata["EditParams"]="";
			
		$fdata["bListPage"]=true; 
	
		
		
		
		
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		$fdata["bPrinterPage"]=true; 
	
		$fdata["bExportPage"]=true; 
	
	//Begin validation
	$fdata["validateAs"] = array();
				$fdata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$fdata["validateAs"]["basicValidate"][] = "IsRequired";
	
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdataElectricity_Rates["Units"]=$fdata;
//	PerUnit Price
	$fdata = array();
	$fdata["strName"] = "PerUnit Price";
	$fdata["ownerTable"] = "dbo.Electricity Rates";
	$fdata["Label"]=GetFieldLabel("dbo_Electricity_Rates","PerUnit_Price"); 
	
		
		
	$fdata["FieldType"]= 5;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "Number";
	
		
		
		
		$fdata["DecimalDigits"] = 2;
	
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "PerUnit_Price";
	
		$fdata["FullName"]= "[PerUnit Price]";
	
		$fdata["IsRequired"]=true; 
	
		
		
		
		
				$fdata["Index"]= 2;
				$fdata["EditParams"]="";
			
		$fdata["bListPage"]=true; 
	
		$fdata["bAddPage"]=true; 
	
		$fdata["bInlineAdd"]=true; 
	
		$fdata["bEditPage"]=true; 
	
		$fdata["bInlineEdit"]=true; 
	
		$fdata["bViewPage"]=true; 
	
		$fdata["bAdvancedSearch"]=true; 
	
		$fdata["bPrinterPage"]=true; 
	
		$fdata["bExportPage"]=true; 
	
	//Begin validation
	$fdata["validateAs"] = array();
				$fdata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$fdata["validateAs"]["basicValidate"][] = "IsRequired";
	
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdataElectricity_Rates["PerUnit Price"]=$fdata;


	
$tables_data["dbo.Electricity Rates"]=&$tdataElectricity_Rates;
$field_labels["dbo_Electricity_Rates"] = &$fieldLabelsElectricity_Rates;
$fieldToolTips["dbo.Electricity Rates"] = &$fieldToolTipsElectricity_Rates;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dbo.Electricity Rates"] = array();

	
// tables which are master tables for current table (detail)
$masterTablesData["dbo.Electricity Rates"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Electricity_Rates()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Units,   [PerUnit Price]";
$proto0["m_strFrom"] = "FROM dbo.[Electricity Rates]";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
$proto1=array();
$proto1["m_sql"] = "";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = "0";
$proto1["m_inBrackets"] = "0";
$proto1["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto3=array();
$proto3["m_sql"] = "";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "";
$proto3["m_havingmode"] = "0";
$proto3["m_inBrackets"] = "0";
$proto3["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto3);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto5=array();
			$obj = new SQLField(array(
	"m_strName" => "Units",
	"m_strTable" => "dbo.Electricity Rates"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "PerUnit Price",
	"m_strTable" => "dbo.Electricity Rates"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "dbo.Electricity Rates";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "Units";
$proto10["m_columns"][] = "PerUnit Price";
$obj = new SQLTable($proto10);

$proto9["m_table"] = $obj;
$proto9["m_alias"] = "";
$proto11=array();
$proto11["m_sql"] = "";
$proto11["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto11["m_column"]=$obj;
$proto11["m_contained"] = array();
$proto11["m_strCase"] = "";
$proto11["m_havingmode"] = "0";
$proto11["m_inBrackets"] = "0";
$proto11["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto11);

$proto9["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto9);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

return $obj;
}
$queryData_Electricity_Rates = createSqlQuery_Electricity_Rates();
$tdataElectricity_Rates[".sqlquery"] = $queryData_Electricity_Rates;



$tableEvents["dbo.Electricity Rates"] = new eventsBase;
$tdataElectricity_Rates[".hasEvents"] = false;

?>
