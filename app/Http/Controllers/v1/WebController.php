<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Models\CominSoon;
use App\Models\Notify;
use App\Models\User;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function comingSoon()
    {
        return view('welcome');
    }
    public function notify(Request $request)
    {
        $request->validate([
            'email' => 'required|email',

        ]);
        $user = new Notify;
        $user->email = $request['email'];
        $user->ip_adress = \Request::ip();
        $user->browser = $request->server('HTTP_USER_AGENT');
        $user->save();
        return back()->with('status', 1);
    }
    public function analyticData(Request $request)
    {
        $request->validate([
            'proffession' => 'required',
            'dob' => 'required'
        ]);

        $data = new CominSoon;

        $data->proffession = $request['proffession'];
        $data->dob = $request['dob'];
        $data->ip_address = \Request::ip();
        $data->browser = $request->server('HTTP_USER_AGENT');
        $data->save();
        session()->put('proff', 1);
        return back()->with('prof2', 1);
    }
}
