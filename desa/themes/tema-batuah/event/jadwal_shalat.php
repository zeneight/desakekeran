<?php if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php $file = __DIR__ . '/../event/moment.json'; ?>
<?php if(is_file($file)) : ?>
<?php $json = file_get_contents($file); ?>
<?php $array = json_decode($json, true); ?>
<?php if($array['jadwalshalat']) : ?>

<script>
	$(document).ready(function(){if($("#jadwal-shalat").length){const a="https://api.banghasan.com/",s=`sholat/format/json/kota/kode/${KODE_KOTA}`,l=`sholat/format/json/jadwal/kota/${KODE_KOTA}/tanggal/${TANGGAL}`;try{$.ajax({url:a+s,type:"get",dataType:"json",crossDomain:!0,success:function(a){$("[data-name=kota]").html(a.kota[0].nama).removeClass("shimmer line-short")},error:function(a){$(".line-short").html('<span class="small"><i class="fa fa-exclamation-triangle pr-1"></i> Gagal memuat</span>'),$(".line-short").removeClass("shimmer line-short")}}),$.ajax({url:a+l,type:"get",dataType:"json",crossDomain:!0,success:function(a){$(".shimmer").removeClass("shimmer"),$("[data-name=tanggal]").html(`<span>${a.jadwal.data.tanggal}</span>`),$("[data-name=imsak]").html(`<span>${a.jadwal.data.imsak}</span>`),$("[data-name=subuh]").html(`<span>${a.jadwal.data.subuh}</span>`),$("[data-name=terbit]").html(`<span>${a.jadwal.data.terbit}</span>`),$("[data-name=dhuha]").html(`<span>${a.jadwal.data.dhuha}</span>`),$("[data-name=dzuhur]").html(`<span>${a.jadwal.data.dzuhur}</span>`),$("[data-name=ashar]").html(`<span>${a.jadwal.data.ashar}</span>`),$("[data-name=maghrib]").html(`<span>${a.jadwal.data.maghrib}</span>`),$("[data-name=isya]").html(`<span>${a.jadwal.data.isya}</span>`)},error:function(a){$(".box-shalat").html('<span class="small"><i class="fa fa-exclamation-triangle pr-1"></i> Gagal memuat</span>'),$(".box-shalat").removeClass("shimmer")}})}catch(a){console.log(a)}}});
	$(document).ready(function(){if($("#jadwal-shalat2").length){const b="https://api.banghasan.com/",t=`sholat/format/json/kota/kode/${KODE_KOTA}`,m=`sholat/format/json/jadwal/kota/${KODE_KOTA}/tanggal/${BESOK}`;try{$.ajax({url:b+m,type:"get",dataType:"json",crossDomain:!0,success:function(b){$(".shimmer").removeClass("shimmer"),$("[data-name=tanggal2]").html(`<span>${b.jadwal.data.tanggal}</span>`),$("[data-name=imsak2]").html(`<span>${b.jadwal.data.imsak}</span>`),$("[data-name=subuh2]").html(`<span>${b.jadwal.data.subuh}</span>`),$("[data-name=terbit2]").html(`<span>${b.jadwal.data.terbit}</span>`),$("[data-name=dhuha2]").html(`<span>${b.jadwal.data.dhuha}</span>`),$("[data-name=dzuhur2]").html(`<span>${b.jadwal.data.dzuhur}</span>`),$("[data-name=ashar2]").html(`<span>${b.jadwal.data.ashar}</span>`),$("[data-name=maghrib2]").html(`<span>${b.jadwal.data.maghrib}</span>`),$("[data-name=isya2]").html(`<span>${b.jadwal.data.isya}</span>`)},error:function(b){$(".box-shalat").html('<span class="small"><i class="fa fa-exclamation-triangle pr-1"></i> Gagal memuat</span>'),$(".box-shalat").removeClass("shimmer")}})}catch(b){console.log(b)}}});
</script>

