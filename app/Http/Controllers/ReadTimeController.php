<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ReadTimeController extends Controller
{
    public function index(Request $request)
    {
        $params = $request->only(['words', 'user']);
        try {
            $result = User::find($params['user']);
            if ($result) {
                return response(['minute' => $result->readtime], 200);
            }
            return response(['error' => 'No user found.'], 200);
        } catch (QueryException $e) {
            return response(['error' => $e->getMessage()], 400);
        }
    }

    public function validateAnswer(Request $request)
    {
        $params = $request->all();
        var_dump($params);
        $answer = [1, 3, 2];
        $correct = 0;
        foreach($answer as $i => $a) {
            if ((int)$a === (int)$params['answer'. ($i + 1)]) { ;
                $correct++;
            }
        }
        if ($correct === count($answer)) {
            $readTime = $params['words'] / $params['time'];
            var_dump($readTime);
            var_dump(\Session::all());
            //todo save to user

            return view('success', ['time' => round($readTime)]);
        } else {
            return back()->withInput();
        }

    }
}
