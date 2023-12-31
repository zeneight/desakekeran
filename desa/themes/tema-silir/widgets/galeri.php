<!-- widget Galeri-->
<div class="box box-primary box-solid">
  <div class="box-header">
    <h3 class="box-title"><a href="<?= site_url('galeri'); ?>"><i class="ti ti-camera mr-1"></i> Galeri Foto</a></h3>
  </div>
  <div class="box-body">
    <ul id="li-komentar" class="sidebar-latest">
      <?php foreach ($w_gal as $data): ?>
        <?php if (is_file(LOKASI_GALERI . 'sedang_' . $data['gambar'])): ?>
          <a href='<?= site_url("galeri/{$data['id']}"); ?>' title="<?= "Album : {$data['nama']}" ?>">
            <img loading="lazy" src="<?= AmbilGaleri($data['gambar'], 'kecil')?>" width="130" alt="<?= "Album : {$data['nama']}" ?>">
          </a>
        <?php endif; ?>
      <?php endforeach; ?>
    </ul>
  </div>
</div>
