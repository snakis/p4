<?php
class Store extends Eloquent {
	public function book() {
        # Author has many Books
        # Define a one-to-many relationship.
        return $this->hasMany('Food');
    }
	
}