 
<!DOCTYPE html>
<html>
<body>
<?php
    if(isset($_REQUEST['submit_btn']))
    {
       echo "<div>";
       $name = $_POST["lado1"];
       $name = $_POST["lado2"];
       $name = $_POST["lado3"];
       echo "</div>";
    }
?>
<form method="post" action="">
  primeiro lado<br>
  <input type="number" name="lado1">
  <br>
  segundo lado<br>
  <input type="number" name="lado2">
  <br>
  terceiro lado<br>
  <input type="number" name="lado3">
  <br>

  <input type="submit" value="submit" name="submit_btn">
</form>
<?php


$lado1=$_POST['lado1'];
$lado2=$_POST['lado2'];
$lado3=$_POST['lado3'];

function IsTriangle($lado1,$lado2,$lado3)
{
  $m1=false;
  $m2=false;
  $m3=false;
  if($lado1+$lado2>$lado3){
    $m1 = true;
  }
  if($lado3+$lado2>$lado1){
    $m2 = true;;
  }
  if($lado1+$lado3>$lado2){
    $m3 = true;
  }

  if ($m1 and $m2 and $m3)
    return true;
  else
    return false;
}

function isEquilateral($lado1,$lado2,$lado3){

  if($lado1 != $lado2)
    return false;
  if($lado1 != $lado3)
    return false;
  if($lado2 != $lado3)
    return false;
  else
    return true;
}
function isIsosceles($lado1,$lado2,$lado3){
  if($lado1 == $lado2 and $lado1 !=$lado3)
  return true;
  if($lado3 == $lado2 and $lado3 !=$lado1)
  return true;
  if($lado1 == $lado3 and $lado1 !=$lado2)
  return true;
  else
    return false;
}

function isScalene($lado1,$lado2,$lado3){
  if($lado1 != $lado2 and $lado1 != $lado3 and $lado2 != $lado3)
    return true;
  else
    return false;
}


if(!IsTriangle($lado1,$lado2,$lado3))
  echo 'Não é triangulo'.PHP_EOL;
else{
  echo 'É Triangulo';
  if(isEquilateral($lado1,$lado2,$lado3))
    echo ' Equilatero'.PHP_EOL;
  if(isIsosceles($lado1,$lado2,$lado3))
    echo ' Isósceles'.PHP_EOL;
  if(isScalene($lado1,$lado2,$lado3))
    echo ' Escaleno'.PHP_EOL;
}
?>

</body>
