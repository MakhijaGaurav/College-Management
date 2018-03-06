<?php
//CODE TO CHECK WHICH TYPE OF LOGIN AND MOVING TO DASHBOARD ACCORDINGLY
include_once("INCLUDES/db.php");
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $type = $_POST['type'];
    $query = "select * from $type where email = '$email' and password = '$password'";
    $login_query = mysqli_query($connection,$query);//takes connection and executes query
    if($row = mysqli_fetch_assoc($login_query)){
        $db_email = $row['email'];
        $db_password = $row['password'];
        $db_branch = $row['branch'];
        $db_ID = $row['id'];
        if($email == $db_email && $type == 'lab_assistant'){
            session_start();
            $_SESSION['branch'] = $db_branch;
            $_SESSION['id'] = $db_ID;
            header("Location: lab_assistant/dashboard.php");
        }
        else if($email==$db_email && $type == 'HOD'){
            session_start();
            $_SESSION['branch'] = $db_branch;
            $_SESSION['hodID'] = $db_ID;
            header("Location: HOD/dashboard.php");
            
        }
        else if($email==$db_email && $type == 'teachers'){
        header("Location: Staff/dashboard.php");
            session_start();
            $_SESSION['branch'] = $db_branch;
            $_SESSION['teacherID'] = $db_ID;
            
        }
        else if($email==$db_email && $type =='principal'){
            header("Location: admin/dashboard.php");
            session_start();
        }
        }
    }
?>
    <html>
        <!--INCLUDING HEADER FILES-->
    <?php
include_once("INCLUDES/header.php");
?>

    <body id="index_id">
        <?php
    include_once("INCLUDES/navigation.php");
    ?>
        <!--LOGIN SELECTION CODE-->
            <section id="login">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-wrap">
                                <h1>Log in with your email account</h1>
                                <form role="form" action="" method="post" id="login-form" autocomplete="off">
                                    <div class="form-group">
                                        <select class="form-control" name="type" required ''>
                            <option disabled selected name="type" value="">--SELECT TYPE--</option>
                            <option name = "type" value="principal">Principal</option>
                            <option name="type" value="HOD">HOD</option>
                            <option name="type" value="teachers">Staff</option>
                            <option name="type" value="lab_assistant">Lab Assistant</option>
                            </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="sr-only">Email</label>
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label for="key" class="sr-only">Password</label>
                                        <input type="password" name="password" id="key" class="form-control" placeholder="Password">
                                    </div>
                                    <input type="submit" name="login" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Log in">
                                </form>
                            </div>
                        </div>
                        <!-- /.col-xs-12 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </section>



            <!--BTS SCRIPT--->
            <script type="text/javascript" src="js/bootstrap.min.js"></script>


    </body>
