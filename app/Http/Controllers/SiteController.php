<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    /**
    * Returns a compiled PDF of the requested resume's version.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function pdf($version)
    {
        switch ($version) {
            case 'dark':
                $file = Storage::disk('local')->get('resume/LOIC-CHARRIERE_resume_dark.pdf');
                break;
            case 'light':
                $file = Storage::disk('local')->get('resume/LOIC-CHARRIERE_resume_light.pdf');
                break;
            case 'classic':
                $file = Storage::disk('local')->get('resume/LOIC-CHARRIERE_resume_classic.pdf');
                break;
            default:
                abort(404);
                break;
        }

        return Response($file, 200)->header('Content-Type', 'application/pdf');
    }

}
