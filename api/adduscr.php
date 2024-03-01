<?php
$uscrid=$_POST['uscrid'];
$name=$_POST['name'];
$password=$_POST['password'];
$address=$_POST['address'];
$blood_group=$_POST['blood_group'];
$contact=$_POST['contact'];

$con=mysqli_connect("localhost","root","","blood_donatoion");

$sql="INSERT INTO uscr(uscrid,name,password,address,blood_group,contact)value('$uscrid','$name','$password','$address','$blood_group','$contact')";
$res=mysqli_query($con,$sql);
if($res==1)
{
    echo"data inserted";

}else{
    echo "  data not inserted";
    
}



    





?>