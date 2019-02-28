<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['message_type', 'rol_id_receiver', 'is_read', 'description', 'img_message'];
    protected $casts = ['is_read' => 'boolean'];

    
}
