<!-- <?php

	echo date("d/m/y l");
	date_default_timezone_set("Asia/Kolkata");
	echo date("h:i:sa");
	$d = strtotime("tomorrow");
	echo date("Y-m-d h:i:sa", $d) . "<br>";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body style="background-image: linear-gradient(white, green);">

<div style="blog-slider: ">
	
</div>




</body>
</html> -->



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<style type="text/css">
		body 
		{	
			margin: 0;
			height: 100px;
			display: flex;
			align-items: center;
			justify-content: center;
			background-color: black;
			overflow: hidden;
		}

		.container
		{
			font-size: 10px;
			width: 50%;
			height: 40px;
			position: relative;
		}

		.sun
		{
			position: absolute;
			top: 15em;
			left: 15em;
			width: 10em;
			height: 10em;
			background-color: yellow;
			border-radius: 50%;
			box-shadow: 0 0 3em white;
		}

		.earth, .moon
		{
			position: absolute;
			border-style: solid;
			border-color: white transparent transparent transparent;
			border-width: 0.1em 0.1em 0 0;
			border-radius: 50%;
		}

		.earth
		{
			top: 5em;
			left: 5em;
			width: 30em;
			height: 30em;
			animation: orbit 36.5s linear infinite;
		}

		.moon
		{
			top: 0;
			right: 0;
			width: 8em;
			height: 8em;
			animation: orbit 2.7s linear infinite;
		}   

		.earth::before,
		.moon::before
		{
			content: '';
			position: absolute;
			border-radius: 50%;
		}

		.earth::before
		{
			top: 2.8em;
			right: 2.8em;
			width: 3em;
			height: 3em;
			background-color: cyan ;
		}
		.moon::before
		{
			top: 0.8em;
			right: 0.2em;
			width: 1.2em;
			height: 1.2em;
			background-color: silver;
		}

		@keyframes orbit
		{
			to
			{
				transform: rotate(360deg);
			}
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="sun"></div>
		<div class="earth">
			<div class="moon"></div>
		</div>
	</div>

</body>
</html>