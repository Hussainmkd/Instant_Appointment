<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");


include("include/dbcommon.php");
include("include/Month_Billings_variables.php");
include('include/xtempl.php');
include('classes/editpage.php');
include("classes/searchclause.php");

add_nocache_headers();

/////////////////////////////////////////////////////////////
//	check if logged in
/////////////////////////////////////////////////////////////
if(!@$_SESSION["UserID"] || !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Edit"))
{ 
	$_SESSION["MyURL"]=$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
	header("Location: login.php?message=expired"); 
	return;
}

$layout = new TLayout("edit2","BoldOrange","MobileOrange");
$layout->blocks["top"] = array();
$layout->containers["edit"] = array();

$layout->containers["edit"][] = array("name"=>"editheader","block"=>"","substyle"=>2);


$layout->containers["edit"][] = array("name"=>"message","block"=>"message_block","substyle"=>1);


$layout->containers["edit"][] = array("name"=>"wrapper","block"=>"","substyle"=>1);


$layout->containers["fields"] = array();

$layout->containers["fields"][] = array("name"=>"editfields","block"=>"","substyle"=>1);


$layout->containers["fields"][] = array("name"=>"legend","block"=>"legend","substyle"=>3);


$layout->containers["fields"][] = array("name"=>"editbuttons","block"=>"","substyle"=>2);


$layout->skins["fields"] = "fields";

$layout->skins["edit"] = "1";
$layout->blocks["top"][] = "edit";
$layout->skins["details"] = "empty";
$layout->blocks["top"][] = "details";$page_layouts["Month_Billings_edit"] = $layout;





if ((sizeof($_POST)==0) && (postvalue('ferror')) && (!postvalue("editid1"))){
	$returnJSON['success'] = false;
	$returnJSON['message'] = mlang_message("INLINE_ERROR");
	$returnJSON['fatalError'] = true;
	echo "<textarea>".htmlspecialchars(my_json_encode($returnJSON))."</textarea>";
	exit();
}
else if ((sizeof($_POST)==0) && (postvalue('ferror')) && (postvalue("editid1"))){
	if (postvalue('fly')){
		echo -1;
		exit();
	}
	else {
		$_SESSION["message_edit"] = "<< ".mlang_message("INLINE_ERROR")." >>";
	}
}
/////////////////////////////////////////////////////////////
//init variables
/////////////////////////////////////////////////////////////
if(postvalue("editType")=="inline")
	$inlineedit = EDIT_INLINE;
elseif(postvalue("editType")==EDIT_POPUP)
	$inlineedit = EDIT_POPUP;
else
	$inlineedit = EDIT_SIMPLE;			

$id = postvalue("id");
if(intval($id)==0)
	$id = 1;

$flyId = $id+1;	
$xt = new Xtempl();

// assign an id		
$xt->assign("id",$id);

//array of params for classes
$params = array("pageType" => PAGE_EDIT,"id" => $id);

////////////////////// data picker

////////////////////// time picker


$params['tName'] = $strTableName;
$params['xt'] = &$xt;
$params['mode'] = $inlineedit;
$params['includes_js'] = $includes_js;
$params['includes_jsreq'] = $includes_jsreq;
$params['includes_css'] = $includes_css;
$params['locale_info'] = $locale_info;
$params['pageEditLikeInline'] = ($inlineedit == EDIT_INLINE);
//Get array of tabs for edit page
$params['useTabsOnEdit'] = useTabsOnEdit($strTableName);
if($params['useTabsOnEdit'])
	$params['arrEditTabs'] = GetEditTabs($strTableName);

$pageObject = new EditPage($params);

//	For ajax request 
if($_REQUEST["action"]!="")
{
	if($pageObject->lockingObj)
	{
		$arrkeys = explode("&",refine($_REQUEST["keys"]));
		foreach($arrkeys as $ind=>$val)
			$arrkeys[$ind]=urldecode($val);
		
		if($_REQUEST["action"]=="unlock")
		{
			$pageObject->lockingObj->UnlockRecord($strTableName,$arrkeys,$_REQUEST["sid"]);
			exit();	
		}
		else if($_REQUEST["action"]=="lockadmin" && (IsAdmin() || $_SESSION["AccessLevel"] == ACCESS_LEVEL_ADMINGROUP))
		{
			$pageObject->lockingObj->UnlockAdmin($strTableName,$arrkeys,$_REQUEST["startEdit"]=="yes");
			if($_REQUEST["startEdit"]=="no")
				echo "unlock";
			else if($_REQUEST["startEdit"]=="yes")
				echo "lock";
			exit();	
		}
		else if($_REQUEST["action"]=="confirm")
		{
			if(!$pageObject->lockingObj->ConfirmLock($strTableName,$arrkeys,$message));
				echo $message;
			exit();	
		}
	}
	else
		exit();
}

$filename = $status = $message = $mesClass = $usermessage = $strWhereClause = $bodyonload = "";
$showValues = $showRawValues = $showFields = $showDetailKeys = $key = $next = $prev = array();
$HaveData = $enableCtrlsForEditing = true;
$error_happened = $readevalues = $IsSaved = false;

$templatefile = ($inlineedit == EDIT_INLINE) ? "Month_Billings_inline_edit.htm" : "Month_Billings_edit.htm";

$auditObj = GetAuditObject($strTableName);

// SearchClause class stuff
$pageObject->searchClauseObj->parseRequest();
$_SESSION[$strTableName.'_advsearch'] = serialize($pageObject->searchClauseObj);

//Get detail table keys	
$detailKeys = $pageObject->detailKeysByM;

//Array of fields, which appear on edit page
$editFields = $pageObject->getFieldsByPageType();

if($pageObject->lockingObj)
{
	$system_attrs = "style='display:none;'";
	$system_message = "";
}

if ($inlineedit!=EDIT_INLINE)
{
	// add button events if exist
	$pageObject->addButtonHandlers();
}

$url_page = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1,12);

