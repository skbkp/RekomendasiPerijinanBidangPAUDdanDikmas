<?php
    if(Yii::app()->user->id!=1){
	if(!(Yii::app()->user->id==$model->user_id))
	throw new CHttpException(404,'You have no authorization to access this page');
    }?>

<?php
    if($model->imtastatus->status_id!=47){
	throw new CHttpException(404,'Dokumen belum bisa dicetak, status : '.$model->imtastatus->status);
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
<?php function thn($tgl){
        $delimiter="-";
        $string=$tgl;
        $bulan = array('01'=>'Januari','02'=>'Februari','03'=>'Maret','04'=>'April','05'=>'Mei','06'=>'Juni','07'=>'Juli','08'=>'Agustus','09'=>'September','10'=>'Oktober','11'=>'November','12'=>'Desember');
        $tglsplit=  explode($delimiter, $string);
        return $tglsplit[0];
}
?>


<table width="100%">
    <tr>
        <td width="100">Nomor</td>
        <td width="5">:</td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/C.C1.3/KP/<?php echo thn(date('Y-m-d'));?></td>
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
        <td>Rekomendasi <b> IMTA <?php echo $model->imtajenisimta->jenisimta;?></b></td>
        <td></td>
    </tr>
    <tr>
        <td width="100"></td>
        <td width="5"></td>
        <td>Satuan Pendidikan <b><?php echo $model->ib_imta_lbg_name;?></b></td>
        <td></td>
    </tr>
    <tr>
        <td width="100"></td>
        <td width="5"></td>
        <td><b>Kota <?php echo ucwords(strtolower($model->imtalbgkabkot->psr_kabkot_name));?>, <?php echo ucwords(strtolower($model->imtalbgpropinsi->psr_prop_name));?></b></td>
        <td></td>
    </tr>
</table>
<div style="margin-top:25px;">
    <b>Yth. Kepala Biro Perencanaan dan Kerjasama Luar negeri</b><br />
    <b>Sekretariat Jenderal Kementerian Pendidikan dan Kebudayaan</b><br/>
    <b>Gedung C Lantai 6 Senayan</b><br/>
    <b>Jakarta</b>
</div>

<div style="margin-top:15px;text-align: justify;">
    <p>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Berdasarkan Surat Keputusan Direktur Jendral Pembinaan Penempatan Tenaga Kerja Jakarta Nomor <b> <?php echo $model->ib_imta_peserta_nosurat;?>, tanggal <?php echo tgl($model->ib_imta_peserta_tglsurat);?>, </b> tentang Pengesahan Rencana Penggunaan Tenaga Kerja Asing
        pada Satuan Pendidikan "<?php echo $model->ib_imta_lbg_name;?>" Kota <?php echo $model->imtalbgkabkot->psr_kabkot_name;?> yang disetujui <b>3 Orang, Jenis Jabatan <?php echo $model->imtajenisjabatanptka->jenisjabatanrptka;?> </b>dengan masa berlaku <b>Tahun <?php echo thn($model->ib_imta_peserta_tglsurat);?> sampai dengan <?php echo tgl($model->ib_imta_jatuh_tempo);?>,</b> 
        bahwa selama untuk tujuan kualitas pendidikan yang lebih baik serta peningkatan mutu sumber daya manusia, kami dapat menyetujui pemberian rekomendasi tentang Izin Memperkerjakan Tenaga Asing (IMTA) yang akan bekerja sebagai <b><?php echo $model->imtajenisjabatanptka->jenisjabatanrptka;?></b> selama 1 (satu) tahun
    </p>
    <p>
        Tenaga Kerja Asing yang dimaksud adalah:
    </p>
    <table width="100%">
        <tr>
            <td valign="top">Nama / Tgl. Lahir</td>
            <td valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
            <td valign="top"><b><?php echo $model->ib_imta_peserta_name;?>, <?php echo $model->imtajeniskelamin->ib_jeniskelamin_title;?> / <?php echo $model->imtapesertanegara->country?> (Lhr. <?php echo $model->ib_imta_peserta_tmplahir;?>, <?php echo tgl($model->ib_imta_peserta_tgllahir);?>)</b></td>
        </tr>
        <tr>
            <td valign="top">Kualifikasi Pendidikan/ Jurusan</td>
            <td valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
            <td valign="top"><?php echo $model->ib_imta_peserta_pendidikan;?>-<?php echo $model->ib_imta_peserta_jurusanpendidikan;?></td>
        </tr>
        <tr>
            <td valign="top">Nomor Pasport/ Masa Berlaku</td>
            <td valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
            <td valign="top"><?php echo $model->ib_imta_peserta_pasport;?> / berlaku <?php echo tgl($model->ib_imta_peserta_pasport_start);?> s/d <?php echo tgl($model->ib_imta_peserta_pasport_exp);?></td>
        </tr>
        <tr>
            <td valign="top">Alamat LN / Alamat DN</td>
            <td valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
            <td valign="top"><?php echo $model->ib_imta_peserta_alamat_ln;?> / <?php echo $model->ib_imta_peserta_alamat_id;?>, <?php echo ucwords(strtolower($model->imtapesertakabkot->psr_kabkot_name));?>, <?php echo ucwords(strtolower($model->imtapesertaprop->psr_prop_name));?></td>
        </tr>
        <tr>
            <td valign="top">Pimpinan, Pemilik/Penyelenggara</td>
            <td valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
            <td valign="top"><?php echo $model->ib_imta_lbg_ijin_oleh;?> (<?php echo $model->ib_imta_lbg_ijin_oleh_name;?>)</td>
        </tr>
        <tr>
            <td valign="top">Alamat Satuan Pendidikan</td>
            <td valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
            <td valign="top"><?php echo $model->ib_imta_lbg_alamat;?>, <?php echo ucwords(strtolower($model->imtalbgkabkot->psr_kabkot_name));?>, <?php echo ucwords(strtolower($model->imtalbgpropinsi->psr_prop_name));?>, <?php echo $model->ib_imta_lbg_kodepos;?></td>
        </tr>
        <tr>
            <td valign="top">Jenis</td>
            <td valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
            <td valign="top"><?php echo $model->imtajenisjabatanptka->jenisjabatanrptka;?></td>
        </tr>   
        <tr>
            <td valign="top">Izin Operasional dari</td>
            <td valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
            <td valign="top"><?php echo $model->ib_imta_lbg_ijin_oleh_name;?></td>
        </tr>     
        <tr>
            <td valign="top">Nomor, tanggal dan masa berlaku izin</td>
            <td valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
            <td valign="top"><?php echo $model->ib_imta_lbg_ijin_no;?>, tanggal <?php echo tgl($model->ib_imta_lbg_ijin_tgl);?>, berlaku <?php echo tgl($model->ib_imta_lbg_ijin_start);?> s/d <?php echo tgl($model->ib_imta_lbg_ijin_exp);?></td>
        </tr>
        <tr>
            <td valign="top">Nomor dan tanggal surat lembaga</td>
            <td valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
            <td valign="top"><?php echo $model->ib_imta_peserta_nosurat;?>, tanggal <?php echo tgl($model->ib_imta_peserta_tglsurat);?></td>
        </tr>
        <tr>
            <td valign="top">Nomor dan tanggal surat Rekomendasi Dinas/Instansi setempat</td>
            <td valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
            <td valign="top"><?php echo $model->ib_imta_peserta_nosurat_rptka;?>, tanggal <?php echo tgl($model->ib_imta_peserta_tglsurat_rptka);?></td>
        </tr>


    </table>
    <p>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rekomendasi penempatan tenaga kerja asing tersebut, <b>harus ditempatkan sesuai lokasi izin </b>dan menyampaikan laporan hasil proses pengajaran/pembelajaran, perkembangan penyelenggaraan kursus/satuan pendidikan secara Periodik 1 (satu) Tahun sekali
        kepada Direktur Jendral Pendidikan Anak Usia Dini, dan pendidikan Masyarakat. Pengajuan rekomendasi harus memenuhi persyaratan sebagaimana diatur melalui Permekdiknas Nomor 66 Tahun 2009, tanggal 2 Oktober 2009 tentang Pemberian Izin Pendidik dan Tenaga Kependidikan Asing pada Satuan Pendidikan Formal dan Nonformal di Indonesia
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
                <b>Dr. Wartanto</b>
            </td>
        </tr>
        <tr>
            <td></td>
            <td width="300">
                NIP. 19631009198902 1 001
            </td>
        </tr>
    </table>
    <b>Tembusan:</b>
    <ol>
        <li>Direktur Jenderal PAUD dan Diknas</li>
        <li>Direktur Jenderal Binapenta Kemnakertrans</li>
        <li><?php echo $model->ib_imta_lbg_ijin_oleh;?> <?php echo $model->ib_imta_lbg_ijin_oleh_name;?></li>
        <li>Pimpinan <?php echo $model->ib_imta_lbg_name;?> Kota <?php echo ucwords(strtolower($model->imtalbgkabkot->psr_kabkot_name))?>, <?php echo ucwords(strtolower($model->imtalbgpropinsi->psr_prop_name));?></li>
    </ol>
</div>