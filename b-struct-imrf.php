<?php
$conn = new mysqli("localhost", "root", "", "erd-of-seismic");

$result = mysqli_query($conn, "SELECT * FROM `intrf` ");

$num= mysqli_num_rows($result);

if($num>0)
{
$b_imrf=array();
while($row = mysqli_fetch_assoc($result))
{
    echo "\n";
    // loop through each column
    foreach($row as $key => $value){
        if($key=="priorintervention-presence")
        {
            if(strtolower($value)=="yes"){
                $b_imrf["priorintervention-presence"]=0;
            }else{
                $b_imrf["priorintervention-presence"]=0;
            }
        }
        if($key=="priorintervention-condition")
        {
           if(strtolower($value=='poor'))
           {
               $b_imrf["priorintervention-condition"]=8;
           }
           elseif(strtolower($value=='average'))
           {
               $b_imrf["priorintervention-condition"]=4;
           }
           elseif(strtolower($value=='good'))
           {
               $b_imrf["priorintervention-condition"]=0;
           }
        } 
        if($key=="presenceofexpancsionjoint")
        {
            if(strtolower($value)=="yes"){
                $b_imrf["presenceofexpancsionjoint"]=0;
            }else{
                $b_imrf["presenceofexpancsionjoint"]=0;
            }
        }
        if($key=="expansionjoint-condition")
        {
           if(strtolower($value=='poor'))
           {
               $b_imrf["expansionjoint-condition"]=4;
           }
           elseif(strtolower($value=='average'))
           {
               $b_imrf["expansionjoint-condition"]=2;
           }
           elseif(strtolower($value=='good'))
           {
               $b_imrf["expansionjoint-condition"]=0;
           }
        } 

        if($key=="foundationsettlement-presence")
        {
            if(strtolower($value)=="yes"){
                $b_imrf["foundationsettlement-presence"]=0;
            }else{
                $b_imrf["foundationsettlement-presence"]=0;
            }
        }
        if($key=="")
        {
           if(strtolower($value=='poor'))
           {
               $b_imrf["foundationsettlement-condition"]=8;
           }
           elseif(strtolower($value=='average'))
           {
               $b_imrf["foundationsettlement-condition"]=4;
           }
           elseif(strtolower($value=='good'))
           {
               $b_imrf["foundationsettlement-condition"]=0;
           }
        } 

        if($key=="reentrantcorner-presence")
        {
            if(strtolower($value)=="yes"){
                $b_imrf["reentrantcorner-presence"]=8;
            }else{
                $b_imrf["reentrantcorner-presence"]=0;
            }
        }

        if($key=="nonparralellsystem-presence")
        {
            if(strtolower($value)=="yes"){
                $b_imrf["nonparralellsystem-presence"]=8;
            }else{
                $b_imrf["nonparralellsystem-presence"]=0;
            }
        }

        if($key=="outofplaneoffset-presence")
        {
            if(strtolower($value)=="yes"){
                $b_imrf["outofplaneoffset-presence"]=8;
            }else{
                $b_imrf["outofplaneoffset-presence"]=0;
            }
        }
        if($key=="torsionirregularity-presence")
        {
            if(strtolower($value)=="yes"){
                $b_imrf["torsionirregularity-presence"]=16;
            }else{
                $b_imrf["torsionirregularity-presence"]=0;
            }
        }
        if($key=="slabopening-presence")
        {
            if(strtolower($value)=="yes"){
                $b_imrf["slabopening-presence"]=8;
            }else{
                $b_imrf["slabopening-presence"]=0;
            }
        }
        if($key=="presenceofcantilever")
        {
            if(strtolower($value)=="yes"){
                $b_imrf["presenceofcantilever"]=4;
            }else{
                $b_imrf["presenceofcantilever"]=0;
            }
        }
    
        if($key=="presenceofcantilever")
        {
            if(strtolower($value)=="yes"){
                $b_imrf["presenceofcantilever"]=4;
            }else{
                $b_imrf["presenceofcantilever"]=0;
            }
        }

        if($key=="visibledeflectionofbeams-presence")
        {
            if(strtolower($value)=="yes"){
                $b_imrf["visibledeflectionofbeams-presence"]=4;
            }else{
                $b_imrf["visibledeflectionofbeams-presence"]=0;
            }
        }
        if($key=="visibledeflectionofslab-presence")
        {
            if(strtolower($value)=="yes"){
                $b_imrf["visibledeflectionofslab-presence"]=4;
            }else{
                $b_imrf["visibledeflectionofslab-presence"]=0;
            }
        }
        if($key=="diaphragmcontinuity-presence")
        {
            if(strtolower($value)=="yes"){
                $b_imrf["diaphragmcontinuity-presence"]=8;
            }else{
                $b_imrf["diaphragmcontinuity-presence"]=0;
            }
        }
        if($key=="setback-presence")
        {
            if(strtolower($value)=="yes"){
                $b_imrf["setback-presence"]=0;
            }else{
                $b_imrf["setback-presence"]=0;
            }
        }
        if($key=="setback-discontinuity")
        {
           if(strtolower($value=='outwards'))
           {
               $b_imrf["setback-discontinuity"]=16;
           }
           elseif(strtolower($value=='inward'))
           {
               $b_imrf["setback-discontinuity"]=8;
           }
           elseif(strtolower($value=='in-plane'))
           {
               $b_imrf["setback-discontinuity"]=4;
           }
        }
        
        if($key=="completeloadpath-presence")
        {
            if(strtolower($value)=="yes"){
                $b_imrf["completeloadpath-presence"]=0;
            }else{
                $b_imrf["completeloadpath-presence"]=4;
            }
        }
        if($key=="redundancy-presence")
        {
            if(strtolower($value)=="yes"){
                $b_imrf["redundancy-presence"]=0;
            }else{
                $b_imrf["redundancy-presence"]=4;
            }
        }

        if($key=="weakstory-presence")
        {
            if(strtolower($value)=="yes"){
                $b_imrf["weakstory-presence"]=16;
            }else{
                $b_imrf["weakstory-presence"]=0;
            }
        }
        if($key=="verticaldiscontinuity-presence")
        {
            if(strtolower($value)=="yes"){
                $b_imrf["verticaldiscontinuity-presence"]=4;
            }else{
                $b_imrf["verticaldiscontinuity-presence"]=0;
            }
        }
        if($key=="pounding-presence")
        {
            if(strtolower($value)=="yes"){
                $b_imrf["pounding-presence"]=0;
            }else{
                $b_imrf["pounding-presence"]=0;
            }
        }
        // pounding yes conditions table in db
        if($key=="strongcolumnweakbeam-presence")
        {
            if(strtolower($value)=="yes"){
                $b_imrf["strongcolumnweakbeam-presence"]=0;
            }else{
                $b_imrf["strongcolumnweakbeam-presence"]=8;
            }
        }
        if($key=="massirregularity-presence")
        {
            if(strtolower($value)=="yes"){
                $b_imrf["massirregularity-presence"]=4;
            }else{
                $b_imrf["massirregularity-presence"]=0;
            }
        }
        if($key=="transfertoshearwall-presence")
        {
            if(strtolower($value)=="yes"){
                $b_imrf["transfertoshearwall-presence"]=0;
            }else{
                $b_imrf["transfertoshearwall-presence"]=4;
            }
        }
        if($key=="noflatslabframes-presence")
        {
            if(strtolower($value)=="yes"){
                $b_imrf["noflatslabframes-presence"]=0;
            }else{
                $b_imrf["noflatslabframes-presence"]=8;
            }
        }
        
        if($key=="short/captivecolumn-presence")
        {
            if(strtolower($value)=="yes"){
                $b_imrf["short/captivecolumn-presence"]=8;
            }else{
                $b_imrf["short/captivecolumn-presence"]=0;
            }
        }
        
        if($key=="lateralcolumndrift-presence")
        {
            if(strtolower($value)=="yes"){
                $b_imrf["lateralcolumndrift-presence"]=4;
            }else{
                $b_imrf["lateralcolumndrift-presence"]=0;
            }
        }
        if($key=="heighttothicknesswallratio-presence")
        {
            if(strtolower($value)=="yes"){
                $b_imrf["heighttothicknesswallratio-presence"]=4;
            }else{
                $b_imrf["heighttothicknesswallratio-presence"]=0;
            }
        }
        if($key=="theinfillwallarenotcavitywall-presence")
        {
            if(strtolower($value)=="yes"){
                $b_imrf["theinfillwallarenotcavitywall-presence"]=4;
            }else{
                $b_imrf["theinfillwallarenotcavitywall-presence"]=0;
            }
        }
        if($key=="openingadjtoshearwalls-presence")
        {
            if(strtolower($value)=="yes"){
                $b_imrf["openingadjtoshearwalls-presence"]=4;
            }else{
                $b_imrf["openingadjtoshearwalls-presence"]=0;
            }
        }
        if($key=="infillwallsarecontnous-presence")
        {
            if(strtolower($value)=="yes"){
                $b_imrf["infillwallsarecontnous-presence"]=0;
            }else{
                $b_imrf["infillwallsarecontnous-presence"]=4;
            }
        }
        if($key=="openingatexteriormasonary-presence")
        {
            if(strtolower($value)=="yes"){
                $b_imrf["openingatexteriormasonary-presence"]=4;
            }else{
                $b_imrf["openingatexteriormasonary-presence"]=0;
            }
        }
        // Typical Beam Deterioation
        if($key=="typicalbeamdetercracks-condition")
        {
           if(strtolower($value=='minor'))
           {
               $b_imrf["typicalbeamdetercracks-condition"]=2;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_imrf["typicalbeamdetercracks-condition"]=4;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_imrf["typicalbeamdetercracks-condition"]=8;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_imrf["typicalbeamdetercracks-condition"]=0;
           }
        } 
        if($key=="typicalbeamdeterscaling-condition")
        {
           if(strtolower($value=='minor'))
           {
               $b_imrf["typicalbeamdeterscaling-condition"]=2;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_imrf["typicalbeamdeterscaling-condition"]=4;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_imrf["typicalbeamdeterscaling-condition"]=8;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_imrf["typicalbeamdeterscaling-condition"]=0;
           }
        } 
        if($key=="typicalbeamdeterR/fexp-condition")
        {
           if(strtolower($value=='minor'))
           {
               $b_imrf["typicalbeamdeterR/fexp-condition"]=2;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_imrf["typicalbeamdeterR/fexp-condition"]=4;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_imrf["typicalbeamdeterR/fexp-condition"]=8;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_imrf["typicalbeamdeterR/fexp-condition"]=0;
           }
        } 
        if($key=="typicalbeamdeterR/fcorro-condition")
        {
           if(strtolower($value=='minor'))
           {
               $b_imrf["typicalbeamdeterR/fcorro-condition"]=2;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_imrf["typicalbeamdeterR/fcorro-condition"]=4;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_imrf["typicalbeamdeterR/fcorro-condition"]=8;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_imrf["typicalbeamdeterR/fcorro-condition"]=0;
           }
        } 
        if($key=="typicalbeamdeterhoneycomb-condition")
        {
           if(strtolower($value=='minor'))
           {
               $b_imrf["typicalbeamdeterhoneycomb-condition"]=2;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_imrf["typicalbeamdeterhoneycomb-condition"]=4;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_imrf["typicalbeamdeterhoneycomb-condition"]=8;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_imrf["typicalbeamdeterhoneycomb-condition"]=0;
           }
        } 
        // Typical Beam Deterioation only for steel
        if($key=="steeltypicalbeamdeterrusting-condition")
        {
           if(strtolower($value=='minor'))
           {
               $b_imrf["steeltypicalbeamdeterrusting-condition"]=2;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_imrf["steeltypicalbeamdeterrusting-condition"]=4;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_imrf["steeltypicalbeamdeterrusting-condition"]=8;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_imrf["steeltypicalbeamdeterrusting-condition"]=0;
           }
        } 
        if($key=="steeltypicalbeamdeterflaking-condition")
        {
           if(strtolower($value=='minor'))
           {
               $b_imrf["steeltypicalbeamdeterflaking-condition"]=2;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_imrf["steeltypicalbeamdeterflaking-condition"]=4;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_imrf["steeltypicalbeamdeterflaking-condition"]=8;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_imrf["steeltypicalbeamdeterflaking-condition"]=0;
           }
        } 
        if($key=="steeltypicalbeamdeteryielding-condition")
        {
           if(strtolower($value=='minor'))
           {
               $b_imrf["steeltypicalbeamdeteryielding-condition"]=2;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_imrf["steeltypicalbeamdeteryielding-condition"]=4;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_imrf["steeltypicalbeamdeteryielding-condition"]=8;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_imrf["steeltypicalbeamdeteryielding-condition"]=0;
           }
        } 
        if($key=="steeltypicalbeamdeterbuckling-condition")
        {
           if(strtolower($value=='minor'))
           {
               $b_imrf["steeltypicalbeamdeterbuckling-condition"]=2;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_imrf["steeltypicalbeamdeterbuckling-condition"]=4;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_imrf["steeltypicalbeamdeterbuckling-condition"]=8;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_imrf["steeltypicalbeamdeterbuckling-condition"]=0;
           }
        } 
        // Typical Column Deterioation
        
        if($key=="typicalcolumndetercracks-condition")
        {
           if(strtolower($value=='minor'))
           {
               $b_imrf["typicalcolumndetercracks-condition"]=4;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_imrf["typicalcolumndetercracks-condition"]=8;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_imrf["typicalcolumndetercracks-condition"]=16;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_imrf["typicalcolumndetercracks-condition"]=0;
           }
        } 
        if($key=="typicalcolumndeterscaling-condition")
        {
           if(strtolower($value=='minor'))
           {
               $b_imrf["typicalcolumndeterscaling-condition"]=4;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_imrf["typicalcolumndeterscaling-condition"]=8;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_imrf["typicalcolumndeterscaling-condition"]=16;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_imrf["typicalcolumndeterscaling-condition"]=0;
           }
        } 
        if($key=="typicalcolumndeterr/fexp-condition")
        {
           if(strtolower($value=='minor'))
           {
               $b_imrf["typicalcolumndeterr/fexp-condition"]=4;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_imrf["typicalcolumndeterr/fexp-condition"]=8;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_imrf["typicalcolumndeterr/fexp-condition"]=16;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_imrf["typicalcolumndeterr/fexp-condition"]=0;
           }
        } 
        if($key=="typicalcolumndeterr/fcorro-condition")
        {
           if(strtolower($value=='minor'))
           {
               $b_imrf["typicalcolumndeterr/fcorro-condition"]=4;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_imrf["typicalcolumndeterr/fcorro-condition"]=8;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_imrf["typicalcolumndeterr/fcorro-condition"]=16;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_imrf["typicalcolumndeterr/fcorro-condition"]=0;
           }
        } 
        if($key=="typicalcolumndeterhoneycomb-condition")
        {
           if(strtolower($value=='minor'))
           {
               $b_imrf["typicalcolumndeterhoneycomb-condition"]=4;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_imrf["typicalcolumndeterhoneycomb-condition"]=8;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_imrf["typicalcolumndeterhoneycomb-condition"]=16;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_imrf["typicalcolumndeterhoneycomb-condition"]=0;
           }
        } 
        // Typical Column Deterioation only for steel
        if($key=="steeltypicalcolumndeterrustinng-condition")
        {
           if(strtolower($value=='minor'))
           {
               $b_imrf["steeltypicalcolumndeterrustinng-condition"]=2;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_imrf["steeltypicalcolumndeterrustinng-condition"]=4;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_imrf["steeltypicalcolumndeterrustinng-condition"]=8;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_imrf["steeltypicalcolumndeterrustinng-condition"]=0;
           }
        } 
        if($key=="steeltypicalcolumndeterflaking-condition")
        {
           if(strtolower($value=='minor'))
           {
               $b_imrf["steeltypicalcolumndeterflaking-condition"]=2;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_imrf["steeltypicalcolumndeterflaking-condition"]=4;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_imrf["steeltypicalcolumndeterflaking-condition"]=8;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_imrf["steeltypicalcolumndeterflaking-condition"]=0;
           }
        } 
        if($key=="steeltypicalcolumndeteryielding-condition")
        {
           if(strtolower($value=='minor'))
           {
               $b_imrf["steeltypicalcolumndeteryielding-condition"]=2;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_imrf["steeltypicalcolumndeteryielding-condition"]=4;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_imrf["steeltypicalcolumndeteryielding-condition"]=8;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_imrf["steeltypicalcolumndeteryielding-condition"]=0;
           }
        } 
        if($key=="steeltypicalcolumndeterbuckling-condition")
        {
           if(strtolower($value=='minor'))
           {
               $b_imrf["steeltypicalcolumndeterbuckling-condition"]=2;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_imrf["steeltypicalcolumndeterbuckling-condition"]=4;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_imrf["steeltypicalcolumndeterbuckling-condition"]=8;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_imrf["steeltypicalcolumndeterbuckling-condition"]=0;
           }
        } 
        // Typical Slab Deterioation
        if($key=="typicalslabdetercracks-condition")
        {
           if(strtolower($value=='minor'))
           {
               $b_imrf["typicalslabdetercracks-condition"]=2;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_imrf["typicalslabdetercracks-condition"]=4;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_imrf["typicalslabdetercracks-condition"]=8;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_imrf["typicalslabdetercracks-condition"]=0;
           }
        } 
        if($key=="typicalslabdeterscaling-condition")
        {
           if(strtolower($value=='minor'))
           {
               $b_imrf["typicalslabdeterscaling-condition"]=2;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_imrf["typicalslabdeterscaling-condition"]=4;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_imrf["typicalslabdeterscaling-condition"]=8;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_imrf["typicalslabdeterscaling-condition"]=0;
           }
        } 
        if($key=="typicalslabdeterr/fexp-condition")
        {
           if(strtolower($value=='minor'))
           {
               $b_imrf["typicalslabdeterr/fexp-condition"]=2;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_imrf["typicalslabdeterr/fexp-condition"]=4;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_imrf["typicalslabdeterr/fexp-condition"]=8;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_imrf["typicalslabdeterr/fexp-condition"]=0;
           }
        } 
        if($key=="typicalslabdeterr/fcorro-condition")
        {
           if(strtolower($value=='minor'))
           {
               $b_imrf["typicalslabdeterr/fcorro-condition"]=2;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_imrf["typicalslabdeterr/fcorro-condition"]=4;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_imrf["typicalslabdeterr/fcorro-condition"]=8;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_imrf["typicalslabdeterr/fcorro-condition"]=0;
           }
        } 
        if($key=="typicalslabdeterhoneycomb-condition")
        {
           if(strtolower($value=='minor'))
           {
               $b_imrf["typicalslabdeterhoneycomb-condition"]=2;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_imrf["typicalslabdeterhoneycomb-condition"]=4;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_imrf["typicalslabdeterhoneycomb-condition"]=8;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_imrf["typicalslabdeterhoneycomb-condition"]=0;
           }
        } 
        // Typical Stair Deterioation
       
        if($key=="typicalstairdetercracks-condition")
        {
           if(strtolower($value=='minor'))
           {
               $b_imrf["typicalstairdetercracks-condition"]=2;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_imrf["typicalstairdetercracks-condition"]=4;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_imrf["typicalstairdetercracks-condition"]=8;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_imrf["typicalstairdetercracks-condition"]=0;
           }
        } 
        if($key=="typicalstairdeterscaling-condition")
        {
           if(strtolower($value=='minor'))
           {
               $b_imrf["typicalstairdeterscaling-condition"]=2;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_imrf["typicalstairdeterscaling-condition"]=4;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_imrf["typicalstairdeterscaling-condition"]=8;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_imrf["typicalstairdeterscaling-condition"]=0;
           }
        } 
        if($key=="typicalstairdeterr/fexp-condition")
        {
           if(strtolower($value=='minor'))
           {
               $b_imrf["typicalstairdeterr/fexp-condition"]=2;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_imrf["typicalstairdeterr/fexp-condition"]=4;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_imrf["typicalstairdeterr/fexp-condition"]=8;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_imrf["typicalstairdeterr/fexp-condition"]=0;
           }
        } 
        if($key=="typicalstairdeterr/fcorro-condition")
        {
           if(strtolower($value=='minor'))
           {
               $b_imrf["typicalstairdeterr/fcorro-condition"]=2;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_imrf["typicalstairdeterr/fcorro-condition"]=4;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_imrf["typicalstairdeterr/fcorro-condition"]=8;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_imrf["typicalstairdeterr/fcorro-condition"]=0;
           }
        } 
        if($key=="typicalstairdeterhoneycomb-condition")
        {
           if(strtolower($value=='minor'))
           {
               $b_imrf["typicalstairdeterhoneycomb-condition"]=2;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_imrf["typicalstairdeterhoneycomb-condition"]=4;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_imrf["typicalstairdeterhoneycomb-condition"]=8;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_imrf["typicalstairdeterhoneycomb-condition"]=0;
           }
        } 
        // Typical Stair Deterioation only for steel
        if($key=="")
        {
           if(strtolower($value=='minor'))
           {
               $b_imrf["steeltypicalstairdeterrusting-condtion"]=2;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_imrf["steeltypicalstairdeterrusting-condtion"]=4;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_imrf["steeltypicalstairdeterrusting-condtion"]=8;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_imrf["steeltypicalstairdeterrusting-condtion"]=0;
           }
        } 
        if($key=="steeltypicalstairdeterflaking-condtion")
        {
           if(strtolower($value=='minor'))
           {
               $b_imrf["steeltypicalstairdeterflaking-condtion"]=2;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_imrf["steeltypicalstairdeterflaking-condtion"]=4;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_imrf["steeltypicalstairdeterflaking-condtion"]=8;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_imrf["steeltypicalstairdeterflaking-condtion"]=0;
           }
        } 
        if($key=="steeltypicalstairdeteryielding-condtion")
        {
           if(strtolower($value=='minor'))
           {
               $b_imrf["steeltypicalstairdeteryielding-condtion"]=2;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_imrf["steeltypicalstairdeteryielding-condtion"]=4;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_imrf["steeltypicalstairdeteryielding-condtion"]=8;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_imrf["steeltypicalstairdeteryielding-condtion"]=0;
           }
        } 

        if($key=="steeltypicalstairdeterbuckling-condtion")
        {
           if(strtolower($value=='minor'))
           {
               $b_imrf["steeltypicalstairdeterbuckling-condtion"]=2;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_imrf["steeltypicalstairdeterbuckling-condtion"]=4;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_imrf["steeltypicalstairdeterbuckling-condtion"]=8;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_imrf["steeltypicalstairdeterbuckling-condtion"]=0;
           }
        } 

        // Typical Coupling Beam Deterioation
        if($key=="typicalcouplingbeamdetercracks-condition")
        {
           if(strtolower($value=='minor'))
           {
               $b_imrf["typicalcouplingbeamdetercracks-condition"]=4;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_imrf["typicalcouplingbeamdetercracks-condition"]=8;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_imrf["typicalcouplingbeamdetercracks-condition"]=16;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_imrf["typicalcouplingbeamdetercracks-condition"]=0;
           }
        } 
        if($key=="typicalcouplingbeamdeterscaling-condition")
        {
           if(strtolower($value=='minor'))
           {
               $b_imrf["typicalcouplingbeamdeterscaling-condition"]=4;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_imrf["typicalcouplingbeamdeterscaling-condition"]=8;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_imrf["typicalcouplingbeamdeterscaling-condition"]=16;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_imrf["typicalcouplingbeamdeterscaling-condition"]=0;
           }
        } 
        if($key=="typicalcouplingbeamdeterr/fexp-condition")
        {
           if(strtolower($value=='minor'))
           {
               $b_imrf["typicalcouplingbeamdeterr/fexp-condition"]=4;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_imrf["typicalcouplingbeamdeterr/fexp-condition"]=8;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_imrf["typicalcouplingbeamdeterr/fexp-condition"]=16;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_imrf["typicalcouplingbeamdeterr/fexp-condition"]=0;
           }
        } 
        if($key=="typicalcouplingbeamdeterr/fcorro-condition")
        {
           if(strtolower($value=='minor'))
           {
               $b_imrf["typicalcouplingbeamdeterr/fcorro-condition"]=4;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_imrf["typicalcouplingbeamdeterr/fcorro-condition"]=8;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_imrf["typicalcouplingbeamdeterr/fcorro-condition"]=16;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_imrf["typicalcouplingbeamdeterr/fcorro-condition"]=0;
           }
        } 
        if($key=="typicalcouplingbeamdeterhoneycomb-condition")
        {
           if(strtolower($value=='minor'))
           {
               $b_imrf["typicalcouplingbeamdeterhoneycomb-condition"]=4;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_imrf["typicalcouplingbeamdeterhoneycomb-condition"]=8;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_imrf["typicalcouplingbeamdeterhoneycomb-condition"]=16;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_imrf["typicalcouplingbeamdeterhoneycomb-condition"]=0;
           }
        } 
        // Typical Shear wall Deterioation
        if($key=="typicalshearwalldetercracks-condition")
        {
           if(strtolower($value=='minor'))
           {
               $b_imrf["typicalshearwalldetercracks-condition"]=4;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_imrf["typicalshearwalldetercracks-condition"]=8;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_imrf["typicalshearwalldetercracks-condition"]=16;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_imrf["typicalshearwalldetercracks-condition"]=0;
           }
        } 
        if($key=="typicalshearwalldeterscaling-condition")
        {
           if(strtolower($value=='minor'))
           {
               $b_imrf["typicalshearwalldeterscaling-condition"]=4;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_imrf["typicalshearwalldeterscaling-condition"]=8;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_imrf["typicalshearwalldeterscaling-condition"]=16;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_imrf["typicalshearwalldeterscaling-condition"]=0;
           }
        } 
        if($key=="typicalshearwalldeterr/fexp-condition")
        {
           if(strtolower($value=='minor'))
           {
               $b_imrf["typicalshearwalldeterr/fexp-condition"]=4;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_imrf["typicalshearwalldeterr/fexp-condition"]=8;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_imrf["typicalshearwalldeterr/fexp-condition"]=16;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_imrf["typicalshearwalldeterr/fexp-condition"]=0;
           }
        } 
        if($key=="typicalshearwalldeterr/fcorro-condition")
        {
           if(strtolower($value=='minor'))
           {
               $b_imrf["typicalshearwalldeterr/fcorro-condition"]=4;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_imrf["typicalshearwalldeterr/fcorro-condition"]=8;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_imrf["typicalshearwalldeterr/fcorro-condition"]=16;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_imrf["typicalshearwalldeterr/fcorro-condition"]=0;
           }
        } 
        if($key=="typicalshearwalldeterhoneycomb-condition")
        {
           if(strtolower($value=='minor'))
           {
               $b_imrf["typicalshearwalldeterhoneycomb-condition"]=4;
           }
           elseif(strtolower($value=='moderate'))
           {
               $b_imrf["typicalshearwalldeterhoneycomb-condition"]=8;
           }
           elseif(strtolower($value=='severe'))
           {
               $b_imrf["typicalshearwalldeterhoneycomb-condition"]=16;
           }
           elseif(strtoupper($value=='NA'))
           {
              $b_imrf["typicalshearwalldeterhoneycomb-condition"]=0;
           }
        } 
    }
$id=$row['id'];
$sum= 0;
foreach ($b_imrf as $number){
  $sum += $number;
}
// echo $sum."==this is the sum------";
// print_r($b_imrf);
// echo "<br> <br>";

$query2="UPDATE `intrf` SET `sum`='$sum' WHERE id=$id";
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
        <h1>Building Structure-IMRF</h1>
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
    $result2 = mysqli_query($conn, "SELECT `sum`  FROM `intrf` WHERE userhosbuild='$value'");
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


<!-- db table not present
    soft story 
 -->
