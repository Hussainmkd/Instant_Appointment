<?php
$tdataReadings=array();
	$tdataReadings[".NumberOfChars"]=80; 
	$tdataReadings[".ShortName"]="Readings";
	$tdataReadings[".OwnerID"]="";
	$tdataReadings[".OriginalTable"]="dbo.Readings";


	
//	field labels
$fieldLabelsReadings = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsReadings["English"]=array();
	$fieldToolTipsReadings["English"]=array();
	$fieldLabelsReadings["English"]["Record_ID"] = "Record ID";
	$fieldToolTipsReadings["English"]["Record ID"] = "";
	$fieldLabelsReadings["English"]["Module_ID"] = "Module ID";
	$fieldToolTipsReadings["English"]["Module ID"] = "";
	$fieldLabelsReadings["English"]["Voltage_Red"] = "Voltage Red";
	$fieldToolTipsReadings["English"]["Voltage Red"] = "";
	$fieldLabelsReadings["English"]["Voltage_Blue"] = "Voltage Blue";
	$fieldToolTipsReadings["English"]["Voltage Blue"] = "";
	$fieldLabelsReadings["English"]["Voltage_Yellow"] = "Voltage Yellow";
	$fieldToolTipsReadings["English"]["Voltage Yellow"] = "";
	$fieldLabelsReadings["English"]["Currunt_Red"] = "Currunt Red";
	$fieldToolTipsReadings["English"]["Currunt Red"] = "";
	$fieldLabelsReadings["English"]["Currunt_Blue"] = "Currunt Blue";
	$fieldToolTipsReadings["English"]["Currunt Blue"] = "";
	$fieldLabelsReadings["English"]["Currunt_Yellow"] = "Currunt Yellow";
	$fieldToolTipsReadings["English"]["Currunt Yellow"] = "";
	$fieldLabelsReadings["English"]["PF_Red"] = "PF Red";
	$fieldToolTipsReadings["English"]["PF Red"] = "";
	$fieldLabelsReadings["English"]["PF_Blue"] = "PF Blue";
	$fieldToolTipsReadings["English"]["PF Blue"] = "";
	$fieldLabelsReadings["English"]["PF_Yellow"] = "PF Yellow";
	$fieldToolTipsReadings["English"]["PF Yellow"] = "";
	$fieldLabelsReadings["English"]["Peak_Power"] = "Peak Power";
	$fieldToolTipsReadings["English"]["Peak Power"] = "";
	$fieldLabelsReadings["English"]["Date_Time"] = "Date Time";
	$fieldToolTipsReadings["English"]["Date Time"] = "";
	$fieldLabelsReadings["English"]["IsSync"] = "Is Sync";
	$fieldToolTipsReadings["English"]["IsSync"] = "";
	$fieldLabelsReadings["English"]["Currunt_Readings"] = "Currunt Readings";
	$fieldToolTipsReadings["English"]["Currunt Readings"] = "";
	if (count($fieldToolTipsReadings["English"])){
		$tdataReadings[".isUseToolTips"]=true;
	}
}
if(mlang_getcurrentlang()=="Urdu")
{
	$fieldLabelsReadings["Urdu"]=array();
	$fieldToolTipsReadings["Urdu"]=array();
	$fieldLabelsReadings["Urdu"]["Record_ID"] = "Record ID";
	$fieldToolTipsReadings["Urdu"]["Record ID"] = "";
	$fieldLabelsReadings["Urdu"]["Module_ID"] = "Module ID";
	$fieldToolTipsReadings["Urdu"]["Module ID"] = "";
	$fieldLabelsReadings["Urdu"]["Voltage_Red"] = "Voltage Red";
	$fieldToolTipsReadings["Urdu"]["Voltage Red"] = "";
	$fieldLabelsReadings["Urdu"]["Voltage_Blue"] = "Voltage Blue";
	$fieldToolTipsReadings["Urdu"]["Voltage Blue"] = "";
	$fieldLabelsReadings["Urdu"]["Voltage_Yellow"] = "Voltage Yellow";
	$fieldToolTipsReadings["Urdu"]["Voltage Yellow"] = "";
	$fieldLabelsReadings["Urdu"]["Currunt_Red"] = "Currunt Red";
	$fieldToolTipsReadings["Urdu"]["Currunt Red"] = "";
	$fieldLabelsReadings["Urdu"]["Currunt_Blue"] = "Currunt Blue";
	$fieldToolTipsReadings["Urdu"]["Currunt Blue"] = "";
	$fieldLabelsReadings["Urdu"]["Currunt_Yellow"] = "Currunt Yellow";
	$fieldToolTipsReadings["Urdu"]["Currunt Yellow"] = "";
	$fieldLabelsReadings["Urdu"]["PF_Red"] = "PF Red";
	$fieldToolTipsReadings["Urdu"]["PF Red"] = "";
	$fieldLabelsReadings["Urdu"]["PF_Blue"] = "PF Blue";
	$fieldToolTipsReadings["Urdu"]["PF Blue"] = "";
	$fieldLabelsReadings["Urdu"]["PF_Yellow"] = "PF Yellow";
	$fieldToolTipsReadings["Urdu"]["PF Yellow"] = "";
	$fieldLabelsReadings["Urdu"]["Peak_Power"] = "Peak Power";
	$fieldToolTipsReadings["Urdu"]["Peak Power"] = "";
	$fieldLabelsReadings["Urdu"]["Date_Time"] = "Date Time";
	$fieldToolTipsReadings["Urdu"]["Date Time"] = "";
	$fieldLabelsReadings["Urdu"]["IsSync"] = "Is Sync";
	$fieldToolTipsReadings["Urdu"]["IsSync"] = "";
	$fieldLabelsReadings["Urdu"]["Currunt_Readings"] = "Currunt Readings";
	$fieldToolTipsReadings["Urdu"]["Currunt Readings"] = "";
	if (count($fieldToolTipsReadings["Urdu"])){
		$tdataReadings[".isUseToolTips"]=true;
	}
}


	
	$tdataReadings[".NCSearch"]=true;

	

