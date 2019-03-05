<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

use App\{ MethodsBase, Message, Ad, AdFavorite };
class RegisterPanel extends Model
{
    use MethodsBase, SoftDeletes;

    protected $fillable = ['rol_id', 'message_count', 'recommended_properties_count','ads_count', 'properties_count'];
    protected $casts = ['state' => 'boolean'];
    protected $dates = ['deleted_at'];

    public function messages()
    {
        return $this->belongsToMany(Message::class);
    }

    public function ads()
    {
        return $this->belongsToMany(Ad::class);
    }

    public function adFavorits()
    {
        return $this->belongsToMany(AdFavorite::class);
    }
    public static function getSessionClient()
    {
        return self::getPermissionsInModel('parameters');
    }
}
