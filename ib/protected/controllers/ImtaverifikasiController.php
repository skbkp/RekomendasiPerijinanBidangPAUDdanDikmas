<?php

class ImtaverifikasiController extends Controller
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
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','update', 'view','perpanjangan','updateperpanjangan','createperpanjangan','viewperpanjangan'),
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
		$model=new Imtaverifikasi;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Imtaverifikasi']))
		{
			$model->attributes=$_POST['Imtaverifikasi'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->nilai_imta_id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}


		public function actionCreateperpanjangan()
	{
		$model=new Imtaverifikasi;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Imtaverifikasi']))
		{
			$model->attributes=$_POST['Imtaverifikasi'];
			if($model->save())
				$this->redirect(array('viewperpanjangan','id'=>$model->nilai_imta_id));
		}

		$this->render('createperpanjangan',array(
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
		$modelImtaupload=Imtaupload::model()->findByAttributes(array('imta_id'=>$model->ib_imta_id));

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Imtaverifikasi']))
		{
			$model->attributes=$_POST['Imtaverifikasi'];
			if($model->save())
				$this->redirect(array('view', 'id'=>$model->nilai_imta_id));
		}
//echo '<br><br><br><br><br><br><br><br><br><br>baca';
		$this->render('update',array(
			'model'=>$model,
			'modelImtaupload'=>$modelImtaupload,
		));



	}

	public function actionUpdateperpanjangan($id)
	{
		
		
		$model=$this->loadModel($id);
		$modelImtaupload=Imtaupload::model()->findByAttributes(array('imta_id'=>$model->ib_imta_id));

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Imtaverifikasi']))
		{
			$model->attributes=$_POST['Imtaverifikasi'];
			if($model->save())
				$this->redirect(array('viewperpanjangan', 'id'=>$model->nilai_imta_id));
		}
//echo '<br><br><br><br><br><br><br><br><br><br>baca';
		$this->render('updateperpanjangan',array(
			'model'=>$model,
			'modelImtaupload'=>$modelImtaupload,
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
		$dataProvider=new CActiveDataProvider('Imtaverifikasi');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Imtaverifikasi('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Imtaverifikasi']))
			$model->attributes=$_GET['Imtaverifikasi'];

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
		$model=Imtaverifikasi::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='imtaverifikasi-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
