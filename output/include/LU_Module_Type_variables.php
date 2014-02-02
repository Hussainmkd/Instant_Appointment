<?php
$strTableName="dbo.LU_Module Type";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="dbo.LU_Module Type";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$g_orderindexes=array();
$gsqlHead="SELECT Code,   [Module Type]";
$gsqlFrom="FROM dbo.[LU_Module Type]";
$gsqlWhereExpr="";
$gsqlTail="";

include_once(getabspath("include/LU_Module_Type_settings.php"));

// alias for 'SQLQuery' object
$gQuery = &$queryData_LU_Module_Type;
$eventObj = &$tableEvents["dbo.LU_Module Type"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = gSQLWhere("");


?>