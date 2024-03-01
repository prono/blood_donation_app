<?php
$con=mysqli_connect("localhost","root","","blood_donatoion");
$sql="select*from donor";
$res=mysqli_query($con,$sql);

?>