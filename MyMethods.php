<?php
     function getUscrData($uscrid)
     {
        $sql="select *from uscr WHERE uscrid='$uscrid'";
        $con=mysqli_connect("localhost","root","","blood_donatoion");
        $res=mysqli_query($con,$sql);
        
        return $res;
     }
    
     function getDonorData($donorid)
     {
        $sql="select *from donor WHERE donorid='$donorid'";
        $con=mysqli_connect("localhost","root","","blood_donatoion");
        $res=mysqli_query($con,$sql);
        
        return $res;
      }
     function getALLDonorByUscrId($uscrid)
     {
      $sql="select * from request where uscrid='$uscrid'";
      $con=mysqli_connect("localhost","root","","blood_donatoion");
      $res=mysqli_query($con,$sql);
      return $res;

     }
     function getALLUscrByDonorId($donorid)
     {
      $sql="select * from request where donorid='$donorid'";
      $con=mysqli_connect("localhost","root","","blood_donatoion");
      $res=mysqli_query($con,$sql);
      return $res;

     }
     function getALLStates()
     {
      $sql="select * from  state_list";
      $con=mysqli_connect("localhost","root","","blood_donatoion");
      $res=mysqli_query($con,$sql);
      return $res;

     }
     function getALLcities ()
     {
      $sql="select * from  cities";
      $con=mysqli_connect("localhost","root","","blood_donatoion");
      $res=mysqli_query($con,$sql);
      return $res;
     }
?>