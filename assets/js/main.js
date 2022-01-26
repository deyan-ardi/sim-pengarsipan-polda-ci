$(document).ready(function () {
	$('#dataTable').DataTable();
});
<<<<<<< HEAD
=======
$(document).ready(function () {
	const flashData = $('.flash-data').data('flashdata');
	if (flashData) {
		Swal.fire({
			icon: 'error',
			title: 'Oops...',
			text: flashData,
		})
	}
});
$(document).ready(function () {
	const flash = $('.flash-success').data('flashsuccess');
	if (flash) {
		Swal.fire({
			icon: 'success',
			title: 'Success...',
			text: flash,
		})
	}
});
$(document).ready(function () {
	const success = $('.success').data('success');
	if (success) {
		Swal.fire({
			position: 'top-end',
			icon: 'success',
			title: 'Success... <br>',
			text: success,
			showConfirmButton: false,
			timer: 1500
		})
	}
});
$(document).ready(function () {
	const gagal = $('.gagal').data('gagal');
	if (gagal) {
		Swal.fire({
			position: 'top-end',
			icon: 'error',
			title: 'Oppss... <br>',
			text: gagal,
			showConfirmButton: false,
			timer: 1500
		})
	}
});
$('.tombol-hapus').on('click', function (e) {
	e.preventDefault();
	const href = $(this).attr('href');
	Swal.fire({
		title: 'Apakah Anda Yakin Ingin Menghapus?',
		text: "Semua file yang berkaitan dengan data ini akan terhapus secara permanen",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Yakin'
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	})

});
$('.log-out').on('click', function (e) {
	e.preventDefault();
	const href = $(this).attr('href');
	Swal.fire({
		title: 'Apakah Anda Yakin?',
		text: "Pastikan Pekerjaan Anda Telah Tersimpan Sebelumnya",
		icon: 'question',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Yakin'
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	})

});
>>>>>>> 2305d0a090190a8cf2865d008f96066c86ca4937
