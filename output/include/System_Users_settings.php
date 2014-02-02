<?php
$tdataSystem_Users=array();
	$tdataSystem_Users[".NumberOfChars"]=80; 
	$tdataSystem_Users[".ShortName"]="System_Users";
	$tdataSystem_Users[".OwnerID"]="";
	$tdataSystem_Users[".OriginalTable"]="dbo.System Users";


	
//	field labels
$fieldLabelsSystem_Users = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsSystem_Users["English"]=array();
	$fieldToolTipsSystem_Users["English"]=array();
	$fieldLabelsSystem_Users["English"]["UserID"] = "User ID";
	$fieldToolTipsSystem_Users["English"]["UserID"] = "";
	$fieldLabelsSystem_Users["English"]["Password"] = "Password";
	$fieldToolTipsSystem_Users["English"]["Password"] = "";
	$fieldLabelsSystem_Users["English"]["User_Name"] = "User Name";
	$fieldToolTipsSystem_Users["English"]["User Name"] = "";
	$fieldLabelsSystem_Users["English"]["Role"] = "Role";
	$fieldToolTipsSystem_Users["English"]["Role"] = "";
	if (count($fieldToolTipsSystem_Users["English"])){
		$tdataSystem_Users[".isUseToolTips"]=true;
	}
}
if(mlang_getcurrentlang()=="Urdu")
{
	$fieldLabelsSystem_Users["Urdu"]=array();
	$fieldToolTipsSystem_Users["Urdu"]=array();
	$fieldLabelsSystem_Users["Urdu"]["UserID"] = "User ID";
	$fieldToolTipsSystem_Users["Urdu"]["UserID"] = "";
	$fieldLabelsSystem_Users["Urdu"]["Password"] = "Password";
	$fieldToolTipsSystem_Users["Urdu"]["Password"] = "";
	$fieldLabelsSystem_Users["Urdu"]["User_Name"] = "User Name";
	$fieldToolTipsSystem_Users["Urdu"]["User Name"] = "";
	$fieldLabelsSystem_Users["Urdu"]["Role"] = "Role";
	$fieldToolTipsSystem_Users["Urdu"]["Role"] = "";
	if (count($fieldToolTipsSystem_Users["Urdu"])){
		$tdataSystem_Users[".isUseToolTips"]=true;
	}
}


	
	$tdataSystem_Users[".NCSearch"]=true;

	

$tdataSystem_Users[".shortTableName"] = "System_Users";
$tdataSystem_Users[".nSecOptions"] = 0;
$tdataSystem_Users[".recsPerRowList"] = 1;	
$tdataSystem_Users[".tableGroupBy"] = "0";
$tdataSystem_Users[".mainTableOwnerID"] = "";
$tdataSystem_Users[".moveNext"] = 1;




$tdataSystem_Users[".showAddInPopup"] = false;

$tdataSystem_Users[".showEditInPopup"] = false;

$tdataSystem_Users[".showViewInPopup"] = false;


$tdataSystem_Users[".fieldsForRegister"] = array();

$tdataSystem_Users[".listAjax"] = false;

	$tdataSystem_Users[".audit"] = false;

	$tdataSystem_Users[".locking"] = false;
	
$tdataSystem_Users[".listIcons"] = true;
$tdataSystem_Users[".edit"] = true;
$tdataSystem_Users[".inlineEdit"] = true;
$tdataSystem_Users[".view"] = true;

$tdataSystem_Users[".exportTo"] = true;

$tdataSystem_Users[".printFriendly"] = true;

$tdataSystem_Users[".delete"] = true;

$tdataSystem_Users[".showSimpleSearchOptions"] = false;

$tdataSystem_Users[".showSearchPanel"] = true;


$tdataSystem_Users[".isUseAjaxSuggest"] = true;

$tdataSystem_Users[".rowHighlite"] = true;


// button handlers file names

$tdataSystem_Users[".addPageEvents"] = false;

