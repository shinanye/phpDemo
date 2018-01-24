<?php
// header("content-type:image/png");
// $img=imagecreatetruecolor(200,200);
// $red=imagecolorallocate($img,255,0,0);
// imagefill($img,0,0,$red);
// $white=imagecolorallocate($img,255,255,255);
// imageline($img,0,0,255,255,$white);
// $font="C:\Windows\Fonts\simhei.ttf";
// imagettftext($img,23,0,100,100,$white,$font,"你好吗");

$img = imagecreatetruecolor(100, 40);
$black = imagecolorallocate($img, 0x00, 0x00, 0x00);
$green = imagecolorallocate($img, 0x00, 0xFF, 0x00);
$white = imagecolorallocatealpha($img, 0xFF, 0xFF, 0xff, 127);
imagefill($img,0,0,$white);
imagesavealpha($img, TRUE);
//生成随机的验证码
$str = '';
for($i = 0; $i < 4; $i++) {
$str.=dechex(rand(0,15));   //生成十六进制的数字
}
for($i=0;$i<500;$i++) {
      imagesetpixel($img, rand(0, 100) , rand(0, 100) , $black); 
      imagesetpixel($img, rand(0, 100) , rand(0, 100) , $green);
    }
$font='C:\Windows\Fonts\simsun.ttc';
imagettftext($img,30,0, 10,35,$black,$font,$str );

//输出验证码
header("content-type: image/png");
imagepng($img);
$filename='logo.png';
imagepng($img,$filename);
imagedestroy($img);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- <image  -->
</body>
</html>