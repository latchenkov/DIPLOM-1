<?php

class ShowController extends CController
{
	public function actionIndex()
	{
            $result=Ads::model()->find('id=:myParams', array(':myParams'=>$_GET['id']));//)->prepareForOutSingleAd($edit_id);
	
            print_r ($result);
        }

}