<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ride Sharing System</title>
    
  </head>
  <body>
    
  <p>Choose your option:</p>
  <ol style="line-height:180%">
  <li>Search Ride</li>
  <li>Vahicle & Driver Information</li>
  <li>Add Ride</li>
  <li>Delete Ride</li>
  <li>Exist system</li>
</ol>

<p>Enter your option</p>
<form action= "main.php" method ="post">
<input type="txt" name="val" placeholder ="Enter your option" required>
<input type="submit" name="submit"> </form>

<?php
    if (isset($_REQUEST["action"])) {

      if ($_REQUEST["action"]=="error") {
      
        echo "Enter a valid option!";
      }
    }
    ?>

  </body>
</html>