$tdataReadings[".shortTableName"] = "Readings";
$tdataReadings[".nSecOptions"] = 0;
$tdataReadings[".recsPerRowList"] = 1;	
$tdataReadings[".tableGroupBy"] = "0";
$tdataReadings[".mainTableOwnerID"] = "";
$tdataReadings[".moveNext"] = 1;




$tdataReadings[".showAddInPopup"] = false;

$tdataReadings[".showEditInPopup"] = false;

$tdataReadings[".showViewInPopup"] = false;


$tdataReadings[".fieldsForRegister"] = array();

$tdataReadings[".listAjax"] = false;

	$tdataReadings[".audit"] = false;

	$tdataReadings[".locking"] = false;
	
$tdataReadings[".listIcons"] = true;
$tdataReadings[".edit"] = true;
$tdataReadings[".inlineEdit"] = true;
$tdataReadings[".view"] = true;

$tdataReadings[".exportTo"] = true;

$tdataReadings[".printFriendly"] = true;

$tdataReadings[".delete"] = true;

$tdataReadings[".showSimpleSearchOptions"] = false;

$tdataReadings[".showSearchPanel"] = true;


$tdataReadings[".isUseAjaxSuggest"] = true;

$tdataReadings[".rowHighlite"] = true;


// button handlers file names

$tdataReadings[".addPageEvents"] = false;

$tdataReadings[".arrKeyFields"][] = "Record ID";

// use datepicker for search panel
$tdataReadings[".isUseCalendarForSearch"] = true;

// use timepicker for search panel
$tdataReadings[".isUseTimeForSearch"] = false;

$tdataReadings[".isUseiBox"] = false;


	

	


$tdataReadings[".isUseInlineAdd"] = true;

$tdataReadings[".isUseInlineEdit"] = true;
$tdataReadings[".isUseInlineJs"] = $tdataReadings[".isUseInlineAdd"] || $tdataReadings[".isUseInlineEdit"];

$tdataReadings[".allSearchFields"] = array();

