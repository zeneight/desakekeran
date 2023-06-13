<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<nav class="main-nav is-sticky hidden lg:block">
  <div class="main-nav-inner">
    <ul class="navigation">
      <div class="navigation-item inline-block lg:hidden uppercase pt-3 pb-1 tracking-wide font-bold text-lg">Menu</div>

      <li class="navigation-item is-active lg:inline-block">
        <a href="<?= site_url() ?>" class="navigation-link"><span class="ti ti-home icon icon-base"></span></a>
      </li>
      <?php if($menu_atas) : ?>
        <?php foreach($menu_atas as $menu) : ?>
          <li class="navigation-item">
          <a href="<?= $menu['link'] ?>" class="navigation-link font-medium font-bold lg:font-normal"><?= $menu['nama'] ?>
            <?php if(count($menu['submenu']) > 0) : ?>
              <i class="ti ti-chevron-down icon icon-base ml-2 navigation-icon"></i>
            <?php endif ?>
          </a>
          <?php if(count($menu['submenu']) > 0) : ?>
            <ul class="navigation-dropdown">
              <?php foreach($menu['submenu'] as $submenu) : ?>
                <li class="navigation-dropdown-item">
                  <a href="<?= $submenu['link'] ?>" class="navigation-dropdown-link"><?= $submenu['nama'] ?></a>
                </li>
              <?php endforeach ?>
            </ul>
          <?php endif ?>
        </li>
        <?php endforeach ?>
      <?php endif ?>
    </ul>
  </div>
</nav>
<?php $this->load->view($folder_themes .'/commons/drawer') ?>