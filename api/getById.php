 <?php
        $uscrid=$_POST['uscrid'];
        $sql="select *from uscr WHERE uscrid='$uscrid'";
        $con=mysqli_connect("localhost","root","","blood_donatoion");
        $res=mysqli_query($con,$sql);
        $result=array();
        if($row=mysqli_fetch_assoc($res)){
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

        }
        echo json_encode($result);


    ?>