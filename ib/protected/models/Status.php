<?php

/**
 * This is the model class for table "ib_rstatus".
 *
 * The followings are the available columns in table 'ib_rstatus':
 * @property integer $status_id
 * @property string $status
 * @property integer $label_id
 * @property integer $desc
 */
class Status extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Status the static model class
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
		return 'ib_rstatus';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('status, label_id', 'required'),
			array('label_id', 'numerical', 'integerOnly'=>true),
			array('status', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('status_id, status, label_id', 'safe', 'on'=>'search'),
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
			'statuskursus'=>array(self::HAS_MANY,'Kursus','status_id'),
			'statusimta'=>array(self::HAS_MANY,'Imta','status_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'status_id' => 'Status',
			'status' => 'Status',
			'label_id' => 'Label',
                        'desc'=>'Deskripsi Status',
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

		$criteria->compare('status_id',$this->status_id);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('label_id',$this->label_id);
                $criteria->compare('desc',$this->desc);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}