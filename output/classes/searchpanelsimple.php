<?php
/**
 * Search panel builder for LIST_SIMPLE mode
 *
 */
class SearchPanelSimple extends SearchPanel {

	var $srchPanelAttrs = array();
	
	var $isDisplaySearchPanel = true;
	
	function SearchPanelSimple(&$params) {
		parent::SearchPanel($params);
		
		$this->isDisplaySearchPanel = GetTableData($this->tName, ".showSearchPanel", false);
	}
	
	function buildSearchPanel($xtVarName) 
	{
		parent::buildSearchPanel();
		if ($this->isDisplaySearchPanel)
		{
			// create search panel
			$searchPanel = array();
			$searchPanel["method"] = "DisplaySearchPanel";
			$searchPanel["object"] = &$this;
			
			$this->srchPanelAttrs = $this->searchClauseObj->getSrchPanelAttrs();
			$params = array();
			$searchPanel["params"] = $params;
			$this->pageObj->xt->assignbyref($xtVarName, $searchPanel);
		}
	}
	
	function searchAssign() {
		
		parent::searchAssign();
		
		$searchGlobalParams = $this->searchClauseObj->getSearchGlobalParams();	
		$searchPanelAttrs = $this->searchClauseObj->getSrchPanelAttrs();
		// show hide window	
		$this->pageObj->xt->assign("showHideSearchWin_attrs", 'align="absmiddle" title="Floating window" alt="Floating window"');
		$searchOpt_mess = ($searchPanelAttrs['srchOptShowStatus'] ? mlang_message("SEARCH_HIDE_OPTIONS") : mlang_message("SEARCH_SHOW_OPTIONS"));
		$this->pageObj->xt->assign("showHideSearchPanel_attrs", 'align="absmiddle" title="'.$searchOpt_mess.'" alt="'.$searchOpt_mess.'"');
		
		$searchforAttrs = "";
		
		if($this->isUseAjaxSuggest){
			$searchforAttrs .= "autocomplete=off ";
		}
		
		if(!$this->searchClauseObj->isUsedSrch())
			$searchforAttrs .= 'class="ctlSearchFor"';
		
		$searchforAttrs.= " name=\"ctlSearchFor".$this->id."\" id=\"ctlSearchFor".$this->id."\"";
		
		$valSrchFor = $this->searchClauseObj->isUsedSrch() ? $searchGlobalParams["simpleSrch"] : mlang_message("SEARCH_TIP");
		$searchforAttrs.= " value=\"".htmlspecialchars($valSrchFor)."\"";
		$this->pageObj->xt->assignbyref("searchfor_attrs", $searchforAttrs);
		
		$this->pageObj->xt->assign('searchPanelTopButtons', $this->isDisplaySearchPanel);
		
		if (GetTableData($this->tName, ".showSimpleSearchOptions", false))
		{
			$simpleSearchTypeCombo = '<select id="simpleSrchTypeCombo'.$this->id.'" name="simpleSrchTypeCombo'.$this->id.'" size="1">';
			$simpleSearchTypeCombo .= $this->searchControlBuilder->getSimpleSearchTypeCombo($searchGlobalParams["simpleSrchTypeComboOpt"], $searchGlobalParams["simpleSrchTypeComboNot"]) ;
			$simpleSearchTypeCombo .= "</select>";
			
			$this->pageObj->xt->assign('simpleSearchTypeCombo', $simpleSearchTypeCombo);
			
			$simpleSearchFieldCombo = '<select id="simpleSrchFieldsCombo'.$this->id.'" name="simpleSrchFieldsCombo'.$this->id.'" size="1">';
			$simpleSearchFieldCombo .= $this->searchControlBuilder->simpleSearchFieldCombo($this->allSearchFields, $searchGlobalParams["simpleSrchFieldsComboOpt"]) ;
			$simpleSearchFieldCombo .= "</select>";
			
			$this->pageObj->xt->assign('simpleSearchFieldCombo', $simpleSearchFieldCombo);	
		}
	}
	
