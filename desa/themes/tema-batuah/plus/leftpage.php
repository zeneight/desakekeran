<?php if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<nav class="main-nav">
<div class="full-wrapper clearfix">
	<div class="leftpage bggrey1 hover-height">
		
		<div class="logoweb bordergrey1 hover-height">
			<div class="logobackg hover-height">
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
			<div class="logocenter-backg bgcolor-1 hover-height"></div>
			<a href="<?= site_url(); ?>">
			<div class="logocenter flexcenter">
				<div>
				<?php $weblogo = 'desa/logo.gif'; ?>
				<?php if(is_file($weblogo)) : ?>
					<img src="<?= base_url('desa/logo.gif')?>">
				<?php else : ?>
					<img src="<?= gambar_desa($desa['logo']);?>"/>
				<?php endif; ?>
				<h2 class="hover-height"><?= ucwords($this->setting->website_title); ?></h2>
				<h1 class="hover-height"><?= ucwords($this->setting->sebutan_desa); ?> <?= ucwords(($desa['nama_desa']) ? ' ' . $desa['nama_desa'] : ''); ?></h1>	
				<h3 class="hover-height"><?=$desa['nama_kecamatan']?>, <?=$desa['nama_kabupaten']?></h3>
				</div>
			</div>
			</a>
		</div>
		
		<div class="leftpage-inner hover-height">
			<div class="withscroll">
			<div class="leftpage-padding">
				<?php $this->load->view("$folder_themes/plus/icon"); ?>
				<?php $this->load->view("$folder_themes/plus/sidemenu"); ?>
			</div>
			</div>
		</div>
	</div>
</div>
</nav>