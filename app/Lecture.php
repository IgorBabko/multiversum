<?php

namespace Multiversum;

use Illuminate\Database\Eloquent\Model;
use willvincent\Rateable\Rating;
use Auth;

class Lecture extends Model
{
    use Rateable;

    public function rate($rating)
    {
        $rating = new Rating;

        $rating->rating = $rating;
        $rating->user_id = Auth::id();

        $post->ratings()->save($rating);
    }
    
}
