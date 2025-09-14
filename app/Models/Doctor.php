<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'image', 'nama', 'keahlian', 'slug', 'poli',
    'lulusansatu', 'lulusankedua', 'lulusanketiga', 'jadwalsatu', 'jadwalkedua', 'jadwalketiga', 'link'];

    public function scopeFilter(Builder $query): void
    {
        $query->where('nama', 'like', '%' . request('search') . '%')
        ->orWhere('poli', 'like', '%' . request('search') . '%');
    }
}
