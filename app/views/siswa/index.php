<div class="container mt-4">

	<div class="row">
		<div class="col-md-6">
			<?php Flashdata::flash(); ?>
		</div>
	</div>

	<div class="row mb-3">
		<div class="col-md-6">
			<!-- Button trigger modal -->
			<button type="button" id="tambahDataSiswa" class="btn btn-primary mb-2" data-toggle="modal" data-target="#formModal">
				Tambah Data
			</button>
		</div>
	</div>

	<div class="row mb-3">
		<div class="col-md-6">
			<form action="<?= BASEURL; ?>/siswa/cari" method="post">
				<div class="input-group">
					<input type="text" name="keyword" id="keyword" class="form-control" placeholder="Cari..." autocomplete="off">
					<div class="input-group-append">
						<button class="btn btn-outline-primary" type="submit" id="search" name="search">Cari!</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-6">

			<h2>Data Siswa</h2>
			
			<ul class="list-group">
				<?php foreach ($data['siswasw'] as $siswa) : ?>
					<li class="list-group-item">
						<?= $siswa['nama']; ?>
						<a href="<?= BASEURL; ?>/siswa/delete/<?= $siswa['id']; ?>" class="badge badge-danger text-white float-right p-1 ml-2" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');">Delete </a>

						<a href="<?= BASEURL; ?>/siswa/edit/<?= $siswa['id']; ?>" class="badge badge-success text-white float-right p-1 ml-2 modalEditSiswa" data-toggle="modal" data-target="#formModal" data-idsiswa="<?= $siswa['id']; ?>" data-urlupdate="<?= BASEURL; ?>/siswa/update/<?= $siswa['id']; ?>">Edit </a>

						<a href="<?= BASEURL; ?>/siswa/detail/<?= $siswa['id']; ?>" class="badge badge-warning text-white float-right p-1 ml-2">Detail </a>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>

</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Form Tambah Data Siswa</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				
				<form action="<?= BASEURL; ?>/siswa/create" method="post">
					<input type="hidden" name="id" id="id">
					<div class="form-group">
						<label for="nama">Nama</label>
						<input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan nama...">
					</div>
					<div class="form-group">
						<label for="no">No Absen</label>
						<input type="text" name="no" class="form-control" id="no" placeholder="Masukkan nomer absen...">
					</div>
					<div class="form-group">
						<label for="kelas">Kelas</label>
						<input type="text" name="kelas" class="form-control" id="kelas" placeholder="Masukkan kelas...">
					</div>
					<div class="form-group">
						<label for="jurusan">Jurusan</label>
						<select name="jurusan" id="jurusan" class="form-control">
							<option value="Rekayasa Perangkat Lunak(RPL)">Rekayasa Perangkat Lunak(RPL)</option>
							<option value="Teknik Komputer & Jaringan(TKJ)">Teknik Komputer & Jaringan(TKJ)</option>
							<option value="Teknik Elektronika Industri(EI)">Teknik Elektronika Industri(EI)</option>
						</select>
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" id="submit" class="btn btn-primary">Tambah</button>
				</form>
			</div>
		</div>
	</div>
</div>