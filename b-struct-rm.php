<?php
$conn = new mysqli("localhost", "root", "", "erd-of-seismic");

$result = mysqli_query($conn, "SELECT * FROM `rm` ");


$num= mysqli_num_rows($result);


if($num>0)
{
$b_rm=array();
while($row = mysqli_fetch_assoc($result))
{
    echo "\n";
    // loop through each column
    foreach($row as $key => $value){
        if($key=="priorintervention-presence")
        {
            if(strtolower($value)=="yes"){
                $b_rm["priorintervention-presence"]=0;
            }else{
                $b_rm["priorintervention-presence"]=0;
            }
        }
        if($key=="priorintervention-condition")
        {
           if(strtolower($value=='poor'))
           {
               $b_rm["priorintervention-condition"]=8;
           }
           elseif(strtolower($value=='average'))
           {
               $b_rm["priorintervention-condition"]=4;
           }
           elseif(strtolower($value=='good'))
           {
               $b_rm["priorintervention-condition"]=0;
           }
        } 
        
        if($key=="foundationsettlement-presence")
        {
            if(strtolower($value)=="yes"){
                $b_rm["foundationsettlement-presence"]=0;
            }else{
                $b_rm["foundationsettlement-presence"]=0;
            }
        }
        if($key=="foundatonsettle-condtion")
        {
           if(strtolower($value=='poor'))
           {
               $b_rm["foundatonsettle-condtion"]=8;
           }
           elseif(strtolower($value=='average'))
           {
               $b_rm["foundatonsettle-condtion"]=4;
           }
           elseif(strtolower($value=='good'))
           {
               $b_rm["foundatonsettle-condtion"]=0;
           }
        } 
        if($key=="reentrantcorner-presence")
        {
            if(strtolower($value)=="yes"){
                $b_rm["reentrantcorner-presence"]=4;
            }else{
                $b_rm["reentrantcorner-presence"]=0;
            }
        }
        if($key=="nonparrallelsystem-presence")
        {
            if(strtolower($value)=="yes"){
                $b_rm["nonparrallelsystem-presence"]=4;
            }else{
                $b_rm["nonparrallelsystem-presence"]=0;
            }
        }
        if($key=="outofplaneffset-presence")
        {
            if(strtolower($value)=="yes"){
                $b_rm["outofplaneffset-presence"]=4;
            }else{
                $b_rm["outofplaneffset-presence"]=0;
            }
        }
        if($key=="torsion-irregularity-presence")
        {
            if(strtolower($value)=="yes"){
                $b_rm["torsion-irregularity-presence"]=16;
            }else{
                $b_rm["torsion-irregularity-presence"]=0;
            }
        }
        if($key=="slabopening-present")
        {
            if(strtolower($value)=="yes"){
                $b_rm["slabopening-present"]=4;
            }else{
                $b_rm["slabopening-present"]=0;
            }
        }
        if($key=="visibledeflectionofslab-presence")
        {
            if(strtolower($value)=="yes"){
                $b_rm["visibledeflectionofslab-presence"]=4;
            }else{
                $b_rm["visibledeflectionofslab-presence"]=0;
            }
        }

        if($key=="setback-presence")
        {
            if(strtolower($value)=="yes"){
                $b_rm["setback-presence"]=0;
            }else{
                $b_rm["setback-presence"]=0;
            }
        }
        if($key=="setback-discontinuity")
        {
           if(strtolower($value=='outwards'))
           {
               $b_rm["setback-discontinuity"]=16;
           }
           elseif(strtolower($value=='inward'))
           {
               $b_rm["setback-discontinuity"]=8;
           }
           elseif(strtolower($value=='in-plane'))
           {
               $b_rm["setback-discontinuity"]=4;
           }
        } 
        if($key=="completeloadpath-presence")
        {
            if(strtolower($value)=="yes"){
                $b_rm["completeloadpath-presence"]=0;
            }else{
                $b_rm["completeloadpath-presence"]=4;
            }
        }
        if($key=="redundancy-presence")
        {
            if(strtolower($value)=="yes"){
                $b_rm["redundancy-presence"]=0;
            }else{
                $b_rm["redundancy-presence"]=4;
            }
        }
        if($key=="pounding-presence")
        {
            if(strtolower($value)=="yes"){
                $b_rm["pounding-presence"]=0;
            }else{
                $b_rm["pounding-presence"]=0;
            }
        }
        // confirm con1 or condition1
        if($key=="pounding-condition")
        {
            if(strtolower($value=='con1'))
            {
                $b_rm["pounding-condition"]=16;
            }
            elseif(strtolower($value=='con2'))
            {
                $b_rm["pounding-condition"]=16;
            }
            elseif(strtolower($value=='con3'))
            {
                $b_rm["pounding-condition"]=8;
            }
        }
        if($key=="massirregularity-presence")
        {
            if(strtolower($value)=="yes"){
                $b_rm["massirregularity-presence"]=4;
            }else{
                $b_rm["massirregularity-presence"]=0;
            }
        }
        if($key=="toppingslab-presence")
        {
            if(strtolower($value)=="yes"){
                $b_rm["toppingslab-presence"]=0;
            }else{
                $b_rm["toppingslab-presence"]=4;
            }
        }
        if($key=="toppingslabtowalls-presence")
        {
            if(strtolower($value)=="yes"){
                $b_rm["toppingslabtowalls-presence"]=4;
            }else{
                $b_rm["toppingslabtowalls-presence"]=0;
            }
        }
        if($key=="woodledgers-presence")
        {
            if(strtolower($value)=="yes"){
                $b_rm["woodledgers-presence"]=4;
            }else{
                $b_rm["woodledgers-presence"]=0;
            }
        }
        if($key=="reinforcingatwalll-presence")
        {
            if(strtolower($value)=="yes"){
                $b_rm["reinforcingatwalll-presence"]=0;
            }else{
                $b_rm["reinforcingatwalll-presence"]=8;
            }
        }
        if($key=="wallanchorageforexteriorwalls-presence")
        {
            if(strtolower($value)=="yes"){
                $b_rm["wallanchorageforexteriorwalls-presence"]=0;
            }else{
                $b_rm["wallanchorageforexteriorwalls-presence"]=8;
            }
        }
        if($key=="thehieghttothickness-presence")
        {
            if(strtolower($value)=="yes"){
                $b_rm["thehieghttothickness-presence"]=0;
            }else{
                $b_rm["thehieghttothickness-presence"]=4;
            }
        }
        if($key=="openignatextmason-presence")
        {
            if(strtolower($value)=="yes"){
                $b_rm["openignatextmason-presence"]=4;
            }else{
                $b_rm["openignatextmason-presence"]=0;
            }
        }
        if($key=="wallanchoragespacing-presence")
        {
            if(strtolower($value)=="yes"){
                $b_rm["wallanchoragespacing-presence"]=0;
            }else{
                $b_rm["wallanchoragespacing-presence"]=4;
            }
        }
        if($key=="strongpierweakspandrel-presence")
        {
            if(strtolower($value)=="yes"){
                $b_rm["strongpierweakspandrel-presence"]=0;
            }else{
                $b_rm["strongpierweakspandrel-presence"]=4;
            }
        }
        if($key=="flexiblediaphram-presence")
        {
            if(strtolower($value)=="yes"){
                $b_rm["flexiblediaphram-presence"]=0;
            }else{
                $b_rm["flexiblediaphram-presence"]=0;
            }
        }
        if($key=="crossties-presence")
        {
            if(strtolower($value)=="yes"){
                $b_rm["crossties-presence"]=0;
            }else{
                $b_rm["crossties-presence"]=4;
            }
        }
        if($key=="straightsheathing-presence")
        {
            if(strtolower($value)=="yes"){
                $b_rm["straightsheathing-presence"]=0;
            }else{
                $b_rm["straightsheathing-presence"]=4;
            }
        }
         // confirm db coulmn
        // Non-Concrete diaphragm present two times in excel .

        if($key=="nonconcretefilleddiaph-presence")
        {
            if(strtolower($value)=="yes"){
                $b_rm["nonconcretefilleddiaph-presence"]=4;
            }else{
                $b_rm["nonconcretefilleddiaph-presence"]=0;
            }
        }
       
        if($key=="typicalslabdetercracks-condition")
        {
           if(strtolower($value=='minor'))
           {
               $b_rm["typicalslabdetercracks-condition"]=2;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_rm["typicalslabdetercracks-condition"]=4;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_rm["typicalslabdetercracks-condition"]=8;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_rm["typicalslabdetercracks-condition"]=0;
           }

        if($key=="typicalslabdeterscaling-condition")
        {
           if(strtolower($value=='minor'))
           {
               $b_rm["typicalslabdeterscaling-condition"]=2;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_rm["typicalslabdeterscaling-condition"]=4;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_rm["typicalslabdeterscaling-condition"]=8;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_rm["typicalslabdeterscaling-condition"]=0;
           }
        }
        if($key=="typicalslabdeterr/fexp-condition")
        {
           if(strtolower($value=='minor'))
           {
               $b_rm["typicalslabdeterr/fexp-condition"]=2;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_rm["typicalslabdeterr/fexp-condition"]=4;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_rm["typicalslabdeterr/fexp-condition"]=8;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_rm["typicalslabdeterr/fexp-condition"]=0;
           }
        }
        if($key=="typicalslabdeterr/fcorro-condition")
        {
           if(strtolower($value=='minor'))
           {
               $b_rm["typicalslabdeterr/fcorro-condition"]=2;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_rm["typicalslabdeterr/fcorro-condition"]=4;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_rm["typicalslabdeterr/fcorro-condition"]=8;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_rm["typicalslabdeterr/fcorro-condition"]=0;
           }
        }
        if($key=="typicalslabdeterhoneycomb-condition")
        {
           if(strtolower($value=='minor'))
           {
               $b_rm["typicalslabdeterhoneycomb-condition"]=2;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_rm["typicalslabdeterhoneycomb-condition"]=4;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_rm["typicalslabdeterhoneycomb-condition"]=8;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_rm["typicalslabdeterhoneycomb-condition"]=0;
           }
        }
        if($key=="typicalstaircasedetercracks-condition")
        {
           if(strtolower($value=='minor'))
           {
               $b_rm["typicalstaircasedetercracks-condition"]=2;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_rm["typicalstaircasedetercracks-condition"]=4;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_rm["typicalstaircasedetercracks-condition"]=8;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_rm["typicalstaircasedetercracks-condition"]=0;
           }
        } 
        if($key=="typicalstaircasedeterscaling-condition")
        {
           if(strtolower($value=='minor'))
           {
               $b_rm["typicalstaircasedeterscaling-condition"]=2;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_rm["typicalstaircasedeterscaling-condition"]=4;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_rm["typicalstaircasedeterscaling-condition"]=8;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_rm["typicalstaircasedeterscaling-condition"]=0;
           }
        } 
        if($key=="typicalstaircasedeterr/fexp-condition")
        {
           if(strtolower($value=='minor'))
           {
               $b_rm["typicalstaircasedeterr/fexp-condition"]=2;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_rm["typicalstaircasedeterr/fexp-condition"]=4;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_rm["typicalstaircasedeterr/fexp-condition"]=8;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_rm["typicalstaircasedeterr/fexp-condition"]=0;
           }
        } 
        if($key=="typicalstaircasedeterr/fcorro-picture")
        {
           if(strtolower($value=='minor'))
           {
               $b_rm["typicalstaircasedeterr/fcorro-picture"]=2;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_rm["typicalstaircasedeterr/fcorro-picture"]=4;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_rm["typicalstaircasedeterr/fcorro-picture"]=8;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_rm["typicalstaircasedeterr/fcorro-picture"]=0;
           }
        } 
        if($key=="typicalstaircasedeterhoneycomb-condition")
        {
           if(strtolower($value=='minor'))
           {
               $b_rm["typicalstaircasedeterhoneycomb-condition"]=2;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_rm["typicalstaircasedeterhoneycomb-condition"]=4;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_rm["typicalstaircasedeterhoneycomb-condition"]=8;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_rm["typicalstaircasedeterhoneycomb-condition"]=0;
           }
        } 
        
        if($key=="typicalspandreldetercracks-condition")
        {
           if(strtolower($value=='minor'))
           {
               $b_rm["typicalspandreldetercracks-condition"]=4;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_rm["typicalspandreldetercracks-condition"]=8;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_rm["typicalspandreldetercracks-condition"]=16;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_rm["typicalspandreldetercracks-condition"]=0;
           }
        } 
        if($key=="typicalspandreldeterscaling-condition")
        {
           if(strtolower($value=='minor'))
           {
               $b_rm["typicalspandreldeterscaling-condition"]=4;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_rm["typicalspandreldeterscaling-condition"]=8;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_rm["typicalspandreldeterscaling-condition"]=16;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_rm["typicalspandreldeterscaling-condition"]=0;
           }
        } 
        if($key=="typicalspandreldeterr/fexp-condition")
        {
           if(strtolower($value=='minor'))
           {
               $b_rm["typicalspandreldeterr/fexp-condition"]=4;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_rm["typicalspandreldeterr/fexp-condition"]=8;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_rm["typicalspandreldeterr/fexp-condition"]=16;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_rm["typicalspandreldeterr/fexp-condition"]=0;
           }
        } 

        // db table
        // Typical Spandrel Deterioation  R/f Corro
        // Typical Spandrel Deterioation  honeycombing
        if($key=="typicalpierdetercracks-condition")
        {
           if(strtolower($value=='minor'))
           {
               $b_rm["typicalpierdetercracks-condition"]=4;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_rm["typicalpierdetercracks-condition"]=8;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_rm["typicalpierdetercracks-condition"]=16;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_rm["typicalpierdetercracks-condition"]=0;
           }
        } 
        if($key=="typicalpierdeterscaling-condition")
        {
           if(strtolower($value=='minor'))
           {
               $b_rm["typicalpierdeterscaling-condition"]=4;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_rm["typicalpierdeterscaling-condition"]=8;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_rm["typicalpierdeterscaling-condition"]=16;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_rm["typicalpierdeterscaling-condition"]=0;
           }
        } 
        if($key=="typicalpierdeterr/fexp-condition")
        {
           if(strtolower($value=='minor'))
           {
               $b_rm["typicalpierdeterr/fexp-condition"]=4;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_rm["typicalpierdeterr/fexp-condition"]=8;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_rm["typicalpierdeterr/fexp-condition"]=16;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_rm["typicalpierdeterr/fexp-condition"]=0;
           }
        } 
        if($key=="typicalpierdeterr/fcrro-condition")
        {
           if(strtolower($value=='minor'))
           {
               $b_rm["typicalpierdeterr/fcrro-condition"]=4;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_rm["typicalpierdeterr/fcrro-condition"]=8;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_rm["typicalpierdeterr/fcrro-condition"]=16;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_rm["typicalpierdeterr/fcrro-condition"]=0;
           }
        } 

        // db table for Typical Pier Deterioation honeycombing

        

    }

}


$id=$row['id'];
$sum= 0;
foreach ($b_rm as $number){
  $sum += $number;
}


$query2="UPDATE `rm` SET `sum`='$sum' WHERE id=$id";
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
        <h1>Building Structure-RM</h1>
        <label for="userhosbuild">Enter userhosbuild value : </label>
        <input type="text" name="user" id="user">
        <br> <br>
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
    $result2 = mysqli_query($conn, "SELECT `sum`  FROM `rm` WHERE userhosbuild='$value'");
    echo $value;
    echo "<br>";
    $toresult = $result2->fetch_array()[0] ?? '';
    if($toresult>= 0)
    {
        echo '<strong>Total Sum:  </strong>'.$toresult;
    }
    else{
        echo "No similar match found";
    }
    
}

?>
