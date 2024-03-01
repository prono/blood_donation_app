<?php

include('MyMethods.php');
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div> select Your State </div>
    <p>
        <select name="state">
        <?php
            $res = getALLStates();
            if(mysqli_num_rows($res)>0)
            {
                while ($data=mysqli_fetch_assoc($res))
                {
                    echo'
                        <option value="katwa">'.$data['state'].'</option>
                    ';
                }
            }

            ?>
           
        </select>
    </p>
    <div> select Your cities </div>
    <p>
        <select name="cities">
        <?php
            $res = getALLcities();
            if(mysqli_num_rows($res)>0)
            {
                while ($data=mysqli_fetch_assoc($res))
                {
                    echo'
                        <option value="katwa">'.$data['city '].'</option>
                    ';
                }
            }

            ?>
           
        </select>
    </p>

    
</body>
</html>