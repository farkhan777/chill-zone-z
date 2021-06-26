<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogTag extends Model
{
    use HasFactory;
    
    protected $guarded = [];
    public function blogtags(){
        return $this->hasMany(BlogTag::class);
    }
}
