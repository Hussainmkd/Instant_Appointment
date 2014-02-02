<?php
$strTableName="dbo.Readings";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="dbo.Readings";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$g_orderindexes=array();
$gsqlHead="SELECT [Record ID],   [Module ID],   [Voltage Red],   [Voltage Blue],   [Voltage Yellow],   [Currunt Red],   [Currunt Blue],   [Currunt Yellow],   [PF Red],   [PF Blue],   [PF Yellow],   [Peak Power],   [Date Time],   IsSync,   [Currunt Readings]";
$gsqlFrom="FROM dbo.Readings";
$gsqlWhereExpr="";
$gsqlTail="";

include_once(getabspath("include/Readings_settings.php"));

// alias for 'SQLQuery' object
$gQuery = &$queryData_Readings;
$eventObj = &$tableEvents["dbo.Readings"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = gSQLWhere("");


?>