<script >
		

		//line
var ctxL = document.getElementById("lineChart").getContext('2d');
var myLineChart = new Chart(ctxL, {
  type: 'line',
  data: {
    labels: ["<?php echo $mont[$tf];?>", "<?php echo $mont[$te];?>", "<?php echo $mont[$td];?>", "<?php echo $mont[$tc];?>", "<?php echo $mont[$tb];?>", "<?php echo $mont[$ta];?>"],
    datasets: [
           {
      label: "ผ่านการอนุมัติการซ่อม",
      data: [<?php echo $gggn;?>, <?php echo $gggb;?>, <?php echo $gggv;?>, <?php echo $gggc;?>, <?php echo $gggx;?>, <?php echo $gggz;?>],
      backgroundColor: [
        'rgba(198, 14, 179, .2)',
      ],
      borderColor: [
        'rgba(198, 14, 179, 1)',
      ],
      borderWidth: 2
    },
    {
      label: "อยู่ระหว่างดำเนินการ ITHQ",
      data: [<?php echo $dddn;?>, <?php echo $dddb;?>, <?php echo $dddv;?>, <?php echo $dddc;?>, <?php echo $dddx;?>, <?php echo $dddz;?>],
      backgroundColor: [
        'rgba(236, 213, 23, .2)',
      ],
      borderColor: [
        'rgba(236, 213, 23, 1)',
      ],
      borderWidth: 2
    },
    {
      label: "ส่งซ่อม ITHQ",
      data: [<?php echo $aaan;?>, <?php echo $aaab;?>, <?php echo $aaav;?>, <?php echo $aaac;?>, <?php echo $aaax;?>, <?php echo $aaaz;?>],
      backgroundColor: [
        'rgba(196, 42, 14, .2)',
      ],
      borderColor: [
        'rgba(196, 42, 14, 1)',
      ],
      borderWidth: 2
    },
     {
      label: "ITHQ ตรวจเอกสาร",
      data: [<?php echo $eeen;?>, <?php echo $eeeb;?>, <?php echo $eeev;?>, <?php echo $eeec;?>, <?php echo $eeex;?>, <?php echo $eeez;?>],
      backgroundColor: [
        'rgba(230, 137, 13, .2)',
      ],
      borderColor: [
        'rgba(230, 137, 13, 1)',
      ],
      borderWidth: 2
    },
    {
      label: "ปิดใบงานโดย ITRO",
      data: [<?php echo $bbbn;?>, <?php echo $bbbb;?>, <?php echo $bbbv;?>, <?php echo $bbbc;?>, <?php echo $bbbx;?>, <?php echo $bbbz;?>],
      backgroundColor: [
        'rgba(54, 121, 40, .2)',
      ],
      borderColor: [
        'rgba(54, 121, 40, 1)',
      ],
      borderWidth: 2
    },

    {
      label: "ปิดงานโดย ITHQ",
      data: [<?php echo $cccn;?>, <?php echo $cccb;?>, <?php echo $cccv;?>, <?php echo $cccc;?>, <?php echo $cccx;?>, <?php echo $cccz;?>],
      backgroundColor: [
        'rgba(43, 84, 187, .2)',
      ],
      borderColor: [
        'rgba(43, 84, 187, 1)',
      ],
      borderWidth: 2
    }

    ]
  },
  options: {
    responsive: true
  }
});
	</script>