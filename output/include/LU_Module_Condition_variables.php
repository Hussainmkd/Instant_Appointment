<?php
$strTableName="dbo.LU_Module Condition";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="dbo.LU_Module Condition";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$g_orderindexes=array();
$gsqlHead="SELECT Code,   [Condition]";
$gsqlFrom="FROM dbo.[LU_Module Condition]";
$gsqlWhereExpr="";
$gsqlTail="";

include_once(getabspath("include/LU_Module_Condition_settings.php"));

// alias for 'SQLQuery' object
$gQuery = &$queryData_LU_Module_Condition;
$eventObj = &$tableEvents["dbo.LU_Module Condition"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = gSQLWhere("");


?>