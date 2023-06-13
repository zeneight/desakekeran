<?php defined('BASEPATH') || exit('No direct script access allowed'); ?>

<div class="widget-box bgwhite bordergrey1">
	<div class="widget-head bggrad-color2 flexleft">
	<svg viewBox="0 0 24 24">
		<path d="M8,10V13H14V18H8V21L2,15.5L8,10M22,8.5L16,3V6H10V11H16V14L22,8.5Z" />
	</svg>
	<h1><?= $judul_widget ?></h1>
	</div>
	<div class="widget-inner">
	<div class="padding-10">
	<div class="margin-minlr-5 sinergiprogram">
		<div class="bcarousel js-flickity" data-flickity='{ "autoPlay": true, "contain": true, "cellAlign": "left", "wrapAround": true }'>
			<?php foreach($sinergi_program as $key => $program) :
			$baris[$program['baris']][$program['kolom']] = $program;
			endforeach; ?>
			
				<?php foreach($baris as $baris_program) : ?>
				<?php $width = 100/count($baris_program)-count($baris_program)?>
				<?php foreach($baris_program as $key => $program) : ?>
					
				<div class="bcarousel-part" style="text-align:center;">
					<div class="margin-lr-5">
					<div class="sinergiprogram-inner">
					<a href="<?= $program['tautan']?>" rel="noopener noreferrer" target="_blank">
					<?php if (is_file(LOKASI_GAMBAR_WIDGET.$program['gambar'])): ?>
					<img src="<?= base_url().LOKASI_GAMBAR_WIDGET.$program['gambar']?>"/>
					<?php endif ?>
					<p><?= $program['judul']?></p>				
					</a>
					</div>
					</div>
				</div>
			
				<?php endforeach; ?>	
			<?php endforeach; ?>
		</div>
	</div>
	</div>
	</div>
</div>