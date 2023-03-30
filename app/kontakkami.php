<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kontakkami extends Model
{
    public $timestamps = false;
    protected $table ='kontakkami';
    protected $fillable = ['alamat','notlp','instagram','email'];
}
