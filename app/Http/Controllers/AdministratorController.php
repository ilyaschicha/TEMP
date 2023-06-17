<?php
namespace App\Http\Controllers;

use App\Models\Assistante;
use App\Models\Dentiste;
use App\Models\Patients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdministratorController extends Controller {
    public function loginForm() {
        if (Auth::guard('administrator')->check()) {
            return redirect('/dash');
        }
        return view('login');
    }

    public function login(Request $request) {
        $credentials = $request->only('email_admin', 'password');
        if (Auth::guard('administrator')->attempt($credentials)) {
            // Authentication passed
            return redirect('/dash');
        }

        // Authentication failed
        return back()->withErrors(['message' => 'Invalid credentials']);
    }

    public function logout() {
        Auth::guard('administrator')->logout();
        return redirect('/admin/login');
    }

    public function createDentist(Request $request) {
        // Ensure only administrators can access this method
        if (!Auth::guard('administrator')->check()) {
            abort(403, 'Unauthorized');
        }

        // Validate the request data
        $validatedData = $request->validate([
            'nom_dent' => 'required|string',
            'prenom_dent' => 'required|string',
            'tel_dent' => 'required|string',
            'email_dent' => 'required|email|unique:dentiste',
            'password' => 'required|min:8',
            'ville' => 'required|string',
            'adresse' => 'required|string',
        ]);

        // Create the dentist
        Dentiste::create($validatedData);

        // Redirect or return a response as needed
        return redirect()->back()->with('success', 'Dentist created successfully');
    }

    public function createAssistant(Request $request) {
        // Ensure only administrators can access this method
        if (!Auth::guard('administrator')->check()) {
            abort(403, 'Unauthorized');
        }

        // Validate the request data
        $validatedData = $request->validate([
            'nom_dent' => 'required|string',
            'prenom_dent' => 'required|string',
            'tel_dent' => 'required|string',
            'email_dent' => 'required|email|unique:dentiste',
            'password' => 'required|min:8',
            'ville' => 'required|string',
            'adresse' => 'required|string',
        ]);

        // Create the dentist
        Assistante::create($validatedData);

        // Redirect or return a response as needed
        return redirect()->back()->with('success', 'Assistant created successfully');
    }

    public function createPatient(Request $request) {
        // Ensure only administrators can access this method
        if (!Auth::guard('administrator')->check()) {
            abort(403, 'Unauthorized');
        }

        // Validate the request data
        $validatedData = $request->validate([
            'nom_dent' => 'required|string',
            'prenom_dent' => 'required|string',
            'tel_dent' => 'required|string',
            'email_dent' => 'required|email|unique:dentiste',
            'password' => 'required|min:8',
            'ville' => 'required|string',
            'adresse' => 'required|string',
        ]);

        // Create the dentist
        Patients::create($validatedData);

        // Redirect or return a response as needed
        return redirect()->back()->with('success', 'Patient created successfully');
    }
}
