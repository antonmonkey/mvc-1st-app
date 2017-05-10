<?php 

class Videos
{
	
	// Returns single video item with specified id
	public static function getVideosItemById($id)
	{
		$id = intval($id);

		if($id) {

		$db = Db::getConnection();

		$result = $db->query('SELECT * from videos_catalog WHERE id='. $id);
		$result->setFetchMode(PDO::FETCH_ASSOC);

		$videosItem = $result->fetch();

		return $videosItem;			
		}
	}
	
	// Returns an array of videos items
	public static function getVideosList()
	{

		$db = Db::getConnection();

		$videosList = array();

		$result = $db->query('SELECT * from videos_catalog');

		$i = 0;
		while($row = $result->fetch()) {
			$videosList[$i]['id'] = $row['id'];
			$videosList[$i]['name'] = $row['name'];
			$videosList[$i]['category'] = $row['category'];
			$videosList[$i]['img_name'] = $row['img_name'];
			$i++;
		}

		return $videosList;
	}

}