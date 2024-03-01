<?php
$donorid=$_POST['donorid'];
$sql="select *from donor WHERE donorid='$donorid'";
$con=mysqli_connect("localhost","root","","blood_donatoion");
$res=mysqli_query($con,$sql);
$result=array();
if($row=mysqli_fetch_assoc($res)){
    $donorid=$row["donorid"];
    $name=$row["name"];
    $blood_group=$row["blood_group"];
    $address=$row["address"];
    $contact=$row["contact"];
    $password=$row["password"];
    array_push($result,array(
        "donorid"=>$donorid,
        "name"=>$name,
        "blood_group"=>$blood_group,
        "address"=>$address,
        "contact"=>$contact,
        "password"=>$password,

    ));

}
echo json_encode($result);




?>