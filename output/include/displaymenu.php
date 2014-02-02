<?php
	global $pageObject;
	$pageType = "";
	$pageMode = 0;
	$isAdminTable = false;
	
	if(isset($pageObject))
	{
		$pageType = $pageObject->pageType;
		$pageMode = $pageObject->mode;
		$isAdminTable = $pageObject->isAdminTable();
	}	
		
	$xt = new Xtempl();
	$quickjump = false;
	$horizontal = false;
	
	if(array_key_exists("custom1",$menuparams))
	{ 
		if($menuparams["custom1"]=="horizontal")
			$horizontal = true;
		elseif($menuparams["custom1"]=="quickjump")	
			$quickjump = true;
	}	
		
	// create menu nodes arr
		$menuNodes = array();
	
	if(!$isAdminTable){
		if(!$quickjump){
					if(!isMobile())
				$xt->assign("simpleTypeMenu",true);
			else
				$xt->assign("treeLikeTypeMenu",true);
		}
		$menuNode = array();
		$menuNode["id"] = "1";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "dbo.Actions";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = GetTableCaption("dbo_Actions");
		$menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "2";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "dbo.Anomalies";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = GetTableCaption("dbo_Anomalies");
		$menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "3";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "dbo.Customer Module Assignment";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = GetTableCaption("dbo_Customer_Module_Assignment");
		$menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "4";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "dbo.Customers";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = GetTableCaption("dbo_Customers");
		$menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "5";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "dbo.Electricity Rates";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = GetTableCaption("dbo_Electricity_Rates");
		$menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "6";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "dbo.LU_Anomaly Type";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = GetTableCaption("dbo_LU_Anomaly_Type");
		$menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "7";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "dbo.LU_Customer Type";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = GetTableCaption("dbo_LU_Customer_Type");
		$menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "8";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "dbo.LU_Locations";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = GetTableCaption("dbo_LU_Locations");
		$menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "9";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "dbo.LU_Module Condition";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = GetTableCaption("dbo_LU_Module_Condition");
		$menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "10";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "dbo.LU_Module Status";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = GetTableCaption("dbo_LU_Module_Status");
		$menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "11";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "dbo.LU_Module Type";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = GetTableCaption("dbo_LU_Module_Type");
		$menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "12";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "dbo.Module";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = GetTableCaption("dbo_Module");
		$menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "13";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "dbo.Month Billings";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = GetTableCaption("dbo_Month_Billings");
		$menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "14";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "dbo.Readings";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = GetTableCaption("dbo_Readings");
		$menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "15";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "dbo.User Roles";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = GetTableCaption("dbo_User_Roles");
		$menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "16";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "dbo.System Users";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = GetTableCaption("dbo_System_Users");
		$menuNodes[] = $menuNode;
			if($pageType == PAGE_MENU && IsAdmin())
		{
				}
	}else{
		//Admin Area menu items
		$xt->assign("adminAreaTypeMenu",true);
	}	
	
	// need to predefine vars
	$nullParent = NULL;
	$rootInfoArr = array("id"=>0, "href"=>"");
	// create treeMenu instance
	$menuRoot = new MenuItem($rootInfoArr, $menuNodes, $nullParent);
	// call xtempl assign, set session params
	$menuRoot->setMenuSession();
	$menuRoot->assignMenuAttrsToTempl($xt);
	$menuRoot->setCurrMenuElem($xt);
//	$menuRoot->clearMenuSession();
	
	$xt->assign("mainmenu_block",true);
	$rOrder = $xt->getReadingOrder();
	
	$mainmenu = array();
	if(isEnableSection508()) 
		$mainmenu["begin"]="<a name=\"skipmenu\"></a>";
	$mainmenu["end"] = '';
	//$mainmenu["end"]='<script type="text/javascript" language="javascript" src="include/jquery.dropshadow.js"></script>';
		
	$countLinks = 0;
	$countGroups = 0;
	foreach($menuRoot->children as $ind=>$val)
	{
		if($val->showAsLink)
			$countLinks++;
		if ($val->showAsGroup)
			$countGroups++;
	}
	if(($pageType == PAGE_MENU) || $countLinks>1 || $countGroups>0)
	{
		$xt->assignbyref("mainmenu_block",$mainmenu);
		if($quickjump)
			$xt->display("mainmenu_quickjump.htm");
		elseif($horizontal)
			$xt->display("mainmenu_horiz.htm");
		else
			$xt->display("mainmenu.htm");
	}
?>
