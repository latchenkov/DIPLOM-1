<?php

class DeleteController extends CController
{
	public function actionIndex()
	{
	$id=(int)$_GET['id'];
            Ads::model()->deleteByPk($id);
            echo 'это удаление';
	}
public function actionSave(){echo 'это удаление';}
	
}