<?php global $artifact; ?>

<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>S · OS</title>
	<link rel="icon"
      type="image/png"
      href="media/images/favicon.png">
	<!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css"> -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,400i,700|Roboto+Mono">
	<link rel="stylesheet" type="text/css" href="assets/styles/style.css?">
	<script src="assets/main.js"></script>
</head>

<body>
	<div id="header">
		<div class="header-image" style="background-image: url(<?php echo $artifact->attributes['image'];?>)">
			<span class="header-title-container"><?php echo $artifact->attributes['image name'];?></span>
		</div>
	</div>

	<div id="title">
		<h1 class="title"><?php echo $artifact->attributes['title'];?></h1>
	</div>

	<div id="body">
		<div id="body-content">
			<div class="quote">
				<em>
					<p id="greeter"></p>
					<p id="time" class="time"></p>
				</em>
			</div>
			<?php echo $artifact->attributes['content'];?>
		</div>
	</div>
</iframe>
<script src="assets/requestscript.js"></script>
</body>
</html>
