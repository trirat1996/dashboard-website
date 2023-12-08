<!DOCTYPE html>
<html lang="en">
<?php
error_reporting(E_ERROR | E_PARSE);
 require_once "config.php"; ?>
 <?php 


$mont = array("มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");

$today = date("y-m" ,mktime(0,0,0,11,11,2022));
$todayoo = date("y-m-d",mktime(0,0,0,11,10,2022));
$todaya = date("y-m",mktime(0,0,0,11,9,2022));
$todayb = date("y-m",mktime(0,0,0,11,8,2022));
$todayc = date("y-m",mktime(0,0,0,11,7,2022));
$todayd = date("y-m",mktime(0,0,0,11,6,2022));
$todaye = date("y-m",mktime(0,0,0,11,5,2022));


$todayyy2 = date("Y",mktime(0,0,0,11,11,2022));

$todayyy3 = $todayyy2-1;

//echo $todayyy3;
//echo $todayyy;
$todayyy = date("y",mktime(0,0,0,11,11,2022));

$todayyyc = $todayyy-1;
$ym1 = $todayyy . "-01";
$ym2 = $todayyy . "-02";
$ym3 = $todayyy . "-03";
$ym4 = $todayyy . "-04";
$ym5 = $todayyy . "-05";
$ym6 = $todayyy . "-06";
$ym7 = $todayyy . "-07";
$ym8 = $todayyy . "-08";
$ym9 = $todayyy . "-09";
$ym10 = $todayyy . "-10";
$ym11 = $todayyy . "-11";
$ym12 = $todayyy . "-12";



$ymm1 = $todayyyc . "-01";
$ymm2 = $todayyyc . "-02";
$ymm3 = $todayyyc . "-03";
$ymm4 = $todayyyc . "-04";
$ymm5 = $todayyyc . "-05";
$ymm6 = $todayyyc . "-06";
$ymm7 = $todayyyc . "-07";
$ymm8 = $todayyyc . "-08";
$ymm9 = $todayyyc . "-09";
$ymm10 = $todayyyc . "-10";
$ymm11 = $todayyyc . "-11";
$ymm12 = $todayyyc . "-12";





$todaym = date("m",mktime(0,0,0,11,11,2022));
$ta = $todaym-1;
$tb = $todaym-2;
$tc = $todaym-3; 
$td = $todaym-4; 
$te = $todaym-5; 
$tf = $todaym-6;



$casea = array("จอแตก","จอเสีย","จอเป็นเส้น","เพี้ยน","หน้าจอ");//จอเสีย
$caseb = array("ช้า","ค้าง","ดิส","จอฟ้า");//hhd,แรม
$casec = array("คี","พิม","ปุ่ม");//คีย์บอด
$cased = array("แบต","batt","จอดับ");//แบตเสื่อม ชุดจ่ายไฟ
$casee = array("ไม่ติด","เมน");//เมนบอท 

$cccxx = array_merge($casea,$caseb,$casec,$cased,$casee);

$arr1 = count($casea);
$arr2 = count($caseb);
$arr3 = count($casec);
$arr4 = count($cased);
$arr5 = count($casee);
$arr6 = count($cccxx);


$noo1 = 1;
$noo2 = 1;
$noo3 = 1;

$chackmo = array("In-progress","waiting","receive" ,"approved");
$chacktt = array($todayyy);


$chackmo1 = array("In-progress","waiting","receive" ,"approved","complete","ITRO Close","close");
$chackmo2 = array("complete","ITRO Close","close" );


   ?>



<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="ITRO7">
	
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

<script src="js/jquery-3.6.0.min.js"></script>

	<title>ITRO Dashboard</title>

	<link href="css/app.css" rel="stylesheet">


  
</head>
<style type="text/css">
.active, .btn:hover {
  background-color: #666;
  color: white;
}</style>