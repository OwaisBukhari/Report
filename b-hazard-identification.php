
<?php
$conn = new mysqli("localhost", "root", "", "erd-of-seismic");

$result = mysqli_query($conn, "SELECT * FROM `buidlinghazard`");

$num= mysqli_num_rows($result);
// echo "total rows:$num";
// echo"<br> <br>";



if($num>0)
{

$b_hazident=array();
while($row = mysqli_fetch_assoc($result))
{ 
    
    echo "\n";
    // loop through each column
    foreach($row as $key => $value){
            if($key=="possibilityofurbanflooding"){
                if(strtolower($value)=="yes"){

                 $b_hazident["possibilityofurbanflooding"]=8;
 
                }else{
                  $b_hazident["possibilityofurbanflooding"]=0;
                }
             }
            

             if($key=="possibilityofoffirehaz-firesystem"){
                if(strtolower($value)=="yes")
                {
                    $b_hazident["possibilityofoffirehaz-firesystem"]=0;
                }
                else{

                  $b_hazident["possibilityofoffirehaz-firesystem"]=8;
                }
             }

             if($key=="possibilityofoffirehaz-condition")
             {
                if(strtolower($value=='poor'))
                {
                    $b_hazident["possibilityofoffirehaz-condition"]=8;
                }
                elseif(strtolower($value=='average'))
                {
                    $b_hazident["possibilityofoffirehaz-condition"]=4;
                }
                elseif(strtolower($value=='good'))
                {
                    $b_hazident["possibilityofoffirehaz-condition"]=0;
                }
             }


             if($key=="watersystem-present"){

                if(strtolower($value)=="yes")
                {
                    $b_hazident["watersystem-present"]=0;
                }
                
                else{
                  $b_hazident["watersystem-present"]=8;
                }
             }


             if($key=="watersystem-condition")
             {
                    if(strtolower($value=='poor'))
                    {
                        $b_hazident["watersystem-condition"]=8;
                    }
                    elseif(strtolower($value=='average'))
                    {
                        $b_hazident["watersystem-condition"]=4;
                    }
                    elseif(strtolower($value=='good'))
                    {
                        $b_hazident["watersystem-condition"]=0;
                    }
             }
             
             if($key=="coolingplant-present"){

                if(strtolower($value)=="yes")
                {
                    $b_hazident["coolingplant-present"]=0;
                }
                
                else{
                  $b_hazident["coolingplant-present"]=8;
                }
             }


             if($key=="coolingplant-condition"){
                if(strtolower($value=='poor'))
                {
                    $b_hazident["coolingplant-condition"]=8;
                }
                elseif(strtolower($value=='average'))
                {
                    $b_hazident["coolingplant-condition"]=4;
                }
                elseif(strtolower($value=='good'))
                {
                    $b_hazident["coolingplant-condition"]=0;
                }
            }

            if($key=="powersupplysystem-present"){
                if(strtolower($value)=="yes")
                {
                    $b_hazident["powersupplysystem-present"]=0;
                }
                else{
                  $b_hazident["powersupplysystem-present"]=16;
                }
             }

             if($key=="powersupplysystem-condition"){
                if(strtolower($value=='poor'))
                {
                    $b_hazident["powersupplysystem-condition"]=16;
                }
                elseif(strtolower($value=='average'))
                {
                    $b_hazident["powersupplysystem-condition"]=8;
                }
                elseif(strtolower($value=='good'))
                {
                    $b_hazident["powersupplysystem-condition"]=0;
                }
            }

            if($key=="fuelstorage-present"){
                if(strtolower($value)=="yes")
                {
                    $b_hazident["fuelstorage-present"]=0;
                }
                else{
                  $b_hazident["fuelstorage-present"]=8;
                }
             }

             if($key=="fuelstorage-condition"){
                if(strtolower($value=='poor'))
                {
                    $b_hazident["fuelstorage-condition"]=8;
                }
                elseif(strtolower($value=='average'))
                {
                    $b_hazident["fuelstorage-condition"]=4;
                }
                elseif(strtolower($value=='good'))
                {
                    $b_hazident["fuelstorage-condition"]=0;
                }
            }

            if($key=="oxygenplant-present"){
                if(strtolower($value)=="yes")
                {
                    $b_hazident["oxygenplant-present"]=0;
                }
                else{
                  $b_hazident["oxygenplant-present"]=16;
                }
             }

             if($key=="oxygenplant-condition"){
                if(strtolower($value=='poor'))
                {
                    $b_hazident["oxygenplant-condition"]=16;
                }
                elseif(strtolower($value=='average'))
                {
                    $b_hazident["oxygenplant-condition"]=8;
                }
                elseif(strtolower($value=='good'))
                {
                    $b_hazident["oxygenplant-condition"]=0;
                }
            }

            if($key=="solidwastestorage-present"){
                if(strtolower($value)=="yes")
                {
                    $b_hazident["solidwastestorage-present"]=0;
                }
                else{
                  $b_hazident["solidwastestorage-present"]=4;
                }
             }

             if($key=="solidwastestorage-condition"){
                if(strtolower($value=='poor'))
                {
                    $b_hazident["solidwastestorage-condition"]=4;
                }
                elseif(strtolower($value=='average'))
                {
                    $b_hazident["solidwastestorage-condition"]=2;
                }
                elseif(strtolower($value=='good'))
                {
                    $b_hazident["solidwastestorage-condition"]=0;
                }
            }

            if($key=="hazardsmaterilastorage-present"){
                if(strtolower($value)=="yes")
                {
                    $b_hazident["hazardsmaterilastorage-present"]=0;
                }
                else{
                  $b_hazident["hazardsmaterilastorage-present"]=4;
                }
             }

             if($key=="hazardsmaterilastorage-condition"){
                if(strtolower($value=='poor'))
                {
                    $b_hazident["hazardsmaterilastorage-condition"]=4;
                }
                elseif(strtolower($value=='average'))
                {
                    $b_hazident["hazardsmaterilastorage-condition"]=2;
                }
                elseif(strtolower($value=='good'))
                {
                    $b_hazident["hazardsmaterilastorage-condition"]=0;
                }
            }

            if($key=="wheelchairramp-present"){
                if(strtolower($value)=="yes")
                {
                    $b_hazident["wheelchairramp-present"]=0;
                }
                else{
                  $b_hazident["wheelchairramp-present"]=8;
                }
             }

             if($key=="wheelchairramp-condition"){
                if(strtolower($value=='poor'))
                {
                    $b_hazident["wheelchairramp-condition"]=8;
                }
                elseif(strtolower($value=='average'))
                {
                    $b_hazident["wheelchairramp-condition"]=4;
                }
                elseif(strtolower($value=='good'))
                {
                    $b_hazident["wheelchairramp-condition"]=0;
                }
            }

            if($key=="sidewalks-present"){
                if(strtolower($value)=="yes")
                {
                    $b_hazident["sidewalks-present"]=0;
                }
                else{
                  $b_hazident["sidewalks-present"]=8;
                }
             }

             if($key=="sidewalks-condition"){
                if(strtolower($value=='poor'))
                {
                    $b_hazident["sidewalks-condition"]=8;
                }
                elseif(strtolower($value=='average'))
                {
                    $b_hazident["sidewalks-condition"]=4;
                }
                elseif(strtolower($value=='good'))
                {
                    $b_hazident["sidewalks-condition"]=0;
                }
            }

            if($key=="streetlighting-present"){
                if(strtolower($value)=="yes")
                {
                    $b_hazident["streetlighting-present"]=0;
                }
                else{
                  $b_hazident["streetlighting-present"]=16;
                }
             }

             if($key=="streetlighting-condition"){
                if(strtolower($value=='poor'))
                {
                    $b_hazident["streetlighting-condition"]=16;
                }
                elseif(strtolower($value=='average'))
                {
                    $b_hazident["streetlighting-condition"]=8;
                }
                elseif(strtolower($value=='good'))
                {
                    $b_hazident["streetlighting-condition"]=0;
                }
            }

            if($key=="drainagesystem-present"){
                if(strtolower($value)=="yes")
                {
                    $b_hazident["drainagesystem-present"]=0;
                }
                else{
                  $b_hazident["drainagesystem-present"]=8;
                }
             }

             if($key=="drainagesystem-condition"){
                if(strtolower($value=='poor'))
                {
                    $b_hazident["drainagesystem-condition"]=8;
                }
                elseif(strtolower($value=='average'))
                {
                    $b_hazident["drainagesystem-condition"]=4;
                }
                elseif(strtolower($value=='good'))
                {
                    $b_hazident["drainagesystem-condition"]=0;
                }
            }

            if($key=="seweragesystem-present"){
                if(strtolower($value)=="yes")
                {
                    $b_hazident["seweragesystem-present"]=0;
                }
                else{
                  $b_hazident["seweragesystem-present"]=8;
                }
             }

             if($key=="seweragesystem-condition"){
                if(strtolower($value=='poor'))
                {
                    $b_hazident["seweragesystem-condition"]=8;
                }
                elseif(strtolower($value=='average'))
                {
                    $b_hazident["seweragesystem-condition"]=4;
                }
                elseif(strtolower($value=='good'))
                {
                    $b_hazident["seweragesystem-condition"]=0;
                }
            }
            if($key=="emergencyentryandexit-present"){
                if(strtolower($value)=="yes")
                {
                    $b_hazident["emergencyentryandexit-present"]=0;
                }
                else{
                  $b_hazident["emergencyentryandexit-present"]=8;
                }
             }

             if($key=="emergencyentryandexit-condition"){
                if(strtolower($value=='poor'))
                {
                    $b_hazident["emergencyentryandexit-condition"]=8;
                }
                elseif(strtolower($value=='average'))
                {
                    $b_hazident["emergencyentryandexit-condition"]=4;
                }
                elseif(strtolower($value=='good'))
                {
                    $b_hazident["emergencyentryandexit-condition"]=0;
                }
            }
            if($key=="fallinghazard-present"){
                if(strtolower($value)=="yes")
                {
                    $b_hazident["fallinghazard-present"]=0;
                }
                else{
                  $b_hazident["fallinghazard-present"]=16;
                }
             }

             if($key=="fallinghazard-condition"){
                if(strtolower($value=='poor'))
                {
                    $b_hazident["fallinghazard-condition"]=8;
                }
                elseif(strtolower($value=='average'))
                {
                    $b_hazident["fallinghazard-condition"]=4;
                }
                elseif(strtolower($value=='good'))
                {
                    $b_hazident["fallinghazard-condition"]=0;
                }
            }

    }
    $id=$row['id'];

    $sum= 0;  
    foreach ($b_hazident as $number)
    {
       $sum += $number;
    }
    // echo $sum."==this is the sum------";
    // print_r($b_hazident);
    // echo"<br>";
    // echo"<br>";
    
    $query2="UPDATE `buidlinghazard` SET `sum`='$sum' WHERE id=$id";
    $result1=mysqli_query($conn, $query2);

}

}

?>

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
    <form action="" method="POST">
        <label for="userhosbuild">Enter userhosbuild value : </label>
        <input type="text" name="user" id="user">
        <br>
        <button type="submit" value="submit" name="submit">Send Data</button>
        <br>
    </form>
    <br>
  

</body>

</html>

<?php

if(isset($_POST['submit']))
{
    $value=$_POST['user'];
    $result2 = mysqli_query($conn, "SELECT `sum`  FROM `buidlinghazard` WHERE userhosbuild='$value'");
    echo $value;
    echo "<br>";
    $toresult = $result2->fetch_array()[0] ?? '';
    if($toresult)
    {
        echo '<strong>Total Sum:  </strong>'.$toresult;
    }
    else{
        echo "No similar match found";
    }
    
}

?>


<!-- sloping site -->
<!-- Emergency power supply -->
<!-- 

Telecommunication system

 -->