<?php
if (!($mylink = mysql_connect("localhost","bdteach_job","!@#$%^&*()")))
{
		print "<h3>could not connect to host</h3>\n";
		exit;
}
mysql_select_db("bdteach_jobcom");
		
////////////////////////////
$copyright_chakry="©copyright 2005-". date("Y")." job.com.bd All rights reserved.";
#################  #####################
$_728x90='
<script type="text/javascript"><!--
google_ad_client = "pub-5613998832665776";
/* 728x90, created 8/14/09 */
google_ad_slot = "9622158916";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>';

$_468x60='
<script type="text/javascript"><!--
google_ad_client = "pub-5613998832665776";
/* 468x60, created 8/14/09 */
google_ad_slot = "5766986130";
google_ad_width = 468;
google_ad_height = 60;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>';

$_234x60='
<script type="text/javascript"><!--
google_ad_client = "pub-5613998832665776";
/* 234x60, created 8/14/09 */
google_ad_slot = "9523066711";
google_ad_width = 234;
google_ad_height = 60;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>';

$_120x600='
<script type="text/javascript"><!--
google_ad_client = "pub-5613998832665776";
/* 120x600, created 8/14/09 */
google_ad_slot = "2622323233";
google_ad_width = 120;
google_ad_height = 600;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>';

$_160x600='
<script type="text/javascript"><!--
google_ad_client = "pub-5613998832665776";
/* 160x600, created 8/14/09 */
google_ad_slot = "1038063362";
google_ad_width = 160;
google_ad_height = 600;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>';

$_120x240='
<script type="text/javascript"><!--
google_ad_client = "pub-5613998832665776";
/* 120x240, created 8/14/09 */
google_ad_slot = "1782715196";
google_ad_width = 120;
google_ad_height = 240;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>';

$_336x280='
<script type="text/javascript"><!--
google_ad_client = "pub-5613998832665776";
/* 336x280, created 8/14/09 */
google_ad_slot = "9884803502";
google_ad_width = 336;
google_ad_height = 280;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>';

$_300x250='
<script type="text/javascript"><!--
google_ad_client = "pub-5613998832665776";
/* 300x250, created 8/14/09 */
google_ad_slot = "9228390564";
google_ad_width = 300;
google_ad_height = 250;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>';

$_250x250='
<script type="text/javascript"><!--
google_ad_client = "pub-5613998832665776";
/* 250x250, created 8/14/09 */
google_ad_slot = "1254431650";
google_ad_width = 250;
google_ad_height = 250;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>';

$_200x200='
<script type="text/javascript"><!--
google_ad_client = "pub-5613998832665776";
/* 200x200, created 8/14/09 */
google_ad_slot = "8126898863";
google_ad_width = 200;
google_ad_height = 200;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>';

$_180x150='
<script type="text/javascript"><!--
google_ad_client = "pub-5613998832665776";
/* 180x150, created 8/14/09 */
google_ad_slot = "9088417034";
google_ad_width = 180;
google_ad_height = 150;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>';

$_125x125='
<script type="text/javascript"><!--
google_ad_client = "pub-5613998832665776";
/* 125x125, created 8/14/09 */
google_ad_slot = "3506727812";
google_ad_width = 125;
google_ad_height = 125;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>';

///////////////////////////////////////////
$_728x15='
<script type="text/javascript"><!--
google_ad_client = "pub-5613998832665776";
/* 728x15, created 8/14/09 */
google_ad_slot = "1783684408";
google_ad_width = 728;
google_ad_height = 15;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>';

$_468x15='
<script type="text/javascript"><!--
google_ad_client = "pub-5613998832665776";
/* 468x15, created 8/14/09 */
google_ad_slot = "0131939067";
google_ad_width = 468;
google_ad_height = 15;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>';

