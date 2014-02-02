<?php
$dalTabledbo_Readings = array();
$dalTabledbo_Readings["Record ID"] = array("type"=>3,"varname"=>"Record_ID");
$dalTabledbo_Readings["Module ID"] = array("type"=>3,"varname"=>"Module_ID");
$dalTabledbo_Readings["Voltage Red"] = array("type"=>202,"varname"=>"Voltage_Red");
$dalTabledbo_Readings["Voltage Blue"] = array("type"=>202,"varname"=>"Voltage_Blue");
$dalTabledbo_Readings["Voltage Yellow"] = array("type"=>202,"varname"=>"Voltage_Yellow");
$dalTabledbo_Readings["Currunt Red"] = array("type"=>202,"varname"=>"Currunt_Red");
$dalTabledbo_Readings["Currunt Blue"] = array("type"=>202,"varname"=>"Currunt_Blue");
$dalTabledbo_Readings["Currunt Yellow"] = array("type"=>202,"varname"=>"Currunt_Yellow");
$dalTabledbo_Readings["PF Red"] = array("type"=>202,"varname"=>"PF_Red");
$dalTabledbo_Readings["PF Blue"] = array("type"=>202,"varname"=>"PF_Blue");
$dalTabledbo_Readings["PF Yellow"] = array("type"=>202,"varname"=>"PF_Yellow");
$dalTabledbo_Readings["Peak Power"] = array("type"=>202,"varname"=>"Peak_Power");
$dalTabledbo_Readings["Date Time"] = array("type"=>135,"varname"=>"Date_Time");
$dalTabledbo_Readings["IsSync"] = array("type"=>11,"varname"=>"IsSync");
$dalTabledbo_Readings["Currunt Readings"] = array("type"=>3,"varname"=>"Currunt_Readings");
	$dalTabledbo_Readings["Record ID"]["key"]=true;
$dal_info["dbo.Readings"]=&$dalTabledbo_Readings;

?>