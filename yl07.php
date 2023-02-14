
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
        <h1>Harjutus 7</h1>
        <h2>Tervitus</h2>
        <?php
        //Ül 1 Peedu Erik Pajo 24.01.2023
        
        function tervita(){
            return "Tere PÄIKSEKENE!!!!!!";	
        }
        echo tervita();
       ?>
       <h2>Liitu uudiskirjaga</h2>
       
       <form action="#" method="get">
        gmail <input class="mb-2" type="email" name="t1"><br>
        <input type="submit" value="Saada">
        </form>
      <h2>Kasutajanimi ja email</h2>
      <form action="#" method="get">
        nimi <input class="mb-2" type="text" name="n1"><br>
        <input type="submit" value="Saada">
        </form>
       <?php
       if(!empty($_GET["n1"])){
        $nimi = $_GET['n1'];
        $asf = strtolower($nimi);
        
        print_r($asf."@hkhk.edu.ee<br>");
       }
        $SevenDigitRandomNumber = rand(1000000,9999999);
        echo "Suvaline 7 kohaline kood: ".$SevenDigitRandomNumber."<br>";
        function password_generate($c) 
        {
          $kõik = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
          return substr(str_shuffle($kõik), 0, $c);
        }
          echo "Tähtede ja numbritega kood on: ".password_generate(7)."<br>";
          ?>
          <h2>Arvud</h2>
          <form action="#" method="get">
        arvu vahemiku algus <input class="mb-2" type="text" name="p1"><br>
        arvu vahemiku lõpp <input class="mb-2" type="text" name="m1"><br>
        samm <input class="mb-2" type="text" name="s1"><br>
        <input type="submit" value="Saada">
        </form>
        <?php
        if(!empty($_GET["m1"])&& !empty($_GET["p1"])&& !empty($_GET["s1"])){
          $arv = $_GET['m1'];
          $arv1 = $_GET['p1'];
          $samm = $_GET['s1'];
          foreach (range($arv1, $arv, $samm) as $number) {
            echo $number;  
          }
        }
         
      
        ?>
        <h2>Ristkülik</h2>
          <form action="#" method="get">
        Külg 1 <input class="mb-2" type="text" name="r2"><br>
        Külg 2 <input class="mb-2" type="text" name="r1"><br>
        <input type="submit" value="Saada">
        <?php
        if(!empty($_GET["r1"])&& !empty($_GET["r2"])){
        function ristkülik(){
          $arv3 = $_GET['r1'];
          $arv2 = $_GET['r2'];
          $vastus = $arv3*$arv2;
          return $vastus;
        }
        echo "Vastus on: ".ristkülik();
      }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
   </body>
</html>