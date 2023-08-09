<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
 
    protected $fillable = [
        'name',
        'desc',
    ];
    // public function subcategories(){
    //     return $this->belongsToMany(Category::class , 'subcategory', 'parent_id', 'subcategory_id');
    //      return $this->belongsToMany(Subcategory::class, 'product');
    // }

    public function subcategories()
    {
        return $this->belongsToMany(Category::class, 'subcategories', 'subcategory_id', 'parent_id');
    }

    // public function friends()
    // {
    //     return $this->belongsToMany(User::class, 'friends', 'user_id', 'friend_id');
    // }


}
