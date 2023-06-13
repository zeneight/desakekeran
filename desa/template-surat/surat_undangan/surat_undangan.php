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
							<!--<?php include("donjo-app/views/surat/form/_cari_nik.php"); ?>-->
						</form>
						<form id="validasi" action="<?= $form_action ?>" method="POST" target="_blank" class="form-surat form-horizontal">
							<input type="hidden" id="url_surat" name="url_surat" value="<?= $url ?>">
							<input type="hidden" id="url_remote" name="url_remote" value="<?= site_url('surat/nomor_surat_duplikat') ?>">
							<div class="row jar_form">
								<label for="nomor" class="col-sm-3"></label>
								<!--
								<div class="col-sm-8">
									<input class="required" type="hidden" name="nik" value="<?= $individu['id'] ?>">
								</div>
								-->
							</div>
							<?php if ($individu) : ?>
								<?php include("donjo-app/views/surat/form/konfirmasi_pemohon.php"); ?>
							<?php endif; ?>
							<?php include("donjo-app/views/surat/form/nomor_surat.php"); ?>
							<div class="form-group">
								<label for="lampiran" class="col-sm-3 control-label">Lampiran</label>
								<div class="col-sm-8">
									<input id="lampiran" class="form-control input-sm required <?= jecho($cek_anjungan['keyboard'] == 1, TRUE, 'kbvtext'); ?>" type="text" placeholder="Silahkan input lampiran" name="lampiran">
								</div>
							</div>
							<div class="form-group">
								<label for="perihal" class="col-sm-3 control-label">Perihal</label>
								<div class="col-sm-8">
									<input id="perihal" class="form-control input-sm required <?= jecho($cek_anjungan['keyboard'] == 1, TRUE, 'kbvtext'); ?>" type="text" placeholder="Silahkan input perihal" name="perihal">
								</div>
							</div>
							<div class="form-group">
								<label for="isi" class="col-sm-3 control-label">Isi Surat</label>
								<div class="col-sm-8">
									<textarea name="isi" class="form-control input-sm required <?= jecho($cek_anjungan['keyboard'] == 1, TRUE, 'kbvtext'); ?>" placeholder="Silahkan ketikan isi surat"></textarea>
								</div>
							</div>
							<div class="form-group">
								<label for="hari" class="col-sm-3 control-label">Hari / Tanggal</label>
								<div class="col-sm-8">
									<input id="hari" class="form-control input-sm required <?= jecho($cek_anjungan['keyboard'] == 1, TRUE, 'kbvtext'); ?>" type="text" placeholder="Senin / 1 Januari 2023" name="hari">
								</div>
							</div>
							<div class="form-group">
								<label for="waktu" class="col-sm-3 control-label">Waktu Acara</label>
								<div class="col-sm-8">
									<input id="waktu" class="form-control input-sm required <?= jecho($cek_anjungan['keyboard'] == 1, TRUE, 'kbvtext'); ?>" type="text" placeholder="09:00 Wita" name="waktu">
								</div>
							</div>
							<div class="form-group">
								<label for="tempat" class="col-sm-3 control-label">Tempat Acara</label>
								<div class="col-sm-8">
									<input id="tempat" class="form-control input-sm required <?= jecho($cek_anjungan['keyboard'] == 1, TRUE, 'kbvtext'); ?>" type="text" placeholder="Silahkan input tempat acara" name="tempat">
								</div>
							</div>
							<!--<?php include("donjo-app/views/surat/form/tgl_berlaku.php"); ?>-->
							<?php include("donjo-app/views/surat/form/_pamong.php"); ?>
						</form>
					</div>
					<?php include("donjo-app/views/surat/form/tombol_cetak.php"); ?>
				</div>
			</div>
		</div>
	</section>
</div>