<?php
$tdataLU_Module_Condition=array();
	$tdataLU_Module_Condition[".NumberOfChars"]=80; 
	$tdataLU_Module_Condition[".ShortName"]="LU_Module_Condition";
	$tdataLU_Module_Condition[".OwnerID"]="";
	$tdataLU_Module_Condition[".OriginalTable"]="dbo.LU_Module Condition";


	
//	field labels
$fieldLabelsLU_Module_Condition = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsLU_Module_Condition["English"]=array();
	$fieldToolTipsLU_Module_Condition["English"]=array();
	$fieldLabelsLU_Module_Condition["English"]["Code"] = "Code";
	$fieldToolTipsLU_Module_Condition["English"]["Code"] = "";
	$fieldLabelsLU_Module_Condition["English"]["Condition"] = "Condition";
	$fieldToolTipsLU_Module_Condition["English"]["Condition"] = "";
	if (count($fieldToolTipsLU_Module_Condition["English"])){
		$tdataLU_Module_Condition[".isUseToolTips"]=true;
	}
}
if(mlang_getcurrentlang()=="Urdu")
{
	$fieldLabelsLU_Module_Condition["Urdu"]=array();
	$fieldToolTipsLU_Module_Condition["Urdu"]=array();
	$fieldLabelsLU_Module_Condition["Urdu"]["Code"] = "Code";
	$fieldToolTipsLU_Module_Condition["Urdu"]["Code"] = "";
	$fieldLabelsLU_Module_Condition["Urdu"]["Condition"] = "Condition";
	$fieldToolTipsLU_Module_Condition["Urdu"]["Condition"] = "";
	if (count($fieldToolTipsLU_Module_Condition["Urdu"])){
		$tdataLU_Module_Condition[".isUseToolTips"]=true;
	}
}


	
	$tdataLU_Module_Condition[".NCSearch"]=true;

	

$tdataLU_Module_Condition[".shortTableName"] = "LU_Module_Condition";
$tdataLU_Module_Condition[".nSecOptions"] = 0;
$tdataLU_Module_Condition[".recsPerRowList"] = 1;	
$tdataLU_Module_Condition[".tableGroupBy"] = "0";
$tdataLU_Module_Condition[".mainTableOwnerID"] = "";
$tdataLU_Module_Condition[".moveNext"] = 1;




$tdataLU_Module_Condition[".showAddInPopup"] = false;

$tdataLU_Module_Condition[".showEditInPopup"] = false;

$tdataLU_Module_Condition[".showViewInPopup"] = false;


$tdataLU_Module_Condition[".fieldsForRegister"] = array();

$tdataLU_Module_Condition[".listAjax"] = false;

	$tdataLU_Module_Condition[".audit"] = false;

	$tdataLU_Module_Condition[".locking"] = false;
	
$tdataLU_Module_Condition[".listIcons"] = true;
$tdataLU_Module_Condition[".edit"] = true;
$tdataLU_Module_Condition[".inlineEdit"] = true;
$tdataLU_Module_Condition[".view"] = true;

$tdataLU_Module_Condition[".exportTo"] = true;

$tdataLU_Module_Condition[".printFriendly"] = true;

$tdataLU_Module_Condition[".delete"] = true;

$tdataLU_Module_Condition[".showSimpleSearchOptions"] = false;

$tdataLU_Module_Condition[".showSearchPanel"] = true;


$tdataLU_Module_Condition[".isUseAjaxSuggest"] = true;

$tdataLU_Module_Condition[".rowHighlite"] = true;


// button handlers file names

$tdataLU_Module_Condition[".addPageEvents"] = false;

$tdataLU_Module_Condition[".arrKeyFields"][] = "Code";

// use datepicker for search panel
$tdataLU_Module_Condition[".isUseCalendarForSearch"] = false;

// use timepicker for search panel
$tdataLU_Module_Condition[".isUseTimeForSearch"] = false;

$tdataLU_Module_Condition[".isUseiBox"] = false;


	

	

$tdataLU_Module_Condition[".useDetailsPreview"] = true;	

$tdataLU_Module_Condition[".isUseInlineAdd"] = true;

$tdataLU_Module_Condition[".isUseInlineEdit"] = true;
$tdataLU_Module_Condition[".isUseInlineJs"] = $tdataLU_Module_Condition[".isUseInlineAdd"] || $tdataLU_Module_Condition[".isUseInlineEdit"];

$tdataLU_Module_Condition[".allSearchFields"] = array();

$tdataLU_Module_Condition[".globSearchFields"][] = "Code";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Code", $tdataLU_Module_Condition[".allSearchFields"]))
{
	$tdataLU_Module_Condition[".allSearchFields"][] = "Code";	
}
$tdataLU_Module_Condition[".globSearchFields"][] = "Condition";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Condition", $tdataLU_Module_Condition[".allSearchFields"]))
{
	$tdataLU_Module_Condition[".allSearchFields"][] = "Condition";	
}


