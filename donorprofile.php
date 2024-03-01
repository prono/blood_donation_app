
<?php
        session_start();

        if(!isset($_SESSION['donorid']))
        {
            header('location:login.php');

        }


        include('MyMethods.php');

        $donorid= $_SESSION['donorid'];
        $res = getDonorData($donorid);

        $data = mysqli_fetch_assoc($res);



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
           margin-
            
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
               <h2>Donor Profile</h2>
            </div>

            <div class="form-card login">
                <div class="form-title">
                    
                </div>
                <form onsubmit="event.preventDefault();updatedonor()">
                <div class="form-body">
                    <input type="text" id="donorid" placeholder="donorid" class="form-control mybox" value="<?php echo $data["donorid"]?>">
                    <input type="text"id="name" placeholder="name" class="form-control  mybox" value="<?php echo $data["name"]?>">
                    <input type="text"id="password" placeholder="password" class="form-control  mybox" value="<?php echo $data["password"]?>">
                    <input type="text" id="address" placeholder="address" class="form-control  mybox" value="<?php echo $data["address"]?>">
                    <input type="text"id="blood_group" placeholder="blood_group" class="form-control  mybox" value="<?php echo $data["blood_group"]?>">
                    <input type="text" id="contact" placeholder="contact" class="form-control  mybox" value="<?php echo $data["contact"]?>">
                    
                    <p id ="result"></p>
                    <button class="btn btn-sm btn-primary w-100"> updatedonor</button>
                </div>
           </form>
            </div>

       </div>
       <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
       <script>
             function updatedonor(){
                
              var donorid=document.getElementById("donorid").value;
              var name=document.getElementById("name").value;
              var password=document.getElementById("password").value;
              var address=document.getElementById("address").value;
              var blood_group=document.getElementById("blood_group").value;
              var contact=document.getElementById("contact").value;
             
              
              $.ajax({
                url:"./api/updatedonorAPI.php",
                method:"post",
                data:{"donorid":donorid,"name":name,"password":password,"blood_group":blood_group,"address":address,"contact":contact,},
                success:function(response){
                    document.getElementById("result").innerHTML=response;

                }
              })

            }
        </script>
   

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
