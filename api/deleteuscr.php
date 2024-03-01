<?php
$uscrid=$_POST['uscrid'];
$con=mysqli_connect("localhost","root","","blood_donatoion");
$sql="DELETE FROM uscr WHERE uscrid='$uscrid'";
$res=mysqli_query($con,$sql);
if(res==1){
    echo " delete";

}else{
     echo " data is delete";
     
}

?>