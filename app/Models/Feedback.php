<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $table = 'feedbacks';  // ← Yeh line add karein

    protected $fillable = [
        'name',
        'email',
        'comment',
        'rating',
        'is_approved'
    ];

    protected $casts = [
        'is_approved' => 'boolean',
    ];
}