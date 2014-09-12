<div class="container">
	<div class="row">
		&nbsp;<br />&nbsp;<br />
	</div>
	<div class="row">
		<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
			<img class="img-responsive center-block" src="../img/logo_horizontal.png" />
		</div>
	</div>
	<div class="row">
		<div class="col-md-offset-4 col-md-4 col-lg-offset-4 col-lg-4 col-sm-offset-1 col-sm-10 col-xs-offset-1 col-xs-10">
			<h2 class="form-signin-heading text-center">Member Sign Up</h2>
			<form class="form-signin" id="signup-form" method="post" action="save.php">
				<div class="form-group">
					<label for="user_id">User ID <span class="text-danger">*</span></label>
					<input type="text" class="form-control" name="user_id" id="user_id" placeholder="Enter user ID">
				</div>
				<div class="form-group">
					<label for="pw">Password <span class="text-danger">*</span></label>
					<input type="password" class="form-control" name="pw" id="pw" placeholder="">
				</div>
				<div class="form-group">
					<label for="cpw">Confirm Password <span class="text-danger">*</span></label>
					<input type="password" class="form-control" name="cpw" id="cpw" placeholder="">
				</div>
				<div class="form-group">
					<label for="f_name">First Name <span class="text-danger">*</span></label>
					<input type="text" class="form-control" name="f_name" id="f_name" placeholder="Enter first name">
				</div>
				<div class="form-group">
					<label for="l_name">Last Name <span class="text-danger">*</span></label>
					<input type="text" class="form-control" name="l_name" id="l_name" placeholder="Enter last name">
				</div>
				<div class="form-group">
					<label for="email">Email Address <span class="text-danger">*</span></label>
					<input type="text" class="form-control" name="email" id="email" placeholder="Enter email address">
				</div>
				<div class="form-group">
					<label for="phone">Phone Number <span class="text-danger">*</span></label>
					<input type="text" class="form-control" name="phone" id="phone" placeholder="Enter phone number">
				</div>
				<div class="form-group">
					<br />
					<button type="submit" class="form-control btn btn-sm btn-warning btn-block">Submit</button><br />
					<button type="button" class="form-control btn btn-sm btn-default btn-block" onclick="window.history.back()">Cancel</button>
				</div>
			</form>
		</div>
	</div>
</div> <!-- /container -->