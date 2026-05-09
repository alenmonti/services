<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professional extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'bio',
        'contact',
    ];

    public function services()
    {
        return $this->hasMany(Service::class);
    }

    public function serviceGroups()
    {
        return $this->hasMany(ServiceGroup::class);
    }
}
