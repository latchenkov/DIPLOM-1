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
