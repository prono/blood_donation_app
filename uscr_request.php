 
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
        <?php
 
 session_start();
  include("MyMethods.php");
 
 //echo "User id: ".$_SESSION["uscrid"];
 
  ?>
  
 
  <!DOCTYPE html>
  <html lang="en">
  <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
  </head>
  <body>
 
 
 
  <table class="table">
                 <thead>
                     <tr>
                         <th>DonorId</th>
                         <th>name</th>
                         <th>blood_group</th>
                         <th>requertdata</th>
                         <th>units</th>
                     </tr>
 </thead>
                 <tbody>
                 <?php
             $res=getALLDonorByUscrId($_SESSION["uscrid"]);
             if(mysqli_num_rows($res)>=0)
             {
                 while($data=mysqli_fetch_assoc($res))
                 {
                     echo'
                         <tr>
                         <th>'.$data["donorid"].'</th>
                         <th>'.$data["blood_group"].'</th>
                         <th>'.$data["requertdata"].'</th>
                         <th>'.$data["units"].'</th>
                         </tr>
                      ';
                   
                 }
             
             }
         ?>
         <?php
 
 
 
          header('locaton:header.php');
          ?>
         </bodyt>
      </table>
 
        
         
 
 
 
     
  </body>
  </html>
        
    

    
    
    <!--*************** About Us Starts Here ***************-->
   <section id="about" class="contianer-fluid about-us">
       <div class="container">
           <div class="row session-title">
               <h2>Heading</h2>
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


 