//	Before Process event
if($eventObj->exists("BeforeProcessEdit"))
	$eventObj->BeforeProcessEdit($conn);

$keys = array();
$skeys = "";
$savedKeys = array();
$keys["Bill ID"]=urldecode(postvalue("editid1"));
$savedKeys["Bill ID"]=urldecode(postvalue("editid1"));
$skeys.=rawurlencode(postvalue("editid1"))."&";

if($skeys!="")
	$skeys = substr($skeys,0,-1);

//For show detail tables on master page edit
if($inlineedit!=EDIT_INLINE)	
{
	$dpParams = array();
	if($pageObject->isShowDetailTables && !isMobile())
	{
		$ids = $id;
		$pageObject->jsSettings['tableSettings'][$strTableName]['dpParams'] = array('tableNames'=>$dpParams['strTableNames'], 'ids'=>$dpParams['ids']);
	}	
}	
/////////////////////////////////////////////////////////////
//	process entered data, read and save
/////////////////////////////////////////////////////////////

// proccess captcha
if ($inlineedit!=EDIT_INLINE)
	if($pageObject->captchaExists())
		$pageObject->doCaptchaCode();

if(@$_POST["a"] == "edited")
{
	$strWhereClause = whereAdd($strWhereClause,KeyWhere($keys));
		$oldValuesRead = false;
	if($eventObj->exists("AfterEdit") || $eventObj->exists("BeforeEdit") || $auditObj)
	{
		//	read old values
		$rsold = db_query(gSQLWhere($strWhereClause), $conn);
		$dataold = db_fetch_array($rsold);
		$oldValuesRead = true;
	}
	$evalues = $efilename_values = $blobfields = array();
	

//	processing Customer ID - begin
	$condition = 1;

	if($condition)
	{
		$value = postvalue("value_Customer_ID_".$id);
		$type = postvalue("type_Customer_ID_".$id);
		if(FieldSubmitted("Customer ID_".$id))
		{
				$value = prepare_for_db("Customer ID",$value,$type);
		}
		else
			$value = false;
	
			if($value!==false)
		{	
	
	
	
	
	
			if(0 && "Customer ID"=="Password" && $url_page=="admin_users_")
				$value = md5($value);
			$evalues["Customer ID"] = $value;
		
			}
	
		}
//	processing Customer ID - end
//	processing Bill Month - begin
	$condition = 1;

	if($condition)
	{
		$value = postvalue("value_Bill_Month_".$id);
		$type = postvalue("type_Bill_Month_".$id);
		if(FieldSubmitted("Bill Month_".$id))
		{
				$value = prepare_for_db("Bill Month",$value,$type);
		}
		else
			$value = false;
	
			if($value!==false)
		{	
	
	
	
	
	
			if(0 && "Bill Month"=="Password" && $url_page=="admin_users_")
				$value = md5($value);
			$evalues["Bill Month"] = $value;
		
			}
	
		}
//	processing Bill Month - end
//	processing Previous Readings - begin
	$condition = 1;

	if($condition)
	{
		$value = postvalue("value_Previous_Readings_".$id);
		$type = postvalue("type_Previous_Readings_".$id);
		if(FieldSubmitted("Previous Readings_".$id))
		{
				$value = prepare_for_db("Previous Readings",$value,$type);
		}
		else
			$value = false;
	
			if($value!==false)
		{	
	
	
	
	
	
			if(0 && "Previous Readings"=="Password" && $url_page=="admin_users_")
				$value = md5($value);
			$evalues["Previous Readings"] = $value;
		
			}
	
		}
//	processing Previous Readings - end
//	processing Currunt Readings - begin
	$condition = 1;

	if($condition)
	{
		$value = postvalue("value_Currunt_Readings_".$id);
		$type = postvalue("type_Currunt_Readings_".$id);
		if(FieldSubmitted("Currunt Readings_".$id))
		{
				$value = prepare_for_db("Currunt Readings",$value,$type);
		}
		else
			$value = false;
	
			if($value!==false)
		{	
	
	
	
	
	
			if(0 && "Currunt Readings"=="Password" && $url_page=="admin_users_")
				$value = md5($value);
			$evalues["Currunt Readings"] = $value;
		
			}
	
		}
//	processing Currunt Readings - end
//	processing Unit Consumed - begin
	$condition = 1;

	if($condition)
	{
		$value = postvalue("value_Unit_Consumed_".$id);
		$type = postvalue("type_Unit_Consumed_".$id);
		if(FieldSubmitted("Unit Consumed_".$id))
		{
				$value = prepare_for_db("Unit Consumed",$value,$type);
		}
		else
			$value = false;
	
			if($value!==false)
		{	
	
	
	
	
	
			if(0 && "Unit Consumed"=="Password" && $url_page=="admin_users_")
				$value = md5($value);
			$evalues["Unit Consumed"] = $value;
		
			}
	
		}
//	processing Unit Consumed - end
//	processing Bill Amount - begin
	$condition = 1;

	if($condition)
	{
		$value = postvalue("value_Bill_Amount_".$id);
		$type = postvalue("type_Bill_Amount_".$id);
		if(FieldSubmitted("Bill Amount_".$id))
		{
				$value = prepare_for_db("Bill Amount",$value,$type);
		}
		else
			$value = false;
	
			if($value!==false)
		{	
	
	
	
	
	
			if(0 && "Bill Amount"=="Password" && $url_page=="admin_users_")
				$value = md5($value);
			$evalues["Bill Amount"] = $value;
		
			}
	
		}
//	processing Bill Amount - end
//	processing Due Date - begin
	$condition = 1;

	if($condition)
	{
		$value = postvalue("value_Due_Date_".$id);
		$type = postvalue("type_Due_Date_".$id);
		if(FieldSubmitted("Due Date_".$id))
		{
				$value = prepare_for_db("Due Date",$value,$type);
		}
		else
			$value = false;
	
			if($value!==false)
		{	
	
	
	
	
	
			if(0 && "Due Date"=="Password" && $url_page=="admin_users_")
				$value = md5($value);
			$evalues["Due Date"] = $value;
		
			}
	
		}
//	processing Due Date - end

	foreach($efilename_values as $ekey=>$value)
		$evalues[$ekey] = $value;
		
	if($pageObject->lockingObj)
	{
		$lockmessage = "";
		if(!$pageObject->lockingObj->ConfirmLock($strTableName,$savedKeys,$lockmessage))
		{
			$enableCtrlsForEditing = false;
			$system_attrs = "style='display:block;'";
			if($inlineedit == EDIT_INLINE)
			{
				if(IsAdmin() || $_SESSION["AccessLevel"] == ACCESS_LEVEL_ADMINGROUP)
					$lockmessage = $pageObject->lockingObj->GetLockInfo($strTableName,$savedKeys,false,$id);
				
				$returnJSON['success'] = false;
				$returnJSON['message'] = $lockmessage;
				$returnJSON['enableCtrls'] = $enableCtrlsForEditing;
				$returnJSON['confirmTime'] = $pageObject->lockingObj->ConfirmTime;
				echo "<textarea>".htmlspecialchars(my_json_encode($returnJSON))."</textarea>";
				exit();
			}
			else
			{
				if(IsAdmin() || $_SESSION["AccessLevel"] == ACCESS_LEVEL_ADMINGROUP)
					$system_message = $pageObject->lockingObj->GetLockInfo($strTableName,$savedKeys,true,$id);
				else
					$system_message = $lockmessage;
			}
			$status = "DECLINED";
			$readevalues = true;
		}
	}
	
	if($readevalues==false)
	{
	//	do event
		$retval = true;
		if($eventObj->exists("BeforeEdit"))
			$retval=$eventObj->BeforeEdit($evalues,$strWhereClause,$dataold,$keys,$usermessage,(bool)$inlineedit);
		if($retval && $pageObject->isCaptchaOk)
		{		
			if($inlineedit!=EDIT_INLINE)
				$_SESSION[$strTableName."_count_captcha"] = $_SESSION[$strTableName."_count_captcha"]+1;
				
			if(DoUpdateRecord($strOriginalTableName,$evalues,$blobfields,$strWhereClause,$id,$pageObject))
			{
				$IsSaved = true;
				
				//	after edit event
				if($pageObject->lockingObj && $inlineedit == EDIT_INLINE)
					$pageObject->lockingObj->UnlockRecord($strTableName,$savedKeys,"");
				if($auditObj || $eventObj->exists("AfterEdit"))
				{
					foreach($dataold as $idx=>$val)
					{
						if(!array_key_exists($idx,$evalues))
							$evalues[$idx] = $val;
					}
				}

				if($auditObj)
					$auditObj->LogEdit($strTableName,$evalues,$dataold,$keys);
				if($eventObj->exists("AfterEdit"))
					$eventObj->AfterEdit($evalues,KeyWhere($keys),$dataold,$keys,(bool)$inlineedit);
							
				$mesClass = "mes_ok";	
			}
			elseif($inlineedit!=EDIT_INLINE)
				$mesClass = "mes_not";	
		}
		else
		{
			$message = $usermessage;
			$readevalues = true;
			$status = "DECLINED";
		}
	}
	if($readevalues)
		$keys = $savedKeys;
}
//else
{
	/////////////////////////
	//Locking recors
	/////////////////////////

	if($pageObject->lockingObj)
	{
		$enableCtrlsForEditing = $pageObject->lockingObj->LockRecord($strTableName,$keys);
		if(!$enableCtrlsForEditing)
		{
			if($inlineedit == EDIT_INLINE)
			{
				if(IsAdmin() || $_SESSION["AccessLevel"] == ACCESS_LEVEL_ADMINGROUP)
					$lockmessage = $pageObject->lockingObj->GetLockInfo($strTableName,$keys,false,$id);
				else
					$lockmessage = $pageObject->lockingObj->LockUser;
				$returnJSON['success'] = false;
				$returnJSON['message'] = $lockmessage;
				$returnJSON['enableCtrls'] = $enableCtrlsForEditing;
				$returnJSON['confirmTime'] = $pageObject->lockingObj->ConfirmTime;
				echo my_json_encode($returnJSON);
				exit();
			}
			
			$system_attrs = "style='display:block;'";
			$system_message = $pageObject->lockingObj->LockUser;
			
			if(IsAdmin() || $_SESSION["AccessLevel"] == ACCESS_LEVEL_ADMINGROUP)
			{
				$rb = $pageObject->lockingObj->GetLockInfo($strTableName,$keys,true,$id);
				if($rb!="")
					$system_message = $rb;
			}
		}
	}
}

