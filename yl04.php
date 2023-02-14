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
        <h1>Harjutus 4</h1>
        <form action="yl04.php" method="get">
        Arv1 <input type="text" name="t1"><br>
        Arv2    <input type="text" name="t2"><br>
        <input type="submit" value="Saada">
        </form>
        <?php
        if(!empty($_GET["t1"])&& !empty($_GET["t2"])){
        $Arv1 = $_GET['t1'];
        $Arv2 = $_GET['t2'];
        $jaga = $Arv1/$Arv2;
        echo "Vastus: $jaga";
    }
        
        ?>
        <form action="yl04.php" method="get">
        Vanus1 <input type="text" name="a1"><br>
        Vanus2    <input type="text" name="a2"><br>
        <input type="submit" value="Saada">
        </form>
        <?php
        if(!empty($_GET["a1"])&& !empty($_GET["a2"])){
            $Vanus1 = $_GET['a1'];
            $Vanus2 = $_GET['a2'];
            if($Vanus1==$Vanus2){
                echo "Nad on sama vanad";
            }
            else if($Vanus1>=$Vanus2){
                echo "Esimene on vanem";
            }
            else{
                echo "Teine on vanem";
            }
}
?>
        <form action="yl04.php" method="get">
        Külg1 <input type="text" name="b1"><br>
        Külg2    <input type="text" name="b2"><br>
        <input type="submit" value="Saada">
        </form>
        <?php
        if(!empty($_GET["b1"])&& !empty($_GET["b2"])){
            $Külg1 = $_GET['b1'];
            $Külg2 = $_GET['b2'];
            if($Külg1==$Külg2){
                echo "See on ruut<br>";
                echo "<img src='https://picsum.photos/seed/picsum/200/200' alt='' />";
            }
            else{
                echo "See on ristkülik<br>";
                echo "<img src='https://picsum.photos/seed/picsum/400/200' alt='' />";
            }
        }
        ?>
        <form action="yl04.php" method="get">
        Vanus <input type="text" name="c1"><br>
        <input type="submit" value="Saada">
        </form>
        <?php
        if(!empty($_GET["c1"])){
            $Vanus = $_GET['c1'];
            if($Vanus%5==0){
            echo "Sul on juubel";}
            else{
                echo "Sul ei ole juubel";
            }
        }
        ?>

        <form action="yl04.php" method="get">
        Punktid <input type="text" name="d1"><br>
        <input type="submit" value="Saada">
        </form>
        <?php
        if(!empty($_GET["d1"])){
            
            $Punktid = $_GET['d1'];
            $minu = 10;
 
            switch ($minu) {
                case ($Punktid >= $minu):
                    echo "SUPER!!";
                    break;
                case ($Punktid >= 5):
                    echo "Tehtud";
                    break;
                case ($Punktid < 5):
                    echo "Pask";
                    break;
                
            }
            
        }
        else{
            echo"Sisesta numbrid";
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
   </body>
</html>