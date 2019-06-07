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
<body >

<div class="container">
			<h5 class="text-center text-light bg-success mb-2 p-2 rounded lead" id="result">hello world</h5>
			<div class="progress mb-2" style="height: 40px;">
			<div class="progress-bar bg-danger" role="progress-bar" style="width: 75%;" id="progressBar">
				<b class="lead" id="progressText">Step-3 Educational Information</b>
			</div>
			</div>
			<form action="step3post.php" method="post" id="form-data">
        <div id="third">
          <div>
            <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">Name of Examination</th>
                                  <th scope="col">Board/University</th>
                                  <th scope="col">Year of Passing</th>
                                  <th scope="col">Subjects</th>
                                  <th scope="col">Aggregate % of marks</th>
                                  <th scope="col">Division</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">High School/10th</th>
                                  <td><input class="form-control input-lg" placeholder="" name="highboard" type="text" ></td>
                                  <td><input class="form-control input-lg" placeholder="" name="highpassyear" type="text" ></td>
                                  <td><input class="form-control input-lg" placeholder="" name="highsubjects" type="text" ></td>

                                  <td><input class="form-control input-lg" placeholder="" name="highperc" type="text" ></td>
                                  <td><input class="form-control input-lg" placeholder="" name="highdiv" type="text" ></td>
                                </tr>
                                <tr>
                                  <th scope="row">Intermediate/12th</th>
                                  <td><input class="form-control input-lg" placeholder="" name="interboard" type="text" ></td>
                                  <td><input class="form-control input-lg" placeholder="" name="interpassyear" type="text" ></td>
                                  <td><input class="form-control input-lg" placeholder="" name="intersubjects" type="text" ></td>

                                  <td><input class="form-control input-lg" placeholder="" name="interperc" type="text" ></td>
                                  <td><input class="form-control input-lg" placeholder="" name="interdiv" type="text" ></td>
                                </tr>
                                <tr>
                                  <th scope="row">Graduation</th>
                                  <td><input class="form-control input-lg" placeholder="" name="graduni" type="text" ></td>
                                  <td><input class="form-control input-lg" placeholder="" name="gradpassyear" type="text" ></td>
                                  <td><input class="form-control input-lg" placeholder="" name="intersubjects" type="text" ></td>
                                  <td><input class="form-control input-lg" placeholder="" name="gradperc" type="text" ></td>
                                  <td><input class="form-control input-lg" placeholder="" name="graddiv" type="text" ></td>
                                </tr>
                                <tr>
                                  <th scope="row">B.Ed.SE(VI)/B.Ed with PGDE/B.Ed with D.Ed.SE(VI)</th>
                                  <td><input class="form-control input-lg" placeholder="" name="beduni" type="text" ></td>
                                  <td><input class="form-control input-lg" placeholder="" name="bedpassyear" type="text" ></td>
                                  <td><input class="form-control input-lg" placeholder="" name="bedsubjects" type="text" ></td>
                                  <td><input class="form-control input-lg" placeholder="" name="bedperc" type="text" ></td>
                                  <td><input class="form-control input-lg" placeholder="" name="beddiv"  type="text" ></td>
                                </tr>
                                <tr>
                                  <th scope="row">Other</th>
                                  <td><input class="form-control input-lg" placeholder="" name="otherboard" type="text" ></td>
                                  <td><input class="form-control input-lg" placeholder="" name="otherpassyear" type="text" ></td>
                                  <td><input class="form-control input-lg" placeholder="" name="othersubjects" type="text" ></td>
                                  <td><input class="form-control input-lg" placeholder="" name="otherperc" type="text" ></td>
                                  <td><input class="form-control input-lg" placeholder="" name="otherdiv" type="text" ></td>
                                </tr>

                                 </tbody>
                            </table>
                            <div class="form-group center-block">
                          <a href="step2.php" class="btn btn-danger" id="prev-3">Previous</a>
                          <input type="submit" name="submit" value="Save & Next" id="submit" class="btn btn-success">
                        </div>


        </div>
      </div>


        		</form>

        	</div>

<script  src="https://code.jquery.com/jquery-3.4.1.min.js"
          integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
          crossorigin="anonymous"></script>



</body>
</html>
