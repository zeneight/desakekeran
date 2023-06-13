<?php if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="col-default">
	<div class="bodypage bgwhite bordergrey1">
		<div class="headgaleri bgcolor-3">
			<div class="rowsame">
				<div class="headgaleri-title flexcenter">
				<div class="album-title hover-width"><h1>Galeri</h1><h2>Foto</h2></div>
				</div>
				<div class="headgaleri-image">
				<img src="<?= base_url("$this->theme_folder/$this->theme/images/kamera.jpg") ?>"/>
				<div class="headgaleri-cover"></div>
				</div>
			</div>
			
		</div>
		<div class="pagebox">
			<?php if ($gallery): ?>
				<div class="rowsame margin-minlr-5">
				<?php $i = 1; ?>
				<?php foreach($gallery AS $data): ?>
					<div class="galeri-box bordergrey1 forhover">
						<div class="image-galeri">
							<?php if (is_file(LOKASI_GALERI . "kecil_" . $data['gambar'])): ?>
								<img src="<?= AmbilGaleri($data['gambar'],'kecil')?>" alt="Album : <?= "$data[nama]" ?>">
							<?php else: ?>
								<img src="<?= base_url("$this->theme_folder/$this->theme/images/pengganti.jpg") ?>"/>
								<div class="logo-no-image"><img src="<?= gambar_desa($desa['logo']);?>"/></div>
							<?php endif; ?>	
							<div class="hoverimage flexcenter">
							<div class="hoverimage-left bgcolor-1 hover-width"></div>
							<div class="hoverimage-right bgcolor-1 hover-width"></div>
							<div>
								<a href="<?= site_url() . "first/sub_gallery/" . $data['id'] ?>">
								<div class="hoverimage-icon flexcenter hover-height">
								<svg viewBox="0 0 24 24"><path d="M20,18H22V6H20M11.59,7.41L15.17,11H1V13H15.17L11.59,16.58L13,18L19,12L13,6L11.59,7.41Z"/></svg>
								</div>
								</a>
							</div>
						</div>
						</div>
						<h2><?= "$data[nama]" ?></h2>
					</div>
				<?php endforeach; ?>
				</div>
				<?php if(IS_PREMIUM) : ?>
					<?php $this->load->view("$folder_themes/commons/page"); ?>
				<?php else: ?>	
					<?php if ($paging->num_rows > $paging->per_page): ?>
						<div style="width:100%;float:left;margin:12px 0;">
							<div class="flexcenter infopaging" style="font-size:90%;">Halaman <?= $paging->page ?> dari <?= $paging->end_link ?></div>
							<div class="pagination flexcenter" style="float:none !important;padding:0 !important;margin:0 auto !important;">
								<?php if ($paging->start_link): ?>
								<li class="page-item"><a class="page-link" href="<?= site_url("galeri/$paging_page/$paging->start_link" . $paging->suffix); ?>" title="Halaman Pertama"><span aria-hidden="true">&laquo;</span></a></li>
								<?php endif; ?>
								<?php if ($paging->prev): ?>
									<li><a href="<?= site_url("galeri/$paging_page/$paging->prev" . $paging->suffix); ?>" title="Halaman Sebelumnya"><span aria-hidden="true">&ltrif;</span></a></li>
								<?php endif; ?>
								<?php foreach ($pages as $i): ?>
								<li <?= ($paging->page == $i) ? 'class="page-item active"' : "" ?>>
									<a class="page-link" href="<?=site_url("galeri/$paging_page/$i" . $paging->suffix); ?>" title="Halaman <?= $i ?>"><?= $i ?></a>
								</li>
								<?php endforeach; ?>
								<?php if ($paging->next): ?>
									<li><a href="<?= site_url("galeri/$paging_page/$paging->next" . $paging->suffix); ?>" title="Halaman Selanjutnya"><span aria-hidden="true">&rtrif;</span></a></li>
								<?php endif; ?>
								<?php if ($paging->end_link): ?>
								<li class="page-item"><a class="page-link" href="<?= site_url("galeri/$paging_page/$paging->end_link" . $paging->suffix); ?>" title="Halaman Terakhir"><span aria-hidden="true">&raquo;</span></a></li>
								<?php endif; ?>
							</div>
						</div>
					<?php endif; ?>
				<?php endif ?>	
			<?php else: ?>
				<div class="blankdata">
				<img style="width:100%;height:auto;display:block;border-radius:5px;" src="<?= base_url("$this->theme_folder/$this->theme/images/nature.jpg") ?>"/>
				<div class="blankdata-title">
				<h2>Mohon maaf,</h2>
					<h3>Data Album Galeri Foto belum tersedia untuk saat ini...</h3>
				</div>
				<div class="blankdata-bottom">
					<img src="<?= base_url("$this->theme_folder/$this->theme/images/girl.png") ?>"/>
				</div>
			</div>
			<?php endif;?>
		</div>
	</div>
</div>	
