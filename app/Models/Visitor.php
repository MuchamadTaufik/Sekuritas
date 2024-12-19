<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Visitor extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    
    protected $casts = [
        'visited_at' => 'datetime',
        'is_unique' => 'boolean'
    ];

    // Scope untuk filter pengunjung unik
    public function scopeUnique($query)
    {
        return $query->where('is_unique', true);
    }

    // Scope untuk filter berdasarkan periode
    public function scopeTimePeriod($query, $startDate, $endDate)
    {
        return $query->whereBetween('visited_at', [
            Carbon::parse($startDate)->startOfDay(),
            Carbon::parse($endDate)->endOfDay()
        ]);
    }
}
