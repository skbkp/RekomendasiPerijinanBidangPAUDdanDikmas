<?php

/**
 * This is the model class for table "ib_rjeniskelamin".
 *
 * The followings are the available columns in table 'ib_rjeniskelamin':
 * @property integer $ib_jeniskelamin_id
 * @property string $ib_jeniskelamin
 * @property string $ib_jeniskelamin_title
 * @property string $ib_jeniskelamin_huruf
 */
class Jeniskelamin extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Jeniskelamin the static model class
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
		return 'ib_rjeniskelamin';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ib_jeniskelamin_id, ib_jeniskelamin, ib_jeniskelamin_title', 'required'),
			array('ib_jeniskelamin_id', 'numerical', 'integerOnly'=>true),
			array('ib_jeniskelamin', 'length', 'max'=>15),
			array('ib_jeniskelamin_title', 'length', 'max'=>5),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ib_jeniskelamin_id, ib_jeniskelamin, ib_jeniskelamin_title', 'safe', 'on'=>'search'),
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
			'jeniskelaminkursus'=>array(self::HAS_MANY,'Kursus','ib_jeniskelamin_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ib_jeniskelamin_id' => 'Ib Jeniskelamin',
			'ib_jeniskelamin' => 'Jenis Kelamin',
			'ib_jeniskelamin_title' => 'Ib Jeniskelamin Title',
			'ib_jeniskelamin_huruf' => 'L/P',
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

		$criteria->compare('ib_jeniskelamin_id',$this->ib_jeniskelamin_id);
		$criteria->compare('ib_jeniskelamin',$this->ib_jeniskelamin,true);
		$criteria->compare('ib_jeniskelamin_title',$this->ib_jeniskelamin_title,true);
		$criteria->compare('ib_jeniskelamin_huruf',$this->ib_jeniskelamin_huruf,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}