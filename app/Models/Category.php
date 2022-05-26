<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'image', 'description'];

    public function menus()
    {
        return $this->belongsToMany(Menu::class, 'category_menu');
    }
}
