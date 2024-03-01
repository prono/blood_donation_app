<?php
$uscrid=$_POST['uscrid'];
$name=$_POST['name'];
$password=$_POST['password'];
$address=$_POST['address'];
$blood_group=$_POST['blood_group'];
$contact=$_POST['contact'];
//$uscrid=1;
//$name=pabitra;
//$password=123;
//$address=katwa;

$contact=7699890462;
$con=mysqli_connect("localhost","root","","blood_donatoion");
$sql="UPDATE uscr SET name='$name',password='$password',address='$address',blood_group='$blood_group',contact='$contact' WHERE uscrid='$uscrid'";
$res=mysqli_query($con,$sql);
if($res==1)
{
    echo " data is  update ";

}else{
    echo "  data is not update";
}


?>