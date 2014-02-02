<?php 
include("include/dbcommon.php");

@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

add_nocache_headers();
include("include/Readings_variables.php");
include('include/xtempl.php');
include('classes/addpage.php');

//	check if logged in
if(!@$_SESSION["UserID"] || !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Add"))
{ 
	$_SESSION["MyURL"]=$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
	
	header("Location: login.php?message=expired"); 
	return;
}

if ((sizeof($_POST)==0) && (postvalue('ferror'))){
	if (postvalue("inline")){
		$returnJSON['success'] = false;
		$returnJSON['message'] = mlang_message("INLINE_ERROR");
		$returnJSON['fatalError'] = true;
		echo "<textarea>".htmlspecialchars(my_json_encode($returnJSON))."</textarea>";
		exit();
	}
	else if (postvalue("fly")){
		echo -1;
		exit();
	}
	else {
		$_SESSION["message_add"] = "<< "."Error occurred"." >>";
	}
}

if(isset($_REQUEST['afteradd'])){
	
	header('Location: '.$_SERVER['PHP_SELF']);
	if($eventObj->exists("AfterAdd") && isset($_SESSION['after_add_data'][$_REQUEST['afteradd']])){
	
		$data = $_SESSION['after_add_data'][$_REQUEST['afteradd']];
		$eventObj->AfterAdd($data['avalues'], $data['keys'],$data['inlineadd']);
	
	}
	unset($_SESSION['after_add_data'][$_REQUEST['afteradd']]);
	
	foreach (is_array($_SESSION['after_add_data']) ? $_SESSION['after_add_data'] : array() as $k=>$v){
		if (!is_array($v) or !array_key_exists('time',$v)) {
			unset($_SESSION['after_add_data'][$k]);
			continue;
		}
		if ($v['time'] < time() - 3600){
			unset($_SESSION['after_add_data'][$k]);
		}
	}
	exit;
}

$layout = new TLayout("add2","BoldOrange","MobileOrange");
$layout->blocks["top"] = array();
$layout->containers["add"] = array();

$layout->containers["add"][] = array("name"=>"addheader","block"=>"","substyle"=>2);


$layout->containers["add"][] = array("name"=>"message","block"=>"message_block","substyle"=>1);


$layout->containers["add"][] = array("name"=>"wrapper","block"=>"","substyle"=>1);


$layout->containers["fields"] = array();

$layout->containers["fields"][] = array("name"=>"addfields","block"=>"","substyle"=>1);


$layout->containers["fields"][] = array("name"=>"legend","block"=>"legend","substyle"=>3);


$layout->containers["fields"][] = array("name"=>"addbuttons","block"=>"","substyle"=>2);


$layout->skins["fields"] = "fields";

$layout->skins["add"] = "1";
$layout->blocks["top"][] = "add";
$layout->skins["details"] = "empty";
$layout->blocks["top"][] = "details";$page_layouts["Readings_add"] = $layout;



$filename = "";
$status = "";
$message = "";
$mesClass = "";
$usermessage = "";
$error_happened = false;
$readavalues = false;

$keys = array();
$showValues = array();
$showRawValues = array();
$showFields = array();
$showDetailKeys = array();
$IsSaved = false;
$HaveData = true;
$popUpSave = false;

$sessionPrefix = $strTableName;

$onFly = false;
if(postvalue("onFly"))
	$onFly = true;

if(@$_REQUEST["editType"]=="inline")
	$inlineadd = ADD_INLINE;
elseif(@$_REQUEST["editType"]==ADD_POPUP)
{
	$inlineadd = ADD_POPUP;
	if(@$_POST["a"]=="added" && postvalue("field")=="" && postvalue("category")=="")
		$popUpSave = true;	
}
elseif(@$_REQUEST["editType"]==ADD_MASTER)
	$inlineadd = ADD_MASTER;
elseif($onFly)
{
	$inlineadd = ADD_ONTHEFLY;
	$sessionPrefix = $strTableName."_add";
}
else
	$inlineadd = ADD_SIMPLE;

if($inlineadd == ADD_INLINE)
	$templatefile = "Readings_inline_add.htm";
else
	$templatefile = "Readings_add.htm";

$id = postvalue("id");	
if(intval($id)==0)
	$id = 1;

//If undefined session value for mastet table, but exist post value master table, than take second
//It may be happen only when use dpInline mode on page add
if(!@$_SESSION[$sessionPrefix."_mastertable"] && postvalue("mastertable"))
	$_SESSION[$sessionPrefix."_mastertable"] = postvalue("mastertable");

$xt = new Xtempl();
	
// assign an id		
$xt->assign("id",$id);
	
$auditObj = GetAuditObject($strTableName);

//array of params for classes
$params = array("pageType" => PAGE_ADD,"id" => $id,"mode" => $inlineadd);

////////////////////// data picker
$params["calendar"] = true;

////////////////////// time picker

$params['tName'] = $strTableName;
$params['strOriginalTableName'] = $strOriginalTableName;
$params['xt'] = &$xt;
$params['needSearchClauseObj'] = false;
$params['includes_js'] = $includes_js;
$params['includes_jsreq'] = $includes_jsreq;
$params['includes_css'] = $includes_css;
$params['locale_info'] = $locale_info;
$params['pageAddLikeInline'] = ($inlineadd==ADD_INLINE);
$params['useTabsOnAdd'] = useTabsOnAdd($strTableName);
if($params['useTabsOnAdd'])
	$params['arrAddTabs'] = GetAddTabs($strTableName);
	
$pageObject = new AddPage($params);

//Get detail table keys	
$detailKeys = $pageObject->detailKeysByM;

//Array of fields, which appear on add page
$addFields = $pageObject->getFieldsByPageType();

// add button events if exist
if ($inlineadd==ADD_SIMPLE)
	$pageObject->addButtonHandlers();

$url_page=substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1,12);

