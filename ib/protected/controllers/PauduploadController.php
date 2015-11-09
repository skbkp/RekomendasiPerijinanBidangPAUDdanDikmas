<?php

class PauduploadController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/bootstrap2crightpaud';

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
				'actions'=>array('create','update','index','view','admin'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','view'),
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

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Paudupload;
                //$dest=Yii::getPathOfAlias('webroot.upload.paud');
               // $dest=Yii::getPathOfAlias('application.upload.paud');
		$dest=Yii::getPathOfAlias('webroot').'/upload/paud';
		
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
                
                // print_r($_POST);die();
                if(isset($_POST['Paudupload']))
                {
                  // echo $dest;die();
                        $model->attributes=$_POST['Paudupload'];
                        $model->file_surat=CUploadedFile::getInstance($model,'file_surat');
                        $model->file_kuasa=CUploadedFile::getInstance($model,'file_kuasa');
                        $model->file_biaya=CUploadedFile::getInstance($model,'file_biaya');
                        $model->file_paspor_anak=CUploadedFile::getInstance($model,'file_paspor_anak');
                        $model->file_aktalahir=CUploadedFile::getInstance($model,'file_aktalahir');
                        $model->file_paspor_ortu=CUploadedFile::getInstance($model,'file_paspor_ortu');
                        $model->file_kk=CUploadedFile::getInstance($model,'file_kk');
                        $model->file_nikah=CUploadedFile::getInstance($model,'file_nikah');
                        $model->file_jaminan=CUploadedFile::getInstance($model,'file_jaminan');
                        $model->file_domisili=CUploadedFile::getInstance($model,'file_domisili');
                        if($model->save()){
                            if(
                                    $model->file_surat !== null &&
                                    $model->file_kuasa !== null &&
                                    $model->file_biaya !== null &&
                                    $model->file_paspor_anak !== null &&
                                    $model->file_aktalahir !== null &&
                                    $model->file_paspor_ortu !== null &&
                                    $model->file_kk !== null &&
                                    $model->file_nikah !== null &&
                                    $model->file_jaminan !== null &&
                                    $model->file_domisili !== null
                                    ){
                                    
                                        if(!is_dir($dest.'/'.$model->paud_id)){
                                            mkdir($dest.'/'.$model->paud_id,0755);
                                        }
                                        $model->file_surat->saveAs($dest.'/'.$model->paud_id.'/'.$model->file_surat->name);
                                        $model->file_kuasa->saveAs($dest.'/'.$model->paud_id.'/'.$model->file_kuasa->name);
                                        $model->file_biaya->saveAs($dest.'/'.$model->paud_id.'/'.$model->file_biaya->name);
                                        $model->file_paspor_anak->saveAs($dest.'/'.$model->paud_id.'/'.$model->file_paspor_anak->name);
                                        $model->file_aktalahir->saveAs($dest.'/'.$model->paud_id.'/'.$model->file_aktalahir->name);
                                        $model->file_paspor_ortu->saveAs($dest.'/'.$model->paud_id.'/'.$model->file_paspor_ortu->name);
                                        $model->file_kk->saveAs($dest.'/'.$model->paud_id.'/'.$model->file_kk->name);
                                        $model->file_nikah->saveAs($dest.'/'.$model->paud_id.'/'.$model->file_nikah->name);
                                        $model->file_jaminan->saveAs($dest.'/'.$model->paud_id.'/'.$model->file_jaminan->name);
                                        $model->file_domisili->saveAs($dest.'/'.$model->paud_id.'/'.$model->file_domisili->name);
                            }
                                $this->redirect(array('view','id'=>$model->upload_id));
                        }
                }
                
		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
		
		$modelpaud=Paud::model()->findByPk($model->paud_id);
		if(in_array($modelpaud->ib_paud_status,array(67,47)))
		{
			throw new CHttpException(400,'Data sudah tidak dapat di ubah, dan sedang menunggu proses selanjutnya');
		}
		
		$dest=Yii::getPathOfAlias('webroot').'/upload/paud';
// 		echo $dest;die();
        //        $dest=Yii::getPathOfAlias('application.upload.paud');
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Paudupload']))
		{
			$model->attributes=$_POST['Paudupload'];
			$file_surat=CUploadedFile::getInstance($model,'file_surat');
			if ($file_surat !== null) $model->file_surat = $file_surat;
			
			$file_kuasa=CUploadedFile::getInstance($model,'file_kuasa');
			if ($file_kuasa !== null) $model->file_kuasa = $file_kuasa;
			
			$file_biaya=CUploadedFile::getInstance($model,'file_biaya');
			if ($file_biaya !== null) $model->file_biaya = $file_biaya;
			
			$file_paspor_anak=CUploadedFile::getInstance($model,'file_paspor_anak');
			if ($file_paspor_anak !== null) $model->file_paspor_anak = $file_paspor_anak;
			
			$file_aktalahir=CUploadedFile::getInstance($model,'file_aktalahir');
			if ($file_aktalahir !== null) $model->file_aktalahir = $file_aktalahir;
			
			$file_paspor_ortu=CUploadedFile::getInstance($model,'file_paspor_ortu');
			if ($file_paspor_ortu !== null) $model->file_paspor_ortu = $file_paspor_ortu;
			
			$file_kk=CUploadedFile::getInstance($model,'file_kk');
			if ($file_kk !== null) $model->file_kk = $file_kk;
			
			$file_nikah=CUploadedFile::getInstance($model,'file_nikah');
			if ($file_nikah !== null) $model->file_nikah = $file_nikah;
			
			$file_jaminan=CUploadedFile::getInstance($model,'file_jaminan');
			if ($file_jaminan !== null) $model->file_jaminan = $file_jaminan;
			
			$file_domisili=CUploadedFile::getInstance($model,'file_domisili');
			if ($file_domisili !== null) $model->file_domisili = $file_domisili;
			
			if($model->save()){
				if($file_surat !== null){$model->file_surat->saveAs($dest.'/'.$model->paud_id.'/'.$model->file_surat->name);}
				if($file_kuasa !== null){$model->file_kuasa->saveAs($dest.'/'.$model->paud_id.'/'.$model->file_kuasa->name);}
				if($file_biaya !== null){$model->file_biaya->saveAs($dest.'/'.$model->paud_id.'/'.$model->file_biaya->name);}
				if($file_paspor_anak !== null){$model->file_paspor_anak->saveAs($dest.'/'.$model->paud_id.'/'.$model->file_nilek->name);}
				if($file_aktalahir !== null){$model->file_aktalahir->saveAs($dest.'/'.$model->paud_id.'/'.$model->file_kurikulum->name);}
				if($file_paspor_ortu !== null){$model->file_paspor_ortu->saveAs($dest.'/'.$model->paud_id.'/'.$model->file_aktanotaris->name);}
				if($file_kk !== null){$model->file_kk->saveAs($dest.'/'.$model->paud_id.'/'.$model->file_pengesahankumham->name);}
				if($file_nikah !== null){$model->file_nikah->saveAs($dest.'/'.$model->paud_id.'/'.$model->file_nikah->name);}
				if($file_jaminan !== null){$model->file_jaminan->saveAs($dest.'/'.$model->paud_id.'/'.$model->file_jaminan->name);}
				if($file_domisili !== null){$model->file_domisili->saveAs($dest.'/'.$model->paud_id.'/'.$model->file_domisili->name);}
				//$this->redirect(array('view','id'=>$model->upload_id));
			}
				$this->redirect(array('view','id'=>$model->upload_id));
		}

		$this->render('update',array(
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
			$dataProvider=new CActiveDataProvider('Paudupload');
		}
		if(Yii::app()->user->id != 1){
			$dataProvider=new CActiveDataProvider('Paudupload',array(
			'criteria'=>array(
					'condition'=>'user_id='.Yii::app()->user->id,
				),
			));
		}

		//$dataProvider=new CActiveDataProvider('Paudupload');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Paudupload('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Paudupload']))
			$model->attributes=$_GET['Paudupload'];

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
		$model=Paudupload::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='paudupload-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
