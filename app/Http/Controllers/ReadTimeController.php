<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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
        $answer = ['a', 'c', 'a', 'a'];
        $incorrect = [];
        $correct = 0;
        foreach($answer as $i => $a) {
            $answered = isset($params['answer'. ($i + 1)]) ? $params['answer'. ($i + 1)] : '';
            if ($a == $answered ) { ;
                $correct++;
            } else {
                $incorrect['answer'. ($i + 1)] = $answered;
            }
        }
        if ($correct === count($answer)) {
            $readTime = $params['words'] / $params['time'];
            $user = Auth::user();
            $user->readtime = $readTime;
            $user->save();
            //todo save to user
            return view('success', ['time' => round($readTime)]);
        } else {
            $request->session()->flash('incorrect',  $incorrect);
            $request->session()->flash('message',  'You have incorrect answer');
            return back()->withInput();
        }

    }
}
