<?php
require 'view/load.php';
require 'model/model.php';
require 'controller/controller.php';
$pageURI =$_SERVER['REQUEST_URI'];
//echo $pageURI;
$pageURI =substr($pageURI,strrpos($pageURI,'index.php')+10);
// $pageURI =substr($pageURI,1,strlen($pageURI)-1);

	if (!$pageURI)
		new Controller('home');
	else
		new Controller($pageURI);
?>