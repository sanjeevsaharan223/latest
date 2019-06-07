<?php
include "connect.php";
$query="SELECT * FROM `basicdetails` WHERE `applicationNo`='10000'";
$result = mysqli_query($link,$query);
$row=mysqli_fetch_array($result);

if($_POST['submit']== "Save & Next")
{

  $fathername = basicvalidation($_POST['fathername']);
  $mothername = basicvalidation($_POST['mothername']);
  $gender = basicvalidation($_POST['gender']);
  $nationality =  basicvalidation($_POST['nationality']);
  $category = basicvalidation($_POST['category']);
  $disability = basicvalidation($_POST['disability']);
  $adharNo = basicvalidation($_POST['adharNo']);
  $query = "UPDATE `basicdetails` SET `fathername`='$fathername',`mothername`='$mothername',`gender`='$gender',`nationality`='$nationality',`category`='$category',`adharNo`='$adharNo' WHERE `applicationNo`='10000'";
  if ($link->query($query) === TRUE) {
    $query="UPDATE `state` SET `state`='1' WHERE `applicationNo`='10000'";
    if ($link->query($query) === TRUE) {

        header("location:step2.php");
      }
  else {
      echo "Error updating record: " . $link->error;
      }
    }
else {
    echo "Error updating record: " . $link->error;
    }

}

else {
  echo "failure";
}

function basicvalidation($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}




 ?>
