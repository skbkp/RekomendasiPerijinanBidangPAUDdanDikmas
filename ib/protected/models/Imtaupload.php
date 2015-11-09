<?php

/**
 * This is the model class for table "ib_imta_upload".
 *
 * The followings are the available columns in table 'ib_imta_upload':
 * @property integer $upload_id
 * @property integer $imta_id
 * @property integer $user_id
 * @property string $upload_at
 * @property string $update_at
 * @property string $file_surat
 * @property string $file_kuasa
 * @property string $file_nilek
 * @property string $file_kurikulum
 * @property string $file_aktanotaris
 * @property string $file_pengesahankumham
 * @property string $file_domisili
 * @property string $file_skrptka
 * @property string $file_ijinoperasional
 * @property string $file_rekapsiswadanptk
 * @property string $file_rekomendasidinas
 * @property string $file_alasan
 * @property string $file_jaminan
 * @property string $file_paspor
 * @property string $file_cv
 * @property string $file_foto
 * @property string $file_ijazah
 * @property string $file_sehat
 * @property string $file_pernyataan
 * @property integer $update_by
 */
class Imtaupload extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return imtaupload the static model class
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
		return 'ib_imta_upload';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('imta_id', 'required'),
			array('imta_id, user_id', 'numerical', 'integerOnly'=>true),
			array('file_surat, file_kuasa, file_nilek, file_kurikulum, file_aktanotaris, 
				file_pengesahankumham, file_domisili,file_skrptka,file_ijinoperasional,
				file_rekapsiswadanptk,file_rekomendasidinas,
				file_alasan, file_jaminan, 
				file_paspor, file_cv, file_foto, file_ijazah, file_sehat, file_pernyataan', 
				'file', 'allowEmpty'=>false, 'maxSize'=>3145728, 'types'=>'pdf,jpg,jpeg', 
				'tooLarge'=>'Ukuran file tidak boleh lebih dari 3MB',
				'wrongType'=>'Format file harus PDF','on'=>'insert'),
				
			array('file_surat, file_kuasa, file_nilek, file_kurikulum, file_aktanotaris, 
				file_pengesahankumham, file_domisili,file_skrptka,file_ijinoperasional,
				file_rekapsiswadanptk,file_rekomendasidinas,
				file_alasan, 
				file_jaminan, file_paspor, file_cv, file_foto, file_ijazah, file_sehat, 
				file_pernyataan,file_stm,file_kitas,file_rekom,file_imtakemnaker,
				file_suratkontakkerja,file_hasilpenilaianijazah,file_laporankegiatanproses', 'file', 
				'allowEmpty'=>true, 'maxSize'=>3145728, 'types'=>'pdf,jpg,jpeg', 
				'tooLarge'=>'Ukuran file tidak boleh lebih dari 3MB',
				'wrongType'=>'Format file harus PDF','except'=>'insert'),
			array('file_foto', 'file', 'allowEmpty'=>false,'maxSize'=>1048576,
				'types'=>'jpg,jpeg,png','on'=>'insert'),
			array('file_foto', 'file', 'allowEmpty'=>true, 'maxSize'=>1048576,
				'types'=>'jpg,jpeg,png','except'=>'insert'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			//array('upload_id, imta_id, user_id, upload_at, update_at, file_surat, file_kuasa, file_nilek, file_kurikulum, file_aktanotaris, file_pengesahankumham, file_domisili, file_alasan, file_jaminan, file_paspor, file_cv, file_foto, file_ijazah, file_sehat, file_pernyataan', 'safe', 'on'=>'search'),
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
			'uploadimta'=>array(self::HAS_ONE,'Imta','ib_imta_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'upload_id' => 'Upload',
			'imta_id' => 'Nama Pemohon',
			'user_id' => 'User',
			'upload_at' => 'Upload At',
			'update_at' => 'Update At',
			'update_by'=>'Update By',
			'file_surat' => 'Surat Permohonan',
			'file_kuasa' => 'Surat Kuasa',
			'file_nilek' => 'Nilek',
			'file_kurikulum' => 'Kurikulum',
			'file_aktanotaris' => 'Akta Notaris',
			'file_pengesahankumham' => 'Pengesahan Kumham',
			'file_domisili' => 'Keterangan Domisili',
			'file_skrptka' => 'SK RPTKA',
			'file_ijinoperasional' => 'Izin operasional',
			'file_rekapsiswadanptk' => 'Berkas rekap siswa & PTK',
			'file_rekomendasidinas' => 'Rekomendasi Dinas',
			'file_alasan' => 'Alasan Belajar',
			'file_jaminan' => 'Surat Jaminan',
			'file_paspor' => 'Paspor',
			'file_cv' => 'Riwayat Hidup',
			'file_foto' => 'Foto',
			'file_ijazah' => 'Ijazah',
			'file_sehat' => 'Keterangan Sehat',
			'file_pernyataan' => 'Surat Pernyataan',
			'file_stm' => 'Surat Keterangan Tanda Melapor',
			'file_kitas' => 'Kartu Izin Tinggal Terbatas',
			'file_rekom' => 'Rekom IMTA',
			'file_imtakemnaker' => 'IMTA dari Kemnaker',
			'file_suratkontakkerja' => 'Surat Kontak Kerja',
			'file_hasilpenilaianijazah' => 'Hasil Penilaian Ijazah',
			'file_laporankegiatanproses' => 'Laporan kegiatan proses pengajaran',
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
		$criteria->compare('imta_id',$this->imta_id);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('upload_at',$this->upload_at,true);
		$criteria->compare('update_at',$this->update_at,true);
		$criteria->compare('update_by',$this->update_by,true);
		$criteria->compare('file_surat',$this->file_surat,true);
		$criteria->compare('file_kuasa',$this->file_kuasa,true);
		$criteria->compare('file_nilek',$this->file_nilek,true);
		$criteria->compare('file_kurikulum',$this->file_kurikulum,true);
		$criteria->compare('file_aktanotaris',$this->file_aktanotaris,true);
		$criteria->compare('file_pengesahankumham',$this->file_pengesahankumham,true);
		$criteria->compare('file_domisili',$this->file_domisili,true);
        $criteria->compare('file_skrptka',$this->file_skrptka,true);
        $criteria->compare('file_ijinoperasional',$this->file_ijinoperasional,true);
        $criteria->compare('file_rekapsiswadanptk',$this->file_rekapsiswadanptk,true);
        $criteria->compare('file_rekomendasidinas',$this->file_rekomendasidinas,true);
		$criteria->compare('file_alasan',$this->file_alasan,true);
		$criteria->compare('file_jaminan',$this->file_jaminan,true);
		$criteria->compare('file_paspor',$this->file_paspor,true);
		$criteria->compare('file_cv',$this->file_cv,true);
		$criteria->compare('file_foto',$this->file_foto,true);
		$criteria->compare('file_ijazah',$this->file_ijazah,true);
		$criteria->compare('file_sehat',$this->file_sehat,true);
		$criteria->compare('file_pernyataan',$this->file_pernyataan,true);
		$criteria->compare('file_stm',$this->file_stm,true);
		$criteria->compare('file_kitas',$this->file_kitas,true);
		$criteria->compare('file_rekom',$this->file_rekom,true);
		$criteria->compare('file_imtakemnaker',$this->file_imtakemnaker,true);
		$criteria->compare('file_suratkontakkerja',$this->file_suratkontakkerja,true);
		$criteria->compare('file_hasilpenilaianijazah',$this->file_hasilpenilaianijazah,true);
		$criteria->compare('file_laporankegiatanproses',$this->file_laporankegiatanproses,true);

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
            Imta::model()->updateByPk($this->imta_id,array('ib_imta_status'=>27));
            
            if(!(Imtaverifikasi::model()->findAll("ib_imta_id=$this->imta_id"))){
                $Imtaverifikasi=new Imtaverifikasi;
                //$Imtaverifikasi->upload_id=NULL;
                $Imtaverifikasi->ib_imta_id=$this->imta_id;
                $Imtaverifikasi->created_by=Yii::app()->user->id;
                $Imtaverifikasi->update_by=Yii::app()->user->id;
                if(empty($Imtaverifikasi->create_at)) { // Set to current timedate:
			$Imtaverifikasi->create_at = new CDbExpression('NOW()');
		}
		$Imtaverifikasi->update_at = new CDbExpression('NOW()');
                $Imtaverifikasi->global_reason = 'Tulis keterangan jika dokumen bermasalah';
                $Imtaverifikasi->save();
            }
            return parent::afterSave();
        }
}