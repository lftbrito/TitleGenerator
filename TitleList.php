<html>
  <head>
  <link rel="stylesheet" href="styles2.css">
  </head>
  <footer>
    <p class="copyright">© Developed by: Lftbrito 2021</p>
</footer>
</html>
<?php
$i = 1;
$x = 1;
$z = 1;

$test = 'xcar' . $x;

$maintitle = $_POST['xtitle' . $z];
@$variation = $_POST[$test];

@$xcar = $_POST['xcar' . $x];
@$xvariation = $_POST['xvariation' . $i];
@$xano = $_POST['xano' . $x];
@$xanof = $_POST['xanof' . $x];
@$xtest = $_POST['xanof' . $x];

$iano = intval($xano);
$ianof = intval($xanof);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $text = $maintitle . ' ' . $xcar . ' '. $iano;
  if (strlen(strval($text)) < 60){
    echo nl2br ($maintitle . "\n");
  }
    @$xcar = $_POST['xcar' . $x];
    if (!empty($xcar)){
  while(!empty($maintitle)){
    while (!empty($xcar)){
      while($iano<=$ianof){
        $text = $maintitle . ' ' . $xcar . ' '. $iano;
        if (strlen(strval($text)) < 60){
        echo nl2br ($maintitle . ' ' . $xcar . ' '. $iano . "\n");
        }
        @$xvariation = $_POST['xvariation' . $i];
        while(!empty($xvariation)){
          $text = $maintitle . ' ' . $xcar . ' '. $iano;
          if (strlen(strval($text)) < 60){
          echo nl2br ($maintitle . ' ' . $xcar . ' '. $iano . ' ' . $xvariation . "\n");
          }
          $i = $i +1;
          @$xvariation = $_POST['xvariation' . $i];
        }
        $iano = $iano + 1;
        $i = 1;
      }
      $x = $x + 1;
      @$xcar = $_POST['xcar' . $x];
      @$xano = $_POST['xano' . $x];
      @$xanof = $_POST['xanof' . $x];
      $iano = intval($xano);
      $ianof = intval($xanof);
    }
    $z = $z + 1;
    $x = 1;
    @$maintitle = $_POST['xtitle' . $z];
    @$xcar = $_POST['xcar' . $x];
    @$xano = $_POST['xano' . $x];
    @$xanof = $_POST['xanof' . $x];
    $iano = intval($xano);
    $ianof = intval($xanof);
  }
  }
while(!empty($maintitle)){
      while(!empty($xvariation)){
        $text = $maintitle . ' ' . $xcar . ' '. $iano;
        if (strlen(strval($text)) < 60){
        echo nl2br ($maintitle . ' ' . $xvariation . "\n");
        $i = $i +1;
        @$xvariation = $_POST['xvariation' . $i];
      }
  $z = $z + 1;
  $x = 1;
  @$maintitle = $_POST['xtitle' . $z];
  @$xcar = $_POST['xcar' . $x];
  @$xano = $_POST['xano' . $x];
  @$xanof = $_POST['xanof' . $x];
  $iano = intval($xano);
  $ianof = intval($xanof);
}

  // collect value of input field

}
}
?>