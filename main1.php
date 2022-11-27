<?php
              
if(isset($_POST['val1']))
{
$data=$_POST['val1'];
$data1=$_POST['val2'];
$data2=$_POST['val3'];
$data4=$_POST['val4'];
$data3="User Information:\n";
$data5="Start point:";
$data6="End point:";
$data7="User Name:";
$data8="Vehicle:";

if(file_exists("user.txt")) {
    $fp = fopen('user.txt', 'a');
fwrite($fp, $data3);

fwrite($fp, $data5);
fwrite($fp, $data);
fwrite($fp, "\n");

fwrite($fp, $data6);
fwrite($fp, $data1);
fwrite($fp, "\n");

fwrite($fp, $data7);
fwrite($fp, $data4);
fwrite($fp, "\n");

fwrite($fp, $data8);
fwrite($fp, $data2);
fwrite($fp, "\n");



fclose($fp);

echo "Your information is successfully recorded!";

echo "<h5><a href='index.php'>Go back to menu</a></h5>";
  } 
  else {
    echo "<h5><a href='index.php'>Go back to menu</a></h5>";

    die("Error: The file does not exist.");

  }




}

else
{
   echo "Please fill out the form as required!" ;
}



?>
