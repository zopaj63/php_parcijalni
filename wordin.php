<?php

    // funkcije za brojanje slova
    function vowels($word)
    {
        //broj samoglasnika
        $samoglasnici=["a", "e", "i", "o", "u"];
        $number=0;
        for($i=0; $i<strlen($word); $i++)
        {
            if (in_array($word[$i], $samoglasnici))
            {
                $number++;
            }
        }
        return $number;
    }

    function consonants($word)
    {
        //broj suglasnika
        $suglasnici=["b","c","č","ć","d","đ","e","f","g","h","j","k","l","m","n","p","q","r","s","š","t","v","z","ž","x","y"];
        $number=0;
        for($i=0; $i<strlen($word); $i++)
        {
            if (in_array($word[$i], $suglasnici))
            {
                $number++;
            }
        }
        return $number;
    }

    // podaci s forme u php-ispit.php

    if (isset($_POST["word"]))
    {
        $word=trim($_POST["word"]);
        //provjera da li je polje prazno
        if(!empty($word))
        {
            $word=strtolower($word);

            $numberOfLetters=strlen($word);
            $numberOfVowels=vowels($word);
            $numberOfConsonants=consonants($word);

            //upis u json datoteku words.json
            $newWord=array(
                "rijec"=>$word,
                "brojSlova"=>$numberOfLetters,
                "brojSamoglasnika"=>$numberOfVowels,
                "brojSuglasnika"=>$numberOfConsonants
            );

            $words=array();

            if (file_exists("words.json"))
            {
                $wordsJson=file_get_contents("words.json");
                $words=json_decode($wordsJson, true);
            }

            $words[]=$newWord;
            $wordsJson=json_encode($words, JSON_PRETTY_PRINT);

            if(file_put_contents("words.json", $wordsJson) !== false)
            {
                echo "JSON uspješno stvoren";
                header('Location: php-ispit.php');
            }
            else
            {
                echo "Greška pri upisu JSON zapisa";
            }

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

?>