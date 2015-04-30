<?php

/**
 * This is the model class for table "categorys".
 *
 * The followings are the available columns in table 'categorys':
 * @property integer $id
 * @property string $category
 * @property integer $parent_id
 */
class Categorys extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'categorys';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, category', 'required'),
			array('id, parent_id', 'numerical', 'integerOnly'=>true),
			array('category', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, category, parent_id', 'safe', 'on'=>'search'),
		);
	}

	
        // Список категорий 
        public static function getCategorylist()
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
	 * @return Categorys the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
