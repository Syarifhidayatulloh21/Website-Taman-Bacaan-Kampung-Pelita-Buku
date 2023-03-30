<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class galeri extends Model
{
    public $timestamps = 'false';
    protected $table = 'galeri';
    protected $fillable = ['namafoto','keterangan','image'];
}
