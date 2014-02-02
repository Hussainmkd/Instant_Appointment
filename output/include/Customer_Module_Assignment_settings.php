<?php
$tdataCustomer_Module_Assignment=array();
	$tdataCustomer_Module_Assignment[".NumberOfChars"]=80; 
	$tdataCustomer_Module_Assignment[".ShortName"]="Customer_Module_Assignment";
	$tdataCustomer_Module_Assignment[".OwnerID"]="";
	$tdataCustomer_Module_Assignment[".OriginalTable"]="dbo.Customer Module Assignment";


	
//	field labels
$fieldLabelsCustomer_Module_Assignment = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsCustomer_Module_Assignment["English"]=array();
	$fieldToolTipsCustomer_Module_Assignment["English"]=array();
	$fieldLabelsCustomer_Module_Assignment["English"]["ID"] = "ID";
	$fieldToolTipsCustomer_Module_Assignment["English"]["ID"] = "";
	$fieldLabelsCustomer_Module_Assignment["English"]["Customer_ID"] = "Customer ID";
	$fieldToolTipsCustomer_Module_Assignment["English"]["Customer ID"] = "";
	$fieldLabelsCustomer_Module_Assignment["English"]["Module_ID"] = "Module ID";
	$fieldToolTipsCustomer_Module_Assignment["English"]["Module ID"] = "";
	if (count($fieldToolTipsCustomer_Module_Assignment["English"])){
		$tdataCustomer_Module_Assignment[".isUseToolTips"]=true;
	}
}
if(mlang_getcurrentlang()=="Urdu")
{
	$fieldLabelsCustomer_Module_Assignment["Urdu"]=array();
	$fieldToolTipsCustomer_Module_Assignment["Urdu"]=array();
	$fieldLabelsCustomer_Module_Assignment["Urdu"]["ID"] = "ID";
	$fieldToolTipsCustomer_Module_Assignment["Urdu"]["ID"] = "";
	$fieldLabelsCustomer_Module_Assignment["Urdu"]["Customer_ID"] = "Customer ID";
	$fieldToolTipsCustomer_Module_Assignment["Urdu"]["Customer ID"] = "";
	$fieldLabelsCustomer_Module_Assignment["Urdu"]["Module_ID"] = "Module ID";
	$fieldToolTipsCustomer_Module_Assignment["Urdu"]["Module ID"] = "";
	if (count($fieldToolTipsCustomer_Module_Assignment["Urdu"])){
		$tdataCustomer_Module_Assignment[".isUseToolTips"]=true;
	}
}


	
	$tdataCustomer_Module_Assignment[".NCSearch"]=true;

	

$tdataCustomer_Module_Assignment[".shortTableName"] = "Customer_Module_Assignment";
$tdataCustomer_Module_Assignment[".nSecOptions"] = 0;
$tdataCustomer_Module_Assignment[".recsPerRowList"] = 1;	
$tdataCustomer_Module_Assignment[".tableGroupBy"] = "0";
$tdataCustomer_Module_Assignment[".mainTableOwnerID"] = "";
$tdataCustomer_Module_Assignment[".moveNext"] = 1;




$tdataCustomer_Module_Assignment[".showAddInPopup"] = false;

$tdataCustomer_Module_Assignment[".showEditInPopup"] = false;

$tdataCustomer_Module_Assignment[".showViewInPopup"] = false;


$tdataCustomer_Module_Assignment[".fieldsForRegister"] = array();

$tdataCustomer_Module_Assignment[".listAjax"] = false;

	$tdataCustomer_Module_Assignment[".audit"] = false;

	$tdataCustomer_Module_Assignment[".locking"] = false;
	
$tdataCustomer_Module_Assignment[".listIcons"] = true;
$tdataCustomer_Module_Assignment[".edit"] = true;
$tdataCustomer_Module_Assignment[".inlineEdit"] = true;
$tdataCustomer_Module_Assignment[".view"] = true;

$tdataCustomer_Module_Assignment[".exportTo"] = true;

$tdataCustomer_Module_Assignment[".printFriendly"] = true;

$tdataCustomer_Module_Assignment[".delete"] = true;

$tdataCustomer_Module_Assignment[".showSimpleSearchOptions"] = false;

$tdataCustomer_Module_Assignment[".showSearchPanel"] = true;


$tdataCustomer_Module_Assignment[".isUseAjaxSuggest"] = true;

$tdataCustomer_Module_Assignment[".rowHighlite"] = true;


// button handlers file names

$tdataCustomer_Module_Assignment[".addPageEvents"] = false;

$tdataCustomer_Module_Assignment[".arrKeyFields"][] = "ID";

// use datepicker for search panel
$tdataCustomer_Module_Assignment[".isUseCalendarForSearch"] = false;

// use timepicker for search panel
$tdataCustomer_Module_Assignment[".isUseTimeForSearch"] = false;

$tdataCustomer_Module_Assignment[".isUseiBox"] = false;


	

	


$tdataCustomer_Module_Assignment[".isUseInlineAdd"] = true;

