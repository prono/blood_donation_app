<?php
$con=mysqli_connect("localhost","root","","blood_donatoion");
$sql="select * from request";
$res=mysqli_query($con,$sql);
$rec=mysqli_num_rows($res);

if($rec==0){
    echo "data not found ";
}
else{
    $result=array();
    while($row=mysqli_fetch_assoc($res))
    {
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
    };
    echo JSON_encode($result);
    
}
?>