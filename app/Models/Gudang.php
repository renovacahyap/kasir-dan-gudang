<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gudang extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function personals()
    {
        return $this->hasMany(Personal::class);
    }

    public function pembelians() {
        return $this->belongsTo(Pembelian::class);
    }
}
