<html>
<?php
    include_once("INCLUDES/header.php");
?>
    <body>
        <?php
        include_once("INCLUDES/navigation.php");
        ?>
        
        <div class="container">
        <table class="table table-hover table-responsive">
        <tr>
            <th>Teacher Name</th>
            <th>Teacher Mobile</th>
            <th>Teacher Email</th>
            <th>Teacher Graduation</th>
        </tr>
    <tbody>
         <?php
$query = "select * from teachers";
$view_query = mysqli_query($connection, $query);
while($row = mysqli_fetch_assoc($view_query)){
    $teacher_name = $row['teacher_name'];
    $teacher_mobile = $row['teacher_mobile'];
    $teacher_email = $row['email'];
    $teacher_graduation = $row['teacher_graduation'];
    
}
        echo "<td>$teacher_name</td>";
        echo "<td>$teacher_mobile</td>";
        echo "<td>$teacher_email</td>";
        echo "<td>$teacher_graduation</td>";
        
?>
       

    </tbody>
    </table>

</div>
           
    </body>

</html>
