 <?php
        $branch = $_SESSION['branch'];
?>
<table class="table table-hover table-responsive">
        <tr>
            <th>Teacher Name</th>
            <th>Teacher Mobile</th>
            <th>Teacher Email</th>
            <th>Teacher Graduation</th>
        </tr>
    <tbody>
        <?php
        $query = "select * from teachers where branch = '$branch'";
$view_query = mysqli_query($connection, $query);
while($row = mysqli_fetch_assoc($view_query)){
    $teacher_name = $row['teacher_name'];
    $teacher_mobile = $row['teacher_mobile'];
    $teacher_email = $row['email'];
    $teacher_graduation = $row['teacher_graduation'];
        echo "<tr>";
        echo "<td>$teacher_name</td>";
        echo "<td>$teacher_mobile</td>";
        echo "<td>$teacher_email</td>";
        echo "<td>$teacher_graduation</td>";
        echo "</tr>";
}
        
?>
       

    </tbody>
    </table>