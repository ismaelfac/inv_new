<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class RegisterPanel extends Model
{
    use SoftDeletes;

    protected $fillable = ['rol_id', 'message_count', 'state_ad'];
    protected $casts = ['state_ad' => 'boolean'];
    protected $dates = ['deleted_at'];
}
