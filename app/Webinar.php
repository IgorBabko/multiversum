<?php

namespace Multiversum;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Embed;
use Illuminate\Database\Eloquent\Model;

class Webinar extends Model implements SluggableInterface
{
    use SluggableTrait;

    protected $dates = ['published_at'];

    protected $sluggable = [
        'build_from' => 'name',
        'save_to'    => 'slug',
    ];

    protected $guarded = [];

    public function getIframeAttribute()
    {
        return Embed::make($this->url)->parseUrl()->getHtml();
    }
}
