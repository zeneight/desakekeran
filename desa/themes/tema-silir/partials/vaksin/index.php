<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<h1 class="text-heading text-lg lg:text-2xl border-b border-dotted border-primary dark:border-white pb-2 title"><i class="chart-bar mr-1"></i> Data Vaksinasi</h1>
<table class="table table-striped table-bordered" id="tabel-data">
  <thead>
    <tr>
      <th rowspan="2">No</th>
      <th rowspan="2">Nama</th>
      <th rowspan="2">Alamat Dusun</th>
      <th rowspan="2">Tanggal</th>
      <th colspan="6">Vaksin</th>
    </tr>
    <tr>
      <th>I</th>
      <th>II</th>
      <th>III</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($main as $data) : ?>
    <?php if ($data->vaksin_1 == 1 || $data->vaksin_2 == 1 || $data->vaksin_3 == 1) : ?>
    <tr>
      <td class="text-center"></td>
      <td><?= $data->nama ?></td>
      <td><?= $data->dusun ?></td>
      <td>
        <?php if ($data->vaksin_1 == 1 && $data->vaksin_2 == 0 && $data->vaksin_3 == 0) : ?>
        <?= $data->tgl_vaksin_1 ?>
        <?php endif ?>

        <?php if ($data->vaksin_1 == 1 && $data->vaksin_2 == 1 && $data->vaksin_3 == 0) : ?>
        <?= $data->tgl_vaksin_2 ?>
        <?php endif ?>

        <?php if ($data->vaksin_1 == 1 && $data->vaksin_2 == 1 && $data->vaksin_3 == 1) : ?>
        <?= $data->tgl_vaksin_3 ?>
        <?php endif ?>
      </td>
      <td class="text-center">
        <?php if ($data->vaksin_1 == 1 && $data->tunda == 0) : ?>
        <i class="ti ti-check" aria-hidden="true"></i>
        <?php endif ?>
      </td>
      <td class="text-center">
        <?php if ($data->vaksin_2 == 1 && $data->tunda == 0) : ?>
        <i class="ti ti-check" aria-hidden="true"></i>
        <?php endif ?>
      </td>
      <td class="text-center">
        <?php if ($data->vaksin_3 == 1 && $data->tunda == 0) : ?>
        <i class="ti ti-check" aria-hidden="true"></i>
        <?php endif ?>
      </td>
    </tr>
    <?php endif; ?>
    <?php endforeach ?>
  </tbody>
</table>
<script>
  $(document).ready(function () {
    var tabelData = $('#tabel-data').DataTable({
      'processing': false,
      'order': [
        [1, 'desc']
      ],
      'pageLength': 10,
      'lengthMenu': [
        [10, 25, 50, 100, -1],
        [10, 25, 50, 100, "Semua"]
      ],
      'columnDefs': [{
          'searchable': false,
          'targets': [0, 4, 5, 6]
        },
        {
          'orderable': false,
          'targets': [0, 4, 5, 6]
        }
      ],
      'language': {
        'url': BASE_URL + '/assets/bootstrap/js/dataTables.indonesian.lang'
      },
    });

    tabelData.on('order.dt search.dt', function () {
      tabelData.column(0, {
        search: 'applied',
        order: 'applied'
      }).nodes().each(function (cell, i) {
        cell.innerHTML = i + 1;
      });
    }).draw();
  });
</script>