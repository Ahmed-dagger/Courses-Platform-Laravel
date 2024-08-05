<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Academy;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\User;
use PharIo\Manifest\Email;

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

    public function User(User $user) 
    {
        $user = User::findOrFail(auth()->id());
        return view('ProfileUser',compact('user'));
    }
 
    public function updateinfoAcademy(Academy $academy) 
    {
        
        request()->validate([
            'academyType'=> 'required|min:3|max:80',
            'academyName'=> 'required|min:3|max:255',
        ]);

    }

    public function UserConfigure(User $user)
    {
        $user = User::findOrFail(auth()->id());
        return view('ConfigureUser',compact('user'));
    }

    public function upadate(Request $request,$id)
    {
        
        $user = User::findOrFail(auth()->id());

        $validated = $request->validate([
            'username'=> 'required|min:3|max:40',
            'phone'=> 'nullable|regex:/(01)[0-9]{9}/',
            'imageUpload'=> 'nullable|image',
        ]);

        if($request->has('imageUpload'))
        {
            $imagePath = $request->file('imageUpload')->store('profileimage','public');
            $validated['imageUpload'] = $imagePath;
        }

        
        $user = User::findOrFail($id);

        $updateData = [];

        $updateData = [
            'name' => $validated['username'],
        ];

        if(isset($validated['phone']))
        {
           $updateData['phone'] = $validated['phone'];
           //array_push($updateData['phone'], $validated['phone']);

        }

        if (isset($validated['imageUpload'])) {
           $updateData['image_paths'] = json_encode($validated['imageUpload']);
           //array_push($updateData['imageUpload'], json_encode($validated['imageUpload']));
        }

        /*
        $user->update([
            'name'=> $validated['username'],
            'email'=> $validated['email'],
            'phone'=> $validated['phone'],
            'image_paths'=> json_encode($imagePath),
        ]);
*/


        $user->update($updateData);
        $user->save();

        $updateData = [];

        return redirect()->route('UserProfile')->with('success','Updated Successfully');
        
    }
}
