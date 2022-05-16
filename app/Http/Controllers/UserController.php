<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        return view("regular.index");
    }
    public function about()
    {
        return view("regular.about");
    }
    public function courses()
    {
        return view("regular.courses");
    }
    public function testimonial()
    {
        return view("regular.testimonial");
    }
    public function our_team()
    {
        return view("regular.team");
    }
    public function contact_us()
    {
        return view("regular.contact-us");
    }
    public function account()
    {
        $role = Auth::user()->role;
        switch ($role) {
            case 0:
                return view("regular.account");
                break;
            case 1:
                return 'Former panel';
                break;
            case 2:
                return "Admin Panel";
                break;
            default:
                return 'simple user';
                break;
        }
    }
}
