<?php

if (isset($_COOKIE["lang"])){
	
	if ($_COOKIE["lang"] == "pl"){
		$lang = "pl";
	}
	else{
		$lang = "en";
	}
}
else{
	$lang = "en";
}


function s ($word){
	
	global $lang;
	
	
	
	$en = array(
	"welcome" => "witaj",
	"loading" => "Ładowanie...",
	"login" => "Logowanie ",
	"register" => "Rejestracja",
	"full_name" => "Full Name",
	"your_email" => "Your Email",
	"password"   => "Password",
	"profession" => "Profession",
	"birthday" => "Birthday",
	"prof0" => "Model (F)",
	"prof1" => "Model (M)",
	"prof2" => "Photographer",
	"prof3" => "Makeup Artist",
	"prof4" => "Stylist",
	"prof5" => "Hairstylist",
	"prof6" => "Retoucher",
	"prof7" => "Fashion Designer",
	"accept_terms" => "I accept the <a href=\"#\">Terms and Conditions</a> of the website",
	"complete_registration_button" => "Complete Registration!",
	
	);
	
	$pl = array(
	"welcome" => "witaj",
	"loading" => "Ładowanie...",
	"login" => "Logowanie",
	"register" => "Rejestracja",
	"full_name" => "Full Name",
	"your_email" => "Your Email",
	"password"   => "Password",
	"profession" => "Profession",
	"birthday" => "Birthday",
	"prof0" => "Model (F)",
	"prof1" => "Model (M)",
	"prof2" => "Photographer",
	"prof3" => "Makeup Artist",
	"prof4" => "Stylist",
	"prof5" => "Hairstylist",
	"prof6" => "Retoucher",
	"prof7" => "Fashion Designer",
	"accept_terms" => "I accept the <a href=\"#\">Terms and Conditions</a> of the website",
	"complete_registration_button" => "Complete Registration!",
	
	
	);
	
	
	return $$lang[$word];
	
}
