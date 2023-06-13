<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div id="printthis">
<div class="forprint">
	<div class="print-header flexleft">
		<img src="<?= gambar_desa($desa['logo']);?>"/>
		<div>
		<h2><?= ucwords($this->setting->website_title); ?></h2>
		<h1><?= ucwords($this->setting->sebutan_desa); ?> <?= ucwords(($desa['nama_desa']) ? ' ' . $desa['nama_desa'] : ''); ?></h1>
		<h2><?=ucwords($this->setting->sebutan_kecamatan)?> <?=$desa['nama_kecamatan']?>, <?=ucwords($this->setting->sebutan_kabupaten)?> <?=$desa['nama_kabupaten']?> - <?=$desa['nama_propinsi']?></h2>
		</div>
	</div>
</div>

<div class="forprint">
	<div class="print-body">
	<div class="print-headcontent"><?= $single_artikel["judul"]?></div>
	<div class="flexleft">
		<p><?= $single_artikel['owner'] ?> | <?= tgl_indo($single_artikel['tgl_upload']);?> | <?= hit($single_artikel['hit']) ?> dibuka</p>
	</div>
	<div class="print-content">
		<?php if ($single_artikel['gambar']!='' and is_file(LOKASI_FOTO_ARTIKEL."sedang_".$single_artikel['gambar'])): ?>
		<img style="width:100%;height:auto;margin:0 0 10px;" src="<?= AmbilFotoArtikel($single_artikel['gambar'],'sedang')?>"/>
		<?php endif; ?>
	</div>
	</div>
</div>


