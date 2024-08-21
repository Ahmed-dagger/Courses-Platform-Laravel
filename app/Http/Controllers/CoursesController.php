<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CoursesController extends Controller
{
    public function Courses()
    {
        $coursesCount = Course::count();

        $courses = Course::orderBy("created_at","desc");

        if(request()->has("search")){

            $courses = $courses->where("name","LIKE","%".request()->search."%");
        }

        $courses = $courses->paginate(4);

        if (request()->ajax()) {
            return response()->json([
                'courses' => view('partials.course_list', compact('courses'))->render(),
                'coursesCount' => $coursesCount
            ]);
        }
        
        return view('courses', compact('courses','coursesCount'));
    }

    public function Coursepage($id)
    {
        
        $course = Course::findOrFail($id);
        $Ownername = $course->owner-> Owner_name;

        return view('CoursePage', compact('course','Ownername'));
    }

    public function AddingCourses()
    {
        return view('AddingCourses');
    }

    public function Add()
    {
        $validated = request()->validate([
            'CourseName' => 'required|min:3|max:40',
            'Price' => 'required',
            'courseLanguage'=> 'required|in:English,Arabic',
            'courseType'=> 'required|in:Offline,Online,Hybrid',
            'courseLocation'=> 'required',
            'CoursesDate'=> 'required|date',
            'courseLevel'=> 'required|in:Begginer,Intermediate,Advanced',
            
        ]);

        $course = Course::create([
            'owner_id'=> auth()->guard('owner')->user()->id,
            'name' => $validated['CourseName'],
            'price' => $validated['Price'],
            'courseLanguage' => $validated['courseLanguage'],
            'courseType' => $validated['courseType'],
            'courseLocation' => $validated['courseLocation'],
            'CoursesDate' => $validated['CoursesDate'],
            'courseLevel' => $validated['courseLevel'],
        ]);

        $course->save();
        return redirect()->route('AcademyProfile')->with('success','');

    }
}
