<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ExternalController extends Controller
{

    /**
     * Authenticate with json response, use for external auth
     *
     * @param Request $request
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function authenticate(Request $request)
    {
        $params = $request->only('email', 'password');
        if (Auth::once($params)) {
            return Auth::user();
        }

        return response(['error' => 'Invalid user.']);
    }
}
