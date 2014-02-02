<?php
$tdataModule=array();
	$tdataModule[".NumberOfChars"]=80; 
	$tdataModule[".ShortName"]="Module";
	$tdataModule[".OwnerID"]="";
	$tdataModule[".OriginalTable"]="dbo.Module";


	
//	field labels
$fieldLabelsModule = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsModule["English"]=array();
	$fieldToolTipsModule["English"]=array();
	$fieldLabelsModule["English"]["ID"] = "ID";
	$fieldToolTipsModule["English"]["ID"] = "";
	$fieldLabelsModule["English"]["Module_Type"] = "Module Type";
	$fieldToolTipsModule["English"]["Module Type"] = "";
	$fieldLabelsModule["English"]["Module_Status"] = "Module Status";
	$fieldToolTipsModule["English"]["Module Status"] = "";
	$fieldLabelsModule["English"]["Module_Condition"] = "Module Condition";
	$fieldToolTipsModule["English"]["Module Condition"] = "";
	$fieldLabelsModule["English"]["Serial_Num"] = "Serial Num";
	$fieldToolTipsModule["English"]["Serial Num"] = "";
	$fieldLabelsModule["English"]["Entry_Date"] = "Entry Date";
	$fieldToolTipsModule["English"]["Entry Date"] = "";
	if (count($fieldToolTipsModule["English"])){
		$tdataModule[".isUseToolTips"]=true;
	}
}
if(mlang_getcurrentlang()=="Urdu")
{
	$fieldLabelsModule["Urdu"]=array();
	$fieldToolTipsModule["Urdu"]=array();
	$fieldLabelsModule["Urdu"]["ID"] = "ID";
	$fieldToolTipsModule["Urdu"]["ID"] = "";
	$fieldLabelsModule["Urdu"]["Module_Type"] = "Module Type";
	$fieldToolTipsModule["Urdu"]["Module Type"] = "";
	$fieldLabelsModule["Urdu"]["Module_Status"] = "Module Status";
	$fieldToolTipsModule["Urdu"]["Module Status"] = "";
	$fieldLabelsModule["Urdu"]["Module_Condition"] = "Module Condition";
	$fieldToolTipsModule["Urdu"]["Module Condition"] = "";
	$fieldLabelsModule["Urdu"]["Serial_Num"] = "Serial Num";
	$fieldToolTipsModule["Urdu"]["Serial Num"] = "";
	$fieldLabelsModule["Urdu"]["Entry_Date"] = "Entry Date";
	$fieldToolTipsModule["Urdu"]["Entry Date"] = "";
	if (count($fieldToolTipsModule["Urdu"])){
		$tdataModule[".isUseToolTips"]=true;
	}
}


	
	$tdataModule[".NCSearch"]=true;

	

$tdataModule[".shortTableName"] = "Module";
$tdataModule[".nSecOptions"] = 0;
$tdataModule[".recsPerRowList"] = 1;	
$tdataModule[".tableGroupBy"] = "0";
$tdataModule[".mainTableOwnerID"] = "";
$tdataModule[".moveNext"] = 1;




$tdataModule[".showAddInPopup"] = false;

$tdataModule[".showEditInPopup"] = false;

$tdataModule[".showViewInPopup"] = false;


$tdataModule[".fieldsForRegister"] = array();

$tdataModule[".listAjax"] = false;

	$tdataModule[".audit"] = false;

	$tdataModule[".locking"] = false;
	
$tdataModule[".listIcons"] = true;
$tdataModule[".edit"] = true;
$tdataModule[".inlineEdit"] = true;
$tdataModule[".view"] = true;

$tdataModule[".exportTo"] = true;

$tdataModule[".printFriendly"] = true;

$tdataModule[".delete"] = true;

$tdataModule[".showSimpleSearchOptions"] = false;

$tdataModule[".showSearchPanel"] = true;


$tdataModule[".isUseAjaxSuggest"] = true;

