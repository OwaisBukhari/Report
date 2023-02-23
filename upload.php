<?php
$upload_dir = "uploads/";

//loop through all file inputs
foreach($_FILES as $file_name => $file_array){
    $file_tmp = $file_array['tmp_name'];
    $file_ext=strtolower(end(explode('.',$file_array['name'])));
    print_r($_FILES['m']);

    $extensions= array("jpeg","jpg","png");
    $errors= array();

    if(in_array($file_ext,$extensions)=== false){
       $errors[]="extension not allowed, please choose a JPEG or PNG file.";
    }
 
    if(empty($errors)==true) {
       move_uploaded_file($file_tmp,$upload_dir.$file_array['name']);
       echo "Success";
    }else{
       print_r($errors);
    }
}

?>

<!-- # <!DOCTYPE html>
# <html lang="en">
# <head>
#     <meta charset="UTF-8">
#     <meta http-equiv="X-UA-Compatible" content="IE=edge">
#     <meta name="viewport" content="width=device-width, initial-scale=1.0">
#     <title>Document</title>
# </head>
# <body>
    
#     <form action="" enctype="multipart/form-data" method="POST">
#         <div>
#             <label for="file1">Upload File 1:</label>
#             <input type="file" id="file1" name="file1">
#         </div>
#         <div>
#             <label for="file2">Upload File 2:</label>
#             <input type="file" id="file2" name="file2">
#         </div>
#         <div>
#             <label for="file3">Upload File 3:</label>
#             <input type="file" id="file3" name="file3">
#         </div>
#         <div>
#             <label for="file4">Upload File 4:</label>
#             <input type="file" id="file4" name="file4">
#         </div>
#         <div>
#             <label for="file5">Upload File 5:</label>
#             <input type="file" id="file5" name="file5">
#         </div>
#         <div>
#             <label for="file6">Upload File 6:</label>
#             <input type="file" id="file6" name="file6">
#         </div>
#         <div>
#             <label for="file7">Upload File 7:</label>
#             <input type="file" id="file7" name="file7">
#         </div>
#         <div>
#             <label for="file8">Upload File 8:</label>
#             <input type="file" id="file8" name="file8">
#         </div>
#         <div>
#             <label for="file9">Upload File 9:</label>
#             <input type="file" id="file9" name="file9">
#         </div>
#         <div>
#             <label for="file10">Upload File 10:</label>
#             <input type="file" id="file10" name="file10">
#         </div>
#         <div>
#             <input type="submit" value="Upload Files">
#         </div>
#     </form>
# </body>
# </html> --> 

<?php

// ITS IS FOR BUILDFING ARCHITECURAL REPORT

$conn = new mysqli("localhost", "root", "", "erd-of-seismic");
# if ($conn->connect_error) {
#     die("Connection failed: " . $conn->connect_error);
# }

# $sql = "SELECT `username`, `typicalstoryheight`, `architecturaldrawing`, `boundarypartitionwall-present`, `boundarypartitionwall-condition`, `boundarypartitionwall-picture`, `falseceiling-present`, `falseceiling-type`, `falseceiling-condition`, `falseceiling-picture`, `windowsizetypical-length`, `windowsizetypical-height`, `windowsizetypical-condition`, `windowsizetypical-picture`, `doorsizetypical-length`, `doorsizetypical-height`, `doorsizetypical-condition`, `doorsizetypical-picture`, `staircase-width`, `staircase-type`, `staircase-condition`, `staircase-picture`, `passageway-type`, `passageway-width`, `passageway-condition`, `passageway-picture`, `facade-present`, `facade-type`, `facade-condition`, `facade-picture`, `visiblecracks-present`, `visiblecracks-condition`, `visiblecracks-picture`, `qualityofconstruc-present`, `qualityofconstruc-condtion`, `qualityofconstruc-picture`, `priordamageoccured-present`, `priordamageoccured-document`, `priordamageoccured-repaired`, `priordamageoccured-condition`, `priordamageoccured-picture`, `overallcondition-condition`, `overallcondition-remarks`, `overallcondition-picture`, `elevator-present`, `elevator-capacity`, `elevator-condition`, `elevator-enclosure`, `elevator-enclosurecondition`, `elevator-picture`, `serviceelevator-present`, `serviceelevator-capacity`, `serviceelevator-condition`, `serviceelevator-enclosure`, `serviceelevator-enclosurecondition`, `serviceelevator-picture`, `userhosp`, `timestamp`, `userhosbuild` FROM `buidlingarchitectural` WHERE `id`='173'";
# $result = $conn->query($sql);

