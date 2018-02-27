<?php
    include_once("..//INCLUDES/db.php");
    session_start();
    if(!isset($_SESSION['branch'])){
        die("<p style='color:black'>You have not logged in, please log in <a href='../index.php'>here</a?</p>");
    }else{
?>
<!DOCTYPE html>
<html lang="en">

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
                <a class="navbar-brand" href="#">Lab Assistant Login</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li><a href="..//index.php"><i class="fa fa-user"></i> Home Site <b class="caret"></b></a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>Lab Assistant<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="../logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
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
                        <a href="dashboard.php?source=add-products"><i class="fa fa-fw fa-bar-chart-o"></i>Add Product</a>
                    </li>
                    <li>
                        <a href="dashboard.php?source=view-products"><i class="fa fa-fw fa-table"></i>View All Products</a>
                    </li>
                    
                    <li>
                        <a href="dashboard.php?source=view_lab_duties"><i class="fa fa-briefcase"></i> View Duties</a>
                    </li>
					
					<li>
                        <a href="dashboard.php?source=view_all_enquiries"><i class="fa fa-question-circle"></i> View Enquiries</a>
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
                case 'add-products':
                    include_once("add-product.php");
                    break;
                    
                    case 'view-products':
                    include_once("view-all-products.php");
                    break;
                    
                case 'view_lab_duties':
                    include_once("view_lab_duties.php");
                    break;
					
					case 'view_all_enquiries':
                    include_once("view_all_enquiries.php");
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