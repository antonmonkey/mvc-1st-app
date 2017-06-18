<?php

class VideosController
{

	public function actionView($id)
	{

		require_once(ROOT.'/views/video/view.php');

		return true;
	}


}