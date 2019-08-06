<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\CourseOutline;
use App\Category;

class CoursesController extends Controller
{
    public function index()
    {

        $courses = Course::with('category')->get();
        return response()->json($courses);
    }

    public function course($id)
    {
        $course = Course::where('id', $id)->get()->first();
        return response()->json($course);
    }
    public function outline($id)
    {
        $outline = CourseOutline::where('course_id', $id)->with('course')->get();
        return response()->json($outline);
    }

    public function categories()
    {
        $categories = Category::all();
        return response()->json($categories);
    }


    //testing
    // public function search(Request $request)
    // {
    //     $data = $request->get('data');
    //     $search = Course::where('category_id', 'like', "%{$data}%")->get();
    //     return response()->json($search);
    // }


    // public function outline()
    // {
    //     $outline = CourseOutline::with('course')->get();
    //     return response()->json($outline);
    // }
}
