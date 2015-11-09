<?php

/**
 * This is the model class for table "ib_imta".
 *
 * The followings are the available columns in table 'ib_imta':
 * @property integer $ib_imta_id
 * @property integer $user_id
 * @property string $ib_imta_peserta_name
 * @property string $ib_imta_nilek
 * @property integer $ib_imta_peserta_jk
 * @property string $ib_imta_peserta_tmplahir
 * @property string $ib_imta_peserta_tgllahir
 * @property integer $ib_imta_peserta_negara
 * @property string $ib_imta_peserta_pasport
 * @property string $ib_imta_peserta_pasport_start
 * @property string $ib_imta_peserta_pasport_exp
 * @property string $ib_imta_peserta_alamat_ln
 * @property string $ib_imta_peserta_alamat_id
 * @property integer $ib_imta_peserta_prop_id
 * @property integer $ib_imta_peserta_kabkot_id
 * @property string $ib_imta_peserta_pendidikan
 * @property string $ib_imta_peserta_jurusanpendidikan
 * @property string $ib_imta_lbg_name
 * @property string $ib_imta_lbg_alamat
 * @property integer $ib_imta_lbg_prop_id
 * @property integer $ib_imta_lbg_kabkot_id
 * @property integer $ib_imta_lbg_kodepos
 * @property string $ib_imta_lbg_tlp
 * @property string $ib_imta_lbg_fax
 * @property integer $ib_imta_lbg_jenislembaga
 * @property string $ib_imta_lbg_ijin_oleh
 * @property string $ib_imta_lbg_ijin_oleh_name
 * @property string $ib_imta_lbg_ijin_tgl
 * @property string $ib_imta_lbg_ijin_no
 * @property string $ib_imta_lbg_ijin_start
 * @property string $ib_imta_lbg_ijin_exp
 * @property string $ib_imta_peserta_nosurat
 * @property string $ib_imta_peserta_tglsurat
 * @property integer $ib_imta_jenis_kursus
 * @property integer $ib_imta_jenis_imta
 * @property string $ib_imta_peserta_nosurat_rptka
 * @property string $ib_imta_peserta_tglsurat_rptka
 * @property integer $ib_imta_jumlah_rptka
 * @property integer $ib_imta_jenisjabatan_ptka
 * @property string $ib_imta_kadaluarsa_rptka 
 * @property string $ib_imta_create_at
 * @property string $ib_imta_update_at
 * @property integer $ib_imta_update_by
 * @property integer $ib_imta_status
 * @property string $ib_imta_sekarang
 * @property string $ib_imta_jatuh_tempo 
 * @property string $status_perpanjangan
 */





class Imta extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Kursus the static model class
	 */





