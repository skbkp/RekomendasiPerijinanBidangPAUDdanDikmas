<?php $this->pageTitle=Yii::app()->name; ?>


<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit', array(
'heading'=>CHtml::encode(Yii::app()->name),
)); ?>

<p>Menangani proses rekomendasi perizinan siswa asing yang akan belajar di lembaga penyelenggara program bidang PAUDNI</p>
<p>
<?php $this->widget('bootstrap.widgets.TbButton', array(
    'type'=>'primary',
    'label'=>'RIB Kursus',
    'icon'=>'share white',
    'url'=>Yii::app()->createUrl('kursus'),
)); ?>
    &nbsp;
<?php $this->widget('bootstrap.widgets.TbButton', array(
    'type'=>'warning',
    'label'=>'RIB PAUD',
    'icon'=>'share white',
    'url'=>Yii::app()->createUrl('paud'),
)); ?>
</p>

<?php $this->endWidget(); ?>
<div class="row">
    <div class="span12">
        <h3>Dasar Pemberian Rekomendasi Izin Belajar Bagi Warga Negara Asing (WNA) Pada Bidang Kursus dan Izin Belajar TK Internasional di Indonesia</h3>
        <p>
            Seiring perkembangan dan peradaban manusia di Dunia ini, dan lajunya era globalisasi manusia di antera bumi, menjadikan keinginan manusia untuk melintasi daerah atau Negara kecenderungan. Termasuk seorang atau beberapa orang Negara dibelahan dunia ini berbondong, ingin masuk ke Negara lain. Seperti terjadi warga Negara asing masuk ke  Indonesia menyatakan keinginan masuk dengan tujuan ingin belajar di bidangnya di Indonesia. Khususnya di Bidang PAUDNI lumayan ada yang belajar Kursus Bahasa Indonesia dan Kursus lainnya seperti Desain dan belajar pada TK International di Indonesia.
        </p>
        <h3>Dasar Hukum</h3>
        <ol>
            <li>Undang-undang Nomor 2 Tahun 2003 tentang Sistim Pendidikan Nasional, Pada BAB V, Peserta didik, Pasal 12 ayat 1 huruf b, bahwa setiap peserta didik pada setiap satuan pendidikan berhak, mendapatkan pelayanan pendidikan sesuai dengan bakat, minat, dan kemampuannya</li>
            <li>Undang-undang Nomor 2 Tahun 2003 tentang Sistim Pendidikan Nasional, Pada BAB V, Peserta didik, Pasal 12 ayat 3 Warga Negara Asing dapat menjadi peserta didik pada satuan pendidikan yang diselenggarakan dalam wilayah Negara Kesatuan Republik Indonesia</li>
            <li>Undang-undang Nomor 2 Tahun 2003 tentang Sistim Pendidikan Nasional, Pada BAB XI, Kewajiban Peserta Didik, Pasal 169</li>
                <ol>
                    <li>Peserta didik berkewajiban:</li>
                    <ul>
                        <li>Mengikuti proses pembelajaran sesuai peraturan satuan pendidikan dengan penjunjung tinggi norma dan etika akademik;</li>
                        <li>Menjalankan ibadah sesuai dengan agama yang dianutnya dan menghormati pelaksanaan ibadah peserta didik lain;</li>
                        <li>Menghormati pendidik dan tenaga kependidikan;</li>
                        <li>Memelihara kerukunan dan kedamaian untuk mewujudkan harmoni sosial;</li>
                        <li>mencintai keluarga, masyarakat, bangsa, dan negara, serta menyayangi sesama peserta didik;</li>
                        <li>mencintai dan melestarikan lingkungan;</li>
                        <li>ikut menjaga dan memelihara sarana dan prasarana, kebersihan, keamanan, dan ketertiban satuan pendidikan;</li>
                        <li>ikut menjaga dan memelihara sarana dan prasarana, kebersihan, keamanan, dan ketertiban umum;</li>
                        <li>menanggung biaya pengelolaan dan penyelenggaraan pendidikan, kecuali yang  dibebaskan dari kewajiban;</li>
                        <li>menjaga kewibawaan dan nama baik satuan pendidikan yang bersangkutan; dan</li>
                    </ul>
                    <li>Kewajiban sebagaimana dimaksud pada ayat (1) dilaksanakan di bawah bimbingan dan keteladanan pendidik dan tenaga kependidikan, serta pembiasaan terhadap peserta didik.</li>
                    <li>Ketentuan lebih lanjut mengenai kewajiban peserta didik sebagaimana dimaksud pada ayat (1) diatur oleh satuan pendidikan yang bersangkutan.</li>
                </ol>
            <li>Peraturan Menteri Menteri Pendidikan dan Kebudayaan tentang OTK Kemdikbud Nomor: NOMOR 1 TAHUN 2012 TENTANG ORGANISASI DAN TATA KERJA KEMENTERIAN PENDIDIKAN DAN KEBUDAYAAN</li>
            <li>Dan Peraturan Menteri Pendidikan Nasional No. 71 Tahun 2008 tentang RINCIAN TUGAS UNIT KERJADl LINGKUNGAN DIREKTORAT JENDERAL PENDIDIKAN  NONFORMAL, DAN INFORMAL , Pasal 9 huruf i. Melaksanakan penyiapan bahan rekomendasi bagi warga asing yang akan belajar dan/atau bekerja pada pendidikan nonformal.</li>
            <li>PERATURAN MENTERI PENDIDIKAN DAN KEBUDAYAAN NOMOR TENTANG PRINCIAN TUGAS UNIT KERJA Dl LINGKUNGAN DIREKTORAT JENDERAL PENDIDIKAN ANAK USIA DINI, NONFORMAL, DAN INFORMAL, Pada Pasal 9, Rincian Tugas Bagian Hukum dan Kepegawaian huruf s : menjelaskan bahwa Bagian Hukum dan Kepegawaian, melaksanakan penyusunan bahan rekomendasi bagi warga asing yang akan belajar dan/atau bekerja pada lembaga pendidikan nonformal.</li>
            <li>NSOP ( Norma Standar Operasional Prosedur) Dirjen PAUDNI, Izin Belajar Kursus di Indonesia bagi WNA sebagai berikut:</li>
            <li>NSOP ( Norma Standar Operasional Prosedur) Dirjen PAUDNI, Izin Belajar TK International di Indonesia bagi WNA sebagai berikut:</li>
        </ol>
    </div>
    <div class="span12">
        <h3>Cara Pendaftaran</h3>
        <p>Berikut ini adalah langkah-langkah yang harus dilakukan sepanjang proses pendaftaran untuk mendapatkan izin belajar bidang PAUDNI,</p>
        <ul>
            <li><strong>Register</strong>. Anda harus memiliki akun di laman ini, yaitu dengan cara mendaftarkan diri di menu <a href="<?php echo Yii::app()->createUrl('user/registration');?>">Register</a>. Pastikan alamat email yang digunakan adalah valid, karena tautan aktivasi akun akan dikirimkan ke email anda.</li>
            <li>Setelah terdaftar dan login, anda bisa <strong>mendaftarkan peserta didik</strong> bersangkutan melalui form pendaftaran</li>
            <li><strong>Unggah dokumen</strong>. Dokumen pendukung yang diunggah adalah hasil pindai berwarna dokumen aslinya. Hasil pindah harus dikirimkan dengan format .pdf kecuali foto. Hasil pindai yang bukan berasal dari dokumen aslinya tidak akan diproses</li>
            <li><strong>Verifikasi Fisik Dokumen</strong>, yaitu proses pengecekan fisik dokumen asli yang hasil pindainya telah diunggah untuk dilakukan penilaian oleh operator</li>
            <li><strong>Menunggu persetujuan pejabat berwenang</strong>, pada proses ini draft dokumen izin belajar telah dicetak dan menunggu disetujui oleh pejabat berwenang. Jika pada tahap ini dpejabat berwenang tidak menyetujui maka anda harus membuat pengajuan baru.</li>
        </ul>
    </div>
</div>




















<?php
//$this->widget('bootstrap.widgets.TbHighCharts', array(
//   'options'=>array(
//        'chart'=>array('type'=>'spline'),
//        'title' => array('text' => 'Fruit Consumption'),
//        'exporting'=>array('enabled'=>FALSE),
//        'yAxis' => array(
//            'title' => array('text' => 'Fruit eaten')
//        ),
//        'series' => array(
//            array('name' => 'Jane', 'data' => array(1, 0, 4,6,9,8,4,2,5,6,1,3,7,5,9)),
//            array('name' => 'John', 'data' => array(5, 7, 3,2,6,5,9,4,8,6,4,5,5,6,6))
//        )
//    )
//));
?>

<!--<img src="<?php //echo Yii::app()->baseUrl.'/upload/kursus/107/my JS1000 BTB.jpg.jpg';?>">-->
