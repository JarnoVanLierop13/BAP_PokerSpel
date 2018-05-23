
<?php

function dobbelsteen($worp) {
    $image = imagecreate(200, 200) or die ("COMPLETE FAILURE");
    $bgcolor = imagecolorallocate($image, 0, 0, 0);
    $color = imagecolorallocate($image, 255, 255, 255);
    if($worp == 4 OR $worp == 2 OR $worp == 3 OR $worp == 5 OR $worp == 6)imagefilledellipse($image, 50, 50, 40, 40, $color); //1
    if($worp == 4 OR $worp == 4 OR $worp == 5 OR $worp == 6)imagefilledellipse($image, 150, 50, 40, 40, $color); //2
    if($worp == 6)imagefilledellipse($image, 50, 100, 40, 40, $color); //3
    if($worp == 1 OR $worp == 3 OR $worp == 5)imagefilledellipse($image, 100, 100, 40, 40, $color); //4
    if($worp == 6)imagefilledellipse($image, 150, 100, 40, 40, $color); //5 
    if($worp == 4 OR $worp == 5 OR $worp == 6)imagefilledellipse($image, 50, 150, 40, 40, $color); //6
    if($worp == 2 OR $worp == 3 OR $worp == 4 OR $worp == 5 OR $worp == 6)imagefilledellipse($image, 150, 150, 40, 40, $color); //7
    imagepng($image, $worp.".png");
    imagedestroy($image);
}

for($i = 0; $i < 5; $i++) {
    $worp = rand(1,6);
    dobbelsteen($worp);
    print "<img src=".$worp.".png?".date("U").">&nbsp";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dobbelstenen</title>
</head>
<body>
<form action=""><input type="submit" value="opniew"></form>
</body>
</html>
