<?php
$tdataCustomers=array();
	$tdataCustomers[".NumberOfChars"]=80; 
	$tdataCustomers[".ShortName"]="Customers";
	$tdataCustomers[".OwnerID"]="";
	$tdataCustomers[".OriginalTable"]="dbo.Customers";


	
//	field labels
$fieldLabelsCustomers = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsCustomers["English"]=array();
	$fieldToolTipsCustomers["English"]=array();
	$fieldLabelsCustomers["English"]["ID"] = "ID";
	$fieldToolTipsCustomers["English"]["ID"] = "";
	$fieldLabelsCustomers["English"]["Name"] = "Name";
	$fieldToolTipsCustomers["English"]["Name"] = "";
	$fieldLabelsCustomers["English"]["Father_Name"] = "Father Name";
	$fieldToolTipsCustomers["English"]["Father Name"] = "";
	$fieldLabelsCustomers["English"]["Address"] = "Address";
	$fieldToolTipsCustomers["English"]["Address"] = "";
	$fieldLabelsCustomers["English"]["Contact"] = "Contact";
	$fieldToolTipsCustomers["English"]["Contact"] = "";
	$fieldLabelsCustomers["English"]["Location"] = "Location";
	$fieldToolTipsCustomers["English"]["Location"] = "";
	$fieldLabelsCustomers["English"]["Customer_Type"] = "Customer Type";
	$fieldToolTipsCustomers["English"]["Customer Type"] = "";
	if (count($fieldToolTipsCustomers["English"])){
		$tdataCustomers[".isUseToolTips"]=true;
	}
}
if(mlang_getcurrentlang()=="Urdu")
{
	$fieldLabelsCustomers["Urdu"]=array();
	$fieldToolTipsCustomers["Urdu"]=array();
	$fieldLabelsCustomers["Urdu"]["ID"] = "ID";
	$fieldToolTipsCustomers["Urdu"]["ID"] = "";
	$fieldLabelsCustomers["Urdu"]["Name"] = "Name";
	$fieldToolTipsCustomers["Urdu"]["Name"] = "";
	$fieldLabelsCustomers["Urdu"]["Father_Name"] = "Father Name";
	$fieldToolTipsCustomers["Urdu"]["Father Name"] = "";
	$fieldLabelsCustomers["Urdu"]["Address"] = "Address";
	$fieldToolTipsCustomers["Urdu"]["Address"] = "";
	$fieldLabelsCustomers["Urdu"]["Contact"] = "Contact";
	$fieldToolTipsCustomers["Urdu"]["Contact"] = "";
	$fieldLabelsCustomers["Urdu"]["Location"] = "Location";
	$fieldToolTipsCustomers["Urdu"]["Location"] = "";
	$fieldLabelsCustomers["Urdu"]["Customer_Type"] = "Customer Type";
	$fieldToolTipsCustomers["Urdu"]["Customer Type"] = "";
	if (count($fieldToolTipsCustomers["Urdu"])){
		$tdataCustomers[".isUseToolTips"]=true;
	}
}


	
	$tdataCustomers[".NCSearch"]=true;

	

$tdataCustomers[".shortTableName"] = "Customers";
$tdataCustomers[".nSecOptions"] = 0;
$tdataCustomers[".recsPerRowList"] = 1;	
$tdataCustomers[".tableGroupBy"] = "0";
$tdataCustomers[".mainTableOwnerID"] = "";
$tdataCustomers[".moveNext"] = 1;




$tdataCustomers[".showAddInPopup"] = false;

$tdataCustomers[".showEditInPopup"] = false;

$tdataCustomers[".showViewInPopup"] = false;


$tdataCustomers[".fieldsForRegister"] = array();

$tdataCustomers[".listAjax"] = false;

	$tdataCustomers[".audit"] = false;

	$tdataCustomers[".locking"] = false;
	
$tdataCustomers[".listIcons"] = true;
$tdataCustomers[".edit"] = true;
$tdataCustomers[".inlineEdit"] = true;
$tdataCustomers[".view"] = true;

$tdataCustomers[".exportTo"] = true;

$tdataCustomers[".printFriendly"] = true;