$tdataLU_Module_Condition[".googleLikeFields"][] = "Code";
$tdataLU_Module_Condition[".googleLikeFields"][] = "Condition";



$tdataLU_Module_Condition[".advSearchFields"][] = "Code";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Code", $tdataLU_Module_Condition[".allSearchFields"])) 
{
	$tdataLU_Module_Condition[".allSearchFields"][] = "Code";	
}
$tdataLU_Module_Condition[".advSearchFields"][] = "Condition";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Condition", $tdataLU_Module_Condition[".allSearchFields"])) 
{
	$tdataLU_Module_Condition[".allSearchFields"][] = "Condition";	
}

$tdataLU_Module_Condition[".isTableType"] = "list";


	



// Access doesn't support subqueries from the same table as main
$tdataLU_Module_Condition[".subQueriesSupAccess"] = true;

	



$tdataLU_Module_Condition[".pageSize"] = 20;

$gstrOrderBy = "";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy = "order by ".$gstrOrderBy;
$tdataLU_Module_Condition[".strOrderBy"] = $gstrOrderBy;
	
$tdataLU_Module_Condition[".orderindexes"] = array();

$tdataLU_Module_Condition[".sqlHead"] = "SELECT Code,   [Condition]";
$tdataLU_Module_Condition[".sqlFrom"] = "FROM dbo.[LU_Module Condition]";
$tdataLU_Module_Condition[".sqlWhereExpr"] = "";
$tdataLU_Module_Condition[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataLU_Module_Condition[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataLU_Module_Condition[".arrGroupsPerPage"] = $arrGPP;

	$tableKeys = array();
	$tableKeys[] = "Code";
	$tdataLU_Module_Condition[".Keys"] = $tableKeys;

//	Code
	$fdata = array();
	$fdata["strName"] = "Code";
	$fdata["ownerTable"] = "dbo.LU_Module Condition";
	$fdata["Label"]=GetFieldLabel("dbo_LU_Module_Condition","Code"); 
	
		
		
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
	
		
				
		
		
		
			$tdataLU_Module_Condition["Code"]=$fdata;
//	Condition
	$fdata = array();
	$fdata["strName"] = "Condition";
	$fdata["ownerTable"] = "dbo.LU_Module Condition";
	$fdata["Label"]=GetFieldLabel("dbo_LU_Module_Condition","Condition"); 
	
		
		
	$fdata["FieldType"]= 202;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "Condition";
	
		$fdata["FullName"]= "[Condition]";
	
		
		
		
		
		
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
	
		
				
		
		
		
			$tdataLU_Module_Condition["Condition"]=$fdata;


	
$tables_data["dbo.LU_Module Condition"]=&$tdataLU_Module_Condition;
$field_labels["dbo_LU_Module_Condition"] = &$fieldLabelsLU_Module_Condition;
$fieldToolTips["dbo.LU_Module Condition"] = &$fieldToolTipsLU_Module_Condition;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dbo.LU_Module Condition"] = array();
$dIndex = 1-1;
			$strOriginalDetailsTable="dbo.Module";
	$detailsTablesData["dbo.LU_Module Condition"][$dIndex] = array(
		  "dDataSourceTable"=>"dbo.Module"
		, "dOriginalTable"=>$strOriginalDetailsTable
		, "dShortTable"=>"Module"
		, "masterKeys"=>array()
		, "detailKeys"=>array()
		, "dispChildCount"=> "1"
		, "hideChild"=>"0"
		, "sqlHead"=>"SELECT ID,   [Module Type],   [Module Status],   [Module Condition],   [Serial Num],   [Entry Date]"	
		, "sqlFrom"=>"FROM dbo.[Module]"	
		, "sqlWhere"=>""
		, "sqlTail"=>""
		, "groupBy"=>"0"
		, "previewOnList" => 1
		, "previewOnAdd" => 0
		, "previewOnEdit" => 0
		, "previewOnView" => 0
	);	
		$detailsTablesData["dbo.LU_Module Condition"][$dIndex]["masterKeys"][]="Code";
		$detailsTablesData["dbo.LU_Module Condition"][$dIndex]["detailKeys"][]="Module Condition";


	
// tables which are master tables for current table (detail)
$masterTablesData["dbo.LU_Module Condition"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_LU_Module_Condition()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Code,   [Condition]";
$proto0["m_strFrom"] = "FROM dbo.[LU_Module Condition]";
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
	"m_strTable" => "dbo.LU_Module Condition"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Condition",
	"m_strTable" => "dbo.LU_Module Condition"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "dbo.LU_Module Condition";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "Code";
$proto10["m_columns"][] = "Condition";
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
$queryData_LU_Module_Condition = createSqlQuery_LU_Module_Condition();
$tdataLU_Module_Condition[".sqlquery"] = $queryData_LU_Module_Condition;



$tableEvents["dbo.LU_Module Condition"] = new eventsBase;
$tdataLU_Module_Condition[".hasEvents"] = false;

?>
