<!-- widget SocMed -->

<div class="box box-primary box-solid">
  <div class="box-header">
    <h3 class="box-title"><i class="ti ti-globe mr-1"></i> Info Media Sosial</h3>
  </div>
  <div class="box-body">
    <?php foreach ($sosmed as $data): ?>
      <?php if (! empty($data['link'])): ?>
        <a href="<?= $data['link']?>" target="_blank">
          <img loading="lazy" src="<?= base_url() . 'assets/front/' . $data['gambar'] ?>" alt="<?= $data['nama'] ?>" style="width:50px;height:50px;"/>
        </a>
      <?php endif; ?>
    <?php endforeach; ?>
  </div>
</div>
