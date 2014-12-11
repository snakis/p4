<?php
class Store extends Eloquent {
	public function book() {
        return $this->hasMany('Food');
    }
	
    public static function getIdNamePair() {
        $stores = Array();
        $collection = Store::all();
        foreach($collection as $store) {
            $stores[$store->id] = $store->store_name;
        }
        return $stores;
    }
}

