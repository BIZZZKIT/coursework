<?php

namespace App\Http\Controllers;

use App\Models\Questions;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    public function get(Request $request)
    {
        $questions = Questions::with('answers')->get();
        return response()->json([
           'questions' => $questions
        ]);
    }
}
