<?php
//Cron Job command:   /usr/local/bin/php -q /home/songbadpotro/public_html/job.com.bd/source_job_details.php
//5 	2,7 	* 	* 	*
set_time_limit(600);
$fPath = $_SERVER['PHP_SELF'];
$path = dirname($fPath);

if($path=="/") $dir="";
else $dir=$path."/";

require_once($dir.'dbconnect.php');
require_once($dir.'function1.php');

list($date,$time) = explode(' ',now());
/*
$bulet_img = '<img src="images/hotjobs/bullet.gif" width=12 height=12 />';
$find=array(
	'<img src="images/hotjobs/bullet.gif" width=12 height=12 />',
	'<br><br>',
	'||',
	'&nbsp;',
	'\n',
	'<br />',
	"'",
	);
$replace = array(
	'|',
	'|',
	'|',
	'',
	'',
	'<br>',
	"\'",
	);

$f=array(
	'<br><br>',
	'<br>or',
	);
$r = array(
	' <br>',
	'<br> or',
	);
*/

$find=array(
	'or <a href="javascript:EmailSend()">Click here</a> to Email CV from <strong>MY BDJOBS</strong> account.',
	'<span style="color:#FB0000">Photograph</span>',
	'<br><br>',
	'orSend',
	'or Click here to Email CV from MY BDJOBS account'
	);
$replace = array(
	'',
	'Photograph',
	'<br>',
	'Send',
	'',
	);

