<?php
include "Snoopy.class.php";
$snoopy = new Snoopy;

#echo $_SERVER['HTTP_USER_AGENT'].'<br>';
$realurl = 'https://www.google.com';
#$realurl = 'https://www.bing.com';
#$preurl = $_SERVER['HTTP_REFERER'];
$childurl = $_SERVER['REQUEST_URI'];
if(strpos($childurl,'/index.php') === false){
 #   $realurl = preg_replace('#127\.0\.0\.1#','https://bing',$childurl);
    $realurl = $realurl.$childurl;
}
elseif(strpos($childurl,'url?q=')===true){
    $pattern = '/(?<=\=)https?.*?(?=\&)/';
    preg_match($pattern,$childurl,$matches);
    $realurl = $matches[0];
}
else{
    $childurl = preg_replace('#\/index\.php#','/search',$childurl);
    $realurl = $realurl.$childurl;
}
#echo $realurl;
$snoopy->fetch($realurl);
echo $snoopy->results;
#$snoopy->fetchtext("http://www.php.net/");
#$line = $snoopy->results;
#print_r($line)
#$urlreal = 'www.bing.com';
#$snoopy->expandlinks = true;

#$fullurl = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

#$url = 'https://'.$urlreal.$_SERVER['REQUEST_URI'];
//--------------抓取网页-----------------
	//判断是POST还是GET

#if($_SERVER['REQUEST_METHOD']=="POST"){
	#$snoopy->submit($url,$_POST);
#}else{
#	$snoopy->fetch($url);
#}





	//输出
#	echo $snoopy->results;

?>
