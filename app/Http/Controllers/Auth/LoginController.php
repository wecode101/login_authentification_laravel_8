<?php


namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class LoginController extends Controller
{

    /**
     *
     * @return View
     */
    public function showLoginForm(): View
    {
        return view('auth/login');
    }

    /**
     *
     * @param LoginRequest $request
     * @return RedirectResponse
     */

    public function processLogin(LoginRequest $request): RedirectResponse
    {
        $credentials = $request->except(['_token']);

        if (auth()->attempt($credentials)) {
            return redirect()->route('home');
        }else{
            session()->flash('error', 'Invalid credentials');
            return redirect()->route('login');
        }
    }
}
