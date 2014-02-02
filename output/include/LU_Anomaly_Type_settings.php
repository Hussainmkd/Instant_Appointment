<?php
$tdataLU_Anomaly_Type=array();
	$tdataLU_Anomaly_Type[".NumberOfChars"]=80; 
	$tdataLU_Anomaly_Type[".ShortName"]="LU_Anomaly_Type";
	$tdataLU_Anomaly_Type[".OwnerID"]="";
	$tdataLU_Anomaly_Type[".OriginalTable"]="dbo.LU_Anomaly Type";


	
//	field labels
$fieldLabelsLU_Anomaly_Type = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsLU_Anomaly_Type["English"]=array();
	$fieldToolTipsLU_Anomaly_Type["English"]=array();
	$fieldLabelsLU_Anomaly_Type["English"]["Code"] = "Code";
	$fieldToolTipsLU_Anomaly_Type["English"]["Code"] = "";
	$fieldLabelsLU_Anomaly_Type["English"]["Tamper_Type"] = "Tamper Type";
	$fieldToolTipsLU_Anomaly_Type["English"]["Tamper Type"] = "";
	if (count($fieldToolTipsLU_Anomaly_Type["English"])){
		$tdataLU_Anomaly_Type[".isUseToolTips"]=true;
	}
}
if(mlang_getcurrentlang()=="Urdu")
{
	$fieldLabelsLU_Anomaly_Type["Urdu"]=array();
	$fieldToolTipsLU_Anomaly_Type["Urdu"]=array();
	$fieldLabelsLU_Anomaly_Type["Urdu"]["Code"] = "Code";
	$fieldToolTipsLU_Anomaly_Type["Urdu"]["Code"] = "";
	$fieldLabelsLU_Anomaly_Type["Urdu"]["Tamper_Type"] = "Tamper Type";
	$fieldToolTipsLU_Anomaly_Type["Urdu"]["Tamper Type"] = "";
	if (count($fieldToolTipsLU_Anomaly_Type["Urdu"])){
		$tdataLU_Anomaly_Type[".isUseToolTips"]=true;
	}
}


	
	$tdataLU_Anomaly_Type[".NCSearch"]=true;

	

$tdataLU_Anomaly_Type[".shortTableName"] = "LU_Anomaly_Type";
$tdataLU_Anomaly_Type[".nSecOptions"] = 0;
$tdataLU_Anomaly_Type[".recsPerRowList"] = 1;	
$tdataLU_Anomaly_Type[".tableGroupBy"] = "0";
$tdataLU_Anomaly_Type[".mainTableOwnerID"] = "";
$tdataLU_Anomaly_Type[".moveNext"] = 1;




$tdataLU_Anomaly_Type[".showAddInPopup"] = false;

$tdataLU_Anomaly_Type[".showEditInPopup"] = false;

$tdataLU_Anomaly_Type[".showViewInPopup"] = false;


$tdataLU_Anomaly_Type[".fieldsForRegister"] = array();

$tdataLU_Anomaly_Type[".listAjax"] = false;

	$tdataLU_Anomaly_Type[".audit"] = false;

	$tdataLU_Anomaly_Type[".locking"] = false;
	
$tdataLU_Anomaly_Type[".listIcons"] = true;
$tdataLU_Anomaly_Type[".edit"] = true;
$tdataLU_Anomaly_Type[".inlineEdit"] = true;
$tdataLU_Anomaly_Type[".view"] = true;

$tdataLU_Anomaly_Type[".exportTo"] = true;

$tdataLU_Anomaly_Type[".printFriendly"] = true;

$tdataLU_Anomaly_Type[".delete"] = true;

$tdataLU_Anomaly_Type[".showSimpleSearchOptions"] = false;

$tdataLU_Anomaly_Type[".showSearchPanel"] = true;


$tdataLU_Anomaly_Type[".isUseAjaxSuggest"] = true;

$tdataLU_Anomaly_Type[".rowHighlite"] = true;


// button handlers file names

$tdataLU_Anomaly_Type[".addPageEvents"] = false;

$tdataLU_Anomaly_Type[".arrKeyFields"][] = "Code";

// use datepicker for search panel
$tdataLU_Anomaly_Type[".isUseCalendarForSearch"] = false;

// use timepicker for search panel
$tdataLU_Anomaly_Type[".isUseTimeForSearch"] = false;

$tdataLU_Anomaly_Type[".isUseiBox"] = false;


	

	

$tdataLU_Anomaly_Type[".useDetailsPreview"] = true;	

$tdataLU_Anomaly_Type[".isUseInlineAdd"] = true;

$tdataLU_Anomaly_Type[".isUseInlineEdit"] = true;
$tdataLU_Anomaly_Type[".isUseInlineJs"] = $tdataLU_Anomaly_Type[".isUseInlineAdd"] || $tdataLU_Anomaly_Type[".isUseInlineEdit"];

$tdataLU_Anomaly_Type[".allSearchFields"] = array();

$tdataLU_Anomaly_Type[".globSearchFields"][] = "Code";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Code", $tdataLU_Anomaly_Type[".allSearchFields"]))
{
	$tdataLU_Anomaly_Type[".allSearchFields"][] = "Code";	
}
$tdataLU_Anomaly_Type[".globSearchFields"][] = "Tamper Type";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Tamper Type", $tdataLU_Anomaly_Type[".allSearchFields"]))
{
	$tdataLU_Anomaly_Type[".allSearchFields"][] = "Tamper Type";	
}


$tdataLU_Anomaly_Type[".googleLikeFields"][] = "Code";
$tdataLU_Anomaly_Type[".googleLikeFields"][] = "Tamper Type";



