<?php
$this->breadcrumbs=array(
	'Daftar Unggah Dokumen REK-IMTA'=>array('index'),
	'Unggah Dokumen',
);
?>

<h2>Unggah Dokumen Permohonan IMTA</h2>
<fieldset>
<legend>Ketentuan dan Peraturan</legend>
	<div class="alert alert-info">
		<ol>
			<li>Selain pas foto, dokumen yang diunggah adalah file dengan <strong>format PDF hasil pindai dokumen aslinya, berwarna, dengan resolusi minimal 600dpi</strong>.</li>
			<li><strong>Foto pemohon adalah file dengan format JPG dengan resolusi minimal 600dpi</strong> dengan ukuran minimal 800x600 piksel.</li>
			<li>Surat permohonan ditujukan langsung kepada Direktur Jenderal Pendidikan Anak Usia Dini, Nonformal dan Informal di Direktorat Jenderal Pendidikan Anak Usia Dini, Nonformal dan Informal, Kemdikbud, Gd. E, Lt. 3</li>
			<li>Surat kuasa/surat tugas disertai dengan pindai KTP atau kartu identitas lainnya</li>
			<li>Surat ijin penyelenggaraan kursus yang diunggah harus yang masih berlaku dari Dinas Pendidikan setempat dengan stempel basah, bukan hasil fotokopi yang dipindai</li>
			<li>Surat pernyataan adalah surat yang dibuat di atas materai 6000 yang menyatakan tidak akan terlibat dalam kegiatan antara lain:
				<ul>
					<li>Propaganda keagamaan</li>
					<li>Intelejen atau klandesten</li>
					<li>Prngumpulan dana di Indonesia</li>
					<li>Dan kegiatan lan, di luar ijin yang diberikan</li>
				</ul>
			</li>
		</ol>
	</div>
</fieldset>
<?php echo $this->renderPartial('_formperpanjangan', array('model'=>$model)); ?>