if($pageObject->lockingObj && $inlineedit!=EDIT_INLINE)
	$pageObject->body["begin"] .='<div class="runner-locking" '.$system_attrs.'>'.$system_message.'</div>';

$message = "<div class='message ".$mesClass."'>".$message."</div>";

// PRG rule, to avoid POSTDATA resend
if ($IsSaved && no_output_done() && $inlineedit == EDIT_SIMPLE)
{
	// saving message
	$_SESSION["message_edit"] = ($message ? $message : "");
	// key get query
	$keyGetQ = "";
		$keyGetQ.="editid1=".rawurldecode($keys["Bill ID"])."&";
	// cut last &
	$keyGetQ = substr($keyGetQ, 0, strlen($keyGetQ)-1);	
	// redirect
	header("Location: Month_Billings_".$pageObject->getPageType().".php?".$keyGetQ);
	// turned on output buffering, so we need to stop script
	exit();
}
// for PRG rule, to avoid POSTDATA resend. Saving mess in session
if ($inlineedit == EDIT_SIMPLE && isset($_SESSION["message_edit"]))
{
	$message = $_SESSION["message_edit"];
	unset($_SESSION["message_edit"]);
}

/////////////////////////////////////////////////////////////
//	read current values from the database
/////////////////////////////////////////////////////////////
$query = $queryData_Month_Billings->Copy();

