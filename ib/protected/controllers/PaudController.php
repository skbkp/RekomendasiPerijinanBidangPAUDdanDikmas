<?php

class PaudController extends Controller
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
            array('allow', // allow authenticated user to perform 'updatable' actions
				'actions'=>array('updatable','displayalamatwna','perpanjangan','viewperpanjangan'),
				'users'=>array('*'),
			),
//			array('allow', // allow admin user to perform 'admin' and 'delete' actions
//				'actions' => array('create','update', 'index','view','viewfile','readfile','admin'),
//				'expression' => '(Yii::app()->user->id=='.$this->userId.')',
//			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update', 'index','view','viewfile','readfile','admin','perpanjangan','viewperpanjangan'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
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
		// echo "<br><br><br><br><br><br><br><br><br><br>".$id;
		$modelPAUDupload=Paudupload::model()->findByAttributes(array('paud_id'=>$id));
		
		$this->render('view',array(
			'model'=>$this->loadModel($id),
			'modelPAUDupload'=>$modelPAUDupload,
		));
	}


		public function actionViewperpanjangan($id)
	{
		// echo "<br><br><br><br><br><br><br><br><br><br>".$id;
		$modelPAUDupload=Paudupload::model()->findByAttributes(array('paud_id'=>$id));
		
		$this->render('viewperpanjangan',array(
			'model'=>$this->loadModel($id),
			'modelPAUDupload'=>$modelPAUDupload,
		));
	}
	
	public function actionReadfile($id)
	{
		$this->loadModel($id);
		$dest=Yii::app()->getBaseUrl(true).'/upload/paud';
		$path_info = pathinfo($_GET['fid']);
		
		$file_ext = $path_info['extension']; // "bill"
		if(strtolower( $file_ext)=='pdf'){
			header('Content-type: application/pdf');
		}else{
			
			header('Content-Type: image/jpeg');
		}
		
		readfile($dest.'/'.$id.'/'. str_replace(' ','%20', $_GET['fid'] ));
	
		exit;
	}
	
	public function actionViewfile($id)
	{
		$this->loadModel($id);
		// $dest=Yii::getPathOfAlias('webroot').'/upload/kursus';
		$modelPAUDupload=Paudupload::model()->findByAttributes(array('paud_id'=>$id));
		
		$urlfile=$this->createUrl('paud/readfile',array('id'=>$id, 'fid'=>$_GET['fid']));
		echo '
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 <h4 class="modal-title">File</h4>
            </div>			<!-- /modal-header -->
            <div class="modal-body">
            <p><embed src="'.$urlfile.'" width="100%" height="375"></p>
            </div>			<!-- /modal-body -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
               
            </div>			<!-- /modal-footer -->
';
	//	echo $dest."ff  $fid" ;
		exit;
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Paud;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Paud']))
		{
			$model->attributes=$_POST['Paud'];
			if($model->save())
				//$this->redirect(array('view','id'=>$model->ib_paud_id));
                            $this->redirect(array('paudupload/create'));
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

		if(isset($_POST['Paud']))
		{
			$model->attributes=$_POST['Paud'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->ib_paud_id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}



		public function actionPerpanjangan($id)
	{
		$model=$this->loadModel($id);
		$clone = new Paud;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Paud']))
		{
			
			$clone->attributes = $_POST['Paud'];

			$clone->ib_paud_jatuh_tempo = '0000-00-00';
			$clone->ib_paud_status = 7;
            $clone->ib_paud_jenis_paud = 2;
            $model->status_perpanjangan = 'Y';
			if($clone->save() && $model->save())
				$this->redirect(array('view','id'=>$clone->ib_paud_id));
		}

		$this->render('perpanjangan',array(
			'model'=>$model,
		));
	}
        
        public function actionUpdatable(){
            $es = new EditableSaver('Paud');
            $es->onBeforeUpdate = function($event){
                $event->sender->setAttribute('ib_paud_update_at',date('Y-m-d H:i:s'));
            };
            $es->update();
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
			$dataProvider=new CActiveDataProvider('Paud');
		}
		if(Yii::app()->user->id != 1){
			$dataProvider=new CActiveDataProvider('Paud',array(
			 'criteria'=>array(
					'condition'=>'user_id='.Yii::app()->user->id,
				 ),
			));
		}
		
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Paud('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Paud']))
			$model->attributes=$_GET['Paud'];

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
		$model=Paud::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='paud-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
