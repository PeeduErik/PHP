<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1>Harjutus 2</h1>
        <?php
        //Ül 1 Peedu Erik Pajo 24.01.2023
        $x = 47;
        $y = 8;
        $liitm = $x + $y;
        $lahut = $x - $y;
        $korru = $x * $y;
        $jagam = $x / $y;
        $jaak = $x % $y;
        echo "$x + $y = $liitm<br>";
        echo "$x - $y = $lahut<br>";
        echo "$x * $y = $korru<br>";
        echo "$x / $y = $jagam<br>";
        echo "$x % $y = $jaak<br>";
        $i = 5.56;
        $j = 10;
        $l = 1000;
        $k = $i / $j;
        $o = $i / $l;
        $vormindatud = sprintf('Vastuse: %0.2f cm <br>', $k);
        echo $vormindatud;
        $vormindatud1 = sprintf('Vastuse: %0.2f m<br>', $o);
        echo $vormindatud1;
        $q = 2;
        $w = 2;
        $e = 2;
        $c = 4;
        $v = $q + $w + $e;
        $x = $c*$e/2;
        echo "Kolmnurga ümbermõõt on $v cm<br>";
        echo "Kolmnurga pindala on $x cm2<br>";
    ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
   </body>
</html>