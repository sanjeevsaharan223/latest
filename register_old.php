<?php
include "main2.php";
include "connect.php";

$query="SELECT * FROM `state` WHERE `applicationNo`='10000'";
$result = mysqli_query($link,$query);
$row=mysqli_fetch_array($result);
$state = $row['state'];
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
			<div class="progress-bar bg-danger" role="progress-bar" style="width: 20%;" id="progressBar">
				<b class="lead" id="progressText">Step-1</b>
			</div>
			</div>
			<form action="" method="post" id="form-data">
				<div id="first">
					<h4 class="text-center bg-primary p-1 rounded text-light">Personal Information </h4>
					<div class="row">
										<div class="form-group col-6">
                            <input class="form-control input-lg" placeholder="Father's name" name="fathername" type="text" value="<?php echo $row['state']; ?>">
                    </div>
                    <div class="form-group col-6">
                            <input class="form-control input-lg" placeholder="Mother's name" name="mothername" type="text" value="<?php echo $row['mothername'];
														?>">
                    </div>
        	</div>
          	<div class="form-group">
                            <label for="gender">Gender</label>
                            <select class="form-control" name ="gender" >
															<option value="">Select Gender</option>
                            <?php while ($row = mysqli_fetch_assoc($result)) {
                            	echo '<option>'.$row["gender"].'</option>';
                            }
                             ?>

                            </select>
          	</div>
          	<div class="form-group">
                            <label for="course">Nationality</label>
                            <select class="form-control" id="nationality">
															<option>Select</option>
															<option>Indian</option>
                              <option>Non-Resident</option>
                            </select>
            </div>

            <div class="form-group">
                            <label for="course">Category</label>
                            <select class="form-control" id="category" >
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
											<input class="form-control input-lg" placeholder="Father's name" name="fathername" type="text" value="<?php echo $row['state']; ?>">
            </div>
						<div class="form-group">
							<a href="#" class="btn btn-danger" id="next-1">Next</a>
						</div>

			</div>
				<div id="second">
					<h4 class="text-center bg-primary p-1 rounded text-light">Contact Information </h4>
					<div class="form-group">
                    	<input class="form-control input-lg" placeholder="House No & street" name="hnumber" type="text" >
                    </div>
                    <div class="form-group">
                            <input class="form-control input-lg" placeholder="Village/City" name="villagename" type="text" >
                    </div>
                    <div class="form-group">
                            <label for="course">State</label>
                            <select class="form-control" id="homestate">
                              <option>Haryana</option>
                              <option>Punjab</option>
                              <option>Others</option>
                            </select>
                    </div>
                    <div class="form-group">
                            <input class="form-control input-lg" placeholder="Pincode" name="pincode" type="number" >
                    </div>
                    <div class="form-group">
                    	<a href="#" class="btn btn-danger" id="prev-2">Previous</a>
                    	<a href="#" class="btn btn-danger" id="next-2">Next</a>
                    </div>


				</div>

				<div id="third">
					<h4 class="text-center bg-primary p-1 rounded text-light">Educational Information</h4>
					<div>
						<table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">Name of Examination</th>
                                  <th scope="col">Board/University</th>
                                  <th scope="col">Year of Passing</th>
                                  <th scope="col">Aggregate % of marks</th>
                                  <th scope="col">Division</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">High School/10th</th>
                                  <td><input class="form-control input-lg" placeholder="" name="highboard" type="text" ></td>
                                  <td><input class="form-control input-lg" placeholder="" name="highpassyear" type="number" ></td>
                                  <td><input class="form-control input-lg" placeholder="" name="highperc" type="number" ></td>
                                  <td><input class="form-control input-lg" placeholder="" name="highdiv" type="text" ></td>
                                </tr>
                                <tr>
                                  <th scope="row">Intermediate/12th</th>
                                  <td><input class="form-control input-lg" placeholder="" name="interboard" type="text" ></td>
                                  <td><input class="form-control input-lg" placeholder="" name="interpassyear" type="number" ></td>
                                  <td><input class="form-control input-lg" placeholder="" name="interperc" type="number" ></td>
                                  <td><input class="form-control input-lg" placeholder="" name="interdiv" type="text" ></td>
                                </tr>
                                <tr>
                                  <th scope="row">Graduation</th>
                                  <td><input class="form-control input-lg" placeholder="" name="graduni" type="text" ></td>
                                  <td><input class="form-control input-lg" placeholder="" name="gradpassyear" type="number" ></td>
                                  <td><input class="form-control input-lg" placeholder="" name="gradperc" type="number" ></td>
                                  <td><input class="form-control input-lg" placeholder="" name="graddiv" type="text" ></td>
                                </tr>
                                <tr>
                                  <th scope="row">B.Ed.SE(VI)/B.Ed with PGDE/B.Ed with D.Ed.SE(VI)</th>
                                  <td><input class="form-control input-lg" placeholder="" name="beduni" type="text" ></td>
                                  <td><input class="form-control input-lg" placeholder="" name="bedpassyear" type="number" ></td>
                                  <td><input class="form-control input-lg" placeholder="" name="bedperc" type="number" ></td>
                                  <td><input class="form-control input-lg" placeholder="" name="beddiv"  type="text" ></td>
                                </tr>
                                <tr>
                                  <th scope="row">Other</th>
                                  <td><input class="form-control input-lg" placeholder="" name="otherboard" type="text" ></td>
                                  <td><input class="form-control input-lg" placeholder="" name="otherpassyear" type="number" ></td>
                                  <td><input class="form-control input-lg" placeholder="" name="otherperc" type="number" ></td>
                                  <td><input class="form-control input-lg" placeholder="" name="otherdiv" type="text" ></td>
                                </tr>

                                 </tbody>
                            </table>
                            <div class="form-group">
                    			<a href="#" class="btn btn-danger" id="prev-3">Previous</a>
                    			<a href="#" class="btn btn-danger" id="next-3">Next</a>
                    		</div>


				</div>
			</div>

			<div id="fourth">
					<h4 class="text-center bg-primary p-1 rounded text-light">Upload Photo And Sign</h4>
				<div class="input-group my-auto">
                        <div class="custom-file">
                            <label class="my-auto p-2 "for="photo">Upload Photograph</label>
                            <input type="file" class="custom-file-input" id="photo">
                            <label class="custom-file-label" for="photo">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text" id="">Upload</span>
                        </div>
                </div>

                <div class="input-group my-4">
                        <div class="custom-file">
                            <label class="my-auto p-2" for="sign">Upload Sign</label>
                            <input type="file" class="custom-file-input" id="sign">
                            <label class="custom-file-label" for="sign">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text" id="">Upload</span>
                        </div>
                </div>

                <div class="form-group">
                        	<a href="#" class="btn btn-danger" id="prev-4">Previous</a>
                        	<input type="submit" name="submit" value="Submit" id="submit" class="btn btn-success">
                </div>
			</div>

		</div>


		</form>

	</div>

	</div>