$tdataSystem_Users[".arrKeyFields"][] = "UserID";

// use datepicker for search panel
$tdataSystem_Users[".isUseCalendarForSearch"] = false;

// use timepicker for search panel
$tdataSystem_Users[".isUseTimeForSearch"] = false;

$tdataSystem_Users[".isUseiBox"] = false;


	

	


$tdataSystem_Users[".isUseInlineAdd"] = true;

$tdataSystem_Users[".isUseInlineEdit"] = true;
$tdataSystem_Users[".isUseInlineJs"] = $tdataSystem_Users[".isUseInlineAdd"] || $tdataSystem_Users[".isUseInlineEdit"];

$tdataSystem_Users[".allSearchFields"] = array();

$tdataSystem_Users[".globSearchFields"][] = "UserID";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("UserID", $tdataSystem_Users[".allSearchFields"]))
{
	$tdataSystem_Users[".allSearchFields"][] = "UserID";	
}
$tdataSystem_Users[".globSearchFields"][] = "Password";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Password", $tdataSystem_Users[".allSearchFields"]))
{
	$tdataSystem_Users[".allSearchFields"][] = "Password";	
}
$tdataSystem_Users[".globSearchFields"][] = "User Name";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("User Name", $tdataSystem_Users[".allSearchFields"]))
{
	$tdataSystem_Users[".allSearchFields"][] = "User Name";	
}
$tdataSystem_Users[".globSearchFields"][] = "Role";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Role", $tdataSystem_Users[".allSearchFields"]))
{
	$tdataSystem_Users[".allSearchFields"][] = "Role";	
}


$tdataSystem_Users[".googleLikeFields"][] = "UserID";
$tdataSystem_Users[".googleLikeFields"][] = "Password";
$tdataSystem_Users[".googleLikeFields"][] = "User Name";
$tdataSystem_Users[".googleLikeFields"][] = "Role";



$tdataSystem_Users[".advSearchFields"][] = "UserID";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("UserID", $tdataSystem_Users[".allSearchFields"])) 
{
	$tdataSystem_Users[".allSearchFields"][] = "UserID";	
}
$tdataSystem_Users[".advSearchFields"][] = "Password";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Password", $tdataSystem_Users[".allSearchFields"])) 
{
	$tdataSystem_Users[".allSearchFields"][] = "Password";	
}
$tdataSystem_Users[".advSearchFields"][] = "User Name";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("User Name", $tdataSystem_Users[".allSearchFields"])) 
{
	$tdataSystem_Users[".allSearchFields"][] = "User Name";	
}
$tdataSystem_Users[".advSearchFields"][] = "Role";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Role", $tdataSystem_Users[".allSearchFields"])) 
{
	$tdataSystem_Users[".allSearchFields"][] = "Role";	
}

$tdataSystem_Users[".isTableType"] = "list";


	



// Access doesn't support subqueries from the same table as main
$tdataSystem_Users[".subQueriesSupAccess"] = true;





$tdataSystem_Users[".pageSize"] = 20;

$gstrOrderBy = "";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy = "order by ".$gstrOrderBy;
$tdataSystem_Users[".strOrderBy"] = $gstrOrderBy;
	
$tdataSystem_Users[".orderindexes"] = array();

