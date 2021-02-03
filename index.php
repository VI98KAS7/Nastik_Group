<?php include "header.php"; ?>
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-md-6 col-12">
						<div class="edit my-5 px-3">
							<p class="about_us_data">For more information please fill this form.
								and provide your mobile number also.
							</p>
							<!--Contact us form-->
							
							<h1 class="text-center text-capitalize pt-4">Contact Us</h1>
							<hr class="w-25 mx-auto">
							
							<div class="w-50 mx-auto">
								<form action="/action_page.php">
									<div class="form-group">
										<label for="name">Your Name</label>
										<input type="text" class="form-control" placeholder="Enter your namne..." id="name">
									</div>
									<div class="form-group">
										<label for="email">E-Mail</label>
										<input type="email" class="form-control" placeholder="Enter E-mail address.." id="email">
									</div>
									<div class="form-group">
										<label for="number">Mobile Number</label>
										<input type="number" class="form-control"id="number">
									</div>
									<div class="form-group">
										<label for="textarea">Message</label>
										<textarea name="usermessage" class="form-control"></textarea>
									</div>
									<div class="form-group form-check">
										<label class="form-check-label">
											<input class="form-check-input" type="checkbox"> Remember me
										</label>
									</div>
									<button type="submit" class="btn btn-primary">Submit</button>
								</form>
							</div>
							<!--Contact us form end-->
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<div class="edit1 my-5 px-5">
							<h4>Latest Updates</h4>
							<p>There is no updates recently</p>
						</div>
					</div>
				</div>
			</div>
		</section>
	<div id="modal">
		<div id="modal-form">
			<h2>Login</h2>
			<form id="addForm" class="form-group">
					<label for="username">Username</label> 
					<input class="form-control" type="text" id="uname">
					<label for="username"> Password</label>
					<input class="form-control" type="text" id="pass">
					<br>
					<input class="btn btn-primary" type="submit" id="login-button" value="Login">
				</form>
			<div id="close-btn">x</div>
		</div>
	</div>
	<div id="success-message"></div>
	<div id="error-message"></div>
<?php include "footer.php"; ?>