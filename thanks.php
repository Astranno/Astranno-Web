<?php
	$message = "";
	$sub = "";
	if(isset($_GET["type"])){
		if($_GET["type"] == "news"){
			$message = "Thank You!";
			$sub = "You are now subscribed to our newsletter!";
		}
		else if($_GET["type"] == "contact"){
			$message = "Thank You!";
			$sub = "We'll get back to you soon!";
		}
		else if($_GET["type"] == "error"){
			$message = "Whoops!";
			$sub = "Either you are already subscribed to the newsletter, or there is something wierd going on.";
		}
		else{
			header("Location: https://www.astranno.com");
		}
	}
	else{
		header("Location: https://www.astranno.com");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title id="title"></title>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
  <style>
  body {
    padding: 0;
    margin: 0;
    background-color: #5bb9e9;
    justify-content: center;
    align-items: center;
  }
  a{
  	text-decoration: none;
  }
  a p{
  	font-family: open-sans, sans-serif;
  	color: white;
  	font-size: 20px;
  	margin: 30px;
  }
  .yes{
     position: fixed;
     top: 50%;
     left: 50%;
     font-family: open-sans, sans-serif;
     color: white;
     transform: translate(-50%, -50%);
  }
  .yes #answer{
  	font-size: 80px;
  }
  .yes #sub-answer{
  	font-size: 30px;
  	margin-top: -20px;
  }
  </style>
</head>
<body>
	<a href="https://www.astranno.com"><p>Back to Astranno.com</p></a>
  <div class="yes">
  	<center>
	    <h1 id="answer"><?php echo $message; ?></h1>
	    <p id="sub-answer"><?php echo $sub; ?></p>
    </center>
  </div>
</body>
</html>