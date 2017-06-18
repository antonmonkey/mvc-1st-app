<?php

class Categories 
{
	// Returns an array of categories
	public static function getCategoriesList()
	{
		$db = Db::getConnection();

		$categoriseList = array();

		$result = $db->query('SELECT id,name FROM videos_categories ORDER BY 	sort_order ASC');
		$i = 0;
		while ($row = $result->fetch()) {
			$categoriseList[$i]['id'] = $row['id'];
			$categoriseList[$i]['name'] = $row['name'];
			$i++;
		}

		return $categoriseList;
	}
	
}