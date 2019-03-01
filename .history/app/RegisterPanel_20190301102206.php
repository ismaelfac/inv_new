<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class RegisterPanel extends Model
{
    use SoftDeletes;

    protected $fillable = ['rol_id', 'message_count', 'recommended_properties_count','ads_count', 'properties_count'];
    protected $casts = ['state_ad' => 'boolean'];
    protected $dates = ['deleted_at'];
}
