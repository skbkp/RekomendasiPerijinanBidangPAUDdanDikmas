<?php

/**
 * This is the model class for table "ib_kursus_upload_nilai".
 *
 * The followings are the available columns in table 'ib_kursus_upload_nilai':
 * @property integer $nilai_kursus_id
 * @property integer $ib_kursus_id
 * @property integer $created_by
 * @property string $create_at
 * @property string $update_at
 * @property integer $update_by
 * @property integer $v_surat
 * @property integer $v_kuasa
 * @property integer $v_nilek
 * @property integer $v_kurikulum
 * @property integer $v_aktanotaris
 * @property integer $v_pengesahankumham
 * @property integer $v_domisili
 * @property integer $v_alasan
 * @property integer $v_biaya
 * @property integer $v_jaminan
 * @property integer $v_paspor
 * @property integer $v_cv
 * @property integer $v_foto
 * @property integer $v_ijazah
 * @property integer $v_sehat
 * @property integer $v_pernyataan
 * @property string $global_reason
 *
 * The followings are the available model relations:
 * @property Users $updateBy
 * @property Users $createdBy
 * @property IbKursus $ibKursus
 */
class Kursusverifikasi extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Kursusverifikasi the static model class
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
		return 'ib_kursus_upload_nilai';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ib_kursus_id, created_by, create_at, update_at, update_by, global_reason', 'required'),
			array('ib_kursus_id, created_by, update_by, v_surat, v_kuasa, v_nilek, v_kurikulum, v_aktanotaris, v_pengesahankumham, v_domisili, v_alasan, v_biaya, v_jaminan, v_paspor, v_cv, v_foto, v_ijazah, v_sehat, v_pernyataan', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('nilai_kursus_id, ib_kursus_id, created_by, create_at, update_at, update_by, v_surat, v_kuasa, v_nilek, v_kurikulum, v_aktanotaris, v_pengesahankumham, v_domisili, v_alasan, v_biaya, v_jaminan, v_paspor, v_cv, v_foto, v_ijazah, v_sehat, v_pernyataan, global_reason', 'safe', 'on'=>'search'),
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
			'updateBy' => array(self::BELONGS_TO, 'Users', 'update_by'),
			'createdBy' => array(self::BELONGS_TO, 'Users', 'created_by'),
			'ibKursus' => array(self::BELONGS_TO, 'IbKursus', 'ib_kursus_id'),
                        'kibKursusUploadNilais' => array(self::BELONGS_TO, 'Statusdokumen', 'v_pernyataan'),
			'kibKursusUploadNilais1' => array(self::BELONGS_TO, 'Statusdokumen', 'v_kurikulum'),
			'kibKursusUploadNilais2' => array(self::BELONGS_TO, 'Statusdokumen', 'v_aktanotaris'),
			'kibKursusUploadNilais3' => array(self::BELONGS_TO, 'Statusdokumen', 'v_pengesahankumham'),
			'kibKursusUploadNilais4' => array(self::BELONGS_TO, 'Statusdokumen', 'v_domisili'),
			'kibKursusUploadNilais5' => array(self::BELONGS_TO, 'Statusdokumen', 'v_alasan'),
			'kibKursusUploadNilais6' => array(self::BELONGS_TO, 'Statusdokumen', 'v_biaya'),
			'kibKursusUploadNilais7' => array(self::BELONGS_TO, 'Statusdokumen', 'v_jaminan'),
			'kibKursusUploadNilais8' => array(self::BELONGS_TO, 'Statusdokumen', 'v_paspor'),
			'kibKursusUploadNilais9' => array(self::BELONGS_TO, 'Statusdokumen', 'v_cv'),
			'kibKursusUploadNilais10' => array(self::BELONGS_TO, 'Statusdokumen', 'v_foto'),
			'kibKursusUploadNilais11' => array(self::BELONGS_TO, 'Statusdokumen', 'v_ijazah'),
			'kibKursusUploadNilais12' => array(self::BELONGS_TO, 'Statusdokumen', 'v_sehat'),
			'kibKursusUploadNilais13' => array(self::BELONGS_TO, 'Statusdokumen', 'v_surat'),
			'kibKursusUploadNilais14' => array(self::BELONGS_TO, 'Statusdokumen', 'v_kuasa'),
			'kibKursusUploadNilais15' => array(self::BELONGS_TO, 'Statusdokumen', 'v_nilek'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'nilai_kursus_id' => 'Nilai Kursus',
			'ib_kursus_id' => 'Ib Kursus',
			'created_by' => 'Created By',
			'create_at' => 'Create At',
			'update_at' => 'Update At',
			'update_by' => 'Update By',
			'v_surat' => 'Surat Pengajuan',
			'v_kuasa' => 'Surat Kuasa',
			'v_nilek' => 'Dokumen Nilek',
			'v_kurikulum' => 'Kurikulum',
			'v_aktanotaris' => 'Akta Notaris',
			'v_pengesahankumham' => 'Pengesahan Kumham',
			'v_domisili' => 'Keterangan Domisili',
			'v_alasan' => 'Alasan Ikut Kursus',
			'v_biaya' => 'Keterangan Biaya',
			'v_jaminan' => 'Keterangan Jaminan',
			'v_paspor' => 'Paspor',
			'v_cv' => 'Daftar Riwayat Hidup',
			'v_foto' => 'Foto',
			'v_ijazah' => 'Ijazah',
			'v_sehat' => 'Keterangan Sehat',
			'v_pernyataan' => 'Pernyataan Propaganda',
			'global_reason' => 'Keterangan',
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

		$criteria->compare('nilai_kursus_id',$this->nilai_kursus_id);
		$criteria->compare('ib_kursus_id',$this->ib_kursus_id);
		$criteria->compare('created_by',$this->created_by);
		$criteria->compare('create_at',$this->create_at,true);
		$criteria->compare('update_at',$this->update_at,true);
		$criteria->compare('update_by',$this->update_by);
		$criteria->compare('v_surat',$this->v_surat);
		$criteria->compare('v_kuasa',$this->v_kuasa);
		$criteria->compare('v_nilek',$this->v_nilek);
		$criteria->compare('v_kurikulum',$this->v_kurikulum);
		$criteria->compare('v_aktanotaris',$this->v_aktanotaris);
		$criteria->compare('v_pengesahankumham',$this->v_pengesahankumham);
		$criteria->compare('v_domisili',$this->v_domisili);
		$criteria->compare('v_alasan',$this->v_alasan);
		$criteria->compare('v_biaya',$this->v_biaya);
		$criteria->compare('v_jaminan',$this->v_jaminan);
		$criteria->compare('v_paspor',$this->v_paspor);
		$criteria->compare('v_cv',$this->v_cv);
		$criteria->compare('v_foto',$this->v_foto);
		$criteria->compare('v_ijazah',$this->v_ijazah);
		$criteria->compare('v_sehat',$this->v_sehat);
		$criteria->compare('v_pernyataan',$this->v_pernyataan);
		$criteria->compare('global_reason',$this->global_reason,true);

		return new CActiveDataProvider($this, array(
				'criteria'=>$criteria,
			));
		}
        protected function beforeValidate() {
			if(empty($this->created_by)) { // Set to current user:
				$this->created_by = Yii::app()->user->id;
			}
			if(empty($this->create_at)) { // Set to current timedate:
				$this->create_at = new CDbExpression('NOW()');
			}
			$this->update_at = new CDbExpression('NOW()');
			$this->update_by = Yii::app()->user->id;
			return parent::beforeValidate();
		}
        protected function afterSave(){
            if(
                    (
                    $this->v_surat&&
                    $this->v_kuasa&&
                    $this->v_nilek&&
                    $this->v_kurikulum&&
                    $this->v_aktanotaris&&
                    $this->v_pengesahankumham&&
                    $this->v_domisili&&
                    $this->v_alasan&&
                    $this->v_biaya&&
                    $this->v_jaminan&&
                    $this->v_paspor&&
                    $this->v_cv&&
                    $this->v_foto&&
                    $this->v_ijazah&&
                    $this->v_sehat&&
                    $this->v_pernyataan
                    )==true&&
                    $this->update_by==1){
                Kursus::model()->updateByPk($this->ib_kursus_id,array('ib_kursus_status'=>47));
            }
            
            if(
                    (
                    $this->v_surat&&
                    $this->v_kuasa&&
                    $this->v_nilek&&
                    $this->v_kurikulum&&
                    $this->v_aktanotaris&&
                    $this->v_pengesahankumham&&
                    $this->v_domisili&&
                    $this->v_alasan&&
                    $this->v_biaya&&
                    $this->v_jaminan&&
                    $this->v_paspor&&
                    $this->v_cv&&
                    $this->v_foto&&
                    $this->v_ijazah&&
                    $this->v_sehat&&
                    $this->v_pernyataan
                    )==false&&
                    $this->update_by==1){
                Kursus::model()->updateByPk($this->ib_kursus_id,array('ib_kursus_status'=>107));
            }
        }
}