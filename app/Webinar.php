<?php

namespace Multiversum;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Embed;
use Illuminate\Database\Eloquent\Model;
use Sofa\Eloquence\Eloquence;

class Webinar extends Model implements SluggableInterface
{
    use SluggableTrait, Eloquence;

    protected $dates = ['published_at'];

    protected $sluggable = [
        'build_from' => 'name',
        'save_to'    => 'slug',
    ];

    protected $searchableColumns = ['name', 'description'];

    protected $guarded = [];

    public function getIframeAttribute()
    {
        return Embed::make('https://youtu.be/' . $this->youtube_id)->parseUrl()->getHtml();
    }

    public function getThumbnailAttribute()
    {
        return 'http://img.youtube.com/vi/' . $this->youtube_id . '/0.jpg';
    }
}
