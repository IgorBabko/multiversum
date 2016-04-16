<?php

namespace Multiversum;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\Model;
use Sofa\Eloquence\Eloquence;
use willvincent\Rateable\Rating;

class Post extends Model implements SluggableInterface
{
    use SluggableTrait, Eloquence;

    protected $dates = ['published_at'];

    protected $sluggable = [
        'build_from' => 'name',
        'save_to'    => 'slug',
    ];

    protected $guarded = [];

    protected $searchableColumns = ['name', 'content'];

    /**
     * Get the category that owns the post.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * The tags that belong to the post.
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    /**
     * Fetch top rated posts.
     *
     * @param $query
     * @param int $take
     *
     * @return Collection
     */
    public function scopeTopRated($query, $take = 10)
    {
        return $query->orderBy('rating', 'desc')->take($take)->get();
    }

    public function rate($rating)
    {
        $rating = new Rating;

        $rating->rating = $rating;
        $rating->user_id = Auth::id();

        $post->ratings()->save($rating);
    }
 
}