//For show detail tables on master page add
if($inlineadd==ADD_SIMPLE || $inlineadd==ADD_MASTER || $inlineadd==ADD_POPUP)
{
	$dpParams = array();
	if($pageObject->isShowDetailTables  && !isMobile())
	{
		$ids = $id;
		$pageObject->jsSettings['tableSettings'][$strTableName]['dpParams'] = array('tableNames'=>$dpParams['strTableNames'], 'ids'=>$dpParams['ids']);
	}
}

//	Before Process event
if($eventObj->exists("BeforeProcessAdd"))
	$eventObj->BeforeProcessAdd($conn);

// proccess captcha
if ($inlineadd==ADD_SIMPLE || $inlineadd==ADD_MASTER || $inlineadd==ADD_POPUP)
	if($pageObject->captchaExists())
		$pageObject->doCaptchaCode();	
	
// insert new record if we have to
if(@$_POST["a"]=="added")
{
	$afilename_values=array();
	$avalues=array();
	$blobfields=array();
//	processing Module ID - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$value = postvalue("value_Module_ID_".$id);
		$type=postvalue("type_Module_ID_".$id);
		if (FieldSubmitted("Module ID_".$id))
		{
				$value=prepare_for_db("Module ID",$value,$type);
		}
		else
			$value=false;
		
		if(!($value===false))
		{
	
	
						if(0 && "Module ID"=="Password" && $url_page=="admin_users_")
				$value=md5($value);
			$avalues["Module ID"]=$value;
		}
		}
//	processibng Module ID - end
//	processing Voltage Red - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$value = postvalue("value_Voltage_Red_".$id);
		$type=postvalue("type_Voltage_Red_".$id);
		if (FieldSubmitted("Voltage Red_".$id))
		{
				$value=prepare_for_db("Voltage Red",$value,$type);
		}
		else
			$value=false;
		
		if(!($value===false))
		{
	
	
						if(0 && "Voltage Red"=="Password" && $url_page=="admin_users_")
				$value=md5($value);
			$avalues["Voltage Red"]=$value;
		}
		}
//	processibng Voltage Red - end
//	processing Voltage Blue - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$value = postvalue("value_Voltage_Blue_".$id);
		$type=postvalue("type_Voltage_Blue_".$id);
		if (FieldSubmitted("Voltage Blue_".$id))
		{
				$value=prepare_for_db("Voltage Blue",$value,$type);
		}
		else
			$value=false;
		
		if(!($value===false))
		{
	
	
						if(0 && "Voltage Blue"=="Password" && $url_page=="admin_users_")
				$value=md5($value);
			$avalues["Voltage Blue"]=$value;
		}
		}
//	processibng Voltage Blue - end
//	processing Voltage Yellow - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$value = postvalue("value_Voltage_Yellow_".$id);
		$type=postvalue("type_Voltage_Yellow_".$id);
		if (FieldSubmitted("Voltage Yellow_".$id))
		{
				$value=prepare_for_db("Voltage Yellow",$value,$type);
		}
		else
			$value=false;
		
		if(!($value===false))
		{
	
	
						if(0 && "Voltage Yellow"=="Password" && $url_page=="admin_users_")
				$value=md5($value);
			$avalues["Voltage Yellow"]=$value;
		}
		}
//	processibng Voltage Yellow - end
//	processing Currunt Red - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$value = postvalue("value_Currunt_Red_".$id);
		$type=postvalue("type_Currunt_Red_".$id);
		if (FieldSubmitted("Currunt Red_".$id))
		{
				$value=prepare_for_db("Currunt Red",$value,$type);
		}
		else
			$value=false;
		
		if(!($value===false))
		{
	
	
						if(0 && "Currunt Red"=="Password" && $url_page=="admin_users_")
				$value=md5($value);
			$avalues["Currunt Red"]=$value;
		}
		}
//	processibng Currunt Red - end
//	processing Currunt Blue - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$value = postvalue("value_Currunt_Blue_".$id);
		$type=postvalue("type_Currunt_Blue_".$id);
		if (FieldSubmitted("Currunt Blue_".$id))
		{
				$value=prepare_for_db("Currunt Blue",$value,$type);
		}
		else
			$value=false;
		
		if(!($value===false))
		{
	
	
						if(0 && "Currunt Blue"=="Password" && $url_page=="admin_users_")
				$value=md5($value);
			$avalues["Currunt Blue"]=$value;
		}
		}
//	processibng Currunt Blue - end
//	processing Currunt Yellow - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$value = postvalue("value_Currunt_Yellow_".$id);
		$type=postvalue("type_Currunt_Yellow_".$id);
		if (FieldSubmitted("Currunt Yellow_".$id))
		{
				$value=prepare_for_db("Currunt Yellow",$value,$type);
		}
		else
			$value=false;
		
		if(!($value===false))
		{
	
	
						if(0 && "Currunt Yellow"=="Password" && $url_page=="admin_users_")
				$value=md5($value);
			$avalues["Currunt Yellow"]=$value;
		}
		}
//	processibng Currunt Yellow - end
//	processing PF Red - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$value = postvalue("value_PF_Red_".$id);
		$type=postvalue("type_PF_Red_".$id);
		if (FieldSubmitted("PF Red_".$id))
		{
				$value=prepare_for_db("PF Red",$value,$type);
		}
		else
			$value=false;
		
		if(!($value===false))
		{
	
	
						if(0 && "PF Red"=="Password" && $url_page=="admin_users_")
				$value=md5($value);
			$avalues["PF Red"]=$value;
		}
		}
//	processibng PF Red - end
//	processing PF Blue - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$value = postvalue("value_PF_Blue_".$id);
		$type=postvalue("type_PF_Blue_".$id);
		if (FieldSubmitted("PF Blue_".$id))
		{
				$value=prepare_for_db("PF Blue",$value,$type);
		}
		else
			$value=false;
		
		if(!($value===false))
		{
	
	
						if(0 && "PF Blue"=="Password" && $url_page=="admin_users_")
				$value=md5($value);
			$avalues["PF Blue"]=$value;
		}
		}
