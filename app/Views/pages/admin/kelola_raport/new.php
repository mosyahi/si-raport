<?= $this->extend('layouts/dashboard/main'); ?>
<?= $this->section('content'); ?>

<div class="content-wrapper">
	<div class="container-xxl flex-grow-1 container-p-y">
		<h4 class="fw-bold py-3 mb-4">
			<span class="text-muted fw-light">Home /</span> <?= $title; ?>
		</h4>
		<div class="col-xxl">
			<?= $this->include('components/alerts'); ?>
			<div class="card mb-4">
				<div class="card-header">
					<div class="add-button-container">
						<h5>Form Input Nilai Siswa</h5>
						<a href="#" class="btn btn-primary add-button" id="add-kd-button">
							<span class="tf-icons bx bx-plus-circle"></span>&nbsp; Tambah Form
						</a>
					</div>
				</div>
				<div class="card-body">
					<form action="<?= base_url('admin/kelola_raport/add') ?>" method="post" enctype="multipart/form-data">
						<div id="form-container">
							<div id="kd-form-template">
								<div class="row mb-3">
									<div class="col mb-0 mt-0 col-md-2">
										<label for="mata_pelajaran" class="form-label">Pilih Siswa</label>
										<select class="form-select" name="id_siswa[]">
											<option selected disabled>Pilih Siswa</option>
											<?php foreach ($siswa as $sis): ?>
												<option value="<?= $sis['id_siswa'] ?>"><?= $sis['nama_siswa'] ?></option>
											<?php endforeach; ?>
										</select>
									</div>
									<div class="col mb-0 mt-0 col-md-2">
										<label for="mata_pelajaran" class="form-label">Pilih Mapel</label>
										<select class="form-select" name="id_mapel[]">
											<option selected disabled>Pilih Mapel</option>
											<?php foreach ($mapel as $map): ?>
												<option value="<?= $map['id_mapel'] ?>"><?= $map['mata_pelajaran'] ?> -
												<?php foreach ($guru as $gur): ?>
													<?php if ($gur['id_guru'] == $map['id_guru']): ?>
														<?= $gur['nama_guru'] ?>
													<?php endif; ?>
												<?php endforeach; ?>
											</option>
										<?php endforeach; ?>
									</select>
								</div>
								<div class="col mb-0 mt-0 col-md-2">
									<label for="mata_pelajaran" class="form-label">Pilih Kelas</label>
									<select class="form-select" name="id_kelas[]">
										<option selected disabled>Pilih Kelas</option>
										<?php foreach ($kelas as $kel): ?>
											<option value="<?= $kel['id_kelas'] ?>"><?= $kel['tingkat'] ?> <?= $kel['jurusan'] ?> <?= $kel['kelas'] ?></option>
										<?php endforeach; ?>
									</select>
								</div>
								<div class="col mb-0 mt-0 col-md-2">
									<label for="mata_pelajaran" class="form-label">Pilih Tahun Ajar</label>
									<select class="form-select" name="id_thn_ajar[]">
										<option selected disabled>Pilih Tahun Ajar</option>
										<?php foreach ($tahun as $tah): ?>
											<option value="<?= $tah['id_thn_ajar'] ?>"><?= $tah['tahun'] ?> -
												<?php foreach ($semester as $sem): ?>
													<?php if ($sem['id_semester'] == $tah['id_semester']): ?>
														Semester <?= $sem['semester'] ?>
													<?php endif; ?>
												<?php endforeach; ?>
											</option>
										<?php endforeach; ?>
									</select>
								</div>
								<div class="col mb-0 mt-0 col-md-2">
									<label for="mata_pelajaran" class="form-label">Nilai UTS</label>
									<input class="form-control" type="number" placeholder="Nilai Ujian Tengah Semester UTS" name="nilai_uts[]" required />
								</div>
								<div class="col mb-0 mt-0 col-md-2">
									<label for="mata_pelajaran" class="form-label">Nilai UAS</label>
									<input class="form-control" placeholder="Nilai Ujian Akhir Semester UAS" type="number" name="nilai_uas[]" required />
								</div>
							</div>
						</div>
					</div>
					<div class="mt-4">
						<button type="submit" class="btn btn-primary me-2">Simpan</button>
						<button type="reset" class="btn btn-danger me-2">Reset</button>
						<a type="button" href="<?= base_url('admin/kelola_raport') ?>" class="btn btn-warning">Back</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</div>

<script>
	document.addEventListener("DOMContentLoaded", function () {
		const addButton = document.getElementById("add-kd-button");
		const kdFormTemplate = document.getElementById("kd-form-template");
		const formContainer = document.getElementById("form-container");

		let formCount = 1;

		addButton.addEventListener("click", function (e) {
			e.preventDefault();

			const newForm = kdFormTemplate.cloneNode(true);
			newForm.style.display = "block";

			newForm.querySelectorAll("textarea").forEach((textarea) => {
				textarea.value = "";
			});

			newForm.querySelectorAll("input, select").forEach((input) => {
				input.name += "_" + formCount;
			});

			formContainer.appendChild(newForm);

			formCount++;
		});
	});

</script>

<?= $this->endSection(); ?>