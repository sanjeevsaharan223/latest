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
			<div class="card-body bg-white" >
				<h5 class="card-title bg-secondary">NEW CANDIDATE REGISTRATION</h5>
				<div class="card">
					<div class="card-body">
						<h6 class="card-title bg-success">STEPS TO SIGN-IN</h6>
						<ol class="list-group list-group-flush">
						    <li class="list-group-item">Apply for Online Registration</li>
						    <li class="list-group-item">Fill Online Application Form</li>
						    <li class="list-group-item">Upload Scanned Photo & Signature</li>
						    <li class="list-group-item">Pay Examination Fee</li>
						    <li class="list-group-item">Download Confirmation Page</li>
						</ol>
					</div>
				</div>
				<div class="align-items-center">
					<a class="btn btn-primary btn-block" href="#" role="button">APPLY</a>
	
				</div>
				
			</div>
		</div>
		<div class="card col-md-6">
			<div class="card-body bg-white">
				<h5 class="card-title bg-secondary">ONLY REGISTERED CANDIDATES SIGN IN</h5>
				<div class="card">
					<div class="card-body">
						<form action="" method="POST">
							
								<div class="form-group">
								<label for="applicationNumber">Application No.</label>
	                            <input class="form-control input-lg" placeholder="Enter your application no" name="applicationNumber" type="text" >
	                        	</div>
	                        	<div class="form-group">
	                        		<label for="passwd">Password</label>
	                            <input class="form-control input-lg" placeholder="Password" name="passwd"  type="text" >
	                        	</div>
								<input class="btn btn-primary btn-block" type="submit" value="LOGIN">
							
						</form>



					</div>
				</div>
				
				
			</div>
			
		</div>		
	</div>
</div>
</body>
</html>