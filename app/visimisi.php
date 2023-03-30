<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class visimisi extends Model
{
    public $timestamps = false;
    protected $table ='visimisi';
    protected $fillable = ['visi','misi'];
}
