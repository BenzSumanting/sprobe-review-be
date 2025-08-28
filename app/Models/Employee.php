<?php

namespace App\Models;

use App\Traits\HasUlid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use SoftDeletes, HasUlid, HasFactory;

    protected $fillable = [
        'name','email','position','hire_date','status'
    ];

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
