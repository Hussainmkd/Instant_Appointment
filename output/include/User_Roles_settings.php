<?php
$tdataUser_Roles=array();
	$tdataUser_Roles[".NumberOfChars"]=80; 
	$tdataUser_Roles[".ShortName"]="User_Roles";
	$tdataUser_Roles[".OwnerID"]="";
	$tdataUser_Roles[".OriginalTable"]="dbo.User Roles";


	
//	field labels
$fieldLabelsUser_Roles = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsUser_Roles["English"]=array();
	$fieldToolTipsUser_Roles["English"]=array();
	$fieldLabelsUser_Roles["English"]["Code"] = "Code";
	$fieldToolTipsUser_Roles["English"]["Code"] = "";
	$fieldLabelsUser_Roles["English"]["Role"] = "Role";
	$fieldToolTipsUser_Roles["English"]["Role"] = "";
	if (count($fieldToolTipsUser_Roles["English"])){
		$tdataUser_Roles[".isUseToolTips"]=true;
	}
}
if(mlang_getcurrentlang()=="Urdu")
{
	$fieldLabelsUser_Roles["Urdu"]=array();
	$fieldToolTipsUser_Roles["Urdu"]=array();
	$fieldLabelsUser_Roles["Urdu"]["Code"] = "Code";
	$fieldToolTipsUser_Roles["Urdu"]["Code"] = "";
	$fieldLabelsUser_Roles["Urdu"]["Role"] = "Role";
	$fieldToolTipsUser_Roles["Urdu"]["Role"] = "";
	if (count($fieldToolTipsUser_Roles["Urdu"])){
		$tdataUser_Roles[".isUseToolTips"]=true;
	}
}


	
	$tdataUser_Roles[".NCSearch"]=true;

	

$tdataUser_Roles[".shortTableName"] = "User_Roles";
$tdataUser_Roles[".nSecOptions"] = 0;
$tdataUser_Roles[".recsPerRowList"] = 1;	
$tdataUser_Roles[".tableGroupBy"] = "0";
$tdataUser_Roles[".mainTableOwnerID"] = "";
$tdataUser_Roles[".moveNext"] = 1;




$tdataUser_Roles[".showAddInPopup"] = false;

$tdataUser_Roles[".showEditInPopup"] = false;

$tdataUser_Roles[".showViewInPopup"] = false;


$tdataUser_Roles[".fieldsForRegister"] = array();

$tdataUser_Roles[".listAjax"] = false;

	$tdataUser_Roles[".audit"] = false;

	$tdataUser_Roles[".locking"] = false;
	
$tdataUser_Roles[".listIcons"] = true;
$tdataUser_Roles[".edit"] = true;
$tdataUser_Roles[".inlineEdit"] = true;
$tdataUser_Roles[".view"] = true;

$tdataUser_Roles[".exportTo"] = true;

$tdataUser_Roles[".printFriendly"] = true;

$tdataUser_Roles[".delete"] = true;

$tdataUser_Roles[".showSimpleSearchOptions"] = false;

$tdataUser_Roles[".showSearchPanel"] = true;


$tdataUser_Roles[".isUseAjaxSuggest"] = true;

$tdataUser_Roles[".rowHighlite"] = true;


// button handlers file names

$tdataUser_Roles[".addPageEvents"] = false;

$tdataUser_Roles[".arrKeyFields"][] = "Code";

// use datepicker for search panel
$tdataUser_Roles[".isUseCalendarForSearch"] = false;

// use timepicker for search panel
$tdataUser_Roles[".isUseTimeForSearch"] = false;

$tdataUser_Roles[".isUseiBox"] = false;


	

	

$tdataUser_Roles[".useDetailsPreview"] = true;	

$tdataUser_Roles[".isUseInlineAdd"] = true;

$tdataUser_Roles[".isUseInlineEdit"] = true;
$tdataUser_Roles[".isUseInlineJs"] = $tdataUser_Roles[".isUseInlineAdd"] || $tdataUser_Roles[".isUseInlineEdit"];

$tdataUser_Roles[".allSearchFields"] = array();

$tdataUser_Roles[".globSearchFields"][] = "Code";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Code", $tdataUser_Roles[".allSearchFields"]))
{
	$tdataUser_Roles[".allSearchFields"][] = "Code";	
}
$tdataUser_Roles[".globSearchFields"][] = "Role";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Role", $tdataUser_Roles[".allSearchFields"]))
{
	$tdataUser_Roles[".allSearchFields"][] = "Role";	
}


$tdataUser_Roles[".googleLikeFields"][] = "Code";
$tdataUser_Roles[".googleLikeFields"][] = "Role";



