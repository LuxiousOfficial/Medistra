<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Search extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'image', 'name', 'slug', 'kriteria', 'booking'];

    public function scopeFilter(Builder $query, array $filters): void 
    {
        if($filters['search'] ?? false ) {

            $query->where('name', 'like', '%' . request('search') . '%')
            ->orWhere('kriteria', 'like', '%' . request('search') . '%');
        }
    }
}
