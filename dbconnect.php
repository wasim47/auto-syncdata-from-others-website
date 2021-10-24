<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

	if (!($db = mysqli_connect("localhost","root","","bdjobs")))
	{
			print "<h3>could not connect to host</h3>\n";
			exit;
	}
		
@require_once("google_code.php");		
ob_start( 'ob_gzhandler' );
function now()
{
	$servertime=date("Y-m-d H:i:s");
	$result_localTime=mysqli_query($db,"SELECT DATE_ADD('$servertime', INTERVAL '11:00' HOUR) as local");
	$row_localTime = mysqli_fetch_array($result_localTime); 
	$now=$row_localTime["local"];
	return $now;
}	
function remain($deadline,$lang)
{
	list($y,$m,$d)=split("-",$deadline);
	list($today1,$other)=split(" ",now());
	list($y1,$m1,$d1)=split("-",$today1);

	$today = mktime(0,0,0,$m1,$d1,$y1);
	$last_date = mktime(0,0,0,$m,$d,$y);
	
	$difference=$last_date-$today;
	$remaining=$difference/(24*60*60);
	list($remaining,$OTHER)=split("[.]",$remaining);
	if($remaining=="0")
	{
		if($lang=="0")	$r="<br>(<b><font color=#ee0000>Today</font></b>)";
		else 	$r="<br>(<b><font color=#ee0000>AwR</font></b>)";
	}
	else if($remaining=="1")
	{
		if($lang=="0")	$r="<br>(<b>Tomorrow</b>)";
		else 	$r="<br>(<b>AwMwxiKwl</b>)";
	}
	else
	{
		if($lang=="0")	$r="<br>(<b>$remaining days left</b>)";
		else 	$r="<br>(<b>$remaining xbd gwxK</b>)";
	}
	return $r;
}
function month($m)
{
	switch($m)
	{
		case "01": $M="Rwd÷twky"; break;
		case "02": $M="Àfg›÷twky"; break;
		case "03": $M="iwPÍ"; break;
		case "04": $M="Gxeﬁl"; break;
		case "05": $M="Ài"; break;
		case "06": $M="R÷d"; break;
		case "07": $M="R÷lwB"; break;
		case "08": $M="AwMƒ"; break;
		case "09": $M="ÀoÀÔUπk"; break;
		case "10": $M="AÀÉwgk"; break;
		case "11": $M="dÀhπk"; break;
		case "12": $M="xWÀoπk"; break;
	}
	return $M;
}
function day($d)
{
	switch($d)
	{
		case "Sun": $D="kxggwk"; break;
		case "Mon": $D="Àowigwk"; break;
		case "Tue": $D="iälgwk"; break;
		case "Wed": $D="g÷cgwk"; break;
		case "Thu": $D="gŸp˛exZgwk"; break;
		case "Fri": $D="m÷¢ﬂgwk"; break;
		case "Sat": $D="mxdgwk"; break;
	}
	return $D;
}	
$day_array=split(",","01,02,03,04,05,06,07,08,09,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31");
$month_array=split(",","01,02,03,04,05,06,07,08,09,10,11,12");		
$month_label_array=split(",","January,February,March,April,May,June,July,August,September,October,November,December");	

$gender_array=split(",","Male,Female");
$marital_status_array=split(",","Single,Married");	
$religion_array=split(",","Islam,Hindu,Buddhist,Christian,Others");	
$language_level_array=split(",","Mother Tongue,Beginner,Intermediate,Expert");	

$job_logo="<a href='http://www.job.com.bd' style='text-decoration:none;cursor:pointer;'><label style='font-family:Arial, Helvetica, sans-serif; font-size:36px; font-weight:bolder; color:#278a03;cursor:pointer;'>Job</label><label style='font-family:Arial, Helvetica, sans-serif; font-size:36px; font-weight:bolder; color:#ff0000;cursor:pointer;'>.com.</label><label style='font-family:Arial, Helvetica, sans-serif; font-size:36px; font-weight:bolder; color:#278a03;cursor:pointer;'>bd<br /></label><label style='padding-left:3px; border-top: 1px solid #072475;cursor:pointer;  font-family:Verdana, Arial, Helvetica, sans-serif; font-size:10px; color:#072475'>A pioneer Job Portal of Bangladesh</label></a>";
function get_user_browser()
{
    $u_agent = $_SERVER['HTTP_USER_AGENT'];
    $ub = '';
    if(preg_match('/MSIE/i',$u_agent))
    {
        $ub = "ie";
    }
    elseif(preg_match('/Firefox/i',$u_agent))
    {
        $ub = "firefox";
    }
    elseif(preg_match('/Safari/i',$u_agent))
    {
        $ub = "safari";
    }
    elseif(preg_match('/Chrome/i',$u_agent))
    {
        $ub = "chrome";
    }
    elseif(preg_match('/Flock/i',$u_agent))
    {
        $ub = "flock";
    }
    elseif(preg_match('/Opera/i',$u_agent))
    {
        $ub = "opera";
    }
   
    return $ub;
}	
?>