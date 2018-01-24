<?php
// header("content-type: image/png");
// $img=imagecreatetruecolor(100, 100);
// $color=imagecolorallocate($img, 0xff, 0xff, 0x00);
// // echo $color;
// // imagefill($img, 0, 0, $red);
// imagefill($img,0,0,$color);
// // imageline($img,20,20, 50, 50, $color);
// // imageline($img,40,40,100,100,'(0xff, 0xff, 0x00)');
// // imagestring($img, 10, 0, 0, "Hello world", $red);
// imagepng($img);
// // $filename='img.png';
// // imagepng($img,$filename);
// imagedestroy($img);

// $im = imagecreatetruecolor(400,300);
// $color = imagecolorallocate($im,0xff,0xff,0x00);
// $black = imagecolorallocate($img, 0x00, 0x00, 0x00);
// $green = imagecolorallocate($img, 0x00, 0xFF, 0x00);
// for($i=0;$i<50;$i++) {
//     imagesetpixel($im, rand(0, 100) , rand(0, 100) , $black); 
//     imagesetpixel($im, rand(0, 100) , rand(0, 100) , $green);
//   } 
// imagefill($img, 0, 0, $color);
// imagepng($im);
// imagedestroy($im);


//水印验证码：
// $img = imagecreatetruecolor(100, 40);
// $black = imagecolorallocate($img, 0x00, 0x00, 0x00);
// $green = imagecolorallocate($img, 0x00, 0xFF, 0x00);
// $white = imagecolorallocate($img, 0xFF, 0xFF, 0xFF);
// imagefill($img,0,0,$white);
// //生成随机的验证码
// $str = '';
// for($i = 0; $i < 4; $i++) {
// // $code .= rand(0, 9);
// $str.=dechex(rand(0,15));   //生成十六进制的数字

// }
// // imagestring($img, 5, 10, 10, $str, $black);
// // imagettftext ( resource $image , float $size , float $angle , int $x , int $y , int $color , string $fontfile , string $text )
// $font='C:\Windows\Fonts\simsun.ttc';
// imagettftext($img,30,0, 10,35,$black,$font,$str );
// //加入噪点干扰
// for($i=0;$i<500;$i++) {
//   imagesetpixel($img, rand(0, 100) , rand(0, 100) , $black); 
//   imagesetpixel($img, rand(0, 100) , rand(0, 100) , $green);
// }
// //输出验证码
// header("content-type: image/png");
// imagepng($img);
// imagedestroy($img);



// $img = imagecreatetruecolor(100, 40);
// $black = imagecolorallocate($img, 0x00, 0x00, 0x00);
// $white = imagecolorallocate($img, 0xFF, 0xFF, 0xFF);
// imagefill($img,0,0,$white);

// $font='C:\Windows\Fonts\simsun.ttc';
// imagettftext($img,15,15, 10,35,$black,$font,"你好！boy" );

// header("content-type: image/png");
// imagepng($img);
// imagedestroy($img);

// header("content-type:image/png");
// $img=imagecreatetruecolor(200,200);
// $red=imagecolorallocate($img,255,0,0);
// imagefill($img,0,0,$red);
// $white=imagecolorallocate($img,255,255,255);
// imageline($img,0,0,255,255,$white);
// $font="C:\Windows\Fonts\simhei.ttf";
// imagettftext($img,23,0,100,100,$white,$font,"你好吗");
// imagepng($img);
// imagedestroy($img);

//这里仅仅是为了案例需要准备一些素材图片
// $url = 'http://www.iyi8.com/uploadfile/2014/0521/20140521105216901.jpg';
// $content = file_get_contents($url);
// $filename = 'tmp.jpg';
// file_put_contents($filename, $content);
// $url = 'http://wiki.ubuntu.org.cn/images/3/3b/Qref_Edubuntu_Logo.png';
// file_put_contents('logo.png', file_get_contents($url));
// //开始添加水印操作
// $im = imagecreatefromjpeg($filename);
// $logo = imagecreatefrompng('logo.png');
// $size = getimagesize('logo.png');
// imagecopy($im, $logo, 15, 15, 0, 0, $size[0], $size[1]); 
 
// header("content-type: image/jpeg");
// imagejpeg($im);


// $img = imagecreatetruecolor(100, 40);
// $black = imagecolorallocate($img, 0x00, 0x00, 0x00);
// $green = imagecolorallocate($img, 0x00, 0xFF, 0x00);
// $white = imagecolorallocate($img, 0xFF, 0xFF, 0xFF);
// imagefill($img,0,0,$white);
// //生成随机的验证码
// $str = '';
// for($i = 0; $i < 4; $i++) {
// $str.=dechex(rand(0,15));   //生成十六进制的数字
// }
// $font='C:\Windows\Fonts\simsun.ttc';
// imagettftext($img,30,0, 10,35,$black,$font,$str );

// //输出验证码
// header("content-type: image/png");
// imagepng($img);
// $filename='logo.png';
// imagepng($img,$filename);
// imagedestroy($img);

$img = imagecreatetruecolor(100, 40);
$black = imagecolorallocate($img, 0x00, 0x00, 0x00);
$green = imagecolorallocate($img, 0x00, 0xFF, 0x00);
$white = imagecolorallocatealpha($img, 0, 0, 0, 127);
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
// imagepng($img);
$filename='logo.png';
imagepng($img,$filename);
imagedestroy($img);

$url = 'http://www.iyi8.com/uploadfile/2014/0521/20140521105216901.jpg';
$content = file_get_contents($url);
$filename = 'bj.jpg';
file_put_contents($filename, $content);

//开始添加水印操作logo
$im = imagecreatefromjpeg($filename);
$logo = imagecreatefrompng('logo.png');
$size = getimagesize('logo.png');
imagecopy($im, $logo, 15, 15, 0, 0, $size[0], $size[1]); 
 
header("content-type: image/jpeg");
imagejpeg($im);