$tdataReadings[".globSearchFields"][] = "Record ID";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Record ID", $tdataReadings[".allSearchFields"]))
{
	$tdataReadings[".allSearchFields"][] = "Record ID";	
}
$tdataReadings[".globSearchFields"][] = "Module ID";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Module ID", $tdataReadings[".allSearchFields"]))
{
	$tdataReadings[".allSearchFields"][] = "Module ID";	
}
$tdataReadings[".globSearchFields"][] = "Voltage Red";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Voltage Red", $tdataReadings[".allSearchFields"]))
{
	$tdataReadings[".allSearchFields"][] = "Voltage Red";	
}
$tdataReadings[".globSearchFields"][] = "Voltage Blue";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Voltage Blue", $tdataReadings[".allSearchFields"]))
{
	$tdataReadings[".allSearchFields"][] = "Voltage Blue";	
}
$tdataReadings[".globSearchFields"][] = "Voltage Yellow";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Voltage Yellow", $tdataReadings[".allSearchFields"]))
{
	$tdataReadings[".allSearchFields"][] = "Voltage Yellow";	
}
$tdataReadings[".globSearchFields"][] = "Currunt Red";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Currunt Red", $tdataReadings[".allSearchFields"]))
{
	$tdataReadings[".allSearchFields"][] = "Currunt Red";	
}
$tdataReadings[".globSearchFields"][] = "Currunt Blue";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Currunt Blue", $tdataReadings[".allSearchFields"]))
{
	$tdataReadings[".allSearchFields"][] = "Currunt Blue";	
}
$tdataReadings[".globSearchFields"][] = "Currunt Yellow";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Currunt Yellow", $tdataReadings[".allSearchFields"]))
{
	$tdataReadings[".allSearchFields"][] = "Currunt Yellow";	
}
$tdataReadings[".globSearchFields"][] = "PF Red";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("PF Red", $tdataReadings[".allSearchFields"]))
{
	$tdataReadings[".allSearchFields"][] = "PF Red";	
}
$tdataReadings[".globSearchFields"][] = "PF Blue";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("PF Blue", $tdataReadings[".allSearchFields"]))
{
	$tdataReadings[".allSearchFields"][] = "PF Blue";	
}
$tdataReadings[".globSearchFields"][] = "PF Yellow";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("PF Yellow", $tdataReadings[".allSearchFields"]))
{
	$tdataReadings[".allSearchFields"][] = "PF Yellow";	
}
$tdataReadings[".globSearchFields"][] = "Peak Power";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Peak Power", $tdataReadings[".allSearchFields"]))
{
	$tdataReadings[".allSearchFields"][] = "Peak Power";	
}
$tdataReadings[".globSearchFields"][] = "Date Time";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Date Time", $tdataReadings[".allSearchFields"]))
{
	$tdataReadings[".allSearchFields"][] = "Date Time";	
}
$tdataReadings[".globSearchFields"][] = "IsSync";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("IsSync", $tdataReadings[".allSearchFields"]))
{
	$tdataReadings[".allSearchFields"][] = "IsSync";	
}
$tdataReadings[".globSearchFields"][] = "Currunt Readings";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Currunt Readings", $tdataReadings[".allSearchFields"]))
{
	$tdataReadings[".allSearchFields"][] = "Currunt Readings";	
}


$tdataReadings[".googleLikeFields"][] = "Record ID";
$tdataReadings[".googleLikeFields"][] = "Module ID";
$tdataReadings[".googleLikeFields"][] = "Voltage Red";
$tdataReadings[".googleLikeFields"][] = "Voltage Blue";
$tdataReadings[".googleLikeFields"][] = "Voltage Yellow";
$tdataReadings[".googleLikeFields"][] = "Currunt Red";
$tdataReadings[".googleLikeFields"][] = "Currunt Blue";
$tdataReadings[".googleLikeFields"][] = "Currunt Yellow";
$tdataReadings[".googleLikeFields"][] = "PF Red";
$tdataReadings[".googleLikeFields"][] = "PF Blue";
$tdataReadings[".googleLikeFields"][] = "PF Yellow";
$tdataReadings[".googleLikeFields"][] = "Peak Power";
$tdataReadings[".googleLikeFields"][] = "Date Time";
$tdataReadings[".googleLikeFields"][] = "IsSync";
$tdataReadings[".googleLikeFields"][] = "Currunt Readings";



