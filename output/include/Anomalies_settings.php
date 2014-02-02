<?php
$tdataAnomalies=array();
	$tdataAnomalies[".NumberOfChars"]=80; 
	$tdataAnomalies[".ShortName"]="Anomalies";
	$tdataAnomalies[".OwnerID"]="";
	$tdataAnomalies[".OriginalTable"]="dbo.Anomalies";


	
//	field labels
$fieldLabelsAnomalies = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsAnomalies["English"]=array();
	$fieldToolTipsAnomalies["English"]=array();
	$fieldLabelsAnomalies["English"]["ID"] = "ID";
	$fieldToolTipsAnomalies["English"]["ID"] = "";
	$fieldLabelsAnomalies["English"]["Module_ID"] = "Module ID";
	$fieldToolTipsAnomalies["English"]["Module ID"] = "";
	$fieldLabelsAnomalies["English"]["Anomaly_Description"] = "Anomaly Description";
	$fieldToolTipsAnomalies["English"]["Anomaly Description"] = "";
	$fieldLabelsAnomalies["English"]["Anomaly_Type"] = "Anomaly Type";
	$fieldToolTipsAnomalies["English"]["Anomaly Type"] = "";
	$fieldLabelsAnomalies["English"]["Date_Time"] = "Date Time";
	$fieldToolTipsAnomalies["English"]["Date Time"] = "";
	$fieldLabelsAnomalies["English"]["Action_Taken"] = "Action Taken";
	$fieldToolTipsAnomalies["English"]["Action Taken"] = "";
	if (count($fieldToolTipsAnomalies["English"])){
		$tdataAnomalies[".isUseToolTips"]=true;
	}
}
if(mlang_getcurrentlang()=="Urdu")
{
	$fieldLabelsAnomalies["Urdu"]=array();
	$fieldToolTipsAnomalies["Urdu"]=array();
	$fieldLabelsAnomalies["Urdu"]["ID"] = "ID";
	$fieldToolTipsAnomalies["Urdu"]["ID"] = "";
	$fieldLabelsAnomalies["Urdu"]["Module_ID"] = "Module ID";
	$fieldToolTipsAnomalies["Urdu"]["Module ID"] = "";
	$fieldLabelsAnomalies["Urdu"]["Anomaly_Description"] = "Anomaly Description";
	$fieldToolTipsAnomalies["Urdu"]["Anomaly Description"] = "";
	$fieldLabelsAnomalies["Urdu"]["Anomaly_Type"] = "Anomaly Type";
	$fieldToolTipsAnomalies["Urdu"]["Anomaly Type"] = "";
	$fieldLabelsAnomalies["Urdu"]["Date_Time"] = "Date Time";
	$fieldToolTipsAnomalies["Urdu"]["Date Time"] = "";
	$fieldLabelsAnomalies["Urdu"]["Action_Taken"] = "Action Taken";
	$fieldToolTipsAnomalies["Urdu"]["Action Taken"] = "";
	if (count($fieldToolTipsAnomalies["Urdu"])){
		$tdataAnomalies[".isUseToolTips"]=true;
	}
}


	
	$tdataAnomalies[".NCSearch"]=true;

	

$tdataAnomalies[".shortTableName"] = "Anomalies";
$tdataAnomalies[".nSecOptions"] = 0;
$tdataAnomalies[".recsPerRowList"] = 1;	
$tdataAnomalies[".tableGroupBy"] = "0";
$tdataAnomalies[".mainTableOwnerID"] = "";
$tdataAnomalies[".moveNext"] = 1;




$tdataAnomalies[".showAddInPopup"] = false;

$tdataAnomalies[".showEditInPopup"] = false;

$tdataAnomalies[".showViewInPopup"] = false;


$tdataAnomalies[".fieldsForRegister"] = array();

$tdataAnomalies[".listAjax"] = false;

	$tdataAnomalies[".audit"] = false;

	$tdataAnomalies[".locking"] = false;
	
