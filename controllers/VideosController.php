<?php

include_once ROOT.'/models/Videos.php';

class VideosController
{


	public function actionIndex()
	{
		$videosList = array();
		$videosList = Videos::getVideosList();

		echo "<pre>";
		print_r($videosList);
		echo "</pre>";

		return true;
	}

	public function actionView($id)
	{

		if($id) {

			$videosItem = array();
			$videosItem = Videos::getVideosItemById($id);

			echo $videosItem['name'].'<br>';
			echo $videosItem['category'].'<br>';
			echo $videosItem['img_name'].'<br>';

		}


		return true;
	}


}