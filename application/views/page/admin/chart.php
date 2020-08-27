<script type="text/javascript">
	$(function() {
		//BAR CHART
		var bar = new Morris.Bar({
			element: 'chart',
			resize: true,
			data: [{
					y: 'Jan',
					a: '<?php echo $dt_msuk_1 ?>',
					b: '<?php echo $dt_kluar_1 ?>'
				},
				{
					y: 'Feb',
					a: '<?php echo $dt_msuk_2 ?>',
					b: '<?php echo $dt_kluar_2 ?>'
				},
				{
					y: 'Maret',
					a: '<?php echo $dt_msuk_3 ?>',
					b: '<?php echo $dt_kluar_3 ?>'
				},
				{
					y: 'April',
					a: '<?php echo $dt_msuk_4 ?>',
					b: '<?php echo $dt_kluar_4 ?>'
				},
				{
					y: 'Mei',
					a: '<?php echo $dt_msuk_5 ?>',
					b: '<?php echo $dt_kluar_5 ?>'
				},
				{
					y: 'Juni',
					a: '<?php echo $dt_msuk_6 ?>',
					b: '<?php echo $dt_kluar_6 ?>'
				},
				{
					y: 'Juli',
					a: '<?php echo $dt_msuk_7 ?>',
					b: '<?php echo $dt_kluar_7 ?>'
				},
				{
					y: 'Agt',
					a: '<?php echo $dt_msuk_8 ?>',
					b: '<?php echo $dt_kluar_8 ?>'
				},
				{
					y: 'Sep',
					a: '<?php echo $dt_msuk_9 ?>',
					b: '<?php echo $dt_kluar_9 ?>'
				},
				{
					y: 'Okt',
					a: '<?php echo $dt_msuk_10 ?>',
					b: '<?php echo $dt_kluar_10 ?>'
				},
				{
					y: 'Nov',
					a: '<?php echo $dt_msuk_11 ?>',
					b: '<?php echo $dt_kluar_11 ?>'
				},
				{
					y: 'Des',
					a: '<?php echo $dt_msuk_12 ?>',
					b: '<?php echo $dt_kluar_12 ?>'
				}
			],
			barColors: ['#26B99A', '#3498DB'],
			xkey: 'y',
			ykeys: ['a', 'b'],
			labels: ['surat masuk', 'surat keluar'],
			hideHover: 'auto'
		});
	});
</script>
