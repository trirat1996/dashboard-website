<?php
 $mes = "Hello, AmplysmiSoftthToyotaethehergrecBMWpn";
$smi = array("Volvo", "BMW", "Toyota");
$arrlength = count($smi);

for($x = 0; $x < $arrlength; $x++) {
  echo $smi[$x];
  if( strpos($mes, $smi[$x])) {
     
        echo "พบ";
     
    }
}
?>




if( strpos($cass, "จอ")) { $casea1[] = $row['column_2']; }//จอแตก,เสีย

elseif (strpos($cass, "ช้า")) {   $caseb1[] = $row['column_2'];  }//hhd,ram
elseif (strpos($cass, "ดิส")) {   $caseb1[] = $row['column_2']; }//hhd,ram
elseif (strpos($cass, "ค้าง")) {   $caseb1[] = $row['column_2']; }//hhd,ram

elseif (strpos($cass, "คี")) {   $casec1[] = $row['column_2']; }//keybord
elseif (strpos($cass, "พิม")) {   $casec1[] = $row['column_2']; }//keybord
elseif (strpos($cass, "ปุ่ม")) {   $casec1[] = $row['column_2']; }//keybord

elseif (strpos($cass, "แบต")) {   $cased1[] = $row['column_2']; }//แบต
elseif (strpos($cass, "batt")) {   $cased1[] = $row['column_2']; }//แบต

elseif (strpos($cass, "เมน")) {   $casee1[] = $row['column_2']; }//เมนบอร์ด
elseif (strpos($cass, "short")) {   $casee1[] = $row['column_2']; }//เมนบอร์ด

else {  $casex1[] = $row['column_2']; } //อื่นๆ
}
if( strpos($cass, "จอ")) { $casea2[] = $row['column_2']; }//จอแตก,เสีย

elseif (strpos($cass, "ช้า")) {   $caseb2[] = $row['column_2'];  }//hhd,ram
elseif (strpos($cass, "ดิส")) {   $caseb2[] = $row['column_2']; }//hhd,ram
elseif (strpos($cass, "ค้าง")) {   $caseb2[] = $row['column_2']; }//hhd,ram

elseif (strpos($cass, "คี")) {   $casec2[] = $row['column_2']; }//keybord
elseif (strpos($cass, "พิม")) {   $casec2[] = $row['column_2']; }//keybord
elseif (strpos($cass, "ปุ่ม")) {   $casec2[] = $row['column_2']; }//keybord

elseif (strpos($cass, "แบต")) {   $cased2[] = $row['column_2']; }//แบต
elseif (strpos($cass, "batt")) {   $cased2[] = $row['column_2']; }//แบต

elseif (strpos($cass, "เมน")) {   $casee2[] = $row['column_2']; }//เมนบอร์ด
elseif (strpos($cass, "short")) {   $casee2[] = $row['column_2']; }//เมนบอร์ด

else {$casex2[] = $row['column_2'];} 
}

}


if (is_null($casea1)) { $casea1 = 0; } else { $casea1 =count($casea1); }
if (is_null($caseb1)) { $caseb1 = 0; } else { $caseb1 =count($caseb1); }
if (is_null($casec1)) { $casec1 = 0; } else { $casec1 =count($casec1); }
if (is_null($cased1)) { $cased1 = 0; } else { $cased1 =count($cased1); }
if (is_null($pktq)) { $pktq = 0; } else { $pktq =count($pktq); }
if (is_null($kbiq)) { $kbiq = 0; } else { $kbiq =count($kbiq); }
if (is_null($trgq)) { $trgq = 0; } else { $trgq =count($trgq); }
if (is_null($nrtq)) { $nrtq = 0; } else { $nrtq =count($nrtq); }
if (is_null($cpnq)) { $cpnq = 0; } else { $cpnq =count($cpnq); }

//if (is_null($suuid)) { $suuid = 0; } else { $suuid =count($suuid); }












