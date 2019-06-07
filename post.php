
<script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>

		<script type="text/javascript">
		$(document).ready(function(){

		    var form = $('#myform');

		    $('#next-1').click(function(){

		      $.ajax({
		        url:form.attr("action"),
		        type:'post',
		        data:$("#myform input").serialize(),

		        success: function(data){
							window.location.href = 'step2.php';
							console.log(window.location.href);

		        }
		      });

		    });




		  });
		</script>

</body>
</html>