$strWhereClause = KeyWhere($keys);
$strSQL = gSQLWhere($strWhereClause);

$strSQLbak = $strSQL;
//	Before Query event
if($eventObj->exists("BeforeQueryEdit"))
	$eventObj->BeforeQueryEdit($strSQL, $strWhereClause);

if($strSQLbak == $strSQL)
	$strSQL = gSQLWhere($strWhereClause);
	
LogInfo($strSQL);

$rs = db_query($strSQL, $conn);
$data = db_fetch_array($rs);
if(!$data)
{
	if($inlineedit == EDIT_SIMPLE)
	{
		header("Location: Month_Billings_list.php?a=return");
		exit();
	}
	else
		$data = array();
}

$readonlyfields = array();


if($readevalues)
{
	$data["Customer ID"] = $evalues["Customer ID"];
	$data["Bill Month"] = $evalues["Bill Month"];
	$data["Previous Readings"] = $evalues["Previous Readings"];
	$data["Currunt Readings"] = $evalues["Currunt Readings"];
	$data["Unit Consumed"] = $evalues["Unit Consumed"];
	$data["Bill Amount"] = $evalues["Bill Amount"];
	$data["Due Date"] = $evalues["Due Date"];
}

if($eventObj->exists("ProcessValuesEdit"))
	$eventObj->ProcessValuesEdit($data);

/////////////////////////////////////////////////////////////
//	assign values to $xt class, prepare page for displaying
/////////////////////////////////////////////////////////////
//Basic includes js files
$includes = "";
//javascript code
	
