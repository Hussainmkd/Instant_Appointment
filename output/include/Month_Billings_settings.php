<?php
$tdataMonth_Billings=array();
	$tdataMonth_Billings[".NumberOfChars"]=80; 
	$tdataMonth_Billings[".ShortName"]="Month_Billings";
	$tdataMonth_Billings[".OwnerID"]="";
	$tdataMonth_Billings[".OriginalTable"]="dbo.Month Billings";


	
//	field labels
$fieldLabelsMonth_Billings = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsMonth_Billings["English"]=array();
	$fieldToolTipsMonth_Billings["English"]=array();
	$fieldLabelsMonth_Billings["English"]["Bill_ID"] = "Bill ID";
	$fieldToolTipsMonth_Billings["English"]["Bill ID"] = "";
	$fieldLabelsMonth_Billings["English"]["Customer_ID"] = "Customer ID";
	$fieldToolTipsMonth_Billings["English"]["Customer ID"] = "";
	$fieldLabelsMonth_Billings["English"]["Bill_Month"] = "Bill Month";
	$fieldToolTipsMonth_Billings["English"]["Bill Month"] = "";
	$fieldLabelsMonth_Billings["English"]["Previous_Readings"] = "Previous Readings";
	$fieldToolTipsMonth_Billings["English"]["Previous Readings"] = "";
	$fieldLabelsMonth_Billings["English"]["Currunt_Readings"] = "Currunt Readings";
	$fieldToolTipsMonth_Billings["English"]["Currunt Readings"] = "";
	$fieldLabelsMonth_Billings["English"]["Unit_Consumed"] = "Unit Consumed";
	$fieldToolTipsMonth_Billings["English"]["Unit Consumed"] = "";
	$fieldLabelsMonth_Billings["English"]["Bill_Amount"] = "Bill Amount";
	$fieldToolTipsMonth_Billings["English"]["Bill Amount"] = "";
	$fieldLabelsMonth_Billings["English"]["Due_Date"] = "Due Date";
	$fieldToolTipsMonth_Billings["English"]["Due Date"] = "";
	if (count($fieldToolTipsMonth_Billings["English"])){
		$tdataMonth_Billings[".isUseToolTips"]=true;
	}
}
if(mlang_getcurrentlang()=="Urdu")
{
	$fieldLabelsMonth_Billings["Urdu"]=array();
	$fieldToolTipsMonth_Billings["Urdu"]=array();
	$fieldLabelsMonth_Billings["Urdu"]["Bill_ID"] = "Bill ID";
	$fieldToolTipsMonth_Billings["Urdu"]["Bill ID"] = "";
	$fieldLabelsMonth_Billings["Urdu"]["Customer_ID"] = "Customer ID";
	$fieldToolTipsMonth_Billings["Urdu"]["Customer ID"] = "";
	$fieldLabelsMonth_Billings["Urdu"]["Bill_Month"] = "Bill Month";
	$fieldToolTipsMonth_Billings["Urdu"]["Bill Month"] = "";
	$fieldLabelsMonth_Billings["Urdu"]["Previous_Readings"] = "Previous Readings";
	$fieldToolTipsMonth_Billings["Urdu"]["Previous Readings"] = "";
	$fieldLabelsMonth_Billings["Urdu"]["Currunt_Readings"] = "Currunt Readings";
	$fieldToolTipsMonth_Billings["Urdu"]["Currunt Readings"] = "";
	$fieldLabelsMonth_Billings["Urdu"]["Unit_Consumed"] = "Unit Consumed";
	$fieldToolTipsMonth_Billings["Urdu"]["Unit Consumed"] = "";
	$fieldLabelsMonth_Billings["Urdu"]["Bill_Amount"] = "Bill Amount";
	$fieldToolTipsMonth_Billings["Urdu"]["Bill Amount"] = "";
	$fieldLabelsMonth_Billings["Urdu"]["Due_Date"] = "Due Date";
	$fieldToolTipsMonth_Billings["Urdu"]["Due Date"] = "";
	if (count($fieldToolTipsMonth_Billings["Urdu"])){
		$tdataMonth_Billings[".isUseToolTips"]=true;
	}
}


	
	$tdataMonth_Billings[".NCSearch"]=true;

	

