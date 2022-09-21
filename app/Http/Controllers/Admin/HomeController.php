<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

                //Get authenticated user
                $user = Auth::user();

                //Get authenticated user'sID
                $id = Auth::id();


                return view('admin.home', ['id' => $id, 'user' => $user]);

    }
}
