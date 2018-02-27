 
   <form action="" method="POST">
    <table class="table table-bordered table-hover">
        <tr>
            <th>ID</th>
            <th>Brand</th>
            <th>Name</th>
            <th>Quantity</th>
            <th>MRP</th>
            <th>Belongs to</th>
        </tr>
        <tbody>
            <?php
                $query = "SELECT * FROM products";
                $select_prod_query = mysqli_query($connection, $query);
                while($row = mysqli_fetch_assoc($select_prod_query)){
                    $product_id = $row['id'];
                    $product_name = $row['product_name'];
                    $product_brand = $row['product_brand'];
                    $product_est_mrp = $row['product_mrp'];
                    $product_quantity = $row['product_qty'];
                    $belongs_to = $row['belongs_to'];

                    echo "<tr>";#start of table row; show everything in table from db using variables created above
                        echo "<td>$product_id</td>";
                        echo "<td>$product_brand</td>";
                        echo "<td>$product_name</td>";
                        echo "<td>$product_quantity</td>";
                        echo "<td>$product_est_mrp</td>";
                    echo "<td>$belongs_to</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
    </form>
<!--END OF VIEW ALL POSTS SECTION-->