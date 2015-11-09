<?php

/**
 * This is the model class for table "ib_paud_upload".
 *
 * The followings are the available columns in table 'ib_paud_upload':
 * @property integer $upload_id
 * @property integer $paud_id
 * @property integer $user_id
 * @property string $upload_at
 * @property string $update_at
 * @property string $file_surat
 * @property string $file_kuasa
 * @property string $file_biaya
 * @property string $file_paspor_anak
 * @property string $file_aktalahir
 * @property string $file_paspor_ortu
 * @property string $file_kk
 * @property string $file_nikah
 * @property string $file_jaminan
 * @property string $file_domisili
 * @property integer $update_by
 */
 
class Paudupload extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Paudupload the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ib_paud_upload';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
                        array('paud_id', 'required'),
			array('paud_id, user_id', 'numerical', 'integerOnly'=>true),
			
			array('file_surat, file_kuasa, file_biaya, file_paspor_anak, file_aktalahir, file_paspor_ortu, file_kk, file_nikah, file_jaminan, file_domisili', 'file', 'allowEmpty'=>false,'maxSize'=>3145728,'types'=>'pdf,jpg,jpeg','tooLarge'=>'Ukuran file tidak boleh lebih dari 3MB','wrongType'=>'Format file harus PDF','on'=>'insert'),
            
			array('file_surat, file_kuasa, file_biaya, file_paspor_anak, file_aktalahir, file_paspor_ortu, file_kk, file_nikah, file_jaminan, file_domisili', 'file', 'allowEmpty'=>true,'maxSize'=>3145728,'types'=>'pdf,jpg,jpeg','tooLarge'=>'Ukuran file tidak boleh lebih dari 3MB','wrongType'=>'Format file harus PDF','except'=>'insert'),
			
			array('file_surat, file_kuasa, file_biaya, file_paspor_anak, file_aktalahir, file_paspor_ortu, file_kk, file_nikah, file_jaminan, file_domisili', 'length', 'max'=>200),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			//array('upload_id, paud_id, user_id, upload_at, update_at, file_surat, file_kuasa, file_biaya, file_paspor_anak, file_aktalahir, file_paspor_ortu, file_kk, file_nikah, file_jaminan, file_domisili', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	 
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'uploadpaud'=>array(self::HAS_ONE,'Paud','paud_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'upload_id' => 'Upload',
			'paud_id' => 'Nama Pemohon',
			'user_id' => 'User',
			'upload_at' => 'Upload At',
			'update_at' => 'Update At',
			'update_by' => 'Update By',
			'file_surat' => 'Surat Permohonan',
			'file_kuasa' => 'Surat Kuasa',
			'file_biaya' => 'Keterangan Biaya',
			'file_paspor_anak' => 'Paspor Anak',
			'file_aktalahir' => 'Akta Lahir Anak',
			'file_paspor_ortu' => 'Paspor Orang Tua',
			'file_kk' => 'Kartu Keluarga',
			'file_nikah' => 'Surat Nikah Orang Tua',
			'file_jaminan' => 'Surat Jaminan',
			'file_domisili' => 'Keterangan Domisili',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('upload_id',$this->upload_id);
		$criteria->compare('paud_id',$this->paud_id);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('upload_at',$this->upload_at,true);
		$criteria->compare('update_at',$this->update_at,true);
		$criteria->compare('update_by',$this->update_by,true);
		$criteria->compare('file_surat',$this->file_surat,true);
		$criteria->compare('file_kuasa',$this->file_kuasa,true);
		$criteria->compare('file_biaya',$this->file_biaya,true);
		$criteria->compare('file_paspor_anak',$this->file_paspor_anak,true);
		$criteria->compare('file_aktalahir',$this->file_aktalahir,true);
		$criteria->compare('file_paspor_ortu',$this->file_paspor_ortu,true);
		$criteria->compare('file_kk',$this->file_kk,true);
		$criteria->compare('file_nikah',$this->file_nikah,true);
		$criteria->compare('file_jaminan',$this->file_jaminan,true);
		$criteria->compare('file_domisili',$this->file_domisili,true);

		if(Yii::app()->user->id!=1){
			$criteria->condition='user_id='.Yii::app()->user->id;
		}


		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
	protected function beforeValidate() {
		if(empty($this->user_id)) { // Set to current user:
			$this->user_id = Yii::app()->user->id;
		}
		if(empty($this->upload_at)) { // Set to current timedate:
			$this->upload_at = new CDbExpression('NOW()');
		}
		$this->update_at = new CDbExpression('NOW()');
		$this->update_by = Yii::app()->user->id;
		return parent::beforeValidate();
	}
	
	protected function afterSave(){
		Paud::model()->updateByPk($this->paud_id,array('ib_paud_status'=>27));
		
		if(!(Paudverifikasi::model()->findAll("ib_paud_id=$this->paud_id"))){
			if(!(Paudverifikasi::model()->findAll("ib_paud_id=$this->paud_id"))){
			$Paudverifikasi=new Paudverifikasi;
			//$Paudverifikasi->upload_id=NULL;
			$Paudverifikasi->ib_paud_id=$this->paud_id;
			$Paudverifikasi->created_by=Yii::app()->user->id;
			$Paudverifikasi->update_by=Yii::app()->user->id;
			if(empty($Paudverifikasi->create_at)) { // Set to current timedate:
		$Paudverifikasi->create_at = new CDbExpression('NOW()');
	}
	$Paudverifikasi->update_at = new CDbExpression('NOW()');
			$Paudverifikasi->global_reason = 'Tulis keterangan jika dokumen bermasalah';
			$Paudverifikasi->save();
		}
			
		}
		return parent::afterSave();
	}
}