<?php

$uscrid=$_POST['uscrid'];
$donorid=$_POST['donorid'];
$requertdata=$_POST['requertdata'];
$blood_group=$_POST['blood_group'];
$units=$_POST['units'];

$con=mysqli_connect("localhost","root","","blood_donatoion");
$sql="INSERT INTO  request(uscrid,donorid,requertdata,blood_group,units) value('$uscrid','$donorid','$requertdata','$blood_group','$units')";
$res=mysqli_query($con,$sql);
if($res==1)
{
    echo " data inserted";

}else{
    echo "data not inserted";

}
?>