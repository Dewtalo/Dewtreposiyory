<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;
    

//生徒に対するリレーション
public function users(){
    //1つの科目を多数の生徒が履修。
    return $this->belongsToMany(User::class);
}
}
