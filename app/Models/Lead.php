<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\User;


class Lead extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function getAssignedAgent(){
        return $this->hasOne(User::class,'id','assign_to_id_call');
    }
 
    
}
