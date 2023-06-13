	<script>
		$(function() {
			$('#showData').click(function() {
				$("#kel").removeClass('hide');
				$('#showData').hide();
				$('#hideData').show();
			});

			$('#hideData').click(function() {
				$('#kel').addClass('hide');
				$('#hideData').hide();
				$('#showData').show();
			});
			$('#hideData').hide();
		});
	</script>
	<div class="content-wrapper">
		<?php $this->load->view("surat/form/breadcrumb.php"); ?>
		<section class="content">
			<div class="row">
				<div class="col-md-12">
					<div class="box box-info">
						<div class="box-header with-border tdk-permohonan tdk-periksa">
							<a href="<?= site_url("surat") ?>" class="btn btn-social btn-flat btn-info btn-sm btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" title="Kembali Ke Daftar Wilayah">
								<i class="fa fa-arrow-circle-left "></i>Kembali Ke Daftar Cetak Surat
							</a>
						</div>
						<div class="box-body">
							<form id="main" name="main" method="POST" class="form-horizontal">
								<?php include("donjo-app/views/surat/form/_cari_nik.php"); ?>
							</form>
							<form id="validasi" action="<?= $form_action ?>" method="POST" target="_blank" class="form-surat form-horizontal">
								<input type="hidden" id="url_surat" name="url_surat" value="<?= $url ?>">
								<input type="hidden" id="url_remote" name="url_remote" value="<?= site_url('surat/nomor_surat_duplikat') ?>">
								<div class="row jar_form">
									<label for="nomor" class="col-sm-3"></label>
									<div class="col-sm-8">
										<input class="required" type="hidden" name="nik" value="<?= $individu['id'] ?>">
									</div>
								</div>
								<?php if ($individu) : ?>
									<?php include("donjo-app/views/surat/form/konfirmasi_pemohon.php"); ?>
									<div class="form-group">
										<label for="keperluan" class="col-sm-3 control-label">Data Keluarga / KK</label>
										<div class="col-sm-8">
											<a id="showData" class="btn btn-social btn-flat btn-danger btn-sm"><i class="fa fa-search-plus"></i> Tampilkan</a>
											<a id="hideData" class="btn btn-social btn-flat btn-danger btn-sm"><i class="fa fa-search-minus"></i> Sembunyikan</a>
										</div>
									</div>
									<!-- Menampilkan data keluarga / KK-->
									<!--
									<div id="kel" class="form-group hide">
										<label for="pengikut" class="col-sm-3 control-label">Keluarga</label>
										<div class="col-sm-8">
											<div class="table-responsive">
												<table class="table table-bordered dataTable table-hover nowrap">
													<thead class="bg-gray disabled color-palette">
														<tr>
															<th>No</th>
															<th>NIK</th>
															<th>Nama</th>
															<th>Jenis Kelamin</th>
															<th>Tempat Tanggal Lahir</th>
															<th>Hubungan</th>
															<th>Status Kawin</th>
														</tr>
													</thead>
													<tbody>
														<?php if ($anggota != NULL) :
															$i = 0; ?>
															<?php foreach ($anggota as $data) : $i++; ?>
																<tr>
																	<td><?= $i ?></td>
																	<td><?= $data['nik'] ?></td>
																	<td><?= $data['nama'] ?></td>
																	<td><?= $data['sex'] ?></td>
																	<td><?= $data['tempatlahir'] ?>, <?= tgl_indo($data['tanggallahir']) ?></td>
																	<td><?= $data['hubungan'] ?></td>
																	<td><?= $data['status_kawin'] ?></td>
																</tr>
															<?php endforeach; ?>
														<?php endif; ?>
													</tbody>
												</table>
											</div>
										</div>
									</div>-->
									
								<?php endif; ?>
								<?php include("donjo-app/views/surat/form/nomor_surat.php"); ?>
								<div class="form-group">
								<label for="dinas_pengantar"  class="col-sm-3 control-label">Kelian Dinas Surat Pengantar</label>
								<div class="col-sm-4">
									<textarea name="dinas_pengantar" class="form-control input-sm required" placeholder="Silahkan input kelian dinas surat pengantar"></textarea>
								</div>
    							</div>
    							<div class="form-group">
    								<label for="nomor_pengantar"  class="col-sm-3 control-label">Nomor Surat Pengantar</label>
    								<div class="col-sm-4">
    									<textarea name="nomor_pengantar" class="form-control input-sm required" placeholder="Silahkan input nomor surat pengantar Kelian Dinas"></textarea>
    								</div>
    							</div>
    							<div class="form-group">
    										<label for="ttl" class="col-sm-3 control-label">Tanggal Surat Pengantar</label>
    										<div class="col-sm-3 col-lg-2">
    											<div class="input-group input-group-sm date">
    												<div class="input-group-addon">
    													<i class="fa fa-calendar"></i>
    												</div>
    												<input title="Pilih Tanggal" class="form-control input-sm required datepicker" name="tanggal_pengantar" type="text" value="<?= $_SESSION['post']['tanggal_pengantar'] ?>" />
    											</div>
    										</div>
    							</div>
								<div class="form-group">
									<label for="keperluan" class="col-sm-3 control-label">Keperluan</label>
									<div class="col-sm-8">
										<textarea name="keperluan" class="form-control input-sm required <?= jecho($cek_anjungan['keyboard'] == 1, TRUE, 'kbvtext'); ?>" placeholder="Keperluan"></textarea>
									</div>
								</div>
								<?php include("donjo-app/views/surat/form/_pamong.php"); ?>
							</form>
						</div>
						<?php include("donjo-app/views/surat/form/tombol_cetak.php"); ?>
					</div>
				</div>
			</div>
		</section>
	</div>