$tdataCustomers[".delete"] = true;

$tdataCustomers[".showSimpleSearchOptions"] = false;

$tdataCustomers[".showSearchPanel"] = true;


$tdataCustomers[".isUseAjaxSuggest"] = true;

$tdataCustomers[".rowHighlite"] = true;


// button handlers file names

$tdataCustomers[".addPageEvents"] = false;

$tdataCustomers[".arrKeyFields"][] = "ID";

// use datepicker for search panel
$tdataCustomers[".isUseCalendarForSearch"] = false;

// use timepicker for search panel
$tdataCustomers[".isUseTimeForSearch"] = false;

$tdataCustomers[".isUseiBox"] = false;


	

	

$tdataCustomers[".useDetailsPreview"] = true;	

$tdataCustomers[".isUseInlineAdd"] = true;

$tdataCustomers[".isUseInlineEdit"] = true;
$tdataCustomers[".isUseInlineJs"] = $tdataCustomers[".isUseInlineAdd"] || $tdataCustomers[".isUseInlineEdit"];

$tdataCustomers[".allSearchFields"] = array();

$tdataCustomers[".globSearchFields"][] = "ID";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("ID", $tdataCustomers[".allSearchFields"]))
{
	$tdataCustomers[".allSearchFields"][] = "ID";	
}
$tdataCustomers[".globSearchFields"][] = "Name";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Name", $tdataCustomers[".allSearchFields"]))
{
	$tdataCustomers[".allSearchFields"][] = "Name";	
}
$tdataCustomers[".globSearchFields"][] = "Father Name";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Father Name", $tdataCustomers[".allSearchFields"]))
{
	$tdataCustomers[".allSearchFields"][] = "Father Name";	
}
$tdataCustomers[".globSearchFields"][] = "Address";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Address", $tdataCustomers[".allSearchFields"]))
{
	$tdataCustomers[".allSearchFields"][] = "Address";	
}
$tdataCustomers[".globSearchFields"][] = "Contact";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Contact", $tdataCustomers[".allSearchFields"]))
{
	$tdataCustomers[".allSearchFields"][] = "Contact";	
}
$tdataCustomers[".globSearchFields"][] = "Location";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Location", $tdataCustomers[".allSearchFields"]))
{
	$tdataCustomers[".allSearchFields"][] = "Location";	
}
$tdataCustomers[".globSearchFields"][] = "Customer Type";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Customer Type", $tdataCustomers[".allSearchFields"]))
{
	$tdataCustomers[".allSearchFields"][] = "Customer Type";	
}


$tdataCustomers[".googleLikeFields"][] = "ID";
$tdataCustomers[".googleLikeFields"][] = "Name";
$tdataCustomers[".googleLikeFields"][] = "Father Name";
$tdataCustomers[".googleLikeFields"][] = "Address";
$tdataCustomers[".googleLikeFields"][] = "Contact";
$tdataCustomers[".googleLikeFields"][] = "Location";
$tdataCustomers[".googleLikeFields"][] = "Customer Type";



$tdataCustomers[".advSearchFields"][] = "ID";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("ID", $tdataCustomers[".allSearchFields"])) 
{
	$tdataCustomers[".allSearchFields"][] = "ID";	
}
$tdataCustomers[".advSearchFields"][] = "Name";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Name", $tdataCustomers[".allSearchFields"])) 
{
	$tdataCustomers[".allSearchFields"][] = "Name";	
}
$tdataCustomers[".advSearchFields"][] = "Father Name";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Father Name", $tdataCustomers[".allSearchFields"])) 
{
	$tdataCustomers[".allSearchFields"][] = "Father Name";	
}
$tdataCustomers[".advSearchFields"][] = "Address";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Address", $tdataCustomers[".allSearchFields"])) 
{
	$tdataCustomers[".allSearchFields"][] = "Address";	
}
$tdataCustomers[".advSearchFields"][] = "Contact";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Contact", $tdataCustomers[".allSearchFields"])) 
{
	$tdataCustomers[".allSearchFields"][] = "Contact";	
}
$tdataCustomers[".advSearchFields"][] = "Location";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Location", $tdataCustomers[".allSearchFields"])) 
{
	$tdataCustomers[".allSearchFields"][] = "Location";	
}
$tdataCustomers[".advSearchFields"][] = "Customer Type";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Customer Type", $tdataCustomers[".allSearchFields"])) 
{
	$tdataCustomers[".allSearchFields"][] = "Customer Type";	
}

