<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\MakeLoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class LoginController extends Controller
{
    public function index(): View
    {
        return view('auth.login');
    }

    public function login(MakeLoginRequest $request): RedirectResponse
    {
        if ($request->attempt()) {
            return to_route('dashboard');
        }

        // Returns to the page it called and saves a message in the session
        return back()->with(['message' => 'não encontrado']);
    }
}
