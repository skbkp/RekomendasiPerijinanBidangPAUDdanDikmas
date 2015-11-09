<?php

class KabkotController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

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
				'actions'=>array('carikabkot','carikabkot2','carikabkot3','carikabkot4','carikabkot5','carikabkot6'),
				'users'=>array('*'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','create','update','index','view'),
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
		$model=new Kabkot;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Kabkot']))
		{
			$model->attributes=$_POST['Kabkot'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->psr_kabkot_id));
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

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Kabkot']))
		{
			$model->attributes=$_POST['Kabkot'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->psr_kabkot_id));
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
		$dataProvider=new CActiveDataProvider('Kabkot');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Kabkot('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Kabkot']))
			$model->attributes=$_GET['Kabkot'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}


public function actionCarikabkot()
{
	$cek =  $_POST['Kursus']['ib_kursus_peserta_prop_id'];
	$data=Kabkot::model()->findAll('psr_prop_id='.$cek);
	$data=CHtml::listData($data,'psr_kabkot_id','psr_kabkot_name');
	echo CHtml::tag('option',array('value'=>''),CHtml::encode('- Pilih Kabkot -'),true);
    	foreach($data as $value=>$name)
    	{
        	echo CHtml::tag('option',
                   array('value'=>$value),CHtml::encode($name),true);
    	}
}

public function actionCarikabkot2()
{
	$cek =  $_POST['Kursus']['ib_kursus_lbg_prop_id'];
	$data=Kabkot::model()->findAll('psr_prop_id='.$cek);
	$data=CHtml::listData($data,'psr_kabkot_id','psr_kabkot_name');
	echo CHtml::tag('option',array('value'=>''),CHtml::encode('- Pilih Kabkot -'),true);
    	foreach($data as $value=>$name)
    	{
        	echo CHtml::tag('option',
                   array('value'=>$value),CHtml::encode($name),true);
    	}
}

public function actionCarikabkot3()
{
	$cek =  $_POST['Paud']['ib_paud_peserta_prop_id'];
	$data=Kabkot::model()->findAll('psr_prop_id='.$cek);
	$data=CHtml::listData($data,'psr_kabkot_id','psr_kabkot_name');
	echo CHtml::tag('option',array('value'=>''),CHtml::encode('- Pilih Kabkot -'),true);
    	foreach($data as $value=>$name)
    	{
        	echo CHtml::tag('option',
                   array('value'=>$value),CHtml::encode($name),true);
    	}
}

public function actionCarikabkot4()
{
	$cek =  $_POST['Paud']['ib_paud_lbg_prop_id'];
	$data=Kabkot::model()->findAll('psr_prop_id='.$cek);
	$data=CHtml::listData($data,'psr_kabkot_id','psr_kabkot_name');
	echo CHtml::tag('option',array('value'=>''),CHtml::encode('- Pilih Kabkot -'),true);
    	foreach($data as $value=>$name)
    	{
        	echo CHtml::tag('option',
                   array('value'=>$value),CHtml::encode($name),true);
    	}
}


public function actionCarikabkot5()
{
	$cek =  $_POST['Imta']['ib_imta_peserta_prop_id'];
	$data=Kabkot::model()->findAll('psr_prop_id='.$cek);
	$data=CHtml::listData($data,'psr_kabkot_id','psr_kabkot_name');
	echo CHtml::tag('option',array('value'=>''),CHtml::encode('- Pilih Kabkot -'),true);
    	foreach($data as $value=>$name)
    	{
        	echo CHtml::tag('option',
                   array('value'=>$value),CHtml::encode($name),true);
    	}
}

public function actionCarikabkot6()
{
	$cek =  $_POST['Imta']['ib_imta_lbg_prop_id'];
	$data=Kabkot::model()->findAll('psr_prop_id='.$cek);
	$data=CHtml::listData($data,'psr_kabkot_id','psr_kabkot_name');
	echo CHtml::tag('option',array('value'=>''),CHtml::encode('- Pilih Kabkot -'),true);
    	foreach($data as $value=>$name)
    	{
        	echo CHtml::tag('option',
                   array('value'=>$value),CHtml::encode($name),true);
    	}
}



	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Kabkot::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='kabkot-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