$tdataMonth_Billings[".shortTableName"] = "Month_Billings";
$tdataMonth_Billings[".nSecOptions"] = 0;
$tdataMonth_Billings[".recsPerRowList"] = 1;	
$tdataMonth_Billings[".tableGroupBy"] = "0";
$tdataMonth_Billings[".mainTableOwnerID"] = "";
$tdataMonth_Billings[".moveNext"] = 1;




$tdataMonth_Billings[".showAddInPopup"] = false;

$tdataMonth_Billings[".showEditInPopup"] = false;

$tdataMonth_Billings[".showViewInPopup"] = false;


$tdataMonth_Billings[".fieldsForRegister"] = array();

$tdataMonth_Billings[".listAjax"] = false;

	$tdataMonth_Billings[".audit"] = false;

	$tdataMonth_Billings[".locking"] = false;
	
$tdataMonth_Billings[".listIcons"] = true;
$tdataMonth_Billings[".edit"] = true;
$tdataMonth_Billings[".inlineEdit"] = true;
$tdataMonth_Billings[".view"] = true;

$tdataMonth_Billings[".exportTo"] = true;

$tdataMonth_Billings[".printFriendly"] = true;

$tdataMonth_Billings[".delete"] = true;

$tdataMonth_Billings[".showSimpleSearchOptions"] = false;

$tdataMonth_Billings[".showSearchPanel"] = true;


$tdataMonth_Billings[".isUseAjaxSuggest"] = true;

$tdataMonth_Billings[".rowHighlite"] = true;


// button handlers file names

$tdataMonth_Billings[".addPageEvents"] = false;

$tdataMonth_Billings[".arrKeyFields"][] = "Bill ID";

// use datepicker for search panel
$tdataMonth_Billings[".isUseCalendarForSearch"] = false;

// use timepicker for search panel
$tdataMonth_Billings[".isUseTimeForSearch"] = false;

$tdataMonth_Billings[".isUseiBox"] = false;


	

	


$tdataMonth_Billings[".isUseInlineAdd"] = true;

$tdataMonth_Billings[".isUseInlineEdit"] = true;
$tdataMonth_Billings[".isUseInlineJs"] = $tdataMonth_Billings[".isUseInlineAdd"] || $tdataMonth_Billings[".isUseInlineEdit"];

$tdataMonth_Billings[".allSearchFields"] = array();

$tdataMonth_Billings[".globSearchFields"][] = "Bill ID";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Bill ID", $tdataMonth_Billings[".allSearchFields"]))
{
	$tdataMonth_Billings[".allSearchFields"][] = "Bill ID";	
}
$tdataMonth_Billings[".globSearchFields"][] = "Customer ID";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Customer ID", $tdataMonth_Billings[".allSearchFields"]))
{
	$tdataMonth_Billings[".allSearchFields"][] = "Customer ID";	
}
$tdataMonth_Billings[".globSearchFields"][] = "Bill Month";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Bill Month", $tdataMonth_Billings[".allSearchFields"]))
{
	$tdataMonth_Billings[".allSearchFields"][] = "Bill Month";	
}
$tdataMonth_Billings[".globSearchFields"][] = "Previous Readings";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Previous Readings", $tdataMonth_Billings[".allSearchFields"]))
{
	$tdataMonth_Billings[".allSearchFields"][] = "Previous Readings";	
}
$tdataMonth_Billings[".globSearchFields"][] = "Currunt Readings";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Currunt Readings", $tdataMonth_Billings[".allSearchFields"]))
{
	$tdataMonth_Billings[".allSearchFields"][] = "Currunt Readings";	
}
$tdataMonth_Billings[".globSearchFields"][] = "Unit Consumed";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Unit Consumed", $tdataMonth_Billings[".allSearchFields"]))
{
	$tdataMonth_Billings[".allSearchFields"][] = "Unit Consumed";	
}
$tdataMonth_Billings[".globSearchFields"][] = "Bill Amount";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Bill Amount", $tdataMonth_Billings[".allSearchFields"]))
{
	$tdataMonth_Billings[".allSearchFields"][] = "Bill Amount";	
}
$tdataMonth_Billings[".globSearchFields"][] = "Due Date";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Due Date", $tdataMonth_Billings[".allSearchFields"]))
{
	$tdataMonth_Billings[".allSearchFields"][] = "Due Date";	
}


