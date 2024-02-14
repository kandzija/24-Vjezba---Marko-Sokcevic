<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="style.css">
    <title>Narudžbe</title>
  </head>
  <body>


    <header>
        
    </header>

    <main>
        <?php
        
        defined('DB_HOST') or define('DB_HOST', 'localhost');
        defined('DB_USER') or define('DB_USER', 'root');
        defined('DB_PASS') or define('DB_PASS', '');
        defined('DB_NAME') or define('DB_NAME', 'cvijece');
        $link = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        $charset = mysqli_set_charset($link, 'utf8');

        if(!$link){
            echo "<h2>Neuspjesno povezivanje</h2>";
        }

        ?>

        <h2>Narudžbe</h2>
        <table>
            <tr>
                <th>Ime</th>
                <th>Prezime</th>
                <th>Adresa</th>
                <th>Tip buketa</th>
            </tr>
        
        <?php

        $sql = NULL;
        $sql = "SELECT * FROM narudzbe";
        if($sql != NULL){
            $result = mysqli_query($link, $sql);
            $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
        }
        else{
            die("Nije uspjelo dohvaćanje iz baze");
        }

        foreach($rows as $row):?>
            <tr>
                <td><?=$row['ime']  ?></td>
                <td><?=$row['prezime']  ?></td>
                <td><?=$row['adresa']  ?></td>
                <td><?=$row['tip']  ?></td>
            </tr>

            <?php endforeach; ?>

        </table>
        <?php
        mysqli_close($link);
        ?>

      <a href="index.html"><button class="ispisButton" type="">Povratak</button></a>

            

    </main>
    </body>
</html>