<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdFavorite extends Model
{
    use SoftDeletes;

    protected $fillable = ['rol_id_transmitter', 'title', 'description', 'state_ad', 'ad_type', 'observations_ad', 'is_private'];
    protected $casts = ['is_private' => 'boolean'];
    protected $dates = ['deleted_at'];
}
