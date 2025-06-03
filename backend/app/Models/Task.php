<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use ApiPlatform\Metadata\ApiResource;
use App\Enums\TaskStatus;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[ApiResource]
class Task extends Model
{
    /** @use HasFactory<\Database\Factories\TaskFactory> */
    use HasFactory;

    protected $casts = [
        'status' => TaskStatus::class,
    ];

    protected $with = 'categories';


    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
	
    }
}
