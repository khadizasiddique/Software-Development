<?php
if(isset($_POST['d1']))
{
$dat1=$_POST['d1'];
$dat2=$_POST['d2'];
$dat3=$_POST['d3'];
$dat4=$_POST['d4'];


if(file_exists("user.txt")) {
    $f = "user.txt";

    $term = $dat1;
    $term1 = $dat2;
    $term2 = $dat3;
    $term3 = $dat4;


    $arr = file($f);

    foreach ($arr as $key=> $line) {

        //removing the line
        if(stristr($line,$term)!== false){unset($arr[$key]);}
        if(stristr($line,$term1)!== false){unset($arr[$key]);}
        if(stristr($line,$term2)!== false){unset($arr[$key]);}
        if(stristr($line,$term3)!== false){unset($arr[$key]);break;}

    }

    //reindexing array
    $arr = array_values($arr);

    //writing to file
    file_put_contents($f, implode($arr));

    echo "Ride is successfully deleted!";

    echo "<h5><a href='index.php'>Go back to menu</a></h5>";
  } 
  else {
    echo "<h5><a href='index.php'>Go back to menu</a></h5>";

    die("Error: The file does not exist.");
  }

    

}

else{
    echo "Please fill out the form as required!" ;

}
?>