<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>

<?php if ($this->setting->layanan_mandiri): ?>
	<div class="col-default">
	<div class="mandiri bggrey1 bordergrey1">
		<div class="mandiri-backg-image">
			<?php if(IS_PREMIUM) : ?>
				<?php $file = __DIR__ . 'desa/pengaturan/images/latar_website.jpg'; ?>
				<?php if(is_file($file)) : ?>
					<img src="<?= base_url('desa/pengaturan/images/latar_website.jpg') ?>"/>
				<?php else: ?>
					<img src="<?= $latar_website ?>"/>
				<?php endif; ?>
			<?php else: ?>
				<?php $file = __DIR__ . 'desa/pengaturan/images/latar_website.jpg'; ?>
				<?php if(is_file($file)) : ?>
				<img src="<?= base_url('desa/pengaturan/images/latar_website.jpg') ?>"/>
				<?php else: ?>
				<img src="<?= base_url($latar_website ? $latar_website : 'assets/front/css/images/latar_website.jpg'); ?>"/>
				<?php endif; ?>
			<?php endif; ?>
		</div>
		<div class="mandiri-backg-color bggrad-grey2"></div>
		<div class="rowsame">
			<div class="mandiri-col flexcenter">
				<div class="mandiri-head">
					<div class="hello" style="color:transparent;">Layanan Mandiri</div>
					<div class="hello" style="color:transparent;">Layanan Mandiri</div>
					<div class="hello color-grey1">Layanan Mandiri</div>
					<div class="hello color-1">Layanan Mandiri</div>
				</div>
				<div class="mandiri-vector">
				<img src="<?= base_url("$this->theme_folder/$this->theme/images/layanan-intro.png") ?>" />
				</div>
				<style>
				* *, *::before, *::after {animation-play-state: running !important;}
				</style>
			</div>
			<div class="mandiri-col flexcenter">
				<div class="mandiri-title">
				<img src="<?= gambar_desa($desa['logo']);?>"/>
				<div>
				<h2><?= ucwords($this->setting->sebutan_desa); ?> <?= ucwords(($desa['nama_desa']) ? ' ' . $desa['nama_desa'] : ''); ?></h2>
				<p><?=ucwords($this->setting->sebutan_kecamatan)?> <?=$desa['nama_kecamatan']?>, <?=ucwords($this->setting->sebutan_kabupaten)?> <?=$desa['nama_kabupaten']?>, <?=$desa['nama_propinsi']?></p>
				</div>
				</div>
			</div>
			<div class="mandiri-col flexcenter">
			<div class="mandiri-login">
				<?php
				if( ! isset($_SESSION['mandiri']) OR $_SESSION['mandiri']<>1) { ?>
					<form action="<?= site_url('layanan-mandiri/cek'); ?>" method="post" target="blank">
						<div class="flexleft">
							<div>
							<input style="margin:5px 0;" name="nik" type="text" placeholder="Ketik Nomor KTP" maxlength="16" class="mandiriform" value="" required>
							<input style="margin:5px 0;" name="pin" type="password" placeholder="Ketik Kode PIN" value="" maxlength="6" class="mandiriform" required>
							</div>
							<div class="flexcenter">
							<button type="submit" id="but" class="btn mandiri-masuk flexcenter bgcolor-1" style="border:none;box-shadow:none;color:#fff;margin-left:5px;">
							<div>
							<svg viewBox="0 0 24 24"><path d="M12,4A4,4 0 0,1 16,8A4,4 0 0,1 12,12A4,4 0 0,1 8,8A4,4 0 0,1 12,4M12,14C16.42,14 20,15.79 20,18V20H4V18C4,15.79 7.58,14 12,14Z"/></svg>
							<p>Masuk</p>
							</div>
							</button>
							</div>
						</div>
						<div class="dapat-pin flexleft"><svg viewBox="0 0 24 24"><path d="M5,3H19A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3M13,13V7H11V13H13M13,17V15H11V17H13Z"/></svg><p>Hubungi Perangkat <?=ucwords($this->setting->sebutan_desa)?> untuk mendapatkan PIN</p></div>
					</form>
				<?php
				} else {
				?>
					<div class="anda-online" style="margin-top:10px;">
					<p style="margin:0 0 10px;padding:0;line-height:1.1;color:#fff;">Saat ini anda masih online di Layanan Mandiri <?= ucwords($this->setting->sebutan_desa). ' ' . (($desa['nama_desa']) ? ' ' . $desa['nama_desa'] : ''); ?></p>
						<div class="margin-min5">
							<div class="column-2layanan">
							<div class="padding-lr-5">
								<a href="<?= site_url('layanan-mandiri/profil'); ?>"><div class="form-control" style="height:30px;line-height:30px;">Profil</div></a>
								<a href="<?= site_url('layanan-mandiri/pesan-masuk'); ?>"><div class="form-control" style="height:30px;line-height:30px;">Pesan</div></a>
							</div>
							</div>
							<div class="column-2layanan">
							<div class="padding-lr-5">
								<a href="<?= site_url('layanan-mandiri/permohonan-surat'); ?>"><div class="form-control" style="height:30px;line-height:30px;">Permohonan</div></a>
								<a href="<?= site_url('layanan-mandiri/bantuan'); ?>"><div class="form-control" style="height:30px;line-height:30px;">Bantuan</div></a>
								<a href="<?= site_url("layanan-mandiri/keluar"); ?>"><div class="tombol backg-2 pull-right">
								<svg x="0px" y="0px" viewBox="0 0 24.303 24.303" style="float:left;width:auto;height:16px;fill:#fff;margin:3px 5px 0 0;">
								<path d="M10.269,11.298V1.883C10.269,0.844,11.113,0,12.152,0s1.883,0.844,1.883,1.883v9.415 c0,1.039-0.844,1.883-1.883,1.883S10.269,12.337,10.269,11.298z M19.616,2.761c-0.61-0.483-1.5-0.377-1.983,0.234 c-0.483,0.612-0.378,1.5,0.234,1.984c2.24,1.767,3.524,4.413,3.524,7.261c0,5.094-4.145,9.239-9.238,9.239 c-5.094,0-9.239-4.145-9.239-9.239c0-2.847,1.283-5.492,3.521-7.258c0.612-0.483,0.717-1.371,0.234-1.984 c-0.483-0.612-1.37-0.716-1.984-0.234C1.764,5.069,0.089,8.523,0.089,12.24c0,6.652,5.412,12.063,12.063,12.063 s12.063-5.412,12.063-12.063C24.215,8.521,22.538,5.067,19.616,2.761z"></path>
								</svg>
								Keluar</div></a>
							</div>
							</div>
						</div>
					</div>

				<?php }
				?>
				<?php $this->load->view('head_tags_front') ?>
			</div>
			</div>
		</div>
	</div>
	</div>
<?php endif; ?>