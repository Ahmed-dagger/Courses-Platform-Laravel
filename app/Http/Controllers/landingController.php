<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class landingController extends Controller
{
 

    public function Landing(){
        $subs = [
            [
                'name' => 'submenu1',
                'index' => 0
            ],
            [
                'name' => 'submenu2'
            ],
            [
                'name' => 'submenu3'
            ]
        ];
        return view('home', ['Submenus' => $subs]);
    }
}
