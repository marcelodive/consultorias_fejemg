<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class University extends Model {

	//
	public function juniorEnterprises(){
		return $this->has_many('JuniorEnterprise');
	}
}
