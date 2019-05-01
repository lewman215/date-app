<?php

class User {

	public $id;
	public $username;
	public $password;
	public $first_name;
	public $last_name;

	public static function instantiation($the_record) {
		$the_object = new self;
		foreach ($the_record as $attribute => $value) {
			if($the_object->has_attribute($attribute)) {
				$the_object -> $attribute = $value;
			}
		}
		return $the_object;
	}

	private function has_attribute($attribute) {
		$object_attributes = get_object_vars($this);
		return array_key_exists($attribute, $object_attributes);
	}

	public static function find_all_users() {
		// global $database;
		// $result_set = $database-> query("SELECT * FROM users");
		// return $result_set;
		return self::find_this_query("SELECT * FROM users");
	}

	public static function find_user($id) {
		global $database;
		$result = self::find_this_query("SELECT * FROM users WHERE id = $id LIMIT 1");
		// if(!empty($the_result_array)) {
		// 	$user = array_shift($result);
		// 	return $user;
		// }
		// else {
		// 	return false;
		// }
		return !empty($result) ? array_shift($result) : false;
	}

	public static function find_this_query($sql) {
		global $database;
		$result_set = $database->query($sql);
		$object_array = array();
		while ($row = mysqli_fetch_array($result_set)) {
			$object_array[] = self::instantiation($row);
		}
		$json = json_encode($object_array);
		return $object_array;
	}

	public static function object_to_json($object) {
		$json = json_encode($object);
		return $json;
	}

	public function print_details() {
		$details = $this->username . " (" . $this->first_name . " " . $this->last_name . ") <br/>";
		return $details;
	}

}

?>