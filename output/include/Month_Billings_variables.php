<?php
$strTableName="dbo.Month Billings";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="dbo.Month Billings";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$g_orderindexes=array();
$gsqlHead="SELECT [Bill ID],   [Customer ID],   [Bill Month],   [Previous Readings],   [Currunt Readings],   [Unit Consumed],   [Bill Amount],   [Due Date]";
$gsqlFrom="FROM dbo.[Month Billings]";
$gsqlWhereExpr="";
$gsqlTail="";

include_once(getabspath("include/Month_Billings_settings.php"));

// alias for 'SQLQuery' object
$gQuery = &$queryData_Month_Billings;
$eventObj = &$tableEvents["dbo.Month Billings"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = gSQLWhere("");


?>