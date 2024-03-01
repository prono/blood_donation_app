 <?php
    $donorid = $_GET['donorid'];
    

    session_start();

    if(!isset($_SESSION['uscrid']))
    {
        header('index.php');
    
    }
    include('MyMethods.php');
    
    $uscrid= $_SESSION['uscrid'];
   // $res = getALLUscrByDonorId($uscrid);
    
    //$data = mysqli_fetch_assoc($res);
    
    



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
</head>

<body>
    <?php
        include('header.php');
    ?>
    <style>
        .form_pranab{
          width: 30%;
         margin-left:35%;
         box-shadow: 5px 10px 10px grey;
         padding: 10px;
        }

        </style>
        
        
    <!-- ################# Slider Starts Here#######################--->

    
    
    <!--*************** About Us Starts Here ***************-->
   <section id="about" class="contianer-fluid about-us">
       <div class="container">
           <div class="row session-title">
               <h2>Request</h2>
            </div>
       </div>
   </section>

    <!--*************** About Us Starts Here ***************-->
    <section id="about" class="contianer-fluid about-us">
       <div class="container">
           <div class="row session-title">
               <h2>Donor Registration</h2>
            </div>

            <div class="form-card login">
                <div class="form-title">
                    
                </div>
                <form onsubmit="event.preventDefault();bloodrequest()"class="form_pranab">
                    <div class="form-body">
                        <input type="text" id="uscrid" placeholder="Enter uscrid" class="form-control mybox" value="<?php echo $uscrid;?>">
                        <input type="text" id="donorid" placeholder="enter donorid" class="form-control mybox" value="<?php echo $donorid; ?>">
                        <input type="date" id="requertdata	"placeholder="requertdata" class="form-control  mybox">
                        <input type="text" id="blood_group"placeholder="blood_group"class="form-control mybox">
                        
                          <input type="text" id="units"placeholder="units" class="form-control mybox">
                        
                        
                        <button class="btn btn-sm btn-primary w-100">Request</button>
                        <h4 style="text-align: center">blood group by anuther?<a href="userlogin.php"> click</a></h4>
                        <p id ="result"></p>
                    </div>
                    
             </form>
            </div>

       </div>
      
      
       <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
      <script>
        function bloodrequest(){
             var uscrid=document.getElementById("uscrid").value;
              var donorid=document.getElementById("donorid").value;
              var requertdata=document.getElementById("requertdata	").value;
              var blood_group=document.getElementById("blood_group").value;
              var units=document.getElementById("units").value;
              //alert(uscrid+" "+donorid+""+requertdata+""+blood_group)


             $.ajax({
                        url:"./api/addrequest.php",
                        method:"post",
                        data:{"uscrid":uscrid,"donorid":donorid,"requertdata":requertdata	,"blood_group":blood_group,"units":units},
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