$sql = $pdo->query("SELECT * FROM itccm");
while ($row = $sql->fetch()) {
 
if (in_array($row['column_2'], $chackmo1)) {
 $cass = $row['column_13'];

for($z1 = 0; $z1 < $arr1; $z1++) {
  if( strpos($cass, $casea[$Z1])) { $ca1[] = $row['RP_NO']; }}

for($z2 = 0; $z2 < $arr2; $z2++) {
  if( strpos($cass, $caseb[$Z2])) { $ca2[] = $row['RP_NO']; }}

for($z3 = 0; $z3 < $arr3; $z3++) {
  if( strpos($cass, $casec[$Z3])) { $ca3[] = $row['RP_NO']; }}

for($z4 = 0; $z4 < $arr4; $z4++) {
  if( strpos($cass, $cased[$Z4])) { $ca4[] = $row['RP_NO']; }}

for($z5 = 0; $z5 < $arr5; $z5++) {
  if( strpos($cass, $casee[$Z5])) { $ca5[] = $row['RP_NO']; }}

$ca6[] = $row['RP_NO'];  


}
if (in_array($row['column_2'], $chackmo2)) {
 $cass = $row['column_13'];

for($z1q = 0; $z1q < $arr1; $z1q++) {
  if( strpos($cass, $casea[$Z1q])) { $ca11[] = $row['RP_NO']; }}

for($z2 = 0; $z2 < $arr2; $z2++) {
  if( strpos($cass, $caseb[$Z2])) { $ca21[] = $row['RP_NO']; }}

for($z3 = 0; $z3 < $arr3; $z3++) {
  if( strpos($cass, $casec[$Z3])) { $ca31[] = $row['RP_NO']; }}

for($z4 = 0; $z4 < $arr4; $z4++) {
  if( strpos($cass, $cased[$Z4])) { $ca41[] = $row['RP_NO']; }}

for($z5 = 0; $z5 < $arr5; $z5++) {
  if( strpos($cass, $casee[$Z5])) { $ca51[] = $row['RP_NO']; }}

 $ca61[] = $row['RP_NO'];  

}
}

if (is_null($ca1)) { $ca1 = 0; } else { $ca1 =count($ca1); }
if (is_null($ca2)) { $ca2 = 0; } else { $ca2 =count($ca2); }
if (is_null($ca3)) { $ca3 = 0; } else { $ca3 =count($ca3); }
if (is_null($ca4)) { $ca4 = 0; } else { $ca4 =count($ca4); }
if (is_null($ca5)) { $ca5 = 0; } else { $ca5 =count($ca5); }
if (is_null($ca6)) { $ca6 = 0; } else { $ca6 =count($ca6); }

if (is_null($ca11)) { $ca11 = 0; } else { $ca11 =count($ca11); }
if (is_null($ca21)) { $ca21 = 0; } else { $ca21 =count($ca21); }
if (is_null($ca31)) { $ca31 = 0; } else { $ca31 =count($ca31); }
if (is_null($ca41)) { $ca41 = 0; } else { $ca41 =count($ca41); }
if (is_null($ca51)) { $ca51 = 0; } else { $ca51 =count($ca51); }
if (is_null($ca61)) { $ca61 = 0; } else { $ca61 =count($ca61); }


echo $ca1."</br>";
echo $ca2."</br>";
echo $ca3."</br>";
echo $ca4."</br>";
echo $ca5."</br>";
echo $ca6."</br>";

echo $ca11."</br>---";
echo $ca21."</br>---";
echo $ca31."</br>---";
echo $ca41."</br>---";
echo $ca51."</br>---";
echo $ca61."</br>---";

 ?>















 <?php 


$ITRO = "ITRO Close";
$ITHQ = "close";


