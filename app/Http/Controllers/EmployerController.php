<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    public function index()
    {
        $employers = Employer::all();
        return view('companies', [
            'employers' => $employers
        ]);
    }

    public function show(Employer $employer)
    {
        return view('employer-show', [
            'employer' => $employer
        ]);
    }
}
