<?php
session_start();
include 'connect.php';
include 'crypt.php';
$errors = array();


if($_SESSION['captcha_code'] == $_POST['captcha'] )
{
			$fullname = basicvalidation($_POST['fullname']);
			$mobile = basicvalidation($_POST['mobile']);
			$email = basicvalidation($_POST['email']);
			$passwd = basicvalidation($_POST['passwd']);
			$passwd1 = basicvalidation($_POST['passwd1']);

			if($passwd != $passwd1){
				$errors['errorpassword1'] = "Entered password not matched";
			}

			$query = "SELECT * FROM `signup` WHERE  `mobileno`='$mobile'";
			$query1 = "SELECT * FROM `signup` WHERE  `email`='$email'";
			$result = mysqli_query($link,$query);
			$result1 = mysqli_query($link,$query1);

			if(mysqli_num_rows($result)>0){
				$errors['errormobile'] ="Mobile No already registered";


			}

			if (mysqli_num_rows($result1)>0) {
				$errors['erroremail'] = "E-mail already registered";
			}

			if(count($errors)>0){

				echo json_encode($errors);
			}

			else{


				$sql  = "insert into `signup` values(";
			    $sql .= "'',";
			    $sql .= "'" . $fullname . "',";
			    $sql .= "'" . $mobile . "',";
			    $sql .= "'" . $email . "',";
			    $sql .= "'" . $passwd . "',";
			    $sql .= "sysdate())";

			    if ($link->query($sql) === TRUE) {
			    		$current = time();

						$token = encrypt($current,$key);
						$_SESSION['token'] = $token;
						$errors['token'] = "http://localhost/portnew/welcome.php"."?q=".$token;
						echo json_encode($errors);

				      }
				else {
				      echo "Error updating record: " . $link->error;
				      }


				}


}

else{

	$errors["errorcaptcha"] = "Enter the correct captcha";
	echo json_encode($errors);
	
}




function basicvalidation($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>