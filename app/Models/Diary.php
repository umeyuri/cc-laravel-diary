<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diary extends Model
{
    use HasFactory;
    
    public $fillable = ['user_id', 'title', 'log'];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
