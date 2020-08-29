<?php
	   if(!isset($_SESSION)){
        session_start();
    }
	include_once 'controller/guest_c.php';
	$website = new  Web_controller();
	$website->control();