<?php

	require_once("new_config.php");

	class Database {

		public $connection;

		function __construct() {
			$this->open_db_connection();
		}


		//opens the connection. called on construction 
		public function open_db_connection() {
			$this->connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
			if($this->connection->connect_errno) {
				die("Database connection failed! oh no!" . $this->connection->connect_error);
			}
		}


		//Executes query
		public function query($sql) {
			//$sanitised_sql = $this->escape_string($sql);
			$result = $this->connection->query($sql);
			$this->confirm_query($result);
			return $result;
		}

			//HELPER FUNCTION
			private function confirm_query($result) {
				if (!$result) {
					die("Query Failed!" . $this->connection->error);
				}
			}

		//Doesn't seem to actually do anything atm
		public function escape_string($string) {
			echo"String before: " . $string . "<br/>";
			$escaped_string = $this->connection->real_escape_string($string);
			echo"String after: " . $escaped_string . "<br/>";
			return $escaped_string;
		}


		public function the_insert_id() {
			return $this->connection->insert_id;
		}




	}

	$database = new Database();

?>