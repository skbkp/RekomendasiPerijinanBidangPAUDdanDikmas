<?php
    if(Yii::app()->user->id!=1){
	if(!(Yii::app()->user->id==$model->user_id))
	throw new CHttpException(404,'You have no authorization to access this page');
    }?>

<?php
    if($model->kursusstatus->status_id!=47){
	throw new CHttpException(404,'Dokumen belum bisa dicetak, status : '.$model->kursusstatus->status);
    }?>
<?php
        function tgl($tgl){
        $delimiter="-";
        $string=$tgl;
        $bulan = array('01'=>'Januari','02'=>'Februari','03'=>'Maret','04'=>'April','05'=>'Mei','06'=>'Juni','07'=>'Juli','08'=>'Agustus','09'=>'September','10'=>'Oktober','11'=>'November','12'=>'Desember');
        $tglsplit=  explode($delimiter, $string);
        return $tglsplit[2]." ".$bulan[$tglsplit[1]]." ".$tglsplit[0];
    }
    ?>
<?php function bln($tgl){
        $delimiter="-";
        $string=$tgl;
        $bulan = array('01'=>'Januari','02'=>'Februari','03'=>'Maret','04'=>'April','05'=>'Mei','06'=>'Juni','07'=>'Juli','08'=>'Agustus','09'=>'September','10'=>'Oktober','11'=>'November','12'=>'Desember');
        $tglsplit=  explode($delimiter, $string);
        return $bulan[$tglsplit[1]]." ".$tglsplit[0];
}
?>

<table width="100%">
    <tr>
        <td width="100">Nomor</td>
        <td width="5">:</td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/B.B1/LN/2013</td>
        <td align="right"><?php echo bln(date('Y-m-d'));?></td>
    </tr>
    <tr>
        <td width="100">Lampiran</td>
        <td width="5">:</td>
        <td>1 Berkas</td>
        <td></td>
    </tr>
    <tr>
        <td width="100">Hal</td>
        <td width="5">:</td>
        <td>Rekomendasi <b>Izin Belajar Kursus <?php echo $model->kursusjeniskursus->jeniskursus;?></b></td>
        <td></td>
    </tr>
    <tr>
        <td width="100"></td>
        <td width="5"></td>
        <td>pada <b><?php echo $model->ib_kursus_lbg_name;?></b></td>
        <td></td>
    </tr>
    <tr>
        <td width="100"></td>
        <td width="5"></td>
        <td><b><?php echo ucwords(strtolower($model->kursuslbgkabkot->psr_kabkot_name));?>, <?php echo ucwords(strtolower($model->kursuslbgpropinsi->psr_prop_name));?></b></td>
        <td></td>
    </tr>
</table>
<div style="margin-top:25px;">
    <b>Yth. Kepala Biro Perencanaan dan Kerjasama Luar negeri</b><br />
    <b>Sekretariat Jenderal Kemdikbud, Gedung C Lantai 6</b><br />
    <b>Senayan, Jakarta</b>
</div>

