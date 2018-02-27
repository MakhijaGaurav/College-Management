<html>
<?php
    include_once("INCLUDES/header.php");
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $content = $_POST['content'];
        $query = "insert into contact_us(name,email,mobile,comment)values('$name','$email','$mobile','$content')";
        $insert_query = mysqli_query($connection, $query);
        header("Location: index.php");
             
    }
    
    
    ?>

    <body>
        <?php
        include_once("INCLUDES/navigation.php");
        ?>

            <section id="login">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-wrap">
                            <h1>Feel Free to Contact us!</h1>
                            <form action="" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name"placeholder="Enter Your Full Name.">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control " name="email" placeholder="Enter Your Email Id.">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control"  name="mobile"placeholder="Enter Your Mobile Number">
                                </div>

                                <div class="form-group">
                                    <textarea class="form-control"  name="comment" placeholder="Remarks, Queries, Comments? Write it here!"></textarea>
                                </div>
                                
                                  <div class="form-group">
                                    <select class="form-control">
                                        <option selected disabled>--SELECT--</option>
                                        <option class="form-control">Computer Technology</option>
                                        <option class="form-control" >Computer Engineering</option>
                                        <option class="form-control">Civil Engineering</option>
                                        <option class="form-control">Mechanical Engineering</option>
                                        <option class="form-control">Instrumentation Engineering</option>
                                     </select>
                                </div>

                                <div class="form-group">
                                    <input type="submit"  name="submit" class="btn btn-primary" value="Submit">
                                </div>
                                

                            </form>
                        </div>
                    </div>
                </div>
            </section>
    </body>

</html>
