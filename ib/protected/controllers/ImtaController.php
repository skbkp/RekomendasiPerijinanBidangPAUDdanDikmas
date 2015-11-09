<?php

class ImtaController extends Controller
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
                        array('allow', // allow authenticated user to perform 'updatable' actions
				'actions'=>array('updatable','daftarpengajuan','perpanjangan','viewperpanjangan'),
				'users'=>array('*'),
			),
                   array('allow', // allow authenticated user to perform 'updatable' actions
				'actions'=>array('daftarpengajuan'),
			
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','index','view','viewfile','readfile','admin','perpanjangan','viewperpanjangan'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','print'),
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
		
		$modelImtaupload=Imtaupload::model()->findByAttributes(array('imta_id'=>$id));
				
		$this->render('view',array(
			'model'=>$this->loadModel($id),
			'modelImtaupload'=>$modelImtaupload,
		));
	}


    
	public function actionViewperpanjangan($id)
	{
		
		$modelImtaupload=Imtaupload::model()->findByAttributes(array('imta_id'=>$id));
				
		$this->render('viewperpanjangan',array(
			'model'=>$this->loadModel($id),
			'modelImtaupload'=>$modelImtaupload,
		));
	}

	
	
	public function actionReadfile($id)
	{
		$this->loadModel($id);
		
		$dest=Yii::app()->getBaseUrl(true).'/upload/imta';
		$path_info = pathinfo($_GET['fid']);

		$file_ext = $path_info['extension']; // "bill"
		if(strtolower( $file_ext)=='pdf'){
			  header('Content-type: application/pdf');
		}else{
			
			 header('Content-Type: image/jpeg');
		}
		// echo $dest.'/'.$_GET['id'].'/'. str_replace(' ','%20', $fid );
		readfile($dest.'/'.$id.'/'. str_replace(' ','%20', $_GET['fid'] ));
	
		exit;
	}
	



	public function actionViewfile($id)
	{
		// $dest=Yii::getPathOfAlias('webroot').'/upload/imta';
		$this->loadModel($id);
		$urlfile=$this->createUrl('imta/readfile',array('id'=>$id, 'fid'=>$_GET['fid']));
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




	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
		if(in_array($model->ib_imta_status,array(67,47)))
		{
			throw new CHttpException(400,'Data sudah tidak dapat di ubah, dan sedang menunggu proses selanjutnya.');
		}
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Imta']))
		{
			$model->attributes=$_POST['Imta'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->ib_imta_id));
		}

		$this->render('update',array(
			'model'=>$model,
		));


	}


		public function actionPerpanjangan($id)
	{
	    
     	$model=$this->loadModel($id);
        $clone = new Imta;

		if(isset($_POST['Imta']))
		{
		 
		  $clone->attributes = $_POST['Imta'];


			$clone->ib_imta_jatuh_tempo = '0000-00-00';
			$clone->ib_imta_status = 7;
            $clone->ib_imta_jenis_imta = 2;
            $model->status_perpanjangan = 'Y';
		
			if($clone->save() && $model->save())
			 $this->redirect(array('viewperpanjangan','id'=>$clone->ib_imta_id));
			

		}
		
		$this->render('perpanjangan',array(
			'model'=>$model,

		));


	}


	


	

	
	public function actionCreate()
	{
		$model=new Imta;



		if(isset($_POST['Imta']))
		{
			$model->attributes=$_POST['Imta'];
			if($model->save())
			
                            
                    $this->redirect(array('imta/create'));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}



        
        public function actionUpdatable(){
            $es = new EditableSaver('Imta');
            $es->onBeforeUpdate = function($event) {
                $event->sender->setAttribute('ib_imta_update_at',date('Y-m-d H:i:s'));

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
			$dataProvider=new CActiveDataProvider('Imta');
		}
		if(Yii::app()->user->id != 1){
			$dataProvider=new CActiveDataProvider('Imta',array(
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
		$model=new Imta('search');

        
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Imta']))
			$model->attributes=$_GET['Imta'];
 
		$this->render('admin',array(
			'model'=>$model,
		));
	}
        
        public function actionPrint(){
            $model=new Imta('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Imta']))
			$model->attributes=$_GET['Imta'];

		$this->render('print',array(
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
		$model=Imta::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

		public function loadUpload($id)
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='imta-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
