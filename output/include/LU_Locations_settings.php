<?php
$tdataLU_Locations=array();
	$tdataLU_Locations[".NumberOfChars"]=80; 
	$tdataLU_Locations[".ShortName"]="LU_Locations";
	$tdataLU_Locations[".OwnerID"]="";
	$tdataLU_Locations[".OriginalTable"]="dbo.LU_Locations";


	
//	field labels
$fieldLabelsLU_Locations = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsLU_Locations["English"]=array();
	$fieldToolTipsLU_Locations["English"]=array();
	$fieldLabelsLU_Locations["English"]["Code"] = "Code";
	$fieldToolTipsLU_Locations["English"]["Code"] = "";
	$fieldLabelsLU_Locations["English"]["Location"] = "Location";
	$fieldToolTipsLU_Locations["English"]["Location"] = "";
	if (count($fieldToolTipsLU_Locations["English"])){
		$tdataLU_Locations[".isUseToolTips"]=true;
	}
}
if(mlang_getcurrentlang()=="Urdu")
{
	$fieldLabelsLU_Locations["Urdu"]=array();
	$fieldToolTipsLU_Locations["Urdu"]=array();
	$fieldLabelsLU_Locations["Urdu"]["Code"] = "Code";
	$fieldToolTipsLU_Locations["Urdu"]["Code"] = "";
	$fieldLabelsLU_Locations["Urdu"]["Location"] = "Location";
	$fieldToolTipsLU_Locations["Urdu"]["Location"] = "";
	if (count($fieldToolTipsLU_Locations["Urdu"])){
		$tdataLU_Locations[".isUseToolTips"]=true;
	}
}


	
	$tdataLU_Locations[".NCSearch"]=true;

	

$tdataLU_Locations[".shortTableName"] = "LU_Locations";
$tdataLU_Locations[".nSecOptions"] = 0;
$tdataLU_Locations[".recsPerRowList"] = 1;	
$tdataLU_Locations[".tableGroupBy"] = "0";
$tdataLU_Locations[".mainTableOwnerID"] = "";
$tdataLU_Locations[".moveNext"] = 1;




$tdataLU_Locations[".showAddInPopup"] = false;

$tdataLU_Locations[".showEditInPopup"] = false;

$tdataLU_Locations[".showViewInPopup"] = false;


$tdataLU_Locations[".fieldsForRegister"] = array();

$tdataLU_Locations[".listAjax"] = false;

	$tdataLU_Locations[".audit"] = false;

	$tdataLU_Locations[".locking"] = false;
	
$tdataLU_Locations[".listIcons"] = true;
$tdataLU_Locations[".edit"] = true;
$tdataLU_Locations[".inlineEdit"] = true;
$tdataLU_Locations[".view"] = true;

$tdataLU_Locations[".exportTo"] = true;

$tdataLU_Locations[".printFriendly"] = true;

$tdataLU_Locations[".delete"] = true;

$tdataLU_Locations[".showSimpleSearchOptions"] = false;

$tdataLU_Locations[".showSearchPanel"] = true;


$tdataLU_Locations[".isUseAjaxSuggest"] = true;

$tdataLU_Locations[".rowHighlite"] = true;


// button handlers file names

$tdataLU_Locations[".addPageEvents"] = false;

$tdataLU_Locations[".arrKeyFields"][] = "Code";

// use datepicker for search panel
$tdataLU_Locations[".isUseCalendarForSearch"] = false;

// use timepicker for search panel
$tdataLU_Locations[".isUseTimeForSearch"] = false;

$tdataLU_Locations[".isUseiBox"] = false;


	

	

$tdataLU_Locations[".useDetailsPreview"] = true;	

$tdataLU_Locations[".isUseInlineAdd"] = true;

$tdataLU_Locations[".isUseInlineEdit"] = true;
$tdataLU_Locations[".isUseInlineJs"] = $tdataLU_Locations[".isUseInlineAdd"] || $tdataLU_Locations[".isUseInlineEdit"];

$tdataLU_Locations[".allSearchFields"] = array();