<div class="col-default">
	<div class="bodypage bgwhite bordergrey1">
		<div class="center-head bggrad-color2 flexcenter noprint">
			<div class="icon-titlepage bgcolor-1 flexcenter"><svg viewBox="0 0 24 24"><path d="M3,4H7V8H3V4M9,5V7H21V5H9M3,10H7V14H3V10M9,11V13H21V11H9M3,16H7V20H3V16M9,17V19H21V17H9" /></svg></div>
			<h1>Artikel</h1>
		</div>
		<div class="pagebox artikelpage">
			<div class="headcontent noprint"><?= $single_artikel["judul"]?></div>
			<div class="artikelhome-info noprint">
				<div class="artikelmeta flexleft"><i class="fa fa-user flexleft"></i><p><?= $single_artikel['owner'] ?></p></div>
				<div class="artikelmeta flexleft"><i class="fa fa-calendar flexleft"></i><p><?= tgl_indo($single_artikel['tgl_upload']);?></p></div>
				<div class="artikelmeta flexleft"><i class="fa fa-eye flexleft"></i><p><?= hit($single_artikel['hit']) ?> dibuka</p></div>
			</div>
			
			<?php if ($single_artikel['gambar1'] || $single_artikel['gambar2']): ?>
				<div class="image-area noprint">
				<div class="margin-minlr-5">
				<div class="bcarousel js-flickity" data-flickity='{ "autoPlay": false, "groupCells": true, "groupCells": 2, "cellAlign": "left", "wrapAround": false }'>
					<?php if ($single_artikel['gambar']!='' and is_file(LOKASI_FOTO_ARTIKEL."sedang_".$single_artikel['gambar'])): ?>
					<div class="bcarousel-part">
						<div class="margin-lr-5">
						<a href="<?= AmbilFotoArtikel($single_artikel['gambar'],'sedang') ?>"  data-fancybox="images" data-caption="<?= $single_artikel["judul"]?>">
							<div class="image-artikel-page">
							<img src="<?= AmbilFotoArtikel($single_artikel['gambar'],'sedang')?>"/>
							</div>
						</a>
						</div>
					</div>
					<?php endif; ?>
					<?php if ($single_artikel['gambar1']!='' and is_file(LOKASI_FOTO_ARTIKEL."sedang_".$single_artikel['gambar1'])): ?>
					<div class="bcarousel-part">
						<div class="margin-lr-5">
						<a href="<?= AmbilFotoArtikel($single_artikel['gambar1'],'sedang') ?>"  data-fancybox="images" data-caption="<?= $single_artikel["judul"]?>">
							<div class="image-artikel-page">
							<img src="<?= AmbilFotoArtikel($single_artikel['gambar1'],'sedang')?>"/>
							</div>
						</a>
						</div>
					</div>
					<?php endif; ?>
					<?php if ($single_artikel['gambar2']!='' and is_file(LOKASI_FOTO_ARTIKEL."sedang_".$single_artikel['gambar2'])): ?>
					<div class="bcarousel-part">
						<div class="margin-lr-5">
						<a href="<?= AmbilFotoArtikel($single_artikel['gambar2'],'sedang') ?>"  data-fancybox="images" data-caption="<?= $single_artikel["judul"]?>">
							<div class="image-artikel-page">
							<img src="<?= AmbilFotoArtikel($single_artikel['gambar2'],'sedang')?>"/>
							</div>
						</a>
						</div>
					</div>
					<?php endif; ?>
					<?php if ($single_artikel['gambar3']!='' and is_file(LOKASI_FOTO_ARTIKEL."sedang_".$single_artikel['gambar3'])): ?>
					<div class="bcarousel-part">
						<div class="margin-lr-5">
						<a href="<?= AmbilFotoArtikel($single_artikel['gambar3'],'sedang') ?>"  data-fancybox="images" data-caption="<?= $single_artikel["judul"]?>">
							<div class="image-artikel-page">
							<img src="<?= AmbilFotoArtikel($single_artikel['gambar3'],'sedang')?>"/>
							</div>
						</a>
						</div>
					</div>
					<?php endif; ?>
				</div>
				</div>
				</div>
			<?php else: ?>
				<?php if ($single_artikel['gambar']!='' and is_file(LOKASI_FOTO_ARTIKEL."sedang_".$single_artikel['gambar'])): ?>
				<div class="image-area noprint">
				<a href="<?= AmbilFotoArtikel($single_artikel['gambar'],'sedang') ?>"  data-fancybox="images" data-caption="<?= $single_artikel["judul"]?>">
					<div class="image-nocrop">
					<img src="<?= AmbilFotoArtikel($single_artikel['gambar'],'sedang')?>"/>
					</div>
				</a>
				</div>
				<?php endif; ?>
			<?php endif; ?>
			
			<?php if ($single_artikel['dokumen']!='' and is_file(LOKASI_DOKUMEN.$single_artikel['dokumen'])): ?>
				<div class="lampiran flexcenter noprint" style="padding-top:15px;">
					<div>
					<p style="margin:0 0 10px;">Tersedia file lampiran <b><?= $single_artikel['link_dokumen']?></b></p>
					<a href="<?= site_url("first/unduh_dokumen_artikel/{$single_artikel[id]}") ?>" title="">
					<div class="flexcenter">
						<div class="b-btn bgcolor-1 flexcenter"><p>Download</p></div>
					</div>
					</a>
					</div>
				</div>
			<?php endif; ?>
			<?php if ($single_artikel['id_kategori'] == 1000) : ?>
				<div class="agendapage">
					<table class="tablepage-noline" style="width:100%;">
						<tr>
							<td>Tanggal</td>
							<td style="width:20px;text-align:center;">:</td>
							<td><?= tgl_indo2($detail_agenda['tgl_agenda']) ?></td>
						</tr>
						<tr>
							<td>Tempat</td>
							<td style="width:20px;text-align:center;">:</td>
							<td><?= $detail_agenda['lokasi_kegiatan'] ?></td>
						</tr>	
						<tr>
							<td>Koordinator</td>
							<td style="width:20px;text-align:center;">:</td>
							<td>
								<?php if (!empty($detail_agenda['koordinator_kegiatan'])): ?>
								<?= $detail_agenda['koordinator_kegiatan'] ?>
								<?php else: ?>
								-
								<?php endif; ?>
							</td>
						</tr>	
					</table>
				</div>
			<?php endif; ?>
			<div class="isicontent">
				<div class="fb-like noprint" data-href="<?= site_url('artikel/' . buat_slug($single_artikel['id'])) ?>" data-width="" data-layout="button_count" data-action="like" data-size="small" data-share="true"></div>
				<?= $single_artikel["isi"]?>
			</div>
			<div class="toshare noprint">
				<div class="flexcenter">
					<a name="fb_share" href="http://www.facebook.com/sharer.php?u=<?= "https://".$_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI]?>" onclick='window.open(this.href,"popupwindow","status=0,height=500,width=500,resizable=0,top=50,left=100");return false;' rel='noopener noreferrer' target='_blank' title='Facebook'><div class="facebook iconshare flexcenter"><img src="<?= base_url("$this->theme_folder/$this->theme/images/svgfile/social/facebook.svg") ?>"/></div></a>
					<a href="http://twitter.com/share?source=sharethiscom&text=<?= htmlspecialchars($single_artikel["judul"]);?>%0A&url=<?= "https://".$_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI].'&via=rohman'?>" onclick='window.open(this.href,"popupwindow","status=0,height=500,width=500,resizable=0,top=50,left=100");return false;' rel='noopener noreferrer' target='_blank' title='Twitter'><div class="twitter iconshare flexcenter"><img src="<?= base_url("$this->theme_folder/$this->theme/images/svgfile/social/twitter.svg") ?>"/></div></a>
					<a href="mailto:?subject=<?= htmlspecialchars($single_artikel["judul"]);?>&body=<?= potong_teks($single_artikel["isi"], 1000);?> ... Selengkapnya di <?= "https://".$_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI]?>" title='Email'><div class="email iconshare flexcenter"><img src="<?= base_url("$this->theme_folder/$this->theme/images/svgfile/social/email.svg") ?>"/></div></a>
					<a href="https://telegram.me/share/url?url=<?= "https://".$_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI]?>&text=<?= htmlspecialchars($single_artikel["judul"]);?>%0A" onclick='window.open(this.href,"popupwindow","status=0,height=500,width=500,resizable=0,top=50,left=100");return false;' rel='noopener noreferrer' target='_blank' title='Telegram'><div class="telegram iconshare flexcenter"><img src="<?= base_url("$this->theme_folder/$this->theme/images/svgfile/social/telegram.svg") ?>"/></div></a>
					<a href="javascript:printDiv('printthis');" title='Cetak Artikel'><div class="print iconshare flexcenter"><img src="<?= base_url("$this->theme_folder/$this->theme/images/svgfile/social/print.svg") ?>"/></div></a>
					<a href="https://api.whatsapp.com/send?text=<?= htmlspecialchars($single_artikel["judul"]);?>%0A<?= "https://".$_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI]?>" onclick='window.open(this.href,"popupwindow","status=0,height=500,width=500,resizable=0,top=50,left=100");return false;' rel='noopener noreferrer' target='_blank' title='Whatsapp'><div class="whatsapp iconshare flexcenter"><img src="<?= base_url("$this->theme_folder/$this->theme/images/svgfile/social/whatsapp.svg") ?>"/></div></a>
				</div>
			</div>
			<?php if (!empty($komentar)): ?>
				<div class="comment noprint">
					<div class="headborder bordergrey1 flexleft" style="padding-bottom:5px;"><h3>Komentar yang terbit pada artikel <font class="color-2">"<?= $single_artikel["judul"]?>"</font></h3></div>
					<?php foreach ($komentar AS $data): ?>
						<div class="comment-row">
							<div class="responden flexleft">
								<svg viewBox="0 0 24 24">
									<path d="M20,2H4A2,2 0 0,0 2,4V16A2,2 0 0,0 4,18H8L12,22L16,18H20A2,2 0 0,0 22,16V4A2,2 0 0,0 20,2M12,4.3C13.5,4.3 14.7,5.5 14.7,7C14.7,8.5 13.5,9.7 12,9.7C10.5,9.7 9.3,8.5 9.3,7C9.3,5.5 10.5,4.3 12,4.3M18,15H6V14.1C6,12.1 10,11 12,11C14,11 18,12.1 18,14.1V15Z" />
								</svg>
								<div>
								<h2><?= $data['owner']?></h2>
								<h3><?= tgl_indo2($data['tgl_upload'])?></h3>
								</div>
							</div>
							<p><?= $data['komentar']?></p>
						</div>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
			<?php if ($single_artikel['boleh_komentar'] == 1): ?>
				<div class="comment noprint" id="kolom-komentar">
					<div class="flexcenter" style="text-align:center;">
					<div>
					<?php
						$notif = $this->session->flashdata('notif');
						$label = ($notif['status'] == -1) ? 'label-danger' : 'label-info';
					?>
					<?php if ($notif): ?>
						<p style="padding:0;margin:0;line-height:1.1;display:block;"><?= $notif['pesan']; ?></p>
					<?php endif; ?>
					</div>
					</div>
					<div class="headborder bordergrey1 flexleft" style="margin-top:10px;"><h1 class="bordercolor-1">Form Komentar</h1></div>
					<div class="commentform">
						<form class="contact_form" id="validasi" name="form" action="<?= site_url("add_comment/$single_artikel[id]"); ?>" method="POST" onSubmit="return validasi(this);">
						<table class="tablecomment" style="width:100%;">
							<tr>
								<td class="label-formcomment"><b>Nama</b></td>
								<td>
								<input style="margin:5px 0 !important;" class="formcomment bordergrey1 flexleft" type="text" name="owner" maxlength="100" placeholder="wajib diisi..." value="<?= $notif['data']['owner']; ?>" required>
								</td>
							</tr>
							<tr>
								<td class="label-formcomment"><b>Telp./HP</b></td>
								<td>
								<input style="margin:5px 0 !important;" class="formcomment bordergrey1 flexleft" type="text" name="no_hp" maxlength="15" placeholder="wajib diisi..." value="<?= $notif['data']['no_hp']; ?>" required>
								</td>
							</tr>
							<tr>
								<td class="label-formcomment"><b>E-mail</b></td>
								<td>
								<input style="margin:5px 0 !important;" class="formcomment bordergrey1 flexleft" type="text" name="email" maxlength="100" placeholder="tidak wajib" value="<?= $notif['data']['email']; ?>">
								</td>
							</tr>
						</table>
						<div class="rowsame">
							<div class="title-isi-komentar">
							<p style="margin:5px 0 2px;padding:0;line-height:1.2;font-weight:bold;">Komentar</p>
							</div>
							<div class="isi-komentar">
								<textarea class="bordergrey1" name="komentar"><?= $notif['data']['komentar']; ?></textarea>
							</div>
						</div>
						<div class="headborder bordergrey1 flexleft" style="margin-top:10px;margin-bottom:10px;"><h1 class="bordercolor-1">Kirim Komentar</h1></div>
						<div class="rowsame">
							<div class="title-captha">
							<p style="margin:5px 0 2px;padding:0;line-height:1.2;font-weight:bold;">Captha<br/>Matematic</p>
							</div>
							<div class="captha-area">
								<div class="rowsame">
									<div class="imagecaptha bordergrey1">
									<img style="width:100%;" id="captcha" src="<?= base_url('securimage/securimage_show.php?'); ?>" alt="CAPTCHA Image"/>
									</div>
									<div class="captha-right bgcolor-3 flexcenter">
										<a class="ganti-captha" href="#" onclick="document.getElementById('captcha').src = '<?= base_url()."securimage/securimage_show.php?"?>' + Math.random(); return false" ><p>Ganti</p></a>
									</div>
									<div class="imagecaptha" style="border:none;padding-right:5px;">
									<input type="text" name="captcha_code" class="formcomment bordergrey1 flexcenter" placeholder="Isi angka jawaban" maxlength="6" value="<?= $notif['data']['captcha_code']; ?>"/>
									</div>
									<div class="captha-right bgcolor-3 flexcenter" style="border-radius:5px;">
										<input style="padding:0 25px;background:transparent;color:#fff;" class="b-btn" type="submit" value="Kirim">
									</div>
								</div>
							</div>
						</div>
									
						</form>
					</div>
				</div>		
			<?php else: ?>
				<div class="comment noprint">
				<span class='info'></span>
				</div>	
			<?php endif; ?>
			<?php if ($single_artikel['boleh_komentar'] == 1): ?>
				<div class="comment noprint">
					<div class="headborder bordergrey1 flexleft"><h1 class="bordercolor-1">Komentar Facebook</h1></div>
					<div class="fb-comments" data-href="<?= site_url('artikel/'.buat_slug($single_artikel))?>" width="100%" data-numposts="5"></div>
				</div>		
			<?php endif; ?>
		</div>
		<div class="printpdf2">
	</div>
	</div>
</div>	
</div>
