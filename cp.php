<?php
require_once('function1.php');
require_once('dbconnect.php');
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
//mysql_query("DELETE FROM `jobs` WHERE company_name='' OR job_title='' OR deadline='0000-00-00' OR deadline < '".now()."' OR publish='0000-00-00' ");

$counter=0;
	
$catId=$_GET['c'];
$page=$_GET['p'];
if($catId=="") $catId=1;
if($page=="") $page=1;
//http://www.prothom-alojobs.com/index.php?NoParameter&Theme=default&Script=joblist&jid=1	
//http://www.prothom-alojobs.com/index.php?Script=joblist&jid=1&PageAll=2

//http://prothom-alojobs.com/index.php?NoParameter&Theme=default&Script=shownewspaperjobdetails&nid=MTQxMDM5MjU2MDA%3D
//http://prothom-alojobs.com/index.php?NoParameter&Theme=default&Script=showjobdetails&JobID=NzY1ODcxMzE3NQ%3D%3D


//$where="http://www.prothom-alojobs.com/index.php?Script=joblist&jid=".$catId."&PageAll=".$page;
$where="http://www.prothom-alojobs.com/index.php?Theme=home_new_ad&Script=newspaperjob_new&jid=&page=".$page;

$handle = file_get_contents($where);
//$handle =between('Newspaper Jobs</td>', '</table>', $handle);
$handle =between('Deadline</td>', '</table>', $handle);

$f=@fopen("list_source.txt","w"); //dump.txt
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
	//echo $var[$h][0]."<hr>";
	////////////////////////ok
	$chars = preg_split('/nid=/', $var[$h][0], -1, PREG_SPLIT_OFFSET_CAPTURE);
	//echo $chars[$h][0]."<hr>";
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
	///////////////////////////////
}

$ID=remove_first_last($ID, ",") ;
$f=@fopen("jobid.txt","w");
fwrite($f,$ID);
fclose($f);

