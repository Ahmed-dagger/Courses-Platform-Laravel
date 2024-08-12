<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Academy;
use App\Models\Owner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

class AuthController extends Controller
{
    public function CheckUser()
    {
        return view('Auth.CheckUserType');
    }

    public function LoginAcademy()
    {
        return view('Auth.LoginAcademy');
    }
    public function registerAcademy()
    {
        return view('Auth.registerAcademy');
    }
    public function login()
    {
        return view('Auth.login');
    }

    public function register()
    {
        return view('Auth.register');
    }

    public function FormAuthUSer()
    {
        return view('Auth.FormAuthUser');
    }

    public function store()
    {
        $validated = request()->validate([
            'username' => 'required|min:3|max:40',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed',
            'phone' => 'required|regex:/(01)[0-9]{9}/',
        ]);

        $user = User::create([
            'name' => $validated['username'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'phone' => $validated['phone'],
        ]);

        $user->save();
        $user->sendEmailVerificationNotification();

        return redirect()->route('verification.notice');
    }

    public function EmailVerifyView()
    {
        return view('Auth.VerfiyEmail');
    }

    public function EmailVerify(EmailVerificationRequest $request)
    {
        $request->fulfill();
        return redirect()->route('FormAuth')->with('verified', '');
    }

    public function sendVerificationEmail(Request $request)
    {
        $request->user()->sendEmailVerificationNotification();

        return redirect()->route('verification.notice')->with('message', 'Verification link sent!');
    }

    public function Ownerstore()
    {
        $validated = request()->validate([
            'ownername' => 'required|min:3|max:40',
            'email' => 'required|email|unique:owners,Owner_email',
            'password' => 'required|confirmed',
            'phone' => 'required|regex:/(01)[0-9]{9}/',
            'academyname' => 'required|min:3|max:40',
            'academytype' => 'required|min:3|max:80',
        ]);

        $owner = Owner::create([
            'Owner_name' => $validated['ownername'],
            'Owner_email' => $validated['email'],
            'Owner_password' => Hash::make($validated['password']),
            'Owner_phone' => $validated['phone'],
            'academy_name'=> $validated['academyname'],
            'academy_type'=> $validated['academytype'],
        ]);
        

        $owner->save();

        return redirect()->route('loginAcademy')->with('success', '');
    }
    public function auhtnitcate()
    {
        $validated = request()->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($validated)) {
            $user = Auth::user();

            if($user instanceof User) {

                if ($user->first_login) {

                    request()->session()->regenerate();
                    return redirect()->route('FormAuth');

                    
                    
                }
    
                return redirect()->intended('UserProfile');

            }

            
        }

        return redirect()
            ->route('login')
            ->withErrors([
                'email' => 'Email and password may not right',
            ]);

    }

    public function Academyauhtnitcate()
    {
        $validated = request()->validate([
            'Owner_email' => 'required|email',
            'Owner_password' => 'required',
        ]);
        

        if (
            Auth::guard('owner')->attempt([
                'owner_email' => $validated['Owner_email'],
                'password' => $validated['Owner_password'],
            ])
        ) {
            request()->session()->regenerate();
            return redirect()->route('AcademyProfile');
        }

        

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
        
    }

    public function Academylogout()
    {
        Auth::guard('owner')->logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect()->route('home');
    }
    public function logout()
    {
        auth()->logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect()->route('home');
    }
}