//	processibng PF Blue - end
//	processing PF Yellow - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$value = postvalue("value_PF_Yellow_".$id);
		$type=postvalue("type_PF_Yellow_".$id);
		if (FieldSubmitted("PF Yellow_".$id))
		{
				$value=prepare_for_db("PF Yellow",$value,$type);
		}
		else
			$value=false;
		
		if(!($value===false))
		{
	
	
						if(0 && "PF Yellow"=="Password" && $url_page=="admin_users_")
				$value=md5($value);
			$avalues["PF Yellow"]=$value;
		}
		}
//	processibng PF Yellow - end
//	processing Peak Power - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$value = postvalue("value_Peak_Power_".$id);
		$type=postvalue("type_Peak_Power_".$id);
		if (FieldSubmitted("Peak Power_".$id))
		{
				$value=prepare_for_db("Peak Power",$value,$type);
		}
		else
			$value=false;
		
		if(!($value===false))
		{
	
	
						if(0 && "Peak Power"=="Password" && $url_page=="admin_users_")
				$value=md5($value);
			$avalues["Peak Power"]=$value;
		}
		}
//	processibng Peak Power - end
//	processing Date Time - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$value = postvalue("value_Date_Time_".$id);
		$type=postvalue("type_Date_Time_".$id);
		if (FieldSubmitted("Date Time_".$id))
		{
				$value=prepare_for_db("Date Time",$value,$type);
		}
		else
			$value=false;
		
		if(!($value===false))
		{
	
	
						if(0 && "Date Time"=="Password" && $url_page=="admin_users_")
				$value=md5($value);
			$avalues["Date Time"]=$value;
		}
		}
//	processibng Date Time - end
//	processing IsSync - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$value = postvalue("value_IsSync_".$id);
		$type=postvalue("type_IsSync_".$id);
		if (FieldSubmitted("IsSync_".$id))
		{
				$value=prepare_for_db("IsSync",$value,$type);
		}
		else
			$value=false;
		
		if(!($value===false))
		{
	
	
						if(0 && "IsSync"=="Password" && $url_page=="admin_users_")
				$value=md5($value);
			$avalues["IsSync"]=$value;
		}
		}
//	processibng IsSync - end
//	processing Currunt Readings - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$value = postvalue("value_Currunt_Readings_".$id);
		$type=postvalue("type_Currunt_Readings_".$id);
		if (FieldSubmitted("Currunt Readings_".$id))
		{
				$value=prepare_for_db("Currunt Readings",$value,$type);
		}
		else
			$value=false;
		
		if(!($value===false))
		{
	
	
						if(0 && "Currunt Readings"=="Password" && $url_page=="admin_users_")
				$value=md5($value);
			$avalues["Currunt Readings"]=$value;
		}
		}
//	processibng Currunt Readings - end


//	insert masterkey value if exists and if not specified
	if(@$_SESSION[$sessionPrefix."_mastertable"]=="dbo.Module")
	{
		if(postvalue("masterkey1"))
			$_SESSION[$sessionPrefix."_masterkey1"] = postvalue("masterkey1");
		
		if($avalues["Module ID"]=="")
			$avalues["Module ID"]=prepare_for_db("Module ID",$_SESSION[$sessionPrefix."_masterkey1"]);
			
	}


	$failed_inline_add=false;
//	add filenames to values
	foreach($afilename_values as $akey=>$value)
		$avalues[$akey]=$value;
	
//	before Add event
	$retval = true;
	if($eventObj->exists("BeforeAdd"))
		$retval=$eventObj->BeforeAdd($avalues,$usermessage,(bool)$inlineadd);
	if($retval && $pageObject->isCaptchaOk)
	{
		$_SESSION[$strTableName."_count_captcha"] = $_SESSION[$strTableName."_count_captcha"]+1;
		if(DoInsertRecord($strOriginalTableName,$avalues,$blobfields,$id,$pageObject))
		{
			$IsSaved=true;
//	after edit event
			if($auditObj || $eventObj->exists("AfterAdd"))
			{
				foreach($keys as $idx=>$val)
					$avalues[$idx]=$val;
			}
			
			if($auditObj)
				$auditObj->LogAdd($strTableName,$avalues,$keys);

			$afterAdd_id = '';	
			if($eventObj->exists("AfterAdd") && $inlineadd!=ADD_MASTER){
				$eventObj->AfterAdd($avalues,$keys,(bool)$inlineadd);
			} else if ($eventObj->exists("AfterAdd") && $inlineadd==ADD_MASTER){
				$afterAdd_id = md5(rand(0,99999999999) + session_id());	
			
				$_SESSION['after_add_data'][$afterAdd_id] = array(
					'avalues'=>$avalues,
					'keys'=>$keys,
					'inlineadd'=>(bool)$inlineadd,
					'time' => time()
				);	
			}
				
			if($inlineadd==ADD_SIMPLE || $inlineadd==ADD_MASTER)
			{
				$permis = array();
				$keylink = "";$k = 0;
				foreach($keys as $idx=>$val)
				{
					if($k!=0)
						$keylink .="&";
					$keylink .="editid".(++$k)."=".htmlspecialchars(rawurlencode(@$val));
				}
				$permis = $pageObject->getPermissions();				
				if (count($keys))
				{
					$message .="</br>";
					if(GetTableData($strTableName,".edit",false) && $permis['edit'])
						$message .='&nbsp;<a href=\'Readings_edit.php?'.$keylink.'\'>'.mlang_message("EDIT").'</a>&nbsp;';
					if(GetTableData($strTableName,".view",false) && $permis['search'])
						$message .='&nbsp;<a href=\'Readings_view.php?'.$keylink.'\'>'.mlang_message("VIEW").'</a>&nbsp;';
				}
				$mesClass = "mes_ok";	
			}
		}
		elseif($inlineadd!=ADD_INLINE)
			$mesClass = "mes_not";	
	}
	else
	{
		$message = $usermessage;
		$status="DECLINED";
		$readavalues=true;
	}
}

$message = "<div class='message ".$mesClass."'>".$message."</div>";

