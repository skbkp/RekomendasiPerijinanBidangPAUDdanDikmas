<?php

/**
 * This is the model class for table "ib_rjeniskursus".
 *
 * The followings are the available columns in table 'ib_rjeniskursus':
 * @property integer $jeniskursus_id
 * @property string $jeniskursus
 */
class Jeniskursus extends CActiveRecord
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
		return 'ib_rjeniskursus';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('jeniskursus_id', 'required'),
			array('jeniskursus_id', 'numerical', 'integerOnly'=>true),
			array('jeniskursus', 'length', 'max'=>24),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('jeniskursus_id, jeniskursus', 'safe', 'on'=>'search'),
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
			'jeniskursuskursus'=>array(self::HAS_MANY,'Kursus','jeniskursus_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'jeniskursus_id' => 'Jeniskursus',
			'jeniskursus' => 'Jenis Kursus',
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

		$criteria->compare('jeniskursus_id',$this->jeniskursus_id);
		$criteria->compare('jeniskursus',$this->jeniskursus,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}