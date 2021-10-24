<?php
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
/*
function seperate_email($string)
{
	/*$string=str_replace("<br>", " ", $string);
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
}*/

function seperate_email($string)
{
	$pattern="/(?:[a-z0-9!#$%&'*+=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+=?^_`{|}~-]+)*|\"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*\")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/";

		preg_match_all($pattern, $string, $matches);

		foreach($matches[0] as $email){
		    return $email;
		    break;
		}
}
function seperate_url($string)
{
	$reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
	if(preg_match($reg_exUrl, $string, $url)) {
		return $url[0];
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
/*
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
}*/
function correct_date($change_date)
{
	list($DAY,$MONTH,$YEAR)=split(" ",str_replace(',','',$change_date));
	{
		switch($MONTH)
		{
			case "January": $MONTH="01"; break;
			case "February": $MONTH="02"; break;
			case "March": $MONTH="03"; break;
			case "April": $MONTH="04"; break;
			case "May": $MONTH="05"; break;
			case "June": $MONTH="06"; break;
			case "July": $MONTH="07"; break;
			case "August": $MONTH="08"; break;
			case "September": $MONTH="09"; break;
			case "October": $MONTH="10"; break;
			case "November": $MONTH="11"; break;
			case "December": $MONTH="12"; break;
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

// New
function cat_jobsbd($cat)
{
	switch($cat)
	{
		case "1": $c="1"; break;
		case "2": $c="3"; break;
		case "3": $c="1"; break;
		case "4": $c="8"; break;
		case "5": $c="17"; break; //Customer Support/ Call Center
		case "6": $c="10"; break;
		case "7": $c="10"; break;
		case "8": $c="10"; break;
		case "9": $c="2"; break;
		case "10": $c="13"; break;
		case "11": $c="8"; break;
		case "12": $c="6"; break;
		case "13": $c="8"; break;
		case "14": $c="12"; break;
		case "15": $c="5"; break;
		case "16": $c="2"; break;
		case "17": $c="7"; break;
		case "18": $c="17"; break; //Cust. Care/Call Centre
		case "19": $c="1"; break;
		case "20": $c="15"; break;
		case "21": $c="14"; break;
		case "22": $c="17"; break;
		case "23": $c="18"; break;
		default: $c="17"; break;
	}
	return $c;
		
}
function cat_bdjobs($cat)
{
	switch($cat)
	{
		case "Accounting/Finance": $c="1"; break;
		case "Banking/Insurance/Leasing": $c="2"; break;
		case "Commercial/Supply Chain": $c="8"; break;
		case "Education/Training": $c="6"; break;
		case "Engineer/Architect": $c="7"; break;
		case "Garments/Textile": $c="8"; break;
		case "HR/Org. Development": $c="2"; break;
		case "General Management/Admin": $c="2"; break;
		case "Design/Creative": $c="3"; break;
		case "Production/Operation": $c="8"; break;
		case "Hospitality/ Travel/ Tourism": $c="17"; break;
		case "Beauty Care/ Health &amp; Fitness": $c="12"; break;
		case "Electrician/ Construction/ Repair": $c="7"; break;
		case "IT/Telecommunication": $c="10"; break;
		case "Marketing/Sales": $c="14"; break;
		case "Customer Support/Call Centre": $c="14"; break;
		case "Advertisement/Event Mgt.": $c="3"; break;
		case "Medical/Pharmaceutical": $c="12"; break;
		case "Agro (Plant/Animal/Fisheries)": $c="8"; break;
		case "NGO/Development": $c="13"; break;
		case "Research/Consultancy": $c="5"; break;
		case "Secretary/Receptionist": $c="15"; break;
		case "Data Entry/Operator/BPO": $c="10"; break;
		case "Driving/Motor Technician": $c="17"; break;//
		case "Security/Support Service": $c="17"; break;
		case "Law/Legal": $c="17"; break;
		case "Others": $c="17"; break;
		default: $c="17"; break;
	}
	return $c;
		
}
function date_jobsbd($date)
{
	list($d,$m,$y) = explode(" ", $date);
	$m = strtolower($m);
	switch($m)
	{
		case "jan": $MONTH="01"; break;
		case "feb": $MONTH="02"; break;
		case "mar": $MONTH="03"; break;
		case "apr": $MONTH="04"; break;
		case "may": $MONTH="05"; break;
		case "jun": $MONTH="06"; break;
		case "jul": $MONTH="07"; break;
		case "aug": $MONTH="08"; break;
		case "sep": $MONTH="09"; break;
		case "oct": $MONTH="10"; break;
		case "nov": $MONTH="11"; break;
		case "dec": $MONTH="12"; break;
	}
	return	$y."-".$MONTH."-".$d;
}
function date_bdjobs($date)
{
	$date = str_replace("&nbsp;", "", $date);
	list($m,$d,$y) = explode(" ", $date);
	$m = strtolower($m);
	switch($m)
	{
		case "jan": $MONTH="01"; break;
		case "feb": $MONTH="02"; break;
		case "mar": $MONTH="03"; break;
		case "apr": $MONTH="04"; break;
		case "may": $MONTH="05"; break;
		case "jun": $MONTH="06"; break;
		case "jul": $MONTH="07"; break;
		case "aug": $MONTH="08"; break;
		case "sep": $MONTH="09"; break;
		case "oct": $MONTH="10"; break;
		case "nov": $MONTH="11"; break;
		case "dec": $MONTH="12"; break;
	}
	return	$y."-".$MONTH."-".str_replace(",","",$d);
}
function number($str,$min_max){
	
	$find=array(
	',,,,,,',
	',,,,,',
	',,,,',
	',,,',
	',,',
	);

	$replace = array(
		',',
		',',
		',',
		',',
		',',
		);

	$number = str_replace($find,$replace,preg_replace('/\D/', ',', $str));
	$number = remove_first_last($number, ",");
	$number = explode(",",$number);

	if($min_max=="min") return @min($number);
	else if($min_max=="max") return @max($number);
}
function fetch_object($query)
{
	if($query!='')
	{
		if($result=mysql_query($query))
		{
			if($r=mysql_fetch_array($result))
			return $r[0];
			//return $r[0]+1;
		}
	}
}
function employmentTypeBdjobs($string)
{
	return ucwords(str_replace("-"," ",$string));
}

function extract_numbers($string)
{
 	$arr = preg_replace('/[^0-9]/','',$string); 
 	if(@$arr[0]!='')    return $arr[0];
	else return '';
}
function extract_numbers2($string)
{
 	$arr = preg_replace('/[^0-9]/','',$string); 
 	if(@$arr[0]!='')    return $arr[1];
	else return '';
}

function add_remove_s($string)
{
	$string = remove_first_last(trim($string), '(s)');
    $number = extract_numbers2($string);    
    if($number =='') $number = extract_numbers($string); 


    if($number >1) $string=$string.'s';


    return $string;
}
function remove_extra_space($string)
{
	//return $string;
	return $string = trim(preg_replace('/\s\s+/', '', $string));

	//return trim(preg_replace('/[ \t]+/', ' ', preg_replace('/\s*$^\s*/m', "\n", $string)));
}
?>