// PRG rule, to avoid POSTDATA resend
if (no_output_done() && $inlineadd==ADD_SIMPLE && $IsSaved)
{
	// saving message
	$_SESSION["message_add"] = ($message ? $message : "");
	// redirect
	header("Location: Readings_".$pageObject->getPageType().".php");
	// turned on output buffering, so we need to stop script
	exit();
}

if($inlineadd==ADD_MASTER && $IsSaved)
	$_SESSION["message_add"] = ($message ? $message : "");
	
// for PRG rule, to avoid POSTDATA resend. Saving mess in session
if($inlineadd==ADD_SIMPLE && isset($_SESSION["message_add"]))
{
	$message = $_SESSION["message_add"];
	unset($_SESSION["message_add"]);
}

$defvalues=array();

//	copy record
if(array_key_exists("copyid1",$_REQUEST) || array_key_exists("editid1",$_REQUEST))
{
	$copykeys=array();
	if(array_key_exists("copyid1",$_REQUEST))
	{
		$copykeys["Record ID"]=postvalue("copyid1");
	}
	else
	{
		$copykeys["Record ID"]=postvalue("editid1");
	}
	$strWhere=KeyWhere($copykeys);
	$strSQL = gSQLWhere($strWhere);

	LogInfo($strSQL);
	$rs=db_query($strSQL,$conn);
	$defvalues=db_fetch_array($rs);
	if(!$defvalues)
		$defvalues=array();
//	clear key fields
	$defvalues["Record ID"]="";
//call CopyOnLoad event
	if($eventObj->exists("CopyOnLoad"))
		$eventObj->CopyOnLoad($defvalues,$strWhere);
}
else
{
}

//	set default values for the foreign keys

if(@$_SESSION[$sessionPrefix."_mastertable"]=="dbo.Module")
{
	if(postvalue("masterkey1"))
		$_SESSION[$sessionPrefix."_masterkey1"] = postvalue("masterkey1");

	if(postvalue("mainMPageType")<>"add")
		$defvalues["Module ID"] = @$_SESSION[$sessionPrefix."_masterkey1"];	
	
}

if($readavalues)
{
	$defvalues["Module ID"]=@$avalues["Module ID"];
	$defvalues["Voltage Red"]=@$avalues["Voltage Red"];
	$defvalues["Voltage Blue"]=@$avalues["Voltage Blue"];
	$defvalues["Voltage Yellow"]=@$avalues["Voltage Yellow"];
	$defvalues["Currunt Red"]=@$avalues["Currunt Red"];
	$defvalues["Currunt Blue"]=@$avalues["Currunt Blue"];
	$defvalues["Currunt Yellow"]=@$avalues["Currunt Yellow"];
	$defvalues["PF Red"]=@$avalues["PF Red"];
	$defvalues["PF Blue"]=@$avalues["PF Blue"];
	$defvalues["PF Yellow"]=@$avalues["PF Yellow"];
	$defvalues["Peak Power"]=@$avalues["Peak Power"];
	$defvalues["Date Time"]=@$avalues["Date Time"];
	$defvalues["IsSync"]=@$avalues["IsSync"];
	$defvalues["Currunt Readings"]=@$avalues["Currunt Readings"];
}

if($eventObj->exists("ProcessValuesAdd"))
	$eventObj->ProcessValuesAdd($defvalues);


//for basic files
$includes="";

