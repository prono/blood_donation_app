<?php
$blood_group=$_POST['blood_group'];
$address=$_POST["address"];


$con=mysqli_connect("localhost","root","","blood_donatoion");
$sql="select*from donor WHERE blood_group='$blood_group'AND address='$address'";
$res=mysqli_query($con,$sql);
$record=mysqli_num_rows($res);
if($record==0){
    echo "data not found";

}else{
    $result =array();
    while($row=mysqli_fetch_assoc($res))
    {     
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
}

?>