<?php

namespace App\Models;

use App\Traits\HasUlid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ReviewCriteria extends Model
{
    use SoftDeletes, HasUlid, HasFactory;

    protected $fillable = [
        'review_id','review_template_id','criteria_name','score','comment'
    ];
    
    public function review() {
        return $this->belongsTo(Review::class);
    }

    public function template() {
        return $this->belongsTo(ReviewTemplate::class, 'review_template_id');
    }
}