$sql = $pdo->query("SELECT * FROM itccm");
while ($row = $sql->fetch()) {
 $dateaa = date_create($row['column_15']);
$onemonthq = date_format($dateaa,"y-m");

if ($today == $onemonth)  {


if ($row['column_2'] == $ITRO) {

$startd1 = date_create($row['column_15']);
$startd2a = date_format($startd1,"Y-m-d");
$endd1 = date_create($row['column_16']);
$endd2a = date_format($endd1,"Y-m-d");

$date1=date_create($startd2a);
$date2=date_create($endd2a);
$diff=date_diff($date1,$date2);
$ff = $diff->format("%a");
 $t = date($ff);

$itrom1[] = $t;


}
if ($row['column_2'] == $ITHQ) {


$startd1 = date_create($row['column_15']);
$startd2a = date_format($startd1,"Y-m-d");
$endd1 = date_create($row['column_16']);
$endd2a = date_format($endd1,"Y-m-d");

$date1=date_create($startd2a);
$date2=date_create($endd2a);
$diff=date_diff($date1,$date2);
$ff = $diff->format("%a");
$t = date($ff);

$ithqm1[] = $t;


}

}


if ($todaya == $onemonth) {


if ($row['column_2'] == $ITRO) {

$startd1 = date_create($row['column_15']);
$startd2a = date_format($startd1,"Y-m-d");
$endd1 = date_create($row['column_16']);
$endd2a = date_format($endd1,"Y-m-d");

$date1=date_create($startd2a);
$date2=date_create($endd2a);
$diff=date_diff($date1,$date2);
$ff = $diff->format("%a");
$t = date($ff);

$itrom2[] = $t;

}
if ($row['column_2'] == $ITHQ) {


$startd1 = date_create($row['column_15']);
$startd2a = date_format($startd1,"Y-m-d");
$endd1 = date_create($row['column_16']);
$endd2a = date_format($endd1,"Y-m-d");

$date1=date_create($startd2a);
$date2=date_create($endd2a);
$diff=date_diff($date1,$date2);
$ff = $diff->format("%a");
$t = date($ff);

$ithqm2[] = $t;


}

}



if ($todayb == $onemonth){


if ($row['column_2'] == $ITRO) {

$startd1 = date_create($row['column_15']);
$startd2a = date_format($startd1,"Y-m-d");
$endd1 = date_create($row['column_16']);
$endd2a = date_format($endd1,"Y-m-d");

$date1=date_create($startd2a);
$date2=date_create($endd2a);
$diff=date_diff($date1,$date2);
$ff = $diff->format("%a");
$t = date($ff);

$itrom3[] = $t;


}
if ($row['column_2'] == $ITHQ) {


$startd1 = date_create($row['column_15']);
$startd2a = date_format($startd1,"Y-m-d");
$endd1 = date_create($row['column_16']);
$endd2a = date_format($endd1,"Y-m-d");

$date1=date_create($startd2a);
$date2=date_create($endd2a);
$diff=date_diff($date1,$date2);
$ff = $diff->format("%a");
$t = date($ff);

$ithqm3[] = $t;


}

}




if ($todayc == $onemonth) {


if ($row['column_2'] == $ITRO) {

$startd1 = date_create($row['column_15']);
$startd2a = date_format($startd1,"Y-m-d");
$endd1 = date_create($row['column_16']);
$endd2a = date_format($endd1,"Y-m-d");

$date1=date_create($startd2a);
$date2=date_create($endd2a);
$diff=date_diff($date1,$date2);
$ff = $diff->format("%a");
$t = date($ff);

$itrom4[] = $t;


}
if ($row['column_2'] == $ITHQ) {


$startd1 = date_create($row['column_15']);
$startd2a = date_format($startd1,"Y-m-d");
$endd1 = date_create($row['column_16']);
$endd2a = date_format($endd1,"Y-m-d");

$date1=date_create($startd2a);
$date2=date_create($endd2a);
$diff=date_diff($date1,$date2);
$ff = $diff->format("%a");
$t = date($ff);

$ithqm4[] = $t;


}

}



if ($todayd == $onemonth) {


if ($row['column_2'] == $ITRO) {

$startd1 = date_create($row['column_15']);
$startd2a = date_format($startd1,"Y-m-d");
$endd1 = date_create($row['column_16']);
$endd2a = date_format($endd1,"Y-m-d");

$date1=date_create($startd2a);
$date2=date_create($endd2a);
$diff=date_diff($date1,$date2);
$ff = $diff->format("%a");
$t = date($ff);

$itrom5[] = $t;


}
if ($row['column_2'] == $ITHQ) {


$startd1 = date_create($row['column_15']);
$startd2a = date_format($startd1,"Y-m-d");
$endd1 = date_create($row['column_16']);
$endd2a = date_format($endd1,"Y-m-d");

$date1=date_create($startd2a);
$date2=date_create($endd2a);
$diff=date_diff($date1,$date2);
$ff = $diff->format("%a");
$t = date($ff);

$ithqm5[] = $t;


}

}


if ($todaye == $onemonth) {


if ($row['column_2'] == $ITRO) {

$startd1 = date_create($row['column_15']);
$startd2a = date_format($startd1,"Y-m-d");
$endd1 = date_create($row['column_16']);
$endd2a = date_format($endd1,"Y-m-d");

$date1=date_create($startd2a);
$date2=date_create($endd2a);
$diff=date_diff($date1,$date2);
$ff = $diff->format("%a");
$t = date($ff);

$itrom6[] = $t;


}
if ($row['column_2'] == $ITHQ) {


$startd1 = date_create($row['column_15']);
$startd2a = date_format($startd1,"Y-m-d");
$endd1 = date_create($row['column_16']);
$endd2a = date_format($endd1,"Y-m-d");

$date1=date_create($startd2a);
$date2=date_create($endd2a);
$diff=date_diff($date1,$date2);
$ff = $diff->format("%a");
$t = date($ff);

$ithqm6[] = $t;


}

}



}

