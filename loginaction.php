<?php

$authenticated_user = "akanksha";
$authenticated_pwd = "ak";

$req = $_REQUEST;
if($req["username"]==$authenticated_user && $req["password"]==$authenticated_pwd)
{
 header("Location:http://gmail.com");	
}
else{
	header("Location:
	
	http://localhost/oltest/loginform.php");
}


 ?>