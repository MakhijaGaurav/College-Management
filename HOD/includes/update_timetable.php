<?php
if(isset($_POST['submit'])){
    $year = $_GET['year'];
    $day = $_POST['day'];
    $lecture = $_POST['lecture'];
    $id = $_POST['id'];
    if($year==1)
        $query = "UPDATE first_year_tt SET $day = '$lecture' WHERE id = '$id'";
    elseif($year==2)
         $query = "UPDATE second_year_tt SET $day = '$lecture' WHERE id = '$id'";
    else
        $query = "UPDATE third_year_tt SET $day = '$lecture' WHERE id = '$id'";
        $update_query = mysqli_query($connection, $query);

}
?>
<form action="" method="post">
    <div class="form-group">
        <label>Select Day</label>
        <select class="form-control" name="day">
            <option value="monday">Monday</option>
            <option value="tuesday">Tuesday</option>
            <option value="wednesday">Wednesday</option>
            <option value="thursday">Thursday</option>
            <option value="friday">Friday</option>
            <option value="saturday">Saturday</option>
        </select>
    </div>
    
    <div class="form-group">
        <label>Select Lecture</label>
        <select class="form-control" name="id"> 
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
             </select>
    </div>
    
    <div class="form-group">
        <label>Update With</label>
        <input type="text" class="form-control" name="lecture">
    </div>
    
    <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Submit" name="submit">
    </div>
</form>
