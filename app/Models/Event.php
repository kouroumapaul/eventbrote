<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Event extends Model
{
    protected $fillable = ['title','description','slug'];


    public function getRouteKeyName(){
    	return 'slug';
    }

    protected static function boot(){
    	parent::boot();

    	static::creating(function($event){
    		$event->slug = Str::slug($event->title,'-');
    	});
    }
}

