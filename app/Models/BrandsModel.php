<?php

namespace App\Models;

use Illuminate\Support\Facades\Cache;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BrandsModel extends Model
{
    use HasFactory;
    protected $table = 'brands';
    protected $fillable = ['brand_name', 'status'];

    public function products(){
        return $this->hasMany(ProductModel::class,);
    }

    public static function get_brands(){
        return Cache::remember('_brandsData', now()->addHour(4), function () {
            return BrandsModel::orderBy('id','desc')->get();
       });
    }

    public static function forget_cache(){
       return  Cache::forget('_brandsData');
    }


    public static function boot(){
        parent::boot();

        static::created(function(){
            self::forget_cache();
        });
        static::updated(function(){
            self::forget_cache();
        });
        static::deleted(function(){
            self::forget_cache();
        });
    }
}
