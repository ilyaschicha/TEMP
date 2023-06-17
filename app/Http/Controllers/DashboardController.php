<?php

namespace App\Http\Controllers;

use App\Models\Patients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard()
    {
        // || !Auth::guard('patient')->check() || !Auth::guard('assistant')->check() || !Auth::guard('dentist')->check()
        // if (!Auth::guard('administrator')->check()) {
        //     return redirect('/admin/login');
        // } else {
            $patients = Patients::paginate(7);
            return view('dashboardpages.Dashboard',compact('patients'));
        // }

    }
}
