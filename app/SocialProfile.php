<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class SocialProfile extends Model
{
    protected $fillable = ['user_id','social_id','social_name','social_avatar'];

    public function user()
    {
        return $this->belongTo(User::Class);
    }
}
