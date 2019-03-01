<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Message extends Model
{
    use SoftDeletes;

    protected $fillable = ['message_type', 'rol_id_receiver', 'is_read', 'description', 'img_message'];
    protected $casts = ['is_read' => 'boolean'];
    protected $dates = ['deleted_at'];

    public function rolUser()
    {
        
    }

}
