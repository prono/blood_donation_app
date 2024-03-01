<?php
$con=mysqli_connect("localhost","root","","blood_donatoion");
$sql="select * from uscr";
$res=mysqli_query($con,$sql);
$res=mysqli_num_rows($res);
if(rec==0){
    echo "data not found ";

}
else{
    $result=array();
    while($row=mysqli_fetch_assoc($res))
    {
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
    };
    echo JSON_encode($result);
    
}
?>