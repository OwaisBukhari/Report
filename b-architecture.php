
<?php
$conn = new mysqli("localhost", "root", "", "erd-of-seismic");

$result = mysqli_query($conn, "SELECT * FROM `buidlingarchitectural`");

$num= mysqli_num_rows($result);
echo "total rows:$num";
echo"<br> <br>";

if($num>0)
{
$b_archit=array();
while($row = mysqli_fetch_assoc($result))
{
    echo "\n";
    // loop through each column
    foreach($row as $key => $value){
        if($key=="boundarypartitionwall-condition")
        {
            if(strtolower($value)=="yes"){
                $b_archit["possibilityofurbanflooding"]=0;
            }else{
                $b_archit["possibilityofurbanflooding"]=4;
            }
        }
        if($key=="boundarypartitionwall-condition")
        {
           if(strtolower($value=='poor'))
           {
            $b_archit["boundarypartitionwall-condition"]=4;
           }
           elseif(strtolower($value=='average'))
           {
            $b_archit["boundarypartitionwall-condition"]=2;
           }
           elseif(strtolower($value=='good'))
           {
            $b_archit["boundarypartitionwall-condition"]=0;
           }
        }

        if($key=="falseceiling-present")
        {
            if(strtolower($value)=="yes"){
                $b_archit["falseceiling-present"]=0;
            }else{
                $b_archit["falseceiling-present"]=0;
            }
        }
        if($key=="falseceiling-condition")
        {
           if(strtolower($value=='poor'))
           {
            $b_archit["falseceiling-condition"]=8;
           }
           elseif(strtolower($value=='average'))
           {
            $b_archit["falseceiling-condition"]=4;
           }
           elseif(strtolower($value=='good'))
           {
            $b_archit["falseceiling-condition"]=0;
           }
        }
        // window present
        // if($key=="")
        // {
        //     if(strtolower($value)=="yes"){
        //        $b_archit[""]=;
        //     }else{
        //         $b_archit[""]=;
        //     }
        // }
        if($key=="windowsizetypical-condition")
        {
           if(strtolower($value=='poor'))
           {
            $b_archit["windowsizetypical-condition"]=4;
           }
           elseif(strtolower($value=='average'))
           {
            $b_archit["windowsizetypical-condition"]=2;
           }
           elseif(strtolower($value=='good'))
           {
            $b_archit["windowsizetypical-condition"]=0;
           }
        }
        // door present
        // if($key=="")
        // {
        //     if(strtolower($value)=="yes"){
        //         $b_archit[""]=;
        //     }else{
        //         $b_archit[""]=;
        //     }
        // }
        if($key=="doorsizetypical-condition")
        {
           if(strtolower($value=='poor'))
           {
            $b_archit["doorsizetypical-condition"]=4;
           }
           elseif(strtolower($value=='average'))
           {
            $b_archit["doorsizetypical-condition"]=2;
           }
           elseif(strtolower($value=='good'))
           {
            $b_archit["doorsizetypical-condition"]=0;
           }
        }
        // staircase present
        // if($key=="")
        // {
        //     if(strtolower($value)=="yes"){
        //         $b_archit[""]=;
        //     }else{
        //         $b_archit[""]=;
        //     }
        // }
        if($key=="staircase-condition")
        {
           if(strtolower($value=='poor'))
           {
            $b_archit["staircase-condition"]=4;
           }
           elseif(strtolower($value=='average'))
           {
            $b_archit["staircase-condition"]=2;
           }
           elseif(strtolower($value=='good'))
           {
            $b_archit["staircase-condition"]=0;
           }
        }
        // passageway-present
        // if($key=="")
        // {
        //     if(strtolower($value)=="yes"){
        //       $b_archit[""]=;
        //     }else{
        //         $b_archit[""]=;
        //     }
        // }
        if($key=="passageway-condition")
        {
           if(strtolower($value=='poor'))
           {
            $b_archit["passageway-condition"]=4;
           }
           elseif(strtolower($value=='average'))
           {
            $b_archit["passageway-condition"]=2;
           }
           elseif(strtolower($value=='good'))
           {
            $b_archit["passageway-condition"]=0;
           }
        }
       
        
        if($key=="facade-present")
        {
            if(strtolower($value)=="yes"){
                $b_archit["facade-present"]=0;
            }else{
                $b_archit["facade-present"]=0;
            }
        }
        if($key=="facade-condition")
        {
           if(strtolower($value=='poor'))
           {
            $b_archit["facade-condition"]=4;
           }
           elseif(strtolower($value=='average'))
           {
            $b_archit["facade-condition"]=2;
           }
           elseif(strtolower($value=='good'))
           {
            $b_archit["facade-condition"]=0;
           }
        }
        if($key=="visiblecracks-present")
        {
            if(strtolower($value)=="yes"){
                $b_archit["visiblecracks-present"]=0;
            }else{
                $b_archit["visiblecracks-present"]=8;
            }
        }
        if($key=="visiblecracks-condition")
        {
           if(strtolower($value=='poor'))
           {
            $b_archit["visiblecracks-condition"]=4;
           }
           elseif(strtolower($value=='average'))
           {
            $b_archit["visiblecracks-condition"]=2;
           }
           elseif(strtolower($value=='good'))
           {
            $b_archit["visiblecracks-condition"]=0;
           }
        }
        
        if($key=="qualityofconstruc-condtion")
        {
           if(strtolower($value=='poor'))
           {
            $b_archit["qualityofconstruc-condtion"]=4;
           }
           elseif(strtolower($value=='average'))
           {
            $b_archit["qualityofconstruc-condtion"]=2;
           }
           elseif(strtolower($value=='good'))
           {
            $b_archit["qualityofconstruc-condtion"]=0;
           }
        }
        if($key=="priordamageoccured-present")
        {
            if(strtolower($value)=="yes"){
                $b_archit["priordamageoccured-present"]=0;
            }else{
                $b_archit["priordamageoccured-present"]=0;
            }
        }
        if($key=="priordamageoccured-condition")
        {
           if(strtolower($value=='poor'))
           {
            $b_archit["priordamageoccured-condition"]=4;
           }
           elseif(strtolower($value=='average'))
           {
            $b_archit["priordamageoccured-condition"]=2;
           }
           elseif(strtolower($value=='good'))
           {
            $b_archit["priordamageoccured-condition"]=0;
           }
        }
       
        if($key=="overallcondition-condition")
        {
           if(strtolower($value=='poor'))
           {
            $b_archit["overallcondition-condition"]=4;
           }
           elseif(strtolower($value=='average'))
           {
            $b_archit["overallcondition-condition"]=2;
           }
           elseif(strtolower($value=='good'))
           {
            $b_archit["overallcondition-condition"]=0;
           }
        }
        if($key=="elevator-present")
        {
            if(strtolower($value)=="yes"){
                $b_archit["elevator-present"]=0;
            }else{
                $b_archit["elevator-present"]=8;
            }
        }
        if($key=="")
        {
           if(strtolower($value=='poor'))
           {
            $b_archit["elevator-condition"]=4;
           }
           elseif(strtolower($value=='average'))
           {
            $b_archit["elevator-condition"]=2;
           }
           elseif(strtolower($value=='good'))
           {
            $b_archit["elevator-condition"]=0;
           }
        }
        if($key=="serviceelevator-present")
        {
            if(strtolower($value)=="yes"){
                $b_archit["serviceelevator-present"]=0;
            }else{
                $b_archit["serviceelevator-present"]=8;
            }
        }
        if($key=="")
        {
           if(strtolower($value=='poor'))
           {
            $b_archit["serviceelevator-condition"]=4;
           }
           elseif(strtolower($value=='average'))
           {
            $b_archit["serviceelevator-condition"]=2;
           }
           elseif(strtolower($value=='good'))
           {
            $b_archit["serviceelevator-condition"]=0;
           }
        }


    }


$sum= 0;
    
foreach ($b_archit as $number) {
  $sum += $number;
}
echo $sum."==this is the sum------";
print_r($b_archit);
echo "<br> <br>";
}
}

?>


<!-- if($key=="")
        {
            if(strtolower($value)=="yes"){
                $b_hazident[""]=;
            }else{
                $b_hazident[""]=;
            }
        }
        if($key=="")
        {
           if(strtolower($value=='poor'))
           {
               $b_hazident[""]=;
           }
           elseif(strtolower($value=='average'))
           {
               $b_hazident[""]=;
           }
           elseif(strtolower($value=='good'))
           {
               $b_hazident[""]=;
           }
        } -->