<?php
$strTableName="dbo.System Users";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="dbo.System Users";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$g_orderindexes=array();
$gsqlHead="SELECT UserID,   Password,   [User Name],   [Role]";
$gsqlFrom="FROM dbo.[System Users]";
$gsqlWhereExpr="";
$gsqlTail="";

include_once(getabspath("include/System_Users_settings.php"));

// alias for 'SQLQuery' object
$gQuery = &$queryData_System_Users;
$eventObj = &$tableEvents["dbo.System Users"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = gSQLWhere("");


?>