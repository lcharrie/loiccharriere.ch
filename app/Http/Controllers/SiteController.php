<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
    * Show the welcome page.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function welcome()
    {
        return view('welcome');
    }

    /**
    * Show the resume page.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function resume()
    {
        return view('resume');
    }

}
