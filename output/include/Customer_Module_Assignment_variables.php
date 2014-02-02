<?php
$strTableName="dbo.Customer Module Assignment";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="dbo.Customer Module Assignment";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$g_orderindexes=array();
$gsqlHead="SELECT ID,   [Customer ID],   [Module ID]";
$gsqlFrom="FROM dbo.[Customer Module Assignment]";
$gsqlWhereExpr="";
$gsqlTail="";

include_once(getabspath("include/Customer_Module_Assignment_settings.php"));

// alias for 'SQLQuery' object
$gQuery = &$queryData_Customer_Module_Assignment;
$eventObj = &$tableEvents["dbo.Customer Module Assignment"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = gSQLWhere("");


?>