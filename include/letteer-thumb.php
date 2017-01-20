<?php
// Set the content-type
header('Content-Type: image/png');

function hex2rgb($hex) {
   $hex = str_replace("#", "", $hex);

   if(strlen($hex) == 3) {
      $r = hexdec(substr($hex,0,1).substr($hex,0,1));
      $g = hexdec(substr($hex,1,1).substr($hex,1,1));
      $b = hexdec(substr($hex,2,1).substr($hex,2,1));
   } else {
      $r = hexdec(substr($hex,0,2));
      $g = hexdec(substr($hex,2,2));
      $b = hexdec(substr($hex,4,2));
   }
   $rgb = array($r, $g, $b);
   //return implode(",", $rgb); // returns the rgb values separated by commas
   return $rgb; // returns an array with the rgb values
}



$name=  strtoupper($_GET["s"]);

$chars="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$colors=array("37474f","455a64","607d8b","607d8b","616161","9e9e9e","4e342e","6d4c41","795548","ff3d00","bf360c","e64a19","ff9100","ef6c00","fb8c00","ffc400","ffd740","ffb300","ffd600","ffea00","aeea00","9e9d24","afb42b","689f38","7cb342","76ff03","43a047","00c853","69f0ae","00bfa5","00695c","009688","00838f","00acc1","00b8d4","0277bd","039be5","29b6f6","0d47a1","2196f3","673ab7","7e57c2","9575cd","b39ddb","6a1b9a","7b1fa2","8e24aa","9c27b0","ab47bc","ce93d8","ad1457","c2185b","d81b60","e91e63","ec407a","f06292","c62828","d32f2f","e53935","f44336","e57373","ef9a9a","607d8b","607d8b","616161","9e9e9e","4e342e","6d4c41","795548","ff3d00","bf360c","e64a19","ff9100","ef6c00","fb8c00","ffc400","ffd740","00838f","00acc1");


$cindex=0;
if(strlen($name)){
if(strlen($name)==1){
    $cindex=strpos($chars, $name)+1;
}else{
   
   $cindex = strpos($chars, $name[0])+strpos($chars, $name[1])+28;
}
}


$rgb = hex2rgb("#".$colors[$cindex]);



// Create the image
$im = imagecreatetruecolor(300, 300);

// Create some colors
$white = imagecolorallocate($im, $rgb[0], $rgb[1], $rgb[2]);
//$white = imagecolorallocate($im, 0, 0, 0);
$grey = imagecolorallocate($im, 255, 255, 255);
$black = imagecolorallocate($im, 255, 255, 255);
imagefilledrectangle($im, 0, 0, 300, 300, $white);


// Replace path by your own font path
$font = './Aller_Rg.ttf';
$size=118;

$type_space = imagettfbbox($size, 0, $font, $name);
$image_width = abs($type_space[4] - $type_space[0]);
//echo "  ";
$image_height = abs($type_space[5] - $type_space[1]);

// Add the text
imagettftext($im, $size, 0, 150-$image_width/2, $image_height+150-($image_height/2), $black, $font, $name);

// Using imagepng() results in clearer text compared with imagejpeg()
imagepng($im);
imagedestroy($im);
?>