$tdataLU_Locations[".globSearchFields"][] = "Code";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Code", $tdataLU_Locations[".allSearchFields"]))
{
	$tdataLU_Locations[".allSearchFields"][] = "Code";	
}
$tdataLU_Locations[".globSearchFields"][] = "Location";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Location", $tdataLU_Locations[".allSearchFields"]))
{
	$tdataLU_Locations[".allSearchFields"][] = "Location";	
}


$tdataLU_Locations[".googleLikeFields"][] = "Code";
$tdataLU_Locations[".googleLikeFields"][] = "Location";



$tdataLU_Locations[".advSearchFields"][] = "Code";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Code", $tdataLU_Locations[".allSearchFields"])) 
{
	$tdataLU_Locations[".allSearchFields"][] = "Code";	
}
$tdataLU_Locations[".advSearchFields"][] = "Location";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Location", $tdataLU_Locations[".allSearchFields"])) 
{
	$tdataLU_Locations[".allSearchFields"][] = "Location";	
}

$tdataLU_Locations[".isTableType"] = "list";


	



// Access doesn't support subqueries from the same table as main
$tdataLU_Locations[".subQueriesSupAccess"] = true;

	



$tdataLU_Locations[".pageSize"] = 20;

$gstrOrderBy = "";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy = "order by ".$gstrOrderBy;
$tdataLU_Locations[".strOrderBy"] = $gstrOrderBy;
	
$tdataLU_Locations[".orderindexes"] = array();

$tdataLU_Locations[".sqlHead"] = "SELECT Code,   Location";
$tdataLU_Locations[".sqlFrom"] = "FROM dbo.LU_Locations";
$tdataLU_Locations[".sqlWhereExpr"] = "";
$tdataLU_Locations[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataLU_Locations[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataLU_Locations[".arrGroupsPerPage"] = $arrGPP;

	$tableKeys = array();
	$tableKeys[] = "Code";
	$tdataLU_Locations[".Keys"] = $tableKeys;

//	Code
	$fdata = array();
	$fdata["strName"] = "Code";
	$fdata["ownerTable"] = "dbo.LU_Locations";
	$fdata["Label"]=GetFieldLabel("dbo_LU_Locations","Code"); 
	
		
		
	$fdata["FieldType"]= 3;
	
		
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
	
		
				
		
		
		
			$tdataLU_Locations["Code"]=$fdata;
//	Location
	$fdata = array();
	$fdata["strName"] = "Location";
	$fdata["ownerTable"] = "dbo.LU_Locations";
	$fdata["Label"]=GetFieldLabel("dbo_LU_Locations","Location"); 
	
		
		
	$fdata["FieldType"]= 202;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "Location";
	
		$fdata["FullName"]= "Location";
	
		
		
		
		
		
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
	
		
				
		
		
		
			$tdataLU_Locations["Location"]=$fdata;


	
$tables_data["dbo.LU_Locations"]=&$tdataLU_Locations;
$field_labels["dbo_LU_Locations"] = &$fieldLabelsLU_Locations;
$fieldToolTips["dbo.LU_Locations"] = &$fieldToolTipsLU_Locations;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dbo.LU_Locations"] = array();
$dIndex = 1-1;
			$strOriginalDetailsTable="dbo.Customers";
	$detailsTablesData["dbo.LU_Locations"][$dIndex] = array(
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
		$detailsTablesData["dbo.LU_Locations"][$dIndex]["masterKeys"][]="Code";
		$detailsTablesData["dbo.LU_Locations"][$dIndex]["detailKeys"][]="Location";


	
// tables which are master tables for current table (detail)
$masterTablesData["dbo.LU_Locations"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_LU_Locations()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Code,   Location";
$proto0["m_strFrom"] = "FROM dbo.LU_Locations";
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
	"m_strTable" => "dbo.LU_Locations"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Location",
	"m_strTable" => "dbo.LU_Locations"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "dbo.LU_Locations";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "Code";
$proto10["m_columns"][] = "Location";
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
$queryData_LU_Locations = createSqlQuery_LU_Locations();
$tdataLU_Locations[".sqlquery"] = $queryData_LU_Locations;



$tableEvents["dbo.LU_Locations"] = new eventsBase;
$tdataLU_Locations[".hasEvents"] = false;

?>