$tdataReadings[".advSearchFields"][] = "Record ID";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Record ID", $tdataReadings[".allSearchFields"])) 
{
	$tdataReadings[".allSearchFields"][] = "Record ID";	
}
$tdataReadings[".advSearchFields"][] = "Module ID";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Module ID", $tdataReadings[".allSearchFields"])) 
{
	$tdataReadings[".allSearchFields"][] = "Module ID";	
}
$tdataReadings[".advSearchFields"][] = "Voltage Red";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Voltage Red", $tdataReadings[".allSearchFields"])) 
{
	$tdataReadings[".allSearchFields"][] = "Voltage Red";	
}
$tdataReadings[".advSearchFields"][] = "Voltage Blue";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Voltage Blue", $tdataReadings[".allSearchFields"])) 
{
	$tdataReadings[".allSearchFields"][] = "Voltage Blue";	
}
$tdataReadings[".advSearchFields"][] = "Voltage Yellow";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Voltage Yellow", $tdataReadings[".allSearchFields"])) 
{
	$tdataReadings[".allSearchFields"][] = "Voltage Yellow";	
}
$tdataReadings[".advSearchFields"][] = "Currunt Red";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Currunt Red", $tdataReadings[".allSearchFields"])) 
{
	$tdataReadings[".allSearchFields"][] = "Currunt Red";	
}
$tdataReadings[".advSearchFields"][] = "Currunt Blue";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Currunt Blue", $tdataReadings[".allSearchFields"])) 
{
	$tdataReadings[".allSearchFields"][] = "Currunt Blue";	
}
$tdataReadings[".advSearchFields"][] = "Currunt Yellow";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Currunt Yellow", $tdataReadings[".allSearchFields"])) 
{
	$tdataReadings[".allSearchFields"][] = "Currunt Yellow";	
}
$tdataReadings[".advSearchFields"][] = "PF Red";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("PF Red", $tdataReadings[".allSearchFields"])) 
{
	$tdataReadings[".allSearchFields"][] = "PF Red";	
}
$tdataReadings[".advSearchFields"][] = "PF Blue";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("PF Blue", $tdataReadings[".allSearchFields"])) 
{
	$tdataReadings[".allSearchFields"][] = "PF Blue";	
}
$tdataReadings[".advSearchFields"][] = "PF Yellow";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("PF Yellow", $tdataReadings[".allSearchFields"])) 
{
	$tdataReadings[".allSearchFields"][] = "PF Yellow";	
}
$tdataReadings[".advSearchFields"][] = "Peak Power";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Peak Power", $tdataReadings[".allSearchFields"])) 
{
	$tdataReadings[".allSearchFields"][] = "Peak Power";	
}
$tdataReadings[".advSearchFields"][] = "Date Time";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Date Time", $tdataReadings[".allSearchFields"])) 
{
	$tdataReadings[".allSearchFields"][] = "Date Time";	
}
$tdataReadings[".advSearchFields"][] = "IsSync";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("IsSync", $tdataReadings[".allSearchFields"])) 
{
	$tdataReadings[".allSearchFields"][] = "IsSync";	
}
$tdataReadings[".advSearchFields"][] = "Currunt Readings";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Currunt Readings", $tdataReadings[".allSearchFields"])) 
{
	$tdataReadings[".allSearchFields"][] = "Currunt Readings";	
}

$tdataReadings[".isTableType"] = "list";


	



// Access doesn't support subqueries from the same table as main
$tdataReadings[".subQueriesSupAccess"] = true;





$tdataReadings[".pageSize"] = 20;

$gstrOrderBy = "";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy = "order by ".$gstrOrderBy;
$tdataReadings[".strOrderBy"] = $gstrOrderBy;
	
$tdataReadings[".orderindexes"] = array();

