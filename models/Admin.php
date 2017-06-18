<?php

class Admin 
{

	public static function isLogged()
	{
		session_start();

		if(!isset($_SESSION['logged_user'])) {

		header('Location: /admin/login');
		
		}

		return true;

	}

	public static function getLoginAndPassword()
	{

		$db = Db::getConnection();

		$result = $db->query('SELECT * FROM `admin`');
		$result->setFetchMode(PDO::FETCH_ASSOC);

		$user = $result->fetch();

		return $user;

	}

	public static function logout()
	{
		session_start();

		unset($_SESSION['logged_user']);

		header('Location: /admin');
	}

}