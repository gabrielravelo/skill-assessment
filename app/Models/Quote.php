<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'author',
        'quote'
    ];

    public function user()
    {
        return $this->belongsTo(User::class)->select(['name']);
    }

    public function checkAdded($quote, $author)
    {
        return $this->user->where([['quote', $quote], ['author', $author]])->first();
    }
}