$tdataUser_Roles[".advSearchFields"][] = "Code";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Code", $tdataUser_Roles[".allSearchFields"])) 
{
	$tdataUser_Roles[".allSearchFields"][] = "Code";	
}
$tdataUser_Roles[".advSearchFields"][] = "Role";
// do in this way, because combine functions array_unique and array_merge returns array with keys like 1,2, 4 etc
if (!in_array("Role", $tdataUser_Roles[".allSearchFields"])) 
{
	$tdataUser_Roles[".allSearchFields"][] = "Role";	
}

$tdataUser_Roles[".isTableType"] = "list";


	



// Access doesn't support subqueries from the same table as main
$tdataUser_Roles[".subQueriesSupAccess"] = true;

	



$tdataUser_Roles[".pageSize"] = 20;

$gstrOrderBy = "";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy = "order by ".$gstrOrderBy;
$tdataUser_Roles[".strOrderBy"] = $gstrOrderBy;
	
$tdataUser_Roles[".orderindexes"] = array();

$tdataUser_Roles[".sqlHead"] = "SELECT Code,   [Role]";
$tdataUser_Roles[".sqlFrom"] = "FROM dbo.[User Roles]";
$tdataUser_Roles[".sqlWhereExpr"] = "";
$tdataUser_Roles[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataUser_Roles[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataUser_Roles[".arrGroupsPerPage"] = $arrGPP;

	$tableKeys = array();
	$tableKeys[] = "Code";
	$tdataUser_Roles[".Keys"] = $tableKeys;

//	Code
	$fdata = array();
	$fdata["strName"] = "Code";
	$fdata["ownerTable"] = "dbo.User Roles";
	$fdata["Label"]=GetFieldLabel("dbo_User_Roles","Code"); 
	
		
		
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
	
		
				
		
		
		
			$tdataUser_Roles["Code"]=$fdata;
//	Role
	$fdata = array();
	$fdata["strName"] = "Role";
	$fdata["ownerTable"] = "dbo.User Roles";
	$fdata["Label"]=GetFieldLabel("dbo_User_Roles","Role"); 
	
		
		
	$fdata["FieldType"]= 202;
	
		
			$fdata["UseiBox"] = false;
	
	$fdata["EditFormat"]= "Text field";
	$fdata["ViewFormat"]= "";
	
		
		
		
		
		$fdata["NeedEncode"]=true;
	
	$fdata["GoodName"]= "Role";
	
		$fdata["FullName"]= "[Role]";
	
		
		
		
		
		
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
	
		
				
		
		
		
			$tdataUser_Roles["Role"]=$fdata;


	
$tables_data["dbo.User Roles"]=&$tdataUser_Roles;
$field_labels["dbo_User_Roles"] = &$fieldLabelsUser_Roles;
$fieldToolTips["dbo.User Roles"] = &$fieldToolTipsUser_Roles;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dbo.User Roles"] = array();
$dIndex = 1-1;
			$strOriginalDetailsTable="dbo.System Users";
	$detailsTablesData["dbo.User Roles"][$dIndex] = array(
		  "dDataSourceTable"=>"dbo.System Users"
		, "dOriginalTable"=>$strOriginalDetailsTable
		, "dShortTable"=>"System_Users"
		, "masterKeys"=>array()
		, "detailKeys"=>array()
		, "dispChildCount"=> "1"
		, "hideChild"=>"0"
		, "sqlHead"=>"SELECT UserID,   Password,   [User Name],   [Role]"	
		, "sqlFrom"=>"FROM dbo.[System Users]"	
		, "sqlWhere"=>""
		, "sqlTail"=>""
		, "groupBy"=>"0"
		, "previewOnList" => 1
		, "previewOnAdd" => 0
		, "previewOnEdit" => 0
		, "previewOnView" => 0
	);	
		$detailsTablesData["dbo.User Roles"][$dIndex]["masterKeys"][]="Code";
		$detailsTablesData["dbo.User Roles"][$dIndex]["detailKeys"][]="Role";


	
// tables which are master tables for current table (detail)
$masterTablesData["dbo.User Roles"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_User_Roles()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Code,   [Role]";
$proto0["m_strFrom"] = "FROM dbo.[User Roles]";
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
	"m_strTable" => "dbo.User Roles"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Role",
	"m_strTable" => "dbo.User Roles"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "dbo.User Roles";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "Code";
$proto10["m_columns"][] = "Role";
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
$queryData_User_Roles = createSqlQuery_User_Roles();
$tdataUser_Roles[".sqlquery"] = $queryData_User_Roles;



$tableEvents["dbo.User Roles"] = new eventsBase;
$tdataUser_Roles[".hasEvents"] = false;

?>
