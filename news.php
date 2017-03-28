<?php
	session_start();
	require_once('dbconfig/config.php');

?>
<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div id="head-wrapper">
		
		<h3>Welcome    <?php echo $_SESSION['username']; ?></h3>
		
		<form action="index.php" method="post">
			<div >
				<button class="logout-btn" type="submit">Log Out</button>	
			</div>
		</form>
	</div>


<div class="navig">
	<div> <img src="css/pav/c-red.png"></div>
  
   <nav>
     <ul>
		<li><a href="#">Index</a></li>
		<li><a href="#">News</a>
			<ul>
				<li><a href="news.php">Local news</a></li>
				<li><a href="#">Global news</a></li>			
			</ul>
		</li>
		<li><a href="#">About us</a>
			<ul>
				<li><a href="#">Person 1</a></li>
				<li><a href="#">Person 2</a></li>
				<li><a href="#">Person 3</a></li>
				<li><a href="#">Person 4</a></li>
			</ul>
		</li>
		
	</ul>
</nav>
</div>

 <!-- body -->


<div>
	<p><a class="linkBar" href="#">Home</a></p>
 	</div>
	<div class="body">
	<h1>News</h1>
	<div class="news">
	<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/HONDA_ASIMO.jpg/220px-HONDA_ASIMO.jpg">
	<h5></h5>>Mechatronika – ateities profesija besidomintiems programavimu, mechanika ir elektronika</h5>
	<h6>Pastaraisiais metais atgyja įvairios techninės specialybės, o jas rengiančios mokyklos sulaukia didelio mokinių antplūdžio. Švietimo ekspertai pastebi, kad atsigavus kuriai nors pramonės šakai tą pajunta ir profesinės mokyklos. Ne išimtis ir automatinių sistemų eksploatavimo mechatronikos specialybė.

	Skaitykite daugiau: http://www.15min.lt/mokslasit/straipsnis/technologijos/mechatronika-ateities-profesija-besidomintiems-programavimu-mechanika-ir-elektronika-646-738306</h6>






</div>
<hr>



</body>
</html>