<?php

$weight = $_POST["weight"];
$height = $_POST["height"];
$metric = ($weight / ($height * $height));


echo "height:$height"."<br>";
echo "weight:$weight"."<br>";
echo "BMI=$metric"."<br>";

if($_FILES["file"]["error"]>0){
echo "error :".$_FILES["file"]["error"];}


$filename = $_FILES["file"]["name"];
move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$filename);
echo '<img src="upload/'.$filename.'"/>';




?> 