<?php if (config_item('kode_kota')): ?>
	<script>
		const KODE_KOTA = "<?= config_item('kode_kota') ?>";
		const TANGGAL = "<?= date('Y-m-d') ?>";
		const BESOK = "<?= date("Y-m-d", mktime(0,0,0,date("n"),date("j")+1,date("Y"))) ?>";
	</script>
<?php endif; ?>

	<div class="col-default">
	<div class="jadwal-shalat bgwhite bordergrey1" id="jadwal-shalat">
		<div class="rowsame margin-minlr-5">
			<div class="jadwalshalat-judul flexleft">
				<div>
				<div class="jadwalshalat-judul-inner">
				<img src="<?= base_url("$this->theme_folder/$this->theme/images/pngfile/sholat_baru.jpg") ?>"/>
				<div class="flexleft">
				<div>
				<h2>Jadwal Trisandya</h2>
				<h3 class="color-2"><b>Wilayah <?= ucwords($this->setting->sebutan_kabupaten_singkat." ".$desa['nama_kabupaten'])?></b></h3>
				<p class="flexleft"><span id="tanggalwaktu"></span></p>
				</div>
				</div>
				</div>
				</div>
				<script>
				var tw = new Date();
				if (tw.getTimezoneOffset() == 0) (a=tw.getTime() + ( 7 *60*60*1000))
				else (a=tw.getTime());
				tw.setTime(a);
				var tahun= tw.getFullYear ();
				var hari= tw.getDay ();
				var bulan= tw.getMonth ();
				var tanggal= tw.getDate ();
				var hariarray=new Array("Minggu,","Senin,","Selasa,","Rabu,","Kamis,","Jum'at,","Sabtu,");
				var bulanarray=new Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","Nopember","Desember");
				document.getElementById("tanggalwaktu").innerHTML = hariarray[hari]+" "+tanggal+" "+bulanarray[bulan]+" "+tahun;
				</script>
			</div>
			<div class="jadwalshalat-isi">
				<div class="rowsame margin-minlr-5">
					<div class="jadwal-box">
						<div class="mosque"><img src="<?= base_url("$this->theme_folder/$this->theme/images/svgfile/pura.svg") ?>"/></div>
						<div style="position:relative;z-index:1;">
						<h3 class="color-1">Pagi</h3>
						<span class="color-2" data-name="imsak"></span>
						</div>
					</div>
					<div class="jadwal-box">
						<div class="mosque"><img src="<?= base_url("$this->theme_folder/$this->theme/images/svgfile/pura.svg") ?>"/></div>
						<div style="position:relative;z-index:1;">
						<h3 class="color-1">Siang</h3>
						<span class="color-2" data-name="subuh"></span>
						</div>
					</div>
					<div class="jadwal-box">
						<div class="mosque"><img src="<?= base_url("$this->theme_folder/$this->theme/images/svgfile/pura.svg") ?>"/></div>
						<div style="position:relative;z-index:1;">
						<h3 class="color-1">Sore</h3>
						<span class="color-2" data-name="dzuhur"></span>
						</div>
					</div>
					<div class="jadwal-box">
						<div class="mosque"><img src="<?= base_url("$this->theme_folder/$this->theme/images/svgfile/pura.svg") ?>"/></div>
						<div style="position:relative;z-index:1;">
						<h3 class="color-1">06:00</h3>
						<span class="color-2" data-name="ashar"></span>
						</div>
					</div>
					<div class="jadwal-box">
						<div class="mosque"><img src="<?= base_url("$this->theme_folder/$this->theme/images/svgfile/pura.svg") ?>"/></div>
						<div style="position:relative;z-index:1;">
						<h3 class="color-1">12:00</h3>
						<span class="color-2" data-name="maghrib"></span>
						</div>
					</div>
					<div class="jadwal-box">
						<div class="mosque"><img src="<?= base_url("$this->theme_folder/$this->theme/images/svgfile/pura.svg") ?>"/></div>
						<div style="position:relative;z-index:1;">
						<h3 class="color-1">18:00</h3>
						<span class="color-2" data-name="isya"></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>

<?php endif ?>
<?php endif ?>