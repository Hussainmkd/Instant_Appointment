<?php

#===========================================================================================================================================================
                                                   # API FOR SMS
#===========================================================================================================================================================
//SMS Class
#====================================FOR DETAILS CONTACT US
#	Office: FF-04, first floor, deans trade center, Peshawar cantt.
#	Cell: 0333-9840815
#====================================FOR DETAILS CONTACT US



#======================* START - Smile API Class

CLASS SMILE_API
{
	
function get_session()
{
$username="9";	#Put your API Username here
$password="Galaxy8333";	#Put your API Password here
	
$data=file_get_contents("http://api.smilesn.com/session?username=".$username."&password=".$password);
$data=json_decode($data);
$sessionid=$data->sessionid;

$file2 = fopen('session.txt', 'w');

$file1 = fopen('session.txt', 'a');
fputs($file1, $sessionid);
fclose($file1);

return $sessionid;
}
function send_sms($receivenum, $sendernum, $textmessage)
{
$receivenum=urlencode($receivenum);
$sendernum=urlencode($sendernum);
$textmessage=urlencode($textmessage);


$session_file = file("session.txt");
$session_id = trim($session_file[0]);

if(empty($session_id))
{
$session_id = $this->get_session();
}

$data=file_get_contents("http://api.smilesn.com/sendsms?sid=".$session_id."&receivenum=".$receivenum."&sendernum=8333&textmessage=".$textmessage);

$data2=json_decode($data);
$response_status=$data2->status;

#=====* START - IF SESSION EXPIRED IS RETURN, GENERATE ANOTHER SESSION & RETRY
if($response_status=="SESSION_EXPIRED")
{
$session_id = $this->get_session();
$data=file_get_contents("http://api.smilesn.com/sendsms?sid=".$session_id."&receivenum=".$receivenum."&sendernum=8333&textmessage=".$textmessage);
}
#=====* END - IF SESSION EXPIRED IS RETURN, GENERATE ANOTHER SESSION & RETRY

return $data;
}
function receive_sms()
{
$session_file = file("session.txt");
$session_id = trim($session_file[0]);

if(empty($session_id))
{
$session_id = $this->get_session();
}

$data=file_get_contents("http://api.smilesn.com/receivesms?sid=".$session_id);

$data2=json_decode($data);
$response_status=$data2->status;


#=====* START - IF SESSION EXPIRED IS RETURN, GENERATE ANOTHER SESSION & RETRY
if($response_status=="SESSION_EXPIRED")
{
$session_id = $this->get_session();
$data=file_get_contents("http://api.smilesn.com/receivesms?sid=".$session_id);
}
#=====* END - IF SESSION EXPIRED IS RETURN, GENERATE ANOTHER SESSION & RETRY


return $data;
}
	
}


#==========================================================================================================================================================
											# Start Using API
#==========================================================================================================================================================

$object_smile_api = new SMILE_API();

#==========================================================================================================================================================
											# RECEIVE SMS
#==========================================================================================================================================================

$data = $object_smile_api->receive_sms();
$data2=json_decode($data);
foreach($data2->status as $data3)
{
	echo $data3->text." ";
	echo $data3->sender_num."";
	ProcessSMS($data3->text." ", $data3->sender_num);
	//echo $data3->text." ";
}
//ProcessSMS("6,5,345345");


#==========================================================================================================================================================
											# Data base connectivity
#==========================================================================================================================================================

function ProcessSMS($SMS, $Sender)
{
$object_smile_api = new SMILE_API();
//connection to database
$con=mysqli_connect("localhost","root","","hackton");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
//Parsing SMS
list($OfficeID, $ServiceID, $CNIC)  = explode(',', $SMS);
date_default_timezone_set('Asia/Karachi');

//Previous date
//$result = mysqli_query($con,"SELECT MAX(AppointmentDatetime) as PrevDate from v_count_time where OfficeID=".$OfficeID."  and ServiceID=".$ServiceID) or die ("error");


//$row = mysqli_fetch_array($result);
//$Prevdate = $row['PrevDate']."";

//echo $Prevdate.' ';

//incrementing by 30 minutes

$event_time = strftime("%H", time()) . ":" . strftime("%M", time()); 
$event_length = 30; // minutes 
$eTime = strtotime($event_time);
$eTime = strtotime("+$event_length minutes", $eTime);
$new_event_time = date('m/d/Y H:i:s', $eTime);
 
//echo  $new_event_time; 
 

 
mysqli_query($con,"INSERT INTO requests (OfficeID, ServiceID,Applicant, ApplicantCNIC)
VALUES ('".$OfficeID."', '".$ServiceID."','".$Sender."','".$CNIC."')") or die("error");


 $result = mysqli_query($con,"SELECT MAX(RequestID) as a from requests") or die ("error");


$row = mysqli_fetch_array($result);
$token = $row['a']."";

#==========================================================================================================================================================
											# Insert into database
#==========================================================================================================================================================
 
//$rr = "INSERT INTO requests (OfficeID, ServiceID, Datetime, AppointmentDatetime,ApplicantCNIC)
//VALUES ('".$OfficeID."', '".$ServiceID."','".$Prevdate."','" .$new_event_time."','".$CNIC."')";


#==========================================================================================================================================================
											# SEND SMS
#==========================================================================================================================================================

$object_smile_api->send_sms($Sender, "8333", "Your Token Number is: ".$token." Appointment Date/Time is: ".$new_event_time);


mysqli_close($con);
  
}


?>