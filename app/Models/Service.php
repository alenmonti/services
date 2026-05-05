<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'professional_id',
        'title',
        'description',
        'price',
        'image',
        'visible',
    ];

    protected $casts = [
        'visible' => 'boolean',
        'price' => 'decimal:2',
    ];

    public function professional()
    {
        return $this->belongsTo(Professional::class);
    }
}
