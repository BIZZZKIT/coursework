<?php

namespace App\Models;

use App\Models\Answers;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    protected $table = 'questions';

    protected $fillable = ['questionText'];

    public function answers()
    {
        return $this->hasMany(Answers::class, 'question_id');
    }

    use HasFactory;
}
