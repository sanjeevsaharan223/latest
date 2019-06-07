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
<body class="bg-success">
<input type="hidden" value="<?php echo $state ?>" id="state">
<div class="container">
	<div class="row no-gutters h-100 justify-content-center">
		<div class="col-md-8 bg-light p-4 rounded">
			<h5 class="text-center text-light bg-success mb-2 p-2 rounded lead" id="result">hello world</h5>
			<div class="progress mb-2" style="height: 40px;">
			<div class="progress-bar bg-danger" role="progress-bar" style="width: 100%;" id="progressBar">
				<b class="lead" id="progressText">Step-4 Upload Photo And Sign</b>
			</div>
			</div>
			<form action="" method="post" id="form-data" enctype="multipart/form-data">
        		<div id="fourth">
					<table class="table table-bordered">
						    
						  <tbody>
						    <tr>
						      <th scope="row"><div style="max-width: 650px; margin: auto;">
        <h5 class="page-header">Photograph</h5>
        <p class="lead">Select a PNG or JPEG image, having maximum size <span id="max-size"></span> KB.</p>

        <form id="upload-image-form" action="" method="post" enctype="multipart/form-data">
          <div id="image-preview-div" style="display: none">
            <label for="exampleInputFile">Selected image:</label>
            <br>
            <img id="preview-img" src="noimage">
          </div>
          <div class="form-group">
            <input type="file" name="file" id="file" required>
          </div>
          <button class="btn btn-lg btn-primary" id="upload-button" type="submit" disabled>Upload image</button>
        </form>

        <br>
        <div class="alert alert-info" id="loading" style="display: none;" role="alert">
          Uploading image...
          <div class="progress">
            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
            </div>
          </div>
        </div>
        <div id="message"></div>
      </div>
</th>
						      	 
						  </tbody>
					</table>



        		</div>

      </div>




        		</form>

        	</div>

  	</div>

</div>
<script  src="https://code.jquery.com/jquery-3.4.1.min.js"
          integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
          crossorigin="anonymous"></script>

<script type="text/javascript">
	
function noPreview() {
  $('#image-preview-div').css("display", "none");
  $('#preview-img').attr('src', 'noimage');
  $('upload-button').attr('disabled', '');
}

function selectImage(e) {
  $('#file').css("color", "green");
  $('#image-preview-div').css("display", "block");
  $('#preview-img').attr('src', e.target.result);
  $('#preview-img').css('max-width', '550px');
}

$(document).ready(function (e) {

  var maxsize = 500 * 1024; // 500 KB

  $('#max-size').html((maxsize/1024).toFixed(2));

  $('#upload-image-form').on('submit', function(e) {

    e.preventDefault();

    $('#message').empty();
    $('#loading').show();

    $.ajax({
      url: "upload-image.php",
      type: "POST",
      data: new FormData(this),
      contentType: false,
      cache: false,
      processData: false,
      success: function(data)
      {
        $('#loading').hide();
        $('#message').html(data);
      }
    });

  });

  $('#file').change(function() {

    $('#message').empty();

    var file = this.files[0];
    var match = ["image/jpeg", "image/png", "image/jpg"];

    if ( !( (file.type == match[0]) || (file.type == match[1]) || (file.type == match[2]) ) )
    {
      noPreview();

      $('#message').html('<div class="alert alert-warning" role="alert">Unvalid image format. Allowed formats: JPG, JPEG, PNG.</div>');

      return false;
    }

    if ( file.size > maxsize )
    {
      noPreview();

      $('#message').html('<div class=\"alert alert-danger\" role=\"alert\">The size of image you are attempting to upload is ' + (file.size/1024).toFixed(2) + ' KB, maximum size allowed is ' + (maxsize/1024).toFixed(2) + ' KB</div>');

      return false;
    }

    $('#upload-button').removeAttr("disabled");

    var reader = new FileReader();
    reader.onload = selectImage;
    reader.readAsDataURL(this.files[0]);

  });

});





</script>

</body>
</html>
