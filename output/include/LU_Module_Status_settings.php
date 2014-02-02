<?php
$tdataLU_Module_Status=array();
	$tdataLU_Module_Status[".NumberOfChars"]=80; 
	$tdataLU_Module_Status[".ShortName"]="LU_Module_Status";
	$tdataLU_Module_Status[".OwnerID"]="";
	$tdataLU_Module_Status[".OriginalTable"]="dbo.LU_Module Status";


	
//	field labels
$fieldLabelsLU_Module_Status = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsLU_Module_Status["English"]=array();
	$fieldToolTipsLU_Module_Status["English"]=array();
	$fieldLabelsLU_Module_Status["English"]["Code"] = "Code";
	$fieldToolTipsLU_Module_Status["English"]["Code"] = "";
	$fieldLabelsLU_Module_Status["English"]["Status"] = "Status";
	$fieldToolTipsLU_Module_Status["English"]["Status"] = "";
	if (count($fieldToolTipsLU_Module_Status["English"])){
		$tdataLU_Module_Status[".isUseToolTips"]=true;
	}
}
if(mlang_getcurrentlang()=="Urdu")
{
	$fieldLabelsLU_Module_Status["Urdu"]=array();
	$fieldToolTipsLU_Module_Status["Urdu"]=array();
	$fieldLabelsLU_Module_Status["Urdu"]["Code"] = "Code";
	$fieldToolTipsLU_Module_Status["Urdu"]["Code"] = "";
	$fieldLabelsLU_Module_Status["Urdu"]["Status"] = "Status";
	$fieldToolTipsLU_Module_Status["Urdu"]["Status"] = "";
	if (count($fieldToolTipsLU_Module_Status["Urdu"])){
		$tdataLU_Module_Status[".isUseToolTips"]=true;
	}
}


	
	$tdataLU_Module_Status[".NCSearch"]=true;

	

$tdataLU_Module_Status[".shortTableName"] = "LU_Module_Status";
$tdataLU_Module_Status[".nSecOptions"] = 0;
$tdataLU_Module_Status[".recsPerRowList"] = 1;	
$tdataLU_Module_Status[".tableGroupBy"] = "0";
$tdataLU_Module_Status[".mainTableOwnerID"] = "";
$tdataLU_Module_Status[".moveNext"] = 1;




$tdataLU_Module_Status[".showAddInPopup"] = false;

$tdataLU_Module_Status[".showEditInPopup"] = false;

$tdataLU_Module_Status[".showViewInPopup"] = false;


$tdataLU_Module_Status[".fieldsForRegister"] = array();

$tdataLU_Module_Status[".listAjax"] = false;

	$tdataLU_Module_Status[".audit"] = false;

	$tdataLU_Module_Status[".locking"] = false;
	
$tdataLU_Module_Status[".listIcons"] = true;
$tdataLU_Module_Status[".edit"] = true;
$tdataLU_Module_Status[".inlineEdit"] = true;
$tdataLU_Module_Status[".view"] = true;

$tdataLU_Module_Status[".exportTo"] = true;

$tdataLU_Module_Status[".printFriendly"] = true;

$tdataLU_Module_Status[".delete"] = true;

$tdataLU_Module_Status[".showSimpleSearchOptions"] = false;

$tdataLU_Module_Status[".showSearchPanel"] = true;


$tdataLU_Module_Status[".isUseAjaxSuggest"] = true;

$tdataLU_Module_Status[".rowHighlite"] = true;


// button handlers file names

$tdataLU_Module_Status[".addPageEvents"] = false;

$tdataLU_Module_Status[".arrKeyFields"][] = "Code";

// use datepicker for search panel
$tdataLU_Module_Status[".isUseCalendarForSearch"] = false;

// use timepicker for search panel
$tdataLU_Module_Status[".isUseTimeForSearch"] = false;

$tdataLU_Module_Status[".isUseiBox"] = false;


	

	

$tdataLU_Module_Status[".useDetailsPreview"] = true;	

$tdataLU_Module_Status[".isUseInlineAdd"] = true;

$tdataLU_Module_Status[".isUseInlineEdit"] = true;
$tdataLU_Module_Status[".isUseInlineJs"] = $tdataLU_Module_Status[".isUseInlineAdd"] || $tdataLU_Module_Status[".isUseInlineEdit"];

$tdataLU_Module_Status[".allSearchFields"] = array();

