<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\userAuth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserAuthFormController extends Controller
{
    public function FormStore(Request $request)
    {
        $validated = $request->validate([
            'Fullname' => 'required|string|max:255|min:3',
            'userstatus' => 'required|string|in:Graduate,Student',
            'specialization' => 'required|string|max:255|min:3',
            'subspecialty' => 'required|string|max:255|min:3',
            'university' => 'required|string|max:255|min:3',
            'graduationDate' => 'required|date',
            'rate' => 'required',
            'systemUsage' => 'required|string|in:Training,Work,Volunteer',
            'Trainingusage' => 'nullable|string|in:HeadTraining,SummerTraining,Sessions,Senior',
            'files' => 'nullable|file|mimes:jpg,jpeg,png,pdf,doc,docx',
        ]);

        $filePath[] = [];

        if ($request->has('files')) {
            $filePath = $request->file('files')->store('profile','public');
            $validated['files'] =  $filePath;
            
        };
        
        $userAuth = userAuth::create([
            'fullname' => $request->input('Fullname'),
            'userStatus' => $request->input('userstatus'),
            'specialization' => $request->input('specialization'),
            'subspeciality' => $request->input('subspecialty'),
            'university' => $request->input('university'),
            'graduationDate' => $request->input('graduationDate'),
            'rate' => $request->input('rate'),
            'systemUsage' => $request->input('systemUsage'),
            'systemUsageTraining' => $request->input('Trainingusage'),
            'file_paths' => json_encode($filePath),
        ]);

        $userAuth->save();

        $user = Auth::user();

        if($user instanceof User) {
            $user->first_login = false;
            $user->save();
            return redirect()->route('UserProfile')->with('success', '');
        }




        
    }
}
