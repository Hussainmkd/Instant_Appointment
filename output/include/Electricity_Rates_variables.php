<?php
$strTableName="dbo.Electricity Rates";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="dbo.Electricity Rates";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$g_orderindexes=array();
$gsqlHead="SELECT Units,   [PerUnit Price]";
$gsqlFrom="FROM dbo.[Electricity Rates]";
$gsqlWhereExpr="";
$gsqlTail="";

include_once(getabspath("include/Electricity_Rates_settings.php"));

// alias for 'SQLQuery' object
$gQuery = &$queryData_Electricity_Rates;
$eventObj = &$tableEvents["dbo.Electricity Rates"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = gSQLWhere("");


?>