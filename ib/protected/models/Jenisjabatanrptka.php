<?php

/**
 * This is the model class for table "ib_rjeniskursus".
 *
 * The followings are the available columns in table 'ib_rjeniskursus':
 * @property integer $jeniskursus_id
 * @property string $jeniskursus
 */
class Jenisjabatanrptka extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Jeniskursus the static model class
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
		return 'ib_rjenisjabatanrptka';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('jenisjabatanrptka_id', 'required'),
			array('jenisjabatanrptka_id', 'numerical', 'integerOnly'=>true),
			array('jenisjabatanrptka', 'length', 'max'=>24),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('jenisjabatanrptka_id, jenisjabatanrptka', 'safe', 'on'=>'search'),
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
			'jenisimtajabatanrptka'=>array(self::HAS_MANY,'Kursus','jenisjabatanrptka_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'jenisjabatanrptka_id' => 'No. Jenis Jabatan RPTKA',
			'jenisjabatanrptka' => 'Jenis Jabatan RPTKA',
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

		$criteria->compare('jenisjabatanrptka_id',$this->jenisimta_id);
		$criteria->compare('jenisjabatanrptka',$this->jenisimta,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}