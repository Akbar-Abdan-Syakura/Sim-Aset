<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthenticateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        $data = [
            "title" => "Login"
        ];
        return view('auth.login', $data);
    }

    public function authenticate(AuthenticateRequest $request): RedirectResponse
    {
        if (Auth::attempt($request->only("email", "password"))) {
            $request->session()->regenerate();

            if (Auth::user()->role->name == "branch") {
                return redirect()->intended('/pengajuan');
            }

            return redirect()->intended('/');
        }

        return back()->with('failed', 'Username or password is invalid')->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route("auth.login");
    }
}