if($inlineedit != EDIT_INLINE)
{
	if($inlineedit == EDIT_SIMPLE)
	{
		$includes.= "<script language=\"JavaScript\" src=\"include/loadfirst.js\"></script>\r\n";
				$includes.="<script type=\"text/javascript\" src=\"include/lang/".getLangFileName(mlang_getcurrentlang()).".js\"></script>";
		
		$includes.= "<div id=\"search_suggest".$id."\"></div>\r\n";
		$pageObject->body["begin"].= $includes;
	}	

	if(!$pageObject->isAppearOnTabs("Customer ID"))
		$xt->assign("Customer_ID_fieldblock",true);
	else
		$xt->assign("Customer_ID_tabfieldblock",true);
	$xt->assign("Customer_ID_label",true);
	if(isEnableSection508())
		$xt->assign_section("Customer_ID_label","<label for=\"".GetInputElementId("Customer ID", $id)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("Bill Month"))
		$xt->assign("Bill_Month_fieldblock",true);
	else
		$xt->assign("Bill_Month_tabfieldblock",true);
	$xt->assign("Bill_Month_label",true);
	if(isEnableSection508())
		$xt->assign_section("Bill_Month_label","<label for=\"".GetInputElementId("Bill Month", $id)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("Previous Readings"))
		$xt->assign("Previous_Readings_fieldblock",true);
	else
		$xt->assign("Previous_Readings_tabfieldblock",true);
	$xt->assign("Previous_Readings_label",true);
	if(isEnableSection508())
		$xt->assign_section("Previous_Readings_label","<label for=\"".GetInputElementId("Previous Readings", $id)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("Currunt Readings"))
		$xt->assign("Currunt_Readings_fieldblock",true);
	else
		$xt->assign("Currunt_Readings_tabfieldblock",true);
	$xt->assign("Currunt_Readings_label",true);
	if(isEnableSection508())
		$xt->assign_section("Currunt_Readings_label","<label for=\"".GetInputElementId("Currunt Readings", $id)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("Unit Consumed"))
		$xt->assign("Unit_Consumed_fieldblock",true);
	else
		$xt->assign("Unit_Consumed_tabfieldblock",true);
	$xt->assign("Unit_Consumed_label",true);
	if(isEnableSection508())
		$xt->assign_section("Unit_Consumed_label","<label for=\"".GetInputElementId("Unit Consumed", $id)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("Bill Amount"))
		$xt->assign("Bill_Amount_fieldblock",true);
	else
		$xt->assign("Bill_Amount_tabfieldblock",true);
	$xt->assign("Bill_Amount_label",true);
	if(isEnableSection508())
		$xt->assign_section("Bill_Amount_label","<label for=\"".GetInputElementId("Bill Amount", $id)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("Due Date"))
		$xt->assign("Due_Date_fieldblock",true);
	else
		$xt->assign("Due_Date_tabfieldblock",true);
	$xt->assign("Due_Date_label",true);
	if(isEnableSection508())
		$xt->assign_section("Due_Date_label","<label for=\"".GetInputElementId("Due Date", $id)."\">","</label>");
		

	$xt->assign("show_key1", htmlspecialchars(GetData($data,"Bill ID", "")));
	//$xt->assign('editForm',true);
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Begin Next Prev button
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    
	if(!@$_SESSION[$strTableName."_noNextPrev"] && $inlineedit == EDIT_SIMPLE)
	{
		$next = array();
		$prev = array();
		$pageObject->getNextPrevRecordKeys($data,"Edit",$next,$prev);
	}
	$nextlink = $prevlink = "";
	if(count($next))
	{
		$xt->assign("next_button",true);
				$nextlink.= "editid1=".htmlspecialchars(rawurlencode($next[1]));
		$xt->assign("nextbutton_attrs","id=\"nextButton".$id."\" align=\"absmiddle\"");
	}
	else 
		$xt->assign("next_button",false);
	if(count($prev))
	{
		$xt->assign("prev_button",true);
				$prevlink.= "editid1=".htmlspecialchars(rawurlencode($prev[1]));
		$xt->assign("prevbutton_attrs","id=\"prevButton".$id."\" align=\"absmiddle\"");
	}
	else 
		$xt->assign("prev_button",false);
	
	
	
	$xt->assign("resetbutton_attrs",'id="resetButton'.$id.'"');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//End Next Prev button
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    
	if($inlineedit == EDIT_SIMPLE)
	{
		$xt->assign("back_button",true);
		$xt->assign("backbutton_attrs","id=\"backButton".$id."\"");
	}
	// onmouseover event, for changing focus. Needed to proper submit form
	$onmouseover = "this.focus();";
	$onmouseover = 'onmouseover="'.$onmouseover.'"';
	
	$xt->assign("save_button",true);
	if(!$enableCtrlsForEditing)
		$xt->assign("savebutton_attrs", "id=\"saveButton".$id."\" type=\"disabled\" ".$onmouseover);
	else
		$xt->assign("savebutton_attrs", "id=\"saveButton".$id."\"".$onmouseover);
		
	$xt->assign("reset_button",true);

}

