<?php
$db_ID = $_SESSION['id'];
?>
<form action="" method="POST">
    <table class="table table-bordered table-hover">
        <tr>
            <th>Id</th>
            <th>Lab Number</th>
            <th>Class</th>
            <th>Lab Work</th>
            <th>Date/Time</th>
        </tr>
        <tbody>
            <?php
                $query = "SELECT * FROM assign_lab where assigned_to = $db_ID";
                $select_prod_query = mysqli_query($connection, $query);
                while($row = mysqli_fetch_assoc($select_prod_query)){
                    $id = $row['id'];
                    $lab_number = $row['lab_number'];
                    $lab_work = $row['lab_work'];
                    $class = $row['class'];
                    $time = $row['time'];

                    echo "<tr>";#start of table row; show everything in table from db using variables created above
                        echo "<td>$id</td>";
                        echo "<td>$lab_number</td>";
                        echo "<td>$class</td>";
                        echo "<td>$lab_work</td>";
                        echo "<td>$time</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
    </form>
<!--END OF VIEW ALL POSTS SECTION-->
