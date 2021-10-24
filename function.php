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
function seperate_email($string)
{
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
	else if($string=="prothomalo") $source="The Daily Prothom Alo";
	else $source="";
	return $source;
}
//////////////////////////////////
/*function correct_date($string)
{
	list($d,$m,$Y)=split("-",$string);
	$publish="$Y-$m-$d";
	return $publish;
}*/
//////////////////////////////////
/*
1---Accounting/Banking
2---Administration / HR
3---Advertising/Media
4---Agriculture/Poultry
5---Research/Consultancy
6---Education
7---Engineer/Architect
8---Garments/Production
9---Hotel Management//Journalism
10---IT/Computer
12---Medical
13---NGO
16---Real Estate
14---Marketing/Sales
15---Receptionist/Secretary
17---Others









*/

//New job.com.bd
function job_category($string,$job_title)
{
	switch($string)
	{
		case "Bank/Insurance": $m_cat="1"; break;
		case "Finance / Accounting": $m_cat="1"; break;
		case "Admin / HR / Management": $m_cat="2"; break;
		case "Commercial / Supply Chain": $m_cat="3"; break;
		case "Agriculture / Fisheries / Livestocks": $m_cat="4"; break;
		case "Research / Consultancy": $m_cat="5"; break;
		case "Education / Training": $m_cat="6"; break;
		case "Engineering / Architecture": $m_cat="7"; break;
		case "Garments / Textile": $m_cat="8"; break;
		case "Journalism / Content Development": $m_cat="9"; break;
		case "Data Entry / Operator / BPO": $m_cat="10"; break;
		case "Information Technology": $m_cat="10"; break;
		case "Medical / Pharmaceuticals": $m_cat="12"; break;
		case "NGO / Social Services": $m_cat="13"; break;
		case "Marketing / Sales": $m_cat="14"; break;
		case "Front Desk / Reception": $m_cat="15"; break;
		case "Others": $m_cat="17"; break;
		//case "": $m_cat="16"; break;
		default: $m_cat="17"; break;
	}
	return $m_cat;
}
/* //PREVIOUS JOB.COM.BD
function job_category($string,$job_title)
{
	switch($string)
	{
		case "Accounting/Finance/Billing": $m_cat="1"; break;
		case "Audit/Taxation/VAT": $m_cat="1"; break;
		case "Accounting/Finance": $m_cat="1"; break;
		case "Accounting/Finance/Billing": $m_cat="1"; break;
		case "Audit/Taxation/VAT": $m_cat="1"; break;
		case "Audit Firms/Tax Consultant": $m_cat="1"; break;
		case "AuditFirms/TaxConsultant": $m_cat="1"; break;
		case "Auditor": $m_cat="1"; break;
		
		case "Admin/HR/Management": $m_cat="2"; break;
		case "Admin/HR/Management": $m_cat="2"; break;
		case "Administration/HR/Management": $m_cat="2"; break;
		case "Administrative/Office Stuff/Clerical": $m_cat="2"; break;
		case "Administrative/Office Stuff/Clerical": $m_cat="2"; break;
		case "Administrative/OfficeStaff/Clerical": $m_cat="2"; break;
		case "Administrative/OfficeStuff/Clerical": $m_cat="2"; break;
		case "Administrative/Office Staff/Clerical": $m_cat="2"; break;
		case "Management/Authority": $m_cat="2"; break;
		case "ManpowerRecruiting": $m_cat="2"; break;
		case "ManpowerRecruitment": $m_cat="2"; break;
		
		case "Commercial/Purchase/Procurement": $m_cat="3"; break;
		case "Commercial/Purchase/Procurement": $m_cat="3"; break;
		case "Commercial/Purchase/Procurement": $m_cat="3"; break;
		case "AdvertisingAgeny": $m_cat="3"; break;
		case "Advertising/Media/Publication": $m_cat="3"; break;
		
		case "Bank/Insurance": $m_cat="1"; break;
		case "Banks": $m_cat="1"; break;
		case "Bank/Insurance": $m_cat="1"; break;
		case "Investment/MerchantBanking": $m_cat="1"; break;
		case "Insurance": $m_cat="1"; break;
		case "Leasing": $m_cat="1"; break;
		
		case "Customer Care": $m_cat="14"; break;
		case "CustomerCare": $m_cat="14"; break;
		case "CallCenter/CustomerSupport": $m_cat="14"; break;
		case "Call Center/Customer Support": $m_cat="14"; break;
		case "Customer Care": $m_cat="14"; break;
		case "Cosmetics/PersonalCare": $m_cat="14"; break;
		
		case "Data Entry/Operator/BPO": $m_cat="10"; break;
		case "BPO": $m_cat="10"; break;
		case "Data Entry/Operator/BPO": $m_cat="10"; break;
		case "DataEntry/Operator/BPO": $m_cat="10"; break;
		
		case "Art/Creative/Interior Design": $m_cat="3"; break;
		case "Art/Creative/InteriorDesign": $m_cat="3"; break;
		case "Art/Entertainment": $m_cat="3"; break;
		case "Art/Creative/Interior Design": $m_cat="3"; break;
		case "Copywriter/Designer/Publisher": $m_cat="3"; break;
		case "Designer/Copywriter/Publisher": $m_cat="3"; break;
		case "Design/Printing/Publishing": $m_cat="3"; break;

		case "Teaching/Training/Counseling": $m_cat="6"; break;
		case "Education(School&Colleges)": $m_cat="6"; break;
		case "Education(Universities)": $m_cat="6"; break;
		case "Education/Training": $m_cat="6"; break;
		case "Faculty/Teacher/Trainer": $m_cat="6"; break;
		case "Immigration&EducationConsultancyService": $m_cat="6"; break;
		case "IndentingFirm": $m_cat="6"; break;
		case "Training Institutues": $m_cat="6"; break;
		case "Teaching/Tranning/Counseling": $m_cat="6"; break;
		case "Teaching/Training/Counseling": $m_cat="6"; break;
		
		case "Engineering/Architecture": $m_cat="7"; break;
		case "Architechture/InteriorDesignFirm": $m_cat="7"; break;
		case "Electronic Equipment": $m_cat="7"; break;
		case "Architecture/InteriorDesign": $m_cat="7"; break;
		case "Architechture/Interior Design Firm": $m_cat="7"; break;
		case "Architecture/Interior Design": $m_cat="7"; break;
		case "Architecture/InteriorDesignFirm": $m_cat="7"; break;
		case "DevelopmentAgenciesScientist/R&D": $m_cat="7"; break;
		case "Engineering/Architecture": $m_cat="7"; break;
		case "Engineer": $m_cat="7"; break;
		case "Engineering": $m_cat="7"; break;
		case "EngineeringFirms": $m_cat="7"; break;
		case "Engineering/Architecture": $m_cat="7"; break;
		case "ElectronicEquipment": $m_cat="7"; break;
		case "Electronic Equipment": $m_cat="7"; break;
		case "PowerEquipment/Generator/CNG": $m_cat="7"; break;
		case "RealEstate/Developer": $m_cat="7"; break;
		case "Real Estate/Developer": $m_cat="7"; break;
		case "Scientist/R&D": $m_cat="7"; break;
		case "Scientist /R&D": $m_cat="7"; break;
		case "Architechture/Interior Design": $m_cat="7"; break;
		case "Architechture/Interior Design Firm": $m_cat="7"; break;
		case "Architecture/Interior Design Firm": $m_cat="7"; break;

		case "Merchandising/Q.C./Production": $m_cat="8"; break;
		case "Operation/Supply Chain": $m_cat="8"; break;
		case "Garments/Buying House": $m_cat="8"; break;
		case "BuyingHouse(Garments)": $m_cat="8"; break;
		case "Garments(Woven&Knitting)": $m_cat="8"; break;
		case "Garments/BuyingHouse": $m_cat="8"; break;
		case "Garments/Buying House": $m_cat="8"; break;
		case "Quality/Process Controller": $m_cat="8"; break;
		case "Merchandiser": $m_cat="8"; break;
		case "Manufacturing": $m_cat="8"; break;
		case "Manufacturing(FMCG)": $m_cat="8"; break;
		case "Manufacturing(BothLight&HeavyIndustry)": $m_cat="8"; break;
		case "Manufacturing/Operations": $m_cat="8"; break;
		case "Merchandising/QualityControl/Production": $m_cat="8"; break;
		case "Merchandising/Q.C./Production": $m_cat="8"; break;
		case "Merchandising/Quality Control/Production": $m_cat="8"; break;
		case "Operation/SupplyChain": $m_cat="8"; break;
		case "Operation/Supply Chain": $m_cat="8"; break;
		case "Quality/ProcessController": $m_cat="8"; break;
		case "Shrimp/Hachery": $m_cat="8"; break;
		case "Textile": $m_cat="8"; break;
		case "Textile/Garments": $m_cat="8"; break;
		case "Trading or Export/Import": $m_cat="8"; break;
		case "Operation/Supply Chain": $m_cat="8"; break;		
		
		case "Information Technology": $m_cat="10"; break;
		case "Hardware/NetworkCompanies": $m_cat="10"; break;
		case "Information Technology": $m_cat="10"; break;
		case "InformationTechnology": $m_cat="10"; break;
		case "ITEnabledService": $m_cat="10"; break;
		case "SoftwareCompanies": $m_cat="10"; break;
		case "Software Companies": $m_cat="10"; break;
		case "Telecommunication": $m_cat="10"; break;
		case "IT Enabled Service": $m_cat="10"; break;
		
		case "Sales/Business Development": $m_cat="14"; break;
		case "Marketing/Brand": $m_cat="14"; break;
		case "Clearing&Forwarding(C&F)companies": $m_cat="14"; break;
		case "DirectSelling/ServiceCompany": $m_cat="14"; break;
		case "DistributionCompanies/Wholesale": $m_cat="14"; break;
		case "Marketing/Brand": $m_cat="14"; break;
		case "MarketResearchFirms": $m_cat="14"; break;
		case "Marketing/Sales": $m_cat="14"; break;
		case "Marketing": $m_cat="14"; break;
		case "Marketing/": $m_cat="14"; break;
		case "Retail/Shops": $m_cat="14"; break;
		case "Sales/Business Development": $m_cat="14"; break;
		case "Sales": $m_cat="14"; break;
		case "Sales/BusinessDevelopment": $m_cat="14"; break;
		case "Brand": $m_cat="14"; break;
		
		case "Doctor/Medical Profession": $m_cat="12"; break;
		case "Hospitals/Clinic/Diagonastic Centre": $m_cat="12"; break;
		case "Doctor/Medical Profession": $m_cat="12"; break;
		case "Doctor/MedicalProfession": $m_cat="12"; break;
		case "Doctor/Nurses/MedicalProf.": $m_cat="12"; break;
		case "Doctor/Nurses/Medical Prof.": $m_cat="12"; break;
		case "Hospitals/Clinic/DiagonasticCentre": $m_cat="12"; break;
		case "MedicalEquipment": $m_cat="12"; break;
		case "Medical/Pharmaceuticals": $m_cat="12"; break;
		case "Pharmaceutical/MedicineCompanies": $m_cat="12"; break;
		case "Hospitals/Clinic/Diagonastic Centre": $m_cat="12"; break;
		case "Pharmaceutical/Medicine Companies": $m_cat="12"; break;
		case "Pharmaceutical/Medicine Companies": $m_cat="12"; break;
		
		case "MultinationalCompanies": $m_cat="13"; break;
		case "NGO/Development": $m_cat="13"; break;
		case "NGOs": $m_cat="13"; break;
		case "SocialServices": $m_cat="13"; break;
		case "SocialWorker/Organizer": $m_cat="13"; break;
		case "Social Worker/Organizer": $m_cat="13"; break;
		case "Social Services": $m_cat="13"; break;
		case "SecurityServiceCompany": $m_cat="13"; break;
		case "Multinational Companies": $m_cat="13"; break;	
		case "Social Services": $m_cat="13"; break;
		
		case "Journalism/Content Development": $m_cat="17"; break;
		case "Corporate Affairs/Public Relations": $m_cat="17"; break;
		case "Corporate Affairs/Public Relations": $m_cat="17"; break;
		case "EventManagement": $m_cat="17"; break;
		case "Media/PublicRelationCompanies": $m_cat="17"; break;
		case "CorporateAffairs/PublicRelations": $m_cat="17"; break;
		case "Journalism/Content Development": $m_cat="17"; break;
		case "Journalism/ContentDevelopment": $m_cat="17"; break;
		case "Journalism/Content Development": $m_cat="17"; break;
		case "Newspaper/Magazine": $m_cat="17"; break;
		
		case "Front Desk/Reception": $m_cat="15"; break;
		case "Front Desk/Reception": $m_cat="15"; break;
		case "FrontDesk/Reception": $m_cat="15"; break;
		
		case "Consultancy/Legal": $m_cat="5"; break;
		case "Research/Development": $m_cat="5"; break;
		case "LawFirm": $m_cat="5"; break;
		case "Law Firm": $m_cat="5"; break;
		case "Legal/Consultancy": $m_cat="5"; break;
		case "Research/Development": $m_cat="5"; break;
		case "Research & Development": $m_cat="5"; break;
		case "Consultancy/Legal": $m_cat="5"; break;
		case "Consultancy/Legal": $m_cat="5"; break;
		case "Consultant/Counselor/Lawyer": $m_cat="5"; break;
		case "ConsultingFirms": $m_cat="5"; break;
		case "Consulting Firms": $m_cat="5"; break;
		case "Research&Development": $m_cat="5"; break;
		case "Research/Development": $m_cat="5"; break;
		
		case "Agriculture/Fisheries/Livestocks": $m_cat="4"; break;
		
		case "Others": $m_cat="17"; break;
		case "Others": $m_cat="17"; break;
		case "
Others": $m_cat="17"; break;
		case "Airline/GSA": $m_cat="17"; break;
		case "Embassies/ForeignConsulate": $m_cat="17"; break;
		case "GovernmentOrganizations": $m_cat="17"; break;
		case "Govt.Organizations": $m_cat="17"; break;
		case "Govt. Organizations": $m_cat="17"; break;
		case "Hotels/Rosorts": $m_cat="17"; break;
		case "Logistic/Courrier/AirExpressCompanies": $m_cat="17"; break;
		case "Logistic/Courrier/Air Express Companies": $m_cat="17"; break;
		case "Logistic/Courrier/Air Express Companies": $m_cat="17"; break;
		case "Resturants": $m_cat="17"; break;
		case "Shipping": $m_cat="17"; break;
		case "Travel Agents/Tour operators": $m_cat="17"; break;
		case "Agrobasedfirms(Processing/Seed/GM)": $m_cat="17"; break;
		case "Poultry/Dairy/Veterinary": $m_cat="17"; break;
		case "Tannery/Footwear": $m_cat="17"; break;
		case "TeaCompany": $m_cat="17"; break;
		case "Food(Packaged)/Beverage": $m_cat="17"; break;
		case "Hotels/Resorts": $m_cat="17"; break;
		default: $m_cat="17"; break;
	}
	return $m_cat;
}*/
/* New for Jonstreet.com.bd
function job_category($string,$job_title)
{
	switch($string)
	{
		case "Accounting/Finance/Billing": $m_cat="1"; break;
		case "Admin/HR/Management": $m_cat="2"; break;
		case "Agriculture/Fisheries/Livestocks": $m_cat="18"; break;
		case "Art/Creative/Interior Design": $m_cat="7"; break;
		case "Audit/Taxation/VAT": $m_cat="1"; break;
		case "Bank/Insurance": $m_cat="4"; break;
		case "Commercial/Purchase/Procurement": $m_cat="3"; break;
		case "Consultancy/Legal": $m_cat="17"; break;
		case "Customer Care": $m_cat="5"; break;
		case "Data Entry/Operator/BPO": $m_cat="6"; break;
		case "Doctor/Medical Profession": $m_cat="13"; break;
		case "Engineering/Architecture": $m_cat="9"; break;
		case "Front Desk/Reception": $m_cat="16"; break;
		case "Information Technology": $m_cat="11"; break;
		case "Journalism/Content Development": $m_cat="15"; break;
		case "Marketing/Brand": $m_cat="12"; break;
		case "Merchandising/Q.C./Production": $m_cat="10"; break;
		case "Operation/Supply Chain": $m_cat="10"; break;
		case "Others": $m_cat="18"; break;
		case "Research/Development": $m_cat="17"; break;
		case "Sales/Business Development": $m_cat="12"; break;
		case "Social Services": $m_cat="14"; break;
		case "Teaching/Training/Counseling": $m_cat="8"; break;
		///////////////////////////////////////
		case "Accounting/Finance": $m_cat="1"; break;
		case "Accounting/Finance/Billing": $m_cat="1"; break;
		case "Audit/Taxation/VAT": $m_cat="1"; break;
		case "Audit Firms/Tax Consultant": $m_cat="1"; break;
		case "AuditFirms/TaxConsultant": $m_cat="1"; break;
		case "Auditor": $m_cat="1"; break;
		
		case "Admin/HR/Management": $m_cat="2"; break;
		case "Administration/HR/Management": $m_cat="2"; break;
		case "Administrative/Office Stuff/Clerical": $m_cat="2"; break;
		case "Administrative/Office Stuff/Clerical": $m_cat="2"; break;
		case "Administrative/OfficeStaff/Clerical": $m_cat="2"; break;
		case "Administrative/OfficeStuff/Clerical": $m_cat="2"; break;
		case "Administrative/Office Staff/Clerical": $m_cat="2"; break;
		case "Management/Authority": $m_cat="2"; break;
		case "ManpowerRecruiting": $m_cat="2"; break;
		case "ManpowerRecruitment": $m_cat="2"; break;
		
		case "Commercial/Purchase/Procurement": $m_cat="3"; break;
		case "Commercial/Purchase/Procurement": $m_cat="3"; break;
		case "AdvertisingAgeny": $m_cat="3"; break;
		case "Advertising/Media/Publication": $m_cat="3"; break;
		
		case "Banks": $m_cat="4"; break;
		case "Bank/Insurance": $m_cat="4"; break;
		case "Investment/MerchantBanking": $m_cat="4"; break;
		case "Insurance": $m_cat="4"; break;
		case "Leasing": $m_cat="4"; break;
		
		case "CustomerCare": $m_cat="5"; break;
		case "CallCenter/CustomerSupport": $m_cat="5"; break;
		case "Call Center/Customer Support": $m_cat="5"; break;
		case "Customer Care": $m_cat="5"; break;
		case "Cosmetics/PersonalCare": $m_cat="5"; break;
		
		case "BPO": $m_cat="6"; break;
		case "Data Entry/Operator/BPO": $m_cat="6"; break;
		case "DataEntry/Operator/BPO": $m_cat="6"; break;
		
		case "Art/Creative/InteriorDesign": $m_cat="7"; break;
		case "Art/Entertainment": $m_cat="7"; break;
		case "Art/Creative/Interior Design": $m_cat="7"; break;
		case "Copywriter/Designer/Publisher": $m_cat="7"; break;
		case "Designer/Copywriter/Publisher": $m_cat="7"; break;
		case "Design/Printing/Publishing": $m_cat="7"; break;

		case "Education(School&Colleges)": $m_cat="8"; break;
		case "Education(Universities)": $m_cat="8"; break;
		case "Education/Training": $m_cat="8"; break;
		case "Faculty/Teacher/Trainer": $m_cat="8"; break;
		case "Immigration&EducationConsultancyService": $m_cat="8"; break;
		case "IndentingFirm": $m_cat="8"; break;
		case "Training Institutues": $m_cat="8"; break;
		case "Teaching/Tranning/Counseling": $m_cat="8"; break;
		case "Teaching/Training/Counseling": $m_cat="8"; break;
		
		case "Architechture/InteriorDesignFirm": $m_cat="9"; break;
		case "Electronic Equipment": $m_cat="9"; break;
		case "Architecture/InteriorDesign": $m_cat="9"; break;
		case "Architechture/Interior Design Firm": $m_cat="9"; break;
		case "Architecture/Interior Design": $m_cat="9"; break;
		case "Architecture/InteriorDesignFirm": $m_cat="9"; break;
		case "DevelopmentAgenciesScientist/R&D": $m_cat="9"; break;
		case "Engineering/Architecture": $m_cat="9"; break;
		case "Engineer": $m_cat="9"; break;
		case "Engineering": $m_cat="9"; break;
		case "EngineeringFirms": $m_cat="9"; break;
		case "Engineering/Architecture": $m_cat="9"; break;
		case "ElectronicEquipment": $m_cat="9"; break;
		case "Electronic Equipment": $m_cat="9"; break;
		case "PowerEquipment/Generator/CNG": $m_cat="9"; break;
		case "RealEstate/Developer": $m_cat="9"; break;
		case "Real Estate/Developer": $m_cat="9"; break;
		case "Scientist/R&D": $m_cat="9"; break;
		case "Scientist /R&D": $m_cat="9"; break;
		case "Architechture/Interior Design": $m_cat="9"; break;
		case "Architechture/Interior Design Firm": $m_cat="9"; break;
		case "Architecture/Interior Design Firm": $m_cat="9"; break;

		case "Garments/Buying House": $m_cat="10"; break;
		case "BuyingHouse(Garments)": $m_cat="10"; break;
		case "Garments(Woven&Knitting)": $m_cat="10"; break;
		case "Garments/BuyingHouse": $m_cat="10"; break;
		case "Garments/Buying House": $m_cat="10"; break;
		case "Quality/Process Controller": $m_cat="10"; break;
		case "Merchandiser": $m_cat="10"; break;
		case "Manufacturing": $m_cat="10"; break;
		case "Manufacturing(FMCG)": $m_cat="10"; break;
		case "Manufacturing(BothLight&HeavyIndustry)": $m_cat="10"; break;
		case "Manufacturing/Operations": $m_cat="10"; break;
		case "Merchandising/QualityControl/Production": $m_cat="10"; break;
		case "Merchandising/Q.C./Production": $m_cat="10"; break;
		case "Merchandising/Quality Control/Production": $m_cat="10"; break;
		case "Operation/SupplyChain": $m_cat="10"; break;
		case "Operation/Supply Chain": $m_cat="10"; break;
		case "Quality/ProcessController": $m_cat="10"; break;
		case "Shrimp/Hachery": $m_cat="10"; break;
		case "Textile": $m_cat="10"; break;
		case "Textile/Garments": $m_cat="10"; break;
		case "Trading or Export/Import": $m_cat="10"; break;
		case "Operation/Supply Chain": $m_cat="10"; break;		
		
		case "Hardware/NetworkCompanies": $m_cat="11"; break;
		case "Information Technology": $m_cat="11"; break;
		case "InformationTechnology": $m_cat="11"; break;
		case "ITEnabledService": $m_cat="11"; break;
		case "SoftwareCompanies": $m_cat="11"; break;
		case "Software Companies": $m_cat="11"; break;
		case "Telecommunication": $m_cat="11"; break;
		case "IT Enabled Service": $m_cat="11"; break;
		
		case "Clearing&Forwarding(C&F)companies": $m_cat="12"; break;
		case "DirectSelling/ServiceCompany": $m_cat="12"; break;
		case "DistributionCompanies/Wholesale": $m_cat="12"; break;
		case "Marketing/Brand": $m_cat="12"; break;
		case "MarketResearchFirms": $m_cat="12"; break;
		case "Marketing/Sales": $m_cat="12"; break;
		case "Marketing": $m_cat="12"; break;
		case "Marketing/": $m_cat="12"; break;
		case "Retail/Shops": $m_cat="12"; break;
		case "Sales/Business Development": $m_cat="12"; break;
		case "Sales": $m_cat="12"; break;
		case "Sales/BusinessDevelopment": $m_cat="12"; break;
		case "Brand": $m_cat="12"; break;
		
		case "Hospitals/Clinic/Diagonastic Centre": $m_cat="13"; break;
		case "Doctor/Medical Profession": $m_cat="13"; break;
		case "Doctor/MedicalProfession": $m_cat="13"; break;
		case "Doctor/Nurses/MedicalProf.": $m_cat="13"; break;
		case "Doctor/Nurses/Medical Prof.": $m_cat="13"; break;
		case "Hospitals/Clinic/DiagonasticCentre": $m_cat="13"; break;
		case "MedicalEquipment": $m_cat="13"; break;
		case "Medical/Pharmaceuticals": $m_cat="13"; break;
		case "Pharmaceutical/MedicineCompanies": $m_cat="13"; break;
		case "Hospitals/Clinic/Diagonastic Centre": $m_cat="13"; break;
		case "Pharmaceutical/Medicine Companies": $m_cat="13"; break;
		case "Pharmaceutical/Medicine Companies": $m_cat="13"; break;
		
		case "MultinationalCompanies": $m_cat="14"; break;
		case "NGO/Development": $m_cat="14"; break;
		case "NGOs": $m_cat="14"; break;
		case "SocialServices": $m_cat="14"; break;
		case "SocialWorker/Organizer": $m_cat="14"; break;
		case "Social Worker/Organizer": $m_cat="14"; break;
		case "Social Services": $m_cat="14"; break;
		case "SecurityServiceCompany": $m_cat="14"; break;
		case "Multinational Companies": $m_cat="14"; break;	
		
		case "Corporate Affairs/Public Relations": $m_cat="15"; break;
		case "Corporate Affairs/Public Relations": $m_cat="15"; break;
		case "EventManagement": $m_cat="15"; break;
		case "Media/PublicRelationCompanies": $m_cat="15"; break;
		case "CorporateAffairs/PublicRelations": $m_cat="15"; break;
		case "Journalism/Content Development": $m_cat="15"; break;
		case "Journalism/ContentDevelopment": $m_cat="15"; break;
		case "Journalism/Content Development": $m_cat="15"; break;
		case "Newspaper/Magazine": $m_cat="15"; break;
		
		case "Front Desk/Reception": $m_cat="16"; break;
		case "FrontDesk/Reception": $m_cat="16"; break;
		
		case "LawFirm": $m_cat="17"; break;
		case "Law Firm": $m_cat="17"; break;
		case "Legal/Consultancy": $m_cat="17"; break;
		case "Research/Development": $m_cat="17"; break;
		case "Research & Development": $m_cat="17"; break;
		case "Consultancy/Legal": $m_cat="17"; break;
		case "Consultancy/Legal": $m_cat="17"; break;
		case "Consultant/Counselor/Lawyer": $m_cat="17"; break;
		case "ConsultingFirms": $m_cat="17"; break;
		case "Consulting Firms": $m_cat="17"; break;
		case "Research&Development": $m_cat="17"; break;
		case "Research/Development": $m_cat="17"; break;
		
		case "Others": $m_cat="18"; break;
		case "
Others": $m_cat="18"; break;
		case "Airline/GSA": $m_cat="18"; break;
		case "Embassies/ForeignConsulate": $m_cat="18"; break;
		case "GovernmentOrganizations": $m_cat="18"; break;
		case "Govt.Organizations": $m_cat="18"; break;
		case "Govt. Organizations": $m_cat="18"; break;
		case "Hotels/Rosorts": $m_cat="18"; break;
		case "Logistic/Courrier/AirExpressCompanies": $m_cat="18"; break;
		case "Logistic/Courrier/Air Express Companies": $m_cat="18"; break;
		case "Logistic/Courrier/Air Express Companies": $m_cat="18"; break;
		case "Resturants": $m_cat="18"; break;
		case "Shipping": $m_cat="18"; break;
		case "Travel Agents/Tour operators": $m_cat="18"; break;
		case "Agrobasedfirms(Processing/Seed/GM)": $m_cat="18"; break;
		case "Poultry/Dairy/Veterinary": $m_cat="18"; break;
		case "Tannery/Footwear": $m_cat="18"; break;
		case "TeaCompany": $m_cat="18"; break;
		case "Food(Packaged)/Beverage": $m_cat="18"; break;
		case "Hotels/Resorts": $m_cat="18"; break;
		default: $m_cat="18"; break;
	}
	return $m_cat;
}*/
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
	$string=str_replace("-"," ",$string);
	$string=str_replace("."," ",$string);
	$string=str_replace("&"," ",$string);
	$string=str_replace("  ","",$string);
	;
	$string=trim($string);
	$array_string=split(" ",$string);
	$minimum_experience=min($array_string);
	if($minimum_experience>=18) $minimum_experience=0;
	return $minimum_experience;
}
////////////////////////
function between1($beg, $end, $str) 
{
	list($a,$b) = explode($beg, $str); 
	list($x,$y) = explode($end, $b);
	return $x;
}
function between($beg, $end, $str) 
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
?>