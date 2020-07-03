<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Played extends Model
{
    protected $table = "tb_played";
    protected $primaryKey = 'play_id';
    protected $fillable = ['track_id', 'play_date'];

    public function Track(){
    	return $this->belongsTo('App\Track', 'track_id');
    }
}