if($message)
{
	$xt->assign("message_block",true);
	$xt->assign("message",$message);
}
/////////////////////////////////////////////////////////////
//process readonly and auto-update fields
/////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////
//	return new data to the List page or report an error
/////////////////////////////////////////////////////////////
if (postvalue("a")=="edited" && ($inlineedit == EDIT_INLINE || $inlineedit == EDIT_POPUP))
{
	if(!$data)
	{
		$data = $evalues;
		$HaveData = false;
	}
	//Preparation   view values

//	detail tables

	$keylink = "";
	$keylink.= "&key1=".htmlspecialchars(rawurlencode(@$data["Bill ID"]));


//	Bill ID - 

		$value = "";
			$value = ProcessLargeText(GetData($data,"Bill ID", ""),"field=Bill+ID".$keylink,"",MODE_LIST);
	$showValues["Bill ID"] = $value;
	$showFields[] = "Bill ID";
		$showRawValues["Bill ID"] = substr($data["Bill ID"],0,100);

//	Customer ID - 

		$value = "";
			$value = ProcessLargeText(GetData($data,"Customer ID", ""),"field=Customer+ID".$keylink,"",MODE_LIST);
	$showValues["Customer ID"] = $value;
	$showFields[] = "Customer ID";
		$showRawValues["Customer ID"] = substr($data["Customer ID"],0,100);

//	Bill Month - 

		$value = "";
			$value = ProcessLargeText(GetData($data,"Bill Month", ""),"field=Bill+Month".$keylink,"",MODE_LIST);
	$showValues["Bill Month"] = $value;
	$showFields[] = "Bill Month";
		$showRawValues["Bill Month"] = substr($data["Bill Month"],0,100);

//	Previous Readings - 

		$value = "";
			$value = ProcessLargeText(GetData($data,"Previous Readings", ""),"field=Previous+Readings".$keylink,"",MODE_LIST);
	$showValues["Previous Readings"] = $value;
	$showFields[] = "Previous Readings";
		$showRawValues["Previous Readings"] = substr($data["Previous Readings"],0,100);

//	Currunt Readings - 

		$value = "";
			$value = ProcessLargeText(GetData($data,"Currunt Readings", ""),"field=Currunt+Readings".$keylink,"",MODE_LIST);
	$showValues["Currunt Readings"] = $value;
	$showFields[] = "Currunt Readings";
		$showRawValues["Currunt Readings"] = substr($data["Currunt Readings"],0,100);

//	Unit Consumed - 

		$value = "";
			$value = ProcessLargeText(GetData($data,"Unit Consumed", ""),"field=Unit+Consumed".$keylink,"",MODE_LIST);
	$showValues["Unit Consumed"] = $value;
	$showFields[] = "Unit Consumed";
		$showRawValues["Unit Consumed"] = substr($data["Unit Consumed"],0,100);

//	Bill Amount - 

		$value = "";
			$value = ProcessLargeText(GetData($data,"Bill Amount", ""),"field=Bill+Amount".$keylink,"",MODE_LIST);
	$showValues["Bill Amount"] = $value;
	$showFields[] = "Bill Amount";
		$showRawValues["Bill Amount"] = substr($data["Bill Amount"],0,100);

//	Due Date - 

		$value = "";
			$value = ProcessLargeText(GetData($data,"Due Date", ""),"field=Due+Date".$keylink,"",MODE_LIST);
	$showValues["Due Date"] = $value;
	$showFields[] = "Due Date";
		$showRawValues["Due Date"] = substr($data["Due Date"],0,100);
/////////////////////////////////////////////////////////////
//	start inline output
/////////////////////////////////////////////////////////////
	
	if($IsSaved)
	{
		if($pageObject->lockingObj)
			$pageObject->lockingObj->UnlockRecord($strTableName,$keys,"");
			
		$returnJSON['success'] = true;
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
		if($pageObject->lockingObj)
			$returnJSON['lockMessage'] = $system_message;
	}
	echo "<textarea>".htmlspecialchars(my_json_encode($returnJSON))."</textarea>";
	exit();
} 
/////////////////////////////////////////////////////////////
//	prepare Edit Controls
/////////////////////////////////////////////////////////////
//	validation stuff
$regex = '';
$regexmessage = '';
$regextype = '';
$control = array();

