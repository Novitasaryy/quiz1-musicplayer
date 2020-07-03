<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = "tb_album";
    protected $primaryKey = 'album_id';
    protected $fillable = ['album_name', 'artist_id'];

    public function Artist(){
    	return $this->belongsTo('App\Artist', 'artist_id');
    }
}
