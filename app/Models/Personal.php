<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;
    protected $guarded = ['id'];


    public function gudangs() {
        return $this->belongsTo(Gudang::class);
    }

    public function tokos(){
        return $this->hasMany(Toko::class);
    }

    public function users() {
        return $this->hasMany(User::class);
    }

    public function position(){
        return $this->hasMany(Position::class);
    }



}
