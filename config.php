<?php


$link = new mysqli('localhost', 'root','', 'my_project');
if (!$link)  {

   

    die( mysql_error($link));
}


?>

