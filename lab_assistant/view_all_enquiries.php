 
   <form action="" method="POST">
    <table class="table table-bordered table-hover">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Mobile</th>
            <th>Email</th>
            <th>Content</th>
        </tr>
        <tbody>
            <?php
                $query = "SELECT * FROM contact_us";
                $enquiry_query = mysqli_query($connection, $query);
                while($row = mysqli_fetch_assoc($enquiry_query)){
                    $id = $row['id'];
                    $name = $row['name'];
	                    $email = $row['email'];
                    $mobile = $row['mobile'];
                    $content = $row['comment'];

                    echo "<tr>";
                        echo "<td>$id</td>";
                        echo "<td>$name</td>";
                        echo "<td>$email</td>";
                        echo "<td>$mobile</td>";
                        echo "<td>$content</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
    </form>
<!--END OF VIEW ALL POSTS SECTION-->