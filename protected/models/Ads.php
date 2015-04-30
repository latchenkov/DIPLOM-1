<?php

/**
 * This is the model class for table "ads".
 *
 * The followings are the available columns in table 'ads':
 * @property integer $id
 * @property string $date
 * @property string $title
 * @property integer $price
 * @property string $seller_name
 * @property string $type
 * @property string $email
 * @property string $allow_mails
 * @property string $phone
 * @property string $location_id
 * @property string $category_id
 * @property string $description
 */
class Ads extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ads';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('date, title, price, seller_name, type, email, allow_mails, phone, location_id, category_id, description', 'required'),
			array('price',  'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>30),
			array('seller_name, location_id, category_id', 'length', 'max'=>30),
			array('type, email', 'length', 'max'=>20),
			array('phone', 'length', 'max'=>30),
                        //array('allow_mails', 'length', 'max'=>5),
			array('description', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, date, title, price, seller_name, type, email, allow_mails, phone, location_id, category_id, description', 'safe', 'on'=>'search'),
		);
	}

	// Список всех объявлений
        
        public static function getAllAds()
        {
            $data = self::model()->findAll();
                foreach ($data as $buf){
                    $result[$buf->id]=$buf->attributes;
                }
            return $result;
	}
	
	
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Ads the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
