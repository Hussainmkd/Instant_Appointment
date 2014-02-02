<?php

$version = explode('.', PHP_VERSION);
if($version[0]*10+$version[1]<53)
	set_magic_quotes_runtime(0);

if(@$_SERVER["REQUEST_URI"])
{
	$pinfo=pathinfo($_SERVER["REQUEST_URI"]);
	$dirname = @$pinfo["dirname"];
	$dir = explode("/",$dirname);
	$dirname="";
	foreach($dir as $subdir)
	{
		if($subdir!="")
			$dirname.="/".rawurlencode($subdir);
	}
	if($dirname!="")
	{
//		@session_set_cookie_params(0,$dirname."/");
	}
}
@session_cache_limiter("none");
@session_start();

error_reporting(E_ALL ^ E_NOTICE);

/// include php specific code
include("phpfunctions.php");


$host="(local)";
$user="sa";
$pwd="whoknows?";
$dbname="Smart_Grid_RDC";





$cCharset = "windows-1256";
$cCodepage = 1256;
$cMySQLNames = "";
$gLoadSearchControls = 30;

$projectPath = '';
$useOldMysqlLib = (bool)0;

header("Content-Type: text/html; charset=".$cCharset);


include("locale.php");
include("events.php");
include("commonfunctions.php");
include("dbconnection.php");

include("dbfunctions.php");
include("dal.php");
include("appsettings.php");

set_error_handler("runner_error_handler");


include("languages.php");

// json support
$useUTF8 = false;
if(!function_exists('json_encode') || !$useUTF8)
{
	include(getabspath("classes/json.php"));
	$GLOBALS['JSON_OBJECT'] = new Services_JSON(SERVICES_JSON_LOOSE_TYPE, $useUTF8);
               
    function my_json_encode($value){
    	return $GLOBALS['JSON_OBJECT']->encode($value);
    }
   
    function my_json_decode($value){
        return $GLOBALS['JSON_OBJECT']->decode($value);
	}
}
else
{
	function my_json_encode($value){
    	return json_encode($value);
    }
   
    function my_json_decode($value){
        return json_decode($value,true);
	}
}

?>
