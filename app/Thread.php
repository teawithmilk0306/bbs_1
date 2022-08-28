<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    protected $fillable = [
        'title', 'body',
    ];
    
    //よそのテーブルからデータをひっぱってくる際は、モデルにリレーションを定義する。
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}