$total=0;
$taken_from='bdjobs';
//$last_reference_id = 635587
$last_reference_id = fetch_object("SELECT reference_id FROM `jobs` WHERE taken_from = '".$taken_from."' ORDER BY reference_id DESC LIMIT 0,1")+1;
//$j = $last_reference_id;
//$last_reference_id = 635594;
$query_till = $last_reference_id+200;



	//while( $j >= $last_reference_id){
	for( $j = $last_reference_id; $j<$query_till; $j++){
		$details_page_url = "http://joblist.bdjobs.com/jobdetails.asp?id=".$j;
		$content = file_get_contents($details_page_url);		

		$attention = between('<span>Atten', '</span>', $content);
		//echo $j."-".$attention."<br>";

		if($attention != 'tion'){
			$content_title_company_name = between('<div class="comp_wrapper">', '</table>', $content);
			$content_company_information = between('Company Information</div>', '</td>', $content);
			
			$cat = remove_extra_space(strip_tags(between('Category : <span>', '</span>', $content)));

			$reference_id = $j;
			$m_cat = cat_bdjobs($cat);
			$job_title = remove_extra_space(strip_tags(between('<div class="job_title_text">', '</div>', $content_title_company_name)));
			$company_name = remove_extra_space(strip_tags(between('<div class="comp_name_text">', '</div>', $content_title_company_name)));
			$publish = date_bdjobs(remove_extra_space(strip_tags(between('job_ap_publish_date_d">', '</div>', $content))));
			$deadline = date_bdjobs(remove_extra_space(strip_tags(between('job_ap_dead_line_d">', '</div>', $content))));		
			$n_post = remove_extra_space(strip_tags(between('job_nov_d">', '</div>', $content)));		
			$employmentType = employmentTypeBdjobs(remove_extra_space(strip_tags(between('job_nature_text_d">', '</div>', $content))));			
			
			$experience = str_replace('(s)','s ',add_remove_s(remove_extra_space(strip_tags(between('job_exp_req_d">', '</div>', $content)))));		
			$minimum_experience = minimum_experience($experience);
			$job_location = remove_extra_space(strip_tags(between('job_jl_d">', '</div>', $content)));
			$salary = remove_extra_space(strip_tags(between('job_sr_d">', '</div>', $content)));
			$responsibility = remove_extra_space(strip_tags(between('Responsibility</div>', '</div>', $content)));
			$educationalRequirement = remove_extra_space(strip_tags(between('Educational Requirements</div>', '</div>', $content)));	
			$requirement = str_replace('(s)','s ',remove_extra_space(strip_tags(between('Additional Job Requirements</div>', '</div>', $content))));	
			$source = remove_extra_space(strip_tags(between('Job Source</div>', '</div>', $content)));	
			if($source == 'Bdjobs.com Online Job Posting') $source='';
			$company_profile = remove_extra_space(between('<td width="500">', '<!--', $content_company_information));	
			$footer = remove_extra_space(strip_tags(between('Apply Instruction</u>', '<br><br>Application Deadline', $content)));	
			
			$check_email_web = remove_extra_space(between('<td width="500">', '<!--', $content_company_information));	
			$check_email_web.= remove_extra_space(between('Apply Instruction</u>', '<br><br>Application Deadline', $content));	
			

			if($footer=='') $footer = remove_extra_space(strip_tags(between('class="apply_n_link" style=\'font-size:12px\'>', '<br><br>Application Deadline', $content)));	
			
			$footer = str_replace($find,$replace,$footer);

			$other = trim(strip_tags(between('Other Benefits</div>', '</ul>', $content)));
			$age = add_remove_s(trim(strip_tags(between('job_age_d">', '</div>', $content))));
			$gender = add_remove_s(trim(strip_tags(between('job_g_d">', '</div>', $content))));
			
			///////////////
			$minimum_education = edu_qualification($educationalRequirement." ".$requirement);
			//$minimum_experience = minimum_experience($experience." ".$requirement);
			$age_maximum = number($age,"max");
			$age_minimum = number($age,"min");
			$company_email = seperate_email($footer.' '.$company_profile);
			$company_web = seperate_url($footer.' '.$company_profile);

			if($company_email!='') $cv_receive_at="Both"; 
			else $cv_receive_at="Offline"; 
			$bullet="8";
			$today_inserted_jobs=now();
			$action="Post";
			$template="10";

			if($n_post=='') $n_post='1';

			/////<!-
			$full_text="";
			$full_text=$job_title." ".$company_name." ".$company_profile." ".$responsibility." ".$educationalRequirement." ".$requirement." ".$experience." ".$salary." ".$job_location." ".$footer;
			$full_text=strtolower(strip_tags($full_text));

			/*$full_text_array=explode(" ",$full_text);
			for($i=0; $i<count($full_text_array); $i++)
			{
				$z=$i+1;	
				if($full_text_array[$i]=="full" AND $full_text_array[$z]=="time") $employmentType="Full Time";
				if($full_text_array[$i]=="part" AND $full_text_array[$z]=="time") $employmentType="Part Time";
				if($full_text_array[$i]=="contract") $employmentType="Contract";
			}*/
			/////->	
/*
echo "
|$job_title|<br>
|$m_cat|<br>
|$minimum_education|<br>
|$minimum_experience|<br>
|$job_location|<br>
|$age_minimum|<br>
|$age_maximum|<br>
|$age|<br>
|$gender|<br>
|$salary|<br>
|$employmentType|<br>
|$n_post|<br>
|$requirement|<br>
|$educationalRequirement|<br>
|$experience|<br>
|$responsibility|<br>
|$other|<br>
|$cv_receive_at|<br>
|$com_id|<br>
|$company_name|<br>
|$company_email|<br>
|$company_web|<br>
|$comlogo|<br>
|$company_profile|<br>
|$footer|<br>
|$bullet|<br>
|$template|<br>
|$source|<br>
|$publish|<br>
|$deadline|<br>
|$today_inserted_jobs|<br>
|$action|<br>
|$reference_id|<br>
|$taken_from|";*/
			if(substr($footer, 0, 2) == "or") $footer = substr($footer, 2);

			$query="insert into jobs(lang,job_title,m_cat,minimum_education,minimum_experience,job_location,
			age_minimum,age_maximum,age,gender,salary,employmentType,n_post,requirement,
			educationalRequirement,experience,responsibility,other,
			cv_receive_at,com_id,company_name,company_email,company_web,comlogo,
			company_profile,footer,bullet,template,source,publish,deadline,today_inserted_jobs,quality_check,action,reference_id,taken_from) 
			
			values('0','$job_title','$m_cat','$minimum_education','$minimum_experience','$job_location',
			'$age_minimum','$age_maximum','$age','$gender','$salary','$employmentType','$n_post','$requirement',
			'$educationalRequirement','$experience','$responsibility','$other',
			'$cv_receive_at','$com_id','$company_name','$company_email','$company_web','$comlogo',
			'$company_profile','$footer','$bullet','$template','$source','$publish','$deadline','$today_inserted_jobs','1','$action','$reference_id','$taken_from')";
			//echo $query."<hr>";
			if(strpos($content, 'ক্লিক') !== false) $unsupport="Found";
			else if(strpos($content, 'ভিতরে দেখুন') !== false) $unsupport="Found";
			else $unsupport="";
			if ($unsupport==""){
				if(query_num("SELECT jobid FROM `jobs` WHERE reference_id='".$reference_id."' ")>0){}
				else{
					if(($footer=='' OR $footer=='Applicant must enclose his/her Photograph with CV.') AND $company_email==''){
						//Do Nothing							
					}
					else if(substr($job_title, 0, 2) == "&#" OR substr($company_name, 0, 2)  == "&#"  ){
						//Do Nothing
					}
					else{
						if(mysql_query($query)) $total++;
					}

				}				
			}
			////////////////
		} // if($attention != 'tion')
		/*$j++;
		if($j==635588) break;*/
	}

	

mysql_query("DELETE FROM jobs WHERE publish>'".$date."' ");
echo $total;
?>