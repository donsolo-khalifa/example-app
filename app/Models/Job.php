<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    // protected $fillable=['title','tags','company','location','email','website','description'];
    public function scopeFilter($query, array $filters){
        if ($filters['tag'] ?? false) {
            $query->where('tags', 'like', '%'.request('tag').'%');
        }
        if ($filters['search'] ?? false) {
            $query->where('title', 'like', '%'.request('search').'%')
            ->orwhere('description', 'like', '%'.request('search').'%')
            ->orwhere('tags', 'like', '%'.request('search').'%')
            ->orwhere('company', 'like', '%'.request('search').'%');
        }
    }
}
