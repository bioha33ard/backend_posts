<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static findOrFail(int $id)
 */
class Category extends Model
{
    use HasFactory;


    public function posts()
    {
        return $this->belongsToMany(Posts::class, 'category_posts','category_id','post_id');
    }
}
