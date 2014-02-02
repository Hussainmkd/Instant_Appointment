<?php
$tdataActions=array();
	$tdataActions[".NumberOfChars"]=80; 
	$tdataActions[".ShortName"]="Actions";
	$tdataActions[".OwnerID"]="";
	$tdataActions[".OriginalTable"]="dbo.Actions";


	
//	field labels
$fieldLabelsActions = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsActions["English"]=array();
	$fieldToolTipsActions["English"]=array();
	$fieldLabelsActions["English"]["Code"] = "Code";
	$fieldToolTipsActions["English"]["Code"] = "";
	$fieldLabelsActions["English"]["Action"] = "Action";
	$fieldToolTipsActions["English"]["Action"] = "";
	if (count($fieldToolTipsActions["English"])){
		$tdataActions[".isUseToolTips"]=true;
	}
}
if(mlang_getcurrentlang()=="Urdu")
{
	$fieldLabelsActions["Urdu"]=array();
	$fieldToolTipsActions["Urdu"]=array();
	$fieldLabelsActions["Urdu"]["Code"] = "Code";
	$fieldToolTipsActions["Urdu"]["Code"] = "";
	$fieldLabelsActions["Urdu"]["Action"] = "Action";
	$fieldToolTipsActions["Urdu"]["Action"] = "";
	if (count($fieldToolTipsActions["Urdu"])){
		$tdataActions[".isUseToolTips"]=true;
	}
}


	
	$tdataActions[".NCSearch"]=true;

	

$tdataActions[".shortTableName"] = "Actions";
$tdataActions[".nSecOptions"] = 0;
$tdataActions[".recsPerRowList"] = 1;	
$tdataActions[".tableGroupBy"] = "0";
$tdataActions[".mainTableOwnerID"] = "";
$tdataActions[".moveNext"] = 1;




$tdataActions[".showAddInPopup"] = false;

$tdataActions[".showEditInPopup"] = false;

$tdataActions[".showViewInPopup"] = false;


$tdataActions[".fieldsForRegister"] = array();

$tdataActions[".listAjax"] = false;

	$tdataActions[".audit"] = false;

	$tdataActions[".locking"] = false;
	
$tdataActions[".listIcons"] = true;
$tdataActions[".edit"] = true;
$tdataActions[".inlineEdit"] = true;
$tdataActions[".view"] = true;

$tdataActions[".exportTo"] = true;

$tdataActions[".printFriendly"] = true;

$tdataActions[".delete"] = true;

$tdataActions[".showSimpleSearchOptions"] = false;

$tdataActions[".showSearchPanel"] = true;


$tdataActions[".isUseAjaxSuggest"] = true;

$tdataActions[".rowHighlite"] = true;


// button handlers file names

$tdataActions[".addPageEvents"] = false;

$tdataActions[".arrKeyFields"][] = "Code";

// use datepicker for search panel
$tdataActions[".isUseCalendarForSearch"] = false;

// use timepicker for search panel
$tdataActions[".isUseTimeForSearch"] = false;

$tdataActions[".isUseiBox"] = false;


	

	

$tdataActions[".useDetailsPreview"] = true;	

$tdataActions[".isUseInlineAdd"] = true;

$tdataActions[".isUseInlineEdit"] = true;
$tdataActions[".isUseInlineJs"] = $tdataActions[".isUseInlineAdd"] || $tdataActions[".isUseInlineEdit"];

$tdataActions[".allSearchFields"] = array();

$tdataActions[".globSearchFields"][] = "Code";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Code", $tdataActions[".allSearchFields"]))
{
	$tdataActions[".allSearchFields"][] = "Code";	
}
$tdataActions[".globSearchFields"][] = "Action";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Action", $tdataActions[".allSearchFields"]))
{
	$tdataActions[".allSearchFields"][] = "Action";	
}


$tdataActions[".googleLikeFields"][] = "Code";
$tdataActions[".googleLikeFields"][] = "Action";



$tdataActions[".advSearchFields"][] = "Code";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Code", $tdataActions[".allSearchFields"])) 
{
	$tdataActions[".allSearchFields"][] = "Code";	
}
$tdataActions[".advSearchFields"][] = "Action";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Action", $tdataActions[".allSearchFields"])) 
{
	$tdataActions[".allSearchFields"][] = "Action";	
}

$tdataActions[".isTableType"] = "list";


	



// Access doesn't support subqueries from the same table as main
$tdataActions[".subQueriesSupAccess"] = true;

	



$tdataActions[".pageSize"] = 20;

$gstrOrderBy = "";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy = "order by ".$gstrOrderBy;
$tdataActions[".strOrderBy"] = $gstrOrderBy;
	
$tdataActions[".orderindexes"] = array();

$tdataActions[".sqlHead"] = "SELECT Code,   [Action]";
$tdataActions[".sqlFrom"] = "FROM dbo.Actions";
$tdataActions[".sqlWhereExpr"] = "";
$tdataActions[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataActions[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataActions[".arrGroupsPerPage"] = $arrGPP;

	$tableKeys = array();
	$tableKeys[] = "Code";
	$tdataActions[".Keys"] = $tableKeys;

//	Code
	$fdata = array();
	$fdata["strName"] = "Code";
	$fdata["ownerTable"] = "dbo.Actions";
	$fdata["Label"]=GetFieldLabel("dbo_Actions","Code"); 
	
		
		
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
	
		
				
		
		
		
			$tdataActions["Code"]=$fdata;
//	Action
	$fdata = array();
	$fdata["strName"] = "Action";
	$fdata["ownerTable"] = "dbo.Actions";
	$fdata["Label"]=GetFieldLabel("dbo_Actions","Action"); 
	
		
		
	$fdata["FieldType"]= 202;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "Action";
	
		$fdata["FullName"]= "[Action]";
	
		
		
		
		
		
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
	
		
				
		
		
		
			$tdataActions["Action"]=$fdata;


	
$tables_data["dbo.Actions"]=&$tdataActions;
$field_labels["dbo_Actions"] = &$fieldLabelsActions;
$fieldToolTips["dbo.Actions"] = &$fieldToolTipsActions;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dbo.Actions"] = array();
$dIndex = 1-1;
			$strOriginalDetailsTable="dbo.Anomalies";
	$detailsTablesData["dbo.Actions"][$dIndex] = array(
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
		$detailsTablesData["dbo.Actions"][$dIndex]["masterKeys"][]="Code";
		$detailsTablesData["dbo.Actions"][$dIndex]["detailKeys"][]="Action Taken";


	
// tables which are master tables for current table (detail)
$masterTablesData["dbo.Actions"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Actions()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Code,   [Action]";
$proto0["m_strFrom"] = "FROM dbo.Actions";
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
	"m_strTable" => "dbo.Actions"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Action",
	"m_strTable" => "dbo.Actions"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "dbo.Actions";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "Code";
$proto10["m_columns"][] = "Action";
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
$queryData_Actions = createSqlQuery_Actions();
$tdataActions[".sqlquery"] = $queryData_Actions;



$tableEvents["dbo.Actions"] = new eventsBase;
$tdataActions[".hasEvents"] = false;

?>
