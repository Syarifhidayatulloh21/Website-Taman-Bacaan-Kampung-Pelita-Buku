<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tingkatekonomi extends Model
{
    public $timestamps = false;
    protected $table ='tingkatekonomi';
    protected $fillable = ['jumlah','keterangan'];
}
