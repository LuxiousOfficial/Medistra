<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pasien extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'email', 'nik', 'jeniskelamin', 'tanggallahir', 'alamat', 'nohp',
    'keterangan', 'poli', 'dokter', 'jadwal'];

    public function scopeFilter(Builder $query, array $filters): void 
    {
        if($filters['search'] ?? false ) {

            $query->where('nama', 'like', '%' . request('search') . '%')
            ->orWhere('email', 'like', '%' . request('search') . '%')
            ->orWhere('nik', 'like', '%' . request('search') . '%')
            ->orWhere('poli', 'like', '%' . request('search') . '%')
            ->orWhere('dokter', 'like', '%' . request('search') . '%')
            ->orWhere('jadwal', 'like', '%' . request('search') . '%');
        }
    }
}
