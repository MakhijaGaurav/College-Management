<?php
$db_ID = $_SESSION['id'];
?>
<form action="" method="POST">
    <table class="table table-bordered table-hover">
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Description</th>
            <th>Day</th>
            <th>Time</th>
        </tr>
        <tbody>
            <?php
                $query = "SELECT * FROM lab_duty where assigned_to = $db_ID";
                $select_prod_query = mysqli_query($connection, $query);
                while($row = mysqli_fetch_assoc($select_prod_query)){
                    $id = $row['assigned_to'];
                    $title = $row['title'];
                    $description = $row['description'];
                    $day = $row['day'];
                    $time = $row['time'];

                    echo "<tr>";#start of table row; show everything in table from db using variables created above
                        echo "<td>$id</td>";
                        echo "<td>$title</td>";
                        echo "<td>$description</td>";
                        echo "<td>$day</td>";
                        echo "<td>$time</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
    </form>
<!--END OF VIEW ALL POSTS SECTION-->
