<?php
//    session_start();
   ob_start();
//    if(isset($_SESSION["status"]))
//    {
//     echo 'status: '.$_SESSION['status']." and ".$_SESSION['uscrid'];
//    }
    
?>

<header class="continer-fluid ">
            <div class="header-top">
                <div class="container">
                    <div class="row col-det">
                        <div class="col-lg-6 d-none d-lg-block">
                            <ul class="ulleft">
                                <li>
                                    <i class="far fa-envelope"></i>
                                    pranabmandal@gmali.com
                                    <span>|</span></li>
                                <li>
                                    <i class="far fa-clock"></i>
                                    Service Time : 12:AM</li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <ul class="ulright">

                                <?php
                                    if(!isset($_SESSION["status"]))
                                    {
                                        echo '
                                            <li>
                                                <i class="fas fa-user"></i>
                                                <a style="color:white" href="userlogin.php">User Login </a>
                                            </li>
            
                                            <li>
                                                <i class="fas fa-user"></i>
                                                <a style="color:white" href="donorloing.php">Donor Login</a> 
                                            </li>
                                        ';
                                    }
                                    else{
                                        echo '
                                            <li>
                                                <i class="fas fa-user"></i>
                                                <a style="color:white" href="logout.php">Logout</a>
                                            </li>
                                        ';
                                    }
                                ?>

                                
                                
                                
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div id="menu-jk" class="header-bottom">
                <div class="container">
                    <div class="row nav-row">
                        <div class="col-md-3 logo">
                            <img src="assets/images/logo.jpg" alt="">
                        </div>
                        <div class="col-md-9 nav-col">
                            <nav class="navbar navbar-expand-lg navbar-light">

                                <button
                                    class="navbar-toggler"
                                    type="button"
                                    data-toggle="collapse"
                                    data-target="#navbarNav"
                                    aria-controls="navbarNav"
                                    aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="index.php">Home
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="searchdonorid.php">Search</a>
                                        </li>

                                             <?php
                                                    if(isset($_SESSION["status"]))
                                                    {

                                                        if(!isset($_SESSION["donorid"]))
                                                        {                                               

                                                            echo '
                                                                <li class="nav-item">
                                                                    <a class="nav-link" href=" userprofile.php">UserProfile</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link" href="uscr_request.php">UserRequest</a>
                                                                </li>
                                                            ';
                                                        }
                                                        else{
                                                            echo '
                                                                <li class="nav-item">
                                                                    <a class="nav-link" href="donorprofile.php">DonorProfile</a>
                                            
                                                                </li>
                                                                <li class="nav-item">
                                                                <a class="nav-link" href="donor_request.php">DonorRequest</a>
                                                             </li>
                                                            ';
                                                        }
                                                    }
                                                    
                                                ?>
                                       
                                       
                                         <li class="nav-item">
                                            <a class="nav-link" href="#process">Contact US</a>
                                        </li>
                                       
                                          
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>