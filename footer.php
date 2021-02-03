<footer class="container-fluid">
			<div class="bg-dark text-white text-center py-2">
				<h4>Designed and Developed By.</h4>
				<h5 class="m-0">Vikas Kumar</h5>
				<p class="m-0">All Right Reserved © 2020. Nastik Group</p>
			</div>
</footer>
		
		<!-- jQuery library -->
		<script src="js/jQuery.js"></script>
		<script>
			$(document).ready(function(){

				// // Show modal box
				$(document).on('click', '#login', function(e) {
					e.preventDefault();
					$("#modal").show();
					var username = $("#uname").val();
					var password = $("#pass").val();

					$.ajax({
						url: 'Admin/login.php',
						type: 'POST',
						data: {uname: username, pass: password},
						success: function(data){
							if(data == 1){
								$("#success-message").html("Login successfully").slideDown();
								$("#error-message").slideUp();
							}else{
								$("#error-message").html("Login Unsuccessful").slideDown();
								$("#success-message").slideUp();
							}
						}
					});
				});
				
				// Hide Modal box
				$("#close-btn").on("click",function(e) {
					$("#modal").hide();
				});
			});
		</script>
	</body>
<!-- <div style="text-align: center;">
	<div style="position:relative; top:0; margin-right:auto;margin-left:auto; z-index:99999">

</div></div> -->
</html>