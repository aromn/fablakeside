<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    use HasFactory;

    protected $fillable = ["business_name", "business_category"];

    protected static function boot()
    {
    	parent::boot();
    	self::creating(function($table){
    		if ( ! app()->runningInConsole()){
    			$table->user_id = auth()->id();
    		}
    	});
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

}