# if ($result->num_rows > 0) {
#     while($row = $result->fetch_assoc()) {
#         foreach ($row as $key => $value) {
#             switch ($value) {
#                 case "poor":
#                     $row[$key] = 1;
#                     echo "poor".$key."=========1"."\n";
#                     break;
#                 case "moderate":
#                     $row[$key] = 2;
#                     echo "moderate".$key."=========2"."\n";
#                     break;
#                 case "good":
#                     $row[$key] = 3;
#                     echo "good".$key."=========3"."\n";
#                     break;
#             }
#         }
#     }
    
# } else {
#     echo "0 results";
# }

// ------------------------------------------



// ---------------------ITS IS FOR Building Hazard REPORT

    # // Connect to the database
    # // $conn = mysqli_connect("hostname", "username", "password", "database_name");
    # // Query the database
    # $result = mysqli_query($conn, "SELECT * FROM `buidlinghazard` WHERE `id`='171'");
    # // Fetch the results
    # while($row = mysqli_fetch_assoc($result)){
    #     echo "\n";
    #     // loop through each column
    #     foreach($row as $key => $value){
    #         echo "\n";
    #         // Check the value in the column
    #         if($value == "poor"){
    #             $number = 1;
    #             echo $key."]]]]]]]]]]]]]]".$number;
    #         }elseif($value == "moderate"){
    #             $number = 2;
    #             echo $key."]]]]]]]]]]]]]]".$number;
    #         }elseif($value == "good"){
    #             $number = 3;
    #             echo $key."]]]]]]]]]]]]]]".$number;
    #         }
    #         // Update the row with the new value

    #     }
    # }



// ------------------------------------------



    # // Connect to the database
    #  $conn = mysqli_connect("hostname", "username", "password", "database_name");
    #  Query the database
$result = mysqli_query($conn, "SELECT * FROM `haz-ident`");

$num= mysqli_num_rows($result);


