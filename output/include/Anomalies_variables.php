<?php
$strTableName="dbo.Anomalies";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="dbo.Anomalies";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$g_orderindexes=array();
$gsqlHead="SELECT ID,   [Module ID],   [Anomaly Description],   [Anomaly Type],   [Date Time],   [Action Taken]";
$gsqlFrom="FROM dbo.Anomalies";
$gsqlWhereExpr="";
$gsqlTail="";

include_once(getabspath("include/Anomalies_settings.php"));

// alias for 'SQLQuery' object
$gQuery = &$queryData_Anomalies;
$eventObj = &$tableEvents["dbo.Anomalies"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = gSQLWhere("");


?>