<?php
$tdataLU_Customer_Type=array();
	$tdataLU_Customer_Type[".NumberOfChars"]=80; 
	$tdataLU_Customer_Type[".ShortName"]="LU_Customer_Type";
	$tdataLU_Customer_Type[".OwnerID"]="";
	$tdataLU_Customer_Type[".OriginalTable"]="dbo.LU_Customer Type";


	
//	field labels
$fieldLabelsLU_Customer_Type = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsLU_Customer_Type["English"]=array();
	$fieldToolTipsLU_Customer_Type["English"]=array();
	$fieldLabelsLU_Customer_Type["English"]["Code"] = "Code";
	$fieldToolTipsLU_Customer_Type["English"]["Code"] = "";
	$fieldLabelsLU_Customer_Type["English"]["Type"] = "Type";
	$fieldToolTipsLU_Customer_Type["English"]["Type"] = "";
	if (count($fieldToolTipsLU_Customer_Type["English"])){
		$tdataLU_Customer_Type[".isUseToolTips"]=true;
	}
}
if(mlang_getcurrentlang()=="Urdu")
{
	$fieldLabelsLU_Customer_Type["Urdu"]=array();
	$fieldToolTipsLU_Customer_Type["Urdu"]=array();
	$fieldLabelsLU_Customer_Type["Urdu"]["Code"] = "Code";
	$fieldToolTipsLU_Customer_Type["Urdu"]["Code"] = "";
	$fieldLabelsLU_Customer_Type["Urdu"]["Type"] = "Type";
	$fieldToolTipsLU_Customer_Type["Urdu"]["Type"] = "";
	if (count($fieldToolTipsLU_Customer_Type["Urdu"])){
		$tdataLU_Customer_Type[".isUseToolTips"]=true;
	}
}


	
	$tdataLU_Customer_Type[".NCSearch"]=true;

	

$tdataLU_Customer_Type[".shortTableName"] = "LU_Customer_Type";
$tdataLU_Customer_Type[".nSecOptions"] = 0;
$tdataLU_Customer_Type[".recsPerRowList"] = 1;	
$tdataLU_Customer_Type[".tableGroupBy"] = "0";
$tdataLU_Customer_Type[".mainTableOwnerID"] = "";
$tdataLU_Customer_Type[".moveNext"] = 1;




$tdataLU_Customer_Type[".showAddInPopup"] = false;

$tdataLU_Customer_Type[".showEditInPopup"] = false;

$tdataLU_Customer_Type[".showViewInPopup"] = false;


$tdataLU_Customer_Type[".fieldsForRegister"] = array();

$tdataLU_Customer_Type[".listAjax"] = false;

	$tdataLU_Customer_Type[".audit"] = false;

	$tdataLU_Customer_Type[".locking"] = false;
	
$tdataLU_Customer_Type[".listIcons"] = true;
$tdataLU_Customer_Type[".edit"] = true;
$tdataLU_Customer_Type[".inlineEdit"] = true;
$tdataLU_Customer_Type[".view"] = true;

$tdataLU_Customer_Type[".exportTo"] = true;

$tdataLU_Customer_Type[".printFriendly"] = true;

$tdataLU_Customer_Type[".delete"] = true;

$tdataLU_Customer_Type[".showSimpleSearchOptions"] = false;

$tdataLU_Customer_Type[".showSearchPanel"] = true;


$tdataLU_Customer_Type[".isUseAjaxSuggest"] = true;

$tdataLU_Customer_Type[".rowHighlite"] = true;


// button handlers file names

$tdataLU_Customer_Type[".addPageEvents"] = false;

$tdataLU_Customer_Type[".arrKeyFields"][] = "Code";

// use datepicker for search panel
$tdataLU_Customer_Type[".isUseCalendarForSearch"] = false;

// use timepicker for search panel
$tdataLU_Customer_Type[".isUseTimeForSearch"] = false;

$tdataLU_Customer_Type[".isUseiBox"] = false;


	

	

$tdataLU_Customer_Type[".useDetailsPreview"] = true;	

$tdataLU_Customer_Type[".isUseInlineAdd"] = true;

$tdataLU_Customer_Type[".isUseInlineEdit"] = true;
$tdataLU_Customer_Type[".isUseInlineJs"] = $tdataLU_Customer_Type[".isUseInlineAdd"] || $tdataLU_Customer_Type[".isUseInlineEdit"];

$tdataLU_Customer_Type[".allSearchFields"] = array();

$tdataLU_Customer_Type[".globSearchFields"][] = "Code";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Code", $tdataLU_Customer_Type[".allSearchFields"]))
{
	$tdataLU_Customer_Type[".allSearchFields"][] = "Code";	
}
$tdataLU_Customer_Type[".globSearchFields"][] = "Type";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Type", $tdataLU_Customer_Type[".allSearchFields"]))
{
	$tdataLU_Customer_Type[".allSearchFields"][] = "Type";	
}


