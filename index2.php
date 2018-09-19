<?php
include_once('lib/simple_html_dom.php');
include_once('lib/curl_querry.php');

$link = 'http://www.studentlibrary.ru/cgi-bin/mb4x?usr_data=gd-image(doc,ISBN9785941938209-SCN0000,0008.pdf,-1,,00000000,160133ed4e0323fec67051bfeik)&hide_Cookie=yes';

///http://www.studentlibrary.ru/cgi-bin/mb4x?usr_data=gd-image(doc,ISBN9785941938209-SCN0002,0201.pdf,-1,,00000000,280133efb714277cdada51bfeik)&hide_Cookie=yes//

//$content = curl_get($link);
$three = '000';
$two = '00';
$one = '0';
for($i = 8; $i<=9; $i++){
	echo $three.$i.'<br>';
	$link1 = "http://www.studentlibrary.ru/cgi-bin/mb4x?usr_data=gd-image(doc,ISBN9785941938209-SCN0000,".$three.$i.".pdf,-1,,00000000,160133ed4e0323fec67051bfeik)&hide_Cookie=yes";
	echo $link1.'<br>';
	//file_put_contents("./book/".$three.$i.".pdf", curl_get($link1));
}

for($i = 10; $i<=99; $i++){
	echo $two.$i.'<br>';
	$link2 = "http://www.studentlibrary.ru/cgi-bin/mb4x?usr_data=gd-image(doc,ISBN9785941938209-SCN0000,".$two.$i.".pdf,-1,,00000000,160133ed4e0323fec67051bfeik)&hide_Cookie=yes";
	echo $link2.'<br>';
	//file_put_contents("./book/".$two.$i.".pdf", curl_get($link2));
}

for($i = '100'; $i<='111'; $i++){
	echo $one.$i.'<br>';
	$link3 = "http://www.studentlibrary.ru/cgi-bin/mb4x?usr_data=gd-image(doc,ISBN9785941938209-SCN0000,".$one.$i.".pdf,-1,,00000000,160133ed4e0323fec67051bfeik)&hide_Cookie=yes";
	echo $link3.'<br>';
	//file_put_contents("./book/".$one.$i.".pdf", curl_get($link3));
}
//2stage
for($i = '112'; $i<='183'; $i++){
	echo $one.$i.'<br>';
	$link3 = "http://www.studentlibrary.ru/cgi-bin/mb4x?usr_data=gd-image(doc,ISBN9785941938209-SCN0001,".$one.$i.".pdf,-1,,00000000,160133ed4e0323fec67051bfeik)&hide_Cookie=yes";
	echo $link3.'<br>';
	//file_put_contents("./book/".$one.$i.".pdf", curl_get($link3));
}
//3stage
for($i = '184'; $i<='255'; $i++){
	echo $one.$i.'<br>';
	$link4 = "http://www.studentlibrary.ru/cgi-bin/mb4x?usr_data=gd-image(doc,ISBN9785941938209-SCN0002,".$one.$i.".pdf,-1,,00000000,160133ed4e0323fec67051bfeik)&hide_Cookie=yes";
	echo $link4.'<br>';
	//file_put_contents("./book/".$one.$i.".pdf", curl_get($link4));
}



?>