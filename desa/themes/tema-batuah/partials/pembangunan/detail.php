<?php if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<div id="printthis">
<div class="forprint"><?php $this->load->view("$folder_themes/plus/print/print_head"); ?></div>

<div class="col-default">
	<div class="bodypage bgwhite bordergrey1">
		<div class="headstat-lebar flexcenter">
			<img src="<?= base_url("$this->theme_folder/$this->theme/images/pembangunan.png") ?>"/>
			<div>
			<h1 class="color-1">Pembangunan</h1>
			<h2><?= ucwords($this->setting->sebutan_desa); ?></h2>
			</div>
		</div>
		<div class="pagebox">
			<?php if ($pembangunan): ?>
				<div class="pemb-detail">
					<div class="pemb-head">
						<h1><?= $pembangunan->judul ?></h1>
						<div class="imagepemb-big">
						<img title="<?= $pembangunan->keterangan; ?>" loading="lazy" src="<?= is_file(LOKASI_GALERI . $pembangunan->foto) == TRUE ? base_url() . LOKASI_GALERI . $pembangunan->foto : base_url("$this->theme_folder/$this->theme/assets/images/pengganti.jpg") ?>">
						<div class="pemb-head-cover">
						<a data-fancybox="gallery" href="<?= base_url() . LOKASI_GALERI . $pembangunan->foto; ?>">
							<div class="imagepemb-biglink bgwhite flexcenter">	
							<svg viewBox="0 0 24 24">
							<path d="M9.5,13.09L10.91,14.5L6.41,19H10V21H3V14H5V17.59L9.5,13.09M10.91,9.5L9.5,10.91L5,6.41V10H3V3H10V5H6.41L10.91,9.5M14.5,13.09L19,17.59V14H21V21H14V19H17.59L13.09,14.5L14.5,13.09M13.09,9.5L17.59,5H14V3H21V10H19V6.41L14.5,10.91L13.09,9.5Z" />
							</svg>
							</div>
						</a>
						</div>
						</div>
					</div>
					<div class="flexcenter" style="width:100%;">
						<div class="pembtitle flexcenter borderwhite">
						Detail Pembangunan
						</div>
					</div>
					<table style="width:100%;" class="table-pemb">
						<tr><td class="pemb-ket">Lokasi</td><td style="width:20px;text-align:center;">:</td><td><?= ($pembangunan->alamat == "=== Lokasi Tidak Ditemukan ===") ? 'Lokasi tidak diketahui' : $pembangunan->alamat; ?></td></tr>
						<tr><td class="pemb-ket">Anggaran</td><td style="width:20px;text-align:center;">:</td><td>Rp. <?= number_format($pembangunan->anggaran,0) ?></td></tr>
						<tr><td class="pemb-ket">Volume</td><td style="width:20px;text-align:center;">:</td><td><?= $pembangunan->volume ?></td></tr>
						<tr><td class="pemb-ket">Sumber Dana</td><td style="width:20px;text-align:center;">:</td><td><?= $pembangunan->sumber_dana ?></td></tr>
						<tr><td class="pemb-ket">Tahun</td><td style="width:20px;text-align:center;">:</td><td><?= $pembangunan->tahun_anggaran ?></td></tr>
						<tr><td class="pemb-ket">Pelaksana</td><td style="width:20px;text-align:center;">:</td><td><?= $pembangunan->pelaksana_kegiatan ?></td></tr>
						<tr><td class="pemb-ket">Manfaat</td><td style="width:20px;text-align:center;">:</td><td><?= $pembangunan->manfaat ?></td></tr>
						<tr><td class="pemb-ket">Keterangan</td><td style="width:20px;text-align:center;">:</td><td><?= $pembangunan->keterangan ?></td></tr>
					</table>

					<?php if ($dokumentasi): ?>
					<div style="width:100%;float:none;">
					<div class="pemb-doc bggrey1 bordergrey1">
						<div class="flexcenter" style="width:100%;">
							<div class="pembtitle flexcenter" style="border:none;">
							Foto Dokumentasi
							</div>
						</div>
						<div class="rowsame margin-minlr-5">
						<?php foreach ($dokumentasi as $value): ?>
							<div class="pemb-doc-box bordergrey1 pembhover">
							<a data-fancybox="gallery" href="<?= base_url(LOKASI_GALERI . $value->gambar); ?>">
							<?php if (is_file(LOKASI_GALERI . $value->gambar)): ?>
							<img src="<?= base_url(LOKASI_GALERI . $value->gambar); ?>" alt="Foto Pembangunan <?= $value->persentase; ?>"/>
							<?php else: ?>
							<img src="<?= base_url("$this->theme_folder/$this->theme/images/pengganti.jpg") ?>" alt="Foto Pembangunan <?= $value->persentase; ?>"/>
							<?php endif; ?>
							<div class="pemb-doc-title hover-height flexcenter">
							<p>Foto Pembangunan <?= $value->persentase; ?></p>
							</div>
							</a>
							</div>
						<?php endforeach; ?>
						</div>
					</div>
					</div>
					<?php endif; ?>
					<div class="noprint">
					<div class="pemb-maplokasi">
						<div class="flexcenter" style="width:100%;">
							<div class="pembtitle flexcenter borderwhite" style="margin:0 0 -25px;border:none;z-index:10;">
							Titik Lokasi
							</div>
						</div>
						<div id="map" class="pembmap flexcenter" style="z-index:1;"></div>
					</div>
					<div class="flexcenter" style="width:100%;margin:20px 0 10px;">
						<?php
							$share = [
							'link' => site_url('pembangunan/' . $pembangunan->slug),
							'judul' => $pembangunan->judul,
							];
							$this->load->view("$folder_themes/commons/share", $share);
						?>
					</div>	
					</div>
				</div>
			<?php else: ?>
				<div class="blankdata">
					<img style="width:100%;height:auto;display:block;border-radius:5px;" src="<?= base_url("$this->theme_folder/$this->theme/images/nature.jpg") ?>"/>
					<div class="blankdata-title">
					<h2>Mohon maaf,</h2>
						<h3>Data Pembangunan belum tersedia untuk saat ini...</h3>
					</div>
					<div class="blankdata-bottom">
						<img src="<?= base_url("$this->theme_folder/$this->theme/images/girl.png") ?>"/>
					</div>
				</div>
			<?php endif;?>
		</div>
	</div>
</div>	
</div>

<script type="text/javascript">
	$(document).ready(function() {
		let map_key = "<?= $this->setting->mapbox_key; ?>";
		let lat = "<?= $pembangunan->lat ?? $desa['lat']; ?>";
		let lng = "<?= $pembangunan->lng ?? $desa['lng']; ?>";
		let posisi = [lat, lng];
		let zoom = "<?= $desa['zoom'] ?? 10 ?>";
		let logo = L.icon({
			iconUrl: "<?= base_url('assets/images/gis/point/construction.png'); ?>",
            iconSize: [25, 25],
            shadowSize: [25, 32],
            iconAnchor: [20, 20],
            shadowAnchor: [5, 5],
            popupAnchor: [0, 0]
    });
		pembangunan = L.map('map').setView(posisi, zoom);
		getBaseLayers(pembangunan, map_key);
		pembangunan.addLayer(new L.Marker(posisi, {icon:logo}));
	});
</script>
