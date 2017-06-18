<?php 

include_once ROOT . '/models/Categories.php';
include_once ROOT . '/models/Videos.php';
include_once ROOT . '/models/Admin.php';

class SiteController 
{	



	public function actionIndex() 
	{

		$categories = array();
		$categories = Categories::getCategoriesList();

		$videos = array();
		$videos = Videos::getVideosList();

		require_once(ROOT . '/views/alshskbl/index.php');

		return true;
	}

	public function actionRedirectIndex() 
	{

		header('Location: /admin');

		return true;

	}

}