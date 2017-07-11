<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Status extends Model
{
	protected $guarded = [];

    protected $table = 'statuses';

	public function user () {
		return $this->belongsTo(User::class)->select(['id', 'name']);
	}
}
