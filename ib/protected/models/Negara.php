<?php

/**
 * This is the model class for table "ib_rcountries".
 *
 * The followings are the available columns in table 'ib_rcountries':
 * @property integer $id
 * @property string $country
 * @property string $alpha_2
 * @property string $alpha_3
 */
class Negara extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Negara the static model class
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
		return 'ib_rcountries';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('country', 'length', 'max'=>50),
			array('alpha_2', 'length', 'max'=>2),
			array('alpha_3', 'length', 'max'=>3),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, country, alpha_2, alpha_3', 'safe', 'on'=>'search'),
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
			'negarakursuspeserta'=>array(self::HAS_MANY,'Kursus','id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'country' => 'Negara',
			'alpha_2' => 'Alpha 2',
			'alpha_3' => 'Alpha 3',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('country',$this->country,true);
		$criteria->compare('alpha_2',$this->alpha_2,true);
		$criteria->compare('alpha_3',$this->alpha_3,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}