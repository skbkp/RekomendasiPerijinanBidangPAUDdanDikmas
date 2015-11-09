<?php

/**
 * This is the model class for table "ib_paud_upload_nilai".
 *
 * The followings are the available columns in table 'ib_paud_upload_nilai':
 * @property integer $nilai_paud_id
 * @property integer $ib_paud_id
 * @property integer $created_by
 * @property string $create_at
 * @property string $update_at
 * @property integer $update_by
 * @property integer $v_surat
 * @property integer $v_kuasa
 * @property integer $v_biaya
 * @property integer $v_paspor_anak
 * @property integer $v_aktalahir
 * @property integer $v_paspor_ortu
 * @property integer $v_kk
 * @property integer $v_nikah
 * @property integer $v_jaminan
 * @property integer $v_domisili
 * @property string $global_reason
 *
 * The followings are the available model relations:
 * @property Users $updateBy
 * @property IbPaud $ibPaud
 * @property Users $createdBy
 */
class Paudverifikasi extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Paudverifikasi the static model class
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
		return 'ib_paud_upload_nilai';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ib_paud_id, created_by, create_at, update_at, update_by, global_reason', 'required'),
			array('ib_paud_id, created_by, update_by, v_surat, v_kuasa, v_biaya, v_paspor_anak, v_aktalahir, v_paspor_ortu, v_kk, v_nikah, v_jaminan, v_domisili', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('nilai_paud_id, ib_paud_id, created_by, create_at, update_at, update_by, v_surat, v_kuasa, v_biaya, v_paspor_anak, v_aktalahir, v_paspor_ortu, v_kk, v_nikah, v_jaminan, v_domisili, global_reason', 'safe', 'on'=>'search'),
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
			'ibPaud' => array(self::BELONGS_TO, 'IbPaud', 'ib_paud_id'),
			'createdBy' => array(self::BELONGS_TO, 'Users', 'created_by'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'nilai_paud_id' => 'Nilai Paud',
			'ib_paud_id' => 'Ib Paud',
			'created_by' => 'Created By',
			'create_at' => 'Create At',
			'update_at' => 'Update At',
			'update_by' => 'Update By',
			'v_surat' => 'Surat Permohonan',
			'v_kuasa' => 'Surat Kuasa',
			'v_biaya' => 'Keterangan Biaya',
			'v_paspor_anak' => 'Paspor Anak',
			'v_aktalahir' => 'Akta Lahir',
			'v_paspor_ortu' => 'Paspor Ortu',
			'v_kk' => 'Kartu Keluarga',
			'v_nikah' => 'Akta Nikah',
			'v_jaminan' => 'Keterangan Jaminan',
			'v_domisili' => 'Keterangan Domisili',
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

		$criteria->compare('nilai_paud_id',$this->nilai_paud_id);
		$criteria->compare('ib_paud_id',$this->ib_paud_id);
		$criteria->compare('created_by',$this->created_by);
		$criteria->compare('create_at',$this->create_at,true);
		$criteria->compare('update_at',$this->update_at,true);
		$criteria->compare('update_by',$this->update_by);
		$criteria->compare('v_surat',$this->v_surat);
		$criteria->compare('v_kuasa',$this->v_kuasa);
		$criteria->compare('v_biaya',$this->v_biaya);
		$criteria->compare('v_paspor_anak',$this->v_paspor_anak);
		$criteria->compare('v_aktalahir',$this->v_aktalahir);
		$criteria->compare('v_paspor_ortu',$this->v_paspor_ortu);
		$criteria->compare('v_kk',$this->v_kk);
		$criteria->compare('v_nikah',$this->v_nikah);
		$criteria->compare('v_jaminan',$this->v_jaminan);
		$criteria->compare('v_domisili',$this->v_domisili);
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
                    $this->v_biaya&&
                    $this->v_paspor_anak&&
                    $this->v_aktalahir&&
                    $this->v_paspor_ortu&&
                    $this->v_kk&&
                    $this->v_nikah&&
                    $this->v_jaminan&&
                    $this->v_domisili
                    )==true&&
                    $this->update_by==1){
                Paud::model()->updateByPk($this->ib_paud_id,array('ib_paud_status'=>47));
            }
            
            if(
                    (
                    $this->v_surat&&
                    $this->v_kuasa&&
                    $this->v_biaya&&
                    $this->v_paspor_anak&&
                    $this->v_aktalahir&&
                    $this->v_paspor_ortu&&
                    $this->v_kk&&
                    $this->v_nikah&&
                    $this->v_jaminan&&
                    $this->v_domisili
                    )==false&&
                    $this->update_by==1){
                Paud::model()->updateByPk($this->ib_paud_id,array('ib_paud_status'=>107));
            }
            
        }
}