<?php
$strTableName="dbo.LU_Locations";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="dbo.LU_Locations";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$g_orderindexes=array();
$gsqlHead="SELECT Code,   Location";
$gsqlFrom="FROM dbo.LU_Locations";
$gsqlWhereExpr="";
$gsqlTail="";

include_once(getabspath("include/LU_Locations_settings.php"));

// alias for 'SQLQuery' object
$gQuery = &$queryData_LU_Locations;
$eventObj = &$tableEvents["dbo.LU_Locations"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = gSQLWhere("");


?>