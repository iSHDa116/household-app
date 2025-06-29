<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Expense extends Model
{
    use HasFactory;

    //[]の中に書いたカラムだけ保存する
    protected $fillable = [

        "user_id",
        "data",
        "item",
        "amount",
    ];
}
