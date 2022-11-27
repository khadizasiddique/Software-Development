<!DOCTYPE html>
<html>
<body>

<h1>Ride search</h1>
<?php

$fh = fopen("loc.txt", 'r');

    $pageText = fread($fh, 25000);

    echo nl2br($pageText);

?>
<h5><a href="index.php">Go back to menu</a></h5>
</body>
</html>
