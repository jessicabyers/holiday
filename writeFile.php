<?php
$file = fopen("cameras.txt","w");
echo fwrite($file,"0, Canon, 20d, 899, 9.5,14, Canon_20d.jpg"."\n");
echo fwrite($file,"1, Fuji, 9500, 499, 9.1,23, Fuji_9500.jpg"."\n");
echo fwrite($file,"2, Sony, r1, 299, 8.6,33, Sony_r1.jpg"."\n");
echo fwrite($file,"3, Fuji, s3 pro, 799, 8.9,21, Fuji_s3pro.jpg"."\n");
fclose($file);
?>

