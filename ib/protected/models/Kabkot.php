<?php

/**
 * This is the model class for table "psr_rkabupaten_kota".
 *
 * The followings are the available columns in table 'psr_rkabupaten_kota':
 * @property integer $psr_kabkot_id
 * @property string $psr_kabkot_name
 * @property integer $psr_prop_id
 * @property integer $psr_reg_id
 * @property string $psr_posted_by
 * @property string $psr_lastupdate
 * @property integer $psr_sync
 */
class Kabkot extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Kabkot the static model class
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
		return 'psr_rkabupaten_kota';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('psr_kabkot_name, psr_prop_id, psr_reg_id, psr_posted_by, psr_lastupdate', 'required'),
			array('psr_prop_id, psr_reg_id, psr_sync', 'numerical', 'integerOnly'=>true),
			array('psr_kabkot_name', 'length', 'max'=>50),
			array('psr_posted_by', 'length', 'max'=>30),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('psr_kabkot_id, psr_kabkot_name, psr_prop_id, psr_reg_id, psr_posted_by, psr_lastupdate, psr_sync', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'psr_kabkot_id' => 'Psr Kabkot',
			'psr_kabkot_name' => 'Kab/Kota',
			'psr_prop_id' => 'Psr Prop',
			'psr_reg_id' => 'Psr Reg',
			'psr_posted_by' => 'Psr Posted By',
			'psr_lastupdate' => 'Psr Lastupdate',
			'psr_sync' => 'Psr Sync',
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

		$criteria->compare('psr_kabkot_id',$this->psr_kabkot_id);
		$criteria->compare('psr_kabkot_name',$this->psr_kabkot_name,true);
		$criteria->compare('psr_prop_id',$this->psr_prop_id);
		$criteria->compare('psr_reg_id',$this->psr_reg_id);
		$criteria->compare('psr_posted_by',$this->psr_posted_by,true);
		$criteria->compare('psr_lastupdate',$this->psr_lastupdate,true);
		$criteria->compare('psr_sync',$this->psr_sync);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}