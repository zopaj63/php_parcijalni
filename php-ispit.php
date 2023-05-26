<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP parcijalni ispit</title>
</head>
<body>
    <h1>Parcijalni ispit PHP osnove</h1>
    <!--lijevo, upis-->
    <div style="display: inline-block; width: 300px;">
        <h4>Upišite riječ:</h4>
        <form action="wordin.php" method="post">
            <input type="text" name="word"><br/><br/>
            <input type="submit" value="pošalji">
        </form>
    </div>

    <!--desno, tablica-->
    <div style="display: inline-block; width: 600px;">
        <?php
          include ('tablica.php');   
        ?>  
    </div>
</body>
</html>