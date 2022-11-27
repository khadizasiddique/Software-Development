<?php
if (isset($_REQUEST["submit"])){
    $v= $_POST['r1'];
    #echo $v;
    if(file_exists("loc.txt")) {
    $filename = 'loc.txt';
    $searchfor = $v;
    $file = file_get_contents($filename);
    if(strpos($file, $searchfor)) 
     {
       echo "<h3>Please go to add menu to share this Ride with US</h3>";
       echo "<h5><a href='index.php'>Go back to menu</a></h5>";


     }
     else
     {
        echo "We don't share this Ride";
        echo "<h5><a href='index.php'>Go back to menu</a></h5>";

     }

    }

    else {
        echo "<h5><a href='index.php'>Go back to menu</a></h5>";
    
        die("Error: The file does not exist.");
    
      }
}

?>