$tdataSystem_Users[".sqlHead"] = "SELECT UserID,   Password,   [User Name],   [Role]";
$tdataSystem_Users[".sqlFrom"] = "FROM dbo.[System Users]";
$tdataSystem_Users[".sqlWhereExpr"] = "";
$tdataSystem_Users[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataSystem_Users[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataSystem_Users[".arrGroupsPerPage"] = $arrGPP;

	$tableKeys = array();
	$tableKeys[] = "UserID";
	$tdataSystem_Users[".Keys"] = $tableKeys;

//	UserID
	$fdata = array();
	$fdata["strName"] = "UserID";
	$fdata["ownerTable"] = "dbo.System Users";
	$fdata["Label"]=GetFieldLabel("dbo_System_Users","UserID"); 
	
		
		
	$fdata["FieldType"]= 202;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "UserID";
	
		$fdata["FullName"]= "UserID";
	
		
		
		
		
		
				$fdata["Index"]= 1;
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
	
		
				
		
		
		
			$tdataSystem_Users["UserID"]=$fdata;
//	Password
	$fdata = array();
	$fdata["strName"] = "Password";
	$fdata["ownerTable"] = "dbo.System Users";
	$fdata["Label"]=GetFieldLabel("dbo_System_Users","Password"); 
	
		
		
	$fdata["FieldType"]= 202;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "Password";
	
		$fdata["FullName"]= "Password";
	
		
		
		
		
		
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
	
		
				
		
		
		
			$tdataSystem_Users["Password"]=$fdata;
//	User Name
	$fdata = array();
	$fdata["strName"] = "User Name";
	$fdata["ownerTable"] = "dbo.System Users";
	$fdata["Label"]=GetFieldLabel("dbo_System_Users","User_Name"); 
	
		
		
	$fdata["FieldType"]= 202;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "User_Name";
	
		$fdata["FullName"]= "[User Name]";
	
		
		
		
		
		
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
	
		
				
		
		
		
			$tdataSystem_Users["User Name"]=$fdata;
//	Role
	$fdata = array();
	$fdata["strName"] = "Role";
	$fdata["ownerTable"] = "dbo.System Users";
	$fdata["Label"]=GetFieldLabel("dbo_System_Users","Role"); 
	
		
		
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
				$fdata["LookupTable"]="dbo.User Roles";
	$fdata["LookupOrderBy"]="";
																			
					
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "Role";
	
		$fdata["FullName"]= "[Role]";
	
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
	
		
				
		
		
		
			$tdataSystem_Users["Role"]=$fdata;


	
$tables_data["dbo.System Users"]=&$tdataSystem_Users;
$field_labels["dbo_System_Users"] = &$fieldLabelsSystem_Users;
$fieldToolTips["dbo.System Users"] = &$fieldToolTipsSystem_Users;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dbo.System Users"] = array();

	
// tables which are master tables for current table (detail)
$masterTablesData["dbo.System Users"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="dbo.User Roles";
	$masterTablesData["dbo.System Users"][$mIndex] = array(
		  "mDataSourceTable"=>"dbo.User Roles"
		, "mOriginalTable" => $strOriginalDetailsTable
		, "mShortTable" => "User_Roles"
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
		$masterTablesData["dbo.System Users"][$mIndex]["masterKeys"][]="Code";
		$masterTablesData["dbo.System Users"][$mIndex]["detailKeys"][]="Role";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_System_Users()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "UserID,   Password,   [User Name],   [Role]";
$proto0["m_strFrom"] = "FROM dbo.[System Users]";
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
	"m_strName" => "UserID",
	"m_strTable" => "dbo.System Users"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Password",
	"m_strTable" => "dbo.System Users"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "User Name",
	"m_strTable" => "dbo.System Users"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Role",
	"m_strTable" => "dbo.System Users"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "dbo.System Users";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "UserID";
$proto14["m_columns"][] = "Password";
$proto14["m_columns"][] = "User Name";
$proto14["m_columns"][] = "Role";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_alias"] = "";
$proto15=array();
$proto15["m_sql"] = "";
$proto15["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto15["m_column"]=$obj;
$proto15["m_contained"] = array();
$proto15["m_strCase"] = "";
$proto15["m_havingmode"] = "0";
$proto15["m_inBrackets"] = "0";
$proto15["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto15);

$proto13["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto13);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

return $obj;
}
$queryData_System_Users = createSqlQuery_System_Users();
$tdataSystem_Users[".sqlquery"] = $queryData_System_Users;



$tableEvents["dbo.System Users"] = new eventsBase;
$tdataSystem_Users[".hasEvents"] = false;

?>