$tdataLU_Anomaly_Type[".advSearchFields"][] = "Code";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Code", $tdataLU_Anomaly_Type[".allSearchFields"])) 
{
	$tdataLU_Anomaly_Type[".allSearchFields"][] = "Code";	
}
$tdataLU_Anomaly_Type[".advSearchFields"][] = "Tamper Type";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Tamper Type", $tdataLU_Anomaly_Type[".allSearchFields"])) 
{
	$tdataLU_Anomaly_Type[".allSearchFields"][] = "Tamper Type";	
}

$tdataLU_Anomaly_Type[".isTableType"] = "list";


	



// Access doesn't support subqueries from the same table as main
$tdataLU_Anomaly_Type[".subQueriesSupAccess"] = true;

	



$tdataLU_Anomaly_Type[".pageSize"] = 20;

$gstrOrderBy = "";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy = "order by ".$gstrOrderBy;
$tdataLU_Anomaly_Type[".strOrderBy"] = $gstrOrderBy;
	
$tdataLU_Anomaly_Type[".orderindexes"] = array();

$tdataLU_Anomaly_Type[".sqlHead"] = "SELECT Code,   [Tamper Type]";
$tdataLU_Anomaly_Type[".sqlFrom"] = "FROM dbo.[LU_Anomaly Type]";
$tdataLU_Anomaly_Type[".sqlWhereExpr"] = "";
$tdataLU_Anomaly_Type[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataLU_Anomaly_Type[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataLU_Anomaly_Type[".arrGroupsPerPage"] = $arrGPP;

	$tableKeys = array();
	$tableKeys[] = "Code";
	$tdataLU_Anomaly_Type[".Keys"] = $tableKeys;

//	Code
	$fdata = array();
	$fdata["strName"] = "Code";
	$fdata["ownerTable"] = "dbo.LU_Anomaly Type";
	$fdata["Label"]=GetFieldLabel("dbo_LU_Anomaly_Type","Code"); 
	
		
		
	$fdata["FieldType"]= 3;
	
		$fdata["AutoInc"]=true;
	
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "Code";
	
		$fdata["FullName"]= "Code";
	
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
	
		
				
		
		
		
			$tdataLU_Anomaly_Type["Code"]=$fdata;
//	Tamper Type
	$fdata = array();
	$fdata["strName"] = "Tamper Type";
	$fdata["ownerTable"] = "dbo.LU_Anomaly Type";
	$fdata["Label"]=GetFieldLabel("dbo_LU_Anomaly_Type","Tamper_Type"); 
	
		
		
	$fdata["FieldType"]= 202;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "Tamper_Type";
	
		$fdata["FullName"]= "[Tamper Type]";
	
		
		
		
		
		
				$fdata["Index"]= 2;
				$fdata["EditParams"]="";
			$fdata["EditParams"].= " maxlength=50";
		
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
		
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdataLU_Anomaly_Type["Tamper Type"]=$fdata;


	
$tables_data["dbo.LU_Anomaly Type"]=&$tdataLU_Anomaly_Type;
$field_labels["dbo_LU_Anomaly_Type"] = &$fieldLabelsLU_Anomaly_Type;
$fieldToolTips["dbo.LU_Anomaly Type"] = &$fieldToolTipsLU_Anomaly_Type;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dbo.LU_Anomaly Type"] = array();
$dIndex = 1-1;
			$strOriginalDetailsTable="dbo.Anomalies";
	$detailsTablesData["dbo.LU_Anomaly Type"][$dIndex] = array(
		  "dDataSourceTable"=>"dbo.Anomalies"
		, "dOriginalTable"=>$strOriginalDetailsTable
		, "dShortTable"=>"Anomalies"
		, "masterKeys"=>array()
		, "detailKeys"=>array()
		, "dispChildCount"=> "1"
		, "hideChild"=>"0"
		, "sqlHead"=>"SELECT ID,   [Module ID],   [Anomaly Description],   [Anomaly Type],   [Date Time],   [Action Taken]"	
		, "sqlFrom"=>"FROM dbo.Anomalies"	
		, "sqlWhere"=>""
		, "sqlTail"=>""
		, "groupBy"=>"0"
		, "previewOnList" => 1
		, "previewOnAdd" => 0
		, "previewOnEdit" => 0
		, "previewOnView" => 0
	);	
		$detailsTablesData["dbo.LU_Anomaly Type"][$dIndex]["masterKeys"][]="Code";
		$detailsTablesData["dbo.LU_Anomaly Type"][$dIndex]["detailKeys"][]="Anomaly Type";


	
// tables which are master tables for current table (detail)
$masterTablesData["dbo.LU_Anomaly Type"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_LU_Anomaly_Type()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Code,   [Tamper Type]";
$proto0["m_strFrom"] = "FROM dbo.[LU_Anomaly Type]";
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
	"m_strName" => "Code",
	"m_strTable" => "dbo.LU_Anomaly Type"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Tamper Type",
	"m_strTable" => "dbo.LU_Anomaly Type"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "dbo.LU_Anomaly Type";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "Code";
$proto10["m_columns"][] = "Tamper Type";
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
$queryData_LU_Anomaly_Type = createSqlQuery_LU_Anomaly_Type();
$tdataLU_Anomaly_Type[".sqlquery"] = $queryData_LU_Anomaly_Type;



$tableEvents["dbo.LU_Anomaly Type"] = new eventsBase;
$tdataLU_Anomaly_Type[".hasEvents"] = false;

?>