//Make Array
$jobid=explode(",",$ID);
for($m=0; $m<count($jobid); $m++)
{
	echo $job_id=$jobid[$m]; echo "<br>";
	//$job_id=$_GET['jj'];
	//$details_page="http://www.prothom-alojobs.com/index.php?NoParameter&Theme=default&Script=shownewspaperjobdetails&nid=".$job_id;   //news paper
	  $details_page="http://www.prothom-alojobs.com/index.php?NoParameter&Theme=home_new_ad&Script=shownewspaperjobdetails_new&nid=".$job_id;
		
	 $handle = file_get_contents($details_page);
	$job_details_source_file='tempjob/'.$job_id.".txt";
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
		
		$JOBDETAILS = trim(between('<!-- Start Job Display Details -->', '<!-- End Job Display Details -->', $job_details)); 
		
	        $company_name =str_replace(';','',trim(between('<div class="jobs_discription">', '</div>', $JOBDETAILS))); //ok
		$company_profile = trim(between('<td colspan="2" align="left" style="font-family:SolaimanLipi,Verdana,Helvetica,sans-serif; padding:5px; font-size:13px; color:#000000; line-height: 18px;text-align:justify;">', '</td>', $JOBDETAILS)); 
		$job_title = str_replace(':','',strip_tags(between('Job Title', '</div>', $JOBDETAILS)));  //ok
		$n_post = strip_tags(between('No of Vacancies:', '</div>', $JOBDETAILS));  
                $employmentType = strip_tags(trim(between('Job Level:', '<div class="jobs_title">', $JOBDETAILS))); //ok
		$job_location = strip_tags(trim(between('Job Location</td>', '</td>', $JOBDETAILS))); 
		$educationalRequirement = strip_tags(trim(between('Educational Qualification:', '<div class="jobs_title">', $JOBDETAILS))); //ok
	        $experience = strip_tags(trim(between('Work Experience:', '<div class="jobs_title">', $JOBDETAILS))); //ok	
                $requirement = strip_tags(trim(between('Job Requirement:', '<div class="jobs_title">', $JOBDETAILS))); //ok	
		$responsibility = remove_extra_br(strip_tags(trim(between('Job Description</td>', '</td>', $JOBDETAILS))));
		$salary = strip_tags(trim(between('Salary:', '<div class="jobs_title">', $JOBDETAILS))); //ok	
		$age = strip_tags(trim(between('Age</td>', '</td>', $JOBDETAILS)));
		
		//$JOBDETAILS2 = trim(between('Apply Instruction</td>', '<td height="10px;" colspan="4" align="center">', $job_details));
		$deadline = correct_date(strip_tags(trim(between('Application Deadline:', '</div>', $JOBDETAILS)))); //ok
		$source = strip_tags(trim(between('Source :', '</div>', $JOBDETAILS))); //ok
		$publish = correct_date(strip_tags(trim(between('Posting Date:', '</div>', $JOBDETAILS)))); //ok
                $footer = strip_tags(trim(between('Apply Instruction :', '<div style="float:right">', $JOBDETAILS))); //ok	

		
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
		
		//$footer=remove_extra_br($str);
		
		//$publish=correct_date(str_replace($findDash,$replaceBreak,remove_first_last(trim(strip_tags(str_replace($findBreak, $replace1Dash,(between('Date of Publication :', '</td>', $JOBDETAILS))))),"----")));
		//$company_name= str_replace("'","\'",between('<strong>', '</strong>', $JOBDETAILS));
		//$company_profile= str_replace("'","\'",trim(strip_tags(between('justify;">', '</td>', $JOBDETAILS))));
		//$job_title=str_replace("'","\'",job_title(between2('SolaimanLipi; ">', '</td>', $JOBDETAILS)));
		//$requirement=str_replace("'","\'",trim(strip_tags(between2('Job Requirement</td>', '</td>', $JOBDETAILS))));
		//$educationalRequirement=str_replace("'","\'",trim(strip_tags(between2('Educational Qualification</td>', '</td>', $JOBDETAILS))));
		//$responsibility=str_replace("'","\'",trim(strip_tags(between2('Job Description</td>', '</td>', $JOBDETAILS))));
		//$job_location=str_replace("'","\'",trim(strip_tags(between2('Job Location</td>', '</td>', $JOBDETAILS))));
		//$experience=str_replace("'","\'",trim(strip_tags(between2('Work Experience</td>', '</td>', $JOBDETAILS))));
		//$employmentType=str_replace("'","\'",trim(strip_tags(between2('Job Type</td>', '</td>', $JOBDETAILS))));
		//$age=str_replace("'","\'",trim(strip_tags(between2('Age</td>', '</td>', $JOBDETAILS))));
		//$n_post=str_replace("'","\'",trim(strip_tags(between2('No. of Vacancies</td>', '</td>', $JOBDETAILS))));
		//$salary=str_replace("'","\'",trim(strip_tags(between2('Salary</td>', '</td>', $JOBDETAILS))));
		//$footer=str_replace("'","\'",str_replace($findDash,$replaceBreak,remove_first_last(trim(strip_tags(str_replace($findBreak, $replace1Dash,(between2('Apply Instruction</td>', 'Application Deadline :', $JOBDETAILS))))),"----")));
		//$deadline=correct_date(str_replace(" &nbsp;","",str_replace($findDash,$replaceBreak,remove_first_last(trim(strip_tags(str_replace($findBreak, $replace1Dash,(between2('Application Deadline :', '</td>', $JOBDETAILS))))),"----"))));
		//$source=str_replace("'","\'",job_title(between2('Source :', '</td>', $JOBDETAILS)));
		
		
		
		
		/*
		echo "
		company_name=$company_name<br>
		company_profile=$company_profile<br>
		job_title=$job_title<br>
		n_post=$n_post<br>
		employmentType=$employmentType<br>
		requirement=$requirement<br>
		responsibility=$responsibility<br>
		job_location=$job_location<br>
		educationalRequirement=$educationalRequirement<br>
		experience=$experience<br>
		footer=$footer<br>
		deadline=$deadline<br>
		source=$source<BR>
		publish=$publish<br>
		salary=$salary<br>
		age=$age<br>
		
		";
		*/
		
		
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
		
		//
		//if(substr(trim(str_replace("&nbsp;","",$job_title)), 0, 2)=="à¦") $query=""; 
		
		$post=mysql_query($query);
		if($post) $counter++;
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



if($page < 10) 
{
	$page=$page+1;
	if($page==10) 
	{
		$catId++;
		$page="1";
	}
}

if($catId!=18)
{
echo "<br>catId=$catId<br>page=$page";
echo "<meta http-equiv='refresh' content='0;url=cp.php?c=$catId&p=$page'>";
}
else echo "<meta http-equiv='refresh' content='0;url=http://www.chakry.com/cp.php'>";
?>