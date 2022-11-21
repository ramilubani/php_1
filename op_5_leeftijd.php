<?php

$naam = "Tomi";

$leeftijd = 17;




if ( $leeftijd < 18 ){
  echo "Tomi je bent niet oud genoeg om te stemmen, De stem grens is 18 jaar." ;
  echo "<p style='color:red; text-align:center;'>" . "WEG !" . "</p>";
  

}else{
    
echo "Hoera! ...Je mag stemmen ";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1><?php echo $naam . "  " . " je bent". " " . $leeftijd . " " . "!"; ?></h1>
    
</body>
</html>