<?php
require_once "plugins/PHPExcel/IOFactory.php";

function ExportExcelInit($arrdata,$arrwidth)
{
	global $cCharset;
	$objPHPExcel = new PHPExcel();
	$objPHPExcel->getProperties()->setCreator("PHP");
	$objPHPExcel->setActiveSheetIndex(0)->setTitle("Export");
	$col=0;
	foreach($arrdata as $field=>$data)
	{
		$data=PHPExcel_Shared_String::ConvertEncoding($data, 'UTF-8', $cCharset);
		$objPHPExcel->setActiveSheetIndex(0)->setCellValueByColumnAndRow($col,1,$data);
		$colLetter=PHPExcel_Cell::stringFromColumnIndex($col);
		$objPHPExcel->getActiveSheet()->getColumnDimension($colLetter)->setWidth($arrwidth[$field]);
		$col++;
	}

	return $objPHPExcel;
}

function ExportExcelRecord($arrdata,$datatype,$row,$objPHPExcel)
{
	global $cCharset,$locale_info;
	$col=-1;
	foreach($arrdata as $field=>$data)
	{
		$col++;
		$colLetter=PHPExcel_Cell::stringFromColumnIndex($col);
		if($datatype[$field]=="binary")
		{
			if(!$data)
				continue;
			if(!function_exists("imagecreatefromstring"))
			{
				$objPHPExcel->setActiveSheetIndex(0)->setCellValueByColumnAndRow($col,$row+1,mlang_message("LONG_BINARY"));
				continue;
			}
			$error_handler=set_error_handler("empty_error_handler");
			$gdImage = imagecreatefromstring($data);
			if($error_handler)
				set_error_handler($error_handler);
			if($gdImage)
			{
				$objDrawing = new PHPExcel_Worksheet_MemoryDrawing();
				$objDrawing->setImageResource($gdImage);
				$objDrawing->setCoordinates($colLetter.($row+1));
				$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());
				$width=$objDrawing->getWidth()*0.143;
				$height=$objDrawing->getHeight()*0.75;
				if($objPHPExcel->setActiveSheetIndex(0)->getRowDimension($row+1)->getRowHeight()<$height)
					$objPHPExcel->setActiveSheetIndex(0)->getRowDimension($row+1)->setRowHeight($height);
				$objPHPExcel->getActiveSheet()->getColumnDimension($colLetter)->setAutoSize(false);
				if($objPHPExcel->setActiveSheetIndex(0)->getColumnDimension($colLetter)->getWidth()<$width)
					$objPHPExcel->setActiveSheetIndex(0)->getColumnDimension($colLetter)->setWidth($width);
			}
		}
		elseif($datatype[$field]=="file")
		{
			if(!file_exists(getUploadFolder($field).$data) || !$data)
				continue;
			$objDrawing = new PHPExcel_Worksheet_Drawing();
			$objDrawing->setPath(getUploadFolder($field).$data);
			$objDrawing->setCoordinates($colLetter.($row+1));
			$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());
			$width=$objDrawing->getWidth()*0.143;
			$height=$objDrawing->getHeight()*0.75;
			if($objPHPExcel->setActiveSheetIndex(0)->getRowDimension($row+1)->getRowHeight()<$height)
				$objPHPExcel->setActiveSheetIndex(0)->getRowDimension($row+1)->setRowHeight($height);
			$objPHPExcel->getActiveSheet()->getColumnDimension($colLetter)->setAutoSize(false);
			if($objPHPExcel->setActiveSheetIndex(0)->getColumnDimension($colLetter)->getWidth()<$width)
				$objPHPExcel->setActiveSheetIndex(0)->getColumnDimension($colLetter)->setWidth($width);
		}
		else
		{
			$data=PHPExcel_Shared_String::ConvertEncoding($data, 'UTF-8', $cCharset);
			$objPHPExcel->setActiveSheetIndex(0)->setCellValueByColumnAndRow($col,$row+1,$data);
			if($datatype[$field]=="date")
				$objPHPExcel->setActiveSheetIndex(0)->getStyle($colLetter.($row+1))->getNumberFormat()->setFormatCode($locale_info["LOCALE_SSHORTDATE"]." hh:mm:ss");	
				
		}
	}
}

function ExportExcelTotals($arrTotal,$arrTotalMessage,$row,$objPHPExcel)
{
	global $cCharset;
	$col=0;
	foreach($arrTotal as $key=>$value)
	{
		if($value)
			$objPHPExcel->setActiveSheetIndex(0)->setCellValueByColumnAndRow($col,$row+1,$arrTotalMessage[$key].PHPExcel_Shared_String::ConvertEncoding($value, 'UTF-8', $cCharset));
		$col++;
	}
}
function ExportExcelSave($filename,$format,$objPHPExcel)
{
	global $cCharset;
	$filename=PHPExcel_Shared_String::ConvertEncoding($filename, 'UTF-8', $cCharset);
	if($format=="Excel2007")
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
	else
		header('Content-Type: application/vnd.ms-excel');
	
	header('Content-Disposition: attachment;filename="'.$filename.'";');
	header('Cache-Control: max-age=0');	
	
	$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, $format);
	$objWriter->save('php://output'); 
}

