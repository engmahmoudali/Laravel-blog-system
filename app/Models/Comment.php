<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends BaseModel
{
    use HasFactory;

    protected $guarded = [];

    protected $hidden = ['deleted_at'];

    public $appends = ['date'];
    
    /**
     * Attribute for return an custom formate date.
     */
    public function getDateAttribute()
    {
        return $this->created_at->format('Y-m-d');
    }

}
