<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Table name
    protected $table = 'posts';
    //primary key
    public $primaryKey = 'id';
    //Timestamps
    public $timestamps = true;

    protected $fillable = [
        'user_id',
        'title',
        'body',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
