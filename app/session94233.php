<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class session94233 extends Model
{
    public $table ='sessions94233';
    public function user(){
    	return $this->belongsTo('App\User');
    }
}
