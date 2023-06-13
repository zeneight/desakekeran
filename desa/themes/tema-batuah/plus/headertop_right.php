<?php if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="desktop-only">
	<div class="toplink flexleft">
		<!--
		<a class="flexleft" href="">
			<div class="toplink-item bgtoska flexleft">
				<p>Title</p>
			</div>
		</a>
		-->
		<!-- bgtoska bgpink bgyellow bgungu bgmerah bghijau bgbiru bgorange -->
		
		<a class="flexleft" href="<?= site_url('layanan-mandiri') ?>">
			<div class="toplink-item bgyellow flexleft">
				<p>E-Mandiri</p>
			</div>
		</a>
		<div class="flexcenter" data-toggle="modal" data-target="#searching">
			<div class="toplink-item flexcenter tip-bottom" data-toggle="tooltip" data-original-title="Pencarian Artikel" style="padding:0;">
				<svg viewBox="0 0 56.966 56.966" style="height:20px;opacity:0.6;"><path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23 s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92 c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17 s-17-7.626-17-17S14.61,6,23.984,6z"/></svg>
			</div>
		</div>
	</div>
</div>
	<div class="colorchange flexcenter">
		<div class="desktop-only">
		<div class="tocolor flexcenter">
			<div class="colors flexcenter">
				<a class="flexcenter" data-val="pink" href="javascript:void(0);">
				<div class="tocolor-item pinkcolor"></div>
				</a>
			</div>
			<div class="colors flexcenter">
				<a class="flexcenter" data-val="biru" href="javascript:void(0);">
				<div class="tocolor-item birucolor"></div>
				</a>
			</div>
			<div class="colors flexcenter">
				<a class="flexcenter" data-val="merah" href="javascript:void(0);">
				<div class="tocolor-item merahcolor"></div>
				</a>
			</div>
			<div class="colors flexcenter">
				<a class="flexcenter" data-val="hijau" href="javascript:void(0);">
				<div class="tocolor-item hijaucolor"></div>
				</a>
			</div>
		</div>
		</div>
		<div class="dark-tombol flexcenter">
		<div class="colors flexcenter">
			<a class="flexcenter" data-val="dark" href="javascript:void(0);">
			<div class="todark flexcenter tip-bottom" data-toggle="tooltip" data-original-title="Tampilan Gelap">
				<img src="<?= base_url("$this->theme_folder/$this->theme/images/svgfile/todark.svg") ?>"/>
			</div>
			</a>
		</div>
		</div>
		<div class="light-tombol flexcenter">
		<div class="colors flexcenter">
			<a class="flexcenter" data-val="hijau" href="javascript:void(0);">
			<div class="todark flexcenter tip-bottom" data-toggle="tooltip" data-original-title="Tampilan Terang">
				<img src="<?= base_url("$this->theme_folder/$this->theme/images/svgfile/tolight.svg") ?>"/>
			</div>
			</a>
		</div>
		</div>
	</div>

