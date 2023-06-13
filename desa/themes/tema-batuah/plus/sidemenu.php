<?php if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="sidebar" role="navigation" style="background:transparent !important;">
	<div class="sidebar-nav navbar-collapse">
		<ul class="nav" id="side-menu">
			<div class="menu-list">
				<?php foreach($menu_atas as $data) { ?>
					<?php if(count($data['submenu'])>0): ?>
					<li class="bgwhite-trans1"><a href="#"><?= $data['nama']; if(count($data['submenu'])>0) { echo "<span class='caret'></span>"; } ?></a>
						<ul class="nav nav-second-level">
							<?php foreach($data['submenu'] as $submenu): ?>
							<li><a href="<?= $submenu['link']?>" style="background:transparent !important;"><?= $submenu['nama']?></a></li>
							<?php endforeach; ?>
						</ul>
					</li>
					<?php else: ?>
					<li class="bgwhite-trans1"><a href="<?= $data['link']?>"><?= $data['nama']?></a></li>
					<?php endif; ?>
				<?php } ?>	
			</div>				
		</ul>
	</div>
</div>