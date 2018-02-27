<?php
    include_once("INCLUDES/header.php");
?>
    <body>
        <?php
        include_once("INCLUDES/navigation.php");
        ?>
<div class="container">

                <div class="row">

                    <!-- Blog Entries Column -->
                    <div class="col-md-8">
                        <h1 class="page-header">
                            News and Notifications
                        </h1>

                        <?php
                            $query = "SELECT * FROM Notifications";
                            $Notification_query = mysqli_query($connection, $query);
                        
                          while($row = mysqli_fetch_assoc($Notification_query)){
                                $title = $row['title'];
                                $image = $row['image'];
                                $content = $row['content'];

                        ?>

                            <!-- START OF Notif POST -->
                            <hr>
                            <img class="img-responsive" src="..//Diploma1/admin/<?php echo $image; ?>"> 
                            <hr>
                            <p>
                                <?php echo $content; ?>
                            </p>

                            <hr>
                            <!--END OF BLOG POST-->
                            <?php
                    }//end of while loop which loads posts
                ?>

                    </div>

                    <!-- Blog Sidebar Widgets Column -->

                </div>
                <!-- /.row -->

                <hr>

                
                <!-- Footer -->

            </div>
            <!-- /.container -->

            <!-- jQuery -->
            <script src="js/jquery.js"></script>

            <!-- Bootstrap Core JavaScript -->
            <script src="js/bootstrap.min.js"></script>

    </body>