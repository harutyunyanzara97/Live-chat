<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Message extends Model
{
    use HasFactory;
    protected $fillable = [
        "body"
    ];
    protected $appends = ['myMessage'];

    public function getMyMessageAttribute()
    {
        return $this->user_id === Auth::id();
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
