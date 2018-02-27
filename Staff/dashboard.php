<!DOCTYPE html>
<html lang="en">
    <?php
    session_start();
    include_once("..//INCLUDES/db.php");
    if(!isset($_SESSION['branch'])){
        die("<p style='color:black'>You have not logged in, please log in <a href='../index.php'>here</a?</p>");
    }else{
?>
<head>

    <title>Welcome To Dashboard</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Staff Login</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li><a href="..//index.php"><i class="fa fa-user"></i> Home Site <b class="caret"></b></a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>Staff<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="..//logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="#"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="dashboard.php?source=view-meetings"><i class="fa fa-fw fa-bar-chart-o"></i>View Meetings</a>
                    </li>
                    <li>
                        <a href="dashboard.php?source=view-duties"><i class="fa fa-briefcase"></i>View Duties</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#table"><i class="fa fa-fw fa-arrows-v"></i>Time Table<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="table" class="collapse">
                            <li>
                                <a href="dashboard.php?source=view_timetable1">1st Year</a>
                            </li>
                            <li>
                                <a href="dashboard.php?source=view_timetable2">2nd Year</a>
                            </li>
                            <li><a href="dashboard.php?source=view_timetable3">3rd Year</a></li>
                        </ul>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome to Dashboard
                            <small></small>
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->
            
            <?php
                $source="";
            if(isset($_GET['source'])){
                $source = $_GET['source'];
            }
            switch($source){
                case 'view-meetings':
                    include_once("includes/view_meetings.php");
                    break;
                    
                    case 'view-timetable':
                    include_once("includes/view_timetable.php");
                    break;
                    
                    case 'view-duties':
                    include_once("includes/view_duties.php");
                    break;
                    
                      case 'view_timetable1':
                    include_once("includes/view_timetable1.php");
                    break;
                    
                    case 'view_timetable2':
                    include_once("includes/view_timetable2.php");
                    break;
                    
                    case 'view_timetable3':
                    include_once("includes/view_timetable3.php");
                    break;
                    
                    
                    case'update':
                    include_once("includes/update_timetable.php");
                    break;
                
                    
                    
            }
            ?>


        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    
<?php
//end of else
 }
    ?>

</body>
</html>