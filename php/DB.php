<?
	include("DBManager.php");
	
	class DB {
		
		private function resultToArray($result) {
			$res_array = array();
			$count = 0;
			while($row = $result->fetch_assoc()) {
				$res_array[$count] = $row;
				$count++;
			}
			return $res_array;
		}
		
		public function getCars() {
			$querySQL = "select id, title, image1, price from product";
			$dbManager = new DBManager();
			$dbManager->openConnection();
			$resultArray = $this->resultToArray($dbManager->querySelect($querySQL));
			$dbManager->closeConnection();	
			return $resultArray;
		}
		
		public function getCar($id) {
			$querySQL = "select * from product where id=" . $id;
			$dbManager = new DBManager();
			$dbManager->openConnection();
			$resultArray = $this->resultToArray($dbManager->querySelect($querySQL));
			$dbManager->closeConnection();	
			return $resultArray;
		}
		
	}

?>