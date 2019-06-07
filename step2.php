<?php
include "main2.php";
include "connect.php";

$query="SELECT * FROM `contactdetails` WHERE `applicationNo`='10000'";
$result = mysqli_query($link,$query);
$row=mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

</head>
<body>
<input type="hidden" value="<?php echo $state ?>" id="state">
<div class="container">
			<h5 class="text-center text-light bg-success mb-2 p-2 rounded lead" id="result">hello world</h5>
			<div class="progress mb-2" style="height: 40px;">
			<div class="progress-bar bg-danger" role="progress-bar" style="width: 50%;" id="progressBar">
				<b class="lead" id="progressText">Step-2 Contact Information</b>
			</div>
			</div>
			<form action="step2post.php" method="post" id="form-data" class="col">
        <div id="second">
					<div class="form-group">
                    	<input class="form-control input-lg" placeholder="House No & street" name="houseNumber" value="<?php echo $row['houseNumber']  ?>" type="text" >
                    </div>
                    <div class="form-group">
                            <input class="form-control input-lg" placeholder="Village/City" name="city" value="<?php echo $row['city']  ?>" type="text" >
                    </div>
                    <div class="form-group">
                            <label for="course">State</label>
                            <select class="form-control" id="homestate" value="<?php echo $row['state']  ?>" name="state">
                              <option>Haryana</option>
                              <option>Punjab</option>
                              <option>Others</option>
                            </select>
                    </div>
                    <div class="form-group">
                            <input class="form-control input-lg" placeholder="Pincode" name="pincode" value="<?php echo $row['pincode']  ?>" type="number" >
                    </div>
										<div class="form-group">
                            <input class="form-control input-lg" placeholder="E-mail" name="email" value="<?php echo $row['email']  ?>" type="text" readonly>
                    </div>
										<div class="form-group">
                            <input class="form-control input-lg" placeholder="Mobile Number" name="mobileNumber" value="<?php echo $row['mobileNumber']  ?>" type="number" readonly>
                    </div>
                    <div class="form-group">
                    	<a href="step1.php" class="btn btn-danger" id="prev-2">Previous</a>
              				<input type="submit" name="submit" value="Save & Next" id="submit" class="btn btn-success">
                    </div>


				</div>

        		</form>

        	</div>

  	</div>

</div>
<script  src="https://code.jquery.com/jquery-3.4.1.min.js"
          integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
          crossorigin="anonymous"></script>



</body>
</html>
