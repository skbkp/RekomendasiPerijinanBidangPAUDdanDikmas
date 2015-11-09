<?php

class ImtauploadController extends Controller
{
        /**
         * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
         * using two-column layout. See 'protected/views/layouts/column2.php'.
         */
        public $layout='//layouts/bootstrap2crightimta';

        /**
         * @return array action filters
         */
        public function filters()
        {
                return array(
                        'accessControl', // perform access control for CRUD operations
                );
        }

        /**
         * Specifies the access control rules.
         * This method is used by the 'accessControl' filter.
         * @return array access control rules
         */
        public function accessRules()
        {
                return array(
                        array('allow', // allow authenticated user to perform 'create' and 'update' actions
                                'actions'=>array('create','update','index','view','viewperpanjangan','admin','perpanjangan','createperpanjangan'),
                                'users'=>array('@'),
                        ),
                        array('allow', // allow admin user to perform 'admin' and 'delete' actions
                                'actions'=>array('admin','delete','view','viewperpanjangan','perpanjangan','createperpanjangan'),
                                'users'=>array('admin'),
                        ),
                        array('deny',  // deny all users
                                'users'=>array('*'),
                        ),
                );
        }

        /**
         * Displays a particular model.
         * @param integer $id the ID of the model to be displayed
         */
        public function actionView($id)
        {
                $this->render('view',array(
                        'model'=>$this->loadModel($id),
                ));
        }

                public function actionViewperpanjangan($id)
        {
                $this->render('viewperpanjangan',array(
                        'model'=>$this->loadModel($id),
                ));
        }

        /**
         * Creates a new model.
         * If creation is successful, the browser will be redirected to the 'view' page.
         */
	public function actionCreate()
	{
		$model=new Imtaupload;
		// $dest=Yii::getPathOfAlias('application.upload.imta');
		$dest=Yii::getPathOfAlias('webroot').'/upload/imta';
		//$dest=Yii::getPathOfAlias('webroot.upload.imta');
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		
		if(isset($_POST['Imtaupload']))
		{
			$model->attributes=$_POST['Imtaupload'];
			$model->file_surat=CUploadedFile::getInstance($model,'file_surat');
			$model->file_kuasa=CUploadedFile::getInstance($model,'file_kuasa');
			$model->file_nilek=CUploadedFile::getInstance($model,'file_nilek');
			$model->file_kurikulum=CUploadedFile::getInstance($model,'file_kurikulum');
			$model->file_aktanotaris=CUploadedFile::getInstance($model,'file_aktanotaris');
			$model->file_pengesahankumham=CUploadedFile::getInstance($model,'file_pengesahankumham');
			$model->file_domisili=CUploadedFile::getInstance($model,'file_domisili');
			$model->file_skrptka=CUploadedFile::getInstance($model,'file_skrptka');
			$model->file_ijinoperasional=CUploadedFile::getInstance($model,'file_ijinoperasional');
			$model->file_rekapsiswadanptk=CUploadedFile::getInstance($model,'file_rekapsiswadanptk');
			$model->file_rekomendasidinas=CUploadedFile::getInstance($model,'file_rekomendasidinas');
			$model->file_alasan=CUploadedFile::getInstance($model,'file_alasan');
			$model->file_jaminan=CUploadedFile::getInstance($model,'file_jaminan');
			$model->file_paspor=CUploadedFile::getInstance($model,'file_paspor');
			$model->file_cv=CUploadedFile::getInstance($model,'file_cv');
			$model->file_foto=CUploadedFile::getInstance($model,'file_foto');
			$model->file_ijazah=CUploadedFile::getInstance($model,'file_ijazah');
			$model->file_sehat=CUploadedFile::getInstance($model,'file_sehat');
			$model->file_pernyataan=CUploadedFile::getInstance($model,'file_pernyataan');
			if($model->save()){
				if (
					$model->file_surat !== null &&
					$model->file_kuasa !== null &&
					$model->file_nilek !== null &&
					$model->file_kurikulum !== null &&
					$model->file_aktanotaris !== null &&
					$model->file_pengesahankumham !== null &&
					$model->file_domisili !== null &&
					$model->file_skrptka !== null &&
					$model->file_ijinoperasional !== null &&
					$model->file_rekapsiswadanptk !== null &&
					$model->file_rekomendasidinas !== null &&
					$model->file_alasan !== null &&
					$model->file_jaminan !== null &&
					$model->file_paspor !== null &&
					$model->file_cv !== null &&
					$model->file_foto !== null &&
					$model->file_ijazah !== null &&
					$model->file_sehat !== null &&
					$model->file_pernyataan !== null )
				   {
					if(!is_dir($dest.'/'.$model->imta_id)){
						
						mkdir($dest.'/'.$model->imta_id,0755);
					}
					
					$model->file_surat->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_surat->name);
					$model->file_kuasa->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_kuasa->name);
					$model->file_nilek->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_nilek->name);
					$model->file_kurikulum->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_kurikulum->name);
					$model->file_aktanotaris->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_aktanotaris->name);
					$model->file_pengesahankumham->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_pengesahankumham->name);
					$model->file_domisili->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_domisili->name);
					$model->file_skrptka->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_skrptka->name);
					$model->file_ijinoperasional->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_ijinoperasional->name);
					$model->file_rekapsiswadanptk->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_rekapsiswadanptk->name);
					$model->file_rekomendasidinas->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_rekomendasidinas->name);
					$model->file_alasan->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_alasan->name);
					$model->file_jaminan->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_jaminan->name);
					$model->file_paspor->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_paspor->name);
					$model->file_cv->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_cv->name);
					$model->file_foto->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_foto->name);
					$model->file_ijazah->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_ijazah->name);
					$model->file_sehat->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_sehat->name);
					$model->file_pernyataan->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_pernyataan->name);
				}
				$this->redirect(array('view','id'=>$model->upload_id));
			}
		}
		
		$this->render('create',array(
			'model'=>$model,
		));
		
		// echo $dest.'/'.$model->imta_id;
		// die();
	}



