<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    protected $fillable = ['title','author','date','content',];
    use HasFactory;
    protected $with = ['author','category'];

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    // 
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
