<?php

namespace App\Models;

use App\Traits\HasUlid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ReviewTemplate extends Model
{
    use SoftDeletes, HasUlid, HasFactory;

    protected $fillable = [
        'template_name',
        'description'
    ];

     public function criterias() {
        return $this->hasMany(ReviewCriteria::class);
    }
}
