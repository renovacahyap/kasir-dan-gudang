<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;
    protected $guarded = ['id'];


    public function gudang() {
        return $this->hasMany(Gudang::class);
    }

    public function toko(){
        return $this->belongsTo(Toko::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function position(){
        return $this->belongsTo(Position::class);
    }



}
