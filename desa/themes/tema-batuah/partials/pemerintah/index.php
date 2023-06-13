<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>

<div class="col-default">
	<div class="bodypage bgwhite bordergrey1">
		<div class="headstat-lebar flexcenter">
			<img src="<?= base_url("$this->theme_folder/$this->theme/images/pembangunan.png") ?>"/>
			<div>
			<h1 class="color-1">Pemerintah</h1>
			<h2><?= ucwords($this->setting->sebutan_desa); ?></h2>
			</div>
		</div>
		<div class="pagebox">
			<div class="rowsame margin-minlr-5">
			<?php foreach ($pemerintah as $data): ?>
				<div class="aparatur-col">
					<div class="image-pemerintah mb-10">
					<img src="<?= $data['foto'] ?>">
					</div>
					<div class="pemerintah-title">
					<h2 class="color-2"><?= $data['nama'] ?></h2>
					<h3><?= $data['jabatan'] ?></h3>
					</div>
					<div class="pemerintah-status flexcenter">
					<?php if ($this->setting->tampilkan_kehadiran && $data['status_kehadiran'] == 'hadir') : ?>
						<div class="flexcenter">
						<div class="ada flexleft bghijau">Hadir</div>
						</div>
					<?php else: ?>
						<div class="flexcenter">
						<div class="tidakada flexleft bgmerah">Belum Hadir</div>
						</div>
					<?php endif ?>
					</div>
				</div>
			<?php endforeach ?>
			</div>
		</div>
	</div>	
</div>
