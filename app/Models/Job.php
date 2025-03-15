<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Job extends Model
{
    /** @use HasFactory<\Database\Factories\JobFactory> */
    use HasFactory;

    public function tag(string $name){
        $tag = Tag::firstOrCreate(['name' => $name]);
        $this->tags()->attach($tag);

    }

    public function tags(){
        return $this->BelongsToMany((Tag::class));
    }

    public function employee()
    {
        return $this->BelongsTo(Employee::class);
    }
}
