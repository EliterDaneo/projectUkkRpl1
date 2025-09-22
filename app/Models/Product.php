<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use League\Uri\Contracts\UserInfoInterface;

class Product extends Model
{
    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