$tdataReadings[".sqlHead"] = "SELECT [Record ID],   [Module ID],   [Voltage Red],   [Voltage Blue],   [Voltage Yellow],   [Currunt Red],   [Currunt Blue],   [Currunt Yellow],   [PF Red],   [PF Blue],   [PF Yellow],   [Peak Power],   [Date Time],   IsSync,   [Currunt Readings]";
$tdataReadings[".sqlFrom"] = "FROM dbo.Readings";
$tdataReadings[".sqlWhereExpr"] = "";
$tdataReadings[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataReadings[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataReadings[".arrGroupsPerPage"] = $arrGPP;

	$tableKeys = array();
	$tableKeys[] = "Record ID";
	$tdataReadings[".Keys"] = $tableKeys;

//	Record ID
	$fdata = array();
	$fdata["strName"] = "Record ID";
	$fdata["ownerTable"] = "dbo.Readings";
	$fdata["Label"]=GetFieldLabel("dbo_Readings","Record_ID"); 
	
		
		
	$fdata["FieldType"]= 3;
	
		$fdata["AutoInc"]=true;
	
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "Record_ID";
	
		$fdata["FullName"]= "[Record ID]";
	
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
	
		
				
		
		
		
			$tdataReadings["Record ID"]=$fdata;
//	Module ID
	$fdata = array();
	$fdata["strName"] = "Module ID";
	$fdata["ownerTable"] = "dbo.Readings";
	$fdata["Label"]=GetFieldLabel("dbo_Readings","Module_ID"); 
	
		
		
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
	
		
				
		
		
		
			$tdataReadings["Module ID"]=$fdata;
//	Voltage Red
	$fdata = array();
	$fdata["strName"] = "Voltage Red";
	$fdata["ownerTable"] = "dbo.Readings";
	$fdata["Label"]=GetFieldLabel("dbo_Readings","Voltage_Red"); 
	
		
		
	$fdata["FieldType"]= 202;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "Voltage_Red";
	
		$fdata["FullName"]= "[Voltage Red]";
	
		
		
		
		
		
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
	
		
				
		
		
		
			$tdataReadings["Voltage Red"]=$fdata;
//	Voltage Blue
	$fdata = array();
	$fdata["strName"] = "Voltage Blue";
	$fdata["ownerTable"] = "dbo.Readings";
	$fdata["Label"]=GetFieldLabel("dbo_Readings","Voltage_Blue"); 
	
		
		
	$fdata["FieldType"]= 202;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "Voltage_Blue";
	
		$fdata["FullName"]= "[Voltage Blue]";
	
		
		
		
		
		
				$fdata["Index"]= 4;
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
	
		
				
		
		
		
			$tdataReadings["Voltage Blue"]=$fdata;
//	Voltage Yellow
	$fdata = array();
	$fdata["strName"] = "Voltage Yellow";
	$fdata["ownerTable"] = "dbo.Readings";
	$fdata["Label"]=GetFieldLabel("dbo_Readings","Voltage_Yellow"); 
	
		
		
	$fdata["FieldType"]= 202;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "Voltage_Yellow";
	
		$fdata["FullName"]= "[Voltage Yellow]";
	
		
		
		
		
		
				$fdata["Index"]= 5;
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
	
		
				
		
		
		
			$tdataReadings["Voltage Yellow"]=$fdata;
//	Currunt Red
	$fdata = array();
	$fdata["strName"] = "Currunt Red";
	$fdata["ownerTable"] = "dbo.Readings";
	$fdata["Label"]=GetFieldLabel("dbo_Readings","Currunt_Red"); 
	
		
		
	$fdata["FieldType"]= 202;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "Currunt_Red";
	
		$fdata["FullName"]= "[Currunt Red]";
	
		
		
		
		
		
				$fdata["Index"]= 6;
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
	
		
				
		
		
		
			$tdataReadings["Currunt Red"]=$fdata;
//	Currunt Blue
	$fdata = array();
	$fdata["strName"] = "Currunt Blue";
	$fdata["ownerTable"] = "dbo.Readings";
	$fdata["Label"]=GetFieldLabel("dbo_Readings","Currunt_Blue"); 
	
		
		
	$fdata["FieldType"]= 202;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "Currunt_Blue";
	
		$fdata["FullName"]= "[Currunt Blue]";
	
		
		
		
		
		
				$fdata["Index"]= 7;
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
	
		
				
		
		
		
			$tdataReadings["Currunt Blue"]=$fdata;
//	Currunt Yellow
	$fdata = array();
	$fdata["strName"] = "Currunt Yellow";
	$fdata["ownerTable"] = "dbo.Readings";
	$fdata["Label"]=GetFieldLabel("dbo_Readings","Currunt_Yellow"); 
	
		
		
	$fdata["FieldType"]= 202;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "Currunt_Yellow";
	
		$fdata["FullName"]= "[Currunt Yellow]";
	
		
		
		
		
		
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
	
		
				
		
		
		
			$tdataReadings["Currunt Yellow"]=$fdata;
//	PF Red
	$fdata = array();
	$fdata["strName"] = "PF Red";
	$fdata["ownerTable"] = "dbo.Readings";
	$fdata["Label"]=GetFieldLabel("dbo_Readings","PF_Red"); 
	
		
		
	$fdata["FieldType"]= 202;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "PF_Red";
	
		$fdata["FullName"]= "[PF Red]";
	
		
		
		
		
		
				$fdata["Index"]= 9;
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
	
		
				
		
		
		
			$tdataReadings["PF Red"]=$fdata;
//	PF Blue
	$fdata = array();
	$fdata["strName"] = "PF Blue";
	$fdata["ownerTable"] = "dbo.Readings";
	$fdata["Label"]=GetFieldLabel("dbo_Readings","PF_Blue"); 
	
		
		
	$fdata["FieldType"]= 202;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "PF_Blue";
	
		$fdata["FullName"]= "[PF Blue]";
	
		
		
		
		
		
				$fdata["Index"]= 10;
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
	
		
				
		
		
		
			$tdataReadings["PF Blue"]=$fdata;
//	PF Yellow
	$fdata = array();
	$fdata["strName"] = "PF Yellow";
	$fdata["ownerTable"] = "dbo.Readings";
	$fdata["Label"]=GetFieldLabel("dbo_Readings","PF_Yellow"); 
	
		
		
	$fdata["FieldType"]= 202;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "PF_Yellow";
	
		$fdata["FullName"]= "[PF Yellow]";
	
		
		
		
		
		
				$fdata["Index"]= 11;
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
	
		
				
		
		
		
			$tdataReadings["PF Yellow"]=$fdata;
//	Peak Power
	$fdata = array();
	$fdata["strName"] = "Peak Power";
	$fdata["ownerTable"] = "dbo.Readings";
	$fdata["Label"]=GetFieldLabel("dbo_Readings","Peak_Power"); 
	
		
		
	$fdata["FieldType"]= 202;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "Peak_Power";
	
		$fdata["FullName"]= "[Peak Power]";
	
		
		
		
		
		
				$fdata["Index"]= 12;
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
	
		
				
		
		
		
			$tdataReadings["Peak Power"]=$fdata;
//	Date Time
	$fdata = array();
	$fdata["strName"] = "Date Time";
	$fdata["ownerTable"] = "dbo.Readings";
	$fdata["Label"]=GetFieldLabel("dbo_Readings","Date_Time"); 
	
		
		
	$fdata["FieldType"]= 135;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Date";
	$fdata["ViewFormat"]= "Short Date";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "Date_Time";
	
		$fdata["FullName"]= "[Date Time]";
	
		
		
		
		
		
				$fdata["Index"]= 13;
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
	
		
				
		
		
		
			$tdataReadings["Date Time"]=$fdata;
//	IsSync
	$fdata = array();
	$fdata["strName"] = "IsSync";
	$fdata["ownerTable"] = "dbo.Readings";
	$fdata["Label"]=GetFieldLabel("dbo_Readings","IsSync"); 
	
		
		
	$fdata["FieldType"]= 11;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Checkbox";
	$fdata["ViewFormat"]= "Checkbox";
	
		
		
		
		
		
	$fdata["GoodName"]= "IsSync";
	
		$fdata["FullName"]= "IsSync";
	
		$fdata["IsRequired"]=true; 
	
		
		
		
		
				$fdata["Index"]= 14;
				
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
	
		
				
		
		
		
			$tdataReadings["IsSync"]=$fdata;
//	Currunt Readings
	$fdata = array();
	$fdata["strName"] = "Currunt Readings";
	$fdata["ownerTable"] = "dbo.Readings";
	$fdata["Label"]=GetFieldLabel("dbo_Readings","Currunt_Readings"); 
	
		
		
	$fdata["FieldType"]= 3;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "Currunt_Readings";
	
		$fdata["FullName"]= "[Currunt Readings]";
	
		$fdata["IsRequired"]=true; 
	
		
		
		
		
				$fdata["Index"]= 15;
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
	
		
				
		
		
		
			$tdataReadings["Currunt Readings"]=$fdata;


	
$tables_data["dbo.Readings"]=&$tdataReadings;
$field_labels["dbo_Readings"] = &$fieldLabelsReadings;
$fieldToolTips["dbo.Readings"] = &$fieldToolTipsReadings;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dbo.Readings"] = array();

	
// tables which are master tables for current table (detail)
$masterTablesData["dbo.Readings"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="dbo.Module";
	$masterTablesData["dbo.Readings"][$mIndex] = array(
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
		$masterTablesData["dbo.Readings"][$mIndex]["masterKeys"][]="ID";
		$masterTablesData["dbo.Readings"][$mIndex]["detailKeys"][]="Module ID";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Readings()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "[Record ID],   [Module ID],   [Voltage Red],   [Voltage Blue],   [Voltage Yellow],   [Currunt Red],   [Currunt Blue],   [Currunt Yellow],   [PF Red],   [PF Blue],   [PF Yellow],   [Peak Power],   [Date Time],   IsSync,   [Currunt Readings]";
$proto0["m_strFrom"] = "FROM dbo.Readings";
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
	"m_strName" => "Record ID",
	"m_strTable" => "dbo.Readings"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Module ID",
	"m_strTable" => "dbo.Readings"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Voltage Red",
	"m_strTable" => "dbo.Readings"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Voltage Blue",
	"m_strTable" => "dbo.Readings"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Voltage Yellow",
	"m_strTable" => "dbo.Readings"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Currunt Red",
	"m_strTable" => "dbo.Readings"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "Currunt Blue",
	"m_strTable" => "dbo.Readings"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "Currunt Yellow",
	"m_strTable" => "dbo.Readings"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "PF Red",
	"m_strTable" => "dbo.Readings"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "PF Blue",
	"m_strTable" => "dbo.Readings"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "PF Yellow",
	"m_strTable" => "dbo.Readings"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "Peak Power",
	"m_strTable" => "dbo.Readings"
));

$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "Date Time",
	"m_strTable" => "dbo.Readings"
));

