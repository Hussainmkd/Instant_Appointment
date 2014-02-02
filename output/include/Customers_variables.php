<?php
$strTableName="dbo.Customers";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="dbo.Customers";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$g_orderindexes=array();
$gsqlHead="SELECT ID,   Name,   [Father Name],   Address,   Contact,   Location,   [Customer Type]";
$gsqlFrom="FROM dbo.Customers";
$gsqlWhereExpr="";
$gsqlTail="";

include_once(getabspath("include/Customers_settings.php"));

// alias for 'SQLQuery' object
$gQuery = &$queryData_Customers;
$eventObj = &$tableEvents["dbo.Customers"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = gSQLWhere("");


?>