function ExportToExcel()
{
	global $rs,$nPageSize,$strTableName,$conn,$eventObj;

	if($eventObj->exists("ListFetchArray"))
		$row = $eventObj->ListFetchArray($rs);
	else
		$row = db_fetch_array($rs);	
//	if(!$row)
//		return;
	
	$arrLabel=array();
	$arrColumnWidth=array();
	$arrTotal=array();
	$arrTotalMessage=array();
	$totals=array();
	
	$arrFields = array();
	$arrTmpTotal = array();
	$arrFields = GetFieldsList($strTableName);
	$arrTmpTotal = GetTableData($strTableName,".totalsFields",array());
	
	foreach($arrFields as $value)
	{
		$arrLabel[$value]=label($value,$strTableName);
		$arrColumnWidth[$value]=10;
		$totals[$value]=0;
		$totalsType="";
		foreach($arrTmpTotal as $tvalue)
		{
			if($tvalue["fName"]==$value)
				$totalsType=$tvalue["totalsType"];
		}
		$totalsFields[]=array('fName'=>$value, 'totalsType'=>$totalsType, 'viewFormat'=>ViewFormat($value,$strTableName));
	}
	
// write data rows
	$iNumberOfRows = 0;
	
	$objPHPExcel=ExportExcelInit($arrLabel,$arrColumnWidth);
	
	while((!$nPageSize || $iNumberOfRows<$nPageSize) && $row)
	{
		countTotals($totals,$totalsFields, $row);
		$values = array();
		$arrData=array();	
		$arrDataType=array();	

	foreach($arrFields as $value)
	{
		if(GetEditFormat($value,$strTableName)==EDIT_FORMAT_LOOKUP_WIZARD || GetEditFormat($value,$strTableName)==EDIT_FORMAT_RADIO)
		{
			$values[$value] = "";	
			if(strlen($row[$value]))
			{
				$values[$value] = DisplayLookupWizard($value, $row[$value], $row,"",MODE_EXPORT);
			}
		}
		elseif(IsBinaryType(GetFieldType($value,$strTableName)))
		{
			$values[$value] = $row[$value];
		}
		else
		{
			
			if(ViewFormat($value,$strTableName)!=FORMAT_FILE_IMAGE && ViewFormat($value,$strTableName)!=FORMAT_FILE && ViewFormat($value,$strTableName)!=FORMAT_HYPERLINK && ViewFormat($value,$strTableName)!=FORMAT_EMAILHYPERLINK && ViewFormat($value,$strTableName)!=FORMAT_CHECKBOX)
				$format=ViewFormat($value,$strTableName);
			else
				$format=FORMAT_NONE;
			
			$values[$value] = GetData($row,$value,$format);
		}
	}

		
		$eventRes = true;
		if ($eventObj->exists('BeforeOut'))
		{			
			$eventRes = $eventObj->BeforeOut($row, $values, $arrColumnWidth, $iNumberOfRows+1, $objPHPExcel);
		}
		if ($eventRes)
		{
			$iNumberOfRows++;
		$i=0;
		foreach($arrFields as $value)
		{
			if(IsBinaryType(GetFieldType($value,$strTableName)))
				$arrDataType[$value] = "binary";
			elseif(ViewFormat($value,$strTableName)==FORMAT_FILE_IMAGE)
				$arrDataType[$value] = "file";
			elseif(ViewFormat($value,$strTableName)==FORMAT_DATE_SHORT || ViewFormat($value,$strTableName)==FORMAT_DATE_LONG || ViewFormat($value,$strTableName)==FORMAT_DATE_TIME)
				$arrDataType[$value] = "date";
			else
				$arrDataType[$value] = "";
			$arrData[$value]=$values[$value];
		}	
			ExportExcelRecord($arrData,$arrDataType,$iNumberOfRows,$objPHPExcel);
		}		
		
		
		if($eventObj->exists("ListFetchArray"))
			$row = $eventObj->ListFetchArray($rs);
		else
			$row = db_fetch_array($rs);	
	}
	
	if(count($arrTmpTotal))
	{
		foreach($arrFields as $fName)
		{
			$value = array();
			foreach($arrTmpTotal as $tvalue)
			{
				if($tvalue["fName"]==$fName)
				{
					$value=$tvalue;
				}
			}
			$total="";
			$totalMess="";
			if($value["totalsType"])
			{
				if($value["totalsType"]=="COUNT")
					$totalMess="Count".": ";
				elseif($value["totalsType"]=="TOTAL")
					$totalMess="Total".": ";
				elseif($value["totalsType"]=="AVERAGE")
					$totalMess="Average".": ";
				$total=GetTotals($fName, $totals[$fName], $value["totalsType"], $iNumberOfRows, $value["viewFormat"]);
			}
			$arrTotal[$fName]=$total;
			$arrTotalMessage[$fName]=$totalMess;
		}
	}

	ExportExcelTotals($arrTotal,$arrTotalMessage,++$iNumberOfRows,$objPHPExcel);
	
	$formatExcel="Excel2007";
	$extExcel=".xlsx";
	if(@$_REQUEST["type"]=="excel5")
	{
		$formatExcel="Excel5";
		$extExcel=".xls";
	}
	ExportExcelSave(GoodFieldName($strTableName).$extExcel,$formatExcel,$objPHPExcel);
}

?>