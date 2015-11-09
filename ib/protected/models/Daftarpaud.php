<?php

/**
 * This is the model class for table "ib_paud".
 *
 * The followings are the available columns in table 'ib_paud':
 * @property integer $ib_paud_id
 * @property integer $user_id
 * @property string $ib_paud_peserta_name
 * @property integer $ib_paud_peserta_jk
 * @property string $ib_paud_peserta_tmplahir
 * @property string $ib_paud_peserta_tgllahir
 * @property integer $ib_paud_peserta_negara
 * @property string $ib_paud_ayah_wn
 * @property string $ib_paud_ayah_pasport
 * @property string $ib_paud_ayah_pasport_start
 * @property string $ib_paud_ayah_pasport_exp
 * @property string $ib_paud_ayah_ktp
 * @property string $ib_paud_ayah_ktp_start
 * @property string $ib_paud_ayah_ktp_exp
 * @property string $ib_paud_ibu_wn
 * @property string $ib_paud_ibu_pasport
 * @property string $ib_paud_ibu_pasport_start
 * @property string $ib_paud_ibu_pasport_exp
 * @property string $ib_paud_ibu_ktp
 * @property string $ib_paud_ibu_ktp_start
 * @property string $ib_paud_ibu_ktp_exp
 * @property string $ib_paud_peserta_surat
 * @property string $ib_paud_peserta_surat_tgl
 * @property string $ib_paud_peserta_ortu_name
 * @property string $ib_paud_peserta_ortu_name_ibu
 * @property string $ib_paud_peserta_ortu_job
 * @property string $ib_paud_peserta_kk
 * @property string $ib_paud_peserta_tgjwb
 * @property string $ib_paud_peserta_alamat_id
 * @property string $ib_paud_peserta_alamat_ln
 * @property integer $ib_paud_peserta_prop_id
 * @property integer $ib_paud_peserta_kabkot_id
 * @property string $ib_paud_lbg_name
 * @property string $ib_paud_lbg_alamat
 * @property integer $ib_paud_lbg_prop_id
 * @property integer $ib_paud_lbg_kabkot_id
 * @property integer $ib_paud_lbg_kodepos
 * @property string $ib_paud_lbg_tlp
 * @property string $ib_paud_lbg_fax
 * @property string $ib_paud_lbg_ijin_oleh
 * @property string $ib_paud_lbg_ijin_tgl
 * @property string $ib_paud_lbg_ijin_start
 * @property string $ib_paud_lbg_ijin_exp
 * @property string $ib_paud_peserta_jaminan
 * @property string $ib_paud_create_at
 * @property string $ib_paud_update_at
 * @property integer $ib_paud_update_by
 * @property integer $ib_paud_status
 */
