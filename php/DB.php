<?
	include("DBManager.php");
	
	class DB {
		
		private function resultToArray($result) {
			$res_array = array();
			$count = 0;
			while($row = mysql_fetch_array($result)) {
				$res_array[$count] = $row;
				$count++;
			}
			return $res_array;
		}
		
		public function getCars() {
			$querySQL = "";
			$dbManager = new DBManager();
			$dbManager->openConnection();
			$resultArray = resultToArray($dbManager->querySelect($querySQL));
			$dbManager->closeConnection();	
			return $resultArray;
		}
		
	}

?>