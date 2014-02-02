<?php

// handling errors
function triggerErrorMSSQL()
{
	global $conn;
	$error = db_error($conn);
	if (!strlen($error))
		trigger_error("Udefined MSSQL Server Error", E_USER_ERROR);
	else 
		trigger_error($error, E_USER_ERROR);
}
// connection to server and choosing DB
function db_connect()
{
    global $host,$user,$pwd,$dbname;
    
	$connectionInfo = array("Database"=>$dbname, "PWD" => $pwd, "UID" => $user);
	$conn = sqlsrv_connect($host, $connectionInfo);
		
	if(!$conn)
		triggerErrorMSSQL();
	
	return $conn;
}
// free connection resources 
function db_close($conn)
{
	return sqlsrv_close($conn);
}
// make query
function db_query($qstring,$conn)
{
	global $strLastSQL,$dDebug;
	if ($dDebug===true)
		echo $qstring."<br>";
	
	$strLastSQL=$qstring;	
	$ret=sqlsrv_query($conn, $qstring);
	
	if($ret===false)
		triggerErrorMSSQL();
		
	return $ret;	
}
// executing query
function db_exec($qstring,$conn)
{
	global $strLastSQL,$dDebug;
	if ($dDebug===true)
		echo $qstring."<br>";
	$strLastSQL=$qstring;
	return sqlsrv_query($conn, $qstring);
}
// pageseek
function db_pageseek($qhandle,$pagesize,$page)
{
	db_dataseek($qhandle,($page-1)*$pagesize);
}
// search row 
function db_dataseek($qhandle,$row)
{
	if($row>0)
		for ($i=0;$i<$row;$i++)
			if (!sqlsrv_fetch($qhandle))
				break;
}
// fetch accoc array
function db_fetch_array($qhandle)
{	
	$rowArray=array();	
	$metaData = sqlsrv_field_metadata($qhandle);
	$fetchRes = sqlsrv_fetch($qhandle);
	
	
	if($fetchRes === false)
	{
		triggerErrorMSSQL();
	}
	elseif (is_null($fetchRes))
	{
		return $rowArray;
	}
	else
	{	
		$j=0;		
		foreach($metaData as $fieldMetadata)
		{			
			switch ($fieldMetadata['Type']) 
			{
			//dateTime	
			case 93:
			    $fieldVal = sqlsrv_get_field($qhandle, $j, SQLSRV_PHPTYPE_STRING(SQLSRV_ENC_CHAR));			 
				$fieldVal = substr($fieldVal, 0, strrpos($fieldVal, "."));
			    break;
			// ntext
			case -10:
				$fieldVal = sqlsrv_get_field($qhandle, $j, SQLSRV_PHPTYPE_STREAM(SQLSRV_ENC_CHAR));
				$buffer = null;
				while (!feof($fieldVal)) 
				{
				    $buffer .= fgets($fieldVal, 4096);
				}
				fclose($fieldVal);
				$fieldVal = $buffer;
			    break;
			// image
			case -4:
				$fieldVal = sqlsrv_get_field($qhandle, $j, SQLSRV_PHPTYPE_STREAM(SQLSRV_ENC_BINARY));
				$buffer = null;
				while (!feof($fieldVal)) 
				{
				    $buffer .= fgets($fieldVal, 4096);
				}
				fclose($fieldVal);
				$fieldVal = $buffer;				
			    break;
			// text
			case -1:
				$fieldVal = sqlsrv_get_field($qhandle, $j, SQLSRV_PHPTYPE_STREAM(SQLSRV_ENC_CHAR));
				$buffer = null;
				while (!feof($fieldVal)) 
				{
				    $buffer .= fgets($fieldVal, 4096);
				}
				fclose($fieldVal);
				$fieldVal = $buffer;				
			    break;
			// need to check, may be int data should be retrieved in another type		
			default:   				
				$fieldVal = sqlsrv_get_field($qhandle, $j);						    
			}	
			
			$rowArray[$fieldMetadata['Name']] = $fieldVal;
			$j++;			
		}
		return $rowArray;
	}	
}
// fetch num array
function db_fetch_numarray($qhandle)
{
	$rowArray=array();	
	$metaData = sqlsrv_field_metadata($qhandle);
	$fetchRes = sqlsrv_fetch($qhandle);
	
	
	if($fetchRes === false)
	{
		triggerErrorMSSQL();
	}
	elseif (is_null($fetchRes))
	{
		return $rowArray;
	}
	else
	{	
		$j=0;		
		foreach($metaData as $fieldMetadata)
		{
			switch ($fieldMetadata['Type']) 
			{
			//dateTime	
			case 93:
			    $fieldVal = sqlsrv_get_field($qhandle, $j, SQLSRV_PHPTYPE_STRING(SQLSRV_ENC_CHAR));			 
				$fieldVal = substr($fieldVal, 0, strrpos($fieldVal, "."));
			    break;
			// ntext
			case -10:
				$fieldVal = sqlsrv_get_field($qhandle, $j, SQLSRV_PHPTYPE_STREAM(SQLSRV_ENC_CHAR));
				$buffer = null;
				while (!feof($fieldVal)) 
				{
				    $buffer .= fgets($fieldVal, 4096);
				}
				fclose($fieldVal);
				$fieldVal = $buffer;
			    break;
			// image
			case -4:
				$fieldVal = sqlsrv_get_field($qhandle, $j, SQLSRV_PHPTYPE_STREAM(SQLSRV_ENC_BINARY));
				$buffer = null;
				while (!feof($fieldVal)) 
				{
				    $buffer .= fgets($fieldVal, 4096);
				}
				fclose($fieldVal);
				$fieldVal = $buffer;				
			    break;
			// text
			case -1:
				$fieldVal = sqlsrv_get_field($qhandle, $j, SQLSRV_PHPTYPE_STREAM(SQLSRV_ENC_CHAR));
				$buffer = null;
				while (!feof($fieldVal)) 
				{
				    $buffer .= fgets($fieldVal, 4096);
				}
				fclose($fieldVal);
				$fieldVal = $buffer;				
			    break;
			// need to check, may be int data should be retrieved in another type		
			default:   				
				$fieldVal = sqlsrv_get_field($qhandle, $j);				    
			}		
			$rowArray[] = $fieldVal;
			$j++;	
		}
		return $rowArray;
	}
}

function db_closequery($qhandle)
{
	@sqlsrv_free_stmt($qhandle);
}

// return error message
function db_error($conn)
{
	$errMess = "";
	if(($errors=sqlsrv_errors())!=null)
		foreach( $errors as $error)		
			$errMess .= "SQLSTATE: ".$error['SQLSTATE']." code: ".$error['code']." message: ".$error['message']."</br>";
			
    return $errMess;
}

// Retrieves the number of fields in an active result set
function db_numfields($lhandle)
{
	return @sqlsrv_num_fields($lhandle);
}
// return field name
function db_fieldname($lhandle,$fnumber)
{
	$metaData = @sqlsrv_field_metadata($lhandle);
	if ($metaData!==false)
		return $metaData[$fnumber]['Name'];	
}


?>