$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "IsSync",
	"m_strTable" => "dbo.Readings"
));

$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "Currunt Readings",
	"m_strTable" => "dbo.Readings"
));

$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto35=array();
$proto35["m_link"] = "SQLL_MAIN";
			$proto36=array();
$proto36["m_strName"] = "dbo.Readings";
$proto36["m_columns"] = array();
$proto36["m_columns"][] = "Record ID";
$proto36["m_columns"][] = "Module ID";
$proto36["m_columns"][] = "Voltage Red";
$proto36["m_columns"][] = "Voltage Blue";
$proto36["m_columns"][] = "Voltage Yellow";
$proto36["m_columns"][] = "Currunt Red";
$proto36["m_columns"][] = "Currunt Blue";
$proto36["m_columns"][] = "Currunt Yellow";
$proto36["m_columns"][] = "PF Red";
$proto36["m_columns"][] = "PF Blue";
$proto36["m_columns"][] = "PF Yellow";
$proto36["m_columns"][] = "Peak Power";
$proto36["m_columns"][] = "Date Time";
$proto36["m_columns"][] = "IsSync";
$proto36["m_columns"][] = "Currunt Readings";
$obj = new SQLTable($proto36);

$proto35["m_table"] = $obj;
$proto35["m_alias"] = "";
$proto37=array();
$proto37["m_sql"] = "";
$proto37["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto37["m_column"]=$obj;
$proto37["m_contained"] = array();
$proto37["m_strCase"] = "";
$proto37["m_havingmode"] = "0";
$proto37["m_inBrackets"] = "0";
$proto37["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto37);

$proto35["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto35);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

return $obj;
}
$queryData_Readings = createSqlQuery_Readings();
$tdataReadings[".sqlquery"] = $queryData_Readings;



$tableEvents["dbo.Readings"] = new eventsBase;
$tdataReadings[".hasEvents"] = false;

?>