class Daftarpaud extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Paud the static model class
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
		return 'ib_paud';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ib_paud_status,ib_paud_peserta_name, ib_paud_peserta_jk, ib_paud_peserta_tmplahir, ib_paud_peserta_tgllahir, ib_paud_peserta_negara, ib_paud_peserta_surat,ib_paud_peserta_surat_tgl, ib_paud_peserta_ortu_name, ib_paud_ayah_wn, ib_paud_peserta_ortu_name_ibu, ib_paud_ibu_wn, ib_paud_peserta_ortu_job, ib_paud_peserta_kk, ib_paud_peserta_tgjwb, ib_paud_peserta_alamat_id, ib_paud_peserta_prop_id, ib_paud_peserta_kabkot_id, ib_paud_lbg_name, ib_paud_lbg_alamat, ib_paud_lbg_prop_id, ib_paud_lbg_kabkot_id, ib_paud_lbg_kodepos, ib_paud_lbg_tlp, ib_paud_lbg_fax, ib_paud_lbg_ijin_oleh, ib_paud_lbg_ijin_tgl, ib_paud_lbg_ijin_start, ib_paud_lbg_ijin_exp, ib_paud_peserta_jaminan', 'required'),
			array('user_id, ib_paud_peserta_jk, ib_paud_peserta_negara, ib_paud_peserta_prop_id, ib_paud_peserta_kabkot_id, ib_paud_lbg_prop_id, ib_paud_lbg_kabkot_id, ib_paud_lbg_kodepos, ib_paud_update_by', 'numerical', 'integerOnly'=>true),
			array('ib_paud_peserta_name, ib_paud_lbg_name, ib_paud_peserta_jaminan', 'length', 'max'=>200),
			array('ib_paud_peserta_tmplahir, ib_paud_ayah_pasport, ib_paud_peserta_surat, ib_paud_peserta_ortu_job, ib_paud_peserta_tgjwb,ib_paud_ayah_pasport, ib_paud_ayah_pasport_start, ib_paud_ayah_pasport_exp,ib_paud_ayah_ktp, ib_paud_ayah_ktp_start, ib_paud_ayah_ktp_exp,ib_paud_ibu_pasport, ib_paud_ibu_pasport_start, ib_paud_ibu_pasport_exp,ib_paud_ibu_ktp, ib_paud_ibu_ktp_start, ib_paud_ibu_ktp_exp', 'length', 'max'=>50),
			array('ib_paud_peserta_ortu_name,ib_paud_peserta_ortu_name_ibu, ib_paud_peserta_kk', 'length', 'max'=>100),
			array('ib_paud_peserta_alamat_ln,ib_paud_lbg_alamat', 'length', 'max'=>300),
			array('ib_paud_lbg_tlp, ib_paud_lbg_fax', 'length', 'max'=>15),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ib_paud_id, user_id, ib_paud_peserta_name, ib_paud_peserta_jk, ib_paud_peserta_tmplahir, ib_paud_peserta_tgllahir, ib_paud_peserta_negara, ib_paud_ayah_pasport, ib_paud_ayah_pasport_start, ib_paud_ayah_pasport_exp, ib_paud_peserta_surat,ib_paud_peserta_surat_tgl, ib_paud_peserta_ortu_name, ib_paud_peserta_ortu_job, ib_paud_peserta_kk, ib_paud_peserta_tgjwb, ib_paud_peserta_alamat_id,ib_paud_peserta_alamat_ln, ib_paud_peserta_prop_id, ib_paud_peserta_kabkot_id, ib_paud_lbg_name, ib_paud_lbg_alamat, ib_paud_lbg_prop_id, ib_paud_lbg_kabkot_id, ib_paud_lbg_kodepos, ib_paud_lbg_tlp, ib_paud_lbg_fax, ib_paud_lbg_ijin_oleh, ib_paud_lbg_ijin_tgl, ib_paud_lbg_ijin_start, ib_paud_lbg_ijin_exp, ib_paud_peserta_jaminan, ib_paud_create_at, ib_paud_update_at, ib_paud_update_by', 'safe', 'on'=>'search'),
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
			'pauduser'=>array(self::BELONGS_TO,'User','user_id'),
			'paudpesertapropinsi'=>array(self::BELONGS_TO,'Propinsi','ib_paud_peserta_prop_id'),
			'paudpesertakabkot'=>array(self::BELONGS_TO,'Kabkot','ib_paud_peserta_kabkot_id'),
			'paudlbgpropinsi'=>array(self::BELONGS_TO,'Propinsi','ib_paud_lbg_prop_id'),
			'paudlbgkabkot'=>array(self::BELONGS_TO,'Kabkot','ib_paud_lbg_kabkot_id'),
			'paudstatus'=>array(self::BELONGS_TO,'Status','ib_paud_status'),
			'paudjeniskelamin'=>array(self::BELONGS_TO,'Jeniskelamin','ib_paud_peserta_jk'),
			'paudupload'=>array(self::HAS_ONE,'Paudupload','paud_id'),
			'paudpesertanegara'=>array(self::BELONGS_TO,'Negara','ib_paud_peserta_negara'),
                        'paudverifikasi' => array(self::HAS_ONE, 'Paudverifikasi', 'ib_paud_id'),
                        'paudayahwn' => array(self::BELONGS_TO, 'Wn', 'ib_paud_ayah_wn'),
                        'paudibuwn' => array(self::BELONGS_TO, 'Wn', 'ib_paud_ibu_wn'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ib_paud_id' => 'No. Pendaftaran',
			'user_id' => 'User',
			'ib_paud_peserta_name' => 'Nama',
			'ib_paud_peserta_jk' => 'Jenis Kelamin',
			'ib_paud_peserta_tmplahir' => 'Tempat Lahir',
			'ib_paud_peserta_tgllahir' => 'Tanggal Lahir',
			'ib_paud_peserta_negara' => 'Kewarganegaraan',
                        'ib_paud_ayah_wn' => 'WNI / WNA',
			'ib_paud_ayah_pasport' => 'No. Paspor',
			'ib_paud_ayah_pasport_start' => 'Mulai Berlaku Paspor',
			'ib_paud_ayah_pasport_exp' => 'Kadaluarsa Paspor',
                        'ib_paud_ayah_ktp' => 'No. KTP',
			'ib_paud_ayah_ktp_start' => 'Mulai Berlaku KTP',
			'ib_paud_ayah_ktp_exp' => 'Kadaluarsa KTP',
                        'ib_paud_ibu_wn' => 'WNI / WNA',
                        'ib_paud_ibu_pasport' => 'No. Paspor',
			'ib_paud_ibu_pasport_start' => 'Mulai Berlaku Paspor',
			'ib_paud_ibu_pasport_exp' => 'Kadaluarsa Paspor',
                        'ib_paud_ibu_ktp' => 'No. KTP',
			'ib_paud_ibu_ktp_start' => 'Mulai Berlaku KTP',
			'ib_paud_ibu_ktp_exp' => 'Kadaluarsa KTP',
			'ib_paud_peserta_surat' => 'No. Surat Permohonan',
                        'ib_paud_peserta_surat_tgl' => 'Tgl. Surat Permohonan',
			'ib_paud_peserta_ortu_name' => 'Nama Ayah',
                        'ib_paud_peserta_ortu_name_ibu'=> 'Nama Ibu',
			'ib_paud_peserta_ortu_job' => 'Pekerjaan Orang Tua',
			'ib_paud_peserta_kk' => 'No. Kartu Keluarga',
			'ib_paud_peserta_tgjwb' => 'Penanggung Jawab',
			'ib_paud_peserta_alamat_id' => 'Alamat di Indonesia',
                        'ib_paud_peserta_alamat_ln' => 'Alamat Luar Negeri (Khusus WNA)',
			'ib_paud_peserta_prop_id' => 'Propinsi',
			'ib_paud_peserta_kabkot_id' => 'Kabupaten/Kota',
			'ib_paud_lbg_name' => 'Nama Lembaga',
			'ib_paud_lbg_alamat' => 'Alamat',
			'ib_paud_lbg_prop_id' => 'Propinsi',
			'ib_paud_lbg_kabkot_id' => 'Kabupaten/Kota',
			'ib_paud_lbg_kodepos' => 'Kodepos',
			'ib_paud_lbg_tlp' => 'Tlp.',
			'ib_paud_lbg_fax' => 'Fax.',
			'ib_paud_lbg_ijin_oleh' => 'Ijin Operasional Oleh',
			'ib_paud_lbg_ijin_tgl' => 'Tanggal Ijin Op.',
			'ib_paud_lbg_ijin_start' => 'Mulai Berlaku Ijin Op.',
			'ib_paud_lbg_ijin_exp' => 'Kadaluarsa Ijin Op.',
			'ib_paud_peserta_jaminan' => 'Jaminan',
			'ib_paud_create_at' => 'Ib Paud Create At',
			'ib_paud_update_at' => 'Ib Paud Update At',
			'ib_paud_update_by' => 'Ib Paud Update By',
			'ib_paud_status' => 'Status',
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

		$criteria->compare('ib_paud_id',$this->ib_paud_id);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('ib_paud_peserta_name',$this->ib_paud_peserta_name,true);
		$criteria->compare('ib_paud_peserta_jk',$this->ib_paud_peserta_jk);
		$criteria->compare('ib_paud_peserta_tmplahir',$this->ib_paud_peserta_tmplahir,true);
		$criteria->compare('ib_paud_peserta_tgllahir',$this->ib_paud_peserta_tgllahir,true);
		$criteria->compare('ib_paud_peserta_negara',$this->ib_paud_peserta_negara);
                $criteria->compare('ib_paud_ayah_wn',$this->ib_paud_ayah_wn,true);
		$criteria->compare('ib_paud_ayah_pasport',$this->ib_paud_ayah_pasport,true);
		$criteria->compare('ib_paud_ayah_pasport_start',$this->ib_paud_ayah_pasport_start,true);
		$criteria->compare('ib_paud_ayah_pasport_exp',$this->ib_paud_ayah_pasport_exp,true);
                $criteria->compare('ib_paud_ayah_ktp',$this->ib_paud_ayah_ktp,true);
		$criteria->compare('ib_paud_ayah_ktp_start',$this->ib_paud_ayah_ktp_start,true);
		$criteria->compare('ib_paud_ayah_ktp_exp',$this->ib_paud_ayah_ktp_exp,true);
                $criteria->compare('ib_paud_ibu_wn',$this->ib_paud_ibu_wn,true);
                $criteria->compare('ib_paud_ibu_pasport',$this->ib_paud_ibu_pasport,true);
		$criteria->compare('ib_paud_ibu_pasport_start',$this->ib_paud_ibu_pasport_start,true);
		$criteria->compare('ib_paud_ibu_pasport_exp',$this->ib_paud_ibu_pasport_exp,true);
                $criteria->compare('ib_paud_ibu_ktp',$this->ib_paud_ibu_ktp,true);
		$criteria->compare('ib_paud_ibu_ktp_start',$this->ib_paud_ibu_ktp_start,true);
		$criteria->compare('ib_paud_ibu_ktp_exp',$this->ib_paud_ibu_ktp_exp,true);
		$criteria->compare('ib_paud_peserta_surat',$this->ib_paud_peserta_surat,true);
                $criteria->compare('ib_paud_peserta_surat_tgl',$this->ib_paud_peserta_surat_tgl,true);
		$criteria->compare('ib_paud_peserta_ortu_name',$this->ib_paud_peserta_ortu_name,true);
		$criteria->compare('ib_paud_peserta_ortu_job',$this->ib_paud_peserta_ortu_job,true);
		$criteria->compare('ib_paud_peserta_kk',$this->ib_paud_peserta_kk,true);
		$criteria->compare('ib_paud_peserta_tgjwb',$this->ib_paud_peserta_tgjwb,true);
		$criteria->compare('ib_paud_peserta_alamat_id',$this->ib_paud_peserta_alamat_id,true);
                $criteria->compare('ib_paud_peserta_alamat_ln',$this->ib_paud_peserta_alamat_ln,true);
		$criteria->compare('ib_paud_peserta_prop_id',$this->ib_paud_peserta_prop_id);
		$criteria->compare('ib_paud_peserta_kabkot_id',$this->ib_paud_peserta_kabkot_id);
		$criteria->compare('ib_paud_lbg_name',$this->ib_paud_lbg_name,true);
		$criteria->compare('ib_paud_lbg_alamat',$this->ib_paud_lbg_alamat,true);
		$criteria->compare('ib_paud_lbg_prop_id',$this->ib_paud_lbg_prop_id);
		$criteria->compare('ib_paud_lbg_kabkot_id',$this->ib_paud_lbg_kabkot_id);
		$criteria->compare('ib_paud_lbg_kodepos',$this->ib_paud_lbg_kodepos);
		$criteria->compare('ib_paud_lbg_tlp',$this->ib_paud_lbg_tlp,true);
		$criteria->compare('ib_paud_lbg_fax',$this->ib_paud_lbg_fax,true);
		$criteria->compare('ib_paud_lbg_ijin_oleh',$this->ib_paud_lbg_ijin_oleh,true);
		$criteria->compare('ib_paud_lbg_ijin_tgl',$this->ib_paud_lbg_ijin_tgl,true);
		$criteria->compare('ib_paud_lbg_ijin_start',$this->ib_paud_lbg_ijin_start,true);
		$criteria->compare('ib_paud_lbg_ijin_exp',$this->ib_paud_lbg_ijin_exp,true);
		$criteria->compare('ib_paud_peserta_jaminan',$this->ib_paud_peserta_jaminan,true);
		$criteria->compare('ib_paud_create_at',$this->ib_paud_create_at,true);
		$criteria->compare('ib_paud_update_at',$this->ib_paud_update_at,true);
		$criteria->compare('ib_paud_update_by',$this->ib_paud_update_by);
		$criteria->compare('ib_paud_status',$this->ib_paud_status);
		
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
		if(empty($this->ib_paud_create_at)) { // Set to current timedate:
			$this->ib_paud_create_at = new CDbExpression('NOW()');
		}
		if(empty($this->ib_paud_status)) { // Set to current user:
			$this->ib_paud_status = 7;
		}
		$this->ib_paud_update_at = new CDbExpression('NOW()');
		$this->ib_paud_update_by = Yii::app()->user->id;
		return parent::beforeValidate();
	}

}