<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    protected $table = "tb_track";
    protected $primaryKey = 'track_id';
    protected $fillable = ['track_name', 'album_id', 'track_time', 'track_file'];

    public function Album(){
    	return $this->belongsTo('App\Album', 'album_id');
    }
}
