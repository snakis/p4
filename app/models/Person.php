<?php
class Person extends Eloquent {
	public function food() {
        return $this->hasMany('Food');
    }

	public static function getIdNamePair() {
		$persons = Array();
		$collection = Person::all();
		foreach($collection as $person) {
			$persons[$person->id] = $person->name;
		}
		return $persons;
	}
	
}

