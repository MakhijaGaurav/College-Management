 
   <form action="" method="POST">
    <table class="table table-bordered table-hover">
        <tr>
            <th>ID</th>
            <th>Type</th>
            <th>Incharge</th>
            <th>Assistant</th>
            <th>Products</th>
            <th>Lab Number</th>
        </tr>
        <tbody>
            <?php
                $query = "SELECT * FROM labs";
                $select_prod_query = mysqli_query($connection, $query);
                while($row = mysqli_fetch_assoc($select_prod_query)){
                    $lab_id = $row['id'];
                    $lab_type = $row['lab_type'];
                    $lab_incharge = $row['lab_incharge'];
                    $lab_assistant = $row['lab_assistant'];
                    $lab_product = $row['lab_product'];
                    $lab_number = $row['lab_no'];

                    echo "<tr>";#start of table row; show everything in table from db using variables created above
                        echo "<td>$lab_id</td>";
                        echo "<td>$lab_type</td>";
                        echo "<td>$lab_incharge</td>";
                        echo "<td>$lab_assistant</td>";
                        echo "<td>$lab_product</td>";
                        echo "<td>$lab_number</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
    </form>
<!--END OF VIEW ALL POSTS SECTION-->