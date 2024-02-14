<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Hvala</title>
  </head>
  <body>


    <header>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../24 Vjezba - Marko Sokcevic/img/buket1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../24 Vjezba - Marko Sokcevic/img/buket2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../24 Vjezba - Marko Sokcevic/img/buket3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
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

        mysqli_select_db($link, 'flowers');
        $pohrana ="INSERT INTO `narudzbe`(`ime`, `prezime`, `adresa`, `tip`) VALUES ('$_POST[ime]','$_POST[prezime]','$_POST[adresa]', '$_POST[r1]')";

        if(!mysqli_query($link, $pohrana)){
            echo "<h2>Podaci nisu pohranjeni</h2>";
        }
        else{
            echo "<h2>Narudžba je zaprimljena.</h2>";
        }
        mysqli_close($link);
        ?>

      <a href="index.html"><button class="ispisButton" type="">Povratak</button></a>

    </main>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>