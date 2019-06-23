<?php

class Date {

	public $id;
	public $title;
	public $relationship;
	public $description;
	public $cost;
	public $time;

	public static function instantiation($the_record) {
		$the_object = new self;
		foreach ($the_record as $attribute => $value) {
			if($the_object->has_attribute($attribute)) {
				$the_object -> $attribute = $value;
			}
		}
		return $the_object;
	}

	public static function add_date($title, $description, $maxCost, $maxTime) {
		return self::find_this_query("INSERT INTO dates (description, title, cost, time) VALUES ('$description', '$title', '$maxCost', '$maxTime')");
	}

	public static function find_all_dates() {
		return self::find_this_query("SELECT * FROM dates");
	}

	public static function find_date($id) {
		$result = self::find_this_query("SELECT * FROM dates WHERE id = $id LIMIT 1");
		return !empty($result) ? array_shift($result) : false;
	}

	public function print_details() {
		$details = $this->title . " (" . $this->description . " " . $this->cost . ") <br/>";
		return $details;
	}



// Helper Methods
	private function has_attribute($attribute) {
		$object_attributes = get_object_vars($this);
		return array_key_exists($attribute, $object_attributes);
	}

	public static function find_this_query($sql) {
		global $database;
		$result_set = $database->query($sql);
		if ($result_set === TRUE) {
			return "nothing to report, successful insert";
		}
		else {
		$object_array = array();
		while ($row = mysqli_fetch_array($result_set)) {
			$object_array[] = self::instantiation($row);
		}
		$json = json_encode($object_array);
		return $object_array;
		}
	}

	public static function object_to_json($object) {
		$json = json_encode($object);
		return $json;
	}


}

?>