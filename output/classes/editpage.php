<?php
include_once(getabspath("classes/runnerpage.php"));
class EditPage extends RunnerPage
{
	
	function EditPage(&$params)
	{
		parent::RunnerPage($params);
	}
	
	/**
	 * Assign body end
	 */	
	function assignBodyEnd(&$params) 
	{
		parent::assignBodyEnd($params);
			}
}
?>