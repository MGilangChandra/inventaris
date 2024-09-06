<?php

namespace Modules\Barang\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Barang\Database\Factories\BarangFactory;
use Modules\BarangIn\Models\BarangIn;
use Modules\BarangOut\Models\BarangOut;
use Modules\KategoriBarang\Models\KategoriBarang;

class Barang extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'nama',
        'kategori_id',
        'jumlah',
        'deskripsi',
        'gambar',
        'status',
    ];

    public function kategori()
    {
        return $this->belongsTo(KategoriBarang::class, 'kategori_id');
    }

    public function barangIn()
    {
        return $this->hasMany(BarangIn::class);
    }

    public function incrementJumlah($jumlah)
    {
        $this->jumlah += $jumlah;
        $this->save();
    }

    public function barangOut()
    {
        return $this->hasMany(BarangOut::class);
    }

    public function decrementJumlah($jumlah)
    {
        $this->jumlah -= $jumlah;
        $this->save();
    }

    protected function casts(): array
    {
        return [
            'gambar' => 'array',
        ];
    }
}
