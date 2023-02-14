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
        <h1>Harjutus 6</h1>
        <h2>Numbrid</h2>
        <?php
        //Ül 1 Peedu Erik Pajo 24.01.2023
        for($nr=1;$nr<=100;$nr++){
            echo $nr.".\n ";
            if($nr%10==0){
                echo "<br>";
             }	
        }
    ?>
    <h2>Tärnid</h2>
    <?php
    for($veerg=1; $veerg<=5; $veerg++){ 
        echo '*';	
    }
    echo '<br>';
    for($rida=1; $rida<=8; $rida++){ 
        echo '*<br>';
    }
    

    ?>
    <h2>Ruut</h2>
    <form action="#" method="get">
        Sisesta number<input type="text" name="n1">
        <input type="submit" value="Saada">
    </form>
    <?php
    $m= $_GET['n1'];
    for ($i=0; $i < $m; $i++) { 
        echo str_repeat("*", $m);
        if($m >= 0){
            echo "<br>";
        }
    }

    ?>
    <h2>Kahanev</h2>
    <?php
    $n2 = 0;

    while ($n2 < 10){
    $n2 += 2;
    echo $n2 . "\n <br>";
    }
	?>
    <h2>Kolmega jagunevad</h2>
    <?php
    $n2 = 0;

    while ($n2 < 97){
    $n2 += 3;
    echo $n2 . ", ";
    }
    ?>
    <h2>Poisid ja tüdrukud</h2>
    <?php
    $tyd = array("Jana","Laura","Kristin");
    $pos = array("GÄSBAR","Villi","Peeter");
    echo $tyd[0].", ".$pos[0]."<BR>";
    echo $tyd[1].", ".$pos[1]."<BR>";
    echo $tyd[2].", ".$pos[2]."<BR>";
    ?>
    <H2>Massiivid ja tsüklid (Bonus)</H2>
    <?php
    $tyd = array("Jana","Laura","Kristin");
    $pos = array("GÄSBAR","Villi","Peeter");

    ?>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
   </body>
</html>