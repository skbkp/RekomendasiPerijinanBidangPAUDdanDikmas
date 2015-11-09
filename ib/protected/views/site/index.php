
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo Yii::app()->request->baseUrl; ?>/images/favicon.ico" rel="shortcut icon">
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/mainku.css" />

<?php $this->pageTitle=Yii::app()->name; ?>

<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit', array(
'heading'=>CHtml::encode(Yii::app()->name),
)); ?>

<p>Menangani proses rekomendasi perizinan siswa asing yang akan belajar di lembaga penyelenggara program bidang PAUD dan Kursus</p>
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
&nbsp;
<?php $this->widget('bootstrap.widgets.TbButton', array(
    'type'=>'primary',
    'label'=>'REK IMTA',
    'icon'=>'share white',
    'url'=>Yii::app()->createUrl('imta'),
)); ?>


</p>

<?php $this->endWidget(); ?>

<!-- ACCORDION -->

</head>

<script>

	/*$(function() {

    $( "#accordion" ).accordion({

      collapsible: true,

	  clearStyle: true,

	  autoHeight: true,

	  heightStyle: "fill",

    });

  });*/
  $(function() {
$("#accordion").accordion({
   active: false,            
   autoHeight: false,            
   navigation: true,            
   collapsible: true,
   create: function(event, ui) { $("#accordion").show(); }
});
  });

	</script>

<!-- COLORBOX -->

<script>

	$(document).ready(function(){

		$(".ajax").colorbox({iframe:true, innerWidth:600, innerHeight:500});

	});

	$(document).ready(function(){

		$(".ajax1").colorbox({iframe:true, innerWidth:930, innerHeight:500});

	});

	$(document).ready(function(){

		$(".ajax2").colorbox({iframe:true, width:"100%", height:"100%"});

	});

	var position;

	$(document).bind('cbox_open', function() {

		position = $("html,body").scrollTop();

		$('html').css({

			overflow: 'hidden'

		});

	}).bind('cbox_closed', function() {

		$('html').css({

			overflow: 'auto'

		});

		$("html,body").scrollTop(position);

	});

</script>

<body class="body-background-admin">

	<div id="admin-container">

        <div id="form-login-admin" style="margin-bottom: 10px; float:left;">

        	<div id="login-inside-left">


                <div id="login-inside-left-menu" class="footer-cursor">

                    <a class="ajax1" href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/daftarpengajuan/index">

                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/daftar.png" />

                    <p class="p-size14 link-style">Daftar Permohonan</p>

                    </a>

                </div>
                <div id="login-inside-left-menu" class="footer-cursor">

                    <a class="ajax1" href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/user/recovery">

                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/password.png" />

                    <p class="p-size14 link-style">Lupa Sandi</p>

                    </a>

                </div>
                <div id="login-inside-left-menu" class="footer-cursor">

                    <a href="http://119.235.30.114/lumbung-themes/diknas/petunjukfile.php" class="ajax2">

                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/petunjuk.png" />

                    <p class="p-size14 link-style">Petunjuk Penggunaan</p>

                    </a>

                </div>
                <div id="login-inside-left-menu" class="footer-cursor">

                    <a href="http://119.235.30.114/lumbung-themes/diknas/prosedur.html" class="ajax2">

                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/prosedur.png" />

                    <p class="p-size14 link-style">Prosedur dan Persyaratan</p>

                    </a>

                </div>
				<div id="login-inside-left-menu" class="footer-cursor">

					<a href="http://119.235.30.114/kuisioner">

                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/kuis.png" />

                    <p class="p-size14 link-style">Kuisioner</p>
					</a>

				</div>

                <div style="height:10px;">&nbsp;</div>

            </div>       

        </div>

        <div id="form-login-admin-right" style="margin-bottom: 10px; ">
        <div style="height:30px;">&nbsp;</div>
            <p class="p-size12">E-Layanan Pendidikan Anak Usia Dini dan Pendidikan Kursus merupakan layanan yang dibuat Direktorat Jenderal Pendidikan Anak Usia Dini dan Pendidikan Masyarakat guna memenuhi kebutuhan para peserta didik dalam pelayanan izin belajar. Layanan ini terdiri dari layanan Izin Belajar untuk Warga Negara Asing yang ingin belajar di dalam negeri.</p>              
        	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/gratis.png" width="200" align="right" />
        <div style="height:120px;">&nbsp;</div>

        </div>

    </div>
</body>

</html>

