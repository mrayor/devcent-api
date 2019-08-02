<?php

namespace App\Http\Controllers;

use App\Mail\ApplicantMail;
use Illuminate\Http\Request;
use App\Applicant;
use Validator;
use Illuminate\Support\Facades\Mail;

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
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'payment_mode' => 'required',
            'course_id' => 'required',
            'course_name' => 'required|max:255',
            'amount_due' => 'required',
            'application_id' => 'unique:applicants'
        ]);

        if ($validator->fails()) {

            $response = array('response' => $validator->messages(), 'success' => false);
            return $response;
        } else {
            $applicant = new Applicant;
            $applicant->first_name = $request->first_name;
            $applicant->last_name = $request->last_name;
            $applicant->email = $request->email;
            $applicant->phone = $request->phone;
            $applicant->payment_mode = $request->payment_mode;
            $applicant->course_id = $request->course_id;
            $applicant->course_name = $request->course_name;
            $applicant->amount_due = $request->amount_due;
            $applicant->application_id = mt_rand(1000, 100000);
            $applicant->save();

            Mail::to([$applicant->email])->send(new ApplicantMail($applicant));

            return response()->json(['message' => 'Application Successful', 'applicant' => $applicant]);
        }
    }
}
