<?php

class IndexController extends CController
{
	public function actionIndex()
	{
            $this->render('index');
	}
        
        public function actionGetLocationList(){
            echo json_encode(Locations::getLocationList());
        }

        public function actionGetCategoryList(){
            echo json_encode(Categorys::getCategoryList());
        }
       
        public function actionGetAllAds(){
            echo json_encode(Ads::getAllAds());
        }
        
//        public function prepareForOutTableRow() 
//        {
//            $data = Ads::model()->findAll();
//                $row='';
//                    foreach ($data as $ad) {
//                        //$smarty->assign('ad',$value);
//                        if ($ad->type == 'private'){
//                            $row.=$this->renderPartial('table_row_private', array('ad'=>$ad), true);
//                        }
//                        elseif ($ad->type == 'corporate') {
//                            $row.=$this->renderPartial('table_row_corporate', array('ad'=>$ad), true);
//                        }
//                    }
//            return $row;
//        }
        


}