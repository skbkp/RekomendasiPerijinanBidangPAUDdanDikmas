<?php
    if(Yii::app()->user->id!=1){
	if(!(Yii::app()->user->id==$model->user_id))
	throw new CHttpException(404,'You have no authorization to access this page');
    }?>

<?php
    if($model->paudstatus->status_id!=47){
	throw new CHttpException(404,'Dokumen tidak bisa dicetak, status : '.$model->paudstatus->status);
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

<?php function wn($countryid){
    if($countryid==2067){
        return 'Warga Negara Indonesia (WNI)';
    }else{
        return 'Warga Negara Asing (WNA)';
    }
}
?>

<?php function wnn($countryid){
    if($countryid==2067){
        return 'WNI';
    }else{
        return 'WNA';
    }
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
        <td>Rekomendasi <b>Izin Belajar Jenjang PAUD (TK)</b></td>
        <td></td>
    </tr>
    <tr>
        <td width="100"></td>
        <td width="5"></td>
        <td>pada <b><?php echo $model->ib_paud_lbg_name;?></b></td>
        <td></td>
    </tr>
    <tr>
        <td width="100"></td>
        <td width="5"></td>
        <td><b><?php echo ucwords(strtolower($model->paudlbgkabkot->psr_kabkot_name));?>, <?php echo ucwords(strtolower($model->paudlbgpropinsi->psr_prop_name));?></b></td>
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
        Sehubungan surat Saudara tertanggal <?php echo tgl($model->ib_paud_peserta_surat_tgl);?>, hal tersebut pada pokok surat,
        dengan hormat kami sampaikan, bahwa pada prinsipnya kami tidak keberatan memberikan persetujuan <b>izin belajar</b> jenjang PAUD (TK) kepada peserta didik <?php echo wn($model->ib_paud_peserta_negara);?> yang akan belajar pada <?php echo $model->ib_paud_lbg_name;?>, <?php echo ucwords(strtolower($model->paudlbgkabkot->psr_kabkot_name));?>, <?php echo ucwords(strtolower($model->paudlbgpropinsi->psr_prop_name));?>.
    </p>
    <p>
        Adapun peserta didik asing yang dimaksud,
    </p>
    <table width="100%">
        <tr>
            <td valign="top">Nama / Kebangsaan</td>
            <td valign="top">:</td>
            <td valign="top"><b><?php echo $model->ib_paud_peserta_name;?> (<?php echo $model->paudjeniskelamin->ib_jeniskelamin_huruf;?>) / <?php echo $model->paudpesertanegara->country?> (Lhr. <?php echo $model->ib_paud_peserta_tmplahir;?>, <?php echo tgl($model->ib_paud_peserta_tgllahir);?>)</b></td>
        </tr>
        <tr>
            <td valign="top">Kewarganegaraan</td>
            <td valign="top">:</td>
            <td valign="top"><?php echo wnn($model->ib_paud_peserta_negara);?></td>
        </tr>
        <tr>
            <td valign="top">Alamat</td>
            <td valign="top">:</td>
            <td valign="top"><?php echo $model->ib_paud_peserta_alamat_ln;?><?php if($model->ib_paud_peserta_negara==2067){echo '';}else{echo ' / ';}?><?php echo $model->ib_paud_peserta_alamat_id;?>, <?php echo ucwords(strtolower($model->paudpesertakabkot->psr_kabkot_name));?>, <?php echo ucwords(strtolower($model->paudpesertapropinsi->psr_prop_name));?></td>
        </tr>
        <tr>
            <td valign="top">Orang Tua / Kewarganegaraan</td>
            <td valign="top">:</td>
            <td valign="top"><?php echo $model->ib_paud_peserta_ortu_name;?> (Ayah/<?php echo $model->paudayahwn->wn;?>), <?php echo $model->ib_paud_peserta_ortu_name_ibu;?> (Ibu/<?php echo $model->paudibuwn->wn;?>)</td>
        </tr>
        <tr>
            <td valign="top">No. KTP / Paspor</td>
            <td valign="top">:</td>
            <td valign="top">Ayah, <?php echo $model->ib_paud_ayah_ktp;?> (exp: <?php echo tgl($model->ib_paud_ayah_ktp_exp);?>) / <?php echo $model->ib_paud_ayah_pasport;?> (exp: <?php echo tgl($model->ib_paud_ayah_pasport_exp);?>)</td>
        </tr>
        <tr>
            <td valign="top"></td>
            <td valign="top"></td>
            <td valign="top">Ibu, <?php echo $model->ib_paud_ibu_ktp;?> (exp: <?php echo tgl($model->ib_paud_ibu_ktp_exp);?>) / <?php echo $model->ib_paud_ibu_pasport;?> (exp: <?php echo tgl($model->ib_paud_ibu_pasport_exp);?>)</td>
        </tr>
        <tr>
            <td valign="top">Pekerjaan Orang Tua</td>
            <td valign="top">:</td>
            <td valign="top"><?php echo $model->ib_paud_peserta_ortu_job;?></td>
        </tr>
        <tr>
            <td valign="top">Alamat Sekolah Tujuan</td>
            <td valign="top">:</td>
            <td valign="top"><?php echo $model->ib_paud_lbg_alamat;?>, <?php echo ucwords(strtolower($model->paudlbgkabkot->psr_kabkot_name));?>, <?php echo ucwords(strtolower($model->paudlbgpropinsi->psr_prop_name));?>, <?php echo $model->ib_paud_lbg_kodepos;?></td>
        </tr>
        <tr>
            <td valign="top">Penanggungjawab</td>
            <td valign="top">:</td>
            <td valign="top"><?php echo $model->ib_paud_peserta_tgjwb;?></td>
        </tr>
    </table>
    <p>
        Surat izin belajar berlaku selama siswa didik mengikuti pendidikan di <strong><?php echo $model->ib_paud_lbg_name;?>, <?php echo ucwords(strtolower($model->paudlbgkabkot->psr_kabkot_name));?>, <?php echo ucwords(strtolower($model->paudlbgpropinsi->psr_prop_name));?></strong>, Jenjang PAUD (TK), dengan ketentuan sesuai pasal 12 Undang-Undang Nomor 20 Tahun 2003, bahwa bagi setiap peserta didik pada setiap satuan pendidikan berhak, mendapatkan pendidikan agama sesuai dengan agma yang dianutnya dan diajarkan oleh pendidik yang seagama dan diajarkan kewarganegaraan.
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
        <li>Sekretaris Ditjen PAUDNI Kemdikbud;</li>
        <li>Direktur Pembinaan PAUD Ditjen PAUDNI;</li>
        <li>Direktur Pembinaan Kursus dan Pelatihan Ditjen PAUDNI;</li>
        <li><?php echo $model->ib_paud_lbg_ijin_oleh;?>;</li>
        <li>Pimpinan <?php echo $model->ib_paud_lbg_name;?>;</li>
        <li>Arsip.</li>
    </ol>
</div>