if($inlineadd!=ADD_INLINE)
{
	if($inlineadd!=ADD_ONTHEFLY && $inlineadd!=ADD_POPUP)
	{
		$includes .="<script language=\"JavaScript\" src=\"include/loadfirst.js\"></script>\r\n";
				$includes.="<script type=\"text/javascript\" src=\"include/lang/".getLangFileName(mlang_getcurrentlang()).".js\"></script>";
		$includes.="<div id=\"search_suggest\"></div>\r\n";
	}
	
	if(!$pageObject->isAppearOnTabs("Module ID"))
		$xt->assign("Module_ID_fieldblock",true);
	else
		$xt->assign("Module_ID_tabfieldblock",true);
	$xt->assign("Module_ID_label",true);
	if(isEnableSection508())
		$xt->assign_section("Module_ID_label","<label for=\"".GetInputElementId("Module ID", $id)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("Voltage Red"))
		$xt->assign("Voltage_Red_fieldblock",true);
	else
		$xt->assign("Voltage_Red_tabfieldblock",true);
	$xt->assign("Voltage_Red_label",true);
	if(isEnableSection508())
		$xt->assign_section("Voltage_Red_label","<label for=\"".GetInputElementId("Voltage Red", $id)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("Voltage Blue"))
		$xt->assign("Voltage_Blue_fieldblock",true);
	else
		$xt->assign("Voltage_Blue_tabfieldblock",true);
	$xt->assign("Voltage_Blue_label",true);
	if(isEnableSection508())
		$xt->assign_section("Voltage_Blue_label","<label for=\"".GetInputElementId("Voltage Blue", $id)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("Voltage Yellow"))
		$xt->assign("Voltage_Yellow_fieldblock",true);
	else
		$xt->assign("Voltage_Yellow_tabfieldblock",true);
	$xt->assign("Voltage_Yellow_label",true);
	if(isEnableSection508())
		$xt->assign_section("Voltage_Yellow_label","<label for=\"".GetInputElementId("Voltage Yellow", $id)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("Currunt Red"))
		$xt->assign("Currunt_Red_fieldblock",true);
	else
		$xt->assign("Currunt_Red_tabfieldblock",true);
	$xt->assign("Currunt_Red_label",true);
	if(isEnableSection508())
		$xt->assign_section("Currunt_Red_label","<label for=\"".GetInputElementId("Currunt Red", $id)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("Currunt Blue"))
		$xt->assign("Currunt_Blue_fieldblock",true);
	else
		$xt->assign("Currunt_Blue_tabfieldblock",true);
	$xt->assign("Currunt_Blue_label",true);
	if(isEnableSection508())
		$xt->assign_section("Currunt_Blue_label","<label for=\"".GetInputElementId("Currunt Blue", $id)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("Currunt Yellow"))
		$xt->assign("Currunt_Yellow_fieldblock",true);
	else
		$xt->assign("Currunt_Yellow_tabfieldblock",true);
	$xt->assign("Currunt_Yellow_label",true);
	if(isEnableSection508())
		$xt->assign_section("Currunt_Yellow_label","<label for=\"".GetInputElementId("Currunt Yellow", $id)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("PF Red"))
		$xt->assign("PF_Red_fieldblock",true);
	else
		$xt->assign("PF_Red_tabfieldblock",true);
	$xt->assign("PF_Red_label",true);
	if(isEnableSection508())
		$xt->assign_section("PF_Red_label","<label for=\"".GetInputElementId("PF Red", $id)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("PF Blue"))
		$xt->assign("PF_Blue_fieldblock",true);
	else
		$xt->assign("PF_Blue_tabfieldblock",true);
	$xt->assign("PF_Blue_label",true);
	if(isEnableSection508())
		$xt->assign_section("PF_Blue_label","<label for=\"".GetInputElementId("PF Blue", $id)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("PF Yellow"))
		$xt->assign("PF_Yellow_fieldblock",true);
	else
		$xt->assign("PF_Yellow_tabfieldblock",true);
	$xt->assign("PF_Yellow_label",true);
	if(isEnableSection508())
		$xt->assign_section("PF_Yellow_label","<label for=\"".GetInputElementId("PF Yellow", $id)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("Peak Power"))
		$xt->assign("Peak_Power_fieldblock",true);
	else
		$xt->assign("Peak_Power_tabfieldblock",true);
	$xt->assign("Peak_Power_label",true);
	if(isEnableSection508())
		$xt->assign_section("Peak_Power_label","<label for=\"".GetInputElementId("Peak Power", $id)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("Date Time"))
		$xt->assign("Date_Time_fieldblock",true);
	else
		$xt->assign("Date_Time_tabfieldblock",true);
	$xt->assign("Date_Time_label",true);
	if(isEnableSection508())
		$xt->assign_section("Date_Time_label","<label for=\"".GetInputElementId("Date Time", $id)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("IsSync"))
		$xt->assign("IsSync_fieldblock",true);
	else
		$xt->assign("IsSync_tabfieldblock",true);
	$xt->assign("IsSync_label",true);
	if(isEnableSection508())
		$xt->assign_section("IsSync_label","<label for=\"".GetInputElementId("IsSync", $id)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("Currunt Readings"))
		$xt->assign("Currunt_Readings_fieldblock",true);
	else
		$xt->assign("Currunt_Readings_tabfieldblock",true);
	$xt->assign("Currunt_Readings_label",true);
	if(isEnableSection508())
		$xt->assign_section("Currunt_Readings_label","<label for=\"".GetInputElementId("Currunt Readings", $id)."\">","</label>");
	
	
	
	if($inlineadd!=ADD_ONTHEFLY && $inlineadd!=ADD_POPUP)
	{
		$pageObject->body["begin"] .= $includes;
				$xt->assign("backbutton_attrs","id=\"backButton".$id."\"");
		$xt->assign("back_button",true);
	}
	else
	{		
		$xt->assign("cancelbutton_attrs", "id=\"cancelButton".$id."\"");
		$xt->assign("cancel_button",true);
		$xt->assign("header","");
	}
	$xt->assign("save_button",true);
}
$xt->assign("savebutton_attrs","id=\"saveButton".$id."\"");
if($message)
{
	$xt->assign("message_block",true);
	$xt->assign("message",$message);
}
/*
if($inlineadd == ADD_ONTHEFLY || $inlineadd == ADD_POPUP)
{
	$xt->assign("message_block",true);
}
*/

$readonlyfields=array();

//	show readonly fields
$linkdata="";

if(@$_POST["a"]=="added" && $inlineadd==ADD_ONTHEFLY)
{
	if( !$error_happened && $status!="DECLINED")
	{
		$LookupSQL = "";
		$linkfield = "";
		$dispfield = "";
		if($LookupSQL)
			$LookupSQL.=" from ".AddTableWrappers($strOriginalTableName);

		$data=0;
		if(count($keys) && $LookupSQL)
		{
			$where=KeyWhere($keys);
			$LookupSQL.=" where ".$where;
			$rs=db_query($LookupSQL,$conn);
			$data=db_fetch_numarray($rs);
		}
		if($data)
		{
			$respData = array($linkfield=>@$data[0], $dispfield=>@$data[1]);
		}
		else
		{
			$respData = array($linkfield=>@$avalues[$linkfield], $dispfield=>@$avalues[$dispfield]);
		}		
		$returnJSON['success'] = true;
		$returnJSON['keys'] = $keys;
		$returnJSON['vals'] = $respData;
		$returnJSON['fields'] = $showFields;
	}
	else
	{
		$returnJSON['success'] = false;
		$returnJSON['message'] = $message;
	}
	echo "<textarea>".htmlspecialchars(my_json_encode($returnJSON))."</textarea>";
	exit();
}

if(@$_POST["a"]=="added" && ($inlineadd == ADD_INLINE || $inlineadd == ADD_MASTER || $inlineadd==ADD_POPUP)) 
{
	//Preparation   view values
	//	get current values and show edit controls
	$dispFieldAlias = "";
	$data=0;
	if(count($keys))
	{
		$where=KeyWhere($keys);
			
		$sqlHead = $gQuery->HeadToSql();
		$sqlGroupBy = $gQuery->GroupByToSql();
		$oHaving = $gQuery->Having();
		$sqlHaving = $oHaving->toSql($gQuery);
		
		$dispFieldAlias = postvalue('dispFieldAlias');
		$dispField = postvalue('dispField');
		
		if ($dispFieldAlias)
		{
			$sqlHead.=", ".($dispField)." as ".AddFieldWrappers($dispFieldAlias)." ";
		}
		$strSQL = gSQLWhere_having($sqlHead, $gsqlFrom, $gsqlWhereExpr, $sqlGroupBy, $sqlHaving, $where, '');		
		
		LogInfo($strSQL);
		$rs=db_query($strSQL,$conn);
		$data=db_fetch_array($rs);
	}
	if(!$data)
	{
		$data=$avalues;
		$HaveData=false;
	}
	//check if correct values added

	$keylink="";
	$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["Record ID"]));
	