foreach($editFields as $fName)
{
	$gfName = GoodFieldName($fName);
	$controls = array('controls'=>array());
	if (!$detailKeys || !in_array($fName, $detailKeys))
	{		
		$control[$gfName] = array();
		$control[$gfName]["func"]="xt_buildeditcontrol";
		$control[$gfName]["params"] = array();
		$control[$gfName]["params"]["id"] = $id;
		$control[$gfName]["params"]["field"] = $fName;
		$control[$gfName]["params"]["value"] = @$data[$fName];
		
		//	Begin Add validation
		$arrValidate = getValidation($fName,$strTableName);	
		$control[$gfName]["params"]["validate"] = $arrValidate;
		//	End Add validation	
		$additionalCtrlParams = array();
		$additionalCtrlParams["disabled"] = !$enableCtrlsForEditing;
		$control[$gfName]["params"]["additionalCtrlParams"] = $additionalCtrlParams;
	}
	$controls["controls"]['ctrlInd'] = 0;
	$controls["controls"]['id'] = $id;
	$controls["controls"]['fieldName'] = $fName;
	
	if($inlineedit == EDIT_INLINE)
	{
		if(!$detailKeys || !in_array($fName, $detailKeys))
			$control[$gfName]["params"]["mode"]="inline_edit";
		$controls["controls"]['mode'] = "inline_edit";
	}
	else{
			if (!$detailKeys || !in_array($fName, $detailKeys))
				$control[$gfName]["params"]["mode"] = "edit";
			$controls["controls"]['mode'] = "edit";
		}
                            	
	if(!$detailKeys || !in_array($fName, $detailKeys))
		$xt->assignbyref($gfName."_editcontrol",$control[$gfName]);
	elseif($detailKeys && in_array($fName, $detailKeys))
		$controls["controls"]['value'] = @$data[$fName];
		
	// category control field
	$strCategoryControl = $pageObject->hasDependField($fName);
	
	if($strCategoryControl!==false && in_array($strCategoryControl, $editFields))
		$vals = array($fName => @$data[$fName],$strCategoryControl => @$data[$strCategoryControl]);
	else
		$vals = array($fName => @$data[$fName]);
		
	$preload = $pageObject->fillPreload($fName, $vals);
	if($preload!==false)
		$controls["controls"]['preloadData'] = $preload;	
	
	$pageObject->fillControlsMap($controls);
	
	//fill field tool tips
	$pageObject->fillFieldToolTips($fName);
	
	// fill special settings for timepicker
	if(GetEditFormat($fName) == 'Time')	
		$pageObject->fillTimePickSettings($fName, $data[$fName]);
	
	if(ViewFormat($fName) == FORMAT_MAP)	
		$pageObject->googleMapCfg['isUseGoogleMap'] = true;
		
	if($detailKeys && in_array($fName, $detailKeys) && array_key_exists($fName, $data))
	{
		if((GetEditFormat($fName)==EDIT_FORMAT_LOOKUP_WIZARD || GetEditFormat($fName)==EDIT_FORMAT_RADIO) && GetpLookupType($fName) == LT_LOOKUPTABLE)
			$value=DisplayLookupWizard($fName,$data[$fName],$data,"",MODE_VIEW);
		elseif(NeedEncode($fName))
			$value = ProcessLargeText(GetData($data,$fName, ViewFormat($fName)),"field=".rawurlencode(htmlspecialchars($fName)),"",MODE_VIEW);
		else
			$value = GetData($data,$fName, ViewFormat($fName));
		
		$xt->assign($gfName."_editcontrol",$value);
	}
}
//fill tab groups name and sections name to controls
$pageObject->fillCntrlTabGroups();
			
$pageObject->jsSettings['tableSettings'][$strTableName]["keys"] = $keys;
$pageObject->jsSettings['tableSettings'][$strTableName]["prevKeys"] = $prev;
$pageObject->jsSettings['tableSettings'][$strTableName]["nextKeys"] = $next; 
if($pageObject->lockingObj)
{
	$pageObject->jsSettings['tableSettings'][$strTableName]["sKeys"] = $skeys;
	$pageObject->jsSettings['tableSettings'][$strTableName]["enableCtrls"] = $enableCtrlsForEditing;
	$pageObject->jsSettings['tableSettings'][$strTableName]["confirmTime"] = $pageObject->lockingObj->ConfirmTime;
}

