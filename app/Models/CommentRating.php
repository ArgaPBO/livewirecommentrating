<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentRating extends Model
{
    use HasFactory;
    protected $fillable = ['nama','comment','rating'];
    protected $table = 'commentrating';
}
