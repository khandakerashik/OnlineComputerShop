<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    //protected $table = "user_table";
    protected $table = "products";
    protected $primaryKey = "id";
    public $timestamps = false;

    //const CREATED_AT = "create_time";
    //const UPDATED_AT = "updated_time";
}
