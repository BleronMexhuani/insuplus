<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedBack extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function getUserFeedback(){
        return $this->hasOne(User::class,'id','user_id');
    }

}
