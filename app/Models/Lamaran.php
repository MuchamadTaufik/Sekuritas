<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lamaran extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function karir()
    {
        return $this->belongsTo(Karir::class);
    }

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class);
    }
    
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nomor_lamar'
            ]
        ];
    }
}

