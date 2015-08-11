<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class JuniorEnterprise extends Model {

	public function cities(){
		return $this->belong_to('city');
	}

}
