<?php
//$donorid=$_POST['donorid'];
$donorid=2;
$con=mysqli_connect("localhost","root","","blood_donatoion");
$sql="DELETE from donor WHERE donorid='$donorid'";
$res=mysqli_query($con,$sql);
if($res==1){
    echo"delete";
    
}else{
    echo "not delete";

}

?>