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
        /*
        $course = new Course([
            'name' => 'Angular2020',
            'price' => '50',
        ]);
        $course->save();

        */

        $coursesCount = Course::count();

        
        

        return view('courses', ['courses' => Course::orderBy("created_at","desc")->paginate(4)],compact('coursesCount'));
    }

    public function Coursepage($id)
    {
        
        $course = Course::findOrFail($id);
        
        return view('CoursePage', compact('course'));
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
            'name' => $validated['CourseName'],
            'price' => $validated['Price'],
            'courseLanguage' => $validated['courseLanguage'],
            'courseType' => $validated['courseType'],
            'courseLocation' => $validated['courseLocation'],
            'CoursesDate' => $validated['CoursesDate'],
            'courseLevel' => $validated['courseLevel'],
        ]);

        $course->save();
        return redirect()->route('AddingCourses')->with('success','');

    }
}
