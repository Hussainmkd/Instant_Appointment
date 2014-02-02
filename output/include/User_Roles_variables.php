<?php
$strTableName="dbo.User Roles";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="dbo.User Roles";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$g_orderindexes=array();
$gsqlHead="SELECT Code,   [Role]";
$gsqlFrom="FROM dbo.[User Roles]";
$gsqlWhereExpr="";
$gsqlTail="";

include_once(getabspath("include/User_Roles_settings.php"));

// alias for 'SQLQuery' object
$gQuery = &$queryData_User_Roles;
$eventObj = &$tableEvents["dbo.User Roles"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = gSQLWhere("");


?>