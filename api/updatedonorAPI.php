<?php
   $donorid=$_POST['donorid'];
   $name=$_POST['name'];
   $blood_group=$_POST['blood_group'];
   $address=$_POST['address'];
   $contact=$_POST['contact'];
   $password=$_POST['password'];


    $con=mysqli_connect("localhost","root","","blood_donatoion");
    $sql="UPDATE donor set name='$name',blood_group='$blood_group',address='$address',contact='$contact',password='$password' WHERE donorid='$donorid'";
    $res=mysqli_query($con,$sql);
    if($res==1){
        echo
            "data is update"; 
    }
    else{
        echo "data not update";
        
    }



?>