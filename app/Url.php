<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Url extends Model
{
    protected $fillable = ['old_url', 'new_url', 'created_at', 'updated_at'];
}