public function getib_imta_sekarang()
{
  return date('Y-m-d',strtotime("+30 days"));
}


	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ib_imta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
	//		array('ib_imta_status, ib_imta_peserta_name','readOnly', 'on'=>'update'),
			array('ib_imta_status, ib_imta_peserta_name,ib_imta_nilek, ib_imta_peserta_jk, ib_imta_peserta_tmplahir, ib_imta_peserta_tgllahir, ib_imta_peserta_negara, ib_imta_peserta_pasport, ib_imta_peserta_pasport_start, ib_imta_peserta_pasport_exp, ib_imta_peserta_alamat_ln, ib_imta_peserta_alamat_id, ib_imta_peserta_prop_id, ib_imta_peserta_kabkot_id, ib_imta_lbg_name, ib_imta_lbg_alamat,ib_imta_jenisjabatan_ptka, ib_imta_lbg_prop_id, ib_imta_lbg_kabkot_id, ib_imta_kadaluarsa_rptka,ib_imta_lbg_kodepos, ib_imta_lbg_tlp, ib_imta_lbg_jenislembaga, ib_imta_lbg_ijin_oleh,ib_imta_lbg_ijin_oleh_name,ib_imta_lbg_ijin_no, ib_imta_lbg_ijin_tgl, ib_imta_lbg_ijin_start, ib_imta_lbg_ijin_exp, ib_imta_peserta_nosurat, ib_imta_jenis_imta, ib_imta_peserta_nosurat_rptka, ib_imta_peserta_pendidikan,ib_imta_peserta_jurusanpendidikan,ib_imta_peserta_nosurat,ib_imta_peserta_tglsurat, ib_imta_jenis_kursus,ib_imta_status,ib_imta_peserta_tglsurat_rptka,ib_imta_jumlah_rptka,status_perpanjangan', 'required'),
			array('user_id, ib_imta_peserta_jk, ib_imta_peserta_negara, ib_imta_nilek,ib_imta_peserta_prop_id, ib_imta_peserta_kabkot_id, ib_imta_lbg_prop_id, ib_imta_lbg_kabkot_id, ib_imta_lbg_kodepos, ib_imta_jenis_kursus,ib_imta_jumlah_rptka,ib_imta_update_by', 'numerical', 'integerOnly'=>true),
			array('ib_imta_peserta_name,ib_imta_nilek, ib_imta_lbg_name, ib_imta_peserta_nosurat, ib_imta_peserta_nosurat_rptka,ib_imta_peserta_jurusanpendidikan,ib_imta_jumlah_rptka,ib_imta_jatuh_tempo,ib_imta_peserta_tglsurat_rptka,ib_imta_kadaluarsa_rptka, ib_imta_jenisjabatan_ptka,ib_imta_peserta_pendidikan', 'length', 'max'=>200),
			array('ib_imta_peserta_tmplahir,ib_imta_nilek, ib_imta_peserta_pasport', 'length', 'max'=>50),
			array('ib_imta_lbg_alamat', 'length', 'max'=>300),
			array('ib_imta_lbg_tlp, ib_imta_lbg_fax', 'length', 'max'=>15),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ib_imta_id, user_id, ib_imta_peserta_name, ib_imta_nilek,ib_imta_peserta_jk, ib_imta_peserta_tmplahir, ib_imta_peserta_tgllahir, ib_imta_peserta_negara, ib_imta_peserta_pasport, ib_imta_peserta_pasport_start, ib_imta_peserta_pasport_exp, ib_imta_jenisjabatan_ptka,ib_imta_peserta_alamat_ln, ib_imta_peserta_alamat_id,ib_imta_kadaluarsa_rptka, ib_imta_peserta_prop_id, ib_imta_peserta_kabkot_id, ib_imta_lbg_name, ib_imta_lbg_alamat, ib_imta_lbg_prop_id, ib_imta_lbg_kabkot_id, ib_imta_lbg_kodepos, ib_imta_lbg_tlp, ib_imta_lbg_fax, ib_imta_lbg_ijin_oleh,ib_imta_lbg_ijin_oleh_name,ib_imta_lbg_ijin_no, ib_imta_lbg_ijin_tgl, ib_imta_lbg_ijin_start, ib_imta_lbg_ijin_exp , ib_imta_jenis_imta, ib_imta_peserta_nosurat_rptka, ib_imta_peserta_pendidikan,ib_imta_peserta_jurusanpendidikan,ib_imta_peserta_tglsurat_rptka,ib_imta_peserta_nosurat,ib_imta_peserta_tglsurat, ib_imta_jenis_kursus, ib_imta_create_at, ib_imta_update_at,ib_imta_jumlah_rptka,ib_imta_jatuh_tempo,status_perpanjangan,ib_imta_update_by', 'safe', 'on'=>'search'),
           array('ib_imta_id, user_id, ib_imta_peserta_name, ib_imta_nilek,ib_imta_peserta_jk, ib_imta_peserta_tmplahir, ib_imta_peserta_tgllahir, ib_imta_peserta_negara, ib_imta_peserta_pasport, ib_imta_peserta_pasport_start, ib_imta_peserta_pasport_exp, ib_imta_jenisjabatan_ptka,ib_imta_peserta_alamat_ln, ib_imta_peserta_alamat_id,ib_imta_kadaluarsa_rptka,ib_imta_peserta_prop_id, ib_imta_peserta_kabkot_id, ib_imta_lbg_name, ib_imta_lbg_alamat, ib_imta_lbg_prop_id, ib_imta_lbg_kabkot_id, ib_imta_lbg_kodepos, ib_imta_lbg_tlp, ib_imta_lbg_fax, ib_imta_lbg_ijin_oleh,ib_imta_lbg_ijin_oleh_name,ib_imta_lbg_ijin_no, ib_imta_lbg_ijin_tgl, ib_imta_lbg_ijin_start, ib_imta_lbg_ijin_exp, ib_imta_jenis_imta, ib_imta_peserta_nosurat_rptka, ib_imta_peserta_pendidikan,ib_imta_peserta_jurusanpendidikan,ib_imta_peserta_tglsurat_rptka,ib_imta_peserta_nosurat,ib_imta_peserta_tglsurat, ib_imta_jenis_kursus, ib_imta_create_at, ib_imta_update_at, ib_imta_jumlah_rptka,ib_imta_jatuh_tempo,status_perpanjangan,ib_imta_update_by', 'safe', 'on'=>'update'),
           
		);
	}

	public function constraint($attributes,$params)
	{
	  if($this->ib_imta_status){
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
			'imtasuser'=>array(self::BELONGS_TO,'User','user_id'),
			'imtapesertapropinsi'=>array(self::BELONGS_TO,'Propinsi','ib_imta_peserta_prop_id'),
			'imtapesertanegara'=>array(self::BELONGS_TO,'Negara','ib_imta_peserta_negara'),
			'imtapesertakabkot'=>array(self::BELONGS_TO,'Kabkot','ib_imta_peserta_kabkot_id'),
            'imtapesertaprop'=>array(self::BELONGS_TO,'Propinsi','ib_imta_peserta_prop_id'),
			'imtalbgpropinsi'=>array(self::BELONGS_TO,'Propinsi','ib_imta_lbg_prop_id'),
			'imtalbgkabkot'=>array(self::BELONGS_TO,'Kabkot','ib_imta_lbg_kabkot_id'),
			'imtastatus'=>array(self::BELONGS_TO,'Status','ib_imta_status'),
			'imtajeniskelamin'=>array(self::BELONGS_TO,'Jeniskelamin','ib_imta_peserta_jk'),
			'imtajeniskursus'=>array(self::BELONGS_TO,'Jeniskursus','ib_imta_jenis_kursus'),
			'imtajenislembaga'=>array(self::BELONGS_TO,'Jenislembaga','ib_imta_lbg_jenislembaga'),
			'imtajenisimta'=>array(self::BELONGS_TO,'Jenisimta','ib_imta_jenis_imta'),
			'imtaupload'=>array(self::HAS_ONE,'Imtaupload','imta_id'),
            'imtajenisjabatanptka' => array(self::BELONGS_TO, 'Jenisjabatanrptka', 'ib_imta_jenisjabatan_ptka'),
            'imtaverifikasi' => array(self::HAS_ONE, 'Imtaverifikasi', 'ib_imta_id'),
           
      
            
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ib_imta_id' => 'No. Pendaftaran',
			'user_id' => 'User',
			'ib_imta_peserta_name' => 'Nama Lengkap',
			'ib_imta_nilek' => 'NILEK / NPSN',
			'ib_imta_peserta_jk' => 'Jenis Kelamin',
			'ib_imta_peserta_tmplahir' => 'Tempat Lahir',
			'ib_imta_peserta_tgllahir' => 'Tanggal Lahir',
			'ib_imta_peserta_negara' => 'Kewarganegaraan',
			'ib_imta_peserta_pasport' => 'No. Paspor',
			'ib_imta_peserta_pasport_start' => 'Mulai Berlaku Pasport',
			'ib_imta_peserta_pasport_exp' => 'Kadaluarsa Paspor',
			'ib_imta_peserta_alamat_ln' => 'Alamat di Luar Negeri',
			'ib_imta_peserta_alamat_id' => 'Alamat di Indonesia',
			'ib_imta_peserta_pendidikan' => 'Kualifikasi pendidikan',
			'ib_imta_peserta_jurusanpendidikan' => 'Jurusan pendidikan',
			'ib_imta_peserta_prop_id' => 'Propinsi',
			'ib_imta_peserta_kabkot_id' => 'Kabupaten/Kota',
			'ib_imta_lbg_name' => 'Nama Lembaga',
			'ib_imta_lbg_alamat' => 'Alamat',
			'ib_imta_lbg_prop_id' => 'Propinsi',
			'ib_imta_lbg_kabkot_id' => 'Kabupaten/Kota',
			'ib_imta_lbg_kodepos' => 'Kodepos',
			'ib_imta_lbg_tlp' => 'Tlp',
			'ib_imta_lbg_fax' => 'Fax',
			'ib_imta_lbg_jenislembaga'=> 'Jenis Lembaga',
			'ib_imta_lbg_ijin_oleh' => 'Jabatan Pemberi Izin Operasional',
            'ib_imta_lbg_ijin_oleh_name'=>'Nama Pemberi Izin Operasional',
            'ib_imta_lbg_ijin_no'=>'Nomor Izin Op.',
			'ib_imta_lbg_ijin_tgl' => 'Tanggal Ijin Op.',
			'ib_imta_lbg_ijin_start' => 'Mulai Berlaku Ijin Op.',
			'ib_imta_lbg_ijin_exp' => 'Kadaluarsa Ijin Op.',
			'ib_imta_peserta_nosurat' => 'Nomor Surat Pengajuan',
            'ib_imta_peserta_tglsurat' => 'Tanggal Surat Pengajuan',
			'ib_imta_jenis_kursus' => 'Jenis Kursus',
			'ib_imta_jenis_imta' => 'Jenis Pengajuan',
			'ib_imta_peserta_nosurat_rptka' => 'Nomor surat RPTKA',
			'ib_imta_peserta_tglsurat_rptka' => 'tanggal surat RPTKA',
			'ib_imta_jumlah_rptka' => 'Jumlah RPTKA',
			'ib_imta_jenisjabatan_ptka' => 'Jenis Jabatan RPTKA',
			'ib_imta_kadaluarsa_rptka' => 'Kadaluarsa RPTKA',			
			'ib_imta_create_at' => 'Ib IMTA Create At',
			'ib_imta_update_at' => 'Ib IMTA Update At',
			'ib_imta_update_by' => 'Ib IMTA Update By',
			'ib_imta_status' => 'Status',
			'ib_imta_jatuh_tempo' => 'Tanggal Jatuh Tempo',
			'ib_imta_totalperpanjangan' =>'Total Perpanjangan',
			'status_perpanjangan' =>'Status Perpanjangan',
			
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

		$criteria->compare('ib_imta_id',$this->ib_imta_id);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('ib_imta_peserta_name',$this->ib_imta_peserta_name,true);
		$criteria->compare('ib_imta_nilek',$this->ib_imta_peserta_name,true);
		$criteria->compare('ib_imta_peserta_jk',$this->ib_imta_peserta_jk);
		$criteria->compare('ib_imta_peserta_tmplahir',$this->ib_imta_peserta_tmplahir,true);
		$criteria->compare('ib_imta_peserta_tgllahir',$this->ib_imta_peserta_tgllahir,true);
		$criteria->compare('ib_imta_peserta_negara',$this->ib_imta_peserta_negara);
		$criteria->compare('ib_imta_peserta_pasport',$this->ib_imta_peserta_pasport,true);
		$criteria->compare('ib_imta_peserta_pasport_start',$this->ib_imta_peserta_pasport_start,true);
		$criteria->compare('ib_imta_peserta_pasport_exp',$this->ib_imta_peserta_pasport_exp,true);
		$criteria->compare('ib_imta_peserta_alamat_ln',$this->ib_imta_peserta_alamat_ln,true);
		$criteria->compare('ib_imta_peserta_alamat_id',$this->ib_imta_peserta_alamat_id,true);
		$criteria->compare('ib_imta_peserta_pendidikan',$this->ib_imta_peserta_pendidikan,true);
		$criteria->compare('ib_imta_peserta_jurusanpendidikan',$this->ib_imta_peserta_jurusanpendidikan,true);
		$criteria->compare('ib_imta_peserta_prop_id',$this->ib_imta_peserta_prop_id);
		$criteria->compare('ib_imta_peserta_kabkot_id',$this->ib_imta_peserta_kabkot_id);
		$criteria->compare('ib_imta_lbg_name',$this->ib_imta_lbg_name,true);
		$criteria->compare('ib_imta_lbg_alamat',$this->ib_imta_lbg_alamat,true);
		$criteria->compare('ib_imta_lbg_prop_id',$this->ib_imta_lbg_prop_id);
		$criteria->compare('ib_imta_lbg_kabkot_id',$this->ib_imta_lbg_kabkot_id);
		$criteria->compare('ib_imta_lbg_kodepos',$this->ib_imta_lbg_kodepos);
		$criteria->compare('ib_imta_lbg_tlp',$this->ib_imta_lbg_tlp,true);
		$criteria->compare('ib_imta_lbg_fax',$this->ib_imta_lbg_fax,true);
		$criteria->compare('ib_imta_lbg_ijin_oleh',$this->ib_imta_lbg_ijin_oleh,true);
        $criteria->compare('ib_imta_lbg_ijin_oleh_name',$this->ib_imta_lbg_ijin_oleh_name,true);
        $criteria->compare('ib_imta_lbg_ijin_no',$this->ib_imta_lbg_ijin_no,true);
		$criteria->compare('ib_imta_lbg_ijin_tgl',$this->ib_imta_lbg_ijin_tgl,true);
		$criteria->compare('ib_imta_lbg_ijin_start',$this->ib_imta_lbg_ijin_start,true);
		$criteria->compare('ib_imta_lbg_ijin_exp',$this->ib_imta_lbg_ijin_exp,true);
        $criteria->compare('ib_imta_peserta_nosurat',$this->ib_imta_peserta_nosurat,true);
        $criteria->compare('ib_imta_peserta_tglsurat',$this->ib_imta_peserta_tglsurat,true);
		$criteria->compare('ib_imta_jenis_kursus',$this->ib_imta_jenis_kursus,true);
		$criteria->compare('ib_imta_jenis_imta',$this->ib_imta_jenis_imta,true);
		$criteria->compare('ib_imta_peserta_nosurat_rptka',$this->ib_imta_peserta_nosurat_rptka,true);
		$criteria->compare('ib_imta_peserta_pendidikan',$this->ib_imta_peserta_pendidikan,true);
		$criteria->compare('ib_imta_jumlah_rptka',$this->ib_imta_jumlah_rptka);
		$criteria->compare('ib_imta_jenisjabatan_ptka',$this->ib_imta_jenisjabatan_ptka);
		$criteria->compare('ib_imta_kadaluarsa_rptka',$this->ib_imta_kadaluarsa_rptka);
		$criteria->compare('ib_imta_create_at',$this->ib_imta_create_at,true);
		$criteria->compare('ib_imta_update_at',$this->ib_imta_update_at,true);
		$criteria->compare('ib_imta_update_by',$this->ib_imta_update_by);
		$criteria->compare('ib_imta_update_by',$this->ib_imta_update_by);
		$criteria->compare('ib_imta_status',$this->ib_imta_status);
		$criteria->compare('ib_imta_jatuh_tempo',$this->ib_imta_jatuh_tempo);
		$criteria->compare('status_perpanjangan',$this->status_perpanjangan);
		


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
		if(empty($this->ib_imta_create_at)) { // Set to current timedate:
			$this->ib_imta_create_at = new CDbExpression('NOW()');
		
		}
		if(empty($this->ib_imta_status)) { // Set to current user:
			$this->ib_imta_status = 7;
		}
		$this->ib_imta_update_at = new CDbExpression('NOW()');
		$this->ib_imta_update_by = Yii::app()->user->id;
		return parent::beforeValidate();
	}	
	
	protected function afterFind()
	{
		if(Yii::app()->user->id!=1){
			if(!(Yii::app()->user->id==$this->user_id))
			throw new CHttpException(404, 'You have no authorization to access this page.');
		}
	}


    public function afterSave() {
    if ($this->ib_imta_status==67 && $this->status_perpanjangan=='N')
   
   Imta::model()->updateByPk($this->ib_imta_id,array('ib_imta_jatuh_tempo'=>new CDbExpression('NOW() + INTERVAL 1 YEAR')));
 
    return parent::afterSave();
   }


}