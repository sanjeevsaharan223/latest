<?php
include "connect.php";
if($_POST['submit']== "Save & Next")
{

  $houseNumber = basicvalidation($_POST['houseNumber']);
  $city = basicvalidation($_POST['city']);
  $state = basicvalidation($_POST['state']);
  $pincode =  basicvalidation($_POST['pincode']);
  $query = "UPDATE `contactdetails` SET `houseNumber`='$houseNumber',`city`='$city',`state`='$state',`pincode`='$pincode' WHERE `applicationNo`='10000'";
  if ($link->query($query) === TRUE) {
    $query="UPDATE `state` SET `state`='2' WHERE `applicationNo`='10000'";
    if ($link->query($query) === TRUE) {

        header("location:step3.php");
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
