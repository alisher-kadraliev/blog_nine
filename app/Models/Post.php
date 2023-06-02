<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @method static firstOrCreate(mixed $data)
 */
class Post extends Model
{
    use SoftDeletes;
    protected  $guarded = false;
    protected $table = 'posts';
    use HasFactory;
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'post_tags', 'post_id', 'tag_id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function likedUsers()
    {
        return  $this->belongsToMany(User::class, 'post_user_likes', 'post_id', 'user_id');
    }

    public function comment()
    {
return $this->hasMany(Comment::class,'post_id','id');
    }
    protected $withCount = ['likedUsers'];
    protected $with = ['category', 'tags'];
}
