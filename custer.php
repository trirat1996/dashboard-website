
<?php include 'head.php';?>
<body>
	<div class="wrapper">
	<?php include 'menu.php';?>	

		<div class="main">

			<?php include 'headmenu.php';?>

			<main class="content">
				<div class="container-fluid p-0">

		<script src="js/app.js"></script>				

<?php

$chackmo2 = array("complete","ITRO Close","close" );
$chackmo = array("In-progress","waiting","receive" ,"approved");
$chacktt = array($today,$todaya,$todayb,$todayc,$todayd,$todaye);

$topprob = $_GET['prob'];

$toppron = $_GET['pron'];

$noo1 = 1;
$noo2 = 1;

if ($topprob == "sni") {
$kon = array("SNI/Surat","SNI/Collection","Asset","Office","SNI/Network","Contact","SNI/Online");//สุราษ
$arr = count($kon);

}

if ($topprob == "smi") {
$kon = array("SMI");//สมุย
$arr = count($kon);
}
if ($topprob == "png") {
 $kon = $png = array("PKT/Phangnga");//พังงา
$arr = count($kon);
}
if ($topprob == "rng") {
 $kon = $rng = array("SNI/Ranong");//ระนอง
$arr = count($kon);
}
if ($topprob == "pkt") {
$kon = $pkt = array("Cluster - PKT");//ภูเก็ต
$arr = count($kon); 
}
if ($topprob == "kbi") {
 $kon =  array("NRT/Krabi");//กระบี่
$arr = count($kon);
}
if ($topprob == "trg") {
$kon = array("NRT/Trang");//ตรัง
$arr = count($kon); 
}
if ($topprob == "nrt") {
 $kon = array("NRT/Nakhon","NRT/Network","NRT/Online");//นคร
$arr = count($kon);
}
if ($topprob == "cpn") {
$kon = array("SNI/Chu");//ชุมพร 
$arr = count($kon);
}



?>

								
					

					
	<div class="row">
<h3 class="h3 mb-3"><strong>รายงานสถานะการซ่อมของ <?php echo $_GET['pron'];?>	</strong></h3>
</div>




                          
	<div class="row">

<?php include 'data/data2.php';?>
 <?php include 'data/data5.php';?> 
 
</div>
	
	<div class="row">
<?php include 'data/data3.php';?>

</div>

	<!--				<div class="row">
						<div class="col-12 col-lg-12 col-xxl-12 d-flex">
							<div class="card flex-fill">
								<div class="card-header">
									

							
								</div>
							
							</div>
						</div>
			</div>-->

				</div>
			</main>
<?php include 'footer.php';?>

		</div>
	</div>




	
	
</body>
<?php 



   // Close connection
                    unset($pdo);



 ?>
</html>