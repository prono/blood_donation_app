<?php
    session_start();

$uscrid=$_POST['uscrid'];
$password=$_POST['password'];

$con=mysqli_connect("localhost","root","","blood_donatoion");
$sql="select *from uscr WHERE uscrid='$uscrid' AND password='$password'";
$res=mysqli_query($con,$sql);
$result=array();
if($row=mysqli_fetch_assoc($res))
{

    $_SESSION['uscrid']  = $uscrid;
    $_SESSION['status']  = 'loggedin';

   $uscrid=$row["uscrid"];
   $name=$row["name"];
   $password=$row["password"];
   $address=$row["address"];
   $blood_group=$row["blood_group"];
   $contact=$row["contact"];
   
   array_push($result,array(
       "uscrid"=>$uscrid,
       "name"=>$name,
       "password"=>$password,
       "address"=>$address,
       "blood_group"=>$blood_group,
       "contact"=>$contact,
       

   ));
   echo json_encode($result);
}
else{
    echo "no data";
}

?>