$tdataCustomer_Module_Assignment[".isUseInlineEdit"] = true;
$tdataCustomer_Module_Assignment[".isUseInlineJs"] = $tdataCustomer_Module_Assignment[".isUseInlineAdd"] || $tdataCustomer_Module_Assignment[".isUseInlineEdit"];

$tdataCustomer_Module_Assignment[".allSearchFields"] = array();

$tdataCustomer_Module_Assignment[".globSearchFields"][] = "ID";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("ID", $tdataCustomer_Module_Assignment[".allSearchFields"]))
{
	$tdataCustomer_Module_Assignment[".allSearchFields"][] = "ID";	
}
$tdataCustomer_Module_Assignment[".globSearchFields"][] = "Customer ID";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Customer ID", $tdataCustomer_Module_Assignment[".allSearchFields"]))
{
	$tdataCustomer_Module_Assignment[".allSearchFields"][] = "Customer ID";	
}
$tdataCustomer_Module_Assignment[".globSearchFields"][] = "Module ID";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Module ID", $tdataCustomer_Module_Assignment[".allSearchFields"]))
{
	$tdataCustomer_Module_Assignment[".allSearchFields"][] = "Module ID";	
}


$tdataCustomer_Module_Assignment[".googleLikeFields"][] = "ID";
$tdataCustomer_Module_Assignment[".googleLikeFields"][] = "Customer ID";
$tdataCustomer_Module_Assignment[".googleLikeFields"][] = "Module ID";



$tdataCustomer_Module_Assignment[".advSearchFields"][] = "ID";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("ID", $tdataCustomer_Module_Assignment[".allSearchFields"])) 
{
	$tdataCustomer_Module_Assignment[".allSearchFields"][] = "ID";	
}
$tdataCustomer_Module_Assignment[".advSearchFields"][] = "Customer ID";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Customer ID", $tdataCustomer_Module_Assignment[".allSearchFields"])) 
{
	$tdataCustomer_Module_Assignment[".allSearchFields"][] = "Customer ID";	
}
$tdataCustomer_Module_Assignment[".advSearchFields"][] = "Module ID";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Module ID", $tdataCustomer_Module_Assignment[".allSearchFields"])) 
{
	$tdataCustomer_Module_Assignment[".allSearchFields"][] = "Module ID";	
}

$tdataCustomer_Module_Assignment[".isTableType"] = "list";


	



// Access doesn't support subqueries from the same table as main
$tdataCustomer_Module_Assignment[".subQueriesSupAccess"] = true;





$tdataCustomer_Module_Assignment[".pageSize"] = 20;

$gstrOrderBy = "";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy = "order by ".$gstrOrderBy;
$tdataCustomer_Module_Assignment[".strOrderBy"] = $gstrOrderBy;
	
$tdataCustomer_Module_Assignment[".orderindexes"] = array();