$_200x90='
<script type="text/javascript"><!--
google_ad_client = "pub-2186616778908609";
/* 200x90, created 9/18/08 */
google_ad_slot = "1332892472";
google_ad_width = 200;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>';	
/////////////////////////////
function fetch_object($query)
{
	//echo $query;
	if($query!='')
	{
		if($result=mysql_query($query))
		{
			if($r=mysql_fetch_array($result))
			return $r[0]+1;
		}
	}
}
function now()
{
	$servertime=date("Y-m-d H:i:s");
	$result_localTime=mysql_query("SELECT DATE_ADD('$servertime', INTERVAL '11:00' HOUR) as local");
	$row_localTime = mysql_fetch_array($result_localTime); 
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
		case "01": $M="RwdÖtwky"; break;
		case "02": $M="ËfgÝÖtwky"; break;
		case "03": $M="iwPê"; break;
		case "04": $M="GxeÞl"; break;
		case "05": $M="Ëi"; break;
		case "06": $M="RÖd"; break;
		case "07": $M="RÖlwB"; break;
		case "08": $M="AwMÄ"; break;
		case "09": $M="ËoËïU¹k"; break;
		case "10": $M="AËƒwgk"; break;
		case "11": $M="dËh¹k"; break;
		case "12": $M="xWËo¹k"; break;
	}
	return $M;
}
function day($d)
{
	switch($d)
	{
		case "Sun": $D="kxggwk"; break;
		case "Mon": $D="Ëowigwk"; break;
		case "Tue": $D="iŠlgwk"; break;
		case "Wed": $D="gÖcgwk"; break;
		case "Thu": $D="gÙpþexZgwk"; break;
		case "Fri": $D="mÖ¢ßgwk"; break;
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
////////////////////////////
function job_title($job_title)
{
	$job_title=str_replace(", Male/Female","",$job_title);
	$job_title=str_replace(",Male/Female","",$job_title);
	$job_title=str_replace("(Male/Female)","",$job_title);
	$job_title=str_replace("(Male)","",$job_title);
	$job_title=str_replace("(Female)","",$job_title);
	$job_title=str_replace("(Accounts)","",$job_title);
	$job_title=str_replace("(Tax & Vat)","",$job_title);
	$job_title=str_replace("(Operation & Administration)","",$job_title);
	$job_title=str_replace("(Construction)","",$job_title);
	$job_title=str_replace("(Electro Mechanical)","",$job_title);
	$job_title=str_replace("(Commercial Sales)","",$job_title);
	$job_title=str_replace("(Private Sales)","",$job_title);
	$job_title=str_replace("(Recovery)","",$job_title);
	$job_title=str_replace("(Planning knit Production & Merchandising)","",$job_title);
	$job_title=str_replace("(HRD & Compliance)","",$job_title);
	$job_title=str_replace("(Audit, Tax & Vat)","",$job_title);
	$job_title=str_replace("(Eye Camp organizer)","",$job_title);
	$job_title=str_replace("(Quality Control)","",$job_title);
	$job_title=str_replace("(Shipping)","",$job_title);
	$job_title=str_replace("(Administration & Human Resources)","",$job_title);
	$job_title=str_replace("(Front Desk & Customer Care)","",$job_title);
	$job_title=str_replace("(Promotion Marketing)","",$job_title);
	$job_title=str_replace("(sales)","",$job_title);
	$job_title=str_replace("(project)","",$job_title);
	$job_title=str_replace("(QA & Testing)","",$job_title);
	$job_title=str_replace("(Environment & Disaster Preparedness)","",$job_title);
	$job_title=str_replace("(HR)","",$job_title);
	return $job_title;
}
////////////////////
function seperate_email($string)
{
	$string=trim(strip_tags($string));
	$array_string=split(" ",$string);
	for($i=0; $i<count($array_string); $i++)
	{
		if(strstr($array_string[$i],"@"))
		{
			$array_string[$i]=str_replace(",","",$array_string[$i]);
			$array_string[$i]=str_replace("(","",$array_string[$i]);
			$array_string[$i]=str_replace(")","",$array_string[$i]);
			//$array_string[$i]=str_replace(")","",$array_string[$i]);
			
			$array_string[$i]=strtolower($array_string[$i]);
			if(strstr($array_string[$i],"."))
			{
				$with_space=$array_string[$i]." ";
				$without_dot=str_replace(". ","",$with_space);
				$email=rtrim($without_dot);
				return $email;
			}
		}
	}
}
//////////////////
function seperate_number($string)
{
	$string=str_replace("(","",$string);
	$string=str_replace("Female","",$string);
	$string=str_replace("Male","",$string);
	$string=str_replace("/","",$string);
	$string=str_replace("  ","",$string);
	$string=ltrim($string);
	list($a,$b)=split(" ",$string);
	if($a=="NULL" OR $a=="")	$a="01";
	return $a;
}
//////////////////////////////////
function seperate_newspaper($string)
{
	if($string=="dailystar") $source="The Daily Star";
	else if($string=="The Daily Prothom Alo") $source="The Daily Prothom Alo";
	else if($string=="The Daily Prothom Alo") $source="The Daily Prothom Alo";
	else if($string=="prothomalo") $source="The Daily Prothom Alo";
	else if($string=="Others") $source="";
	else $source=$string;
	return $source;
}

function job_category_new($string)
{
	switch($string)
	{
		case "3": $m_cat="1"; break;
		case "1": $m_cat="1"; break;
		case "2": $m_cat="2"; break;
		case "5": $m_cat="3"; break;
		case "4": $m_cat="4"; break;
		case "14": $m_cat="5"; break;
		case "15": $m_cat="6"; break;
		case "8": $m_cat="7"; break;
		case "13": $m_cat="8"; break;
		case "11": $m_cat="9"; break;
		case "6": $m_cat="10"; break;
		case "10": $m_cat="10"; break;
		case "7": $m_cat="12"; break;
		case "16": $m_cat="13"; break;
		case "12": $m_cat="14"; break;
		case "9": $m_cat="15"; break;
		case "17": $m_cat="17"; break;
		default: $m_cat="17"; break;
	}
	return $m_cat;
}

//////////////////////////////////
function job_location($string)
{
	if($string=="") $job_location="";
	else $job_location=$string;
	return $job_location;
}

/////////////////////////////////////
function job_type($string)   
{
	switch($string)
	{
		case "parttime": $employmentType="Part Time"; break;
		case "contractual": $employmentType="Contract"; break;
		default : $employmentType="Full Time"; break;
	}
		return $employmentType;
}
////////////////////////
function edu_qualification($string)   
{
	$array_string=split(" ",$string);
	for($i=0; $i<count($array_string); $i++)
	{
		switch($array_string[$i])
		{
			case "MBA/Masters": $edu_qualification="Masters"; break;
			case "MBA": $edu_qualification="Masters"; break;
			case "Chartered": $edu_qualification="Masters"; break;
			case "Master": $edu_qualification="Masters"; break;
			case "Masters": $edu_qualification="Masters"; break;
			case "M.Sc.": $edu_qualification="Masters"; break;
			case "M.Sc": $edu_qualification="Masters"; break;
			case "M.Com.": $edu_qualification="Masters"; break;
			case "M.Com": $edu_qualification="Masters"; break;
			case "M.A.": $edu_qualification="Masters"; break;
			case "M.A": $edu_qualification="Masters"; break;
			case "CA/CMA": $edu_qualification="Masters"; break;
			case "CA": $edu_qualification="Masters"; break;
			
			case "Bachelor": $edu_qualification="Bachelors"; break;
			case "Degree": $edu_qualification="Bachelors"; break;
			case "Graduate": $edu_qualification="Bachelors"; break;
			case "Graduate/": $edu_qualification="Bachelors"; break;
			case "B.Sc.": $edu_qualification="Bachelors"; break;
			case "B.Sc": $edu_qualification="Bachelors"; break;
			case "B.Com.": $edu_qualification="Bachelors"; break;
			case "B.Com": $edu_qualification="Bachelors"; break;
			case "B.A.": $edu_qualification="Bachelors"; break;
			case "B.A": $edu_qualification="Bachelors"; break;
			
			case "Diploma": $edu_qualification="Diploma"; break;
			
			case "H.S.C.": $edu_qualification="HSC/ A Level"; break;
			case "H.S.C": $edu_qualification="HSC/ A Level"; break;
			case "HSC": $edu_qualification="HSC/ A Level"; break;
			
			case "S.S.C.": $edu_qualification="SSC/ O Level"; break;
			case "S.S.C": $edu_qualification="SSC/ O Level"; break;
			case "SSC": $edu_qualification="SSC/ O Level"; break;
		}
		if($edu_qualification) break;
	}
	if(!$edu_qualification) $edu_qualification="Bachelors";
	return $edu_qualification;
}
////////////////////////
function minimum_experience($string)   
{
	$string=strip_tags($string);
	$string=str_replace("-"," ",$string);
	$string=str_replace("."," ",$string);
	$string=str_replace("&"," ",$string);
	$string=str_replace("/"," ",$string);
	$string=str_replace("\r\n","",$string);
	//$string=str_replace("  ","",$string);
	$array_string=split(" ",$string);
	for($i=0; $i<count($array_string); $i++)
	{
		$temp=trim($array_string[$i]);
		if($temp!="") $array_string2[]=$temp;
	}
	$minimum_experience=@min($array_string2);
	if($minimum_experience>= 18) $minimum_experience=0;
	return $minimum_experience;
}

////////////////////////
function between($beg, $end, $str) 
{
	list($a,$b) = explode($beg, $str); 
	list($x,$y) = explode($end, $b);
	return $x;
}
function between2($beg, $end, $str) 
{
	list($a,$b) = explode($beg, $str);
	$b=str_replace($end,"</table>",$b);	//extra
	list($x,$y) = explode("</table>", $b);
	return $x;
}
function correct_date($change_date)
{
	list($DAY,$MONTH,$YEAR)=split(" ",$change_date);
	{
		switch($MONTH)
		{
			case "Jan,": $MONTH="01"; break;
			case "Feb,": $MONTH="02"; break;
			case "Mar,": $MONTH="03"; break;
			case "Apr,": $MONTH="04"; break;
			case "May,": $MONTH="05"; break;
			case "Jun,": $MONTH="06"; break;
			case "Jul,": $MONTH="07"; break;
			case "Aug,": $MONTH="08"; break;
			case "Sep,": $MONTH="09"; break;
			case "Oct,": $MONTH="10"; break;
			case "Nov,": $MONTH="11"; break;
			case "Dec,": $MONTH="12"; break;
		}
		return	"$YEAR-$MONTH-$DAY";
	}
}

function remove_first_last($string, $stringToRemove) {
    $stringToRemoveLen = strlen($stringToRemove);
    $stringLen = strlen($string);
    $pos = $stringLen - $stringToRemoveLen;
    //echo  $out = substr($string, 0, $pos);
	if(substr($string, $pos, $stringToRemoveLen) == $stringToRemove) $out = substr($string, 0, $pos);
	else $out=$string;
    ////////////////////////
    $stringLen = strlen($out);
	$pos = $stringLen - $stringToRemoveLen;

    if(substr($out, 0, $stringToRemoveLen) == $stringToRemove) $out = substr($out, -$pos);
	else $out=$out;
    return $out;

}
//$string = remove_first_last($string, '<br>');
function query_num($query)
{
	if($query!='')
	{
		if($result=mysql_query($query))
		{
			if($num=mysql_num_rows($result))
			return $num;
		}
	}
}
//////////////////
function remove_extra_br ($str)
{
	$str=str_replace("&nbsp;","",str_replace("___","<br>",strip_tags(str_replace("<br>","___",$str))));

	$str1="";
	$array_str=explode("\n",$str);
	for($p=0; $p<count($array_str); $p++)
	{
		$str_temp=str_replace("<br><br>","<br>",trim($array_str[$p]));
		if($str_temp!="" AND $str_temp!=" ") $str1.=" ".$str_temp;
	}
	$str=remove_first_last($str1, "<br>");

	return $str;		
}
/////////////////////////
function import_job($catId,$page)
{
	$where="http://www.prothom-alojobs.com/index.php?Script=joblist&jid=".$catId."&PageAll=".$page;
	$handle = file_get_contents($where);
	$handle =between('Deadline</td>', '</table>', $handle);
	
	$f=@fopen("list_source.txt","w");
	fwrite($f,$handle);
	fclose($f);
	
	//for reading by content and seperating only job INFO
	$lines = file('list_source.txt');
	foreach ($lines as $line_num => $line)
	{
		$content=$content.$line;
	} //echo $ver;

	//seperating ID
	$var = preg_split('/<tr/', $content, -1, PREG_SPLIT_OFFSET_CAPTURE);
	for($h=1; $h<count($var); $h++)
	{
		$chars = preg_split('/nid=/', $var[$h][0], -1, PREG_SPLIT_OFFSET_CAPTURE);
		for($i=1; $i<2; $i++)
		{
			$chars2 = preg_split('/"/',  $chars[$i][0], -1, PREG_SPLIT_OFFSET_CAPTURE);
			for($j=0; $j<1; $j++)
			{
				$num="";
				if($chars2[$j][0]!="")
				{
					$num=query_num("SELECT * FROM jobs WHERE reference_id='".$chars2[$j][0]."' "); 
					if($num==0)	$ID.=$chars2[$j][0].",";
				}
			}
		}
	}

	$ID=remove_first_last($ID, ",") ;
	$f=@fopen("jobid.txt","w");
	fwrite($f,$ID);
	fclose($f);

	//Make Array
	$jobid=explode(",",$ID);
	for($m=0; $m<count($jobid); $m++)
	{
		$job_id=$jobid[$m];
		//$job_id=$_GET['jj'];
		$details_page="http://www.prothom-alojobs.com/index.php?NoParameter&Theme=default&Script=shownewspaperjobdetails&nid=".$job_id;   //news paper
			
		$handle = file_get_contents($details_page);
		$job_details_source_file=$job_id.".txt";
		$f=@fopen($job_details_source_file,"w");
		fwrite($f,$handle);
		fclose($f);
		
		/////////////////////////////////////////////////////////////////////// File details write End ///////////////////////
		$job_details="";
		$lines="";
		$JOBDETAILS="";
		
		$findBreak=array('<br>','<br />','<li>');
		$replace1Dash = array('----','----','----');
		
		$findDash=array('--------','----',"'");
		$replaceBreak = array('<br />','<br />',"\'");
	
		$lines = file($job_details_source_file);
		foreach ($lines as $line_num => $line) $job_details=$job_details.$line;
		$JOBDETAILS = "";
		$company_name= "";
		$company_profile= "";
		$job_title="";
		$n_post= "";
		$requirement="";
		$educationalRequirement="";
		$experience="";
		$responsibility="";
		$age="";
		$salary="";
		$footer="";
		$source="";
		$publish="";
		$deadline="";
		$minimum_education="";
		$exp_req="";
		$minimum_experience="";
		$m_cat="";
		$company_email="";
		$n_post="";
		$source="";
		$temp_footer="";
		
		$JOBDETAILS = trim(between('<td colspan="2" align="center"', 'Apply Instruction', $job_details)); 
		
		$company_name =str_replace("&nbsp;","",trim(between('<strong>', '</strong>', $JOBDETAILS))); 
		$company_profile = trim(between('<td colspan="2" align="left" style="font-family:SolaimanLipi,Verdana,Helvetica,sans-serif; padding:5px; font-size:13px; color:#000000; line-height: 18px;text-align:justify;">', '</td>', $JOBDETAILS)); 
		$job_title = str_replace("&nbsp;","",trim(between('<td colspan="2" align="left" style="color:#3b5998; font-size:14px; border-bottom:1px dashed #EB1C25; padding:5px; font-weight:bold; font-family:SolaimanLipi,Verdana,Helvetica,sans-serif; ">', '</td>', $JOBDETAILS))); 
		$n_post = strip_tags(trim(between('No. of Vacancies</td>', '</td>', $JOBDETAILS))); 
		$employmentType = strip_tags(trim(between('Job Type</td>', '</td>', $JOBDETAILS))); 
		$job_location = strip_tags(trim(between('Job Location</td>', '</td>', $JOBDETAILS))); 
		$educationalRequirement = remove_extra_br(strip_tags(trim(between('Educational Qualification</td>', '</td>', $JOBDETAILS))));
		$experience = remove_extra_br(strip_tags(trim(between('Work Experience</td>', '</td>', $JOBDETAILS))));
		$requirement = remove_extra_br(strip_tags(trim(between('Job Requirement</td>', '</td>', $JOBDETAILS))));
		$responsibility = remove_extra_br(strip_tags(trim(between('Job Description</td>', '</td>', $JOBDETAILS))));
		$salary = remove_extra_br(strip_tags(trim(between('Salary</td>', '</td>', $JOBDETAILS))));
		$age = strip_tags(trim(between('Age</td>', '</td>', $JOBDETAILS)));
		
		$JOBDETAILS2 = trim(between('Apply Instruction</td>', '<td height="10px;" colspan="4" align="center">', $job_details));
		$deadline = correct_date(trim(between('Application Deadline :', '</td>', $JOBDETAILS2)));
		$source = trim(between('Source :', '</td>', $JOBDETAILS2));
		$publish = correct_date(trim(between('Date of Publication :', '</td>', $JOBDETAILS2)));
		$footer = trim(between('Apply Instruction</td>', 'Application Deadline :', $job_details));
		
		$footer=str_replace('center;">','center;">___',$footer);
		$footer=str_replace("&nbsp;","",str_replace("___","<br>",strip_tags(str_replace("<br>","___",$footer))));

		$footer1="";
		$array_footer=explode("\n",$footer);
		for($p=0; $p<count($array_footer); $p++)
		{
			$footer_temp=str_replace("<br><br>","<br>",trim($array_footer[$p]));
			if($footer_temp!="" AND $footer_temp!=" ") $footer1.=" ".$footer_temp;
		}
		$footer=remove_first_last($footer1, "<br>");
		
		
		$footer=str_replace("&nbsp;","",$footer);
		$footer=str_replace(" <br />","<br />",$footer);
		$footer_array=explode("<br />",$footer);
		for($ii=0; $ii<count($footer_array); $ii++)
		{
			$temp_footer.=trim($footer_array[$ii]);
		}
		$footer=$temp_footer;
		
		$minimum_education=edu_qualification($educationalRequirement." ".$requirement);
		$exp_req=$experience." ".$requirement;	
	    $minimum_experience=minimum_experience($exp_req);
		$m_cat=job_category_new($catId);
		$company_email=seperate_email($footer);	
		$n_post=seperate_number($n_post);

		///////////////////
		$job_title_array=split(" ",$job_title);
		for($i=0; $i<count($job_title_array); $i++)
		{
			switch($job_title_array[$i])
			{
				case "(Male)": $gender="Male"; break;
				case "(Female)": $gender="Female"; break;
				case "(Male/Female)": $gender="Male Female"; break;
				default : $gender="";
			}
			if($gender) break;
			if($job_title_array[$i]=="") $lang=1;
		}
		if(!$gender) $gender="Male Female";

		
		$full_text="";
		$employmentType="";
		$full_text=$job_title." ".$company_name." ".$company_profile." ".$responsibility." ".$educationalRequirement." ".$requirement." ".$experience." ".$salary." ".$job_location." ".$footer;
		$full_text=strtolower(strip_tags($full_text));
		
		$full_text_array=explode(" ",$full_text);
		for($i=0; $i<count($full_text_array); $i++)
		{
			$z=$i+1;	
			if($full_text_array[$i]=="full" AND $full_text_array[$z]=="time") $employmentType="Full Time";
			if($full_text_array[$i]=="part" AND $full_text_array[$z]=="time") $employmentType="Part Time";
			if($full_text_array[$i]=="contract") $employmentType="Contract";
		}
		//$job_location=job_location($job_location);	
		$employmentType=job_type($employmentType);	
		//////////////////////////////////Extra///////////////////
		//$gender="Male Female";
		//other,com_id,company_web,comlogo,
		if($company_email) $cv_receive_at="Both"; 
		else $cv_receive_at="ofline"; 
		$bullet="8";
		$today_inserted_jobs=now();
		$action="Post";
		$template="10";
	/*
	function u2dp (s)
	{
	  ret = '';
	  for (i=0; i<s.length; i++) {
		charCode = s.charCodeAt(i);
		if ((charCode <= 127) && (charCode != 34) && (charCode != 38) &&
			(charCode != 60) && (charCode != 62))
		  ret += s.charAt(i);
		else
		  ret += '&#' + charCode + ';';
	  }
	  return ret;
	}
	*/
	
	$first_char_company_name=ord(substr($company_name, 0, 1));
	$first_char_job_title=ord(substr($job_title, 0, 1));
	if($first_char_company_name==224 OR $first_char_job_title==224)
	{
		// Bangla Job
		//echo $job_id;
	}
	else
	{
	//job_location, age_minimum,age_maximum,requirement, responsibility,other, com_id, company_email,company_web,comlogo, source,
	if($publish!='' AND $deadline!='' AND $job_title!='' AND $company_name!='')
	{

		$num2="";
		$num2=query_num("SELECT * FROM `jobs` WHERE company_name='".$company_name."' AND job_title='".$job_title."' AND deadline='".$deadline."' ");
		if($num2==0)	
		{
		$presentindb=query_num("SELECT job_id FROM `jobs` WHERE reference_id='".$job_id."' ");
		if($presentindb==0)	
		{
		$fs=array("\\\\\'","\\\\'","\\\'","\\'","'","<br /><br /><br /><br /><br /><br />","<br /><br /><br /><br /><br />","<br /><br /><br /><br />","<br /><br /><br />","<br /><br />");
		$rs = array("\'","\'","\'","\'","\'","<br />","<br />","<br />","<br />","<br />");
		
		$job_title=str_replace($fs,$rs,$job_title);
		$m_cat=str_replace($fs,$rs,$m_cat);
		$minimum_education=str_replace($fs,$rs,$minimum_education);
		$minimum_experience=str_replace($fs,$rs,$minimum_experience);
		$job_location=str_replace($fs,$rs,$job_location);
		$age_minimum=str_replace($fs,$rs,$age_minimum);
		$age_maximum=str_replace($fs,$rs,$age_maximum);
		$age=str_replace($fs,$rs,$age);
		$gender=str_replace($fs,$rs,$gender);
		$salary=str_replace($fs,$rs,$salary);
		$employmentType=str_replace($fs,$rs,$employmentType);
		$n_post=str_replace($fs,$rs,$n_post);
		$requirement=str_replace($fs,$rs,$requirement);
		$educationalRequirement=str_replace($fs,$rs,$educationalRequirement);
		$experience=str_replace($fs,$rs,$experience);
		$responsibility=str_replace($fs,$rs,$responsibility);
		$other=str_replace($fs,$rs,$other);
		$cv_receive_at=str_replace($fs,$rs,$cv_receive_at);
		$company_name=str_replace($fs,$rs,$company_name);
		$company_email=str_replace($fs,$rs,$company_email);
		$company_web=str_replace($fs,$rs,$company_web);
		$comlogo=str_replace($fs,$rs,$comlogo);
		$company_profile=str_replace($fs,$rs,$company_profile);
		$footer=str_replace($fs,$rs,$footer);

		$query="insert into jobs(lang,job_title,m_cat,minimum_education,minimum_experience,job_location,
		age_minimum,age_maximum,age,gender,salary,employmentType,n_post,requirement,
		educationalRequirement,experience,responsibility,other,
		cv_receive_at,com_id,company_name,company_email,company_web,comlogo,
		company_profile,footer,bullet,template,source,publish,deadline,today_inserted_jobs,quality_check,action,reference_id) 
		values('0','$job_title','$m_cat','$minimum_education','$minimum_experience','$job_location',
		'$age_minimum','$age_maximum','$age','$gender','$salary','$employmentType','$n_post','$requirement',
		'$educationalRequirement','$experience','$responsibility','$other',
		'$cv_receive_at','$com_id','$company_name','$company_email','$company_web','$comlogo',
		'$company_profile','$footer','$bullet','$template','$source','$publish','$deadline','$today_inserted_jobs','1','$action','$job_id')";
		//if(substr(trim(str_replace("&nbsp;","",$job_title)), 0, 2)=="à¦") $query=""; 
		$post=mysql_query($query);
		if($post) 
		{
			$jobid=fetch_object("SELECT jobid FROM jobs WHERE reference_id='$job_id'");
			echo $jobid."<br>";
			$counter++;
		}
		else echo $query."<hr>"; 
		}
	}
}	
}//else

///////////////////////////////////
// Not INSERTED the folowinng fields age	 provided_by_system	 	 	 	 	search	 				 alertType1 alertType2 resume_send 
@unlink($job_details_source_file);   
} // for($m=0; $m<count($jobid); $m++)
	
echo $counter;
mysql_query("DELETE FROM `jobs` WHERE company_name='' OR job_title='' OR deadline='0000-00-00' OR deadline < '".now()."' OR publish='0000-00-00' ");
}


for($catId=1; $catId<=18; $catId++) //18
{
	for($page=1; $page<=10; $page++)
	{
		import_job($catId,$page);
		
		
		/*$f=@fopen("jobid.txt","w");
		fwrite($f,$ID);
		fclose($f);*/
	}
}
?>