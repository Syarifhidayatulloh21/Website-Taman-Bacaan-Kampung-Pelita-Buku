<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class program extends Model
{
    public $timestamps = false;
    protected $table ='program';
    protected $fillable = ['judul','isi'];
}