$tdataAnomalies[".listIcons"] = true;
$tdataAnomalies[".edit"] = true;
$tdataAnomalies[".inlineEdit"] = true;
$tdataAnomalies[".view"] = true;

$tdataAnomalies[".exportTo"] = true;

$tdataAnomalies[".printFriendly"] = true;

$tdataAnomalies[".delete"] = true;

$tdataAnomalies[".showSimpleSearchOptions"] = false;

$tdataAnomalies[".showSearchPanel"] = true;


$tdataAnomalies[".isUseAjaxSuggest"] = true;

$tdataAnomalies[".rowHighlite"] = true;


// button handlers file names

$tdataAnomalies[".addPageEvents"] = false;

$tdataAnomalies[".arrKeyFields"][] = "ID";

// use datepicker for search panel
$tdataAnomalies[".isUseCalendarForSearch"] = true;

// use timepicker for search panel
$tdataAnomalies[".isUseTimeForSearch"] = false;

$tdataAnomalies[".isUseiBox"] = false;


	

	


$tdataAnomalies[".isUseInlineAdd"] = true;

$tdataAnomalies[".isUseInlineEdit"] = true;
$tdataAnomalies[".isUseInlineJs"] = $tdataAnomalies[".isUseInlineAdd"] || $tdataAnomalies[".isUseInlineEdit"];

$tdataAnomalies[".allSearchFields"] = array();

$tdataAnomalies[".globSearchFields"][] = "ID";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("ID", $tdataAnomalies[".allSearchFields"]))
{
	$tdataAnomalies[".allSearchFields"][] = "ID";	
}
$tdataAnomalies[".globSearchFields"][] = "Module ID";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Module ID", $tdataAnomalies[".allSearchFields"]))
{
	$tdataAnomalies[".allSearchFields"][] = "Module ID";	
}
$tdataAnomalies[".globSearchFields"][] = "Anomaly Description";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Anomaly Description", $tdataAnomalies[".allSearchFields"]))
{
	$tdataAnomalies[".allSearchFields"][] = "Anomaly Description";	
}
$tdataAnomalies[".globSearchFields"][] = "Anomaly Type";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Anomaly Type", $tdataAnomalies[".allSearchFields"]))
{
	$tdataAnomalies[".allSearchFields"][] = "Anomaly Type";	
}
$tdataAnomalies[".globSearchFields"][] = "Date Time";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Date Time", $tdataAnomalies[".allSearchFields"]))
{
	$tdataAnomalies[".allSearchFields"][] = "Date Time";	
}
$tdataAnomalies[".globSearchFields"][] = "Action Taken";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Action Taken", $tdataAnomalies[".allSearchFields"]))
{
	$tdataAnomalies[".allSearchFields"][] = "Action Taken";	
}


$tdataAnomalies[".googleLikeFields"][] = "ID";
$tdataAnomalies[".googleLikeFields"][] = "Module ID";
$tdataAnomalies[".googleLikeFields"][] = "Anomaly Description";
$tdataAnomalies[".googleLikeFields"][] = "Anomaly Type";
$tdataAnomalies[".googleLikeFields"][] = "Date Time";
$tdataAnomalies[".googleLikeFields"][] = "Action Taken";



$tdataAnomalies[".advSearchFields"][] = "ID";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("ID", $tdataAnomalies[".allSearchFields"])) 
{
	$tdataAnomalies[".allSearchFields"][] = "ID";	
}
$tdataAnomalies[".advSearchFields"][] = "Module ID";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Module ID", $tdataAnomalies[".allSearchFields"])) 
{
	$tdataAnomalies[".allSearchFields"][] = "Module ID";	
}
$tdataAnomalies[".advSearchFields"][] = "Anomaly Description";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Anomaly Description", $tdataAnomalies[".allSearchFields"])) 
{
	$tdataAnomalies[".allSearchFields"][] = "Anomaly Description";	
}
$tdataAnomalies[".advSearchFields"][] = "Anomaly Type";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Anomaly Type", $tdataAnomalies[".allSearchFields"])) 
{
	$tdataAnomalies[".allSearchFields"][] = "Anomaly Type";	
}
$tdataAnomalies[".advSearchFields"][] = "Date Time";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Date Time", $tdataAnomalies[".allSearchFields"])) 
{
	$tdataAnomalies[".allSearchFields"][] = "Date Time";	
}
$tdataAnomalies[".advSearchFields"][] = "Action Taken";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Action Taken", $tdataAnomalies[".allSearchFields"])) 
{
	$tdataAnomalies[".allSearchFields"][] = "Action Taken";	
}

