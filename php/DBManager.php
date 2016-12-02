<?
		
	class DBManager {
		
		private $connection = null;
		private	$host = "localhost";
		private	$user = "root";
		private	$password = "";
		private	$db = "shop";
		
		public function openConnection() {
			if ($connection != null) {
				$connection->close();
			}
			$connection = mysql_connect($host, $user, $password);
			if (!$connection) {
				$connection = null;
			}
		}
				
		public function closeConnection() {
			if ($connection != null) {
				$connection->close();
			}
		}
		
		public function querySelect($querySql) {
			$result = $connection->query($querySql);
			return $result;
		}
		
	}

?>