<div style="margin-top:15px;text-align: justify;">
    <p>
        Memperhatikan surat dari pimpinan <?php echo $model->ib_kursus_lbg_name;?>, Nomor: <?php echo $model->ib_kursus_peserta_nosurat;?>, tanggal <?php echo tgl($model->ib_kursus_peserta_tglsurat);?>, perihal tersebut pada pokok surat.
        Dengan hormat kami beritahukan bahwa pada prinsipnya kami tidak keberatan memberikan rekomendasi <b>izin belajar</b> kepada warga asing yang akan belajar <b>Kursus <?php echo $model->kursusjeniskursus->jeniskursus;?></b> pada <?php echo $model->ib_kursus_lbg_name;?>, <?php echo ucwords(strtolower($model->kursuslbgkabkot->psr_kabkot_name));?>, <?php echo ucwords(strtolower($model->kursuslbgpropinsi->psr_prop_name));?> selama 1(satu) tahun.
    </p>
    <p>
        Adapun peserta didik asing yang dimaksud,
    </p>
    <table width="100%">
        <tr>
            <td valign="top">Nama / Kebangsaan</td>
            <td valign="top">:</td>
            <td valign="top"><b><?php echo $model->ib_kursus_peserta_name;?>, <?php echo $model->kursusjeniskelamin->ib_jeniskelamin_title;?> / <?php echo $model->kursuspesertanegara->country?> (Lhr. <?php echo $model->ib_kursus_peserta_tmplahir;?>, <?php echo tgl($model->ib_kursus_peserta_tgllahir);?>)</b></td>
        </tr>
        <tr>
            <td valign="top">Nomor / Berlaku Pasport</td>
            <td valign="top">:</td>
            <td valign="top"><?php echo $model->ib_kursus_peserta_pasport;?> / berlaku <?php echo tgl($model->ib_kursus_peserta_pasport_start);?> s/d <?php echo tgl($model->ib_kursus_peserta_pasport_exp);?></td>
        </tr>
        <tr>
            <td valign="top">Alamat LN / Indonesia</td>
            <td valign="top">:</td>
            <td valign="top"><?php echo $model->ib_kursus_peserta_alamat_ln;?> / <?php echo $model->ib_kursus_peserta_alamat_id;?>, <?php echo ucwords(strtolower($model->kursuspesertakabkot->psr_kabkot_name));?>, <?php echo ucwords(strtolower($model->kursuspesertaprop->psr_prop_name));?></td>
        </tr>
        <tr>
            <td valign="top">Pemberi Izin Kursus</td>
            <td valign="top">:</td>
            <td valign="top"><?php echo $model->ib_kursus_lbg_ijin_oleh;?> (<?php echo $model->ib_kursus_lbg_ijin_oleh_name;?>)</td>
        </tr>
        <tr>
            <td valign="top">Nomor, Tanggal izin</td>
            <td valign="top">:</td>
            <td valign="top"><?php echo $model->ib_kursus_lbg_ijin_no;?>, tanggal <?php echo tgl($model->ib_kursus_lbg_ijin_tgl);?>, berlaku <?php echo tgl($model->ib_kursus_lbg_ijin_start);?> s/d <?php echo tgl($model->ib_kursus_lbg_ijin_exp);?></td>
        </tr>
        <tr>
            <td valign="top">Alamat Lembaga Kursus</td>
            <td valign="top">:</td>
            <td valign="top"><?php echo $model->ib_kursus_lbg_alamat;?>, <?php echo ucwords(strtolower($model->kursuslbgkabkot->psr_kabkot_name));?>, <?php echo ucwords(strtolower($model->kursuslbgpropinsi->psr_prop_name));?>, <?php echo $model->ib_kursus_lbg_kodepos;?></td>
        </tr>
        <tr>
            <td valign="top">Biaya / Alasan Kursus</td>
            <td valign="top">:</td>
            <td valign="top"><?php echo $model->ib_kursus_peserta_biaya;?> / <?php echo $model->ib_kursus_peserta_alasan;?></td>
        </tr>
        <tr>
            <td valign="top">Tujuan Belajar</td>
            <td valign="top">:</td>
            <td valign="top"><?php echo $model->kursusjeniskursus->jeniskursus;?></td>
        </tr>
        <tr>
            <td valign="top">Penjamin Selama di Indonesia</td>
            <td valign="top">:</td>
            <td valign="top"><?php echo $model->ib_kursus_peserta_jaminan;?></td>
        </tr>
        <tr>
            <td valign="top">Pendidikan / Ijazah</td>
            <td valign="top">:</td>
            <td valign="top"><?php echo $model->ib_kursus_peserta_pendidikan;?></td>
        </tr>
    </table>
    <p>
        Rekomendasi disetujui dengan ketentuan, peserta didik asing harus ditempatkan sesuai lokasi izin dan menyampaikan laporan hasil proses pengajaran/pembelajaran dan perkembangan penyelenggaraan kursus secara periodik 1(satu) tahun sekali kepada Sekretaris Ditjen Pendidikan Anak Usia Dini, Nonformal dan Informal u.p. Bagian Hukum dan Kepegawaian Gedung E, Lantai III, Jalan Jenderal Sudirman, Senayan, Jakarta.
    </p>
    <p>
        Sehubungan dengan itu, kami mohon dipertimbangkan dan diproses lebih lanjut sesuai dengan ketentuan yang berlaku.
    </p>
    <p>
        Atas perhatian Saudara, kami sampaikan terima kasih.
    </p>
    
    <table width="100%">
        <tr>
            <td></td>
            <td width="300">
                Direktur Jenderal,
            </td>
        </tr>
        <tr>
            <td></td>
            <td width="300">
                
            </td>
        </tr>
        <tr>
            <td></td>
            <td width="300" height="50"></td>
        </tr>
        <tr>
            <td></td>
            <td width="300">
                <b>Prof. Dr. Lydia Freyani Hawadi, Psikolog</b>
            </td>
        </tr>
        <tr>
            <td></td>
            <td width="300">
                NIP. 195703221982112001
            </td>
        </tr>
    </table>
    <b>Tembusan:</b>
    <ol>
        <li>Direktur Jenderal Imigrasi Jakarta;</li>
        <li>Sekretaris Ditjen PAUDNI Kemdikbud;</li>
        <li>Direktur Pembinaan Kursus dan Pelatihan Ditjen PAUDNI;</li>
        <li><?php echo $model->ib_kursus_lbg_ijin_oleh;?> (<?php echo $model->ib_kursus_lbg_ijin_oleh_name;?>);</li>
        <li>Pimpinan <?php echo $model->ib_kursus_lbg_name;?>;</li>
        <li>Arsip.</li>
    </ol>
</div>