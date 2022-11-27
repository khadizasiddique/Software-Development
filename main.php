<?php
if (isset($_REQUEST["submit"])){
    $v= $_POST['val'];
    if($v== 1)
    {
       header("location:s2.php");

    }
    elseif($v ==2)
    {
        header("location:vahi.php");

    }
    elseif($v ==3)
    {
        header("location:add.php");

    }
    elseif($v ==4)
    {
        header("location:delete.php");

    }
    elseif($v ==5)
    {
        header("location:exit.php");

    }
    else
    {
       header("location:index.php? action=error");
    }

}

else{
    echo "no data found";
}
?>
