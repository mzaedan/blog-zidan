<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $with = ['category','user'];

    public function scopeFilter($query, array $filters)
    {
        // if(isset($filters['search']) ? $filters ['search'] : false) {
        //     return $query->where('title', 'like', '%' . $filters['search']. '%')
        //         ->orWhere('body', 'like', '%'. $filters['search']. '%');
        // }

        $query->when($filters['search'] ?? false, function($query, $search) {

            return $query->where('title', 'like', '%' .$search . '%')
                        ->orWhere('body', 'like', '%'. $search . '%');

        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
