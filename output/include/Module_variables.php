<?php
$strTableName="dbo.Module";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="dbo.Module";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$g_orderindexes=array();
$gsqlHead="SELECT ID,   [Module Type],   [Module Status],   [Module Condition],   [Serial Num],   [Entry Date]";
$gsqlFrom="FROM dbo.[Module]";
$gsqlWhereExpr="";
$gsqlTail="";

include_once(getabspath("include/Module_settings.php"));

// alias for 'SQLQuery' object
$gQuery = &$queryData_Module;
$eventObj = &$tableEvents["dbo.Module"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = gSQLWhere("");


?>