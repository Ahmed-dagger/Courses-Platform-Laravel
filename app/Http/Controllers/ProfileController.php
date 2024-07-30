<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Academy;
use Illuminate\Http\Request;
use App\Models\Course;

class ProfileController extends Controller
{
    public function Profile()
    {
        return view("Profile",['courses' => Course::all()]);
    }

    public function configureProfile(Academy $academy)
    {
        return view('Configure',compact('academy'));
    }

    public function User() 
    {
        return view('ProfileUser');
    }
 
    public function updateinfoAcademy(Academy $academy) 
    {
        
        request()->validate([
            'academyType'=> 'required|min:3|max:80',
            'academyName'=> 'required|min:3|max:255',
        ]);

    }
}
