<?php
include "main2.php";
include "connect.php";

$query="SELECT * FROM `basicdetails` WHERE `applicationNo`='10000'";
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
	<div class="row justify-content-center">
		<div class="col-md-8 bg-light p-4 rounded">
			<h5 class="text-center text-light bg-success mb-2 p-2 rounded lead" id="result">hello world</h5>
			<div class="progress mb-2" style="height: 40px;">
			<div class="progress-bar bg-danger" role="progress-bar" style="width: 25%;" id="progressBar">
				<b class="lead" id="progressText">Step-1 Personal Information</b>
			</div>
			</div>
			<form action="step1post.php" method="post" id="myform">
				<div id="first">

					<div class="row">
										<div class="form-group col-6">
                            <input class="form-control input-lg" placeholder="Father's name" name="fathername" type="text" value="<?php echo $row['fathername']; ?>">
                    </div>
                    <div class="form-group col-6">
                            <input class="form-control input-lg" placeholder="Mother's name" name="mothername" type="text" value="<?php echo $row['mothername'];
														?>">
                    </div>
        	</div>
          	<div class="form-group">
                            <label for="gender">Gender</label>
                            <select class="form-control" name ="gender" id = "gender">
                              <?php
                              echo "<option value=".$row['gender'].">".$row['gender']."</option>";
                               ?>

                            </select>
          	</div>
          	<div class="form-group">
                            <label for="course">Nationality</label>
                            <select class="form-control" id="nationality" name="nationality">
															<option>Select</option>
															<option>Indian</option>
                              <option>Non-Resident</option>
                            </select>
            </div>

            <div class="form-group">
                            <label for="course">Category</label>
                            <select class="form-control" id="category" name="category">
															<option>Select</option>
                              <option>SC</option>
                              <option>ST</option>
                              <option>OBC</option>
                              <option>GENERAL</option>
                              <option>GENERAL(Reserved)</option>
                            </select>
            </div>
            <div class="form-group">
                            <label for="disability">Disability:</label>
                            <label class="radio-inline col-2">
                                <input type="radio" name="disability" >Yes
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="disability">No
                            </label>
            </div>
            <div class="form-group">
											<input class="form-control input-lg" placeholder="Adhar No" name="adharNo" type="text" value="<?php echo $row['adharNo']; ?>">
            </div>
						<div class="form-group">
              <input type="submit" name="submit" value="Save & Next" id="submit" class="btn btn-success">

						</div>

            		</form>

            	</div>

    	</div>
</div>
<script
              src="https://code.jquery.com/jquery-3.4.1.min.js"
              integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
              crossorigin="anonymous"></script>

</script>

</body>
</html>
