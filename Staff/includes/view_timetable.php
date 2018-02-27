<?php
if(isset($_POST['update']))
    header("Location: dashboard.php?source=update_timetable");
?>
<form action="" method="POST">
    <table class="table table-bordered table-hover">
        <tr>
            <th>Monday</th>
            <th>Tuesday</th>
            <th>Wednesday</th>
            <th>Thursday</th>
            <th>Friday</th>
            <th>Saturday</th>
        </tr>
        <tbody>
            <?php
                $query = "SELECT * FROM time_table";
                $select_prod_query = mysqli_query($connection, $query);
                while($row = mysqli_fetch_assoc($select_prod_query)){
                    $monday = $row['monday'];
                    $tuesday = $row['tuesday'];
                    $wednesday = $row['wednesday'];
                    $friday = $row['thursday'];
                    $thursday = $row['friday'];
                    $saturday = $row['saturday'];
                    echo "<tr>";#start of table row; show everything in table from db using variables created above
                        echo "<td>$monday</td>";
                        echo "<td>$tuesday</td>";
                        echo "<td>$wednesday</td>";
                        echo "<td>$thursday</td>";
                        echo "<td>$friday</td>";
                     echo "<td>$saturday</td>";
                    
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
       
       <input type="submit" name="update" class="btn btn-primary" value="Update">
    </form>

<!--END OF VIEW ALL POSTS SECTION-->
