<?php
header('Content-type: text/html; charset=utf-8');
	//example 
	include('Trad.php');
	//liste des codes des langues :http://www.mcanerin.com/en/articles/meta-language.asp
	
	$txt_eng = 'The English (from Old English: Englisc) are a nation and ethnic group native to England, who speak English. ' ;
	echo('<p>***********English***********</p>');
	echo('<p>'.$txt_eng .'</p>');
	//fraçais
	$txt_fr = trad_google($txt_eng,'en','fr');
		echo('<p>***********français***********</p>');
	echo('<p>'.$txt_fr.'</p>');
	//arabic
	$txt_ar = trad_google($txt_eng,'en','ar');
		echo('<p>***********Arabic***********</p>');
	 echo('<p>'.$txt_ar.'</p>');
	//espagnol

	$txt_es = trad_google($txt_eng,'en','es');
		echo('<p>***********Espagnol***********</p>');
	 echo('<p>'.$txt_es.'</p>');
	
	//deutch 
	$txt_du = trad_google($txt_eng,'en','de');
		echo('<p>***********Deutch***********</p>');
	 echo('<p>'.$txt_du.'</p>');
	

	echo('<p>***********Italia***********</p>');

//itlia 
	$txt_it = trad_google($txt_eng,'en','it');
	
	 echo('<p>'.$txt_it.'</p>');
	


	echo('<p>***********Russian***********</p>');

//itlia 
	$txt_es = trad_google($txt_eng,'en','ru');
	
	 echo('<p>'.$txt_es.'</p>');
	
echo('<p>***********Romanian***********</p>');

//itlia 
	$txt_es = trad_google($txt_eng,'en','RO');
	
	 echo('<p>'.$txt_es.'</p>');
	

echo('<p>***********Japanese***********</p>');

//itlia 
	$txt_es = trad_google($txt_eng,'en','ja');
	
	 echo('<p>'.$txt_es.'</p>');
	

echo('<p>***********Chinese***********</p>');

//itlia 
	$txt_es = trad_google($txt_eng,'en','ZH');
	
	 echo('<p>'.$txt_es.'</p>');
	




echo('<p>***********Latin***********</p>');

//itlia 
	$txt_es = trad_google($txt_eng,'en','la');
	
	 echo('<p>'.$txt_es.'</p>');
	



echo('<p>***********Portuguese***********</p>');

//itlia 
	$txt_es = trad_google($txt_eng,'en','pt');
	
	 echo('<p>'.$txt_es.'</p>');
	



echo('<p>***********Turkish***********</p>');

//itlia 
	$txt_es = trad_google($txt_eng,'en','tr');
	
	 echo('<p>'.$txt_es.'</p>');
	



echo('<p>***********Ukrainian***********</p>');

//itlia 
	$txt_es = trad_google($txt_eng,'en','uk');
	
	 echo('<p>'.$txt_es.'</p>');
	

echo('<p>***********Vietnamese***********</p>');

//itlia 
	$txt_es = trad_google($txt_eng,'en','vi');
	
	 echo('<p>'.$txt_es.'</p>');
	


echo('<p>***********Swedish***********</p>');

//itlia 
	$txt_es = trad_google($txt_eng,'en','SV');
	
	 echo('<p>'.$txt_es.'</p>');
	







?>