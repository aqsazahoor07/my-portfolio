<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
        'reply',
        'replied_at',
        'is_read',
        'is_replied'
    ];

    protected $casts = [
        'replied_at' => 'datetime',
        'is_read' => 'boolean',
        'is_replied' => 'boolean',
    ];
}