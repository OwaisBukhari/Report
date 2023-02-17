<?php
$conn = new mysqli("localhost", "root", "", "erd-of-seismic");

$result = mysqli_query($conn, "SELECT * FROM `urm` ");


$num= mysqli_num_rows($result);
echo "total rows:$num";
echo"<br> <br>";

if($num>0)
{
$b_urm=array();
while($row = mysqli_fetch_assoc($result))
{
    echo "\n";
    // loop through each column
    foreach($row as $key => $value){

        if($key=="priorintervention-presence")
        {
            if(strtolower($value)=="yes"){
                $b_urm["priorintervention-presence"]=0;
            }else{
                $b_urm["priorintervention-presence"]=0;
            }
        }
        if($key=="priorintervention-condition")
        {
           if(strtolower($value=='poor'))
           {
               $b_urm["priorintervention-condition"]=8;
           }
           elseif(strtolower($value=='average'))
           {
               $b_urm["priorintervention-condition"]=4;
           }
           elseif(strtolower($value=='good'))
           {
               $b_urm["priorintervention-condition"]=0;
           }
        } 

        if($key=="foundationsettlement-presence")
        {
            if(strtolower($value)=="yes"){
                $b_urm["foundationsettlement-presence"]=0;
            }else{
                $b_urm["foundationsettlement-presence"]=0;
            }
        }
        if($key=="foundationsettlement-condition")
        {
           if(strtolower($value=='poor'))
           {
               $b_urm["foundationsettlement-condition"]=8;
           }
           elseif(strtolower($value=='average'))
           {
               $b_urm["foundationsettlement-condition"]=4;
           }
           elseif(strtolower($value=='good'))
           {
               $b_urm["foundationsettlement-condition"]=0;
           }
        } 

        if($key=="reentrantcorner-presence")
        {
            if(strtolower($value)=="yes"){
                $b_urm["reentrantcorner-presence"]=4;
            }else{
                $b_urm["reentrantcorner-presence"]=0;
            }
        }
        if($key=="nonparralellsystem-presence")
        {
            if(strtolower($value)=="yes"){
                $b_urm["nonparralellsystem-presence"]=4;
            }else{
                $b_urm["nonparralellsystem-presence"]=0;
            }
        }
        if($key=="outofplaneoffset-presence")
        {
            if(strtolower($value)=="yes"){
                $b_urm["outofplaneoffset-presence"]=4;
            }else{
                $b_urm["outofplaneoffset-presence"]=0;
            }
        }
        if($key=="torsionirregularity-presence")
        {
            if(strtolower($value)=="yes"){
                $b_urm["torsionirregularity-presence"]=16;
            }else{
                $b_urm["torsionirregularity-presence"]=0;
            }
        }
        if($key=="slabopening-presence")
        {
            if(strtolower($value)=="yes"){
                $b_urm["slabopening-presence"]=4;
            }else{
                $b_urm["slabopening-presence"]=0;
            }
        }
        if($key=="visibledeflectionofslab-presence")
        {
            if(strtolower($value)=="yes"){
                $b_urm["visibledeflectionofslab-presence"]=4;
            }else{
                $b_urm["visibledeflectionofslab-presence"]=0;
            }
        }
        if($key=="setback-presence")
        {
            if(strtolower($value)=="yes"){
                $b_urm["setback-presence"]=0;
            }else{
                $b_urm["setback-presence"]=0;
            }
        }
        // setback yes condition db table?
        // if($key=="")
        // {
        //    if(strtolower($value=='outward'))
        //    {
        //        $b_urm[""]=;
        //    }
        //    elseif(strtolower($value=='inward'))
        //    {
        //        $b_urm[""]=;
        //    }
        //    elseif(strtolower($value=='in-plane'))
        //    {
        //        $b_urm[""]=;
        //    }
        // } 


        if($key=="completeloadpath-presence")
        {
            if(strtolower($value)=="yes"){
                $b_urm["completeloadpath-presence"]=0;
            }else{
                $b_urm["completeloadpath-presence"]=4;
            }
        }
        if($key=="redundancy-presence")
        {
            if(strtolower($value)=="yes"){
                $b_urm["redundancy-presence"]=0;
            }else{
                $b_urm["redundancy-presence"]=4;
            }
        }
        if($key=="pounding-presence")
        {
            if(strtolower($value)=="yes"){
                $b_urm["pounding-presence"]=0;
            }else{
                $b_urm["pounding-presence"]=0;
            }
        }
        // ask values to give con1 or condition1 or ys
        if($key=="pounding-condition")
        {
           if(strtolower($value=='con1'))
           {
               $b_urm["pounding-condition"]=16;
           }
           elseif(strtolower($value=='con2'))
           {
               $b_urm["pounding-condition"]=16;
           }
           elseif(strtolower($value=='con3'))
           {
               $b_urm["pounding-condition"]=8;
           }
        } 
        if($key=="massirregularity-presence")
        {
            if(strtolower($value)=="yes"){
                $b_urm["massirregularity-presence"]=4;
            }else{
                $b_urm["massirregularity-presence"]=0;
            }
        }
        if($key=="woodledgers")
        {
            if(strtolower($value)=="yes"){
                $b_urm["woodledgers"]=4;
            }else{
                $b_urm["woodledgers"]=0;
            }
        }

        if($key=="wallanchorageforexteriorwalls-presence")
        {
            if(strtolower($value)=="yes"){
                $b_urm["wallanchorageforexteriorwalls-presence"]=0;
            }else{
                $b_urm["wallanchorageforexteriorwalls-presence"]=8;
            }
        }
        if($key==" wallanchoragespacing-presence")
        {
            if(strtolower($value)=="yes"){
                $b_urm["wallanchoragespacing-presence"]=0;
            }else{
                $b_urm["wallanchoragespacing-presence"]=4;
            }
        }
       
        // confirm other db tables as in excel
        if($key=="strongpierweakspandrel-presence")
        {
            if(strtolower($value)=="yes"){
                $b_urm["strongpierweakspandrel-presence"]=0;
            }else{
                $b_urm["strongpierweakspandrel-presence"]=4;
            }
        }
        if($key=="masonryjointdeter-presence")
        {
            if(strtolower($value)=="yes"){
                $b_urm["masonryjointdeter-presence"]=4;
            }else{
                $b_urm["masonryjointdeter-presence"]=0;
            }
        }
        if($key=="gableband-presence")
        {
            if(strtolower($value)=="yes"){
                $b_urm["gableband-presence"]=0;
            }else{
                $b_urm["gableband-presence"]=4;
            }
        }
        if($key=="throughstones-presence")
        {
            if(strtolower($value)=="yes"){
                $b_urm["throughstones-presence"]=0;
            }else{
                $b_urm["throughstones-presence"]=4;
            }
        }
        if($key=="horizontalbands-presence")
        {
            if(strtolower($value)=="yes"){
                $b_urm["horizontalbands-presence"]=0;
            }else{
                $b_urm["horizontalbands-presence"]=4;
            }
        }
        
        if($key=="masonarylayup-presence")
        {
            if(strtolower($value)=="yes"){
                $b_urm["masonarylayup-presence"]=0;
            }else{
                $b_urm["masonarylayup-presence"]=4;
            }
        }
        if($key=="crossties-presence")
        {
            if(strtolower($value)=="yes"){
                $b_urm["crossties-presence"]=0;
            }else{
                $b_urm["crossties-presence"]=4;
            }
        }
        if($key=="straightsheathing-presence")
        {
            if(strtolower($value)=="yes"){
                $b_urm["straightsheathing-presence"]=0;
            }else{
                $b_urm["straightsheathing-presence"]=4;
            }
        }
        // two time given in excel sheet
        if($key=="nonconcretefilldiaph-presence")
        {
            if(strtolower($value)=="yes"){
                $b_urm["nonconcretefilldiaph-presence"]=4;
            }else{
                $b_urm["nonconcretefilldiaph-presence"]=0;
            }
        }
        // Typical Slab Deterioation
        if($key=="typicalslabdetercracks-condition")
        {
           if(strtolower($value=='minor'))
           {
               $b_urm["typicalslabdetercracks-condition"]=2;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_urm["typicalslabdetercracks-condition"]=4;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_urm["typicalslabdetercracks-condition"]=8;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_urm["typicalslabdetercracks-condition"]=0;
           }
        } 
        if($key=="typicalslabdetercracks-condition")
        {
           if(strtolower($value=='minor'))
           {
               $b_urm["typicalslabdetercracks-condition"]=2;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_urm["typicalslabdetercracks-condition"]=4;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_urm["typicalslabdetercracks-condition"]=8;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_urm["typicalslabdetercracks-condition"]=0;
           }
        } 
        if($key=="typicalslabdeterr/fexp-condition")
        {
           if(strtolower($value=='minor'))
           {
               $b_urm["typicalslabdeterr/fexp-condition"]=2;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_urm["typicalslabdeterr/fexp-condition"]=4;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_urm["typicalslabdeterr/fexp-condition"]=8;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_urm["typicalslabdeterr/fexp-condition"]=0;
           }
        } 
        if($key=="typicalslabdeterr/fcorro-condition")
        {
           if(strtolower($value=='minor'))
           {
               $b_urm["typicalslabdeterr/fcorro-condition"]=2;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_urm["typicalslabdeterr/fcorro-condition"]=4;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_urm["typicalslabdeterr/fcorro-condition"]=8;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_urm["typicalslabdeterr/fcorro-condition"]=0;
           }
        } 
        if($key=="typicalslabdeterhoneycomb-condition")
        {
           if(strtolower($value=='minor'))
           {
               $b_urm["typicalslabdeterhoneycomb-condition"]=2;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_urm["typicalslabdeterhoneycomb-condition"]=4;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_urm["typicalslabdeterhoneycomb-condition"]=8;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_urm["typicalslabdeterhoneycomb-condition"]=0;
           }
        } 
        // Typical Stair Deterioation
        if($key=="typicalstaircasedetercracks-condition")
        {
           if(strtolower($value=='minor'))
           {
               $b_urm["typicalstaircasedetercracks-condition"]=2;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_urm["typicalstaircasedetercracks-condition"]=4;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_urm["typicalstaircasedetercracks-condition"]=8;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_urm["typicalstaircasedetercracks-condition"]=0;
           }
        } 
        if($key=="typicalstaircasedeterscaling-condition")
        {
           if(strtolower($value=='minor'))
           {
               $b_urm["typicalstaircasedeterscaling-condition"]=2;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_urm["typicalstaircasedeterscaling-condition"]=4;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_urm["typicalstaircasedeterscaling-condition"]=8;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_urm["typicalstaircasedeterscaling-condition"]=0;
           }
        } 
        // Typical Spandrel Deterioation
        if($key=="typicalspandreldetercracks-condition")
        {
           if(strtolower($value=='minor'))
           {
               $b_urm["typicalspandreldetercracks-condition"]=4;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_urm["typicalspandreldetercracks-condition"]=8;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_urm["typicalspandreldetercracks-condition"]=16;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_urm["typicalspandreldetercracks-condition"]=0;
           }
        } 
        if($key=="typicalspandreldeterscaling-condition")
        {
           if(strtolower($value=='minor'))
           {
               $b_urm["typicalspandreldeterscaling-condition"]=4;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_urm["typicalspandreldeterscaling-condition"]=8;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_urm["typicalspandreldeterscaling-condition"]=16;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_urm["typicalspandreldeterscaling-condition"]=0;
           }
        } 
        // Typical Pier Deterioation
        if($key=="typicalpierdetercracks-condition")
        {
           if(strtolower($value=='minor'))
           {
               $b_urm["typicalpierdetercracks-condition"]=4;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_urm["typicalpierdetercracks-condition"]=8;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_urm["typicalpierdetercracks-condition"]=16;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_urm["typicalpierdetercracks-condition"]=0;
           }
        } 
        
        if($key=="typicalpierdeterscaling-condition")
        {
           if(strtolower($value=='minor'))
           {
               $b_urm["typicalpierdeterscaling-condition"]=4;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_urm["typicalpierdeterscaling-condition"]=8;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_urm["typicalpierdeterscaling-condition"]=16;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_urm["typicalpierdeterscaling-condition"]=0;
           }
        } 
        
        
        
    }


$sum= 0;
foreach ($b_urm as $number){
  $sum += $number;
}
echo $sum."==this is the sum------";
print_r($b_urm);
echo "<br> <br>";
}
}

?>

<!-- if($key=="")
        {
            if(strtolower($value)=="yes"){
                $b_urm[""]=;
            }else{
                $b_urm[""]=;
            }
        }
        if($key=="")
        {
           if(strtolower($value=='poor'))
           {
               $b_urm[""]=;
           }
           elseif(strtolower($value=='average'))
           {
               $b_urm[""]=;
           }
           elseif(strtolower($value=='good'))
           {
               $b_urm[""]=;
           }
        } 
    -->

    <!-- 
        if($key=="")
        {
           if(strtolower($value=='minor'))
           {
               $b_urm[""]=2;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_urm[""]=4;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_urm[""]=8;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_urm[""]=0;
           }
        } 
       
     -->