</div>
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

<script type="text/javascript">
$(document).ready(function(){
		var state =$("#state").val();

		console.log(state);
		if(state == 1){
		$("#result").hide();
		$("#second").hide();
		$("#third").hide();
		$("#fourth").hide();
}
	else if (state == 2) {

		$("#result").hide();
		$("#first").hide();
		$("#second").show();
		$("#third").hide();
		$("#fourth").hide();
		$("#progressBar").css("width","40%");
		$("#progressText").html("Step-2");
	}
	else if (state == 2) {
		$("#result").hide();
		$("#first").hide();
		$("#second").hide();
		$("#third").show();
		$("#fourth").hide();
		$("#progressBar").css("width","60%");
		$("#progressText").html("Step-3");
	}

	else if (state == 3) {
		$("#result").hide();
		$("#first").hide();
		$("#second").hide();
		$("#third").hide();
		$("#fourth").show();
		$("#progressBar").css("width","80%");
		$("#progressText").html("Step-4");
	}








		$( "#next-1" ).click(function() {
  			$("#second").show();
  			$("#first").hide();
  			$("#progressBar").css("width","40%");
  			$("#progressText").html("Step-2");
			});

		$("#prev-2").click(function(){
			$("#first").show();
  			$("#second").hide();
  			$("#progressBar").css("width","20%");
  			$("#progressText").html("Step-1");
			});
		$( "#next-2" ).click(function() {
  			$("#third").show();
  			$("#second").hide();
  			$("#progressBar").css("width","60%");
  			$("#progressText").html("Step-3");
			});
		$("#prev-3").click(function(){
			$("#second").show();
  			$("#third").hide();
  			$("#progressBar").css("width","40%");
  			$("#progressText").html("Step-2");
			});
		$( "#next-3" ).click(function() {
  			$("#fourth").show();
  			$("#third").hide();
  			$("#progressBar").css("width","80%");
  			$("#progressText").html("Step-4");
			});
		$("#prev-4").click(function(){
			$("#third").show();
  			$("#fourth").hide();
  			$("#progressBar").css("width","60%");
  			$("#progressText").html("Step-3");
			});
	});
</script>



</body>
</html>
