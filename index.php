<?php 
include('db.php');




 ?>

 <!DOCTYPE html>

<html lang=“en”>

<head>

	<meta charset=“utf-8”>

	<title>Chat System in PHP</title>

	<meta name=“description” content=“Bootstrap”>

	<meta name="author" content="Imon Dela Rosa">

	<!-- Mobile Specific Meta -->

 	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

<script>
	// function ajax(){
	// 	var req = new XMLHttpRequest();
	// 	req.onreadystatechange = function(){
	// 		if(req.readyState == 4 && req.status == 200){
	// 			document.getElementById('chat').innerHTML = req.responseText;
	// 		}
	// 	}
	// 	req.open('GET','chat.php',true);
	// 	req.send();
	// }
	// setInterval(function(){
	// 	ajax()
	// },1000);
</script>

</head>

<body onload="ajax();">

<div id="container">
	<div id="chat-box">
	<div id="chat"></div>

	</div> <!-- chat-box -->
	<form action="index.php" method="post">
		<input type="text" name="name" placeholder="enter name">
		<textarea name="message" placeholder="enter message" cols="30" rows="10"></textarea>
		<input type="submit" name="submit" value="Send Message">
	</form>

<?php 
if(isset($_POST['submit'])){

$name = $_POST['name'];
$message = $_POST['message'];

$query = "INSERT INTO chat(name,message) VALUES('$name','$message')";
$run = $con->query($query);

if($run){
	// die("Error". mysqli_error())
   echo "<embed loop='false' src='91926__corsica-s__ding.wav' hidden='true' autoplay='true' />";
  }

}
 ?>


</div> <!-- container -->

<!-- Latest compiled and minified JavaScript -->
<script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js">

</script>
<script>
	function ajax(){
		var req = new XMLHttpRequest();
		req.onreadystatechange = function(){
			if(req.readyState == 4 && req.status == 200){
				document.getElementById('chat').innerHTML = req.responseText;
			}
		}
		req.open('GET','chat.php',true);
		req.send();
	}
	setInterval(function(){
		ajax()
	},1000);
</script>

</body>
</html>