$tdataModule[".rowHighlite"] = true;


// button handlers file names

$tdataModule[".addPageEvents"] = false;

$tdataModule[".arrKeyFields"][] = "ID";

// use datepicker for search panel
$tdataModule[".isUseCalendarForSearch"] = true;

// use timepicker for search panel
$tdataModule[".isUseTimeForSearch"] = false;

$tdataModule[".isUseiBox"] = false;


	

	

$tdataModule[".useDetailsPreview"] = true;	

$tdataModule[".isUseInlineAdd"] = true;

$tdataModule[".isUseInlineEdit"] = true;
$tdataModule[".isUseInlineJs"] = $tdataModule[".isUseInlineAdd"] || $tdataModule[".isUseInlineEdit"];

$tdataModule[".allSearchFields"] = array();

$tdataModule[".globSearchFields"][] = "ID";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("ID", $tdataModule[".allSearchFields"]))
{
	$tdataModule[".allSearchFields"][] = "ID";	
}
$tdataModule[".globSearchFields"][] = "Module Type";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Module Type", $tdataModule[".allSearchFields"]))
{
	$tdataModule[".allSearchFields"][] = "Module Type";	
}
$tdataModule[".globSearchFields"][] = "Module Status";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Module Status", $tdataModule[".allSearchFields"]))
{
	$tdataModule[".allSearchFields"][] = "Module Status";	
}
$tdataModule[".globSearchFields"][] = "Module Condition";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Module Condition", $tdataModule[".allSearchFields"]))
{
	$tdataModule[".allSearchFields"][] = "Module Condition";	
}
$tdataModule[".globSearchFields"][] = "Serial Num";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Serial Num", $tdataModule[".allSearchFields"]))
{
	$tdataModule[".allSearchFields"][] = "Serial Num";	
}
$tdataModule[".globSearchFields"][] = "Entry Date";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Entry Date", $tdataModule[".allSearchFields"]))
{
	$tdataModule[".allSearchFields"][] = "Entry Date";	
}


$tdataModule[".googleLikeFields"][] = "ID";
$tdataModule[".googleLikeFields"][] = "Module Type";
$tdataModule[".googleLikeFields"][] = "Module Status";
$tdataModule[".googleLikeFields"][] = "Module Condition";
$tdataModule[".googleLikeFields"][] = "Serial Num";
$tdataModule[".googleLikeFields"][] = "Entry Date";



$tdataModule[".advSearchFields"][] = "ID";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("ID", $tdataModule[".allSearchFields"])) 
{
	$tdataModule[".allSearchFields"][] = "ID";	
}
$tdataModule[".advSearchFields"][] = "Module Type";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Module Type", $tdataModule[".allSearchFields"])) 
{
	$tdataModule[".allSearchFields"][] = "Module Type";	
}
$tdataModule[".advSearchFields"][] = "Module Status";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Module Status", $tdataModule[".allSearchFields"])) 
{
	$tdataModule[".allSearchFields"][] = "Module Status";	
}
$tdataModule[".advSearchFields"][] = "Module Condition";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Module Condition", $tdataModule[".allSearchFields"])) 
{
	$tdataModule[".allSearchFields"][] = "Module Condition";	
}
$tdataModule[".advSearchFields"][] = "Serial Num";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Serial Num", $tdataModule[".allSearchFields"])) 
{
	$tdataModule[".allSearchFields"][] = "Serial Num";	
}
$tdataModule[".advSearchFields"][] = "Entry Date";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Entry Date", $tdataModule[".allSearchFields"])) 
{
	$tdataModule[".allSearchFields"][] = "Entry Date";	
}

$tdataModule[".isTableType"] = "list";


	



// Access doesn't support subqueries from the same table as main
$tdataModule[".subQueriesSupAccess"] = true;

			



$tdataModule[".pageSize"] = 20;

$gstrOrderBy = "";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy = "order by ".$gstrOrderBy;
$tdataModule[".strOrderBy"] = $gstrOrderBy;
	
