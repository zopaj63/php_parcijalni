<?php
    // podaci s forme u php-ispit.php

    $niz=[];

    if($_POST)
    {
        $word=$_POST["word"];
        //provjera da li je polje prazno
        if(!empty($word))
        {
            $cleanword=trim($word); //trim briše prazne znakove prije početka i iza kraja
            //kreiranje json datoteke
            $jsonWord=json_encode($cleanword);
            $niz=[$jsonWord];
            $datoteka="words.json";
            file_put_contents($datoteka, $niz, FILE_APPEND); //generira json fidatoteku
        }
        else
        {
            echo "Polje ne smije biti prazno!";
        }
    }
    else
    {
        echo "Nisam pročitao riječ?!";
    }

//echo $word;
?>