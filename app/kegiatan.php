<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kegiatan extends Model
{
    public $timestamps = false;
    protected $table ='kegiatan';
    protected $fillable = ['kegiatan','pelaksanaan','keterangan'];

}
