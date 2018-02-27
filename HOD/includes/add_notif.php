<?php
if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $add_image = $_FILES['add_image']['name'];
    $add_image_temp = $_FILES['add_image']['tmp_name'];
    move_uploaded_file($add_image_temp, "images/$add_image");
    $content = $_POST['content'];
    $query = "insert into notifications(title,image,content)VALUES('$title','$add_image','$content')";
    $insert_query = mysqli_query($connection, $query);
    //header("Location: ../dashboard.php");
    
        
}
?>
<form enctype="multipart/form-data" action="" method="POST" role="form">
	<legend>Add Notifications and News</legend>

	<div class="form-group">
		<label for="">Notification Title</label>
		<input type="text" name="title" class="form-control" id="" placeholder="Please add a Title for your notification">
	</div>
    
    <div class="form-group">
        <label for="add_image">Post Image</label>
        <input type="file" class="form-control" name="add_image" id="add_image">
    </div>
    
    <div class="form-group">
		<label for="">Notification Title</label>
		<input type="text" name="content"class="form-control" id="" placeholder="Please add Content">
	</div>
    <button type="submit" name="submit"class="btn btn-primary">Submit</button>
</form>
