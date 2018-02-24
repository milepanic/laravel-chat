<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
	protected $fillable = ['body', 'reciever_id'];
	
    public function user() {
    	return $this->belongsTo(User::class);
    }
}
