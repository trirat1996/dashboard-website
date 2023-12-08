<nav id="sidebar" class="sidebar js-sidebar ">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.php">
          <span class="align-middle">รายงานสรุปประจำเดือน</span>
        </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
					ระบบแจ้งซ่อมอุปกรณ์ไอที IT Repair
					</li>

			
						

						<li class="sidebar-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                <i class="align-middle" data-feather="settings"></i>
              </a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">   <i class="align-middle" data-feather="sliders"></i>
              <span class="align-middle">รายงานสรุป</span>
              </a>
							<div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href="index.php"><i class="align-middle me-1" data-feather="pie-chart"></i>รายงานสรุป ปี <?php echo $todayyy2; ?></a>
								<a class="dropdown-item" href="pre-year.php"><i class="align-middle me-1" data-feather="pie-chart"></i>รายงานสรุป ปี <?php echo $todayyy3; ?></a>

								 		<?php 
					$prob = array("cpn","rng","sni","smi","kbi","trg","nrt","png","pkt");
					$pron = array("จังหวัดชุมพร","จังหวัดระนอง","จังหวัดสุราษฏร์ธานี","อำเภอเกาะสมุย และ เกาะพงัน","จังหวัดกระบี่","จังหวัดตรัง","จังหวัดนครศรีธรรมราช","จังหวัดพังงา","จังหวัดภูเก็ต");
                     $arrnum = count($prob);

					for($xqq = 0; $xqq < $arrnum; $xqq++) {
						
					 ?>

			
				<a class="dropdown-item"  href="custer.php?prob=<?php echo $prob[$xqq]; ?>&pron=<?php echo $pron[$xqq]; ?>">
		
           <i class="align-middle" data-feather="bar-chart-2"></i>  <span class="align-middle"><?php echo  $pron[$xqq]; ?></span>
            </a>
			

			<?php } ?>
					
							
							</div>
						</li>

					<li class="sidebar-item">
								<a class="nav-link  d-none d-sm-inline-block"  href="https://itccm.triplet.co.th/ITRP_ONLINE/indexx.php" >     <i class="align-middle" data-feather="book"></i> <span class="align-middle">เข้าระบบ IT Repair</span> </a>
			
					</li>
						<li class="sidebar-item">
								<a class="nav-link  d-none d-sm-inline-block"  href="chapped/index.php" >     <i class="align-middle" data-feather="book"></i> <span class="align-middle">บันทึกรายการซ่อมที่ต้องขออนุมัติ</span> </a>
			
					</li>

				<!--	<li class="sidebar-item">
						<a class="sidebar-link" href="month2.php">
              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle"></span>
            </a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="month3.php">
              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">ทั้งหมดในระบบ</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="pages-profile.html">
              <i class="align-middle" data-feather="user"></i> <span class="align-middle">เดือนที่ผ่านมา</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="pages-sign-in.html">
              <i class="align-middle" data-feather="log-in"></i> <span class="align-middle">Sign In</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="pages-sign-up.html">
              <i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">Sign Up</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="pages-blank.html">
              <i class="align-middle" data-feather="book"></i> <span class="align-middle">Blank</span>
            </a>
					</li>

					<li class="sidebar-header">
						Tools & Components
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="ui-buttons.html">
              <i class="align-middle" data-feather="square"></i> <span class="align-middle">Buttons</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="ui-forms.html">
              <i class="align-middle" data-feather="check-square"></i> <span class="align-middle">Forms</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="ui-cards.html">
              <i class="align-middle" data-feather="grid"></i> <span class="align-middle">Cards</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="ui-typography.html">
              <i class="align-middle" data-feather="align-left"></i> <span class="align-middle">Typography</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="icons-feather.html">
              <i class="align-middle" data-feather="coffee"></i> <span class="align-middle">Icons</span>
            </a>
					</li>

					<li class="sidebar-header">
						Plugins & Addons
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="charts-chartjs.html">
              <i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Charts</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="maps-google.html">
              <i class="align-middle" data-feather="map"></i> <span class="align-middle">Maps</span>
            </a>
					</li>-->
				</ul>

		<!--		<div class="sidebar-cta">
					<div class="sidebar-cta-content">
						<strong class="d-inline-block mb-2">Upgrade to Pro</strong>
						<div class="mb-3 text-sm">
							Are you looking for more components? Check out our premium version.
						</div>
						<div class="d-grid">
							<a href="upgrade-to-pro.html" class="btn btn-primary">Upgrade to Pro</a>
						</div>
					</div>
				</div> -->

			</div>
		</nav>