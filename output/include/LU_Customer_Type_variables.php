<?php
$strTableName="dbo.LU_Customer Type";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="dbo.LU_Customer Type";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$g_orderindexes=array();
$gsqlHead="SELECT Code,   [Type]";
$gsqlFrom="FROM dbo.[LU_Customer Type]";
$gsqlWhereExpr="";
$gsqlTail="";

include_once(getabspath("include/LU_Customer_Type_settings.php"));

// alias for 'SQLQuery' object
$gQuery = &$queryData_LU_Customer_Type;
$eventObj = &$tableEvents["dbo.LU_Customer Type"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = gSQLWhere("");


?>