if($num>0)
{

    // Fetch the results
    $hazident=array();
    while($row = mysqli_fetch_assoc($result)){
        echo "\n";
        // loop through each column
        foreach($row as $key => $value){
            echo "\n";
            // Check the value in the column
            if($key=="PossibilityofUrbanFlood"){
               if(strtolower($value)=="yes"){
                # 

                $hazident["PossibilityofUrbanFlood"]=8;

               }else{
                # echo "No thaaaaaa";
                 $hazident["PossibilityofUrbanFlood"]=0;
               }
            }

            if($key=="PossibilityofFireHaz"){
                 if(strtolower($value)=="yes"){
                $hazident["PossibilityofFireHaz"]=16;
               }else{
                $hazident["PossibilityofFireHaz"]=0;
               }

            }if($key=="PossibilityofFireHaz"){
                 if(strtolower($value)=="yes"){
                $hazident["PossibilityofFireHaz"]=8;
               }else{
                $hazident["PossibilityofFireHaz"]=0;
                }
            }
            if($key=="buildingterrain"){
                 if(strtolower($value)=="plain"){
                $hazident["PossibilityofFireHaz"]=0;
               }elseif(strtolower($value)=="mildslope"){
                $hazident["PossibilityofFireHaz"]=8;
                }elseif(strtolower($value)=="steepslope"){
                $hazident["PossibilityofFireHaz"]=16;
                }
            }

               
            if($key=="waterstoragesystemp-resent"){
                    if(strtolower($value)=="yes"){
                    $hazident["waterstoragesystemp-resent"]=0;
                    }elseif(strtolower($value)=="no"){
                    $hazident["waterstoragesystemp-resent"]=8;

                    

                   
                    }
                }if($key=="coolingplant-present"){
                    if(strtolower($value)=="yes"){
                    $hazident["coolingplant-present"]=0;
                    }elseif(strtolower($value)=="no"){

                    

                    $hazident["coolingplant-present"]=8;
                    }
                }if($key=="powersupplysys-present"){
                    if(strtolower($value)=="yes"){
                    
                    $hazident["powersupplysys-present"]=0;
                    }elseif(strtolower($value)=="no"){
                    $hazident["powersupplysys-present"]=8;

                    }

                  
                }if($key=="fuelstorage-present"){
                    if(strtolower($value)=="yes"){
                    $hazident["fuelstorage-present"]=0;
                    }elseif(strtolower($value)=="no"){
                    $hazident["fuelstorage-present"]=8;
                    }


                    

                   
                }if($key=="oxygenplant-present"){
                    if(strtolower($value)=="yes"){
                    $hazident["oxygenplant-present"]=0;
                    }elseif(strtolower($value)=="no"){
                    $hazident["oxygenplant-present"]=8;
                    }
                    

                }if($key=="oxygenplant-secure"){
                    if(strtolower($value)=="yes"){
                    $hazident["oxygenplant-secure"]=0;
                    }elseif(strtolower($value)=="no"){
                    $hazident["oxygenplant-secure"]=8;
                    }

                    

                }if($key=="Incineratorplant-present"){
                    if(strtolower($value)=="yes"){
                    $hazident["Incineratorplant-present"]=0;
                    }elseif(strtolower($value)=="no"){
                    $hazident["Incineratorplant-present"]=8;
                    }

                    

                   
                }if($key=="hazardmaterialstorage-present"){
                    if(strtolower($value)=="yes"){
                    $hazident["hazardmaterialstorage-present"]=0;
                    }elseif(strtolower($value)=="no"){
                    $hazident["hazardmaterialstorage-present"]=8;
                    }




                   
                }if($key=="sidewalks-present"){
                    if(strtolower($value)=="yes"){
                    $hazident["sidewalks-present"]=0;
                    }elseif(strtolower($value)=="no"){
                    $hazident["sidewalks-present"]=8;
                    }
                    

                   
                }if($key=="sidewalks-condition"){
                    if(strtolower($value)=="good"){
                    $hazident["sidewalks-condition"]=0;
                    }elseif(strtolower($value)=="moderate"){
                    $hazident["sidewalks-condition"]=8;
                    }
                    elseif(strtolower($value)=="poor"){
                    $hazident["sidewalks-condition"]=16;
                    }
                    

                   
                }if($key=="streetlighting-present"){
                    if(strtolower($value)=="yes"){
                    $hazident["streetlighting-present"]=0;
                    }elseif(strtolower($value)=="no"){
                    $hazident["streetlighting-present"]=8;
                    }
                    

                    
                }if($key=="streetlighting-condition"){
                    if(strtolower($value)=="good"){
                    $hazident["streetlighting-condition"]=0;
                    }elseif(strtolower($value)=="moderate"){
                    $hazident["streetlighting-condition"]=8;
                    }elseif(strtolower($value)=="poor"){
                    $hazident["streetlighting-condition"]=0;
                    }
                    

                    
                }if($key=="watersupplysystem-present"){
                    if(strtolower($value)=="yes"){
                    $hazident["watersupplysystem-present"]=0;
                    }elseif(strtolower($value)=="no"){
                        
                    $hazident["watersupplysystem-present"]=8;
                    }

                    

                
                }if($key=="watersupplysystem-condition"){
                    if(strtolower($value)=="good"){
                    $hazident["watersupplysystem-condition"]=0;
                    }elseif(strtolower($value)=="moderate"){
                    $hazident["watersupplysystem-condition"]=8;
                    }
                    elseif(strtolower($value)=="poor"){
                    $hazident["watersupplysystem-condition"]=16;
                    }


                    

                    
                }if($key=="Drainagesys-present"){
                    if(strtolower($value)=="yes"){
                    $hazident["Drainagesys-present"]=0;
                    }elseif(strtolower($value)=="no"){
                    $hazident["Drainagesys-present"]=8;
                    }
                    

                    
                }if($key=="Drainagesys-condition"){
                    if(strtolower($value)=="good"){
                    $hazident["Drainagesys-condition"]=0;
                    }elseif(strtolower($value)=="moderate"){
                    $hazident["Drainagesys-condition"]=8;
                    }
                    elseif(strtolower($value)=="poor"){
                    $hazident["Drainagesys-condition"]=16;
                    }

                    
                    

                    
                }if($key=="Drainagesys-condition"){
                    if(strtolower($value)=="good"){
                    $hazident["Drainagesys-condition"]=0;
                    }elseif(strtolower($value)=="moderate"){
                    $hazident["Drainagesys-condition"]=8;
                    }
                    elseif(strtolower($value)=="poor"){
                    $hazident["Drainagesys-condition"]=16;
                    }


                    

                    
                }if($key=="Seweragesystem-present"){
                    if(strtolower($value)=="yes"){
                    $hazident["Seweragesystem-present"]=0;
                    }elseif(strtolower($value)=="no"){
                    $hazident["Seweragesystem-present"]=8;
                    }
                    

                    
                }if($key=="Seweragesystem-condition"){
                    if(strtolower($value)=="good"){
                    $hazident["Seweragesystem-condition"]=0;
                    }elseif(strtolower($value)=="moderate"){
                    $hazident["Seweragesystem-condition"]=8;
                    }
                    elseif(strtolower($value)=="poor"){
                    $hazident["Seweragesystem-condition"]=16;
                    }

                    

                    
                }if($key=="Emergencyentryandexit-present"){
                    if(strtolower($value)=="yes"){
                    $hazident["Emergencyentryandexit-present"]=0;
                    }elseif(strtolower($value)=="no"){
                    $hazident["Emergencyentryandexit-present"]=8;

                    

                    
                }if($key=="Emergencyentryandexit-condition"){
                    if(strtolower($value)=="good"){
                    $hazident["Emergencyentryandexit-condition"]=0;
                    }elseif(strtolower($value)=="moderate"){
                    $hazident["Emergencyentryandexit-condition"]=8;
                    }
                    elseif(strtolower($value)=="poor"){
                    $hazident["Emergencyentryandexit-condition"]=16;
                    }

                }

                }


                    

                    


        }


       

$id=$row['id'];
$sum= 0;
foreach ($hazident as $number) {
  $sum += $number;
}
// echo $sum."==this is the sum------";
// print_r($hazident);
// echo"<br>";

$query2="UPDATE `haz-ident` SET `sum`='$sum' WHERE id=$id";
$result1=mysqli_query($conn, $query2);

    }
}

#  $list=array();
# for ($i = 0; $i < 10; $i++) {
  
#     $list[] = "1";
   
# }
# print_r($list);
# echo($list[5]);
# echo();


?>


<!-- <!DOCTYPE html>
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
        <h1>Hazard Identification</h1>
        <label for="userhosbuild">Enter userhosp value : </label>
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
    $result2 = mysqli_query($conn, "SELECT `sum`  FROM `haz-ident` WHERE userhosp='$value'"); //userhosp in db instead of userhosbuild
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

?> -->