$tdataMonth_Billings[".googleLikeFields"][] = "Bill ID";
$tdataMonth_Billings[".googleLikeFields"][] = "Customer ID";
$tdataMonth_Billings[".googleLikeFields"][] = "Bill Month";
$tdataMonth_Billings[".googleLikeFields"][] = "Previous Readings";
$tdataMonth_Billings[".googleLikeFields"][] = "Currunt Readings";
$tdataMonth_Billings[".googleLikeFields"][] = "Unit Consumed";
$tdataMonth_Billings[".googleLikeFields"][] = "Bill Amount";
$tdataMonth_Billings[".googleLikeFields"][] = "Due Date";



$tdataMonth_Billings[".advSearchFields"][] = "Bill ID";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Bill ID", $tdataMonth_Billings[".allSearchFields"])) 
{
	$tdataMonth_Billings[".allSearchFields"][] = "Bill ID";	
}
$tdataMonth_Billings[".advSearchFields"][] = "Customer ID";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Customer ID", $tdataMonth_Billings[".allSearchFields"])) 
{
	$tdataMonth_Billings[".allSearchFields"][] = "Customer ID";	
}
$tdataMonth_Billings[".advSearchFields"][] = "Bill Month";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Bill Month", $tdataMonth_Billings[".allSearchFields"])) 
{
	$tdataMonth_Billings[".allSearchFields"][] = "Bill Month";	
}
$tdataMonth_Billings[".advSearchFields"][] = "Previous Readings";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Previous Readings", $tdataMonth_Billings[".allSearchFields"])) 
{
	$tdataMonth_Billings[".allSearchFields"][] = "Previous Readings";	
}
$tdataMonth_Billings[".advSearchFields"][] = "Currunt Readings";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Currunt Readings", $tdataMonth_Billings[".allSearchFields"])) 
{
	$tdataMonth_Billings[".allSearchFields"][] = "Currunt Readings";	
}
$tdataMonth_Billings[".advSearchFields"][] = "Unit Consumed";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Unit Consumed", $tdataMonth_Billings[".allSearchFields"])) 
{
	$tdataMonth_Billings[".allSearchFields"][] = "Unit Consumed";	
}
$tdataMonth_Billings[".advSearchFields"][] = "Bill Amount";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Bill Amount", $tdataMonth_Billings[".allSearchFields"])) 
{
	$tdataMonth_Billings[".allSearchFields"][] = "Bill Amount";	
}
$tdataMonth_Billings[".advSearchFields"][] = "Due Date";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Due Date", $tdataMonth_Billings[".allSearchFields"])) 
{
	$tdataMonth_Billings[".allSearchFields"][] = "Due Date";	
}

$tdataMonth_Billings[".isTableType"] = "list";


	



// Access doesn't support subqueries from the same table as main
$tdataMonth_Billings[".subQueriesSupAccess"] = true;





$tdataMonth_Billings[".pageSize"] = 20;

$gstrOrderBy = "";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy = "order by ".$gstrOrderBy;
$tdataMonth_Billings[".strOrderBy"] = $gstrOrderBy;
	
$tdataMonth_Billings[".orderindexes"] = array();

