<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function gudangs() {
        return $this->hasMany(Gudang::class);
    }

    public function invoices() {
        return $this->hasMany(Invoice::class);
    }
}
