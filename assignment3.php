<?php
	include 'ParentClass.php';
	include 'ChildClass.php';
	$Job = new Work("", "", 0, 0);
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Assignment 3</title>

	<link rel="stylesheet" href="assignment3.css">
</head>
<body>
	<?php
    if (!isset($_POST['Submit'])) {
	?>
	<h1>Enter your Job Info.</h1>
	<section id="sectionOne">
		<div>
			<form method="Post">
		  	Name:
				<br><input type="text" name="name" id="name"> <br>
				Place of Work:
				<br><input type="text" name="place" id="place"> <br>
				Number of Days You Work:
				<br><input type="number" name="days" id="days"> <br>
				Number of Hours Each Day:
				<br><input type="number" name="hours" id="hours"> <br>
				<input type="submit" value="Submit" name = "Submit">
			</form>
		</div>
	</section>
			<?php
		  	}
		  	else {
		    	echo "<h2>Here is Your Complete Job Information</h2>";
		    	$Job->setName($_POST['name']);
					$Job->setPlace($_POST['place']);
					$Job->setDays($_POST['days']);
					$Job->setHours($_POST['hours']);
					echo $Job;
					?>
					<h2>Here are your total hours</h2>
					<?php
					$job_plus = new WorkPluss($_POST['name'],$_POST['place'],$_POST['days'],$_POST['hours']);
					$job_plus->multiply_value();
					echo $job_plus;

		  }
		?>
		</div>
 </section>




</body>
</html>