$tdataAnomalies[".isTableType"] = "list";


	



// Access doesn't support subqueries from the same table as main
$tdataAnomalies[".subQueriesSupAccess"] = true;





$tdataAnomalies[".pageSize"] = 20;

$gstrOrderBy = "";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy = "order by ".$gstrOrderBy;
$tdataAnomalies[".strOrderBy"] = $gstrOrderBy;
	
$tdataAnomalies[".orderindexes"] = array();

$tdataAnomalies[".sqlHead"] = "SELECT ID,   [Module ID],   [Anomaly Description],   [Anomaly Type],   [Date Time],   [Action Taken]";
$tdataAnomalies[".sqlFrom"] = "FROM dbo.Anomalies";
$tdataAnomalies[".sqlWhereExpr"] = "";
$tdataAnomalies[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataAnomalies[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataAnomalies[".arrGroupsPerPage"] = $arrGPP;

	$tableKeys = array();
	$tableKeys[] = "ID";
	$tdataAnomalies[".Keys"] = $tableKeys;

//	ID
	$fdata = array();
	$fdata["strName"] = "ID";
	$fdata["ownerTable"] = "dbo.Anomalies";
	$fdata["Label"]=GetFieldLabel("dbo_Anomalies","ID"); 
	
		
		
	$fdata["FieldType"]= 3;
	
		
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
	
		
				
		
		
		
			$tdataAnomalies["ID"]=$fdata;
//	Module ID
	$fdata = array();
	$fdata["strName"] = "Module ID";
	$fdata["ownerTable"] = "dbo.Anomalies";
	$fdata["Label"]=GetFieldLabel("dbo_Anomalies","Module_ID"); 
	
		
		
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
	
		
				
		
		
		
			$tdataAnomalies["Module ID"]=$fdata;
//	Anomaly Description
	$fdata = array();
	$fdata["strName"] = "Anomaly Description";
	$fdata["ownerTable"] = "dbo.Anomalies";
	$fdata["Label"]=GetFieldLabel("dbo_Anomalies","Anomaly_Description"); 
	
		
		
	$fdata["FieldType"]= 202;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "Anomaly_Description";
	
		$fdata["FullName"]= "[Anomaly Description]";
	
		
		
		
		
		
				$fdata["Index"]= 3;
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
	
		
				
		
		
		
			$tdataAnomalies["Anomaly Description"]=$fdata;
//	Anomaly Type
	$fdata = array();
	$fdata["strName"] = "Anomaly Type";
	$fdata["ownerTable"] = "dbo.Anomalies";
	$fdata["Label"]=GetFieldLabel("dbo_Anomalies","Anomaly_Type"); 
	
		
		
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
				$fdata["LookupTable"]="dbo.LU_Anomaly Type";
	$fdata["LookupOrderBy"]="";
																			
					
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "Anomaly_Type";
	
		$fdata["FullName"]= "[Anomaly Type]";
	
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
	
		
				
		
		
		
			$tdataAnomalies["Anomaly Type"]=$fdata;
//	Date Time
	$fdata = array();
	$fdata["strName"] = "Date Time";
	$fdata["ownerTable"] = "dbo.Anomalies";
	$fdata["Label"]=GetFieldLabel("dbo_Anomalies","Date_Time"); 
	
		
		
	$fdata["FieldType"]= 135;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Date";
	$fdata["ViewFormat"]= "Short Date";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "Date_Time";
	
		$fdata["FullName"]= "[Date Time]";
	
		$fdata["IsRequired"]=true; 
	
		
		
		
		
				$fdata["Index"]= 5;
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
						$fdata["validateAs"]["basicValidate"][] = "IsRequired";
	
		//End validation
	
				$fdata["FieldPermissions"]=true;
	
		
				
		
		
		
			$tdataAnomalies["Date Time"]=$fdata;
//	Action Taken
	$fdata = array();
	$fdata["strName"] = "Action Taken";
	$fdata["ownerTable"] = "dbo.Anomalies";
	$fdata["Label"]=GetFieldLabel("dbo_Anomalies","Action_Taken"); 
	
		
		
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
				$fdata["LookupTable"]="dbo.Actions";
	$fdata["LookupOrderBy"]="";
																			
					
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "Action_Taken";
	
		$fdata["FullName"]= "[Action Taken]";
	
		$fdata["IsRequired"]=true; 
	
		
		
		
		
				$fdata["Index"]= 6;
				
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
	
		
				
		
		
		
			$tdataAnomalies["Action Taken"]=$fdata;


	
$tables_data["dbo.Anomalies"]=&$tdataAnomalies;
$field_labels["dbo_Anomalies"] = &$fieldLabelsAnomalies;
$fieldToolTips["dbo.Anomalies"] = &$fieldToolTipsAnomalies;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dbo.Anomalies"] = array();

	
// tables which are master tables for current table (detail)
$masterTablesData["dbo.Anomalies"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="dbo.Actions";
	$masterTablesData["dbo.Anomalies"][$mIndex] = array(
		  "mDataSourceTable"=>"dbo.Actions"
		, "mOriginalTable" => $strOriginalDetailsTable
		, "mShortTable" => "Actions"
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
		$masterTablesData["dbo.Anomalies"][$mIndex]["masterKeys"][]="Code";
		$masterTablesData["dbo.Anomalies"][$mIndex]["detailKeys"][]="Action Taken";

$mIndex = 2-1;
			$strOriginalDetailsTable="dbo.LU_Anomaly Type";
	$masterTablesData["dbo.Anomalies"][$mIndex] = array(
		  "mDataSourceTable"=>"dbo.LU_Anomaly Type"
		, "mOriginalTable" => $strOriginalDetailsTable
		, "mShortTable" => "LU_Anomaly_Type"
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
		$masterTablesData["dbo.Anomalies"][$mIndex]["masterKeys"][]="Code";
		$masterTablesData["dbo.Anomalies"][$mIndex]["detailKeys"][]="Anomaly Type";

$mIndex = 3-1;
			$strOriginalDetailsTable="dbo.Module";
	$masterTablesData["dbo.Anomalies"][$mIndex] = array(
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
		$masterTablesData["dbo.Anomalies"][$mIndex]["masterKeys"][]="ID";
		$masterTablesData["dbo.Anomalies"][$mIndex]["detailKeys"][]="Module ID";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Anomalies()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,   [Module ID],   [Anomaly Description],   [Anomaly Type],   [Date Time],   [Action Taken]";
$proto0["m_strFrom"] = "FROM dbo.Anomalies";
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
	"m_strTable" => "dbo.Anomalies"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Module ID",
	"m_strTable" => "dbo.Anomalies"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Anomaly Description",
	"m_strTable" => "dbo.Anomalies"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Anomaly Type",
	"m_strTable" => "dbo.Anomalies"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Date Time",
	"m_strTable" => "dbo.Anomalies"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Action Taken",
	"m_strTable" => "dbo.Anomalies"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "dbo.Anomalies";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "ID";
$proto18["m_columns"][] = "Module ID";
$proto18["m_columns"][] = "Anomaly Description";
$proto18["m_columns"][] = "Anomaly Type";
$proto18["m_columns"][] = "Date Time";
$proto18["m_columns"][] = "Action Taken";
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
$queryData_Anomalies = createSqlQuery_Anomalies();
$tdataAnomalies[".sqlquery"] = $queryData_Anomalies;



$tableEvents["dbo.Anomalies"] = new eventsBase;
$tdataAnomalies[".hasEvents"] = false;

?>
