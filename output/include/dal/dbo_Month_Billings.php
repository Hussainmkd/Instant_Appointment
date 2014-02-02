<?php
$dalTabledbo_Month_Billings = array();
$dalTabledbo_Month_Billings["Bill ID"] = array("type"=>3,"varname"=>"Bill_ID");
$dalTabledbo_Month_Billings["Customer ID"] = array("type"=>3,"varname"=>"Customer_ID");
$dalTabledbo_Month_Billings["Bill Month"] = array("type"=>202,"varname"=>"Bill_Month");
$dalTabledbo_Month_Billings["Previous Readings"] = array("type"=>3,"varname"=>"Previous_Readings");
$dalTabledbo_Month_Billings["Currunt Readings"] = array("type"=>3,"varname"=>"Currunt_Readings");
$dalTabledbo_Month_Billings["Unit Consumed"] = array("type"=>3,"varname"=>"Unit_Consumed");
$dalTabledbo_Month_Billings["Bill Amount"] = array("type"=>3,"varname"=>"Bill_Amount");
$dalTabledbo_Month_Billings["Due Date"] = array("type"=>202,"varname"=>"Due_Date");
	$dalTabledbo_Month_Billings["Bill ID"]["key"]=true;
$dal_info["dbo.Month Billings"]=&$dalTabledbo_Month_Billings;

?>