if (is_null($itrom1)) { $itromc1 = 0; } else {echo $itromc1 = count($itrom1); }
if (is_null($itrom2)) { $itromc2 = 0; } else {echo  $itromc2 = count($itrom2); }
if (is_null($itrom3)) { $itromc3 = 0; } else {echo  $itromc3 = count($itrom3); }
if (is_null($itrom4)) { $itromc4 = 0; } else {echo  $itromc4 = count($itrom4); }
if (is_null($itrom5)) { $itromc5 = 0; } else {echo  $itromc5 = count($itrom5); }
if (is_null($itrom6)) { $itromc6 = 0; } else {echo  $itromc6 = count($itrom6); }




if (is_null($ithqm1)) { $ithqmc1 = 0; } else {echo $ithqmc1 = count($ithqm1); }
if (is_null($ithqm2)) { $ithqmc2 = 0; } else {echo  $ithqmc2 = count($ithqm2); }
if (is_null($ithqm3)) { $ithqmc3 = 0; } else { $ithqmc3 = count($ithqm3); }
if (is_null($ithqm4)) { $ithqmc4 = 0; } else { $ithqmc4 = count($ithqm4); }
if (is_null($ithqm5)) { $ithqmc5 = 0; } else { $ithqmc5 = count($ithqm5); }
if (is_null($ithqm6)) { $ithqmc6 = 0; } else { $ithqmc6 = count($ithqm6); }
/*

$sumitro1 = array_sum($itromc1);
$sumitro2 = array_sum($itromc2);
$sumitro3 = array_sum($itromc3);
$sumitro4 = array_sum($itromc4);
$sumitro5 = array_sum($itromc5);
$sumitro6 = array_sum($itromc6);


$sumithq1 = array_sum($ithqmc1);
$sumithq2 = array_sum($ithqmc2);
$sumithq3 = array_sum($ithqmc3);
$sumithq4 = array_sum($ithqmc4);
$sumithq5 = array_sum($ithqmc5);
$sumithq6 = array_sum($ithqmc6);

$qwe1 =  $sumitro1 / $itromc1;
$qwe2 =  $sumitro2 / $itromc2;
$qwe3 =  $sumitro3 / $itromc3;
$qwe4 =  $sumitro4 / $itromc4;
$qwe5 =  $sumitro5 / $itromc5;
$qwe6 =  $sumitro6 / $itromc6;

$qwf1 =  $sumithq1 / $ithqmc1;
$qwf2 =  $sumithq2 / $ithqmc2;
$qwf3 =  $sumithq3 / $ithqmc3;
$qwf4 =  $sumithq4 / $ithqmc4;
$qwf5 =  $sumithq5 / $ithqmc5;
$qwf6 =  $sumithq6 / $ithqmc6;


$qwet1  = $qwe1/30;
$qwet2  = $qwe2/30;
$qwet3  = $qwe3/30;
$qwet4  = $qwe4/30;
$qwet5  = $qwe5/30;
$qwet6  = $qwe6/30;

$qwft1  = $qwf1/30;
$qwft2  = $qwf2/30;
$qwft3  = $qwf3/30;
$qwft4  = $qwf4/30;
$qwft5  = $qwf5/30;
$qwft6  = $qwf6/30;


echo $exet1 = number_format($qwet1, 2 );
$exet2 = number_format($qwet2, 2 );
$exet3 = number_format($qwet3, 2 );
$exet4 = number_format($qwet4, 2 );
$exet5 = number_format($qwet5, 2 );
$exet6 = number_format($qwet6, 2 );

$exev1 = number_format($qwft1, 2 );
$exev2 = number_format($qwft2, 2 );
$exev3 = number_format($qwft3, 2 );
$exev4 = number_format($qwft4, 2 );
$exev5 = number_format($qwft5, 2 );
$exev6 = number_format($qwft6, 2 );
/*
echo $casi1."</br>";
echo $casi2."</br>";
echo $casi3."</br>";
echo $casi4."</br>";
echo $casi5."</br>";
echo $casi6."</br>------------------</br>";

echo $casi1q."</br>";
echo $casi2q."</br>";
echo $casi3q."</br>";
echo $casi4q."</br>";
echo $casi5q."</br>";
echo $casi6q."</br>";



if ($sumitro <= "30") {
echo  $sumitro."day";
}  else {
  echo $sumitroq = round($sumitro / $itromc)."month";
}

if ($sumithq <= "30") {
echo $sumithq."day";
}  else {
  echo $sumithqq = round($sumithq / $ithqmc)."month";
}


*/



 ?>



              <!--  <div class="card-header">
                  <h5 class="card-title">Line Chart</h5>
                  <h6 class="card-subtitle text-muted">A line chart is a way of plotting data points on a line.</h6>
                </div>-->
            <div class="row">
            <div class="col-6 col-lg-12">
              <div class="card flex-fill w-100">
                <div class="card-header">
                  <h5 class="card-title">Line Chart</h5>
                  <h6 class="card-subtitle text-muted">A line chart is a way of plotting data points on a line.</h6>
                </div>
                <div class="card-body">
                  <div class="chart">
                    <canvas id="chartjs-lineq"></canvas>
                  </div>
                </div>
              </div>
            </div>
                </div>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      // Line chart
      new Chart(document.getElementById("chartjs-lineq"), {
        type: "line",
        data: {
          labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
          datasets: [{
            label: "Sales ($)",
            fill: true,
            backgroundColor: "transparent",
            borderColor: window.theme.primary,
            data: [2115, 1562, 1584, 1892, 1487, 2223, 2966, 2448, 2905, 3838, 2917, 3327]
          }, {
            label: "Orders",
            fill: true,
            backgroundColor: "transparent",
            borderColor: "#adb5bd",
            borderDash: [4, 4],
            data: [958, 724, 629, 883, 915, 1214, 1476, 1212, 1554, 2128, 1466, 1827]
          }]
        },
        options: {
          maintainAspectRatio: false,
          legend: {
            display: false
          },
          tooltips: {
            intersect: false
          },
          hover: {
            intersect: true
          },
          plugins: {
            filler: {
              propagate: false
            }
          },
          scales: {
            xAxes: [{
              reverse: true,
              gridLines: {
                color: "rgba(0,0,0,0.05)"
              }
            }],
            yAxes: [{
              ticks: {
                stepSize: 500
              },
              display: true,
              borderDash: [5, 5],
              gridLines: {
                color: "rgba(0,0,0,0)",
                fontColor: "#fff"
              }
            }]
          }
        }
      });
    });
  </script>