<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reaction extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id')->withDefault();
    }

    public function question()
    {
        return $this->belongsTo(Question::class,'question_id')->withDefault();
    }


}
