<?php

/**
 * This is the model class for table "ib_kursus".
 *
 * The followings are the available columns in table 'ib_kursus':
 * @property integer $ib_kursus_id
 * @property integer $user_id
 * @property string $ib_kursus_peserta_name
 * @property integer $ib_kursus_peserta_jk
 * @property string $ib_kursus_peserta_tmplahir
 * @property string $ib_kursus_peserta_tgllahir
 * @property integer $ib_kursus_peserta_negara
 * @property string $ib_kursus_peserta_pasport
 * @property string $ib_kursus_peserta_pasport_start
 * @property string $ib_kursus_peserta_pasport_exp
 * @property string $ib_kursus_peserta_alamat_ln
 * @property string $ib_kursus_peserta_alamat_id
 * @property integer $ib_kursus_peserta_prop_id
 * @property integer $ib_kursus_peserta_kabkot_id
 * @property string $ib_kursus_lbg_name
 * @property string $ib_kursus_lbg_alamat
 * @property integer $ib_kursus_lbg_prop_id
 * @property integer $ib_kursus_lbg_kabkot_id
 * @property integer $ib_kursus_lbg_kodepos
 * @property string $ib_kursus_lbg_tlp
 * @property string $ib_kursus_lbg_fax
 * @property integer $ib_kursus_lbg_pemodal
 * @property string $ib_kursus_lbg_ijin_oleh
 * @property string $ib_kursus_lbg_ijin_oleh_name
 * @property string $ib_kursus_lbg_ijin_tgl
 * @property string $ib_kursus_lbg_ijin_no
 * @property string $ib_kursus_lbg_ijin_start
 * @property string $ib_kursus_lbg_ijin_exp
 * @property string $ib_kursus_peserta_biaya
 * @property string $ib_kursus_peserta_alasan
 * @property string $ib_kursus_peserta_jaminan
 * @property string $ib_kursus_peserta_pendidikan
 * @property string $ib_kursus_peserta_nosurat
 * @property string $ib_kursus_peserta_tglsurat
 * @property integer $ib_jeniskursus
 * @property string $ib_kursus_create_at
 * @property string $ib_kursus_update_at
 * @property integer $ib_kursus_update_by
 * @property integer $ib_kursus_status
 */
