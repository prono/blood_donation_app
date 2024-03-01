<?php
$donorid=$_POST['donorid'];
$name=$_POST['name'];
$blood_group=$_POST['blood_group'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$password=$_POST['password'];

$con=mysqli_connect("localhost","root","","blood_donatoion");

$sql="INSERT INTO donor(donorid,name,blood_group,address,contact,password) values('$donorid','$name','$blood_group','$address','$contact','$password')";
$res=mysqli_query($con,$sql);
if($res==1){
    echo "data insert ";

}else{
    echo " data not insert ";
    
}

?>