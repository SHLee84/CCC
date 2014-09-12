<!DOCTYPE html>
<?php include_once('library/definition.php'); ?>
<?php include_once('library/functions.php'); ?>
<html lang="en">
	<head>
		<?php include_once(VIEW_F . CONTENT_F . META); ?>

		<title><?php echo ORG_SHORT_NAME; ?> Admin Log-In Page</title>

		<link href="<?php echo YETI_THEME; ?>" rel="stylesheet">
	</head>
	<body>
		<?php include_once(VIEW_F . CONTENT_F . LOGIN); ?>
		<?php include_once(VIEW_F . MENU_F . FOOTER); ?>

		<script src="../js/jquery.js"></script>
		<script src="../js/bootstrap.js"></script>
	</body>
</html>