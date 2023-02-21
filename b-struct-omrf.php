
<?php
$conn = new mysqli("localhost", "root", "", "erd-of-seismic");

$result = mysqli_query($conn, "SELECT * FROM `omrf`");

$num= mysqli_num_rows($result);


if($num>0)
{

$b_omrf=array();
while($row = mysqli_fetch_assoc($result))
{
    echo "\n";
    foreach($row as $key => $value){

        if($key=="priorintervention_present")
        {
            if(strtolower($value)=="yes"){
                $b_omrf["priorintervention_present"]=0;
            }else{
                $b_omrf["priorintervention_present"]=0;
            }
        }
        if($key=="priorintervention_condition")
        {
           if(strtolower($value=='poor'))
           {
            $b_omrf["priorintervention_condition"]=8;
           }
           elseif(strtolower($value=='average'))
           {
            $b_omrf["priorintervention_condition"]=4;
           }
           elseif(strtolower($value=='good'))
           {
            $b_omrf["priorintervention_condition"]=0;
           }
        }

        if($key=="presenceofexpansionjoint")
        {
            if(strtolower($value)=="yes"){
                $b_omrf["presenceofexpansionjoint"]=0;
            }
            else{
                $b_omrf["presenceofexpansionjoint"]=0;
            }
        }
        if($key=="expansionjoint-condition")
        {
           if(strtolower($value=='poor'))
           {
            $b_omrf["expansionjoint-condition"]=4;
           }
           elseif(strtolower($value=='average'))
           {
            $b_omrf["expansionjoint-condition"]=2;
           }
           elseif(strtolower($value=='good'))
           {
            $b_omrf ["expansionjoint-condition"]=0;
           }
        }

        if($key=="foundationsettlement-presence")
        {
            if(strtolower($value)=="yes"){
                $b_omrf["foundationsettlement-presence"]=0;
            }else{
                $b_omrf["foundationsettlement-presence"]=0;
            }
        }
        // foundation settelment condition 
        // if($key=="")
        // {
        //    if(strtolower($value=='poor'))
        //    {
        //       $b_omrf[""]=;
        //    }
        //    elseif(strtolower($value=='average'))
        //    {
        //        $b_omrf[""]=;
        //    }
        //    elseif(strtolower($value=='good'))
        //    {
        //        $b_omrf[""]=;
        //    }
        // }

        if($key=="reentrantcorner-presence")
        {
            if(strtolower($value)=="yes"){
                $b_omrf["reentrantcorner-presence"]=8;
            }else{
                $b_omrf["reentrantcorner-presence"]=0;
            }
        }
        
        if($key=="non-parralellsys-presence")
        {
            if(strtolower($value)=="yes"){
                $b_omrf["non-parralellsys-presence"]=8;
            }else{
                $b_omrf["non-parralellsys-presence"]=0;
            }
        }
        
        if($key=="outofplaneoffset-presence")
        {
            if(strtolower($value)=="yes"){
                $b_omrf["outofplaneoffset-presence"]=8;
            }else{
                $b_omrf["outofplaneoffset-presence"]=0;
            }
        }
       
        if($key=="torsionireegularity-presence")
        {
            if(strtolower($value)=="yes"){
                $b_omrf["torsionireegularity-presence"]=16;
            }else{
                $b_omrf["torsionireegularity-presence"]=0;
            }
        }
       

        if($key=="slabopening-presence")
        {
            if(strtolower($value)=="yes"){
                $b_omrf["slabopening-presence"]=0;
            }else{
                $b_omrf["slabopening-presence"]=8;
            }
        }

        if($key=="presenceofcantilevers")
        {
            if(strtolower($value)=="yes"){
                $b_omrf["presenceofcantilevers"]=4;
            }else{
                $b_omrf["presenceofcantilevers"]=0;
            }
        }
        if($key=="visibledeflectionofbeam-presence")
        {
            if(strtolower($value)=="yes"){
                $b_omrf["visibledeflectionofbeam-presence"]=4;
            }else{
                $b_omrf["visibledeflectionofbeam-presence"]=0;
            }
        }
        if($key=="visibledeflectionofslabs-presence")
        {
            if(strtolower($value)=="yes"){
                $b_omrf["visibledeflectionofslabs-presence"]=4;
            }else{
                $b_omrf["visibledeflectionofslabs-presence"]=0;
            }
        }
        // confirm table
        if($key=="diaphragmcontinuity-presence")
        {
            if(strtolower($value)=="yes"){
                $b_omrf["diaphragmcontinuity-presence"]=8;
            }else{
                $b_omrf["diaphragmcontinuity-presence"]=0;
            }
        }
        if($key=="setback-presence")
        {
            if(strtolower($value)=="yes"){
                $b_omrf["setback-presence"]=0;
            }else{
                $b_omrf["setback-presence"]=0;
            }
        }
        if($key=="setback-discontinuity")
        {
           if(strtolower($value=='outword'))
           {
            $b_omrf["setback-discontinuity"]=16;
           }
           elseif(strtolower($value=='inword'))
           {
            $b_omrf["setback-discontinuity"]=8;
           }
           elseif(strtolower($value=='in-plane'))
           {
            $b_omrf["setback-discontinuity"]=0;
           }
        } 

        if($key=="completeloadpath-presence")
        {
            if(strtolower($value)=="yes"){
                $b_omrf["completeloadpath-presence"]=0;
            }else{
                $b_omrf["completeloadpath-presence"]=4;
            }
        }
       
        if($key=="redundancy-presence")
        {
            if(strtolower($value)=="yes"){
                $b_omrf["redundancy-presence"]=0;
            }else{
                $b_omrf["redundancy-presence"]=4;
            }
        }
       
        if($key=="weakstory-presence")
        {
            if(strtolower($value)=="yes"){
                $b_omrf["weakstory-presence"]=16;
            }else{
                $b_omrf["weakstory-presence"]=0;
            }
        }
       
        if($key=="softstory-presence")
        {
            if(strtolower($value)=="yes"){
                $b_omrf["softstory-presence"]=16;
            }else{
                $b_omrf["softstory-presence"]=0;
            }
        }
       
        if($key=="verticaldiscontinuity-presence")
        {
            if(strtolower($value)=="yes"){
                $b_omrf["verticaldiscontinuity-presence"]=4;
            }else{
                $b_omrf["verticaldiscontinuity-presence"]=0;
            }
        }
       
        if($key=="pounding-presence")
        {
            if(strtolower($value)=="yes"){
                $b_omrf["pounding-presence"]=0;
            }else{
                $b_omrf["pounding-presence"]=0;
            }
        }
        // condition table
        // if($key=="")
        // {
        //    if(strtolower($value==''))
        //    {
        //        $b_omrf[""]=;
        //    }
        //    elseif(strtolower($value==''))
        //    {
        //        $b_omrf[""]=;
        //    }
        //    elseif(strtolower($value==''))
        //    {
        //        $b_omrf[""]=;
        //    }
        // } 

        if($key=="strongcolumnweakbeam-presence")
        {
            if(strtolower($value)=="yes"){
                $b_omrf["strongcolumnweakbeam-presence"]=0;
            }else{
                $b_omrf["strongcolumnweakbeam-presence"]=8;
            }
        }
       
        if($key=="massirregularity-presence")
        {
            if(strtolower($value)=="yes"){
                $b_omrf["massirregularity-presence"]=4;
            }else{
                $b_omrf["massirregularity-presence"]=0;
            }
        }
        if($key=="infillwallareisoltedformframe-presence")
        {
            if(strtolower($value)=="yes"){
                $b_omrf["infillwallareisoltedformframe-presence"]=0;
            }else{
                $b_omrf["infillwallareisoltedformframe-presence"]=4;
            }
        }
        if($key=="noflatslabframes-presence")
        {
            if(strtolower($value)=="yes"){
                $b_omrf["noflatslabframes-presence"]=0;
            }else{
                $b_omrf["noflatslabframes-presence"]=8;
            }
        }
        if($key=="noshearfailure-presence")
        {
            if(strtolower($value)=="yes"){
                $b_omrf["noshearfailure-presence"]=0;
            }else{
                $b_omrf["noshearfailure-presence"]=4;
            }
        }
        
        if($key=="short/captivecolumn-presence")
        {
            if(strtolower($value)=="yes"){
                $b_omrf["short/captivecolumn-presence"]=8;
            }else{
                $b_omrf["short/captivecolumn-presence"]=0;
            }
        }
        if($key=="lateralcoulumndrift-presence")
        {
            if(strtolower($value)=="yes"){
                $b_omrf["lateralcoulumndrift-presence"]=4;
            }else{
                $b_omrf["lateralcoulumndrift-presence"]=0;
            }
        }
        

        // typical beam deteriorater
        if($key=="typicalbeamdetercracks-condition")
        {
           if(strtolower($value=='minor'))
           {
            $b_omrf["typicalbeamdetercracks-condition"]=2;
           }
           elseif(strtolower($value=='moderate'))
           {
            $b_omrf["typicalbeamdetercracks-condition"]=4;
           }
           elseif(strtolower($value=='severe'))
           {
            $b_omrf["typicalbeamdetercracks-condition"]=8;
           }
           elseif(strtoupper($value=='NA'))
           {
            $b_omrf["typicalbeamdetercracks-condition"]=0;
           }
        } 
       
        if($key=="typicalbeamdeterscaling-condition")
        {
           if(strtolower($value=='minor'))
           {
            $b_omrf["typicalbeamdeterscaling-condition"]=2;
           }
           elseif(strtolower($value=='moderate'))
           {
            $b_omrf["typicalbeamdeterscaling-condition"]=4;
           }
           elseif(strtolower($value=='severe'))
           {
            $b_omrf["typicalbeamdeterscaling-condition"]=8;
           }
           elseif(strtoupper($value=='NA'))
           {
            $b_omrf["typicalbeamdeterscaling-condition"]=0;
           }
        } 
       
        if($key=="typicalbeamdeterR/fexp-condition")
        {
           if(strtolower($value=='minor'))
           {
            $b_omrf["typicalbeamdeterR/fexp-condition"]=2;
           }
           elseif(strtolower($value=='moderate'))
           {
            $b_omrf["typicalbeamdeterR/fexp-condition"]=4;
           }
           elseif(strtolower($value=='severe'))
           {
            $b_omrf["typicalbeamdeterR/fexp-condition"]=8;
           }
           elseif(strtoupper($value=='NA'))
           {
            $b_omrf["typicalbeamdeterR/fexp-condition"]=0;
           }
        } 
       
        if($key=="typicalbeamdeterR/fcorro-condition")
        {
           if(strtolower($value=='minor'))
           {
            $b_omrf["typicalbeamdeterR/fcorro-condition"]=2;
           }
           elseif(strtolower($value=='moderate'))
           {
            $b_omrf["typicalbeamdeterR/fcorro-condition"]=4;
           }
           elseif(strtolower($value=='severe'))
           {
            $b_omrf["typicalbeamdeterR/fcorro-condition"]=8;
           }
           elseif(strtoupper($value=='NA'))
           {
            $b_omrf["typicalbeamdeterR/fcorro-condition"]=0;
           }
        } 
       
        if($key=="typicalbeamdeterhoneycomb-conditon")
        {
           if(strtolower($value=='minor'))
           {
            $b_omrf["typicalbeamdeterhoneycomb-conditon"]=2;
           }
           elseif(strtolower($value=='moderate'))
           {
            $b_omrf["typicalbeamdeterhoneycomb-conditon"]=4;
           }
           elseif(strtolower($value=='severe'))
           {
            $b_omrf["typicalbeamdeterhoneycomb-conditon"]=8;
           }
           elseif(strtoupper($value=='NA'))
           {
            $b_omrf["typicalbeamdeterhoneycomb-conditon"]=0;
           }
        } 
    //    typical beam deterioration only for steel
        if($key=="Steeltypicalbeamdeterrusting-condtion")
        {
           if(strtolower($value=='minor'))
           {
            $b_omrf["Steeltypicalbeamdeterrusting-condtion"]=2;
           }
           elseif(strtolower($value=='moderate'))
           {
            $b_omrf["Steeltypicalbeamdeterrusting-condtion"]=4;
           }
           elseif(strtolower($value=='severe'))
           {
            $b_omrf["Steeltypicalbeamdeterrusting-condtion"]=8;
           }
           elseif(strtoupper($value=='NA'))
           {
            $b_omrf["Steeltypicalbeamdeterrusting-condtion"]=0;
           }
        } 
       
        if($key=="Steeltypicalbeamdeterflaking-condition")
        {
           if(strtolower($value=='minor'))
           {
            $b_omrf["Steeltypicalbeamdeterflaking-condition"]=2;
           }
           elseif(strtolower($value=='moderate'))
           {
            $b_omrf["Steeltypicalbeamdeterflaking-condition"]=4;
           }
           elseif(strtolower($value=='severe'))
           {
            $b_omrf["Steeltypicalbeamdeterflaking-condition"]=8;
           }
           elseif(strtoupper($value=='NA'))
           {
            $b_omrf["Steeltypicalbeamdeterflaking-condition"]=0;
           }
        } 
       
        if($key=="Steeltypicalbeamdeteryielding-condition")
        {
           if(strtolower($value=='minor'))
           {
            $b_omrf["Steeltypicalbeamdeteryielding-condition"]=2;
           }
           elseif(strtolower($value=='moderate'))
           {
            $b_omrf["Steeltypicalbeamdeteryielding-condition"]=4;
           }
           elseif(strtolower($value=='severe'))
           {
            $b_omrf["Steeltypicalbeamdeteryielding-condition"]=8;
           }
           elseif(strtoupper($value=='NA'))
           {
            $b_omrf["Steeltypicalbeamdeteryielding-condition"]=0;
           }
        } 
       
        if($key=="Steeltypicalbeamdeterbuckling-condition")
        {
           if(strtolower($value=='minor'))
           {
            $b_omrf["Steeltypicalbeamdeterbuckling-condition"]=2;
           }
           elseif(strtolower($value=='moderate'))
           {
            $b_omrf["Steeltypicalbeamdeterbuckling-condition"]=4;
           }
           elseif(strtolower($value=='severe'))
           {
            $b_omrf["Steeltypicalbeamdeterbuckling-condition"]=8;
           }
           elseif(strtoupper($value=='NA'))
           {
            $b_omrf["Steeltypicalbeamdeterbuckling-condition"]=0;
           }
        } 
    //    typical coulmn deterioration
        if($key=="typicalcolumndetercracks-condtion")
        {
           if(strtolower($value=='minor'))
           {
            $b_omrf["typicalcolumndetercracks-condtion"]=4;
           }
           elseif(strtolower($value=='moderate'))
           {
            $b_omrf["typicalcolumndetercracks-condtion"]=8;
           }
           elseif(strtolower($value=='severe'))
           {
            $b_omrf["typicalcolumndetercracks-condtion"]=16;
           }
           elseif(strtoupper($value=='NA'))
           {
            $b_omrf["typicalcolumndetercracks-condtion"]=0;
           }
        } 
        if($key=="typicalcoumndterscaling-condition")
        {
           if(strtolower($value=='minor'))
           {
            $b_omrf["typicalcoumndterscaling-condition"]=4;
           }
           elseif(strtolower($value=='moderate'))
           {
            $b_omrf["typicalcoumndterscaling-condition"]=8;
           }
           elseif(strtolower($value=='severe'))
           {
            $b_omrf["typicalcoumndterscaling-condition"]=16;
           }
           elseif(strtoupper($value=='NA'))
           {
            $b_omrf["typicalcoumndterscaling-condition"]=0;
           }
        } 
        if($key=="typicalcolumndeterR/fexpexp-conditon")
        {
           if(strtolower($value=='minor'))
           {
            $b_omrf["typicalcolumndeterR/fexpexp-conditon"]=4;
           }
           elseif(strtolower($value=='moderate'))
           {
            $b_omrf["typicalcolumndeterR/fexpexp-conditon"]=8;
           }
           elseif(strtolower($value=='severe'))
           {
            $b_omrf["typicalcolumndeterR/fexpexp-conditon"]=16;
           }
           elseif(strtoupper($value=='NA'))
           {
            $b_omrf["typicalcolumndeterR/fexpexp-conditon"]=0;
           }
        } 
        if($key=="typicalcolumndeterR/fcorro-conditon")
        {
           if(strtolower($value=='minor'))
           {
            $b_omrf["typicalcolumndeterR/fcorro-conditon"]=4;
           }
           elseif(strtolower($value=='moderate'))
           {
            $b_omrf["typicalcolumndeterR/fcorro-conditon"]=8;
           }
           elseif(strtolower($value=='severe'))
           {
            $b_omrf["typicalcolumndeterR/fcorro-conditon"]=16;
           }
           elseif(strtoupper($value=='NA'))
           {
            $b_omrf["typicalcolumndeterR/fcorro-conditon"]=0;
           }
        } 
        if($key=="typicalcolumndeterhoneycomb-condition")
        {
           if(strtolower($value=='minor'))
           {
            $b_omrf["typicalcolumndeterhoneycomb-condition"]=4;
           }
           elseif(strtolower($value=='moderate'))
           {
            $b_omrf["typicalcolumndeterhoneycomb-condition"]=8;
           }
           elseif(strtolower($value=='severe'))
           {
            $b_omrf["typicalcolumndeterhoneycomb-condition"]=16;
           }
           elseif(strtoupper($value=='NA'))
           {
            $b_omrf["typicalcolumndeterhoneycomb-condition"]=0;
           }
        } 

        // typical beam deterioration only for steel
       
        if($key=="steeltypicalcolumndeterrusting-condition")
        {
           if(strtolower($value=='minor'))
           {
            $b_omrf["steeltypicalcolumndeterrusting-condition"]=2;
           }
           elseif(strtolower($value=='moderate'))
           {
            $b_omrf["steeltypicalcolumndeterrusting-condition"]=4;
           }
           elseif(strtolower($value=='severe'))
           {
            $b_omrf["steeltypicalcolumndeterrusting-condition"]=8;
           }
           elseif(strtoupper($value=='NA'))
           {
            $b_omrf["steeltypicalcolumndeterrusting-condition"]=0;
           }
        } 
       
        if($key=="steeltypicalcolumndeterflaking-condition")
        {
           if(strtolower($value=='minor'))
           {
            $b_omrf["steeltypicalcolumndeterflaking-condition"]=2;
           }
           elseif(strtolower($value=='moderate'))
           {
            $b_omrf["steeltypicalcolumndeterflaking-condition"]=4;
           }
           elseif(strtolower($value=='severe'))
           {
            $b_omrf["steeltypicalcolumndeterflaking-condition"]=8;
           }
           elseif(strtoupper($value=='NA'))
           {
            $b_omrf["steeltypicalcolumndeterflaking-condition"]=0;
           }
        } 
        if($key=="steeltypicalcolumndeteryeilding-condition")
        {
           if(strtolower($value=='minor'))
           {
            $b_omrf["steeltypicalcolumndeteryeilding-condition"]=2;
           }
           elseif(strtolower($value=='moderate'))
           {
            $b_omrf["steeltypicalcolumndeteryeilding-condition"]=4;
           }
           elseif(strtolower($value=='severe'))
           {
            $b_omrf["steeltypicalcolumndeteryeilding-condition"]=8;
           }
           elseif(strtoupper($value=='NA'))
           {
            $b_omrf["steeltypicalcolumndeteryeilding-condition"]=0;
           }
        } 
        if($key=="steeltypicalcolumndeterbuckling-condition")
        {
           if(strtolower($value=='minor'))
           {
            $b_omrf["steeltypicalcolumndeterbuckling-condition"]=2;
           }
           elseif(strtolower($value=='moderate'))
           {
            $b_omrf["steeltypicalcolumndeterbuckling-condition"]=4;
           }
           elseif(strtolower($value=='severe'))
           {
            $b_omrf["steeltypicalcolumndeterbuckling-condition"]=8;
           }
           elseif(strtoupper($value=='NA'))
           {
            $b_omrf["steeltypicalcolumndeterbuckling-condition"]=0;
           }
        } 
    //    Typical Slab Deterioation
    if($key=="typicalslabdetercracks-condition")
        {
           if(strtolower($value=='minor'))
           {
            $b_omrf["typicalslabdetercracks-condition"]=2;
           }
           elseif(strtolower($value=='moderate'))
           {
            $b_omrf["typicalslabdetercracks-condition"]=4;
           }
           elseif(strtolower($value=='severe'))
           {
            $b_omrf["typicalslabdetercracks-condition"]=8;
           }
           elseif(strtoupper($value=='NA'))
           {
            $b_omrf["typicalslabdetercracks-condition"]=0;
           }
        } 
    if($key=="typicalslabdeterscaling-condition")
        {
           if(strtolower($value=='minor'))
           {
            $b_omrf["typicalslabdeterscaling-condition"]=2;
           }
           elseif(strtolower($value=='moderate'))
           {
            $b_omrf["typicalslabdeterscaling-condition"]=4;
           }
           elseif(strtolower($value=='severe'))
           {
            $b_omrf["typicalslabdeterscaling-condition"]=8;
           }
           elseif(strtoupper($value=='NA'))
           {
            $b_omrf["typicalslabdeterscaling-condition"]=0;
           }
        } 
    if($key=="typicalslabdeterR/fexp-condition")
        {
           if(strtolower($value=='minor'))
           {
            $b_omrf["typicalslabdeterR/fexp-condition"]=2;
           }
           elseif(strtolower($value=='moderate'))
           {
            $b_omrf["typicalslabdeterR/fexp-condition"]=4;
           }
           elseif(strtolower($value=='severe'))
           {
            $b_omrf["typicalslabdeterR/fexp-condition"]=8;
           }
           elseif(strtoupper($value=='NA'))
           {
            $b_omrf["typicalslabdeterR/fexp-condition"]=0;
           }
        } 
    if($key=="typicalslabdeterR/fcorro-condition")
        {
           if(strtolower($value=='minor'))
           {
            $b_omrf["typicalslabdeterR/fcorro-condition"]=2;
           }
           elseif(strtolower($value=='moderate'))
           {
            $b_omrf["typicalslabdeterR/fcorro-condition"]=4;
           }
           elseif(strtolower($value=='severe'))
           {
            $b_omrf["typicalslabdeterR/fcorro-condition"]=8;
           }
           elseif(strtoupper($value=='NA'))
           {
            $b_omrf["typicalslabdeterR/fcorro-condition"]=0;
           }
        } 
    if($key=="typicalslabdeterhoneycomb-condition")
        {
           if(strtolower($value=='minor'))
           {
            $b_omrf["typicalslabdeterhoneycomb-condition"]=2;
           }
           elseif(strtolower($value=='moderate'))
           {
            $b_omrf["typicalslabdeterhoneycomb-condition"]=4;
           }
           elseif(strtolower($value=='severe'))
           {
            $b_omrf["typicalslabdeterhoneycomb-condition"]=8;
           }
           elseif(strtoupper($value=='NA'))
           {
            $b_omrf["typicalslabdeterhoneycomb-condition"]=0;
           }
        } 

        // Typical Stair Deterioation
        if($key=="typicalstairdetercracks-condition")
        {
           if(strtolower($value=='minor'))
           {
               $b_omrf["typicalstairdetercracks-condition"]=2;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_omrf["typicalstairdetercracks-condition"]=4;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_omrf["typicalstairdetercracks-condition"]=8;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_omrf["typicalstairdetercracks-condition"]=0;
           }
        } 

        if($key=="typicalstairdeterscaling-condition")
        {
           if(strtolower($value=='minor'))
           {
               $b_omrf["typicalstairdeterscaling-condition"]=2;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_omrf["typicalstairdeterscaling-condition"]=4;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_omrf["typicalstairdeterscaling-condition"]=8;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_omrf["typicalstairdeterscaling-condition"]=0;
           }
        } 
        
        if($key=="typicalstairdeterR/fexp-condition")
        {
           if(strtolower($value=='minor'))
           {
               $b_omrf["typicalstairdeterR/fexp-condition"]=2;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_omrf["typicalstairdeterR/fexp-condition"]=4;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_omrf["typicalstairdeterR/fexp-condition"]=8;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_omrf["typicalstairdeterR/fexp-condition"]=0;
           }
        } 
        if($key=="typicalstairdeterR/fcorro-condition")
        {
           if(strtolower($value=='minor'))
           {
               $b_omrf["typicalstairdeterR/fcorro-condition"]=2;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_omrf["typicalstairdeterR/fcorro-condition"]=4;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_omrf["typicalstairdeterR/fcorro-condition"]=8;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_omrf["typicalstairdeterR/fcorro-condition"]=0;
           }
        } 
        if($key=="typicalstairdeterhoneycomb-conditio")
        {
           if(strtolower($value=='minor'))
           {
               $b_omrf["typicalstairdeterhoneycomb-conditio"]=2;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_omrf["typicalstairdeterhoneycomb-conditio"]=4;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_omrf["typicalstairdeterhoneycomb-conditio"]=8;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_omrf["typicalstairdeterhoneycomb-conditio"]=0;
           }
        } 
        // Typical Stair Deterioation only for steel
        if($key=="steeltypicalstairdeterrusting-condition")
        {
           if(strtolower($value=='minor'))
           {
               $b_omrf["steeltypicalstairdeterrusting-condition"]=2;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_omrf["steeltypicalstairdeterrusting-condition"]=4;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_omrf["steeltypicalstairdeterrusting-condition"]=8;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_omrf["steeltypicalstairdeterrusting-condition"]=0;
           }
        } 
        if($key=="steeltypicalstairdeterflaking-condition")
        {
           if(strtolower($value=='minor'))
           {
               $b_omrf["steeltypicalstairdeterflaking-condition"]=2;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_omrf["steeltypicalstairdeterflaking-condition"]=4;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_omrf["steeltypicalstairdeterflaking-condition"]=8;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_omrf["steeltypicalstairdeterflaking-condition"]=0;
           }
        } 
        if($key=="steeltypicalstairdeteryielding-condition")
        {
           if(strtolower($value=='minor'))
           {
               $b_omrf["steeltypicalstairdeteryielding-condition"]=2;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_omrf["steeltypicalstairdeteryielding-condition"]=4;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_omrf["steeltypicalstairdeteryielding-condition"]=8;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_omrf["steeltypicalstairdeteryielding-condition"]=0;
           }
        } 
        if($key=="steeltypicalstairdeterbuckling-condition")
        {
           if(strtolower($value=='minor'))
           {
               $b_omrf["steeltypicalstairdeterbuckling-condition"]=2;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_omrf["steeltypicalstairdeterbuckling-condition"]=4;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_omrf["steeltypicalstairdeterbuckling-condition"]=8;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_omrf["steeltypicalstairdeterbuckling-condition"]=0;
           }
        } 
        

    }
$id=$row['id'];
$sum= 0;
foreach ($b_omrf as $number){
  $sum += $number;
}

$query2="UPDATE `omrf` SET `sum`='$sum' WHERE id=$id";
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
        <h1>Building Structure-OMRF</h1>
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
    $result2 = mysqli_query($conn, "SELECT `sum`  FROM `omrf` WHERE userhosbuild='$value'");
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

<!-- 
    database colum not present
    short captive column
    lateral column drift
    Typical Coupling Beam Deterioation
    Typical Shear wall Deterioation
-->