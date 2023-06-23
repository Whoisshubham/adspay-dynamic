<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MessagesUser extends Model
{
    protected $table="messages_users";
    protected $fillable=[
        'mobile',
        'messages',
    ];
}
