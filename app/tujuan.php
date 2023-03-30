<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tujuan extends Model
{
    public $timestamps = false;
    protected $table ='tujuan';
    protected $fillable = ['judul','isi'];
}
