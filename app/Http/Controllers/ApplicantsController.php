<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Applicant;

class ApplicantsController extends Controller
{
    public function index()
    {
        $applicants = Applicant::with('course')->get();
        return response()->json($applicants);
    }
}
