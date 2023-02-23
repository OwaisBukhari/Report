<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="coding.css">
</head>

<body>
    <div style="background-color:rgb(172, 168, 164); padding: 10px; margin:0 auto; margin-top:30px; width: 350px; height:170px; border-radius:10px">
    <h1>Total Sum For a User</h1>
    <form action="" method="POST">
        <label for="userhosbuild">Enter userhosbuild value : </label>
        <input type="text" name="user" id="user">
        <br><br>
        <button type="submit" value="submit" name="submit" style="margin-left:35%; margin-top: 15px">Send Data</button>
        <br>
    </form>
    <br>
    </div>
</body>
</html>

<?php

$conn = new mysqli("localhost", "root", "", "erd-of-seismic");

if(isset($_POST['submit']))
{
    $value=$_POST['user'];

    $result1= mysqli_query($conn, "SELECT `sum`  FROM `buidlinghazard` WHERE userhosbuild='$value'");
    $toresult1 = $result1->fetch_array()[0] ?? '';

    $result2 = mysqli_query($conn, "SELECT `sum`  FROM `buidlingarchitectural` WHERE userhosbuild='$value'");
    $toresult2 = $result2->fetch_array()[0] ?? '';

    $result3 = mysqli_query($conn, "SELECT `sum`  FROM `intrf` WHERE userhosbuild='$value'");
    $toresult3 = $result3->fetch_array()[0] ?? '';

    $result4 = mysqli_query($conn, "SELECT `sum`  FROM `omrf` WHERE userhosbuild='$value'");
    $toresult4 = $result4->fetch_array()[0] ?? '';

    $result5 = mysqli_query($conn, "SELECT `sum`  FROM `rm` WHERE userhosbuild='$value'");
    $toresult5 = $result5->fetch_array()[0] ?? '';

    $result6 = mysqli_query($conn, "SELECT `sum`  FROM `smrf` WHERE userhosbuild='$value'");
    $toresult6 = $result6->fetch_array()[0] ?? '';

    $result7 = mysqli_query($conn, "SELECT `sum`  FROM `urm` WHERE userhosbuild='$value'");
    $toresult7 = $result7->fetch_array()[0] ?? '';

    $result8 = mysqli_query($conn, "SELECT `sum`  FROM `haz-ident` WHERE userhosp='$value'");
    $toresult8 = $result8->fetch_array()[0] ?? '';


    
    $sum = (int)$toresult1 + (int)$toresult2 + (int)$toresult3 + (int)$toresult4 + (int)$toresult5 + (int)$toresult6 + (int)$toresult7 + (int)$toresult8;
    
    if($toresult1>=0 || $toresult2>=0 || $toresult3>=0 || $toresult4>=0 || $toresult5>=0 || $toresult6>=0 || $toresult7>=0 || $toresult8>=0)
    { 
        ?>
        <div style="margin: 0 auto; width:200px; height:40px; margin-top:50px; background-color:rgb(219, 215, 210); padding:20px;border-radius:10px">
        <?php
        echo '<strong>For user  :  </strong>'.$value;
        echo "<br>";
        echo '<strong>Total Sum:  </strong>'.$sum;
        ?>

        </div>
        <?php
    }
    else{
        ?>
        <div style="margin: 0 auto; width:200px; height:40px;  margin-top:50px; background-color:rgb(219, 215, 210); padding:20px; border-radius:10px">
        <?php
        echo '<strong>For user :  </strong>'.$value;
        echo "<br>";
        echo "No record found";
        ?>
        </div>
        <?php
    }
    
}

?>
