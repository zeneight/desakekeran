<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>

<?php require("$this->theme_folder/$this->theme/commons/media_sosial.php") ?>

<div class="widget-box bgwhite bordergrey1">
	<div class="widget-head bggrad-color2 flexleft">
	<svg viewBox="0 0 24 24">
		<path d="M2,21L23,12L2,3V10L17,12L2,14V21Z" />
	</svg>
	<h1><?= $judul_widget ?></h1>
	</div>
	<div class="widget-inner flexcenter">
		<?php foreach($sosmed as $data) : ?>
		<?php if(!empty($data['link'])) : ?>
		<a href="<?= $data['link'] ?>" target="_blank" rel="noopener">
			<?php if(in_array($brand = strtolower(str_replace(' ', '-', $data['nama'])), $socials)) : ?>
				<div class="social-icon flexcenter">
					<svg viewBox="0 0 24 24" width="24" height="24" stroke-width="20" xmlns="http://www.w3.org/2000/svg"><?= $svg[$brand] ?></svg>
				</div>
			<?php else : ?>
				<span data-feather="<?= strtolower(str_replace(' ', '-', $data['nama']))?>"></span>
			<?php endif ?>
		</a>
		<?php endif ?>
		<?php endforeach ?>
	</div>
</div>