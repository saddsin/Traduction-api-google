<?php

//author : seif ben brahim 
//

function getContent($url){

	$fh = fopen($url, 'r');

	$data = fread($fh, 2048);
	fclose($fh);
	return $data;
}


function trad_google($text_trad,$langfrom='en',$langtoo='fr') {

	$text_trad =  urlencode($text_trad);
 $url = "http://translate.google.com/translate_a/t?client=t&text=".$text_trad."&hl={$langtoo}&sl={$langfrom}&tl={$langtoo}&ie=UTF-8&oe=UTF-8&multires=1&otf=1&pc=1&ssel=3&tsel=6&sc=1";

	//var_dump( $url);
		$src = getContent($url);
	// var_dump($msg);
	
		$k2 = str_replace(array('[',']'),array('',''),$src);
		$k2 = str_replace('","',';',$k2);
		$k2 = str_replace('","',';',$k2);
		$k2 = str_replace('"','',$k2);
		///var_dump($k2 );
		$tab_k2 = explode(';',$k2);
		 return   addslashes($tab_k2[0]);
  

 }


	







?>