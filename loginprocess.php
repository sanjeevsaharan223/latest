<?php
session_start();
include 'connect.php';

if($_POST['submit'] =="LOGIN")
{
$applicationNo = $_POST['applicationNo'];
$password = $_POST['passwd'];

$query = "SELECT * FROM `credentials` WHERE `applicationNo`='$applicationNo' AND `passwd`='$password'";

$result = mysqli_query($link, $query);

if(mysqli_num_rows($result)>0)
{
  $_SESSION['applicationNo'] =$applicationNo;
  $_SESSION['login'] = "yes";
  header("Location:index.php");

}

else {
  echo "not alloed";
}

}
else {
  echo "not entered";
}




?>
