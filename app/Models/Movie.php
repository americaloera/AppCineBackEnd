<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $table = "movies";
    public $timestamps = true;
    protected $primaryKey = 'id';
    protected $fillable=['id', 'movie_name', 'duration', 'synopsis', 'director_id', 'category_id', 'image'];

    public function director()
    {
        return $this->belongsTo(Director::class);
    }
 
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
