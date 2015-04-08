<?php
namespace Api\Models;
use \Illuminate\Database\Eloquent\Model as EloquentModel;

class Chamado extends EloquentModel {
	protected $table = 'chamado';

	public function User() {
		return $this->hasOne('User','id', 'requested_by');
	}
}