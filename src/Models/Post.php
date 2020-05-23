<?php

namespace doctype_admin\Blog\Models;

use App\User;
use Conner\Tagging\Taggable;
use doctype_admin\Blog\Models\Category;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use Taggable;
    
    protected $guarded =[];

    public function save(array $options = [])
    {
        // If no author has been assigned, assign the current user's id as the author of the post
        if (!$this->author_id && Auth::user()) {
            $this->author_id = Auth::user()->getKey();
        }

        return parent::save();
    }

    public function author()
    {
        return $this->belongsTo(User::class,'author_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
}