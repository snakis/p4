<?php

class Food extends Eloquent { 

    public function author() {
        # Book belongs to Author
        return $this->belongsTo('Store');
    }

    public function tags() {
        # Books belong to many Tags     
        return $this->belongsTo('Person');
    }

}
	
