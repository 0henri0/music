<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AlbumSinger extends Model
{
    protected $table = 'album_singers';
    protected $primaryKey = 'id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'singer_id', 'avatar',
    ];

    public function singer()
    {
        return $this->belongsTo('App\Models\Singer');
    }
}
