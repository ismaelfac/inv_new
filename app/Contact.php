<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name', 'email', 'message'
    ];
    protected $dates = ['deleted_at'];

    public function scopeCity($query, $city)
    {
        if (trim($city) != "") {
            $query->where('city', 'LIKE', '%' . $city . '%');
        }
    }
    public function scopeAddress($query, $address)
    {
        if (trim($address) != "") {
            $query->where('address', 'LIKE', '%' . $address . '%');
        }
    }
    public static function searchCLient(array $parameters)
    {
        $cgeClients = Property::query()->with('relations')->paginate(5);
        return $cgeClients;
    }
}
