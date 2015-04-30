<?php

class AdsController extends CController
{
    public function actionSave(){
        // получение данных POST
        $data = json_decode(file_get_contents('php://input'), true);
            // обработка данных
            if ($data['seller_name'] && $data['description']) { // если была нажата кнопка
                $save_ad = $this->trimDATA($data);
                // выбор SAVE or UPDATE
                if(!isset($save_ad['id'])|| !$save_ad['id']){
                    $model = new Ads;
                }
                else{
                    $model = $this->loadModel($save_ad['id']);
                }
                
                $model->attributes=$save_ad;
                //print_r ($model->attributes);
                    if($model->save()){
                        $result['status']='success';
                        $result['message'] = "Объявление № ".$model->id." добавлено в базу данных";
                        $result['data'] = $model->attributes;
                        $result['data']['allow_mails'] = (bool)$result['data']['allow_mails'];
                    }
                    else{
                        $result['status']='error';
                        $result['message'] = "Объявление не удалось добавить в базу данных";
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
    
    // Просмотр объявления
//    public function actionShow(){
//        if(isset($_GET['id'])){
//            $id=(int)$_GET['id'];
//            if($model=$this->loadModel($id)){
//                $result['status']='success';
//                $result['data'] = $model->attributes;
//                $result['data']['allow_mails'] = (bool)$result['data']['allow_mails'];
//            }
//            else{
//                $result['status']='error';
//                $result['message'] = "При извлечении объявления возникли ошибки";
//            }
//        echo json_encode ($result);
//        }
//    }
    
    
    public function trimDATA (array $data){
        $result = array();
            $int = array('id', 'price');
        foreach ($data as $key => $value) {
            if (in_array($key, $int)){
                $result[$key] = trim((int)$value);
            }
            else{
                if ($key == 'allow_mails'){
                    $result[$key] = $value ? 1 : 0;
                        continue;
                }
                $result[$key] = trim(strip_tags($value));    
            }
        }
        if(isset($data['date'])&&$data['date']!==''){
            $result['date'] = $data['date'];
        }
        else {
        $result['date'] = date('YmdHis');
        }
        return $result;
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
			throw new CHttpException(404,'The12344requested page does not exist.');
		return $model;
	}
}
