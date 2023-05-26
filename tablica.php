<?php
    $popis=file_get_contents("words.json");
    $rijeci=json_decode($popis, true);  // json pretvoren u niz, sa true čita cijeli asocijativni niz
?>

<table border="1">
    <tr>
        <th>Riječ</th>
        <th>Broj slova</th>
        <th>Broj suglasnika</th>
        <th>Broj samoglasnika</th>
    </tr>
    
    <?php
        foreach ($rijeci as $rijec)
        {
            echo "<tr>";
                echo "<td>".$rijec["word"]."</td>";
                echo "<td>".$rijec["word"]."</td>";
                echo "<td>".$rijec["word"]."</td>";
                echo "<td>".$rijec["word"]."</td>";
            echo "</tr>";
        };
    ?>

</table>