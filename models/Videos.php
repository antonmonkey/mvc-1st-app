<?php 

class Videos
{
	
	const SHOW_BY_DEFAULT = 6;

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
		$result = $db->query('SELECT * from videos_catalog WHERE status = "1" ORDER BY id');

		$i = 0;
		while($row = $result->fetch()) {
			$videosList[$i]['id'] = $row['id'];
			$videosList[$i]['name'] = $row['name'];
			$videosList[$i]['category'] = $row['category'];
			$videosList[$i]['url'] = $row['url'];
			$i++;
		}

		return $videosList;
	}

	public static function getTotalVideos()
	{
		$db = Db::getConnection();

		$result = $db->query('SELECT count(id) as count FROM `videos_catalog` WHERE status = "1"');
		$result->setFetchMode(PDO::FETCH_ASSOC);
		$row = $result->fetch();

		return $row['count'];
	}

	// Returns an array of videos items
	public static function getAdminVideosList()
	{

		$db = Db::getConnection();

		$videosList = array();
		$result = $db->query('SELECT * FROM videos_catalog WHERE status = "1" ORDER BY id');

		$i = 0;
		while($row = $result->fetch()) {
			$videosList[$i]['id'] = $row['id'];
			$videosList[$i]['name'] = $row['name'];
			$videosList[$i]['category'] = $row['category'];
			$videosList[$i]['url'] = $row['url'];
			$i++;
		}

		return $videosList;
	}

	public static function deleteVideoById($id)
	{
		$db = Db::getConnection();

		$sql = 'DELETE FROM videos_catalog WHERE id = :id';

		$result = $db->prepare($sql);
		$result->bindParam(':id', $id, PDO::PARAM_INT);
		return $result->execute();
	}

	public static function addVideo($options)
	{
		$db = Db::getConnection();
		
		$sql = 'INSERT INTO videos_catalog (id, name, category, url) VALUES (NULL, :name, :category, :url)';

		$result = $db->prepare($sql);
		$result->bindParam(':name', $options['name'], PDO::PARAM_STR);
		$result->bindParam(':category', $options['category'], PDO::PARAM_STR);
		$result->bindParam(':url', $options['url'], PDO::PARAM_STR);
		
		if($result->execute()) {
			return $db->lastInsertId();
		} 

		return 0;
	}

	public static function updateVideoById($id, $options)
	{
		$db = Db::getConnection();

		$sql = "UPDATE videos_catalog SET name = :name, category = :category, url = :url WHERE id = :id";

		$result = $db->prepare($sql);
		$result->bindParam(':id', $id, PDO::PARAM_INT);
		$result->bindParam(':name', $options['name'], PDO::PARAM_STR);
		$result->bindParam(':category', $options['category'], PDO::PARAM_STR);
		$result->bindParam(':url', $options['url'], PDO::PARAM_STR);

		return $result->execute();

	}

}

 