<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class category extends Model
{
    use Sluggable;
    
    protected $table = 'categories';

    protected $fillable = ['name', 'slug', 'parent_id'];
    
    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function parent()
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeGetParent($query)
    {
        return $query->whereNull('parent_id');
    }

    public function child()
    {
        //MENGGUNAKAN RELASI ONE TO MANY DENGAN FOREIGN KEY parent_id
        return $this->hasMany(Category::class, 'parent_id');
    }
}
