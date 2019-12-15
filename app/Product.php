<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;

class Product extends Model implements HasMedia
{
    use HasMediaTrait;
    use Sluggable;

    public $with = 'type';

    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

//    public function registerMediaConversions(Media $media = null)
//    {
//        $this->addMediaConversion('small')
//            ->width(320)
//            ->height(240);
//    }

    public function type()
    {
        return $this->belongsTo(Type::class, 'type_id');
    }
}
