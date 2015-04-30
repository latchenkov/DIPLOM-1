<?php

class SaveController extends CController
{
	public function actionIndex()
	{
		$myModelAds = new Ads();
                //$myModelAds = Ads::model()->find('id=:myParams', array(':myParams'=>$_GET['id']));    
                
                    //$myModelAds->id = 6;
                    $myModelAds->date = '2014-12-23 15:50:59';
                    $myModelAds->title = 'Отдам щенка';
                    $myModelAds->price = 45;
                    $myModelAds->seller_name = 'Ирина';
                    $myModelAds->type = 'private';
                    $myModelAds->email = 'ira@mail.ru';
                    $myModelAds->allow_mails = 1;
                    $myModelAds->phone = '89104301813';
                    $myModelAds->location_id = 641710;
                    $myModelAds->category_id = 990;
                    $myModelAds->description = 'Отдам котенка в надежные руки';
                 
                $myModelAds->save();
	}

}