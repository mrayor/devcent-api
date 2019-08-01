<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Applicant;
use Validator;

class ApplicantsController extends Controller
{
    public function index()
    {
        $applicants = Applicant::with('course')->get();
        return response()->json($applicants);
    }
    public function enroll(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'payment_mode' => 'required',
            'course_id' => 'required'
        ]);

        if ($validator->fails()) {

            $response = array('response' => $validator->messages(), 'success' => false);
            return $response;
        } else {
            $applicant = new Applicant;
            $applicant->first_name = $request->input('first_name');
            $applicant->last_name = $request->input('last_name');
            $applicant->email = $request->input('email');
            $applicant->payment_mode = $request->input('payment_mode');
            $applicant->course_id = $request->input('course_id');
            $applicant->application_id = Str::random(10);
            $applicant->save();

            return response()->json($applicant);
        }
    }
}