public function actionPerpanjangan()
	{
		$model=new Imtaupload;
		// $dest=Yii::getPathOfAlias('application.upload.imta');
		$dest=Yii::getPathOfAlias('webroot').'/upload/imta';
		//$dest=Yii::getPathOfAlias('webroot.upload.imta');
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		
		if(isset($_POST['Imtaupload']))
		{
			$model->attributes=$_POST['Imtaupload'];
			$model->file_surat=CUploadedFile::getInstance($model,'file_surat');
			$model->file_kuasa=CUploadedFile::getInstance($model,'file_kuasa');
			$model->file_nilek=CUploadedFile::getInstance($model,'file_nilek');
			$model->file_kurikulum=CUploadedFile::getInstance($model,'file_kurikulum');
			$model->file_aktanotaris=CUploadedFile::getInstance($model,'file_aktanotaris');
			$model->file_pengesahankumham=CUploadedFile::getInstance($model,'file_pengesahankumham');
			$model->file_domisili=CUploadedFile::getInstance($model,'file_domisili');
			$model->file_skrptka=CUploadedFile::getInstance($model,'file_skrptka');
			$model->file_ijinoperasional=CUploadedFile::getInstance($model,'file_ijinoperasional');
			$model->file_rekapsiswadanptk=CUploadedFile::getInstance($model,'file_rekapsiswadanptk');
			$model->file_rekomendasidinas=CUploadedFile::getInstance($model,'file_rekomendasidinas');
			$model->file_alasan=CUploadedFile::getInstance($model,'file_alasan');
			$model->file_jaminan=CUploadedFile::getInstance($model,'file_jaminan');
			$model->file_paspor=CUploadedFile::getInstance($model,'file_paspor');
			$model->file_cv=CUploadedFile::getInstance($model,'file_cv');
			$model->file_foto=CUploadedFile::getInstance($model,'file_foto');
			$model->file_ijazah=CUploadedFile::getInstance($model,'file_ijazah');
			$model->file_sehat=CUploadedFile::getInstance($model,'file_sehat');
			$model->file_pernyataan=CUploadedFile::getInstance($model,'file_pernyataan');
			$model->file_stm=CUploadedFile::getInstance($model,'file_stm');
			$model->file_kitas=CUploadedFile::getInstance($model,'file_kitas');
			$model->file_rekom=CUploadedFile::getInstance($model,'file_rekom');
			$model->file_imtakemnaker=CUploadedFile::getInstance($model,'file_imtakemnaker');
			$model->file_suratkontakkerja=CUploadedFile::getInstance($model,'file_suratkontakkerja');
			$model->file_hasilpenilaianijazah=CUploadedFile::getInstance($model,'file_hasilpenilaianijazah');
			$model->file_laporankegiatanproses=CUploadedFile::getInstance($model,'file_laporankegiatanproses');
			if($model->save()){
				if (
					$model->file_surat !== null &&
					$model->file_kuasa !== null &&
					$model->file_nilek !== null &&
					$model->file_kurikulum !== null &&
					$model->file_aktanotaris !== null &&
					$model->file_pengesahankumham !== null &&
					$model->file_domisili !== null &&
					$model->file_skrptka !== null &&
					$model->file_ijinoperasional !== null &&
					$model->file_rekapsiswadanptk !== null &&
					$model->file_rekomendasidinas !== null &&
					$model->file_alasan !== null &&
					$model->file_jaminan !== null &&
					$model->file_paspor !== null &&
					$model->file_cv !== null &&
					$model->file_foto !== null &&
					$model->file_ijazah !== null &&
					$model->file_sehat !== null &&
					$model->file_pernyataan !== null

					)
				   {
					if(!is_dir($dest.'/'.$model->imta_id)){
						
						mkdir($dest.'/'.$model->imta_id,0755);
					}
					
					$model->file_surat->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_surat->name);
					$model->file_kuasa->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_kuasa->name);
					$model->file_nilek->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_nilek->name);
					$model->file_kurikulum->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_kurikulum->name);
					$model->file_aktanotaris->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_aktanotaris->name);
					$model->file_pengesahankumham->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_pengesahankumham->name);
					$model->file_domisili->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_domisili->name);
					$model->file_skrptka->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_skrptka->name);
					$model->file_ijinoperasional->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_ijinoperasional->name);
					$model->file_rekapsiswadanptk->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_rekapsiswadanptk->name);
					$model->file_rekomendasidinas->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_rekomendasidinas->name);
					$model->file_alasan->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_alasan->name);
					$model->file_jaminan->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_jaminan->name);
					$model->file_paspor->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_paspor->name);
					$model->file_cv->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_cv->name);
					$model->file_foto->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_foto->name);
					$model->file_ijazah->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_ijazah->name);
					$model->file_sehat->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_sehat->name);
					$model->file_pernyataan->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_pernyataan->name);
					$model->file_stm->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_stm->name);
					$model->file_kitas->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_kitas->name);
					$model->file_rekom->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_rekom->name);
					$model->file_imtakemnaker->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_imtakemnaker->name);
					$model->file_suratkontakkerja->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_suratkontakkerja->name);
					$model->file_hasilpenilaianijazah->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_hasilpenilaianijazah->name);
					$model->file_laporankegiatanproses->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_laporankegiatanproses->name);
				}
				$this->redirect(array('viewperpanjangan','id'=>$model->upload_id));
			}
		}
		
		$this->render('createperpanjangan',array(
			'model'=>$model,
		));
		
		// echo $dest.'/'.$model->imta_id;
		// die();
	}



        /**
         * Updates a particular models.
         * If update is successful, the browser will be redirected to the 'view' page.
         * @param integer $id the ID of the model to be updated
         */
        public function actionUpdate($id)
        {
			$model=$this->loadModel($id);
			
			$modelimta=Imta::model()->findByPk($model->imta_id);
			if(in_array($modelimta->ib_imta_status,array(67,47)))
			{
				throw new CHttpException(400,'Data sudah tidak dapat di ubah, dan sedang menunggu proses selanjutnya');
			}
			// $dest=Yii::getPathOfAlias('application.upload.imta');
			$dest=Yii::getPathOfAlias('webroot').'/upload/imta';
			// Uncomment the following line if AJAX validation is needed
			// $this->performAjaxValidation($model);

			if(isset($_POST['Imtaupload']))
			{
				$model->attributes=$_POST['Imtaupload'];
				$file_surat=CUploadedFile::getInstance($model,'file_surat');
				if ($file_surat !== null) $model->file_surat = $file_surat;
				
				$file_kuasa=CUploadedFile::getInstance($model,'file_kuasa');
				if ($file_kuasa !== null) $model->file_kuasa = $file_kuasa;
				
				$file_nilek=CUploadedFile::getInstance($model,'file_nilek');
				if ($file_nilek !== null) $model->file_nilek = $file_nilek;
				
				$file_kurikulum=CUploadedFile::getInstance($model,'file_kurikulum');
				if ($file_kurikulum !== null) $model->file_kurikulum = $file_kurikulum;
				
				$file_aktanotaris=CUploadedFile::getInstance($model,'file_aktanotaris');
				if ($file_aktanotaris !== null) $model->file_aktanotaris = $file_aktanotaris;
				
				$file_pengesahankumham=CUploadedFile::getInstance($model,'file_pengesahankumham');
				if ($file_pengesahankumham !== null) $model->file_pengesahankumham = $file_pengesahankumham;
				
				$file_domisili=CUploadedFile::getInstance($model,'file_domisili');
				if ($file_domisili !== null) $model->file_domisili = $file_domisili;

				$file_skrptka=CUploadedFile::getInstance($model,'file_skrptka');
				if ($file_skrptka !== null) $model->file_skrptka = $file_skrptka;

				$file_ijinoperasional=CUploadedFile::getInstance($model,'file_ijinoperasional');
				if ($file_ijinoperasional !== null) $model->file_ijinoperasional = $file_ijinoperasional;

				$file_rekapsiswadanptk=CUploadedFile::getInstance($model,'file_rekapsiswadanptk');
				if ($file_rekapsiswadanptk !== null) $model->file_rekapsiswadanptk = $file_rekapsiswadanptk;			

				$file_rekomendasidinas=CUploadedFile::getInstance($model,'file_rekomendasidinas');
				if ($file_rekomendasidinas !== null) $model->file_rekomendasidinas = $file_rekomendasidinas;
											

				$file_alasan=CUploadedFile::getInstance($model,'file_alasan');
				if ($file_alasan !== null) $model->file_alasan = $file_alasan;
				
				
				$file_jaminan=CUploadedFile::getInstance($model,'file_jaminan');
				if ($file_jaminan !== null) $model->file_jaminan = $file_jaminan;
				
				$file_paspor=CUploadedFile::getInstance($model,'file_paspor');
				if ($file_paspor !== null) $model->file_paspor = $file_paspor;
				
				$file_cv=CUploadedFile::getInstance($model,'file_cv');
				if ($file_cv !== null) $model->file_cv = $file_cv;
				
				$file_foto=CUploadedFile::getInstance($model,'file_foto');
				if ($file_foto!== null) echo $model->file_foto = $file_foto;
				
				$file_ijazah=CUploadedFile::getInstance($model,'file_ijazah');
				if ($file_ijazah !== null) $model->file_ijazah = $file_ijazah;
				
				$file_sehat=CUploadedFile::getInstance($model,'file_sehat');
				if ($file_sehat !== null) $model->file_sehat = $file_sehat;
				
				$file_pernyataan=CUploadedFile::getInstance($model,'file_pernyataan');
				if ($file_pernyataan !== null) $model->file_pernyataan = $file_pernyataan;
				
				// print_r($model);
				if($model->save()) {
					
					if($file_surat !== null){$model->file_surat->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_surat->name);}
					if($file_kuasa !== null){$model->file_kuasa->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_kuasa->name);}
					if($file_nilek !== null){$model->file_nilek->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_nilek->name);}
					if($file_kurikulum !== null){$model->file_kurikulum->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_kurikulum->name);}
					if($file_aktanotaris !== null){$model->file_aktanotaris->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_aktanotaris->name);}
					if($file_pengesahankumham !== null){$model->file_pengesahankumham->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_pengesahankumham->name);}
					if($file_domisili !== null){$model->file_domisili->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_domisili->name);}
					if($file_skrptka !== null){$model->file_skrptka->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_skrptka->name);}
					if($file_ijinoperasional !== null){$model->file_ijinoperasional->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_ijinoperasional->name);}
					if($file_rekapsiswadanptk !== null){$model->file_rekapsiswadanptk->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_rekapsiswadanptk->name);}
					if($file_rekomendasidinas !== null){$model->file_rekomendasidinas->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_rekomendasidinas->name);}
					if($file_alasan !== null){$model->file_alasan->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_alasan->name);}
					if($file_jaminan !== null){$model->file_jaminan->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_jaminan->name);}
					if($file_paspor !== null){$model->file_paspor->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_paspor->name);}
					if($file_cv !== null){$model->file_cv->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_cv->name);}
					if($file_foto){
						$model->file_foto->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_foto->name);
					}
					if($file_ijazah !== null){$model->file_ijazah->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_ijazah->name);}
					if($file_sehat !== null){$model->file_sehat->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_sehat->name);}
					if($file_pernyataan !== null){$model->file_pernyataan->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_pernyataan->name);}
					
					//$this->redirect(array('view','id'=>$model->upload_id));
				}
					// die('berhenti disini');
						$this->redirect(array('view','id'=>$model->upload_id));
			}

			$this->render('update',array(
					'model'=>$model,
			));

        }


        public function actionUpdateperpanjangan($id)
        {
			$model=$this->loadModel($id);
			
			$modelimta=Imta::model()->findByPk($model->imta_id);
			if(in_array($modelimta->ib_imta_status,array(67,47)))
			{
				throw new CHttpException(400,'Data sudah tidak dapat di ubah, dan sedang menunggu proses selanjutnya');
			}
			// $dest=Yii::getPathOfAlias('application.upload.imta');
			$dest=Yii::getPathOfAlias('webroot').'/upload/imta';
			// Uncomment the following line if AJAX validation is needed
			// $this->performAjaxValidation($model);

			if(isset($_POST['Imtaupload']))
			{
				$model->attributes=$_POST['Imtaupload'];
				$file_surat=CUploadedFile::getInstance($model,'file_surat');
				if ($file_surat !== null) $model->file_surat = $file_surat;
				
				$file_kuasa=CUploadedFile::getInstance($model,'file_kuasa');
				if ($file_kuasa !== null) $model->file_kuasa = $file_kuasa;
				
				$file_nilek=CUploadedFile::getInstance($model,'file_nilek');
				if ($file_nilek !== null) $model->file_nilek = $file_nilek;
				
				$file_kurikulum=CUploadedFile::getInstance($model,'file_kurikulum');
				if ($file_kurikulum !== null) $model->file_kurikulum = $file_kurikulum;
				
				$file_aktanotaris=CUploadedFile::getInstance($model,'file_aktanotaris');
				if ($file_aktanotaris !== null) $model->file_aktanotaris = $file_aktanotaris;
				
				$file_pengesahankumham=CUploadedFile::getInstance($model,'file_pengesahankumham');
				if ($file_pengesahankumham !== null) $model->file_pengesahankumham = $file_pengesahankumham;
				
				$file_domisili=CUploadedFile::getInstance($model,'file_domisili');
				if ($file_domisili !== null) $model->file_domisili = $file_domisili;

				$file_skrptka=CUploadedFile::getInstance($model,'file_skrptka');
				if ($file_skrptka !== null) $model->file_skrptka = $file_skrptka;

				$file_ijinoperasional=CUploadedFile::getInstance($model,'file_ijinoperasional');
				if ($file_ijinoperasional !== null) $model->file_ijinoperasional = $file_ijinoperasional;

				$file_rekapsiswadanptk=CUploadedFile::getInstance($model,'file_rekapsiswadanptk');
				if ($file_rekapsiswadanptk !== null) $model->file_rekapsiswadanptk = $file_rekapsiswadanptk;			

				$file_rekomendasidinas=CUploadedFile::getInstance($model,'file_rekomendasidinas');
				if ($file_rekomendasidinas !== null) $model->file_rekomendasidinas = $file_rekomendasidinas;
											

				$file_alasan=CUploadedFile::getInstance($model,'file_alasan');
				if ($file_alasan !== null) $model->file_alasan = $file_alasan;
				
				
				$file_jaminan=CUploadedFile::getInstance($model,'file_jaminan');
				if ($file_jaminan !== null) $model->file_jaminan = $file_jaminan;
				
				$file_paspor=CUploadedFile::getInstance($model,'file_paspor');
				if ($file_paspor !== null) $model->file_paspor = $file_paspor;
				
				$file_cv=CUploadedFile::getInstance($model,'file_cv');
				if ($file_cv !== null) $model->file_cv = $file_cv;
				
				$file_foto=CUploadedFile::getInstance($model,'file_foto');
				if ($file_foto!== null) echo $model->file_foto = $file_foto;
				
				$file_ijazah=CUploadedFile::getInstance($model,'file_ijazah');
				if ($file_ijazah !== null) $model->file_ijazah = $file_ijazah;
				
				$file_sehat=CUploadedFile::getInstance($model,'file_sehat');
				if ($file_sehat !== null) $model->file_sehat = $file_sehat;
				
				$file_pernyataan=CUploadedFile::getInstance($model,'file_pernyataan');
				if ($file_pernyataan !== null) $model->file_pernyataan = $file_pernyataan;
				
				$file_stm=CUploadedFile::getInstance($model,'file_stm');
				if ($file_stm !== null) $model->file_stm = $file_stm;
				
				$file_kitas=CUploadedFile::getInstance($model,'file_kitas');
				if ($file_kitas !== null) $model->file_kitas = $file_kitas;
				
				$file_rekom=CUploadedFile::getInstance($model,'file_rekom');
				if ($file_rekom !== null) $model->file_rekom = $file_rekom;
				
				$file_imtakemnaker=CUploadedFile::getInstance($model,'file_imtakemnaker');
				if ($file_imtakemnaker!== null) echo $model->file_imtakemnaker = $file_imtakemnaker;
				
				$file_suratkontakkerja=CUploadedFile::getInstance($model,'file_suratkontakkerja');
				if ($file_suratkontakkerja !== null) $model->file_suratkontakkerja = $file_suratkontakkerja;
				
				$file_hasilpenilaianijazah=CUploadedFile::getInstance($model,'file_hasilpenilaianijazah');
				if ($file_hasilpenilaianijazah !== null) $model->file_hasilpenilaianijazah = $file_hasilpenilaianijazah;
				
				$file_laporankegiatanproses=CUploadedFile::getInstance($model,'file_laporankegiatanproses');
				if ($file_laporankegiatanproses !== null) $model->file_laporankegiatanproses = $file_laporankegiatanproses;
				// print_r($model);
				if($model->save()) {
					
					if($file_surat !== null){$model->file_surat->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_surat->name);}
					if($file_kuasa !== null){$model->file_kuasa->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_kuasa->name);}
					if($file_nilek !== null){$model->file_nilek->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_nilek->name);}
					if($file_kurikulum !== null){$model->file_kurikulum->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_kurikulum->name);}
					if($file_aktanotaris !== null){$model->file_aktanotaris->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_aktanotaris->name);}
					if($file_pengesahankumham !== null){$model->file_pengesahankumham->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_pengesahankumham->name);}
					if($file_domisili !== null){$model->file_domisili->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_domisili->name);}
					if($file_skrptka !== null){$model->file_skrptka->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_skrptka->name);}
					if($file_ijinoperasional !== null){$model->file_ijinoperasional->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_ijinoperasional->name);}
					if($file_rekapsiswadanptk !== null){$model->file_rekapsiswadanptk->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_rekapsiswadanptk->name);}
					if($file_rekomendasidinas !== null){$model->file_rekomendasidinas->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_rekomendasidinas->name);}
					if($file_alasan !== null){$model->file_alasan->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_alasan->name);}
					if($file_jaminan !== null){$model->file_jaminan->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_jaminan->name);}
					if($file_paspor !== null){$model->file_paspor->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_paspor->name);}
					if($file_cv !== null){$model->file_cv->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_cv->name);}
					if($file_foto){
						$model->file_foto->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_foto->name);
					}
					if($file_ijazah !== null){$model->file_ijazah->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_ijazah->name);}
					if($file_sehat !== null){$model->file_sehat->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_sehat->name);}
					if($file_pernyataan !== null){$model->file_pernyataan->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_pernyataan->name);}
					if($file_stm !== null){$model->file_stm->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_stm->name);}
					if($file_kitas !== null){$model->file_kitas->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_kitas->name);}
					if($file_imtakemnaker !== null){$model->file_imtakemnaker->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_imtakemnaker->name);}
					if($file_suratkontakkerja !== null){$model->file_suratkontakkerja->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_suratkontakkerja->name);}
					if($file_hasilpenilaianijazah !== null){$model->file_hasilpenilaianijazah->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_hasilpenilaianijazah->name);}
					if($file_laporankegiatanproses !== null){$model->file_laporankegiatanproses->saveAs($dest.'/'.$model->imta_id.'/'.$model->file_laporankegiatanproses->name);}					
					//$this->redirect(array('view','id'=>$model->upload_id));
				}
					// die('berhenti disini');
						$this->redirect(array('viewperpanjangan','id'=>$model->upload_id));
			}

			$this->render('updateperpanjangan',array(
					'model'=>$model,
			));

        }



        /**
         * Deletes a particular model.
         * If deletion is successful, the browser will be redirected to the 'admin' page.
         * @param integer $id the ID of the model to be deleted
         */
        public function actionDelete($id)
        {
                if(Yii::app()->request->isPostRequest)
                {
                        // we only allow deletion via POST request
                        $this->loadModel($id)->delete();

                        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
                        if(!isset($_GET['ajax']))
                                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
                }
                else
                        throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
        }

        /**
         * Lists all models.
         */
        public function actionIndex()
        {
                if(Yii::app()->user->id == 1){
                        $dataProvider=new CActiveDataProvider('Imtaupload');
                }
                if(Yii::app()->user->id != 1){
                        $dataProvider=new CActiveDataProvider('Imtaupload',array(
                        'criteria'=>array(
                                        'condition'=>'user_id='.Yii::app()->user->id,
                                ),
                        ));
                }

                //$dataProvider=new CActiveDataProvider('Imtaupload');
                $this->render('index',array(
                        'dataProvider'=>$dataProvider,
                ));
        }

        /**
         * Manages all models.
         */
        public function actionAdmin()
        {
                $model=new Imtaupload('search');
                $model->unsetAttributes();  // clear any default values
                if(isset($_GET['Imtaupload']))
                        $model->attributes=$_GET['Imtaupload'];

                $this->render('admin',array(
                        'model'=>$model,
                ));
        }

        /**
         * Returns the data model based on the primary key given in the GET variable.
         * If the data model is not found, an HTTP exception will be raised.
         * @param integer the ID of the model to be loaded
         */
        public function loadModel($id)
        {
                $model=Imtaupload::model()->findByPk($id);
                if($model===null)
                        throw new CHttpException(404,'The requested page does not exist.');
                return $model;
        }

        /**
         * Performs the AJAX validation.
         * @param CModel the model to be validated
         */
        protected function performAjaxValidation($model)
        {
                if(isset($_POST['ajax']) && $_POST['ajax']==='imtaupload-form')
                {
                        echo CActiveForm::validate($model);
                        Yii::app()->end();
                }
        }
}
