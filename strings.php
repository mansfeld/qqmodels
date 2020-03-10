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
	"welcome" => "welcome",
	"loading" => "Loading...",
	
	
	
	
	
	
	
	);
	
	$pl = array(
	"welcome" => "witaj",
	"loading" => "Ładowanie...",
	
	
	
	
	
	
	
	);
	
	
	return $$lang[$word];
	
}
