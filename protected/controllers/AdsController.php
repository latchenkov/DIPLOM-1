<?php

class AdsController extends CController
{
    public function actionSave(){
        // получение данных POST
        $data = json_decode(file_get_contents('php://input'), true);
            // обработка данных
            if ($data['seller_name'] && $data['description']) { // если была нажата кнопка
                $save_ad = Ads::trimDATA($data);
                // выбор SAVE or UPDATE
                if(!isset($save_ad['id'])|| !$save_ad['id']){
                    $model = new Ads;
                }
                else{
                    $model = $this->loadModel($save_ad['id']);
                }
                
                $model->attributes=$save_ad;
                    if($model->save()){
                        $result['status']='success';
                        $result['message'] = "Объявление № ".$model->id." сохранено в базе данных";
                        $result['data'] = $model->attributes;
                        $result['data']['allow_mails'] = (bool)$result['data']['allow_mails'];
                    }
                    else{
                        $result['status']='error';
                        $result['message'] = "Объявление не удалось сохранить в базе данных";
                    }
                echo json_encode ($result);
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
        echo json_encode ($result);
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
