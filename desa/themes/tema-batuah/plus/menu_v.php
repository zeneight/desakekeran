<?php if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>


<div class="menuvertical bggrey1 bordergrey1 hover-height fadeIn">
	<div class="headerstandar bordergrey1 bgcolor-1 flexleft">
		<div class="headerbackg-image">
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
		<div class="headerbackg-color bggrad-color2"></div>
		<div class="hidmargin flexleft logo2" style="position:relative;">
			<a class="flexleft" href="<?= site_url(); ?>">
			<?php $weblogo = 'desa/logo.gif'; ?>
			<?php if(is_file($weblogo)) : ?>
				<img src="<?= base_url('desa/logo.gif')?>">
			<?php else : ?>
				<img src="<?= gambar_desa($desa['logo']);?>"/>
			<?php endif; ?>
			<div>
			<h1 class="hover-height"><?= ucwords($this->setting->sebutan_desa); ?> <?= ucwords(($desa['nama_desa']) ? ' ' . $desa['nama_desa'] : ''); ?></h1>
			<h3><?=ucwords($this->setting->sebutan_kecamatan)?> <?=$desa['nama_kecamatan']?><br/><?=ucwords($this->setting->sebutan_kabupaten)?> <?=$desa['nama_kabupaten']?> - <?=$desa['nama_propinsi']?></h3>			
			</div>
			</a>
		</div>
		<div class="headerstandar-right">
			<p></p>
		</div>
	</div>
	
	<div class="mainmenu-container">
	<div style="position:relative;bacground:#bdbdbd;">
	<div class="beranda bggrey1 flexleft">
		<a class="flexleft" href="<?= site_url(); ?>">
		<div class="beranda-icon flexcenter">
		<svg viewBox="0 0 26.39 26.39"><path d="M3.588,24.297c0,0-0.024,0.59,0.553,0.59c0.718,0,6.652-0.008,6.652-0.008l0.01-5.451c0,0-0.094-0.898,0.777-0.898h2.761 c1.031,0,0.968,0.898,0.968,0.898l-0.012,5.434c0,0,5.628,0,6.512,0c0.732,0,0.699-0.734,0.699-0.734V14.076L13.33,5.913 l-9.742,8.164C3.588,14.077,3.588,24.297,3.588,24.297z"/><path d="M0,13.317c0,0,0.826,1.524,2.631,0l10.781-9.121l10.107,9.064c2.088,1.506,2.871,0,2.871,0L13.412,1.504L0,13.317z"/><polygon points="23.273,4.175 20.674,4.175 20.685,7.328 23.273,9.525"/></svg>
		</div>
		<p class="color-2">Halaman Utama</p>
		</a>
	</div>
	<div class="mainmenu-inner">
	<div class="nav-wrapper large-nav">
		<ul class="clearlist local-scroll" style="margin:0;padding:0;">
			<div class="bcarousel js-flickity" data-flickity='{ "autoPlay": false, "groupCells": true, "groupCells": 1, "contain": true, "cellAlign": "left"}'>
			<?php foreach($menu_atas as $data) { ?>
				<div class="bcarousel-part">
				<?php if(count($data['submenu'])>0): ?>
				<li><a style="white-space: nowrap;" class="menu-down" href="<?= $data['link']?>"><?= $data['nama']; if(count($data['submenu'])>0) { echo "<span class='caret'></span>"; } ?></a>
					<ul class="nav-sub bg-navsub">
					<?php foreach($data['submenu'] as $submenu): ?>
						<li><a href="<?= $submenu['link']?>"><?= $submenu['nama']?></a></li>
					<?php endforeach; ?>
					</ul>
				</li>
				<?php else: ?>
					<li><a style="white-space: nowrap;" href="<?= $data['link']?>"><?= $data['nama']?></a></li>
				<?php endif; ?>
				</div>
			<?php } ?>
			</div>
		</ul>
	</div>
	</div>
	
	</div>
	<div class="mainmenu-cover1"></div><div class="mainmenu-cover2"></div>
	</div>
</div>
