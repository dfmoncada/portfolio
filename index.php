<?php 
try{
	if(isset($_GET['url'])&&$_GET['url']=='mail/contact_me.php'){
		// echo "1";
		require 'mail/contact_me.php';
	}
	else if( isset($_GET['url']) && $_GET['url']!='' ){
		// echo "2";
		header('location:/index.php');
	}
	else{
		// echo "3";
		require "home.php";
	}	
}
catch(Exception $e){
	var_dump($e);
}