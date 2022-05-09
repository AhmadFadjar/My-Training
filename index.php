<?php

    // Halo ini adalah komentar
    echo "<h1>Halo, selamat datang Fadjar</h1>";

    for ($a=0; $a <=10 ; $a++) { 
        echo "Pengulangan ini sebanyak 10x <br>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan For PHP</title>
</head>
<body>
    <h2>Ini merupakan table Pengulangan berjenis PHP</h2>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for ( $c= 5; $c <=5 ; $c++) : ?>
            <tr>
                <?php for ( $d= 0; $d <=10 ; $d++) : ?> 
                    <td><?php echo "$c, $d" ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>