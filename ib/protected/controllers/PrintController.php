<?php
class PrintController extends Controller{
    public $layout='//layouts/bootstrap';
    
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
				'actions'=>array('pdf','view','paudpdf','imtapdf'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
    
    public function actionPdf($id)
    {
        $model=$this->loadModel($id);
        $mpdf = Yii::app()->ePdf->mpdf();//HTML2PDF
        $pdfheader = '
            <div style="padding-top:0px;">
            <table width="100%" style="border-bottom:4px double black; vertical-align: midle; color: #000000;">
            <tr>
                <td width="20%" align="center"><img style="height:110px;top:5px;" src="'.Yii::getPathOfAlias('webroot.images') . '/tut.jpg'.'" /></td>
                <td width="80%" align="center">
                    <h2>KEMENTERIAN PENDIDIKAN DAN KEBUDAYAAN</h2>
                    <h3>DIREKTORAT JENDERAL</h3>
                    <h3>PENDIDIKAN ANAK USIA DINI, NONFORMAL DAN INFORMAL</h3>
                    <div>Jalan Jenderal Sudirman, Gedung E Lantai III Senayan Jakarta 10270</div>
                    <div>Telp. 5725061 Fax. 5725484 Tromol Pos : 1303 Kode Pos 10013</div>
                </td>
            </tr>  
            <tr><td></td><td></td></tr>
            </table>
            </div>
            ';
        $mpdf->SetHtmlHeader($pdfheader);
        $mpdf->justifyB4br = true;
        $mpdf->WriteHTML($this->renderPartial("view", array('model'=>$model), true));
        $mpdf->Output();
    }


    public function actionImtapdf($id)
    {
        $model=$this->loadImtaModel($id);
        $mpdf = Yii::app()->ePdf->mpdf();//HTML2PDF
        $pdfheader = '
            <div style="padding-top:0px;">
            <table width="100%" style="border-bottom:4px double black; vertical-align: midle; color: #000000;">
            <tr>
                <td width="20%" align="center"><img style="height:110px;top:5px;" src="'.Yii::getPathOfAlias('webroot.images') . '/tut.jpg'.'" /></td>
                <td width="80%" align="center">
                    <h2>KEMENTERIAN PENDIDIKAN DAN KEBUDAYAAN</h2>
                    <h3>DIREKTORAT JENDERAL PENDIDIKAN ANAK USIA DINI</h3>
                    <h3>DAN PENDIDIKAN MASYARAKAT</h3>
                    <div>Jalan Jenderal Sudirman, Gedung E Lantai III Senayan Jakarta 10270</div>
                    <div>Telp. 5725061,Tromol Pos : 1303 Kode Pos 10013,Fax. 5725484</div>
                </td>
            </tr>  
            <tr><td></td><td></td></tr>
            </table>
            </div>
            ';
        $mpdf->SetHtmlHeader($pdfheader);
        $mpdf->justifyB4br = true;
        $mpdf->WriteHTML($this->renderPartial("viewimta", array('model'=>$model), true));
        $mpdf->Output();
    }
    
    public function actionPaudpdf($id)
    {
        $model=$this->loadPaudmodel($id);
        $mpdf = Yii::app()->ePdf->mpdf();//HTML2PDF
        $pdfheader = '
            <div style="padding-top:0px;">
            <table width="100%" style="border-bottom:4px double black; vertical-align: midle; color: #000000;">
            <tr>
                <td width="20%" align="center"><img height="110" src="'.Yii::getPathOfAlias('webroot.images') . '/tut.jpg'.'" /></td>
                <td width="80%" align="center">
                    <h2>KEMENTERIAN PENDIDIKAN DAN KEBUDAYAAN</h2>
                    <h3>DIREKTORAT JENDERAL</h3>
                    <h3>PENDIDIKAN ANAK USIA DINI, NONFORMAL DAN INFORMAL</h3>
                    <div>Jalan Jenderal Sudirman, Gedung E Lantai III Senayan Jakarta 10270</div>
                    <div>Telp. 5725061 Fax. 5725484 Tromol Pos : 1303 Kode Pos 10013</div>
                </td>
            </tr>
            <tr><td></td><td></td></tr>
            </table>
            </div>
            ';
        $mpdf->SetHtmlHeader($pdfheader);
        $mpdf->justifyB4br = true;
        $mpdf->WriteHTML($this->renderPartial("viewpaud", array('model'=>$model), true));
        $mpdf->Output();
    }
    
    public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}
    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer the ID of the model to be loaded
     */
    public function loadModel($id)
    {
            $model=Kursus::model()->findByPk($id);
            if($model===null)
                    throw new CHttpException(404,'The requested page does not exist.');
            return $model;
    }
    
    public function loadPaudmodel($id)
    {
            $model=Paud::model()->findByPk($id);
            if($model===null)
                    throw new CHttpException(404,'The requested page does not exist.');
            return $model;
    }

    public function loadImtamodel($id)
    {
            $model=Imta::model()->findByPk($id);
            if($model===null)
                    throw new CHttpException(404,'The requested page does not exist.');
            return $model;
    }


}
?>