<?php
$strTableName="dbo.LU_Module Status";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="dbo.LU_Module Status";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$g_orderindexes=array();
$gsqlHead="SELECT Code,   Status";
$gsqlFrom="FROM dbo.[LU_Module Status]";
$gsqlWhereExpr="";
$gsqlTail="";

include_once(getabspath("include/LU_Module_Status_settings.php"));

// alias for 'SQLQuery' object
$gQuery = &$queryData_LU_Module_Status;
$eventObj = &$tableEvents["dbo.LU_Module Status"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = gSQLWhere("");


?>