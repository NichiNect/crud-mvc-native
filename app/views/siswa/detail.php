<div class="container mt-4">
	
	<div class="row">
		<div class="col-md-6">
			<h2>Detail Siswa</h2>
			
			<div class="card mt-3" style="width: 18rem;">
				<div class="card-body">
					<h5 class="card-title"><?= $data['siswa']['nama']; ?></h5>
					<h6 class="card-subtitle mb-3 text-muted"><?= $data['siswa']['kelas']; ?></h6>
					<p class="card-text mb-2">Jurusan : <?= $data['siswa']['jurusan']; ?></p>
					<p class="card-text">No Absen : <?= $data['siswa']['no']; ?></p>
					<a href="<?= BASEURL; ?>/siswa" class="card-link">Kembali</a>
				</div>
			</div>
		</div>
	</div>

</div>