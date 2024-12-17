<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Board extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'slug',
        'title',
        'position',
        'created_by',
        'title',
    ];

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    public function creator()
    {
        return $this->belongsTo(Member::class, 'created_by');
    }

    public function boardUsers()
    {
        return $this->hasMany(BoardUser::class);
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