$tdataLU_Customer_Type[".googleLikeFields"][] = "Code";
$tdataLU_Customer_Type[".googleLikeFields"][] = "Type";



$tdataLU_Customer_Type[".advSearchFields"][] = "Code";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Code", $tdataLU_Customer_Type[".allSearchFields"])) 
{
	$tdataLU_Customer_Type[".allSearchFields"][] = "Code";	
}
$tdataLU_Customer_Type[".advSearchFields"][] = "Type";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Type", $tdataLU_Customer_Type[".allSearchFields"])) 
{
	$tdataLU_Customer_Type[".allSearchFields"][] = "Type";	
}

$tdataLU_Customer_Type[".isTableType"] = "list";


	



// Access doesn't support subqueries from the same table as main
$tdataLU_Customer_Type[".subQueriesSupAccess"] = true;

	



$tdataLU_Customer_Type[".pageSize"] = 20;

$gstrOrderBy = "";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy = "order by ".$gstrOrderBy;
$tdataLU_Customer_Type[".strOrderBy"] = $gstrOrderBy;
	
$tdataLU_Customer_Type[".orderindexes"] = array();

$tdataLU_Customer_Type[".sqlHead"] = "SELECT Code,   [Type]";
$tdataLU_Customer_Type[".sqlFrom"] = "FROM dbo.[LU_Customer Type]";
$tdataLU_Customer_Type[".sqlWhereExpr"] = "";
$tdataLU_Customer_Type[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataLU_Customer_Type[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataLU_Customer_Type[".arrGroupsPerPage"] = $arrGPP;

	$tableKeys = array();
	$tableKeys[] = "Code";
	$tdataLU_Customer_Type[".Keys"] = $tableKeys;

//	Code
	$fdata = array();
	$fdata["strName"] = "Code";
	$fdata["ownerTable"] = "dbo.LU_Customer Type";
	$fdata["Label"]=GetFieldLabel("dbo_LU_Customer_Type","Code"); 
	
		
		
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
	
		
				
		
		
		
			$tdataLU_Customer_Type["Code"]=$fdata;
//	Type
	$fdata = array();
	$fdata["strName"] = "Type";
	$fdata["ownerTable"] = "dbo.LU_Customer Type";
	$fdata["Label"]=GetFieldLabel("dbo_LU_Customer_Type","Type"); 
	
		
		
	$fdata["FieldType"]= 202;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "Type";
	
		$fdata["FullName"]= "[Type]";
	
		
		
		
		
		
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
	
		
				
		
		
		
			$tdataLU_Customer_Type["Type"]=$fdata;


	
$tables_data["dbo.LU_Customer Type"]=&$tdataLU_Customer_Type;
$field_labels["dbo_LU_Customer_Type"] = &$fieldLabelsLU_Customer_Type;
$fieldToolTips["dbo.LU_Customer Type"] = &$fieldToolTipsLU_Customer_Type;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dbo.LU_Customer Type"] = array();
$dIndex = 1-1;
			$strOriginalDetailsTable="dbo.Customers";
	$detailsTablesData["dbo.LU_Customer Type"][$dIndex] = array(
		  "dDataSourceTable"=>"dbo.Customers"
		, "dOriginalTable"=>$strOriginalDetailsTable
		, "dShortTable"=>"Customers"
		, "masterKeys"=>array()
		, "detailKeys"=>array()
		, "dispChildCount"=> "1"
		, "hideChild"=>"0"
		, "sqlHead"=>"SELECT ID,   Name,   [Father Name],   Address,   Contact,   Location,   [Customer Type]"	
		, "sqlFrom"=>"FROM dbo.Customers"	
		, "sqlWhere"=>""
		, "sqlTail"=>""
		, "groupBy"=>"0"
		, "previewOnList" => 1
		, "previewOnAdd" => 0
		, "previewOnEdit" => 0
		, "previewOnView" => 0
	);	
		$detailsTablesData["dbo.LU_Customer Type"][$dIndex]["masterKeys"][]="Code";
		$detailsTablesData["dbo.LU_Customer Type"][$dIndex]["detailKeys"][]="Customer Type";


	
// tables which are master tables for current table (detail)
$masterTablesData["dbo.LU_Customer Type"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_LU_Customer_Type()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Code,   [Type]";
$proto0["m_strFrom"] = "FROM dbo.[LU_Customer Type]";
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
	"m_strTable" => "dbo.LU_Customer Type"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Type",
	"m_strTable" => "dbo.LU_Customer Type"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "dbo.LU_Customer Type";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "Code";
$proto10["m_columns"][] = "Type";
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
$queryData_LU_Customer_Type = createSqlQuery_LU_Customer_Type();
$tdataLU_Customer_Type[".sqlquery"] = $queryData_LU_Customer_Type;



$tableEvents["dbo.LU_Customer Type"] = new eventsBase;
$tdataLU_Customer_Type[".hasEvents"] = false;

?>