////////////////////////////////////////////
//	Record ID - 
	$display = false;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value="";
			$value = ProcessLargeText(GetData($data,"Record ID", ""),"field=Record+ID".$keylink,"",MODE_LIST);
	$showValues["Record ID"] = $value;
	$showFields[] = "Record ID";
		$showRawValues["Record ID"] = substr($data["Record ID"],0,100);
	}	
//	Module ID - 
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value="";
			$value = ProcessLargeText(GetData($data,"Module ID", ""),"field=Module+ID".$keylink,"",MODE_LIST);
	$showValues["Module ID"] = $value;
	$showFields[] = "Module ID";
		$showRawValues["Module ID"] = substr($data["Module ID"],0,100);
	}	
//	Voltage Red - 
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value="";
			$value = ProcessLargeText(GetData($data,"Voltage Red", ""),"field=Voltage+Red".$keylink,"",MODE_LIST);
	$showValues["Voltage Red"] = $value;
	$showFields[] = "Voltage Red";
		$showRawValues["Voltage Red"] = substr($data["Voltage Red"],0,100);
	}	
//	Voltage Blue - 
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value="";
			$value = ProcessLargeText(GetData($data,"Voltage Blue", ""),"field=Voltage+Blue".$keylink,"",MODE_LIST);
	$showValues["Voltage Blue"] = $value;
	$showFields[] = "Voltage Blue";
		$showRawValues["Voltage Blue"] = substr($data["Voltage Blue"],0,100);
	}	
//	Voltage Yellow - 
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value="";
			$value = ProcessLargeText(GetData($data,"Voltage Yellow", ""),"field=Voltage+Yellow".$keylink,"",MODE_LIST);
	$showValues["Voltage Yellow"] = $value;
	$showFields[] = "Voltage Yellow";
		$showRawValues["Voltage Yellow"] = substr($data["Voltage Yellow"],0,100);
	}	
//	Currunt Red - 
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value="";
			$value = ProcessLargeText(GetData($data,"Currunt Red", ""),"field=Currunt+Red".$keylink,"",MODE_LIST);
	$showValues["Currunt Red"] = $value;
	$showFields[] = "Currunt Red";
		$showRawValues["Currunt Red"] = substr($data["Currunt Red"],0,100);
	}	
//	Currunt Blue - 
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value="";
			$value = ProcessLargeText(GetData($data,"Currunt Blue", ""),"field=Currunt+Blue".$keylink,"",MODE_LIST);
	$showValues["Currunt Blue"] = $value;
	$showFields[] = "Currunt Blue";
		$showRawValues["Currunt Blue"] = substr($data["Currunt Blue"],0,100);
	}	
//	Currunt Yellow - 
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value="";
			$value = ProcessLargeText(GetData($data,"Currunt Yellow", ""),"field=Currunt+Yellow".$keylink,"",MODE_LIST);
	$showValues["Currunt Yellow"] = $value;
	$showFields[] = "Currunt Yellow";
		$showRawValues["Currunt Yellow"] = substr($data["Currunt Yellow"],0,100);
	}	
//	PF Red - 
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value="";
			$value = ProcessLargeText(GetData($data,"PF Red", ""),"field=PF+Red".$keylink,"",MODE_LIST);
	$showValues["PF Red"] = $value;
	$showFields[] = "PF Red";
		$showRawValues["PF Red"] = substr($data["PF Red"],0,100);
	}	
//	PF Blue - 
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value="";
			$value = ProcessLargeText(GetData($data,"PF Blue", ""),"field=PF+Blue".$keylink,"",MODE_LIST);
	$showValues["PF Blue"] = $value;
	$showFields[] = "PF Blue";
		$showRawValues["PF Blue"] = substr($data["PF Blue"],0,100);
	}	
//	PF Yellow - 
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value="";
			$value = ProcessLargeText(GetData($data,"PF Yellow", ""),"field=PF+Yellow".$keylink,"",MODE_LIST);
	$showValues["PF Yellow"] = $value;
	$showFields[] = "PF Yellow";
		$showRawValues["PF Yellow"] = substr($data["PF Yellow"],0,100);
	}	
//	Peak Power - 
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value="";
			$value = ProcessLargeText(GetData($data,"Peak Power", ""),"field=Peak+Power".$keylink,"",MODE_LIST);
	$showValues["Peak Power"] = $value;
	$showFields[] = "Peak Power";
		$showRawValues["Peak Power"] = substr($data["Peak Power"],0,100);
	}	
//	Date Time - Short Date
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value="";
			$value = ProcessLargeText(GetData($data,"Date Time", "Short Date"),"field=Date+Time".$keylink,"",MODE_LIST);
	$showValues["Date Time"] = $value;
	$showFields[] = "Date Time";
		$showRawValues["Date Time"] = substr($data["Date Time"],0,100);
	}	
//	IsSync - Checkbox
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value="";
			$value = GetData($data,"IsSync", "Checkbox");
	$showValues["IsSync"] = $value;
	$showFields[] = "IsSync";
		$showRawValues["IsSync"] = substr($data["IsSync"],0,100);
	}	
