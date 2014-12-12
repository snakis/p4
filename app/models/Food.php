<?php

class Food extends Eloquent { 

    public function store() {
        return $this->belongsTo('Store');
    }

    public function person() {
        return $this->belongsTo('Person');
    }

}
	
