$(document).ready(function() {
	// Tambah Data
	$('#tambahDataSiswa').on('click', function(e) {
		e.preventDefault();

		$('.modal-title').html("Form Tambah Data Siswa");
		$('.modal #submit').html("Tambah Data");
	});

	// Edit Data
	$('.modalEditSiswa').on('click', function(e) {
		e.preventDefault();

		const id = $(this).data('idsiswa');
		const url = $(this).attr('href');
		const urlUpdate = $(this).data('urlupdate');

		$('.modal-title').html("Form Edit Data Siswa");
		$('.modal #submit').html("Edit Data");
		$('.modal form').attr('action', urlUpdate);

		$.ajax({
			url: url,
			data: {id: id},
			method: 'post',
			dataType: 'json',
			success: function(data) {
				$('.modal #id').val(data.id);
				$('.modal #nama').val(data.nama);
				$('.modal #no').val(data.no);
				$('.modal #kelas').val(data.kelas);
				$('.modal #jurusan').val(data.jurusan);
			}
		});

	});
});