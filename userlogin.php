<?php
session_start();




?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Web App Landing Page Website Tempalte | Smarteyeapps.com</title>
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="assets/plugins/grid-gallery/css/grid-gallery.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />

    <style>
        .login{
            width: 30%;
            margin-left:35%;
            box-shadow: 5px 10px 10px grey;
            padding: 10px;
        }

        .mybox{
            border: 2px solid black;

        }
       
        
            
        
    </style>
</head>

<body>
    <?php
        include('header.php');
    ?>
        
        
    <!-- ################# Slider Starts Here#######################--->

    
    
    <!--*************** About Us Starts Here ***************-->
   <section id="about" class="contianer-fluid about-us">
       <div class="container">
           <div class="row session-title">
               <h2>User Login</h2>
            </div>

            
                    <form onsubmit="event.preventDefault(); userlogin()" class="form-card login">
                        <div class="form-title">
                            
                        </div>
                        <div class="form-body">
                            <input type="text"id="uscrid" placeholder="Enter uscrid" class="form-control mybox">
                            <input type="password"id="password" placeholder="password" class="form-control  mybox">
                            
                            
                            <button class="btn btn-sm btn-primary w-100">Login</button>
                            <h5 style="text-align: center">New User Registration?<a href="user_registration.php"> click</a></h5>
                           <p id ="result">
            
                        </div>
                    </form>

                    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
                    
                    <script>
                         function userlogin()
                         {
                            
                            var uscrid=document.getElementById("uscrid").value;
                            var password=document.getElementById("password").value;

                            //alert(uscrid+" "+password);

                            $.ajax({
                                url:"./api/loginuscr.php",
                                method:"post",
                                data:{"uscrid":uscrid,"password":password},
                                success:function(response){
                                   
                                    if(response == "no data")
                                    {
                                        alert("Sorry, Userid or password is not valid");
                                    }
                                    else{
                                        window.location.href="index.php";
                                    }
                                    
                                }

                                

                            })

                         }
                        </script>
               
       </div>
   </section>

   
    <!--*************** Footer  Starts Here *************** -->
    
    <?php
        include('footer.php');
    ?>
    
</body>

    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/plugins/grid-gallery/js/grid-gallery.min.js"></script>
    <script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
    <script src="assets/js/script.js"></script>
</html>
