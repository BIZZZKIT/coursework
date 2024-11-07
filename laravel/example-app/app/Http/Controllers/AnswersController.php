<?php

namespace App\Http\Controllers;

use App\Models\Answers;
use Illuminate\Http\Request;

class AnswersController extends Controller
{
    public function create(Request $request)
    {
        if (is_array($request->all())){
            foreach ($request->all() as $answerData) {
                Answers::create($answerData);
            }

            return response()->json([
                'message'=>'Ответы созданы'
            ]);
        }
    }
}
