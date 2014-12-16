<?php
class Store extends Eloquent {
	public function food() {
        return $this->hasMany('Food');
    }
	
    public static function getIdNamePair() {
        $stores = Array();
        $collection = Store::where('user_id', '=', Auth::id())->get();
        foreach($collection as $store) {
            $stores[$store->id] = $store->store_name;
        }
        return $stores;
    }

        public function user() {
        return $this->belongsTo('User');
    }

}

