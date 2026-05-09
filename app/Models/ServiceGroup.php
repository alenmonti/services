<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceGroup extends Model
{
    use HasFactory;

    protected $fillable = [
        'professional_id',
        'title',
        'description',
        'image',
    ];

    public function professional()
    {
        return $this->belongsTo(Professional::class);
    }

    public function services()
    {
        return $this->hasMany(Service::class);
    }
}
