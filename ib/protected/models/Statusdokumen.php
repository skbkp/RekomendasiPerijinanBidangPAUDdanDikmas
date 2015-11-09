<?php

/**
 * This is the model class for table "ib_rstatusdokumen".
 *
 * The followings are the available columns in table 'ib_rstatusdokumen':
 * @property integer $ib_dok_status_id
 * @property string $dok_status
 *
 * The followings are the available model relations:
 * @property IbKursusUploadNilai[] $ibKursusUploadNilais
 * @property IbKursusUploadNilai[] $ibKursusUploadNilais1
 * @property IbKursusUploadNilai[] $ibKursusUploadNilais2
 * @property IbKursusUploadNilai[] $ibKursusUploadNilais3
 * @property IbKursusUploadNilai[] $ibKursusUploadNilais4
 * @property IbKursusUploadNilai[] $ibKursusUploadNilais5
 * @property IbKursusUploadNilai[] $ibKursusUploadNilais6
 * @property IbKursusUploadNilai[] $ibKursusUploadNilais7
 * @property IbKursusUploadNilai[] $ibKursusUploadNilais8
 * @property IbKursusUploadNilai[] $ibKursusUploadNilais9
 * @property IbKursusUploadNilai[] $ibKursusUploadNilais10
 * @property IbKursusUploadNilai[] $ibKursusUploadNilais11
 * @property IbKursusUploadNilai[] $ibKursusUploadNilais12
 * @property IbKursusUploadNilai[] $ibKursusUploadNilais13
 * @property IbKursusUploadNilai[] $ibKursusUploadNilais14
 * @property IbKursusUploadNilai[] $ibKursusUploadNilais15
 */
class Statusdokumen extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Statusdokumen the static model class
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
		return 'ib_rstatusdokumen';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ib_dok_status_id, dok_status', 'required'),
			array('ib_dok_status_id', 'numerical', 'integerOnly'=>true),
			array('dok_status', 'length', 'max'=>5),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ib_dok_status_id, dok_status', 'safe', 'on'=>'search'),
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
			'ibKursusUploadNilais' => array(self::HAS_MANY, 'IbKursusUploadNilai', 'v_pernyataan'),
			'ibKursusUploadNilais1' => array(self::HAS_MANY, 'IbKursusUploadNilai', 'v_kurikulum'),
			'ibKursusUploadNilais2' => array(self::HAS_MANY, 'IbKursusUploadNilai', 'v_aktanotaris'),
			'ibKursusUploadNilais3' => array(self::HAS_MANY, 'IbKursusUploadNilai', 'v_pengesahankumham'),
			'ibKursusUploadNilais4' => array(self::HAS_MANY, 'IbKursusUploadNilai', 'v_domisili'),
			'ibKursusUploadNilais5' => array(self::HAS_MANY, 'IbKursusUploadNilai', 'v_alasan'),
			'ibKursusUploadNilais6' => array(self::HAS_MANY, 'IbKursusUploadNilai', 'v_biaya'),
			'ibKursusUploadNilais7' => array(self::HAS_MANY, 'IbKursusUploadNilai', 'v_jaminan'),
			'ibKursusUploadNilais8' => array(self::HAS_MANY, 'IbKursusUploadNilai', 'v_paspor'),
			'ibKursusUploadNilais9' => array(self::HAS_MANY, 'IbKursusUploadNilai', 'v_cv'),
			'ibKursusUploadNilais10' => array(self::HAS_MANY, 'IbKursusUploadNilai', 'v_foto'),
			'ibKursusUploadNilais11' => array(self::HAS_MANY, 'IbKursusUploadNilai', 'v_ijazah'),
			'ibKursusUploadNilais12' => array(self::HAS_MANY, 'IbKursusUploadNilai', 'v_sehat'),
			'ibKursusUploadNilais13' => array(self::HAS_MANY, 'IbKursusUploadNilai', 'v_surat'),
			'ibKursusUploadNilais14' => array(self::HAS_MANY, 'IbKursusUploadNilai', 'v_kuasa'),
			'ibKursusUploadNilais15' => array(self::HAS_MANY, 'IbKursusUploadNilai', 'v_nilek'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ib_dok_status_id' => 'Ib Dok Status',
			'dok_status' => 'Dok Status',
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

		$criteria->compare('ib_dok_status_id',$this->ib_dok_status_id);
		$criteria->compare('dok_status',$this->dok_status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}