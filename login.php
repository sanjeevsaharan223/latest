<?php
include "main2.php"

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	
</head>
<body>

<div class="container">
	<div class="row">
		<div class="card col-md-6" style="height: 500px;">
			<div class="card-body bg-white shadow-lg bg-white rounded" >
				<h5 class="card-title bg-transparent text-center text-info ">NEW CANDIDATE REGISTRATION</h5>
				<div class="card">
					<div class="card-body">
						<h6 class="card-title bg-success text-center">STEPS TO SIGN-IN</h6>
						<ol class="list-group list-group-flush">
						    <li class="list-group-item">Apply for Online Registration</li>
						    <li class="list-group-item">Fill Online Application Form</li>
						    <li class="list-group-item">Upload Scanned Photo & Signature</li>
						    <li class="list-group-item">Pay Examination Fee</li>
						    <li class="list-group-item">Download Confirmation Page</li>
						</ol>
					</div>
				</div>
				<div class="text-center">
					<!--<a class="btn btn-primary btn-block" href="#" role="button">APPLY</a>-->
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#register">
  Apply Here
</button>
				</div>

			</div>
		</div>

		<div class="card col-md-6">
			<div class="card-body bg-white shadow-lg bg-white rounded">
				<h5 class="card-title bg-transparent text-center text-info">ONLY REGISTERED CANDIDATES SIGN IN</h5>
				<div class="card">
					<div class="card-body">
						<form action="loginprocess.php" method="POST">

								<div class="form-group">
									<label for="applicationNo">Application Number</label>
	                            <input class="form-control input-lg" placeholder="Enter your application no" name="applicationNo" type="text" autocomplete="off" required="true">
	                        	</div>
	                        	<div class="form-group">
	                        		<label for="passwd">Password</label>
	                            <input class="form-control input-lg" placeholder="Password" name="passwd" autocomplete="off" type="text" >
	                        	</div>
	                        	<img src="captcha.php" >
	                        	<div class="form-group">
	                        		<label for="captcha">Enter code below</label>
	                        	<input class="form-control" type="text" name="captcha" placeholder="Captcha code" autocomplete="off">
	                        	</div>

								<input class="btn btn-primary btn-block" type="submit" name="submit" value="LOGIN">

						</form>



					</div>
				</div>


			</div>

		</div>
	</div>
</div>
<!-- Button trigger modal 
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>-->

<!-- Modal -->
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="registerModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header shadow-none ">
        <h5 class="modal-title text-warning " id="registerModal">Registration for new Candidate</h5>
        <div id="errors"></div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div id="info"></div>
      <div class="modal-body">
	           	<form action="" method="POST" id="registerform">

								<div class="form-group">
									<label for="fullname">Full Name(as per records)</label>
	                            <input class="form-control input-lg" placeholder="Enter your full name" name="fullname" type="text" autocomplete="off" required="true">
	                            <span class="error_form" id="errorfullname"></span>
	                        	</div>

								<div class="form-group">
									<label for="mobile">Mobile Number</label>
	                            <input class="form-control input-lg" placeholder="Mobile Number" name="mobile" type="tel" autocomplete="off" id="mobile" required="true">
	                            <span class="error_form" id="errormobile"></span>
	                        	</div>
	                        	<div class="form-group">
	                        		<label for="email">E-mail(for future correspondance)</label>
	                            <input class="form-control input-lg" placeholder="E-mail" name="email" id="email" autocomplete="off" type="email" required="true">
	                            <span class="error_form" id="erroremail"></span>
	                        	</div>

								<div class="form-group">
									<label for="passwd">Create password</label>
	                            	<input class="form-control input-lg" placeholder="Enter password of minimum length 6" name="passwd" type="password" id="password"  autocomplete="off" required="true">
	                            	<span class="error_form" id="errorpassword"></span>
	                            </div>

	                            <div class="form-group">
									<label for="passwd">Re-enter password</label>
	                            	<input class="form-control input-lg" placeholder="Enter again" name="passwd1" type="password" id="password1"  autocomplete="off" required="true">
	                            	<span class="error_form" id="errorpassword1"></span>
	                            </div>

	                        	<div>
	                        	<img src="captchareg.php" class="align-self-center" id="captchareg">
	                        	
	                        	</div>

	                        	<div class="form-group">
	                        		<label for="captcha">Enter code below</label>
	                        	<input class="form-control" type="text" name="captcha" placeholder="Captcha code" autocomplete="off" id="captcha" required="true">
	                        	<span class="error_form" id="errorcaptcha"></span>
	                        	</div>
	                        	<div class="text-center">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        						<button type="button" class="btn btn-primary" name="registerbutton" id="registerbutton">Register</button>
	        			</div>
						</form>
						
      </div>
        </div>
      </div>
      

<script  src="https://code.jquery.com/jquery-3.4.1.min.js"
          integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
          crossorigin="anonymous"></script>
<script src="https://cdn.rawgit.com/PascaleBeier/bootstrap-validate/v2.2.0/dist/bootstrap-validate.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
	
	bootstrapValidate('#mobile', 'numeric:Please only enter numeric characters!')
    bootstrapValidate('#email', 'email:Enter a valid E-Mail!');
    bootstrapValidate('#password', 'min:6:Enter at least 6 characters!');
    bootstrapValidate('#password1', 'matches:#password:Your passwords should match');
    bootstrapValidate('#captcha', 'required:Please fill out above code');

    $("#registerbutton").click(function(){
    	var data = $("#registerform").serialize();
    $.ajax({
    	url: "register.php",
    	method:"POST",
    	data: data,
    	dataType:"JSON",
    	success: function(data){
    		
    		if(data.hasOwnProperty('erroremail')){
    			$("#erroremail").html("<div class='alert alert-danger'>"+data.erroremail+"</div>");

    		}
    		if(data.hasOwnProperty('errormobile')){
    			$("#errormobile").html("<div class='alert alert-danger'>"+data.errormobile+"</div>");
    		}
    		if(data.hasOwnProperty('errorcaptcha')){
    			$("#errorcaptcha").html("<div class='alert alert-danger'>"+data.errorcaptcha+"</div>");
    		}
    		
    		if (data.hasOwnProperty('token'))
    		 {
    		 	
    		 	window.location.href = data.token;
    		 }

    	}
    });
  });



});



</script>

<script type="text/javascript">
	

	window.history.forward();
</script>
  
</body>
</html>
