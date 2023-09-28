<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'total_harga',
        'user_id',
        'toko_id'
    ];

    // protected $guarded = ['id'];


    public function pembelians() {
        return $this->belongsTo(Pembelian::class);
    }


    public function scopeToko($query, $idtoko) {
        return $query->where('toko_id',$idtoko);
    }
}
