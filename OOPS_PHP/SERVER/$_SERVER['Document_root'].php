<?php
echo "DOCUMENT_ROOT : " . $_SERVER['DOCUMENT_ROOT'];
echo "<br>";

echo "ok".$_SERVER['HTTP_ACCEPT_LANGUAGE']."<br>";
 //Detect browser language
 $lang=explode(',',$_SERVER['HTTP_ACCEPT_LANGUAGE']);
 echo substr($lang[0],0,2);

 echo "<br>";
 echo "SERVER_ADDR : " . $_SERVER['SERVER_ADDR'];

 echo "<br>";

 echo "SERVER_NAME : " . $_SERVER['SERVER_NAME'];

 echo "<br>";
 
 echo "HTTP_USER_AGENT : " . $_SERVER['HTTP_USER_AGENT'];

 echo "<br>";
 
 echo "REMOTE_ADDR : " . $_SERVER['REMOTE_ADDR'];

 echo "<br>";
 echo "REMOTE_PORT : " . $_SERVER['REMOTE_PORT'];
?>