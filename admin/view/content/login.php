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
			<form class="form-signin" method="post" action="authenticate.php">
				<h2 class="form-signin-heading text-center">Admin Panel Log In</h2><br />
				<?php if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["auth"])) { ?>
				<div class="alert alert-danger"><small>Your username or password combination does not exist. Try again.</small></div>
				<?php } ?>
				<input type="text" class="form-control" placeholder="user ID" autofocus name="username">
				<p class="pull-right small">First time logging in? Click <a href="verify.php">here</a></p>
				<input type="password" class="form-control" placeholder="Password" name="password"><br />
				<button class="btn btn-sm btn-warning btn-block" type="submit">Connect&nbsp;&nbsp;<span class="glyphicon glyphicon-user"></span></button>
			</form>
		</div>
	</div>
</div> <!-- /container -->