/////////////////////////////////////////////////////////////
if($pageObject->isShowDetailTables && $inlineedit!=EDIT_INLINE && !isMobile())
{
	if(count($dpParams['ids']))
	{
		include('classes/listpage.php');
		include('classes/listpage_embed.php');
		include('classes/listpage_dpinline.php');
		$xt->assign("detail_tables",true);	
	}
	
	$dControlsMap = array();
	$flyId = $ids+1;
	
	for($d=0;$d<count($dpParams['ids']);$d++)
	{
		$options = array();
		//array of params for classes
		$options["mode"] = LIST_DETAILS;
		$options["pageType"] = PAGE_LIST;
		$options["masterPageType"] = PAGE_EDIT;
		$options["mainMasterPageType"] = PAGE_EDIT;
		$options['masterTable'] = "dbo.Month Billings";
		$options['firstTime'] = 1;
		
		$strTableName = $dpParams['strTableNames'][$d];
		
		if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search")){
			$strTableName = "dbo.Month Billings";
			continue;
		}
		
		include("include/".GetTableURL($strTableName)."_settings.php");
		
		$options['xt'] = new Xtempl();
		$options['id'] = $dpParams['ids'][$d];
		$options['flyId'] = $flyId++;
		$masterKeys = array();
		$mkr=1;
		
		foreach($mKeys[$strTableName] as $mk){
			$options['masterKeysReq'][$mkr] = $data[$mk];
			$masterKeys['masterKey'.$mkr] = $data[$mk];
			$mkr++;
		}
		
		$listPageObject = ListPage::createListPage($strTableName, $options);
		// prepare code
		$listPageObject->prepareForBuildPage();
		// show page
		if($listPageObject->isDispGrid())
		{
			//add detail settings to master settings
			$listPageObject->fillSetCntrlMaps();
			
			$pageObject->jsSettings['tableSettings'][$strTableName]	= $listPageObject->jsSettings['tableSettings'][$strTableName];
			
			foreach($listPageObject->jsSettings["global"]["shortTNames"] as $tName => $shortTName){
				$pageObject->settingsMap["globalSettings"]["shortTNames"][$tName] = $shortTName;
			}
			
			$dControlsMap[$strTableName] = $listPageObject->controlsMap;
			$dControlsMap[$strTableName]['masterKeys'] = $masterKeys;
			
			//Add detail's js files to master's files
			$pageObject->copyAllJSFiles($listPageObject->grabAllJSFiles());
			
			//Add detail's css files to master's files
			$pageObject->copyAllCSSFiles($listPageObject->grabAllCSSFiles());
		}
		$xtParams = array("method"=>'showPage', "params"=> false);
		$xtParams['object'] = $listPageObject;
		$xt->assign("displayDetailTable_".GoodFieldName($listPageObject->tName), $xtParams);
		
		$pageObject->controlsMap['dpTablesParams'][] = array('tName'=>$strTableName, 'id'=>$options['id']);
		
		$flyId = $listPageObject->recId+1;
	}
	$pageObject->controlsMap['dControlsMap'] = $dControlsMap;
	$strTableName = "dbo.Month Billings";
}
/////////////////////////////////////////////////////////////
//fill jsSettings and ControlsHTMLMap
$pageObject->fillSetCntrlMaps();

$pageObject->addCommonJs();

//For mobile version in apple device

if($inlineedit == EDIT_SIMPLE)
{
	// assign body end
	$pageObject->body['end'] = array();
	$pageObject->body['end']["method"] = "assignBodyEnd";
	$pageObject->body['end']["object"] = &$pageObject;
	$xt->assign("body", $pageObject->body);
	$xt->assign("flybody",true);
}
else
{
	$returnJSON['controlsMap'] = $pageObject->controlsHTMLMap;
	$returnJSON['settings'] = $pageObject->jsSettings;	
}


if($inlineedit==EDIT_POPUP){
	$xt->assign("footer",false);
	$xt->assign("header",false);
	$xt->assign("body",$pageObject->body);
	//$xt->assign("body",true);
}

$xt->assign("style_block",true);
$pageObject->xt->assign("legend", true);

$viewlink="";
$viewkeys=array();
	$viewkeys["editid1"]=postvalue("editid1");
foreach($viewkeys as $key=>$val)
{
	if($viewlink)
		$viewlink.="&";
	$viewlink.=$key."=".$val;
}
$xt->assign("viewlink_attrs","id=\"viewButton".$id."\" name=\"viewButton".$id."\" onclick=\"window.location.href='Month_Billings_view.php?".$viewlink."'\"");
if(CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search") && $inlineedit==EDIT_SIMPLE)
	$xt->assign("view_button",true);
else
	$xt->assign("view_button",false);

/////////////////////////////////////////////////////////////
//display the page
/////////////////////////////////////////////////////////////
if($eventObj->exists("BeforeShowEdit"))
	$eventObj->BeforeShowEdit($xt,$templatefile,$data);
if($inlineedit==EDIT_POPUP)
{
	$xt->load_template($templatefile);
	$returnJSON['html'] = $xt->fetch_loaded('style_block').$xt->fetch_loaded('body');
	$returnJSON['idStartFrom'] = $flyId + 1;
	echo (my_json_encode($returnJSON)); 
}
elseif($inlineedit == EDIT_INLINE)
{
	$xt->load_template($templatefile);
	$returnJSON["html"] = array();
	foreach($editFields as $fName)
	{
		if($detailKeys && in_array($fName, $detailKeys))
			continue;
		$returnJSON["html"][$fName] = $xt->fetchVar(GoodFieldName($fName)."_editcontrol");
	}
	
	echo (my_json_encode($returnJSON)); 
}
else
	$xt->display($templatefile);

?>
