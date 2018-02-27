<table class="table table-hover table-responsive">
        <tr>
            <th>Assistant Name</th>
            <th>Assistant Lab</th>
            <th>Assistant Email</th>
            <th>Assistant Mobile</th>
            <th></th>
            <th></th>
        </tr>
    <tbody>
         <?php
$query = "select * from lab_assistant";
$view_query = mysqli_query($connection, $query);
while($row = mysqli_fetch_assoc($view_query)){
    $assistant_id = $row['id'];
    $assistant_name = $row['Assistant_name'];
    $assistant_lab = $row['assistant_lab'];
    $assistant_email = $row['email'];
    $assistant_mobile = $row['mobile'];
        echo "<tr>";
        echo "<td>$assistant_name</td>";
        echo "<td>$assistant_lab</td>";
        echo "<td>$assistant_email</td>";
        echo "<td>$assistant_mobile</td>";
        echo"<td><a href='dashboard.php?source=assign_lab_duty&id=$assistant_id'class='btn btn-primary'>Assign</td>";
        echo"<td><a href='dashboard.php?source=assign_lab&id=$assistant_id'class='btn btn-primary'>Assign Lab</td>";
        echo "</tr>";
}
        
?>
       

    </tbody>
    </table>