<?php
class Person extends Eloquent {
	public function food() {
        return $this->hasMany('Food');
    }

	public static function getIdNamePair() {
		$persons = Array();
		$collection = Person::where('user_id', '=', Auth::id())->get();
		foreach($collection as $person) {
			$persons[$person->id] = $person->name;
		}
		return $persons;
	}
	
	    public function user() {
    	return $this->belongsTo('User');
    }

}

