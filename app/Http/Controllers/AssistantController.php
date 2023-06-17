<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Assistant;
use Illuminate\Support\Facades\Auth;

class AssistantController extends Controller
{
    public function loginForm()
    {
        if (Auth::guard('assistant')->check()) {
            return redirect('/dash');
        }
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email_assist', 'password');

        if (Auth::guard('assistant')->attempt($credentials)) {
            // Authentication passed
            return redirect('/dash');
        }

        // Authentication failed
        return back()->withErrors(['message' => 'Invalid credentials']);
    }

    public function logout()
    {
        Auth::guard('assistant')->logout();
        return redirect('/assistant/login');
    }
}
