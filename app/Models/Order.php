<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'code',
        'slug',
        'name',
        'email',
        'phone',
        /*'flavors',
        'toppings',*/
        'description',
        'total',
    ];

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * Set the categories
     *
     */
    /*public function setFlavorsAttribute($value)
    {
        $this->attributes['flavors'] = json_encode($value);
    }
    public function setToppingsAttribute($value)
    {
        $this->attributes['toppings'] = json_encode($value);
    }*/

    /**
     * Get the categories
     *
     */
    /*public function getFlavorsAttribute($value)
    {
        return $this->attributes['flavors'] = json_decode($value);
    }
    public function getToppingsAttribute($value)
    {
        return $this->attributes['toppings'] = json_decode($value);
    }*/

    public function productos()
    {
        return $this->belongsToMany(Product::class)->withTimestamps();
    }
}
