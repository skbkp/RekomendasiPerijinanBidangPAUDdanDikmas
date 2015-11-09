<?php

/**
 * This is the model class for table "ib_rpemodalan".
 *
 * The followings are the available columns in table 'ib_rpemodalan':
 * @property integer $ib_pemodalan_id
 * @property string $ib_pemodalan
 *
 * The followings are the available model relations:
 * @property IbKursus[] $ibKursuses
 */
class IbRpemodalan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ib_rpemodalan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ib_pemodalan', 'required'),
			array('ib_pemodalan', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ib_pemodalan_id, ib_pemodalan', 'safe', 'on'=>'search'),
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
			'ibKursuses' => array(self::HAS_MANY, 'IbKursus', 'ib_kursus_lbg_pemodal'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ib_pemodalan_id' => 'Ib Pemodalan',
			'ib_pemodalan' => 'Ib Pemodalan',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('ib_pemodalan_id',$this->ib_pemodalan_id);
		$criteria->compare('ib_pemodalan',$this->ib_pemodalan,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return IbRpemodalan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
