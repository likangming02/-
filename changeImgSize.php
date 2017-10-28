<?php
//按比例改变图片大小
//function changeImgSize($src_filename, $width,$path) {
////    $src_filename = './a.jpg'; $path? :str_replace('.jpg', "Wth$width.jpg", $src_filename)
//    $src_img = imagecreatefromjpeg($src_filename);
//    $size = getimagesize($src_filename);
//    $sw = $size[0];
//    $sh = $size[1];
//    
//    $height=$width / $sw * $sh;    
//    $out_img = imagecreatetruecolor($width, $height);
//
//    imagecopyresampled($out_img, $src_img, 0, 0, 0, 0, $width, $height, $sw, $sh);
//   
//    $filename =$path."\Wth$width.jpg";
//    echo $filename;
//    imagejpeg($out_img, $filename);
//}



//function changeImgSize($src_filename,$Cwidth=null,$Cheight=null,$path=null) {
//    $ext=end(explode('.', $src_filename));
//    die($ext);
//    switch ($ext){
//       case 'jpg':
//           $src_img = imagecreatefromjpeg($src_filename);
//           biantu($src_filename,$src_img,$Cwidth=null,$Cheight=null);
//           $filename =$path? $path."\Wth$width.jpg":str_replace('.jpg', "Wth$width.jpg", $src_filename);//判断是否有传$path值
//           imagejpeg($out_img, $filename);
//           break;
//       case'png':
//           $src_img = imagecreatefrompng($src_filename);
//           break;
//       case'gif':
//           $src_img = imagecreatefromgif($src_filename);
//           break;
//       default :
//           die('图片地址错误,选择正确图片格式') ;
//    }
//}
//function biantu($src_filename,$src_img,$Cwidth=null,$Cheight=null){
//    $size = getimagesize($src_filename);
//    $sw = $size[0];
//    $sh = $size[1];
//    $width=$Cwidth?$Cwidth:$sw;                     //判断是否有传$Cwidth值
//    $height=$Cheight?$Cheight:$width / $sw * $sh;   //判断是否有传$Cheight值
//    $out_img = imagecreatetruecolor($width, $height);
//    imagecopyresampled($out_img, $src_img, 0, 0, 0, 0, $width, $height, $sw, $sh);
//    return $out_img;
//}
changeImgSize('C:\Users\Administrator\Pictures\Pictures\andy.png');

function changeImgSize($src_filename, $Cwidth=null,$Cheight=null,$path=null) {
//    $src_filename = './a.jpg'; 
    $tmp=explode('.', $src_filename);
    $ext=end($tmp);
//    die($ext);//图片格式
    switch ($ext){
       case 'jpg':
           $src_img = imagecreatefromjpeg($src_filename);
           break;
       case'png':
           $src_img = imagecreatefrompng($src_filename);
           break;
       case'gif':
           $src_img = imagecreatefromgif($src_filename);
           break;
       default :
           die('图片地址错误,选择正确图片格式') ;
    }
    $size = getimagesize($src_filename);
    $sw = $size[0];
    $sh = $size[1];
    $width=$Cwidth?$Cwidth:$sw;                     //判断是否有传$Cwidth值
    $height=$Cheight?$Cheight:$width / $sw * $sh;   //判断是否有传$Cheight值
    $out_img = imagecreatetruecolor($width, $height);
    imagecopyresampled($out_img, $src_img, 0, 0, 0, 0, $width, $height, $sw, $sh);   
//    echo $filename;
    switch ($ext){
       case 'jpg':
           $filename =$path? $path."\Wth$width.jpg":str_replace('.jpg', "Wth$width.jpg", $src_filename);//判断是否有传$path值
           imagejpeg($out_img, $filename);
           break;
       case'png':
           $filename =$path? $path."\Wth$width.png":str_replace('.png', "Wth$width.png", $src_filename);//判断是否有传$path值
           imagejpeg($out_img, $filename);
           break;
       case'gif':
           $filename =$path? $path."\Wth$width.gif":str_replace('.gif', "Wth$width.gif", $src_filename);//判断是否有传$path值
           imagejpeg($out_img, $filename);
           break;
    }
    echo '成功改变图片大小！';
}


