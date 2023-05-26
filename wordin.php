<?php
    // podaci s forme u php-ispit.php
    if($_POST)
    {
        $word=$_POST["word"];
    }
    else
    {
        echo "Nisam pročitao riječ?!";
    }

echo $word;
?>