//	Currunt Readings - 
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value="";
			$value = ProcessLargeText(GetData($data,"Currunt Readings", ""),"field=Currunt+Readings".$keylink,"",MODE_LIST);
	$showValues["Currunt Readings"] = $value;
	$showFields[] = "Currunt Readings";
		$showRawValues["Currunt Readings"] = substr($data["Currunt Readings"],0,100);
	}	
	
	// for custom expression for display field
	if ($dispFieldAlias)
	{
		$showValues[] = $data[$dispFieldAlias];	
		$showFields[] = $dispFieldAlias;
		$showRawValues[] = substr($data[$dispFieldAlias],0,100);
	}		
	
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_POPUP)
	{	
		if($IsSaved && count($showValues))
		{		
			$returnJSON['success'] = true;	
			if($HaveData){
				$returnJSON['noKeys'] = false;
			}else{
				$returnJSON['noKeys'] = true;
			}
				
			$returnJSON['keys'] = $keys;
			$returnJSON['vals'] = $showValues;
			$returnJSON['fields'] = $showFields;
			$returnJSON['rawVals'] = $showRawValues;
			$returnJSON['detKeys'] = $showDetailKeys;
			$returnJSON['userMess'] = $usermessage;
		}
		else
		{
			$returnJSON['success'] = false;
			$returnJSON['message'] = $message;
		}
		echo "<textarea>".htmlspecialchars(my_json_encode($returnJSON))."</textarea>";
		exit();
	}	
} 

/////////////////////////////////////////////////////////////
if($inlineadd==ADD_MASTER)
{		
	$respJSON = array();
	if(($_POST["a"]=="added" && $IsSaved))
	{
		$respJSON['afterAddId'] = $afterAdd_id;
		$respJSON['success'] = true;
		$respJSON['fields'] = $showFields;
		$respJSON['vals'] = $showValues;
		if($onFly){
			if($HaveData)
				$returnJSON['noKeys'] = false;
			else
				$returnJSON['noKeys'] = true;
			$respJSON['keys'] = $keys;
			$respJSON['rawVals'] = $showRawValues;
			$respJSON['detKeys'] = $showDetailKeys;
			$respJSON['userMess'] = $usermessage;
		}
		$respJSON['mKeys'] = array();	
		for($i=0;$i<count($dpParams['ids']);$i++)
		{
			$data=0;
			if(count($keys))
			{
				$where=KeyWhere($keys);
							$strSQL = gSQLWhere($where);
				LogInfo($strSQL);
				$rs=db_query($strSQL,$conn);
				$data=db_fetch_array($rs);
			}
			if(!$data)
				$data=$avalues;
			
			$mKeyId = 1;
			foreach($mKeys[$dpParams['strTableNames'][$i]] as $mk)	
			{
				if($data[$mk])
					$respJSON['mKeys'][$dpParams['strTableNames'][$i]]['masterkey'.$mKeyId++] = $data[$mk];
				else
					$respJSON['mKeys'][$dpParams['strTableNames'][$i]]['masterkey'.$mKeyId++] = '';
			}		
		}
		if((isset($_SESSION[$strTableName."_count_captcha"])) or ($_SESSION[$strTableName."_count_captcha"]>0) or ($_SESSION[$strTableName."_count_captcha"]<5))
			$respJSON['hideCaptha'] = true;
	}
	else{
			$respJSON['success'] = false;
			if(!$pageObject->isCaptchaOk)
				$respJSON['captha'] = false;
			else		
				$respJSON['error'] = $message;
			if($onFly)
				$respJSON['message'] = $message;				
		}
	echo "<textarea>".htmlspecialchars(my_json_encode($respJSON))."</textarea>";	
	exit();
}

/////////////////////////////////////////////////////////////
//	prepare Edit Controls
/////////////////////////////////////////////////////////////

//	validation stuff
$regex='';
$regexmessage='';
$regextype = '';
$control = array();

