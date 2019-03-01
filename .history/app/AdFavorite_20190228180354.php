<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdFavorite extends Model
{
    use SoftDeletes;

    protected $fillable = ['rol_id_receiver', 'ad_id', 'state_ad'];
    protected $casts = ['state_ad' => 'boolean'];
    protected $dates = ['deleted_at'];
}
