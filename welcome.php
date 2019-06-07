<?php
session_start();
include 'crypt.php';

if(isset($_GET['q'])  && (((time()-decrypt($_GET['q'],$key))/60)<10))
{

	

}
else{
	session_destroy();
	header("Location:login.php");
}

?>