<?php
require_once 'phpqrcode/qrlib.php';

$path = 'qrcodes/';
$file = $path.uniqid().".png";


//text to output
$text = "Dr. Maharazu Mamman";
QRcode::png($text, $file, 'L', 10, 2);
//png(text, file, ECC_Level,Pixel_size, Frame_size);

echo "<center><img src='".$file."'><center>";


?>