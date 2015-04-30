<?php

/**
 * This is the model class for table "locations".
 *
 * The followings are the available columns in table 'locations':
 * @property integer $id
 * @property string $location
 */
class Locations extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'locations';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, location', 'required'),
			array('id', 'numerical', 'integerOnly'=>true),
			array('location', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, location', 'safe', 'on'=>'search'),
		);
	}

	
	 // Список городов 
        public static function getLocationList()
        {
            $data = self::model()->findAll();
                foreach ($data as $buf){
                    $result[]=$buf->attributes;
                }
            return $result;
	}	
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Locations the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