$tdataCustomers[".isTableType"] = "list";


	



// Access doesn't support subqueries from the same table as main
$tdataCustomers[".subQueriesSupAccess"] = true;

	



$tdataCustomers[".pageSize"] = 20;

$gstrOrderBy = "";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy = "order by ".$gstrOrderBy;
$tdataCustomers[".strOrderBy"] = $gstrOrderBy;
	
$tdataCustomers[".orderindexes"] = array();

$tdataCustomers[".sqlHead"] = "SELECT ID,   Name,   [Father Name],   Address,   Contact,   Location,   [Customer Type]";
$tdataCustomers[".sqlFrom"] = "FROM dbo.Customers";
$tdataCustomers[".sqlWhereExpr"] = "";
$tdataCustomers[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataCustomers[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataCustomers[".arrGroupsPerPage"] = $arrGPP;

	$tableKeys = array();
	$tableKeys[] = "ID";
	$tdataCustomers[".Keys"] = $tableKeys;

//	ID
	$fdata = array();
	$fdata["strName"] = "ID";
	$fdata["ownerTable"] = "dbo.Customers";
	$fdata["Label"]=GetFieldLabel("dbo_Customers","ID"); 
	
		
		
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
	
		
				
		
		
		
			$tdataCustomers["ID"]=$fdata;
//	Name
	$fdata = array();
	$fdata["strName"] = "Name";
	$fdata["ownerTable"] = "dbo.Customers";
	$fdata["Label"]=GetFieldLabel("dbo_Customers","Name"); 
	
		
		
	$fdata["FieldType"]= 202;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "Name";
	
		$fdata["FullName"]= "Name";
	
		
		
		
		
		
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
	
		
				
		
		
		
			$tdataCustomers["Name"]=$fdata;
//	Father Name
	$fdata = array();
	$fdata["strName"] = "Father Name";
	$fdata["ownerTable"] = "dbo.Customers";
	$fdata["Label"]=GetFieldLabel("dbo_Customers","Father_Name"); 
	
		
		
	$fdata["FieldType"]= 202;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "Father_Name";
	
		$fdata["FullName"]= "[Father Name]";
	
		
		
		
		
		
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
	
		
				
		
		
		
			$tdataCustomers["Father Name"]=$fdata;
//	Address
	$fdata = array();
	$fdata["strName"] = "Address";
	$fdata["ownerTable"] = "dbo.Customers";
	$fdata["Label"]=GetFieldLabel("dbo_Customers","Address"); 
	
		
		
	$fdata["FieldType"]= 202;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "Address";
	
		$fdata["FullName"]= "Address";
	
		
		
		
		
		
				$fdata["Index"]= 4;
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
	
		
				
		
		
		
			$tdataCustomers["Address"]=$fdata;
//	Contact
	$fdata = array();
	$fdata["strName"] = "Contact";
	$fdata["ownerTable"] = "dbo.Customers";
	$fdata["Label"]=GetFieldLabel("dbo_Customers","Contact"); 
	
		
		
	$fdata["FieldType"]= 202;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "Contact";
	
		$fdata["FullName"]= "Contact";
	
		
		
		
		
		
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
	
		
				
		
		
		
			$tdataCustomers["Contact"]=$fdata;
//	Location
	$fdata = array();
	$fdata["strName"] = "Location";
	$fdata["ownerTable"] = "dbo.Customers";
	$fdata["Label"]=GetFieldLabel("dbo_Customers","Location"); 
	
		
		
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
	$fdata["DisplayField"]="Location";
				$fdata["LookupTable"]="dbo.LU_Locations";
	$fdata["LookupOrderBy"]="Code";
																			
					
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "Location";
	
		$fdata["FullName"]= "Location";
	
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
	
		
				
		
		
		
			$tdataCustomers["Location"]=$fdata;
//	Customer Type
	$fdata = array();
	$fdata["strName"] = "Customer Type";
	$fdata["ownerTable"] = "dbo.Customers";
	$fdata["Label"]=GetFieldLabel("dbo_Customers","Customer_Type"); 
	
		
		
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
	$fdata["DisplayField"]="Type";
				$fdata["LookupTable"]="dbo.LU_Customer Type";
	$fdata["LookupOrderBy"]="Code";
																			
					
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "Customer_Type";
	
		$fdata["FullName"]= "[Customer Type]";
	
		$fdata["IsRequired"]=true; 
	
		
		
		
		
				$fdata["Index"]= 7;
				
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
	
		
				
		
		
		
			$tdataCustomers["Customer Type"]=$fdata;


	
$tables_data["dbo.Customers"]=&$tdataCustomers;
$field_labels["dbo_Customers"] = &$fieldLabelsCustomers;
$fieldToolTips["dbo.Customers"] = &$fieldToolTipsCustomers;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dbo.Customers"] = array();
$dIndex = 1-1;
			$strOriginalDetailsTable="dbo.Customer Module Assignment";
	$detailsTablesData["dbo.Customers"][$dIndex] = array(
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
		$detailsTablesData["dbo.Customers"][$dIndex]["masterKeys"][]="ID";
		$detailsTablesData["dbo.Customers"][$dIndex]["detailKeys"][]="Customer ID";


	
// tables which are master tables for current table (detail)
$masterTablesData["dbo.Customers"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="dbo.LU_Customer Type";
	$masterTablesData["dbo.Customers"][$mIndex] = array(
		  "mDataSourceTable"=>"dbo.LU_Customer Type"
		, "mOriginalTable" => $strOriginalDetailsTable
		, "mShortTable" => "LU_Customer_Type"
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
		$masterTablesData["dbo.Customers"][$mIndex]["masterKeys"][]="Code";
		$masterTablesData["dbo.Customers"][$mIndex]["detailKeys"][]="Customer Type";

$mIndex = 2-1;
			$strOriginalDetailsTable="dbo.LU_Locations";
	$masterTablesData["dbo.Customers"][$mIndex] = array(
		  "mDataSourceTable"=>"dbo.LU_Locations"
		, "mOriginalTable" => $strOriginalDetailsTable
		, "mShortTable" => "LU_Locations"
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
		$masterTablesData["dbo.Customers"][$mIndex]["masterKeys"][]="Code";
		$masterTablesData["dbo.Customers"][$mIndex]["detailKeys"][]="Location";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Customers()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,   Name,   [Father Name],   Address,   Contact,   Location,   [Customer Type]";
$proto0["m_strFrom"] = "FROM dbo.Customers";
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
	"m_strTable" => "dbo.Customers"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Name",
	"m_strTable" => "dbo.Customers"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Father Name",
	"m_strTable" => "dbo.Customers"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Address",
	"m_strTable" => "dbo.Customers"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Contact",
	"m_strTable" => "dbo.Customers"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Location",
	"m_strTable" => "dbo.Customers"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "Customer Type",
	"m_strTable" => "dbo.Customers"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "dbo.Customers";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "ID";
$proto20["m_columns"][] = "Name";
$proto20["m_columns"][] = "Father Name";
$proto20["m_columns"][] = "Address";
$proto20["m_columns"][] = "Contact";
$proto20["m_columns"][] = "Location";
$proto20["m_columns"][] = "Customer Type";
$obj = new SQLTable($proto20);

$proto19["m_table"] = $obj;
$proto19["m_alias"] = "";
$proto21=array();
$proto21["m_sql"] = "";
$proto21["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto21["m_column"]=$obj;
$proto21["m_contained"] = array();
$proto21["m_strCase"] = "";
$proto21["m_havingmode"] = "0";
$proto21["m_inBrackets"] = "0";
$proto21["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto21);

$proto19["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto19);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

return $obj;
}
$queryData_Customers = createSqlQuery_Customers();
$tdataCustomers[".sqlquery"] = $queryData_Customers;



$tableEvents["dbo.Customers"] = new eventsBase;
$tdataCustomers[".hasEvents"] = false;

?>