$tdataLU_Module_Status[".globSearchFields"][] = "Code";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Code", $tdataLU_Module_Status[".allSearchFields"]))
{
	$tdataLU_Module_Status[".allSearchFields"][] = "Code";	
}
$tdataLU_Module_Status[".globSearchFields"][] = "Status";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Status", $tdataLU_Module_Status[".allSearchFields"]))
{
	$tdataLU_Module_Status[".allSearchFields"][] = "Status";	
}


$tdataLU_Module_Status[".googleLikeFields"][] = "Code";
$tdataLU_Module_Status[".googleLikeFields"][] = "Status";



$tdataLU_Module_Status[".advSearchFields"][] = "Code";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Code", $tdataLU_Module_Status[".allSearchFields"])) 
{
	$tdataLU_Module_Status[".allSearchFields"][] = "Code";	
}
$tdataLU_Module_Status[".advSearchFields"][] = "Status";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Status", $tdataLU_Module_Status[".allSearchFields"])) 
{
	$tdataLU_Module_Status[".allSearchFields"][] = "Status";	
}

$tdataLU_Module_Status[".isTableType"] = "list";


	



// Access doesn't support subqueries from the same table as main
$tdataLU_Module_Status[".subQueriesSupAccess"] = true;

	



$tdataLU_Module_Status[".pageSize"] = 20;

$gstrOrderBy = "";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy = "order by ".$gstrOrderBy;
$tdataLU_Module_Status[".strOrderBy"] = $gstrOrderBy;
	
$tdataLU_Module_Status[".orderindexes"] = array();

$tdataLU_Module_Status[".sqlHead"] = "SELECT Code,   Status";
$tdataLU_Module_Status[".sqlFrom"] = "FROM dbo.[LU_Module Status]";
$tdataLU_Module_Status[".sqlWhereExpr"] = "";
$tdataLU_Module_Status[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataLU_Module_Status[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataLU_Module_Status[".arrGroupsPerPage"] = $arrGPP;

	$tableKeys = array();
	$tableKeys[] = "Code";
	$tdataLU_Module_Status[".Keys"] = $tableKeys;

//	Code
	$fdata = array();
	$fdata["strName"] = "Code";
	$fdata["ownerTable"] = "dbo.LU_Module Status";
	$fdata["Label"]=GetFieldLabel("dbo_LU_Module_Status","Code"); 
	
		
		
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
	
		
				
		
		
		
			$tdataLU_Module_Status["Code"]=$fdata;
//	Status
	$fdata = array();
	$fdata["strName"] = "Status";
	$fdata["ownerTable"] = "dbo.LU_Module Status";
	$fdata["Label"]=GetFieldLabel("dbo_LU_Module_Status","Status"); 
	
		
		
	$fdata["FieldType"]= 202;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "Status";
	
		$fdata["FullName"]= "Status";
	
		
		
		
		
		
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
	
		
				
		
		
		
			$tdataLU_Module_Status["Status"]=$fdata;


	
$tables_data["dbo.LU_Module Status"]=&$tdataLU_Module_Status;
$field_labels["dbo_LU_Module_Status"] = &$fieldLabelsLU_Module_Status;
$fieldToolTips["dbo.LU_Module Status"] = &$fieldToolTipsLU_Module_Status;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dbo.LU_Module Status"] = array();
$dIndex = 1-1;
			$strOriginalDetailsTable="dbo.Module";
	$detailsTablesData["dbo.LU_Module Status"][$dIndex] = array(
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
		$detailsTablesData["dbo.LU_Module Status"][$dIndex]["masterKeys"][]="Code";
		$detailsTablesData["dbo.LU_Module Status"][$dIndex]["detailKeys"][]="Module Status";


	
// tables which are master tables for current table (detail)
$masterTablesData["dbo.LU_Module Status"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_LU_Module_Status()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Code,   Status";
$proto0["m_strFrom"] = "FROM dbo.[LU_Module Status]";
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
	"m_strTable" => "dbo.LU_Module Status"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "dbo.LU_Module Status"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "dbo.LU_Module Status";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "Code";
$proto10["m_columns"][] = "Status";
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
$queryData_LU_Module_Status = createSqlQuery_LU_Module_Status();
$tdataLU_Module_Status[".sqlquery"] = $queryData_LU_Module_Status;



$tableEvents["dbo.LU_Module Status"] = new eventsBase;
$tdataLU_Module_Status[".hasEvents"] = false;

?>
