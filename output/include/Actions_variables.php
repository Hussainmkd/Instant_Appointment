<?php
$strTableName="dbo.Actions";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="dbo.Actions";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$g_orderindexes=array();
$gsqlHead="SELECT Code,   [Action]";
$gsqlFrom="FROM dbo.Actions";
$gsqlWhereExpr="";
$gsqlTail="";

include_once(getabspath("include/Actions_settings.php"));

// alias for 'SQLQuery' object
$gQuery = &$queryData_Actions;
$eventObj = &$tableEvents["dbo.Actions"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = gSQLWhere("");


?>