$tdataMonth_Billings[".sqlHead"] = "SELECT [Bill ID],   [Customer ID],   [Bill Month],   [Previous Readings],   [Currunt Readings],   [Unit Consumed],   [Bill Amount],   [Due Date]";
$tdataMonth_Billings[".sqlFrom"] = "FROM dbo.[Month Billings]";
$tdataMonth_Billings[".sqlWhereExpr"] = "";
$tdataMonth_Billings[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataMonth_Billings[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataMonth_Billings[".arrGroupsPerPage"] = $arrGPP;

	$tableKeys = array();
	$tableKeys[] = "Bill ID";
	$tdataMonth_Billings[".Keys"] = $tableKeys;

//	Bill ID
	$fdata = array();
	$fdata["strName"] = "Bill ID";
	$fdata["ownerTable"] = "dbo.Month Billings";
	$fdata["Label"]=GetFieldLabel("dbo_Month_Billings","Bill_ID"); 
	
		
		
	$fdata["FieldType"]= 3;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "Bill_ID";
	
		$fdata["FullName"]= "[Bill ID]";
	
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
	
		
				
		
		
		
			$tdataMonth_Billings["Bill ID"]=$fdata;
//	Customer ID
	$fdata = array();
	$fdata["strName"] = "Customer ID";
	$fdata["ownerTable"] = "dbo.Month Billings";
	$fdata["Label"]=GetFieldLabel("dbo_Month_Billings","Customer_ID"); 
	
		
		
	$fdata["FieldType"]= 3;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "Customer_ID";
	
		$fdata["FullName"]= "[Customer ID]";
	
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
	
		
				
		
		
		
			$tdataMonth_Billings["Customer ID"]=$fdata;
//	Bill Month
	$fdata = array();
	$fdata["strName"] = "Bill Month";
	$fdata["ownerTable"] = "dbo.Month Billings";
	$fdata["Label"]=GetFieldLabel("dbo_Month_Billings","Bill_Month"); 
	
		
		
	$fdata["FieldType"]= 202;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "Bill_Month";
	
		$fdata["FullName"]= "[Bill Month]";
	
		
		
		
		
		
				$fdata["Index"]= 3;
				$fdata["EditParams"]="";
			$fdata["EditParams"].= " maxlength=10";
		
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
	
		
				
		
		
		
			$tdataMonth_Billings["Bill Month"]=$fdata;
//	Previous Readings
	$fdata = array();
	$fdata["strName"] = "Previous Readings";
	$fdata["ownerTable"] = "dbo.Month Billings";
	$fdata["Label"]=GetFieldLabel("dbo_Month_Billings","Previous_Readings"); 
	
		
		
	$fdata["FieldType"]= 3;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "Previous_Readings";
	
		$fdata["FullName"]= "[Previous Readings]";
	
		$fdata["IsRequired"]=true; 
	
		
		
		
		
				$fdata["Index"]= 4;
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
	
		
				
		
		
		
			$tdataMonth_Billings["Previous Readings"]=$fdata;
//	Currunt Readings
	$fdata = array();
	$fdata["strName"] = "Currunt Readings";
	$fdata["ownerTable"] = "dbo.Month Billings";
	$fdata["Label"]=GetFieldLabel("dbo_Month_Billings","Currunt_Readings"); 
	
		
		
	$fdata["FieldType"]= 3;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "Currunt_Readings";
	
		$fdata["FullName"]= "[Currunt Readings]";
	
		$fdata["IsRequired"]=true; 
	
		
		
		
		
				$fdata["Index"]= 5;
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
	
		
				
		
		
		
			$tdataMonth_Billings["Currunt Readings"]=$fdata;
//	Unit Consumed
	$fdata = array();
	$fdata["strName"] = "Unit Consumed";
	$fdata["ownerTable"] = "dbo.Month Billings";
	$fdata["Label"]=GetFieldLabel("dbo_Month_Billings","Unit_Consumed"); 
	
		
		
	$fdata["FieldType"]= 3;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "Unit_Consumed";
	
		$fdata["FullName"]= "[Unit Consumed]";
	
		$fdata["IsRequired"]=true; 
	
		
		
		
		
				$fdata["Index"]= 6;
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
	
		
				
		
		
		
			$tdataMonth_Billings["Unit Consumed"]=$fdata;
//	Bill Amount
	$fdata = array();
	$fdata["strName"] = "Bill Amount";
	$fdata["ownerTable"] = "dbo.Month Billings";
	$fdata["Label"]=GetFieldLabel("dbo_Month_Billings","Bill_Amount"); 
	
		
		
	$fdata["FieldType"]= 3;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "Bill_Amount";
	
		$fdata["FullName"]= "[Bill Amount]";
	
		$fdata["IsRequired"]=true; 
	
		
		
		
		
				$fdata["Index"]= 7;
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
	
		
				
		
		
		
			$tdataMonth_Billings["Bill Amount"]=$fdata;
//	Due Date
	$fdata = array();
	$fdata["strName"] = "Due Date";
	$fdata["ownerTable"] = "dbo.Month Billings";
	$fdata["Label"]=GetFieldLabel("dbo_Month_Billings","Due_Date"); 
	
		
		
	$fdata["FieldType"]= 202;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "Due_Date";
	
		$fdata["FullName"]= "[Due Date]";
	
		
		
		
		
		
				$fdata["Index"]= 8;
				$fdata["EditParams"]="";
			$fdata["EditParams"].= " maxlength=10";
		
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
	
		
				
		
		
		
			$tdataMonth_Billings["Due Date"]=$fdata;


	
$tables_data["dbo.Month Billings"]=&$tdataMonth_Billings;
$field_labels["dbo_Month_Billings"] = &$fieldLabelsMonth_Billings;
$fieldToolTips["dbo.Month Billings"] = &$fieldToolTipsMonth_Billings;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dbo.Month Billings"] = array();

	
// tables which are master tables for current table (detail)
$masterTablesData["dbo.Month Billings"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Month_Billings()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "[Bill ID],   [Customer ID],   [Bill Month],   [Previous Readings],   [Currunt Readings],   [Unit Consumed],   [Bill Amount],   [Due Date]";
$proto0["m_strFrom"] = "FROM dbo.[Month Billings]";
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
	"m_strName" => "Bill ID",
	"m_strTable" => "dbo.Month Billings"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Customer ID",
	"m_strTable" => "dbo.Month Billings"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Bill Month",
	"m_strTable" => "dbo.Month Billings"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Previous Readings",
	"m_strTable" => "dbo.Month Billings"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Currunt Readings",
	"m_strTable" => "dbo.Month Billings"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Unit Consumed",
	"m_strTable" => "dbo.Month Billings"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "Bill Amount",
	"m_strTable" => "dbo.Month Billings"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "Due Date",
	"m_strTable" => "dbo.Month Billings"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto21=array();
$proto21["m_link"] = "SQLL_MAIN";
			$proto22=array();
$proto22["m_strName"] = "dbo.Month Billings";
$proto22["m_columns"] = array();
$proto22["m_columns"][] = "Bill ID";
$proto22["m_columns"][] = "Customer ID";
$proto22["m_columns"][] = "Bill Month";
$proto22["m_columns"][] = "Previous Readings";
$proto22["m_columns"][] = "Currunt Readings";
$proto22["m_columns"][] = "Unit Consumed";
$proto22["m_columns"][] = "Bill Amount";
$proto22["m_columns"][] = "Due Date";
$obj = new SQLTable($proto22);

$proto21["m_table"] = $obj;
$proto21["m_alias"] = "";
$proto23=array();
$proto23["m_sql"] = "";
$proto23["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto23["m_column"]=$obj;
$proto23["m_contained"] = array();
$proto23["m_strCase"] = "";
$proto23["m_havingmode"] = "0";
$proto23["m_inBrackets"] = "0";
$proto23["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto23);

$proto21["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto21);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

return $obj;
}
$queryData_Month_Billings = createSqlQuery_Month_Billings();
$tdataMonth_Billings[".sqlquery"] = $queryData_Month_Billings;



$tableEvents["dbo.Month Billings"] = new eventsBase;
$tdataMonth_Billings[".hasEvents"] = false;

?>
