<?php
$uscrid=$_POST['uscrid'];
$sql="select *from request WHERE uscrid='$uscrid'";
$con=mysqli_connect("localhost","root","","blood_donatoion");
$res=mysqli_query($con,$sql);
$result=array();
if($row=mysqli_fetch_assoc($res)){
    $requertid=$row["requertid"];
    $uscrid=$row["uscrid"];
    $donorid=$row["donorid"];
    $requertdata=$row["requertdata"];
    $blood_group=$row["blood_group"];
    $units=$row["units"];
    
    array_push($result,array(
        "requertid"=>$requertid,
        "uscrid"=>$uscrid,
        "donorid"=>$donorid,
        "requertdata"=>$requertdata,
        "blood_group"=>$blood_group,
         "units"=>$units,
       

    ));

}
echo json_encode($result);


?>