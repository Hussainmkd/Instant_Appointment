<?php
$strTableName="dbo.LU_Anomaly Type";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="dbo.LU_Anomaly Type";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$g_orderindexes=array();
$gsqlHead="SELECT Code,   [Tamper Type]";
$gsqlFrom="FROM dbo.[LU_Anomaly Type]";
$gsqlWhereExpr="";
$gsqlTail="";

include_once(getabspath("include/LU_Anomaly_Type_settings.php"));

// alias for 'SQLQuery' object
$gQuery = &$queryData_LU_Anomaly_Type;
$eventObj = &$tableEvents["dbo.LU_Anomaly Type"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = gSQLWhere("");


?>