$tdataModule[".orderindexes"] = array();

$tdataModule[".sqlHead"] = "SELECT ID,   [Module Type],   [Module Status],   [Module Condition],   [Serial Num],   [Entry Date]";
$tdataModule[".sqlFrom"] = "FROM dbo.[Module]";
$tdataModule[".sqlWhereExpr"] = "";
$tdataModule[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataModule[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataModule[".arrGroupsPerPage"] = $arrGPP;

	$tableKeys = array();
	$tableKeys[] = "ID";
	$tdataModule[".Keys"] = $tableKeys;

//	ID
	$fdata = array();
	$fdata["strName"] = "ID";
	$fdata["ownerTable"] = "dbo.Module";
	$fdata["Label"]=GetFieldLabel("dbo_Module","ID"); 
	
		
		
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
	
		
				
		
		
		
			$tdataModule["ID"]=$fdata;
//	Module Type
	$fdata = array();
	$fdata["strName"] = "Module Type";
	$fdata["ownerTable"] = "dbo.Module";
	$fdata["Label"]=GetFieldLabel("dbo_Module","Module_Type"); 
	
		
		
	$fdata["FieldType"]= 3;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Lookup wizard";
	$fdata["ViewFormat"]= "";
	
		
		$fdata["LookupType"]=1;
	$fdata["pLookupType"] = 1;
	$fdata["freeInput"] = 0;	
	$fdata["autoCompleteFieldsOnEdit"] = 0;
	$fdata["autoCompleteFields"] = array();
										$fdata["LinkField"]="Code";
	$fdata["LinkFieldType"]=3;
	$fdata["DisplayField"]="Code";
				$fdata["LookupTable"]="dbo.LU_Module Type";
	$fdata["LookupOrderBy"]="";
																			
					
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "Module_Type";
	
		$fdata["FullName"]= "[Module Type]";
	
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
	
		
				
		
		
		
			$tdataModule["Module Type"]=$fdata;
//	Module Status
	$fdata = array();
	$fdata["strName"] = "Module Status";
	$fdata["ownerTable"] = "dbo.Module";
	$fdata["Label"]=GetFieldLabel("dbo_Module","Module_Status"); 
	
		
		
	$fdata["FieldType"]= 3;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Lookup wizard";
	$fdata["ViewFormat"]= "";
	
		
		$fdata["LookupType"]=1;
	$fdata["pLookupType"] = 1;
	$fdata["freeInput"] = 0;	
	$fdata["autoCompleteFieldsOnEdit"] = 0;
	$fdata["autoCompleteFields"] = array();
										$fdata["LinkField"]="Code";
	$fdata["LinkFieldType"]=3;
	$fdata["DisplayField"]="Code";
				$fdata["LookupTable"]="dbo.LU_Module Status";
	$fdata["LookupOrderBy"]="";
																			
					
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "Module_Status";
	
		$fdata["FullName"]= "[Module Status]";
	
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
	
		
				
		
		
		
			$tdataModule["Module Status"]=$fdata;
//	Module Condition
	$fdata = array();
	$fdata["strName"] = "Module Condition";
	$fdata["ownerTable"] = "dbo.Module";
	$fdata["Label"]=GetFieldLabel("dbo_Module","Module_Condition"); 
	
		
		
	$fdata["FieldType"]= 3;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Lookup wizard";
	$fdata["ViewFormat"]= "";
	
		
		$fdata["LookupType"]=1;
	$fdata["pLookupType"] = 1;
	$fdata["freeInput"] = 0;	
	$fdata["autoCompleteFieldsOnEdit"] = 0;
	$fdata["autoCompleteFields"] = array();
										$fdata["LinkField"]="Code";
	$fdata["LinkFieldType"]=3;
	$fdata["DisplayField"]="Code";
				$fdata["LookupTable"]="dbo.LU_Module Condition";
	$fdata["LookupOrderBy"]="";
																			
					
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "Module_Condition";
	
		$fdata["FullName"]= "[Module Condition]";
	
		$fdata["IsRequired"]=true; 
	
		
		
		
		
				$fdata["Index"]= 4;
				
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
	
		
				
		
		
		
			$tdataModule["Module Condition"]=$fdata;
//	Serial Num
	$fdata = array();
	$fdata["strName"] = "Serial Num";
	$fdata["ownerTable"] = "dbo.Module";
	$fdata["Label"]=GetFieldLabel("dbo_Module","Serial_Num"); 
	
		
		
	$fdata["FieldType"]= 202;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "Serial_Num";
	
		$fdata["FullName"]= "[Serial Num]";
	
		
		
		
		
		
				$fdata["Index"]= 5;
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
	
		
				
		
		
		
			$tdataModule["Serial Num"]=$fdata;
//	Entry Date
	$fdata = array();
	$fdata["strName"] = "Entry Date";
	$fdata["ownerTable"] = "dbo.Module";
	$fdata["Label"]=GetFieldLabel("dbo_Module","Entry_Date"); 
	
		
		
	$fdata["FieldType"]= 135;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Date";
	$fdata["ViewFormat"]= "Short Date";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "Entry_Date";
	
		$fdata["FullName"]= "[Entry Date]";
	
		
		
		
		
		
				$fdata["Index"]= 6;
		$fdata["DateEditType"] = 13; 
	$fdata["InitialYearFactor"] = 100; 
	$fdata["LastYearFactor"] = 10; 
			
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
	
		
				
		
		
		
			$tdataModule["Entry Date"]=$fdata;


	
$tables_data["dbo.Module"]=&$tdataModule;
$field_labels["dbo_Module"] = &$fieldLabelsModule;
$fieldToolTips["dbo.Module"] = &$fieldToolTipsModule;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dbo.Module"] = array();
$dIndex = 1-1;
			$strOriginalDetailsTable="dbo.Anomalies";
	$detailsTablesData["dbo.Module"][$dIndex] = array(
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
		$detailsTablesData["dbo.Module"][$dIndex]["masterKeys"][]="ID";
		$detailsTablesData["dbo.Module"][$dIndex]["detailKeys"][]="Module ID";

$dIndex = 2-1;
			$strOriginalDetailsTable="dbo.Customer Module Assignment";
	$detailsTablesData["dbo.Module"][$dIndex] = array(
		  "dDataSourceTable"=>"dbo.Customer Module Assignment"
		, "dOriginalTable"=>$strOriginalDetailsTable
		, "dShortTable"=>"Customer_Module_Assignment"
		, "masterKeys"=>array()
		, "detailKeys"=>array()
		, "dispChildCount"=> "1"
		, "hideChild"=>"0"
		, "sqlHead"=>"SELECT ID,   [Customer ID],   [Module ID]"	
		, "sqlFrom"=>"FROM dbo.[Customer Module Assignment]"	
		, "sqlWhere"=>""
		, "sqlTail"=>""
		, "groupBy"=>"0"
		, "previewOnList" => 1
		, "previewOnAdd" => 0
		, "previewOnEdit" => 0
		, "previewOnView" => 0
	);	
		$detailsTablesData["dbo.Module"][$dIndex]["masterKeys"][]="ID";
		$detailsTablesData["dbo.Module"][$dIndex]["detailKeys"][]="Module ID";

$dIndex = 3-1;
			$strOriginalDetailsTable="dbo.Readings";
	$detailsTablesData["dbo.Module"][$dIndex] = array(
		  "dDataSourceTable"=>"dbo.Readings"
		, "dOriginalTable"=>$strOriginalDetailsTable
		, "dShortTable"=>"Readings"
		, "masterKeys"=>array()
		, "detailKeys"=>array()
		, "dispChildCount"=> "1"
		, "hideChild"=>"0"
		, "sqlHead"=>"SELECT [Record ID],   [Module ID],   [Voltage Red],   [Voltage Blue],   [Voltage Yellow],   [Currunt Red],   [Currunt Blue],   [Currunt Yellow],   [PF Red],   [PF Blue],   [PF Yellow],   [Peak Power],   [Date Time],   IsSync,   [Currunt Readings]"	
		, "sqlFrom"=>"FROM dbo.Readings"	
		, "sqlWhere"=>""
		, "sqlTail"=>""
		, "groupBy"=>"0"
		, "previewOnList" => 1
		, "previewOnAdd" => 0
		, "previewOnEdit" => 0
		, "previewOnView" => 0
	);	
		$detailsTablesData["dbo.Module"][$dIndex]["masterKeys"][]="ID";
		$detailsTablesData["dbo.Module"][$dIndex]["detailKeys"][]="Module ID";


	
// tables which are master tables for current table (detail)
$masterTablesData["dbo.Module"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="dbo.LU_Module Condition";
	$masterTablesData["dbo.Module"][$mIndex] = array(
		  "mDataSourceTable"=>"dbo.LU_Module Condition"
		, "mOriginalTable" => $strOriginalDetailsTable
		, "mShortTable" => "LU_Module_Condition"
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
		$masterTablesData["dbo.Module"][$mIndex]["masterKeys"][]="Code";
		$masterTablesData["dbo.Module"][$mIndex]["detailKeys"][]="Module Condition";

$mIndex = 2-1;
			$strOriginalDetailsTable="dbo.LU_Module Status";
	$masterTablesData["dbo.Module"][$mIndex] = array(
		  "mDataSourceTable"=>"dbo.LU_Module Status"
		, "mOriginalTable" => $strOriginalDetailsTable
		, "mShortTable" => "LU_Module_Status"
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
		$masterTablesData["dbo.Module"][$mIndex]["masterKeys"][]="Code";
		$masterTablesData["dbo.Module"][$mIndex]["detailKeys"][]="Module Status";

$mIndex = 3-1;
			$strOriginalDetailsTable="dbo.LU_Module Type";
	$masterTablesData["dbo.Module"][$mIndex] = array(
		  "mDataSourceTable"=>"dbo.LU_Module Type"
		, "mOriginalTable" => $strOriginalDetailsTable
		, "mShortTable" => "LU_Module_Type"
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
		$masterTablesData["dbo.Module"][$mIndex]["masterKeys"][]="Code";
		$masterTablesData["dbo.Module"][$mIndex]["detailKeys"][]="Module Type";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Module()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,   [Module Type],   [Module Status],   [Module Condition],   [Serial Num],   [Entry Date]";
$proto0["m_strFrom"] = "FROM dbo.[Module]";
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
	"m_strTable" => "dbo.Module"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Module Type",
	"m_strTable" => "dbo.Module"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Module Status",
	"m_strTable" => "dbo.Module"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Module Condition",
	"m_strTable" => "dbo.Module"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Serial Num",
	"m_strTable" => "dbo.Module"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Entry Date",
	"m_strTable" => "dbo.Module"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "dbo.Module";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "ID";
$proto18["m_columns"][] = "Module Type";
$proto18["m_columns"][] = "Module Status";
$proto18["m_columns"][] = "Module Condition";
$proto18["m_columns"][] = "Serial Num";
$proto18["m_columns"][] = "Entry Date";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_alias"] = "";
$proto19=array();
$proto19["m_sql"] = "";
$proto19["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto19["m_column"]=$obj;
$proto19["m_contained"] = array();
$proto19["m_strCase"] = "";
$proto19["m_havingmode"] = "0";
$proto19["m_inBrackets"] = "0";
$proto19["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto19);

$proto17["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto17);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

return $obj;
}
$queryData_Module = createSqlQuery_Module();
$tdataModule[".sqlquery"] = $queryData_Module;



$tableEvents["dbo.Module"] = new eventsBase;
$tdataModule[".hasEvents"] = false;

?>
