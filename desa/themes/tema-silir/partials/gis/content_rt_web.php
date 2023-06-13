<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<div id="isi_popup_rt">
  <?php foreach ($rt_gis as $key_rt => $rt): ?>
  <div id="isi_popup_rt_<?= $key_rt ?>" class="invisible">
    <div id="content">
      <h5 id="firstHeading" class="text-lg lg:text-xl font-bold">Wilayah RT
          <?= set_ucwords($rt['rt']) . ' RW ' . set_ucwords($rt['rw']) . ' ' . ucwords($this->setting->sebutan_dusun) . ' ' . set_ucwords($rt['dusun']); ?>
      </h5>
      <div id="bodyContent" class="px-3 py-4 font-main">
        <button type="button" class="button button-primary w-full block my-2" title="Statistik Penduduk"
          data-bs-toggle="collapse" data-bs-target="#collapseStatGraph" aria-expanded="false"
          aria-controls="collapseStatGraph"
          data-mdb-ripple="true" data-md-ripple-color="light"><i class="ti ti-chart-bar mr-2"></i>Statistik
          Penduduk</button>
        <div class="collapse box-body no-padding" id="collapseStatGraph">
          <div class="card card-body">
            <?php foreach ($list_ref as $key => $value): ?>
            <li <?= jecho($lap, $key, 'class="active"'); ?>><a class="py-1 block"
                href="<?= site_url("statistik_web/chart_gis_rt/{$key}/" . underscore($rt['dusun']) . '/' . underscore($rt['rw']) . '/' . underscore($rt['rt'])) ?>"
                data-bs-remote="false" data-bs-toggle="modal" data-bs-target="#modalSedang"
                data-title="Statistik Penduduk RT <?= $rt['rt'] ?> RW <?= $rt['rw'] ?> <?= set_ucwords($wilayah) . ' ' . set_ucwords($rt['dusun']); ?>"><?= $value ?></a>
            </li>
            <?php endforeach; ?>
          </div>
        </div>
        <a href="<?= site_url("load_aparatur_wilayah/{$rt['id_kepala']}/3"); ?>"
          class="button button-primary w-full block my-2 text-center !text-white"
          data-title="Ketua RT <?= underscore($rt[rt]) ?>" data-bs-remote="false" data-bs-toggle="modal"
          data-bs-target="#modalKecil"
          data-mdb-ripple="true" data-md-ripple-color="light"><i class="ti ti-user mr-2"></i>Ketua
          RT</a>
      </div>
    </div>
  </div>
  <?php endforeach; ?>
</div>