class Daftarkursus extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Kursus the static model class
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
		return 'ib_kursus';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
	//		array('ib_kursus_status, ib_kursus_peserta_name','readOnly', 'on'=>'update'),
			array('ib_kursus_status, ib_kursus_peserta_name, ib_kursus_peserta_jk, ib_kursus_peserta_tmplahir, ib_kursus_peserta_tgllahir, ib_kursus_peserta_negara, ib_kursus_peserta_pasport, ib_kursus_peserta_pasport_start, ib_kursus_peserta_pasport_exp, ib_kursus_peserta_alamat_ln, ib_kursus_peserta_alamat_id, ib_kursus_peserta_prop_id, ib_kursus_peserta_kabkot_id, ib_kursus_lbg_name, ib_kursus_lbg_alamat, ib_kursus_lbg_prop_id, ib_kursus_lbg_kabkot_id, ib_kursus_lbg_kodepos, ib_kursus_lbg_tlp, ib_kursus_lbg_pemodal, ib_kursus_lbg_ijin_oleh,ib_kursus_lbg_ijin_oleh_name,ib_kursus_lbg_ijin_no, ib_kursus_lbg_ijin_tgl, ib_kursus_lbg_ijin_start, ib_kursus_lbg_ijin_exp, ib_kursus_peserta_biaya, ib_kursus_peserta_alasan, ib_kursus_peserta_jaminan, ib_kursus_peserta_pendidikan,ib_kursus_peserta_nosurat,ib_kursus_peserta_tglsurat, ib_jeniskursus,ib_kursus_status', 'required'),
			array('user_id, ib_kursus_peserta_jk, ib_kursus_peserta_negara, ib_kursus_peserta_prop_id, ib_kursus_peserta_kabkot_id, ib_kursus_lbg_prop_id, ib_kursus_lbg_kabkot_id, ib_kursus_lbg_kodepos, ib_jeniskursus, ib_kursus_update_by', 'numerical', 'integerOnly'=>true),
			array('ib_kursus_peserta_name, ib_kursus_lbg_name, ib_kursus_peserta_biaya, ib_kursus_peserta_jaminan, ib_kursus_peserta_pendidikan', 'length', 'max'=>200),
			array('ib_kursus_peserta_tmplahir, ib_kursus_peserta_pasport', 'length', 'max'=>50),
			array('ib_kursus_lbg_alamat', 'length', 'max'=>300),
			array('ib_kursus_lbg_tlp, ib_kursus_lbg_fax', 'length', 'max'=>15),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ib_kursus_id, user_id, ib_kursus_peserta_name, ib_kursus_peserta_jk, ib_kursus_peserta_tmplahir, ib_kursus_peserta_tgllahir, ib_kursus_peserta_negara, ib_kursus_peserta_pasport, ib_kursus_peserta_pasport_start, ib_kursus_peserta_pasport_exp, ib_kursus_peserta_alamat_ln, ib_kursus_peserta_alamat_id, ib_kursus_peserta_prop_id, ib_kursus_peserta_kabkot_id, ib_kursus_lbg_name, ib_kursus_lbg_alamat, ib_kursus_lbg_prop_id, ib_kursus_lbg_kabkot_id, ib_kursus_lbg_kodepos, ib_kursus_lbg_tlp, ib_kursus_lbg_fax, ib_kursus_lbg_ijin_oleh,ib_kursus_lbg_ijin_oleh_name,ib_kursus_lbg_ijin_no, ib_kursus_lbg_ijin_tgl, ib_kursus_lbg_ijin_start, ib_kursus_lbg_ijin_exp, ib_kursus_peserta_biaya, ib_kursus_peserta_alasan, ib_kursus_peserta_jaminan, ib_kursus_peserta_pendidikan,ib_kursus_peserta_nosurat,ib_kursus_peserta_tglsurat, ib_jeniskursus, ib_kursus_create_at, ib_kursus_update_at, ib_kursus_update_by', 'safe', 'on'=>'search'),
           array('ib_kursus_id, user_id, ib_kursus_peserta_name, ib_kursus_peserta_jk, ib_kursus_peserta_tmplahir, ib_kursus_peserta_tgllahir, ib_kursus_peserta_negara, ib_kursus_peserta_pasport, ib_kursus_peserta_pasport_start, ib_kursus_peserta_pasport_exp, ib_kursus_peserta_alamat_ln, ib_kursus_peserta_alamat_id, ib_kursus_peserta_prop_id, ib_kursus_peserta_kabkot_id, ib_kursus_lbg_name, ib_kursus_lbg_alamat, ib_kursus_lbg_prop_id, ib_kursus_lbg_kabkot_id, ib_kursus_lbg_kodepos, ib_kursus_lbg_tlp, ib_kursus_lbg_fax, ib_kursus_lbg_ijin_oleh,ib_kursus_lbg_ijin_oleh_name,ib_kursus_lbg_ijin_no, ib_kursus_lbg_ijin_tgl, ib_kursus_lbg_ijin_start, ib_kursus_lbg_ijin_exp, ib_kursus_peserta_biaya, ib_kursus_peserta_alasan, ib_kursus_peserta_jaminan, ib_kursus_peserta_pendidikan,ib_kursus_peserta_nosurat,ib_kursus_peserta_tglsurat, ib_jeniskursus, ib_kursus_create_at, ib_kursus_update_at, ib_kursus_update_by', 'safe', 'on'=>'update'),
		);
	}

	public function constraint($attributes,$params)
	{
	  if($this->ib_kursus_status){
		 return;
	  }  
	}
	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'kursususer'=>array(self::BELONGS_TO,'User','user_id'),
			'kursuspesertapropinsi'=>array(self::BELONGS_TO,'Propinsi','ib_kursus_peserta_prop_id'),
			'kursuspesertanegara'=>array(self::BELONGS_TO,'Negara','ib_kursus_peserta_negara'),
			'kursuspesertakabkot'=>array(self::BELONGS_TO,'Kabkot','ib_kursus_peserta_kabkot_id'),
            'kursuspesertaprop'=>array(self::BELONGS_TO,'Propinsi','ib_kursus_peserta_prop_id'),
			'kursuslbgpropinsi'=>array(self::BELONGS_TO,'Propinsi','ib_kursus_lbg_prop_id'),
			'kursuslbgkabkot'=>array(self::BELONGS_TO,'Kabkot','ib_kursus_lbg_kabkot_id'),
			'kursusstatus'=>array(self::BELONGS_TO,'Status','ib_kursus_status'),
			'kursusjeniskelamin'=>array(self::BELONGS_TO,'Jeniskelamin','ib_kursus_peserta_jk'),
			'kursusjeniskursus'=>array(self::BELONGS_TO,'Jeniskursus','ib_jeniskursus'),
			'kursus_pemodal'=>array(self::BELONGS_TO,'Pemodal','ib_kursus_lbg_pemodal'),
			'skursusupload'=>array(self::HAS_ONE,'Kursusupload','kursus_id'),
            'kursusverifikasi' => array(self::HAS_ONE, 'Kursusverifikasi', 'ib_kursus_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ib_kursus_id' => 'No. Pendaftaran',
			'user_id' => 'User',
			'ib_kursus_peserta_name' => 'Nama Lengkap',
			'ib_kursus_peserta_jk' => 'Jenis Kelamin',
			'ib_kursus_peserta_tmplahir' => 'Tempat Lahir',
			'ib_kursus_peserta_tgllahir' => 'Tanggal Lahir',
			'ib_kursus_peserta_negara' => 'Kewarganegaraan',
			'ib_kursus_peserta_pasport' => 'No. Paspor',
			'ib_kursus_peserta_pasport_start' => 'Mulai Berlaku Paspor',
			'ib_kursus_peserta_pasport_exp' => 'Kadaluarsa Paspor',
			'ib_kursus_peserta_alamat_ln' => 'Alamat di Luar Negeri',
			'ib_kursus_peserta_alamat_id' => 'Alamat di Indonesia',
			'ib_kursus_peserta_prop_id' => 'Propinsi',
			'ib_kursus_peserta_kabkot_id' => 'Kabupaten/Kota',
			'ib_kursus_lbg_name' => 'Nama Lembaga',
			'ib_kursus_lbg_alamat' => 'Alamat',
			'ib_kursus_lbg_prop_id' => 'Propinsi',
			'ib_kursus_lbg_kabkot_id' => 'Kabupaten/Kota',
			'ib_kursus_lbg_kodepos' => 'Kodepos',
			'ib_kursus_lbg_tlp' => 'Tlp',
			'ib_kursus_lbg_fax' => 'Fax',
			'ib_kursus_lbg_pemodal'=> 'Pemodalan',
			'ib_kursus_lbg_ijin_oleh' => 'Jabatan Pemberi Izin Operasional',
                        'ib_kursus_lbg_ijin_oleh_name'=>'Nama Pemberi Izin Operasional',
                        'ib_kursus_lbg_ijin_no'=>'Nomor Izin Op.',
			'ib_kursus_lbg_ijin_tgl' => 'Tanggal Ijin Op.',
			'ib_kursus_lbg_ijin_start' => 'Mulai Berlaku Ijin Op.',
			'ib_kursus_lbg_ijin_exp' => 'Kadaluarsa Ijin Op.',
			'ib_kursus_peserta_biaya' => 'Pembiayaan Kursus',
			'ib_kursus_peserta_alasan' => 'Alasan Mengikuti Kursus',
			'ib_kursus_peserta_jaminan' => 'Penjamin Selama di Indonesia',
			'ib_kursus_peserta_pendidikan' => 'Pendidikan Terakhir',
                        'ib_kursus_peserta_nosurat' => 'Nomor Surat Pengajuan',
                        'ib_kursus_peserta_tglsurat' => 'Tanggal Surat Pengajuan',
			'ib_jeniskursus' => 'Jenis Kursus',
			'ib_kursus_create_at' => 'Ib Kursus Create At',
			'ib_kursus_update_at' => 'Ib Kursus Update At',
			'ib_kursus_update_by' => 'Ib Kursus Update By',
			'ib_kursus_status' => 'Status',
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

		$criteria->compare('ib_kursus_id',$this->ib_kursus_id);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('ib_kursus_peserta_name',$this->ib_kursus_peserta_name,true);
		$criteria->compare('ib_kursus_peserta_jk',$this->ib_kursus_peserta_jk);
		$criteria->compare('ib_kursus_peserta_tmplahir',$this->ib_kursus_peserta_tmplahir,true);
		$criteria->compare('ib_kursus_peserta_tgllahir',$this->ib_kursus_peserta_tgllahir,true);
		$criteria->compare('ib_kursus_peserta_negara',$this->ib_kursus_peserta_negara);
		$criteria->compare('ib_kursus_peserta_pasport',$this->ib_kursus_peserta_pasport,true);
		$criteria->compare('ib_kursus_peserta_pasport_start',$this->ib_kursus_peserta_pasport_start,true);
		$criteria->compare('ib_kursus_peserta_pasport_exp',$this->ib_kursus_peserta_pasport_exp,true);
		$criteria->compare('ib_kursus_peserta_alamat_ln',$this->ib_kursus_peserta_alamat_ln,true);
		$criteria->compare('ib_kursus_peserta_alamat_id',$this->ib_kursus_peserta_alamat_id,true);
		$criteria->compare('ib_kursus_peserta_prop_id',$this->ib_kursus_peserta_prop_id);
		$criteria->compare('ib_kursus_peserta_kabkot_id',$this->ib_kursus_peserta_kabkot_id);
		$criteria->compare('ib_kursus_lbg_name',$this->ib_kursus_lbg_name,true);
		$criteria->compare('ib_kursus_lbg_alamat',$this->ib_kursus_lbg_alamat,true);
		$criteria->compare('ib_kursus_lbg_prop_id',$this->ib_kursus_lbg_prop_id);
		$criteria->compare('ib_kursus_lbg_kabkot_id',$this->ib_kursus_lbg_kabkot_id);
		$criteria->compare('ib_kursus_lbg_kodepos',$this->ib_kursus_lbg_kodepos);
		$criteria->compare('ib_kursus_lbg_tlp',$this->ib_kursus_lbg_tlp,true);
		$criteria->compare('ib_kursus_lbg_fax',$this->ib_kursus_lbg_fax,true);
		$criteria->compare('ib_kursus_lbg_ijin_oleh',$this->ib_kursus_lbg_ijin_oleh,true);
                $criteria->compare('ib_kursus_lbg_ijin_oleh_name',$this->ib_kursus_lbg_ijin_oleh_name,true);
                $criteria->compare('ib_kursus_lbg_ijin_no',$this->ib_kursus_lbg_ijin_no,true);
		$criteria->compare('ib_kursus_lbg_ijin_tgl',$this->ib_kursus_lbg_ijin_tgl,true);
		$criteria->compare('ib_kursus_lbg_ijin_start',$this->ib_kursus_lbg_ijin_start,true);
		$criteria->compare('ib_kursus_lbg_ijin_exp',$this->ib_kursus_lbg_ijin_exp,true);
		$criteria->compare('ib_kursus_peserta_biaya',$this->ib_kursus_peserta_biaya,true);
		$criteria->compare('ib_kursus_peserta_alasan',$this->ib_kursus_peserta_alasan,true);
		$criteria->compare('ib_kursus_peserta_jaminan',$this->ib_kursus_peserta_jaminan,true);
		$criteria->compare('ib_kursus_peserta_pendidikan',$this->ib_kursus_peserta_pendidikan,true);
                $criteria->compare('ib_kursus_peserta_nosurat',$this->ib_kursus_peserta_nosurat,true);
                $criteria->compare('ib_kursus_peserta_tglsurat',$this->ib_kursus_peserta_tglsurat,true);
		$criteria->compare('ib_jeniskursus',$this->ib_jeniskursus);
		$criteria->compare('ib_kursus_create_at',$this->ib_kursus_create_at,true);
		$criteria->compare('ib_kursus_update_at',$this->ib_kursus_update_at,true);
		$criteria->compare('ib_kursus_update_by',$this->ib_kursus_update_by);
		$criteria->compare('ib_kursus_update_by',$this->ib_kursus_update_by);
		$criteria->compare('ib_kursus_status',$this->ib_kursus_status);

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
		if(empty($this->ib_kursus_create_at)) { // Set to current timedate:
			$this->ib_kursus_create_at = new CDbExpression('NOW()');
		}
		if(empty($this->ib_kursus_status)) { // Set to current user:
			$this->ib_kursus_status = 7;
		}
		$this->ib_kursus_update_at = new CDbExpression('NOW()');
		$this->ib_kursus_update_by = Yii::app()->user->id;
		return parent::beforeValidate();
	}	
	

}