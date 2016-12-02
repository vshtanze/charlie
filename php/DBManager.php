<?
		
	class DBManager {
		
		private $connection = null;
		private	$host = "localhost";
		private	$user = "nikita";
		private	$password = "10061996";
		private	$db = "carshop";
		
		public function openConnection() {
			if ($this->connection != null) {
				$this->connection->close();
			}
			$this->connection = new mysqli($this->host, $this->user, $this->password, $this->db);
			if ($this->connection->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			} 
		}
				
		public function closeConnection() {
			if ($this->connection != null) {
				$this->connection->close();
			}
		}
		
		public function querySelect($querySql) {
			$result = $this->connection->query($querySql);
			return $result;
		}
		
	}

?>