<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DentistController extends Controller {
    public function loginForm() {
        if (Auth::guard('dentiste')->check()) {
            return redirect('/dash');
        }
        return view('login');
    }

    public function login(Request $request) {
        $credentials = $request->only('email_dent', 'password');

        if (Auth::guard('dentiste')->attempt($credentials)) {
            // Authentication passed
            return redirect('/dash');
        }

        // Authentication failed
        return back()->withErrors(['message' => 'Invalid credentials']);
    }

    public function logout() {
        Auth::guard('dentiste')->logout();
        return redirect('/dentiste/login');
    }
}
