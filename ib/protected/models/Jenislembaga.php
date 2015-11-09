<?php

/**
 * This is the model class for table "ib_rjeniskursus".
 *
 * The followings are the available columns in table 'ib_rjeniskursus':
 * @property integer $jeniskursus_id
 * @property string $jeniskursus
 */
class Jenislembaga extends CActiveRecord
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
		return 'ib_rjenislembaga';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('jenislembaga_id', 'required'),
			array('jenislembaga_id', 'numerical', 'integerOnly'=>true),
			array('jenislembaga', 'length', 'max'=>24),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('jenislembaga_id, jenislembaga', 'safe', 'on'=>'search'),
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
			'jenislembagalembaga'=>array(self::HAS_MANY,'Lembaga','jenislembaga_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'jenislembaga_id' => 'Jenislembaga',
			'jenislembaga' => 'Jenis Lembaga',
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

		$criteria->compare('jenislembaga_id',$this->jenislembaga_id);
		$criteria->compare('jenislembaga',$this->jenislembaga,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}