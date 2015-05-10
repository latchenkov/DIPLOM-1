<?php

class AdsController extends CController
{
    public function actionSave(){
        // получение данных POST
        $data = CJSON::decode(file_get_contents('php://input'), true);
            // обработка данных
            if ($data['seller_name'] && $data['description']) { // если была нажата кнопка
                // выбор SAVE or UPDATE
                if(!isset($data['id'])|| !$data['id']){
                    $model = new Ads;
                }
                else{
                    $model = $this->loadModel($data['id']);
                }
                
                $model->attributes=$data;
                    if($model->save()){
                        $result['status']='success';
                        $result['message'] = "Объявление № ".$model->id." сохранено в базе данных";
                        $result['data'] = $model->attributes;
                    }
                    else{
                        $result['status']='error';
                        $result['message'] = "Объявление не удалось сохранить в базе данных";
                    }
                echo CJSON::encode($result);
            }			
    }
    
    // Удаление объявления
    public function actionDelete(){
        if(isset($_GET['id'])){
            $id=(int)$_GET['id'];
            if($this->loadModel($id)->delete()){
                $result['status']='success';
                $result['message'] = "Объявление ".$id." удалено из базы данных";
            }
            else{
                $result['status']='error';
                $result['message'] = "При удалении объявления возникли ошибки";
            }
        echo CJSON::encode($result);
        }
    }
    
    
    /**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Ads the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Ads::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'Объявление не найдено в Базе Данных.');
		return $model;
	}
}
