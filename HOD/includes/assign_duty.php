<?php
$assigned_by = $_SESSION['hodID'];
if(isset($_POST['submit'])){
	$assigned_to = $_GET['id'];
	$title = $_POST['title'];
	$description = $_POST['description'];
	$day = $_POST['day'];
	$time = $_POST['time'];
	$query = "insert into duties(title,description,day,time,assigned_by,assigned_to)VALUES('$title','$description','$day','$time','$assigned_by','$assigned_to')";
	$duty_query = mysqli_query($connection, $query);
	//header("Location: HOD/dashboard.php");
	
}
?>

<form action="" method="POST" role="form">
	<legend>Assign a Duty</legend>

	<div class="form-group">
		<label for="">Title</label>
		<input  name="title" type="text" class="form-control" id="" placeholder="Input field">
	</div>
	
	<div class="form-group">
		<label for="">Description</label>
		<textarea name="description" type="text" class="form-control" id="" placeholder="Input field"></textarea>
	</div>
	
	<div class="form-group">
		<label for="">Day</label>
		<input name="day"type="text" class="form-control" id="" placeholder="Input field">
	</div>
	
	<div class="form-group">
		<label for="">Time/Lecture</label>
		<input type="text" name="time" class="form-control" id="" placeholder="Input field">
	</div>
	



	<button  name="submit" type="submit" class="btn btn-primary">Submit</button>
</form>