foreach($addFields as $fName)
{
	$gfName = GoodFieldName($fName);
	$controls = array('controls'=>array());
	if(!$detailKeys || !in_array($fName, $detailKeys) || $fName == postvalue("category"))
	{		
		$control[$gfName] = array();
		$control[$gfName]["func"]="xt_buildeditcontrol";
		$control[$gfName]["params"] = array();
		$control[$gfName]["params"]["id"]= $id;
		$control[$gfName]["params"]["field"]=$fName;
		$control[$gfName]["params"]["value"]=@$defvalues[$fName];
		if(UseRTE($fName))
			$_SESSION[$strTableName."_".$fName."_rte"]=@$defvalues[$fName];
		
		//	Begin Add validation
		$arrValidate = getValidation($fName,$strTableName);	
		$control[$gfName]["params"]["validate"] = $arrValidate;
		//	End Add validation	
	}
	$controls["controls"]['ctrlInd'] = 0;
	$controls["controls"]['id'] = $id;
	$controls["controls"]['fieldName'] = $fName;
	
	if(UseRTEFCK($fName) || UseRTEInnova($fName) || UseRTEBasic($fName))
	{
		if(!$detailKeys || !in_array($fName, $detailKeys))	
			$control[$gfName]["params"]["mode"]="add";
		$controls["controls"]['mode'] = "add";
	}
	else
	{
		if($inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		{
			if(!$detailKeys || !in_array($fName, $detailKeys) || $fName == postvalue("category"))	
				$control[$gfName]["params"]["mode"]="inline_add";
			$controls["controls"]['mode'] = "inline_add";
		}
		else
		{
			if(!$detailKeys || !in_array($fName, $detailKeys) || $fName == postvalue("category"))	
				$control[$gfName]["params"]["mode"]="add";
			$controls["controls"]['mode'] = "add";
		}
	}
			
	if(!$detailKeys || !in_array($fName, $detailKeys))
		$xt->assignbyref($gfName."_editcontrol",$control[$gfName]);
	elseif($detailKeys && in_array($fName, $detailKeys))
		$controls["controls"]['value'] = @$defvalues[$fName];
		
	// category control field
	$strCategoryControl = $pageObject->hasDependField($fName);
	
	if($strCategoryControl!==false && in_array($strCategoryControl, $addFields))
		$vals = array($fName => @$defvalues[$fName],$strCategoryControl => @$defvalues[$strCategoryControl]);
	else
		$vals = array($fName => @$defvalues[$fName]);
	
	$preload = $pageObject->fillPreload($fName, $vals);
	if($preload!==false)
		$controls["controls"]['preloadData'] = $preload;
	
	$pageObject->fillControlsMap($controls);
	
	//fill field tool tips
	$pageObject->fillFieldToolTips($fName);
	
	// fill special settings for timepicker 	
	if(GetEditFormat($fName) == 'Time')	
		$pageObject->fillTimePickSettings($fName, @$defvalues[$fName]);
	
	if((($detailKeys && in_array($fName, $detailKeys)) || $fName == postvalue("category")) && array_key_exists($fName, $defvalues))
	{
		if((GetEditFormat($fName)==EDIT_FORMAT_LOOKUP_WIZARD || GetEditFormat($fName)==EDIT_FORMAT_RADIO) && GetpLookupType($fName) == LT_LOOKUPTABLE)
			$value=DisplayLookupWizard($fName,$defvalues[$fName],$defvalues,"",MODE_VIEW);
		elseif(NeedEncode($fName))
			$value = ProcessLargeText(GetData($defvalues,$fName, ViewFormat($fName)),"field=".rawurlencode(htmlspecialchars($fName)),"",MODE_VIEW);
		else
			$value = GetData($defvalues,$fName, ViewFormat($fName));
		
		$xt->assign($gfName."_editcontrol", $value);
	}
}
//fill tab groups name and sections name to controls
$pageObject->fillCntrlTabGroups();

/////////////////////////////////////////////////////////////
if($pageObject->isShowDetailTables && ($inlineadd==ADD_SIMPLE || $inlineadd==ADD_POPUP) && !isMobile())
{
	if(count($dpParams['ids']))
	{
		$xt->assign("detail_tables",true);
		include('classes/listpage.php');
		include('classes/listpage_embed.php');
		include('classes/listpage_dpinline.php');
		include("classes/searchclause.php");
	}
	
	$dControlsMap = array();
		
	$flyId = $ids+1;
	for($d=0;$d<count($dpParams['ids']);$d++)
	{
		$options = array();
		//array of params for classes
		$options["mode"] = LIST_DETAILS;
		$options["pageType"] = PAGE_LIST;
		$options["masterPageType"] = PAGE_ADD;
		$options["mainMasterPageType"] = PAGE_ADD;
		$options['masterTable'] = "dbo.Readings";
		$options['firstTime'] = 1;
		
		$strTableName = $dpParams['strTableNames'][$d];
		include("include/".GetTableURL($strTableName)."_settings.php");
			
		$options['xt'] = new Xtempl();
		$options['id'] = $dpParams['ids'][$d];
		$options['flyId'] = $flyId++;
		$mkr = 1;
		
		foreach($mKeys[$strTableName] as $mk)
		{
			if($defvalues[$mk])
				$options['masterKeysReq'][$mkr++] = $defvalues[$mk];
			else
				$options['masterKeysReq'][$mkr++] = '';
		}
		
		$listPageObject = ListPage::createListPage($strTableName,$options);
		// prepare code
		$listPageObject->prepareForBuildPage();
		$flyId = $listPageObject->recId+1;
		
		//if($listPageObject->isDispGrid()){
		//add detail settings to master settings
		$listPageObject->fillSetCntrlMaps();
		$pageObject->jsSettings['tableSettings'][$strTableName]	= $listPageObject->jsSettings['tableSettings'][$strTableName];

		$dControlsMap[$strTableName] = $listPageObject->controlsMap;
		
		foreach($listPageObject->jsSettings["global"]["shortTNames"] as $tName => $shortTName){
			$pageObject->settingsMap["globalSettings"]["shortTNames"][$tName] = $shortTName;
		}
		
		//Add detail's js files to master's files
		$pageObject->copyAllJSFiles($listPageObject->grabAllJSFiles());
		
		//Add detail's css files to master's files
		$pageObject->copyAllCSSFiles($listPageObject->grabAllCSSFiles());
		//}
		$xtParams = array("method"=>'showPage', "params"=> false);
		$xtParams['object'] = $listPageObject;
		$xt->assign("displayDetailTable_".GoodFieldName($listPageObject->tName), $xtParams);
		$pageObject->controlsMap['dpTablesParams'][] = array('tName'=>$strTableName, 'id'=>$options['id']);
	}
	$pageObject->controlsMap['dControlsMap'] = $dControlsMap;
	$strTableName = "dbo.Readings";
}
/////////////////////////////////////////////////////////////
//fill jsSettings and ControlsHTMLMap
$pageObject->fillSetCntrlMaps();

$pageObject->addCommonJs();

//For mobile version in apple device

if($inlineadd == ADD_SIMPLE)
{
	$pageObject->body['end'] = array();
	$pageObject->body['end']["method"] = "assignBodyEnd";		
	$pageObject->body['end']["object"] = &$pageObject;
	$xt->assign("body", $pageObject->body);
	$xt->assign("flybody",true);
}
else{
	$returnJSON['controlsMap'] = $pageObject->controlsHTMLMap;
	$returnJSON['settings'] = $pageObject->jsSettings;	
}


if($inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_MASTER || $inlineadd==ADD_POPUP)
{ 
	$xt->assign("footer",false);
	$xt->assign("header",false);
	$xt->assign("flybody", $pageObject->body);
	$xt->assign("body",true);
}	

$xt->assign("style_block",true);
$pageObject->xt->assign("legend", true);

if($eventObj->exists("BeforeShowAdd"))
	$eventObj->BeforeShowAdd($xt,$templatefile);

if($inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
{
	$xt->load_template($templatefile);
	$returnJSON['html'] = $xt->fetch_loaded('style_block').$xt->fetch_loaded('body');
	$returnJSON['idStartFrom'] = $id+1;	
	echo (my_json_encode($returnJSON)); 
}
elseif ($inlineadd == ADD_INLINE)
{
	$xt->load_template($templatefile);
	$returnJSON["html"] = array();
	foreach($addFields as $fName)
	{
		$returnJSON["html"][$fName] = $xt->fetchVar(GoodFieldName($fName)."_editcontrol");	
	}	
	echo (my_json_encode($returnJSON)); 
}
else
	$xt->display($templatefile);

?>
