<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class InfoProduct extends Model {

	protected $table = 'info_products';
	// protected $fillable = ['rule_secret','rule_name','rule_description','rule','aggregate_rule','client_id','status','globally_enabled','all_employee','all_merchant','database_id'];
	protected $primaryKey  = 'id';

}