$tdataCustomer_Module_Assignment[".sqlHead"] = "SELECT ID,   [Customer ID],   [Module ID]";
$tdataCustomer_Module_Assignment[".sqlFrom"] = "FROM dbo.[Customer Module Assignment]";
$tdataCustomer_Module_Assignment[".sqlWhereExpr"] = "";
$tdataCustomer_Module_Assignment[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataCustomer_Module_Assignment[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataCustomer_Module_Assignment[".arrGroupsPerPage"] = $arrGPP;

	$tableKeys = array();
	$tableKeys[] = "ID";
	$tdataCustomer_Module_Assignment[".Keys"] = $tableKeys;

//	ID
	$fdata = array();
	$fdata["strName"] = "ID";
	$fdata["ownerTable"] = "dbo.Customer Module Assignment";
	$fdata["Label"]=GetFieldLabel("dbo_Customer_Module_Assignment","ID"); 
	
		
		
	$fdata["FieldType"]= 3;
	
		$fdata["AutoInc"]=true;
	
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "ID";
	
		$fdata["FullName"]= "ID";
	
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
	
		
				
		
		
		
			$tdataCustomer_Module_Assignment["ID"]=$fdata;
//	Customer ID
	$fdata = array();
	$fdata["strName"] = "Customer ID";
	$fdata["ownerTable"] = "dbo.Customer Module Assignment";
	$fdata["Label"]=GetFieldLabel("dbo_Customer_Module_Assignment","Customer_ID"); 
	
		
		
	$fdata["FieldType"]= 3;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Lookup wizard";
	$fdata["ViewFormat"]= "";
	
		
		$fdata["LookupType"]=1;
	$fdata["pLookupType"] = 1;
	$fdata["freeInput"] = 0;	
	$fdata["autoCompleteFieldsOnEdit"] = 0;
	$fdata["autoCompleteFields"] = array();
										$fdata["LinkField"]="ID";
	$fdata["LinkFieldType"]=3;
	$fdata["DisplayField"]="ID";
				$fdata["LookupTable"]="dbo.Customers";
	$fdata["LookupOrderBy"]="";
																			
					
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "Customer_ID";
	
		$fdata["FullName"]= "[Customer ID]";
	
		$fdata["IsRequired"]=true; 
	
		
		
		
		
				$fdata["Index"]= 2;
				
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
						$fdata["validateAs"]["basicValidate"][] = "IsRequired";
	
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdataCustomer_Module_Assignment["Customer ID"]=$fdata;
//	Module ID
	$fdata = array();
	$fdata["strName"] = "Module ID";
	$fdata["ownerTable"] = "dbo.Customer Module Assignment";
	$fdata["Label"]=GetFieldLabel("dbo_Customer_Module_Assignment","Module_ID"); 
	
		
		
	$fdata["FieldType"]= 3;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Lookup wizard";
	$fdata["ViewFormat"]= "";
	
		
		$fdata["LookupType"]=1;
	$fdata["pLookupType"] = 1;
	$fdata["freeInput"] = 0;	
	$fdata["autoCompleteFieldsOnEdit"] = 0;
	$fdata["autoCompleteFields"] = array();
										$fdata["LinkField"]="ID";
	$fdata["LinkFieldType"]=3;
	$fdata["DisplayField"]="ID";
				$fdata["LookupTable"]="dbo.Module";
	$fdata["LookupOrderBy"]="";
																			
					
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "Module_ID";
	
		$fdata["FullName"]= "[Module ID]";
	
		$fdata["IsRequired"]=true; 
	
		
		
		
		
				$fdata["Index"]= 3;
				
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
						$fdata["validateAs"]["basicValidate"][] = "IsRequired";
	
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdataCustomer_Module_Assignment["Module ID"]=$fdata;


	
$tables_data["dbo.Customer Module Assignment"]=&$tdataCustomer_Module_Assignment;
$field_labels["dbo_Customer_Module_Assignment"] = &$fieldLabelsCustomer_Module_Assignment;
$fieldToolTips["dbo.Customer Module Assignment"] = &$fieldToolTipsCustomer_Module_Assignment;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dbo.Customer Module Assignment"] = array();

	
// tables which are master tables for current table (detail)
$masterTablesData["dbo.Customer Module Assignment"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="dbo.Customers";
	$masterTablesData["dbo.Customer Module Assignment"][$mIndex] = array(
		  "mDataSourceTable"=>"dbo.Customers"
		, "mOriginalTable" => $strOriginalDetailsTable
		, "mShortTable" => "Customers"
		, "masterKeys" => array()
		, "detailKeys" => array()
		, "dispChildCount" => "1"
		, "hideChild" => "0"	
		, "dispInfo" => "1"								
		, "previewOnList" => 1
		, "previewOnAdd" => 0
		, "previewOnEdit" => 0
		, "previewOnView" => 0
	);	
		$masterTablesData["dbo.Customer Module Assignment"][$mIndex]["masterKeys"][]="ID";
		$masterTablesData["dbo.Customer Module Assignment"][$mIndex]["detailKeys"][]="Customer ID";

$mIndex = 2-1;
			$strOriginalDetailsTable="dbo.Module";
	$masterTablesData["dbo.Customer Module Assignment"][$mIndex] = array(
		  "mDataSourceTable"=>"dbo.Module"
		, "mOriginalTable" => $strOriginalDetailsTable
		, "mShortTable" => "Module"
		, "masterKeys" => array()
		, "detailKeys" => array()
		, "dispChildCount" => "1"
		, "hideChild" => "0"	
		, "dispInfo" => "1"								
		, "previewOnList" => 1
		, "previewOnAdd" => 0
		, "previewOnEdit" => 0
		, "previewOnView" => 0
	);	
		$masterTablesData["dbo.Customer Module Assignment"][$mIndex]["masterKeys"][]="ID";
		$masterTablesData["dbo.Customer Module Assignment"][$mIndex]["detailKeys"][]="Module ID";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Customer_Module_Assignment()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,   [Customer ID],   [Module ID]";
$proto0["m_strFrom"] = "FROM dbo.[Customer Module Assignment]";
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
	"m_strName" => "ID",
	"m_strTable" => "dbo.Customer Module Assignment"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Customer ID",
	"m_strTable" => "dbo.Customer Module Assignment"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Module ID",
	"m_strTable" => "dbo.Customer Module Assignment"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "dbo.Customer Module Assignment";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "ID";
$proto12["m_columns"][] = "Customer ID";
$proto12["m_columns"][] = "Module ID";
$obj = new SQLTable($proto12);

$proto11["m_table"] = $obj;
$proto11["m_alias"] = "";
$proto13=array();
$proto13["m_sql"] = "";
$proto13["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto13["m_column"]=$obj;
$proto13["m_contained"] = array();
$proto13["m_strCase"] = "";
$proto13["m_havingmode"] = "0";
$proto13["m_inBrackets"] = "0";
$proto13["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto13);

$proto11["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto11);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

return $obj;
}
$queryData_Customer_Module_Assignment = createSqlQuery_Customer_Module_Assignment();
$tdataCustomer_Module_Assignment[".sqlquery"] = $queryData_Customer_Module_Assignment;



$tableEvents["dbo.Customer Module Assignment"] = new eventsBase;
$tdataCustomer_Module_Assignment[".hasEvents"] = false;

?>
