<?php
if($_SERVER['SERVER_NAME'] == "securt.fr") {
	header("Status: 301 Moved Permanently", false, 301);
	header("Location: http://www.securt.fr/".$_SERVER['REQUEST_URI']);
	exit();
}
include('inc/config.php');
?>
<!DOCTYPE html>
	<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="icon" type="image/png" href="img/favicon.png" />
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

		<link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">

		<title>Sécu'RT - <?php echo $pageTitle; ?></title>
	</head>
	<body>
        <div id="bloc_page">
		<div id="header">
			<img src="img/logo.png" alt="Sécu'RT" class="img-responsive glitch-img">
			<h2>
				<?php echo $dateEvent; ?><br>
			</h2>
		</div>

		<?php
		include('inc/navbar.php');
		?>

