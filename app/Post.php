<?php

namespace App;

use PhpParser\Comment;

use App\User;
use Carbon\Carbon;

class Post extends Model
{
    public function comments()
    {
        return $this->hasMany(Comments::class);
    }

    public function addComments($comment)
    {
        $this->comments()->create($comment);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeFilter($query, $filter)
    {
        if (isset($filter['month'])) {
            $month=$filter['month'];
            $query->whereMonth('created_at', Carbon::parse($month)->month);
        }
        
        if (isset($filter['year'])) {
            $year = $filter['year'];
            $query->whereYear('created_at', $year);
        }
    }

    public static function archives()
    {
        return static::selectRaw('year(created_at) year, monthname(created_at) month,count(*) published')
        ->groupBy('year', 'month')
        ->orderByRaw('min(created_at) desc')
        ->get()
        ->toArray();
    }
}
