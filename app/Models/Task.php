<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Task extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'board_id',
        'slug',
        'title',
        'comments',
        'badge_text',
        'badge',
        'due_date',
        'status',
        'position'
    ];

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    // Relasi ke Board
    public function board()
    {
        return $this->belongsTo(Board::class);
    }

    // Relasi ke AssignedUsers
    public function assignedUsers()
    {
        return $this->hasMany(AssignedUser::class);
    }

    // // Relasi ke Comments
    // public function comments()
    // {
    //     return $this->hasMany(Comment::class);
    // }

    // // Relasi ke Attachments
    // public function attachments()
    // {
    //     return $this->hasMany(Attachment::class);
    // }
}