	/**
	 * Search panel on list template handler
	 *
	 * @param array $params
	 */
	function DisplaySearchPanel(&$params)
	{
		global $gLoadSearchControls;
	
		$dispNoneStyle = 'style="display: none;"';
		$xt = new Xtempl();
		
		$xt->assign('searchPanel', $this->isDisplaySearchPanel);
		
		$xt->assign('id', $this->id);
		// search panel radio button assign
		$searchRadio = $this->searchControlBuilder->getSearchRadio();
		$xt->assign_section("all_checkbox_label", $searchRadio['all_checkbox_label'][0], $searchRadio['all_checkbox_label'][1]);
		$xt->assign_section("any_checkbox_label", $searchRadio['any_checkbox_label'][0], $searchRadio['any_checkbox_label'][1]);
		$xt->assignbyref("all_checkbox",$searchRadio['all_checkbox']);
		$xt->assignbyref("any_checkbox",$searchRadio['any_checkbox']);
		
		$xt->assign("searchbutton_attrs", "id=\"searchButton".$this->id."\" ");
		
		$showHideOpt_mess = $this->srchPanelAttrs['ctrlTypeComboStatus'] ? mlang_message("SEARCH_HIDE_OPTIONS_BUTTON") : mlang_message("SEARCH_SHOW_OPTIONS_BUTTON");
		
		// show hide search type opt message
		$xt->assign("showHideOpt_mess", $showHideOpt_mess);
		
		$xt->assign("srchOpt_attrs", 'style="display: none;"');	
		
		if($this->searchClauseObj->getUsedCtrlsCount()>0)
			$xt->assign("srchCritTopCont_attrs", '');
		else
			$xt->assign("srchCritTopCont_attrs", 'style="display: none;"');
			
		if($this->searchClauseObj->getUsedCtrlsCount()>1)
			$xt->assign("srchCritBottomCont_attrs", '');
		else
			$xt->assign("srchCritBottomCont_attrs", 'style="display: none;"');
			
		if($this->searchClauseObj->getUsedCtrlsCount()>0)
			$xt->assign("bottomSearchButt_attrs", '');
		else
			$xt->assign("bottomSearchButt_attrs", 'style="display: none;"');
			
		// array for assign
		$srchCtrlBlocksArr = array();
		
		$recId = $this->pageObj->genId();
		
		// build search controls for each field, first we need to build used controls, because cached must have last index	
		for($j=0;$j<count($this->allSearchFields);$j++)
		{
			$this->pageObj->fillFieldToolTips($this->allSearchFields[$j]);
			$xt->assign("addSearch_".GoodFieldName($this->allSearchFields[$j]), true);
			$srchFields = $this->searchClauseObj->getSearchCtrlParams($this->allSearchFields[$j]);
			$ctrlInd = 0;
			
			$isFieldNeedSecCtrl = $this->searchControlBuilder->isNeedSecondCtrl($this->allSearchFields[$j]);
			// add field that should be always shown on panel
			if (!count($srchFields) && in_array($this->allSearchFields[$j], $this->panelSearchFields))
			{
				$srchFields[] = array('opt'=>'', 'not'=>'', 'value1'=>'', 'value2'=>'');
			}
			
			// build used ctrls
			for($i=0; $i<count($srchFields); $i++)
			{
				// build used ctrl
				$srchCtrlBlocksArr[] = $this->searchControlBuilder->buildSearchCtrlBlockArr($recId, $this->allSearchFields[$j], $ctrlInd, $srchFields[$i]['opt'], $srchFields[$i]['not'], false, $srchFields[$i]['value1'], $srchFields[$i]['value2']);
				
				if ($isFieldNeedSecCtrl) 
				{
					$this->pageObj->controlsMap["search"]["searchBlocks"][] = array('fName'=>$this->allSearchFields[$j], 'recId'=>$recId, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
					$ctrlInd+=2;
				}else{
					$this->pageObj->controlsMap["search"]["searchBlocks"][] = array('fName'=>$this->allSearchFields[$j], 'recId'=>$recId, 'ctrlsMap'=>array(0=>$ctrlInd));
					$ctrlInd++;
				}
				// increment ID
				$recId = $this->pageObj->genId();
				// make 0 for cached ctrls and build cache ctrls
				$ctrlInd = 0;
			}
			
			// use this criteria, for create cached ctrls. Because, it can slow page with big amout of ctrls
			if (count($this->allSearchFields) < $gLoadSearchControls)
			{
				// add cached ctrl
				$srchCtrlBlocksArr[] = $this->searchControlBuilder->buildSearchCtrlBlockArr($recId, $this->allSearchFields[$j], $ctrlInd, '', false, true, '', '');
				
				if ($isFieldNeedSecCtrl)
				{
					$this->pageObj->controlsMap["search"]["searchBlocks"][] = array('fName'=>$this->allSearchFields[$j], 'recId'=>$recId, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
					$ctrlInd+=2;
				}else{
					$this->pageObj->controlsMap["search"]["searchBlocks"][] = array('fName'=>$this->allSearchFields[$j], 'recId'=>$recId, 'ctrlsMap'=>array(0=>$ctrlInd));
					$ctrlInd++;
				}
				$recId = $this->pageObj->genId();
			}
		}
		// assign blocks with ctrls
		$xt->assign_loopsection('searchCtrlBlock', $srchCtrlBlocksArr);
		
		// display templ
		$xt->display($this->pageObj->shortTableName."_search_panel.htm");
	}
}

?>