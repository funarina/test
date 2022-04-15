<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'body',
    ];
    
    public function getPaginateByLimit()
    {
        return $this->orderBy('updated_at', 'DESC')->paginate(5);
    }
}
