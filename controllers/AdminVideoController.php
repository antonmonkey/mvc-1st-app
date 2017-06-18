<?php

include_once ROOT.'/models/Categories.php';
include_once ROOT.'/models/Videos.php';
include_once ROOT.'/models/Admin.php';

class AdminVideoController
{

	public function actionAdminIndex() 
	{

		Admin::isLogged();

		$activeLink = 'Videos list';

		$categories = array();
		$categories = Categories::getCategoriesList();

		$videos = array();
		$videos = Videos::getVideosList();

		require_once(ROOT . '/views/admin/index.php');

		return true;
	}

	public function actionLogin() 
	{

		session_start();
	
		$data = $_POST;

		if ( isset($data['do_login']) ) 
		{

			unset($_SESSION['loginwrong']);
			unset($_SESSION['passwordwrong']);

			$user = Admin::getLoginAndPassword();

			if ( $user['login'] === $data['login'] ) {
				if ( $user['password'] === md5(md5($data['password'])) ) {
					$_SESSION['logged_user'] = $user;

					// echo "GO TO MAIN";
					header('Location: /admin');
				} else {
					$_SESSION['passwordwrong'] =  'PASSWORD WRONG!!! Please try ine more time';
				}
			} else {
				$_SESSION['loginwrong'] = 'LOGIN WRONG!!! Please try one more time!';
		}

	}

	require_once(ROOT . '/views/layouts/login_form.php');

		return true;
	}


	public function actionLogout()
	{

		Admin::logout();

	}

	public function actionView($id)
	{

		$categories = array();
		$categories = Categories::getCategoriesList();

		$videos = array();
		$videos = Videos::getVideosItemById($id);

		require_once(ROOT . '/views/video/singleVideoView.php');

		return true;
	}

	public function actionAdd()
	{

		$activeLink = 'Add video';

		if(isset($_POST['submit'])) {
			
			$options['name'] = $_POST['name'];
			$options['category'] = $_POST['category'];
			$options['url'] = $_POST['url'];
			
			$errors = false;

			if(!isset($options['name']) || empty($options['name'])){
				$errors[] = 'Please fill the form';
			}

			if($errors == false){

				$id = Videos::addVideo($options);

				if($id){
					if(is_uploaded_file($_FILES["imgfile"]["tmp_name"])){
						move_uploaded_file($_FILES["imgfile"]["tmp_name"], $_SERVER["DOCUMENT_ROOT"] . "/upload/images/{$id}.jpg");
					}
				}
				
				header("Location: /admin/videos");
			}
		}

		require_once(ROOT . '/views/admin/add.php');

		return true;
	} 

	public function actionDelete($id)
	{

		if(isset($_POST['submit'])){

			if (Videos::deleteVideoById($id)) {

				unlink($_SERVER["DOCUMENT_ROOT"].'/upload/images/'.$id.'.jpg');

			} echo 'FAUCCCKKKK';

			header("Location: /admin/videos");
			
		}

		require_once(ROOT . '/views/admin/delete.php');
		
		return true;
	}

	public function actionUpdate($id)
	{
		$video = Videos::getVideosItemById($id);

		if(isset($_POST['submit'])) {
			
			$options['name'] = $_POST['name'];
			$options['category'] = $_POST['category'];
			$options['url'] = $_POST['url'];

			if(Videos::updateVideoById($id, $options)){

				if(is_uploaded_file($_FILES["imgfile"]["tmp_name"])){
					$folder = $_SERVER["DOCUMENT_ROOT"];
					move_uploaded_file($_FILES["imgfile"]["tmp_name"], $folder . "/upload/images/{$id}.jpg");
				}
			}

				header("Location: /videos/");
		}

		require_once(ROOT . '/views/admin/update.php');

		return true;
	}

} 