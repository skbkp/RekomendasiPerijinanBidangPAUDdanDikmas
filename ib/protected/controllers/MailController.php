<?php
class MailController extends CController{
    
    public $layout = '//layouts/bootstrap';
    
    public function actionIndex(){
//    	$email=Yii::app()->phpmailer;
//    	$email->IsSMTP();
//    	$email->SetFrom('paudni.ks@gmail.com', 'Sub. Bagian Kerjasama, Bagian Hukum dan Kepegawaian Ditjen PAUDNI');
//    	$email->Subject = 'Uji Coba PHPMailer dengan SMTP';
//    	$email->MsgHTML('<h1>It Works Very Well</h1>');
//    	$email->AddAddress('harismoaji@yahoo.com','Harismo Aji');
//    	if(!$email->Send()) {
//		echo "Mailer Error: " . $email->ErrorInfo;
//		} else {
//		echo "Message sent!";
//		}
        echo 'Research Done';
    }
    
}
?>