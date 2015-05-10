<?php

class SiteController extends CController
{
	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}
        
        public function actionGetLocationList(){
            echo CJSON::encode(Locations::getLocationList());
        }

        public function actionGetCategoryList(){
            echo CJSON::encode(Categorys::getCategoryList());
        }
       
        public function actionGetAllAds(){
            $data = Ads::getAllAds();
                if (!$data){
                    $result['status']='warning';
                    $result['message'] = "Внимание! В базе данных нет объявлений.";
                }
                else {
                    $result['status'] = 'success';
                    $result['data'] = $data;
                }
            echo CJSON::encode($result);
        }

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

}