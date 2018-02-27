<?php
if(isset($_POST['submit'])){
	$title = $_POST['title'];
	$description = $_POST['description'];
	$day = $_POST['day'];
	$time = $_POST['time'];
	$query = "insert into meetings(title,description,day,time)VALUES('$title','$description','$day','$time')";
	$insert_query = mysqli_query($connection, $query);
	
}
?>
<form action="" method="POST" role="form">
	<legend>Add a meeting</legend>

	<div class="form-group">
		<label for="">Meeting Title</label>
		<input  name="title" type="text" class="form-control" id="" placeholder="Input field">
	</div>
	
	<div class="form-group">
		<label for="">Meeting Description</label>
		<textarea name="description" type="text" class="form-control" id="" placeholder="Input field"></textarea>
	</div>
	
	<div class="form-group">
		<label for="">Meeting Day</label>
		<input name="day"type="text" class="form-control" id="" placeholder="Input field">
	</div>
	
	<div class="form-group">
		<label for="">Meeting Time</label>
		<input type="text" name="time" class="form-control" id="" placeholder="Input field">
	</div>
	



	<button  name="submit" type="submit" class="btn btn-primary">Submit</button>
</form>
