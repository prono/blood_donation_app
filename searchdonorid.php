<?php
session_start();

if(!isset($_SESSION['uscrid']))
{
    header('logout.php');

}
include('MyMethods.php');





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
        .search{
            box-shadow:5px 10px 10px grey;
            margin-left:10%;
            padding: 10px;
        }
        .jsi{
            margin-left:40%;
        }
    </style>
</head>

<body>
    <?php
        include('header.php');
    ?>
        
        
    <!-- ################# Slider Starts Here#######################--->
    
    
    
    <!--*************** About Us Starts Here ***************-->
    <section id="process" class="donation-care">
         <div class="container">
           <dv class="row session-title">
               <h2>Donation Process</h2>
               <form onsubmit="event.preventDefault();search()"class="row search">
                            <div class="col-auto">
                            
                                <input type="text" readonly class="form-control-plaintext" id="scarch" value="scarch">
                            </div>
                            <div class="col-auto">
                            
                                <input type="enter blood-group" id="blood_group" class="form-control"  placeholder="enter blood_group">
                                
                            </div>
                            <div class="col-auto">
                            <input type="enter donor"id="address" class="form-control"placeholder="address">
                            </div>
                            <div class="col-auto">
                                <button type="search"class="btn btn-primary mb-3">search</button>
                            </div>
                </form>
                <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
       <script>

        function search(){
                
                  
            var  blood_group=document.getElementById("blood_group").value;
            var address=document.getElementById("address").value;
        
            $.ajax({
                        url:"./api/searchdonorBybloodgroupAPI.php",
                        method:"post",
                        data:{"blood_group":blood_group,"address":address},

                        success:function(response){

                            var temp = "";
                            if(response != "data not found")
                            {
                                var alldonors = JSON.parse(response);
                                
                                console.log(alldonors.length);
                            
                            
                                for(i=0;i<alldonors.length;i++)
                                {
                                temp+='<div class="col-md-3 col-sm-6 vd">';
                                    temp+='<div class="bkjiu">';
                                    temp+='<img src="assets/images/gallery/g1.jpg" alt="">';
                                    temp+='<div>'+alldonors[i].name+'</div>';
                                    temp+='<div>'+alldonors[i].blood_group+'</div>';
                                    temp+='<div>'+alldonors[i].address+'</div>';
                                    temp+='<a href="bloodgroup_request.php?donorid='+alldonors[i].donorid+'" class="btn btn-sm btn-danger">Request<i class="fas fa-arrow-right"></i></a>';

                                    temp+='</div>';
                                    temp+='</div>';
                                
                                }
                            }
                            else{
                                temp+="<h3 class='jsi'>blood group is not available</h3>";
                            }
                            document.getElementById("result").innerHTML=temp;
                            
                        }
                    })
                }

        </script>
         </div>
            <div class="row" id="result">
                 
    
            </div>
            
             
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
